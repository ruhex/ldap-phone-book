<?php
	//	User class

	class User
	{
                private $User;
		private $Phone;
		private $DisplayName; // FIO
		private $Mail;
                private $Dn;
                private $Mobile;
                //private $Sn; // Фамилия ad sn


                
                public function __construct($user, $fio, $dn, $mail = null, $phone = null, $mobile = null)
                {
                    $this->User = $user;
                    $this->DisplayName = $fio;
                    $this->Mail = $mail;
                    $this->Phone = $phone;
                    $this->Mobile = $mobile;
                    $this->Dn = $this->setDn($dn);
                }

                
                public function setDn($dn)
                {
                    return ltrim(explode(",", $dn)[1], "OU=");                    
                }

                public function getDn()
                {
                    return $this->Dn;
                }

                public function setUser($user)
		{
			$this->User = $user;
		}

		public function getUser()
		{
			return $this->User;
		}


		public function setPhone($phone)
		{
			$this->Phone = $phone;
		}

		public function getPhone()
		{
			return $this->Phone;
		}
		

		public function setMail($mail)
		{
			$this->Mail = $mail;
		}

		public function getMail()
		{
			return $this->Mail;
		}
                
                public function setDisplayName($fio)
                {
                    $this->DisplayName = $fio;
                }
                
                public function getDisplayName()
                {
                    return $this->DisplayName;
                }
                
                public function setMobile($mobile)
                {
                    $this->Mobile = $mobilel;
                }
                
                public function getMobile()
                {
                    return $this->Mobile;
                }
                
                public function getJSONEncode()
                {
                    return json_encode(get_object_vars($this), JSON_UNESCAPED_UNICODE);
                }




	}



?>