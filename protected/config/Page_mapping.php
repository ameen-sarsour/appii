<?php 
return array(
	'id'=> array('type'=>'integer') ,  	
	'number' => array('type'=>'integer') ,
	'part' => array('type'=>'integer') ,
	'hadith' => array('type'=>'integer') ,
	'content' =>array('type'=>'string', 'index' => 'analyzed' ,'index_analyzer'=>'arabic' ,'search_analyzer'=>'arabic'),
);
