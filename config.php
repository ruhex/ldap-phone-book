<?php
	//	Main config file

        // You host pdc server (format: ip or dns name)
    	define('LDAP_HOST', 'pdc.company.lan');
        
        // PDC port. Default port 389
	define('LDAP_PORT', 389);  
        
        // User for read and write (function write non in the current version)
	define('LDAP_USER', 'vasya@company.lan');                                
        
        // User password 
	define('LDAP_PASSWD', 'vasyapasswd');   
        
        // Root search directory
        define('LDAP_OU_DIRECT', 'OU=users,DC=company,DC=lan');  
        
        // Filter for search (in the current version don't used)
	define('LDAP_USER_FILTER', '');                                         

?>