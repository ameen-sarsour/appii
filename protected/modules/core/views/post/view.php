<?php
$this->breadcrumbs=array(
	$model->title,
);
$this->pageTitle=$model->title;

Yii::app()->clientScript->registerScriptFile('/js-gcp/run_prettify.js?lang=php');
?>
<div class='row span11' > 
	<div class=" span8">	

		<div class="title ">

			<h1>

				<?php echo CHtml::link(CHtml::encode($model->title), $model->url); ?>
			
			

		</h1 >
<br/>
			
		</span>

		</div>
		
		
		
		<div class="content"> 	<?php echo $model->content; ?> </div>
		
	</div>
	<div class='span2' >
		<span class=' buttons' >
				<i class='icon-thumbs-up' onclick=<?php echo Yii::app()->user->isGuest?    '': CHtml::ajax( array( 'url'=>'/post/like' , 'data' => array('id' => $model->id) , 'update'=>'#likeLabel-'. $model->id  )) ; ?> > </i>
				<span  id='likeLabel-<?php echo $model->id ;?>' >  <?php 		echo sizeof($model->postLikes ) ; ?> </span>
				
				<i class='icon-thumbs-down ' onclick=<?php echo Yii::app()->user->isGuest?    '':CHtml::ajax( array( 'url'=>'/post/dislike'  ,'data' => array('id' => $model->id) , 'update'=>'#dislikeLabel-'.$model->id )) ;  ?> > </i>
				<span id='dislikeLabel-<?php echo $model->id ;?>'  > <?php 		echo sizeof($model->postDisLikes ) ; ?></span>
			<br/>
		<?php echo 'بلوحة مفاتيح ' .$model->author->pretty_name ; ?>
		<br/>
			<?php echo 'في يوم ' .  date('Y-m-j',$model->create_time); ?>
		<br />
		<div class="nav">
			<b>الأوسمة:</b>
			<?php echo implode(', ', $model->tagLinks); ?>
			<br/>
			<?php echo CHtml::link("التعليقات ({$model->commentCount})",$model->url.'#comments'); ?> 
			<br />
			اخر تحديث في <?php echo date('j-m-Y',$model->update_time); ?>
		</div>
		
	</div>
	<br/>

</div>

<br />
<hr />

<div id="comments">
	<?php if($model->commentCount>=1): ?>
		<h3>
			<?php echo $model->commentCount>1 ? $model->commentCount . ' التعليقات' : 'تعليق واحد'; ?>
		</h3>

		<?php $this->renderPartial('_comments',array(
			'post'=>$model,
			'comments'=>$model->comments,
		)); ?>
	<?php endif; ?>

	<h3>Leave a Comment</h3>

	<?php if(Yii::app()->user->hasFlash('commentSubmitted')): ?>
		<div class="flash-success">
			<?php echo Yii::app()->user->getFlash('commentSubmitted'); ?>
		</div>
	<?php else: ?>
		<?php $this->renderPartial('/comment/_form',array(
			'model'=>$comment,
		)); ?>
	<?php endif; ?>

</div><!-- comments -->
