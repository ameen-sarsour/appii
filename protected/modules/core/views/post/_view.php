<hr/>

<div class="post span10 ">	
	<div class="title span4">
		<span class=' ' >
			<?php echo CHtml::link(CHtml::encode($data->title), $data->url); ?>
		</span >
		<br/> بلوحة مفاتيح <?php  echo $data->author->pretty_name . ' في ' .
 Yii::app()->dateFormatter->format('EEE، d LLLL، yyyy ' ,$data->create_time); ?>
	
	</div>
	<div class=span1 >  بتاريخ <br /> <?php 


echo Yii::app()->dateFormatter->format('EEE، d LLLL، yyyy ', $data->update_time); ?> </div>
		<div class='span1' >
			<b>الأوسمة:</b>   <br />
			<?php echo implode(', ', $data->tagLinks); ?>
			
			
		</div>
		<div class='span1 visible-desktop hidden-phone' >التعليقات <br />
			<?php echo $data->commentCount ; // CHtml::link(" ({$data->commentCount})",$data->url.'#comments'); ?> 
		</div >

		<div class='span1 visible-desktop' >
			<b> الشعبية</b>   <br />
			<?php echo $data->popularity() ; ?> 
		</div >
	

</div>
<br/>
