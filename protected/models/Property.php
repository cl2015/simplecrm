<?php

/**
 * This is the model class for table "properties".
 *
 * The followings are the available columns in table 'properties':
 * @property string $id
 * @property string $code
 * @property string $address
 * @property string $area
 * @property string $unit_price
 * @property string $age
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 */
class Property extends TrackStarActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Property the static model class
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
		return 'properties';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
				array('code, region,address, area, unit_price, age', 'required'),
				array('created_by, updated_by', 'numerical', 'integerOnly'=>true),
				array('code, area, unit_price, age', 'length', 'max'=>64),
				array('address', 'length', 'max'=>128),
				array('created_at, updated_at', 'safe'),
				// The following rule is used by search().
				// Please remove those attributes that should not be searched.
				array('id, code, address, area, unit_price, age, created_at, created_by, updated_at, updated_by', 'safe', 'on'=>'search'),
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
				'code' => '编号',
				'region' =>'区县',
				'address' => '地址',
				'area' => '面积',
				'unit_price' => '单价',
				'age' => '房龄',
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
		$criteria->compare('code',$this->code,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('area',$this->area,true);
		$criteria->compare('unit_price',$this->unit_price,true);
		$criteria->compare('age',$this->age,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('updated_by',$this->updated_by);

		return new CActiveDataProvider($this, array(
				'criteria'=>$criteria,
		));
	}

	public function getRegions(){
		return array(
				''=>'',
				'东城'=>'东城',
				'西城'=>'西城',
				'崇文'=>'崇文',
				'宣武'=>'宣武',
				'海淀'=>'海淀',
				'朝阳'=>'朝阳',
				'丰台'=>'丰台',
				'石景山'=>'石景',
				'通州'=>'通州',
				'顺义'=>'顺义',
				'平谷'=>'平谷',
				'怀柔'=>'怀柔',
				'房山'=>'房山',
				'门头沟'=>'门头',
				'大兴'=>'大兴',
				'昌平'=>'昌平',
				'延庆'=>'延庆',
				'密云'=>'密云',
		);
	}
}
