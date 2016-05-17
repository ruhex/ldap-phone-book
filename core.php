<?php
  
  include 'config.php';
  include 'ldap.php';




  $user = new User;

  $user->setUser(LDAP_USER);
  echo $user->getUser();

  echo "<br />";
  
  
  //echo count(Ldap::LdapConnect());
  
  echo "<br />";
  echo "____________________________________________________<br />";
  
 
    
  foreach (Ldap::LdapConnect() as $tmp)
  {
      echo $tmp->getUser() . "    " . $tmp->getPhone() ."<br />";
  }
  

 
  
  
  
  






?>