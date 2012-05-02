<?php

/**
 * This is the model class for table "customers".
 *
 * The followings are the available columns in table 'customers':
 * @property string $id
 * @property string $id_card
 * @property string $name
 * @property string $phone
 * @property string $address
 * @property string $source
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 */
class Customer extends TrackStarActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Customer the static model class
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
		return 'customers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_card, name, phone, address, source,products', 'required'),
			array('created_by, updated_by', 'numerical', 'integerOnly'=>true),
			array('id_card', 'length', 'max'=>64),
			array('name', 'length', 'max'=>10),
			array('phone, address, source', 'length', 'max'=>128),
			array('created_at, updated_at,products', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_card, name, phone, address, source, created_at, created_by, updated_at, updated_by', 'safe', 'on'=>'search'),
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
			'contract' => array(self::HAS_MANY,'Contract','customer_id'),
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
			'id_card' => '身份证号',
			'name' => '姓名',
			'products'=>'产品',
			'phone' => '电话',
			'address' => '地址',
			'source' => '来源',
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

		$criteria->compare('t.id',$this->id,true);
		$criteria->compare('t.id_card',$this->id_card,true);
		$criteria->compare('t.name',$this->name,true);
		$criteria->compare('t.phone',$this->phone,true);
		$criteria->compare('t.address',$this->address,true);
		$criteria->compare('t.source',$this->source,true);
		$criteria->compare('t.created_at',$this->created_at,true);
		$criteria->compare('t.created_by',$this->created_by);
		$criteria->compare('t.updated_at',$this->updated_at,true);
		$criteria->compare('t.updated_by',$this->updated_by);
		
		if(Yii::app()->user->isRoot){
		
		}elseif ( Yii::app()->user->isManager ) {
			$criteria->with = array(
					'creater' => array(
							'on'=>"creater.group_id = " .Yii::app()->user->group_id,
							'joinType' => 'INNER JOIN',
					),
			);
		}else{
			$criteria->compare('t.created_by',Yii::app()->user->id);
		}
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function getProductsOptions(){
		return array(
				'抵押消费贷款'=>'抵押消费贷款',
				'企业经营贷款'=>'企业经营贷款',
				'个人抵押经营贷款'=>'个人抵押经营贷款',
				'房产质押'=>'房产质押',
				'无抵押信用贷款'=>'无抵押信用贷款',
				'一手房按揭贷款'=>'一手房按揭贷款',
				'二手房商业贷款'=>'二手房商业贷款',
				'二手房转按揭贷款'=>'二手房转按揭贷款',
				'二手房公积金贷款'=>'二手房公积金贷款',
				'二手房网签过户'=>'二手房网签过户',
				'过桥垫资'=>'过桥垫资',
				'垫资解扣'=>'垫资解扣',
				'垫资借款'=>'垫资借款',
				'银行理财'=>'银行理财',
				'房产评估'=>'房产评估',
				'商业贷款过户'=>'商业贷款过户',
				'公积金贷款过户'=>'公积金贷款过户',
				'补按揭贷款'=>'补按揭贷款',
				'汽车质押'=>'汽车质押',
				'先典后贷'=>'先典后贷',
		);
	}
	protected function beforeSave(){
		if(parent::beforeSave()){
			if(is_array($this->products)){
				$this->products = implode(',',$this->products);
			}
			return true;
		}
	}
	protected function afterFind()
	{
		parent::afterFind();
		$this->products = explode(',', $this->products);
	}
}
