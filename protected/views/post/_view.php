<div class="post well">	
	<div class="title ">
		<span class=' ' >
			<?php echo CHtml::link(CHtml::encode($data->title), $data->url); ?>
		</span >
<br/>
		<span class=' buttons' >
		<i class='icon-thumbs-up' onclick=<?php echo Yii::app()->user->isGuest?    '': CHtml::ajax( array( 'url'=>'/post/like' , 'data' => array('id' => $data->id) , 'update'=>'#likeLabel-'. $data->id  )) ; ?> > </i>
		<span  id='likeLabel-<?php echo $data->id ;?>' >  <?php 		echo sizeof($data->postLikes ) ; ?> </span>
		
		<i class='icon-thumbs-down ' onclick=<?php echo Yii::app()->user->isGuest?    '':CHtml::ajax( array( 'url'=>'/post/dislike'  ,'data' => array('id' => $data->id) , 'update'=>'#dislikeLabel-'.$data->id )) ;  ?> > </i>
		<span id='dislikeLabel-<?php echo $data->id ;?>'  > <?php 		echo sizeof($data->postDisLikes ) ; ?></span>

	</span>

	</div>
	<div class="author">
		 كتبت بواسطة <?php  echo $data->author->pretty_name . ' في ' . date('j-m-Y',$data->create_time); ?>
	</div>
	<div class="content">
		<?php
			 echo $data->content;
		?>
	</div>
	<div class="nav">
		<b>الأوسمة:</b>
		<?php echo implode(', ', $data->tagLinks); ?>
		<br/>
		<?php echo CHtml::link("التعليقات ({$data->commentCount})",$data->url.'#comments'); ?> |
		اخر تحديث في <?php echo date('j-m-Y',$data->update_time); ?>
	</div>
</div>
