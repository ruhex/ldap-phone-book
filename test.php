<?php
  include 'include/config.php';
  include 'core/ldap.php';
  error_reporting( E_ERROR );

  
  
  
            $massiv = [];
            $i = 0;
  
            foreach (Ldap::LdapConnect($_GET['user'], $_GET['ou']) as $tmp)
            {
                array_push($massiv, $tmp->getTest()) ;
                
            }
            
            echo json_encode(['response' => $massiv], JSON_UNESCAPED_UNICODE);

            
  
  ?>
  
   
