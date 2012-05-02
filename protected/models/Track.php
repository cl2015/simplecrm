<?php

/**
 * This is the model class for table "tracks".
 *
 * The followings are the available columns in table 'tracks':
 * @property string $id
 * @property integer $customer_id
 * @property string $content
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 */
class Track extends TrackStarActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Track the static model class
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
		return 'tracks';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
				array('customer_id, content', 'required'),
				array('customer_id, created_by, updated_by', 'numerical', 'integerOnly'=>true),
				array('created_at, updated_at', 'safe'),
				// The following rule is used by search().
				// Please remove those attributes that should not be searched.
				array('id, customer_id, content, created_at, created_by, updated_at, updated_by', 'safe', 'on'=>'search'),
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
				'customer' => array(self::BELONGS_TO,'Customer','customer_id'),
				'creater' => array(self::BELONGS_TO,'User','created_by'),
				'updater' => array(self::BELONGS_TO,'User','updated_by'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
				'id' => 'ID',
				'customer_id' => '客户',
				'content' => '追踪内容',
				'created_at' => '创建时间',
				'created_by' => '创建人',
				'updated_at' => '更新时间',
				'updated_by' => '更新人',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('customer_id',$this->customer_id);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('updated_by',$this->updated_by);

		return new CActiveDataProvider($this, array(
				'criteria'=>$criteria,
		));
	}

	public static function findRecentTracks($limit=10, $customerId=null)
	{
		if($customerId != null)
		{
			return self::model()->findAll(
					array(
							'condition'=>'customer_id='.$customerId,
							'order'=>'t.created_by DESC',
							'limit'=>$limit,
					));
		}
		else
		{
			return self::model()->findAll(array(
					'order'=>'t.created_by DESC',
					'limit'=>$limit,
			));
		}
	}
}