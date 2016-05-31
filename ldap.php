<?php

	// Main	ldap function
        
        include_once 'user.php';

        class Ldap
        {
            static public function LdapConnect()
            {   
                                
                $massiv = null;
                $connect = ldap_connect(LDAP_HOST, LDAP_PORT);
                ldap_set_option($connect, LDAP_OPT_PROTOCOL_VERSION, 3);
                ldap_set_option($connect, LDAP_OPT_REFERRALS, 0);
                
                if ($connect)
                {
                    $ldap_bind = ldap_bind($connect, LDAP_USER, LDAP_PASSWD);
                    // В фильтре убаны параметры поиска т.к поиск через AngularJS  
                    $filter = "(|(sn=*)(givenname=*))";
                    //$justthese = array("displayName", "displayname", "distinguishedName", "mail", "mobile");
                    $ldap_search = ldap_search($connect, LDAP_OU_DIRECT, $filter);
                    $info = ldap_get_entries($connect, $ldap_search);
                    
                    for ($i=0; $i<$info["count"]; $i++) {
                        if ($info[$i]["telephonenumber"][0] != null or $info[$i]["mobile"][0] != null)
                        {
                            $massiv[$i] = new User(
                                    $info[$i]["samaccountname"][0], 
                                    $info[$i]["displayname"][0],
                                    $info[$i]["distinguishedname"][0],
                                    $info[$i]["title"][0],
                                    $info[$i]["mail"][0], 
                                    $info[$i]["telephonenumber"][0],
                                    $info[$i]["mobile"][0]);
                        }
                    }
                    return $massiv;

                }
                
            }
        }
	
	
        
        
        
        
        
        
        

	


?>