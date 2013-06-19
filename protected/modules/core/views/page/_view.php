<?php
/* @var $this PageController */
/* @var $data Page */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('x_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->x_id), array('view', 'id'=>$data->x_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::encode($data->id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('caption_id')); ?>:</b>
	<?php echo CHtml::encode($data->caption_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('number')); ?>:</b>
	<?php echo CHtml::encode($data->number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('part')); ?>:</b>
	<?php echo CHtml::encode($data->part); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hadith')); ?>:</b>
	<?php echo CHtml::encode($data->hadith); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('content_plain')); ?>:</b>
	<?php echo CHtml::encode($data->content_plain); ?>
	<br />

	*/ ?>

</div>