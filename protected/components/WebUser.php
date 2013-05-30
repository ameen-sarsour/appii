<?php
class WebUser extends CWebUser {
	private $_model;
	


	function getModel() {
		return $this->loadUser(Yii::app()->user->id);
	}

	public function authenticate($id) {
		$access_token   = null;
		$use = null;
		if($id=='google'){
			if(!isset(Yii::app()->session['access_token' ])) $google_info = $this->storeAccesstocken('google') ;

			$key= Yii::app()->params->google['key']; 
			$access_token =  Yii::app()->session['access_token' ] ;

			$google_info = $this->getUserInfo('https://www.googleapis.com/oauth2/v2/userinfo' ,'key='.$key.'&access_token='.$access_token);
			$google_id = $google_info ->id;
			$user = User::model()->find("google_id =?" , array( "109592823123620610819" ) );

			if(!isset($user)) { 
				$user = new User();
				$user->google_id  = $google_id  ;
				$user->pretty_name = $google_info->name;
				$user->email = $google_info->email;
				print_r($user->save());
				print_r($user->getErrors ());
			}
		}
		else if($id=='facebook'){
			if(!isset(Yii::app()->session['access_token' ])) $google_info = $this->storeAccesstocken('facebook') ;
			echo Yii::app()->session['access_token' ];
			$facebook_info = $this->getUserInfo('https://graph.facebook.com/me' ,'access_token='.Yii::app()->session['access_token' ]);
			
			if(!isset($user)) { 
				$user = new User();
				$user->facebook_id  = $facebook_info ->id  ;
				$user->pretty_name = $facebook_info ->name;
				$user->email = $facebook_info ->email;
				print_r($user->save());
				print_r($user->getErrors ());
			}

		}
			$duration= 3600*24*30 ; // 30 days
			$this->allowAutoLogin = true;


			$UserIdentity = new UserIdentity($user->pretty_name ,$access_token   );

			Yii::app()->user->login($UserIdentity,$duration);
					header ('Location: /'); exit;

		
	}

	public function storeAccesstocken($network){
		if($network == 'google') {
			$client_id = Yii::app()->params->google['client_id'];
			$client_secret = Yii::app()->params->google['client_secret'];
			$redirect_url= Yii::app()->params->google['redirect_url']; 
			$scope= Yii::app()->params->google['scope']; 

			$url = 'https://accounts.google.com/o/oauth2/token';		
			$authUrl = 'https://accounts.google.com/o/oauth2/auth?redirect_uri='.$redirect_url.'&response_type=code&client_id='.$client_id .'&approval_prompt=force&scope=' . $scope;

			if (isset($_GET['code'])) {
				$code = $_GET['code'];
				$post_data = 'grant_type=authorization_code&code='. $code. '&client_id='.$client_id.'&client_secret='.$client_secret.'&redirect_uri='.$redirect_url;
				$http_request = new HttpClient();
				$response = $http_request ->post($url, $post_data ) ; 
	  			$json = json_decode ( $response[1] ) ;
	  			$access_token = '';
				if(isset($json ) ){
					$access_token =   json_decode ( $response[1] )->access_token ;
				} else {
					parse_str($response[1]) ;
				}

				Yii::app()->session['access_token' ] = $access_token ; 
				return $access_token  ;

			} else {
				header ('Location: '.$authUrl);
				exit;
			}
		}else	if($network == 'facebook') {
			$scope= Yii::app()->params->facebook['scope']; 
			$client_id = Yii::app()->params->facebook['client_id'];
			$client_secret = Yii::app()->params->facebook['client_secret'];
			$redirect_url= Yii::app()->params->facebook['redirect_url']; 
			$url = 'https://www.facebook.com/dialog/oauth?&scope=' . $scope  ;
			$authUrl = $url ."&app_id=$client_id&redirect_uri=$redirect_url" ;

			$url = "https://graph.facebook.com/oauth/access_token?client_id=$client_id&redirect_uri=$redirect_url&client_secret=$client_secret";
		
			if (isset($_GET['code'])) {
				$code = $_GET['code'];
				//$post_data = 'grant_type=authorization_code&code='. $code. '&client_id='.$client_id.'&client_secret='.$client_secret.'&redirect_uri='.$redirect_url;
				$http_request = new HttpClient();
				$response = $http_request ->get($url  . '&code='. $code);//, $post_data ) ; 
	  			$json = json_decode ( $response[1] ) ;
	  			$access_token = '';
				if(isset($json ) ){
					$access_token =   json_decode ( $response[1] )->access_token ;
				} else {
					parse_str($response[1]) ;
				}

				Yii::app()->session['access_token' ] = $access_token ; 
				return $access_token  ;

			} else {
				header ('Location: '.$authUrl);
				exit;
			}
		}
	}

	public function getUserInfo($url , $data=''){
		$http_request = new HttpClient();
		$output = $http_request ->get($url .'?'.$data)[1] ; 
		$output = json_decode($output);
		return $output;
	}

}