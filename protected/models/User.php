<?php

/**
 * This is the model class for table "tbl_user".
 *
 * The followings are the available columns in table 'tbl_user':
 * @property integer $id
 * @property string $created_at
 * @property string $login_name
 * @property string $pretty_name
 * @property string $password
 * @property string $email
 * @property string $avatar_path
 * @property integer $clearance
 * @property string $mobile
 * @property string $activation_code
 * @property integer $activation_type
 * @property string $last_login_at
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
			array('id, login_name, pretty_name, password, clearance', 'required'),
			array('id, clearance, activation_type', 'numerical', 'integerOnly'=>true),
			array('login_name, activation_code', 'length', 'max'=>32),
			array('pretty_name, email, avatar_path', 'length', 'max'=>64),
			array('password, mobile', 'length', 'max'=>16),
			array('created_at, last_login_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_at, login_name, pretty_name, password, email, avatar_path, clearance, mobile, activation_code, activation_type, last_login_at', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'created_at' => 'Created At',
			'login_name' => 'Login Name',
			'pretty_name' => 'Pretty Name',
			'password' => 'Password',
			'email' => 'Email',
			'avatar_path' => 'Avatar Path',
			'clearance' => 'Clearance',
			'mobile' => 'Mobile',
			'activation_code' => 'Activation Code',
			'activation_type' => 'Activation Type',
			'last_login_at' => 'Last Login At',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('login_name',$this->login_name,true);
		$criteria->compare('pretty_name',$this->pretty_name,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('avatar_path',$this->avatar_path,true);
		$criteria->compare('clearance',$this->clearance);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('activation_code',$this->activation_code,true);
		$criteria->compare('activation_type',$this->activation_type);
		$criteria->compare('last_login_at',$this->last_login_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}