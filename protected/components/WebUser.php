<?php
class WebUser extends CWebUser {
	private $_model;
	


	function getModel() {
		return $this->loadUser(Yii::app()->user->id);
	}

	public function authenticate($id) {
		if($id=='google'){
			if(!isset(Yii::app()->session['access_token' ])) $google_info = $this->storeAccesstocken() ;
			$google_info = $this->getGoogleInfo();
			$google_id = $google_info ->id;
			$user = User::model()->find("google_id =?" , array( "109592823123620610819" ) );

			if(!isset($user)) { echo 'fff';
				$user = new User();
				$user->google_id  = $google_id  ;
				$user->pretty_name = $google_info->name;
				$user->email = $google_info->email;
				print_r($user->save());
				print_r($user->getErrors ());
			}
			$duration= 3600*24*30 ; // 30 days
			$this->allowAutoLogin = true;
			$UserIdentity = new UserIdentity($user->pretty_name  , Yii::app()->session['access_token' ] );

			Yii::app()->user->login($UserIdentity,$duration);
			header ('Location: /');
		}

	}

	public function storeAccesstocken(){
		$client_id = Yii::app()->params->google['client_id'];
		$client_secret = Yii::app()->params->google['client_secret'];
		$redirect_url= Yii::app()->params->google['redirect_url']; 
		if (isset($_GET['code'])) {
			$code = $_GET['code'];
			$url = 'https://accounts.google.com';
			$post_data = 'grant_type=authorization_code&code='. $code. '&client_id='.$client_id.'&client_secret='.$client_secret.'&redirect_uri='.$redirect_url;
			$http_request = new HttpClient();
			$response = $http_request ->post($url.'/o/oauth2/token' , $post_data ) ; 
			$response =   json_decode ( $response[1] );

			$access_token = $response->access_token ;
			Yii::app()->session['access_token' ] = $access_token ; 
			return $access_token  ;

		} else {
			$authUrl = 'https://accounts.google.com/o/oauth2/auth?redirect_uri='.$redirect_url.'&response_type=code&client_id='.$client_id .'&approval_prompt=force&scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile';
			header ('Location: '.$authUrl);
			exit;
		}
	}
	public function getGoogleInfo(){
		$key = Yii::app()->params->google['key']; 

		$access_token = Yii::app()->session['access_token' ]  ;
		$url = 'https://www.googleapis.com/oauth2/v2/userinfo?key='.$key.'&access_token='.$access_token;
		$http_request = new HttpClient();
		$output = $http_request ->get($url )[1] ; 
		$output = json_decode($output);
		return $output;
	}
}
