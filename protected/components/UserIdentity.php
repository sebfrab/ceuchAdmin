<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
        private $_id;
        private $_username;
	public function authenticate()
	{
            $username=strtolower($this->username);
            $user=Usuarios::model()->find('LOWER(username)=?',array($username));
            
            if($user===null)
                $this->errorCode=self::ERROR_USERNAME_INVALID;
            else if(!$user->validatePassword($this->password))
                $this->errorCode=self::ERROR_PASSWORD_INVALID; 
            else{
                $this->_id=$user->idusuarios;
                $this->_username=$user->username;

                /*Actualizamos el last_login del usuario que se esta autenticando ($user->username) */
                /*$sql = "update usuarios set last_login = now() where username='$user->username'";
                $connection = Yii::app() -> db;
                $command = $connection -> createCommand($sql);
                $command -> execute();*/
                
                /*Consultamos los datos del usuario por el username ($user->username) */
                //$info_usuario = Usuarios::model()->find('LOWER(username)=?', array($user->username));
                /*En las vistas tendremos disponibles last_login */
                //$this->setState('last_login',$info_usuario->last_login);

                $this->errorCode=self::ERROR_NONE;
            }
            return !$this->errorCode;
	}
        
        public function getId(){
            return $this->_id;
        }
        
        public function getUsername(){
            return $this->_username;
        }
}