<?php

/**
 * This is the model class for table "caption2".
 *
 * The followings are the available columns in table 'caption2':
 * @property integer $cid
 * @property integer $id
 * @property integer $parent_id
 * @property integer $page_id
 * @property string $title
 * @property integer $has_child
 * @property integer $level
 *
 * The followings are the available model relations:
 * @property Page $page
 * @property Caption $parent
 * @property Caption[] $caption2s
 */
class Caption extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Caption the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	

	public  function findAll()
	{
		$variable= parent::findAll();


		$result = array();
		$count = 0 ; 
		foreach ($variable as  $value) {
			 $count++ ;
			if( $count  % 100===0){
				echo $count. "\n\r"; 
				//break;
			}
			$criteria=new CDbCriteria;
			$criteria->compare('id',$value->page_id);

			
			$tmp =  $value ; 
			$page = Page::model()->find($criteria);
			
			if(					isset($page->id ) && isset($page->number ) && isset($page->part ) && isset($page->hadith ) && isset($page->content ) )  {
				$tmp->page = array('id'=> $page->id , 'number'=> $page->number ,"part" =>$page->part ,  	"hadith" => $page->hadith ,  	  	"content" => $page->content );
			$result[] =$tmp;
		}
		}
		echo 'ddddddddddddddddddd';
		return $result;
	}
	

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'caption';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, parent_id, page_id, title, has_child', 'required'),
			array('id, parent_id, page_id, has_child, level', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cid, id, parent_id, page_id, title, has_child, level', 'safe', 'on'=>'search'),
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
			'page' => array(self::BELONGS_TO, 'Page', 'page_id'),
			'parent' => array(self::BELONGS_TO, 'Caption', 'parent_id'),
			'caption2s' => array(self::HAS_MANY, 'Caption', 'parent_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cid' => 'Cid',
			'id' => 'ID',
			'parent_id' => 'Parent',
			'page_id' => 'Page',
			'title' => 'Title',
			'has_child' => 'Has Child',
			'level' => 'Level',
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

		$criteria->compare('cid',$this->cid);
		$criteria->compare('id',$this->id);
		$criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('page_id',$this->page_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('has_child',$this->has_child);
		$criteria->compare('level',$this->level);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
