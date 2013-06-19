<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List User','url'=>array('index')),
	array('label'=>'Create User','url'=>array('create')),
	array('label'=>'View User','url'=>array('view','id'=>$model->Id)),
	array('label'=>'Manage User','url'=>array('admin')),
);
?>

<h1>Update User <?php echo $model->Id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>