<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
	private $_isRoot; //是否具有管理权限
	private $_isManager; //是否是经理
	private $_isEmployee; //是否是员工
	

	/**
	 * Authenticates a user using the User data model.
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate() {
		$user = User::model()->findByAttributes(array('username' => $this->username));
		if ($user === null) {
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		} else {
			if ($user->password !== $user->encrypt($this->password)) {
				$this->errorCode = $user->password . $user->encrypt($this->password);
			} else {
				$this->_id = $user->id;
				$isRoot = ($user->role_id == User::USER_ROOT) ? 1 : 0;
				$isManager = ($user->role_id == User::USER_MANAGER) ? 1:0;
				$isEmployee = ($user->role_id == User::USER_EMPLOYEE)? 1 : 0;
				Yii::trace('isXXX-' . $isRoot . '-' . $isManager . '-' . $isEmployee);
				$this->setState('isRoot', $isRoot);
				$this->setState('isManager', $isManager);
				$this->setState('isEmployee', $isEmployee);
				$this->setState('group_id',$user->group_id);
				$this->errorCode = self::ERROR_NONE;
			}
		}
		return!$this->errorCode;
	}

	public function getId() {
		return $this->_id;
	}

}
