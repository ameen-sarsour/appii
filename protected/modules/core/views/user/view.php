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

<?php


$roles =  CHtml::dropDownList('country_id',$model->getRole(),User::getRolesList(),
array(
'ajax' => array(
'type'=>'POST', //request type
'url'=>CController::createUrl('user/setrole'), //url to call.
//Style: CController::createUrl('currentController/methodToCall')
'update'=>'#city_id', //selector to update
'data'=>array('data'=> 'js: jQuery("#country_id option:selected").val()' , 'user_id'=>$model->Id  ),
//leave out the data key to pass all form values through
))); 


 $this->widget('bootstrap.widgets.TbDetailView',array(
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
		//array(  'name'=>  'Role', 'value' => $model->getRole()) ,
		array(  'name'=>  'Change' , 'value' =>$roles , 'type'=>'raw')  ,
		

	),
)); 


 


?>
