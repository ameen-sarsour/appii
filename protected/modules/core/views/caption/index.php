<?php
$this->breadcrumbs=array(
	'Captions',
);

$this->menu=array(
	array('label'=>'Create Caption','url'=>array('create')),
	array('label'=>'Manage Caption','url'=>array('admin')),
);
?>

<h1>Captions</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
