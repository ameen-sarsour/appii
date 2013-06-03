<div class="post well">

	<div class="title ">
		<span class=' span1' >
			<?php echo CHtml::link(CHtml::encode($data->title), $data->url); ?>
		</span >

		<span class=' offset1 buttons' >
		<i class='icon-thumbs-up' onclick=<?php echo CHtml::ajax( array( 'url'=>'/post/like' , 'data' => array('id' => $data->id) , 'update'=>'#likeLabel' )) ; ?> > </i>
		<span  id='likeLabel' >  <?php 		echo sizeof($data->postLikes ) ; ?> </span>
		
		<i class='icon-thumbs-down ' onclick=<?php echo CHtml::ajax( array( 'url'=>'/post/dislike'  ,'data' => array('id' => $data->id) , 'update'=>'#dislikeLabel' )) ;  ?> > </i>
		<span id='dislikeLabel'  > <?php 		echo sizeof($data->postDisLikes ) ; ?></span>

	</span>

	</div>
	<div class="author">
		posted by <?php // echo $data->author->username . ' on ' . date('F j, Y',$data->create_time); ?>
	</div>
	<div class="content">
		<?php
			// $this->beginWidget('CMarkdown', array('purifyOutput'=>true));
			// echo $data->content;
			// $this->endWidget();
		?>
	</div>
	<div class="nav">
		<b>Tags:</b>
		<?php echo implode(', ', $data->tagLinks); ?>
		<br/>
		<?php echo CHtml::link('Permalink', $data->url); ?> |
		<?php echo CHtml::link("Comments ({$data->commentCount})",$data->url.'#comments'); ?> |
		Last updated on <?php echo date('F j, Y',$data->update_time); ?>
	</div>
</div>
