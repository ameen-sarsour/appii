<hr/>

<div class="post span10 ">	
	<div class="title span4">
		<span class=' ' >
			<?php echo CHtml::link(CHtml::encode($data->title), $data->url); ?>
		</span >
		<br/> بلوحة مفاتيح <?php  echo $data->author->pretty_name . ' في ' . date('j-m-Y',$data->create_time); ?>
	
	</div>
	<div class=span1 >  بتاريخ <br /> <?php echo date('j-m-Y',$data->update_time); ?> </div>
	<div class="nav span3">
		<span class=span1 >
			<b>الأوسمة:</b>   <br />
			<?php echo implode(', ', $data->tagLinks); ?>
			
			
		</span>
		<span class=span1>التعليقات <br />
			<?php echo $data->commentCount ; // CHtml::link(" ({$data->commentCount})",$data->url.'#comments'); ?> 
		</span>

		<span class=>
			<b> الشعبية</b>   <br />
			<?php echo $data->popularity() ; ?> 
		</span>
		
	</div>

</div>
<br/>
<hr/>
