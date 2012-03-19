<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property string $id
 * @property string $username
 * @property string $password
 * @property string $code
 * @property string $name
 * @property string $birthday
 * @property string $phone
 * @property string $email
 * @property string $job_title
 * @property string $superior
 * @property string $department
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 */
class User extends TrackStarActiveRecord
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
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
				array('username, password, code, name, birthday, phone, email, job_title', 'required'),
				array('username, job_title, superior, department', 'length', 'max'=>64),
				array('password, phone, email', 'length', 'max'=>128),
				array('code, name, birthday', 'length', 'max'=>10),
				// The following rule is used by search().
				// Please remove those attributes that should not be searched.
				array('id, username, password, code, name, birthday, phone, email, job_title, superior, department, created_at, created_by, updated_at, updated_by', 'safe', 'on'=>'search'),
				array('email, username', 'unique'),
				array('email','email'),
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
				'username' => '用户名',
				'password' => '密码',
				'code' => '员工编号',
				'name' => '姓名',
				'birthday' => '生日',
				'phone' => '电话',
				'email' => '邮件',
				'job_title' => '职位',
				'superior' => '领导',
				'department' => '部门',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('birthday',$this->birthday,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('job_title',$this->job_title,true);
		$criteria->compare('superior',$this->superior,true);
		$criteria->compare('department',$this->department,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('updated_by',$this->updated_by);

		return new CActiveDataProvider($this, array(
				'criteria'=>$criteria,
		));
	}
	/**
	 * perform one-way encryption on the password before we store it in the database
	 */
	protected function afterValidate() {
		parent::afterValidate();
		$this->password = $this->encrypt($this->password);
	}
	public function encrypt($value) {
		return md5($value);
	}
}
