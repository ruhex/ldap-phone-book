<?php
	//	Main config file

	define('LDAP_HOST', 'pdc');        
	define('LDAP_PORT', 389);
	define('LDAP_USER', 'vasya@home.lan');
	define('LDAP_PASSWD', 'test');        
        define('LDAP_OU_DIRECT', 'OU=test,DC=home,DC=lan');        
	define('LDAP_USER_FILTER', '(!(useraccountcontrol:1.2.840.113556.1.4.803:=2))(!(useraccountcontrol:1.2.840.113556.1.4.803:=16))');


?>