<?php
  include 'include/config.php';
  include 'include/ldap.php';
  include 'include/templateclass.php';
  error_reporting( E_ERROR );

  
  
      
 
  
  
 
  //$template = new Template("tpl", Ldap::LdapConnect(), "content");
  
  //$template->display("content");
  
            $massiv = [];
            $i = 0;
  
            foreach (Ldap::LdapConnect($_GET['user'], $_GET['ou']) as $tmp)
            {
                array_push($massiv, $tmp->getJSONEncode()) ;
                
            }

            foreach ($massiv as $tmp)
            {
                echo $tmp . ",";
            }
  
  ?>
  
   
