<?php

class ElasticCommand extends CConsoleCommand {
	const LOG = 'elastic';
  public $mongodb = 'trackerdb';

	public function actionCreate($type = null) {
		try { Yii::app()->elastic->create($type); } catch (Exception $e) { echo $e->getMessage(), PHP_EOL; }
	}

	public function actionDelete($type = null) {
    try { Yii::app()->elastic->delete($type); } catch (Exception $e) { echo $e->getMessage(), PHP_EOL; }
	}

	public function actionMap($type) {
		$mapping = include(dirname(__FILE__) . "/../config/{$type}_mapping.php");
		try { Yii::app()->elastic->map($type, $mapping); } catch (Exception $e) { echo $e->getMessage(), PHP_EOL; }
	}

	public function actionSearch($type, $term) {
    try { $response = Yii::app()->elastic->search($type, $term); } catch (Exception $e) { echo $e->getMessage(), PHP_EOL; }
		echo $response, PHP_EOL;
	}

	public function actionImport($type, $incremental = 1) {
		//MongoCursor::$timeout = -1;
		//MongoCursor::$slaveOkay = true;
		$counter = 0;
		$mapping = include(dirname(__FILE__) . "/../config/{$type}_mapping.php");
		while(true){
			$progress = 0;
			$time1 = microtime(true);

  		//$cursor = Yii::app()->{$this->mongodb}->$type->find($criteria)->limit(10000)->skip($counter);
      $curosor = {$type}::model()->findAll();

			$docs = array();
			foreach ($cursor as $doc) {
				try {
					$data = Elastic::mapData($mapping,$doc);
          $data['_id'] = $doc['_id'];
          $docs [] = $data;

					$counter++;
					$progress++;
					if($incremental)
					if($counter % 5000 == 0) {
						$time2 = microtime(true);
            Yii::app()->elastic->import($type, $docs);
						echo "Time to prepare " . ($time2-$time1) . " Time to push " . (microtime(true) - $time2) , PHP_EOL;
						$docs = array();
						echo "Completed processing $counter", PHP_EOL;
					}
				} catch (Exception $e) {
					print_r($doc);
					throw $e;
				}
			}

			if ($docs) {
				echo "Processing less than 5000 $progress";
            Yii::app()->elastic->import($type, $docs);
				$docs = array();
			}

			echo "Processed $progress items\n";
		}

	}

}
