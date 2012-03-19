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
	private $history;
	private $_oldStatuses = array();
	public $remark;
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
				array('customer_id, amount, contract_number, content', 'safe','on'=>'create'),
				array('amount, contract_number', 'length', 'max'=>128),
				array('created_at, updated_at,remark', 'safe'),
				array('customer_id,amount,contract_number,content','unsafe','on'=>'update'),
				array('status','flowCheck','check'=>true),
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
				'creater' => array(self::BELONGS_TO, 'User','created_by'),
				'updater' => array(self::BELONGS_TO, 'User','updated_by'),
				'history' => array(self::HAS_MANY,'History','contract_id'),
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
				'amount' => '金额',
				'contract_number' => '合同编号',
				'statuses' =>'状态',
				'content' => '内容',
				'remark' =>'更新记录',
				'created_at' => '创建日期',
				'created_by' => '创建人',
				'updated_at' => '更新日期',
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
	 * 1.签约—2.财务收件—3.风控审核—4.送评估—5.评估返回—6.贷款面签—
	* 7.银行批贷—8.收齐佣金—9.抵押登记报送—10.抵押登记完成.—11.移交银行他证—12.银行放款到账—13.资料归还客户—14.完结—15.退单
	*
	public function getStatusOptions(){
	return array(
			0 => '签约',
			1 => '后端收件',
			2 => '风控审核',
			3 => '送评估',
			4 => '评估返回',
			5 => '贷款面签',
			6 => '银行批贷',
			----7 => '客服回访',
			8 => '收齐佣金',
			// 			9 => '权证房产证原件收取',
			// 			10 => '房产证自带',
			// 			11 => '收齐银行抵押材料',
			12 => '房屋抵押登记报送',
			13 => '房屋抵押登记完成',
			// 			14 => '土地抵押登记报送',
			// 			15 => '土地抵押登记完成',
			16 => '移交银行他项证',
			17 => '贷款到账确认',
			18 => '房产证移交客户',
			19 => '土地证移交客户',
			// 			20 => '客服最后回访',
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

	public function flowCheck($attribute,$params)
	{
		if(isset($_POST['Status'])){
			$flow = $_POST['Status'];
			if(!$this->realCheck($flow)){
				$this->addError($attribute, '流程不对哟，亲！');
			}
		}
		return true;
	}

	public function realCheck($flow){
		$keyFlow = array(1,2,3,4,5,6,7,9,10,13,14,17,18,19,20,22,23);
		$flowString = implode(',', array_intersect($keyFlow,$flow));
		$keyFlowString = implode(',',$keyFlow);
		if($this->_oldStatuses!=array_intersect($this->_oldStatuses, $flow)){
			return false;
		}
		if($flowString!="" && strpos($keyFlowString,$flowString) != 0){
			return false;
		}
		return true;
	}
	
	public function afterFind(){
		foreach($this->statuses as $status) {
			array_push($this->_oldStatuses, $status->id);
		}
	}

	public function afterSave(){
		if(parent::afterSave()){
		}
		$this->saveHistory();
		return true;
	}
	public function saveHistory(){
		$statuses = array();
		foreach($this->statuses as $status) {
			array_push($statuses, $status->id);
		}
		$logStatus = array_diff($statuses, $this->_oldStatuses);
		foreach ($logStatus as $status){
			$history = new History();
			$history->status = $status;
			$history->contract_id = $this->id;
			$history->remark = $this->remark;
			$history->save();
		}
	}

}
