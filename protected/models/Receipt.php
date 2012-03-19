<?php

/**
 * This is the model class for table "receipts".
 *
 * The followings are the available columns in table 'receipts':
 * @property string $id
 * @property integer $contract_id
 * @property string $receipts_date
 * @property string $amount
 * @property string $code
 * @property string $content
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 */
class Receipt extends TrackStarActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Receipt the static model class
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
		return 'receipts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('contract_id, receipts_date, amount, code, content', 'required'),
			array('contract_id, created_by, updated_by', 'numerical', 'integerOnly'=>true),
			array('receipts_date, amount', 'length', 'max'=>10),
			array('code', 'length', 'max'=>32),
			array('created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, contract_id, receipts_date, amount, code, content, created_at, created_by, updated_at, updated_by', 'safe', 'on'=>'search'),
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
			'contract_id' => '合同',
			'receipts_date' => '收据时间',
			'amount' => '收据金额',
			'code' => '收据编号',
			'content' => '收据内容',
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
		$criteria->compare('contract_id',$this->contract_id);
		$criteria->compare('receipts_date',$this->receipts_date,true);
		$criteria->compare('amount',$this->amount,true);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('updated_by',$this->updated_by);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public static function findReceipts($limit=10, $contractId=null)
	{
		if($contractId != null)
		{
			return self::model()->findAll(
					array(
							'condition'=>'contract_id='.$contractId,
							'order'=>'t.created_by DESC',
							'limit'=>$limit,
					));
		}
		else
		{
			//get all history across all projects
			return self::model()->findAll(array(
					'order'=>'t.created_by DESC',
					'limit'=>$limit,
			));
		}
	}
}