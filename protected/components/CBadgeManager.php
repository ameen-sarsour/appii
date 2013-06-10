<?php

class CBadgeManager extends CComponent  {
    private $actions = array();
    private $badges = array();

    function init() {
        $db = Yii::app()->mongodb->badges->findOne() ; 
        $variable = $db['badges'] ; 
        foreach ($variable as $value)  $this->badges[ $value['name'] ]  = $value['score'];

        unset($variable);
        $variable = $db['actions'] ; 
        foreach ($variable as $value) $this->actions[$value['_id']] = $value['score'] ;
    }
    
    public function log ($action  ,  $user_id , $user_score , $on , $on_id ){
        $badge = new BadgeLog()
        $badge->setAttributes( array( 
            'action' => $action ,
            'user_id'=>  $user_id ,
            'action_score' =>$this->actions[$action] ,
            'time'=>new MongoDate() ,
            'user_score'=> $user_score ,   
            'on'=> $on ,
            'on_id'=>$on_id ,
        ));
        $badge->save();
    }

    public function addScore($action , $user_id , $on , $on_id ){
        $db = Yii::app()->mongodb->badges->findOne() ; 
        $user_score = $db['users'][$user_id] + $this->actions[$action] ;
        $db['users'][$user_id] = $user_score ;
        Yii::app()->mongodb->badges->update(array('_id' =>$db['_id']) , $db);
    	$this->log( $action  ,  $user_id , $user_score , $on , $on_id   );
    }

     public function setUserScore($score , $user_id){
        $db = Yii::app()->mongodb->badges->findOne() ; 
        $db['users'][$user_id] = $uscore ;
        Yii::app()->mongodb->badges->update(array('_id' =>$db['_id']) , $db);
    }

    public function initUser($user_id){
        $db = Yii::app()->mongodb->badges->findOne() ; 
        if(isset($db['users'][$user_id])) return false;
        else $db['users'][$user_id] = 1 ;
        Yii::app()->mongodb->badges->update(array('_id' =>$db['_id']) , $db);
    }

    public function getUserBadge( $user_id){
        $db = Yii::app()->mongodb->badges->findOne() ;
	if(!isset($db['users'][$user_id] ) ) {
		$this->initUser ($user_id) ;
		$db = Yii::app()->mongodb->badges->findOne() ;
	}
        $user_score = $db['users'][$user_id] ;
        $tempScore =  0;
        $badge = '';
        foreach ($this->badges as $key => $value) {
            if($value < $user_score  && $tempScore <=$value  ){$badge=$key; $tempScore=$value  ;}
        }
        return $badge ;
    }

    public function getUserScore( $user_id){
        $db = Yii::app()->mongodb->badges->findOne() ; 
        $user_score = $db['users'][$user_id] ;
        if(isset($user_score)) return $user_score;
        return  0;
        
    }
}
