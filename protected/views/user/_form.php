<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'created_at',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'login_name',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->textFieldRow($model,'pretty_name',array('class'=>'span5','maxlength'=>64)); ?>

	<?php echo $form->passwordFieldRow($model,'password',array('class'=>'span5','maxlength'=>16)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>64)); ?>

	<?php echo $form->textFieldRow($model,'avatar_path',array('class'=>'span5','maxlength'=>64)); ?>

	<?php echo $form->textFieldRow($model,'clearance',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'mobile',array('class'=>'span5','maxlength'=>16)); ?>

	<?php echo $form->textFieldRow($model,'activation_code',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->textFieldRow($model,'activation_type',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'last_login_at',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
