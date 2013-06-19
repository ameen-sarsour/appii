<?php
$this->breadcrumbs=array(
	'Captions'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Caption','url'=>array('index')),
	array('label'=>'Create Caption','url'=>array('create')),
	array('label'=>'Update Caption','url'=>array('update','id'=>$model->cid)),
	array('label'=>'Delete Caption','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->cid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Caption','url'=>array('admin')),
);
?>

<h1>View Caption #<?php echo $model->cid; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'cid',
		'id',
		'parent_id',
		'page_id',
		'title',
		'has_child',
		'level',
	),
)); 


?>


<?php


	$criteria=new CDbCriteria;
	$criteria->compare('id',210);
	$pages = Page::model()->find($criteria) ;		
	var_dump($pages->_attributes) ;



 ?>
