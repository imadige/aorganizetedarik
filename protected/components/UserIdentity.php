<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */	
	public function authenticate()
	{
	
		$userModel = Users::model()->find("email = :email && password = :password",array(
			":email" => $this->username,
			":password" => Hash::hashCreate($this->password),
		));

		if(count($userModel) == 0){
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		}else{
			$this->setParam($userModel);
			$this->errorCode=self::ERROR_NONE;
		}

		return !$this->errorCode;

	}

	private function setParam($model){
		$this->setState("user_id",$model->users_id);
		$this->setState("name",$model->name);
	}

	public static function login($dt)
	{
		$model=new LoginFormUser;

		if((int)$dt->rememberme==1)
		{
			$model->rememberMe=true;
		}
		$model->username=trim($dt->username);
		$model->password=trim($dt->password);
		
		if($model->validate() && $model->login())
		{
			return true;
		}else{
			return false;
		}
	}
}