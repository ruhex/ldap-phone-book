<?php
  include_once 'include/config.php';
  include_once 'core/ldap.php';
  error_reporting( E_ERROR );  
  
  
            $users = [];
            $cat = [];
           
  
            foreach (Ldap::LdapConnect() as $tmp)   {
                array_push($users, $tmp->getTest()) ;
                array_push($cat, $tmp->getDn());
            }
            
            switch ($_GET['param']) {
                case 'cat': echo json_encode(['response' => array_unique($cat)], JSON_UNESCAPED_UNICODE); break;
                case 'users': echo json_encode(['response' => $users], JSON_UNESCAPED_UNICODE); break;
                default: echo 'error: GET param no select!';
            }
            
            
  
  ?>
  
   
