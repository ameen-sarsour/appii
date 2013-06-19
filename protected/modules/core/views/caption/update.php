<?php
$this->breadcrumbs=array(
	'Captions'=>array('index'),
	$model->title=>array('view','id'=>$model->cid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Caption','url'=>array('index')),
	array('label'=>'Create Caption','url'=>array('create')),
	array('label'=>'View Caption','url'=>array('view','id'=>$model->cid)),
	array('label'=>'Manage Caption','url'=>array('admin')),
);
?>

<h1>Update Caption <?php echo $model->cid; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>