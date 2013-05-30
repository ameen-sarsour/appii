<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List User','url'=>array('index')),
	array('label'=>'Create User','url'=>array('create')),
	array('label'=>'Update User','url'=>array('update','id'=>$model->Id)),
	array('label'=>'Delete User','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User','url'=>array('admin')),
);
?>

<h1>View User #<?php echo $model->Id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'pretty_name',
		'email',
		'created_at',
		'last_login',
		'updated_at',
		'validation_key',
		'subscripe',
		'facebook_id',
		'google_id',
		'twitter',
	),
)); ?>
