<?php
$this->breadcrumbs=array(
	'Captions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Caption','url'=>array('index')),
	array('label'=>'Manage Caption','url'=>array('admin')),
);
?>

<h1>Create Caption</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>