<?php

/**
 * This is the model class for table "contracts".
 *
 * The followings are the available columns in table 'contracts':
 * @property string $id
 * @property integer $customer_id
 * @property string $amount
 * @property string $contract_number
 * @property string $content
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 */
class Contract extends TrackStarActiveRecord
{
	public $statusIds;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Contract the static model class
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
		return 'contracts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('customer_id, amount, contract_number, content', 'required'),
			array('amount, contract_number', 'length', 'max'=>128),
			array('created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, customer_id, amount, contract_number,content, created_at, created_by, updated_at, updated_by', 'safe', 'on'=>'search'),
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
			'customer' => array(self::BELONGS_TO, 'Customer', 'customer_id'),
			'statuses' => array(self::MANY_MANY, 'Status','contract_status(contract_id,status_id)'),
			'creater' => array(self::BELONGS_TO, 'User','user_id'),
			'updater' => array(self::BELONGS_TO, 'User','user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'customer_id' => 'Customer',
			'amount' => 'Amount',
			'contract_number' => 'Contract Number',
			'content' => 'Content',
			'created_at' => 'Created At',
			'created_by' => 'Created By',
			'updated_at' => 'Updated At',
			'updated_by' => 'Updated By',
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
		$criteria->compare('amount',$this->amount,true);
		$criteria->compare('contract_number',$this->contract_number,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('updated_by',$this->updated_by);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	/*
	public function getStatusOptions(){
		return array(
			0 => '签约',	
			1 => '后端收件',
			2 => '风控审核',
			3 => '送评估',
			4 => '评估返回',
			5 => '贷款面签',
			6 => '银行批贷',
			7 => '客服回访',
			8 => '收齐佣金',
			9 => '权证房产证原件收取',
			10 => '房产证自带',
			11 => '收齐银行抵押材料',
			12 => '房屋抵押登记报送',
			13 => '房屋抵押登记完成',
			14 => '土地抵押登记报送',
			15 => '土地抵押登记完成',
			16 => '移交银行他项证',
			17 => '贷款到账确认',
			18 => '房产证移交客户',
			19 => '土地证移交客户',
			20 => '客服最后回访',
			21 => '业务完结',
			22 => '退单',
			/*
			23 => '',
			24 => '',
			25 => '',
			26 => '',
			27 => '',
			28 => '',
			29 => '',
			30 => '',
			 
		);
	}
	 */
		public function behaviors(){
		return array(
			'CSaveRelationsBehavior' => array(
				'class' => 'CSaveRelationsBehavior',
				'relations' => array(
					'status'=>array("message"=>"Please, check the status"),				)
			)
		);
	}

}
