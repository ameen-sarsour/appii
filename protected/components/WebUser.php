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
			$user = User::model()->find("google_id =?" , array( $google_id ) );

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
			$user = User::model()->find("facebook_id =?" , array( $facebook_info->id) );
			if(!isset($user)) { 
				$user = new User();
				$user->facebook_id  = $facebook_info ->id  ;
				$user->pretty_name = $facebook_info ->name;
				$user->email = $facebook_info ->email;
				print_r($user->save());
				print_r($user->getErrors ());
			}

		}

		else if($id=='twitter'){
			if(isset($_REQUEST['oauth_verifier'])){
	            $oauth_token= Yii::app()->session['oauth_token'];
	            $oauth_token_secret  = Yii::app()->session['oauth_token_secret'];
	            $consumer_secrit = Yii::app()->params['twitter']['CONSUMER_SECRET'];
	            $consumer_key = Yii::app()->params['twitter']['CONSUMER_KEY'] ;
	            $connection = new TwitterOAuth($consumer_key,  $consumer_secrit, $oauth_token,$oauth_token_secret );
	            $access_token = $connection->getAccessToken($_REQUEST['oauth_verifier']);

	            if (200 == $connection->http_code) {
	            	Yii::app()->session['access_token'] = $access_token;
                    $content = $connection->get('account/verify_credentials');
                    $id = $content->id ;
					$user = User::model()->find("twitter =?" , array( $id) );
					if(!isset($user)) {
						$user = new User();
						$user->twitter = $id  ;
						$user->pretty_name = $content ->screen_name;
						$user->email = 'a@a.com';
					}

	            }
    		}else{
	            $connection = new TwitterOAuth(Yii::app()->params['twitter']['CONSUMER_KEY'], Yii::app()->params['twitter']['CONSUMER_SECRET']);
	            $request_token = $connection->getRequestToken(Yii::app()->params['twitter']['OAUTH_CALLBACK']);

	            Yii::app()->session['oauth_token']  = $request_token['oauth_token'];
	            Yii::app()->session['oauth_token_secret'] = $request_token['oauth_token_secret'];
	            /* If last connection failed don't display authorization link. */
	            switch ($connection->http_code) {
	                    case 200:
	                            /* Build authorize URL and redirect user to Twitter. */
	                            $url = $connection->getAuthorizeURL($request_token);
	                            header('Location: ' . $url);
	                            exit;
	                            break;
	                    default:
	                            /* Show notification if something went wrong. */
	                            return false;
            }
    }

		}

			$duration= 3600*24*30 ; // 30 days
			$this->allowAutoLogin = true;


			$UserIdentity = new UserIdentity($user->Id ,$access_token   );

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