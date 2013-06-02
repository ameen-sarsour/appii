<?php

/**
 * This is the model class for table "tbl_user".
 *
 * The followings are the available columns in table 'tbl_user':
 * @property integer $Id
 * @property string $pretty_name
 * @property string $email
 * @property string $created_at
 * @property string $last_login
 * @property string $updated_at
 * @property string $validation_key
 * @property boolean $subscripe
 * @property string $facebook_id
 * @property string $google_id
 * @property string $twitter
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pretty_name, email', 'required'),
			array('pretty_name, email, validation_key, facebook_id, google_id, twitter', 'length', 'max'=>255),
			array('created_at, last_login, updated_at, subscripe', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, pretty_name, email, created_at, last_login, updated_at, validation_key, subscripe, facebook_id, google_id, twitter', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'ID',
			'pretty_name' => 'Pretty Name',
			'email' => 'Email',
			'created_at' => 'Created At',
			'last_login' => 'Last Login',
			'updated_at' => 'Updated At',
			'validation_key' => 'Validation Key',
			'subscripe' => 'Subscripe',
			'facebook_id' => 'Facebook',
			'google_id' => 'Google',
			'twitter' => 'Twitter',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('Id',$this->Id);
		$criteria->compare('pretty_name',$this->pretty_name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('last_login',$this->last_login,true);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('validation_key',$this->validation_key,true);
		$criteria->compare('subscripe',$this->subscripe);
		$criteria->compare('facebook_id',$this->facebook_id,true);
		$criteria->compare('google_id',$this->google_id,true);
		$criteria->compare('twitter',$this->twitter,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function getRole(){
		$auths = Yii::app()->authManager->getAuthAssignments(''.$this->Id) ;
		$list = '';
		foreach ($auths as $key => $value) {
			$list.= $key ;
		}
		return $list ;
	}

	public static function getRolesList(){
		return array('admin'=>'Admin','editor'=>'Editor','author'=>'author'  );
	}

	public function setRole($role){

		$auth=Yii::app()->authManager;
		$items = $auth->getRoles($this->Id);
		//echo (print_r($items , true)) ;
		foreach ($items as $item) {
			echo $auth->revoke($item->name, $this->Id);
			$auth->save();
        }
        unset($auth);	
        $auth=Yii::app()->authManager;
        //echo $this->Id; exit;
        $auth->assign($role,(int)$this->Id); 
        return ($auth->save());
	}

}
