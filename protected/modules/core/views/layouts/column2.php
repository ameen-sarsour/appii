<div  class=span12 >
	<?php /* @var $this Controller */ ?>
	<?php $this->beginContent('//layouts/main'); ?>
	<div class="span10">
		<div id="content">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
	<div class="span1 last">
		<div id="sidebar">
		<?php
                   if(!Yii::app()->user->isGuest ) {
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'إدارة',
			));	
			$this->widget('zii.widgets.CMenu', array(

				'items'=> array(array( 'label'=>'المدخلات', 'url'=> '/post/admin' ),array( 'label'=> 'التعليقات' , 'url' => '/comment/'  ),array( 'label'=> 'المستخدمون' , 'url' => '/user/admin'  ) ),
				'htmlOptions'=>array('class'=>'إدارة'),
			));
			$this->endWidget();
		}
		?>
		</div><!-- sidebar -->
	</div>
	<?php $this->endContent(); ?>

</div>
