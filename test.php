<?php
  include 'include/config.php';
  include 'include/ldap.php';
  include 'include/templateclass.php';
  //error_reporting( E_ERROR );

  
  
  
  $template = new Template("tpl", Ldap::LdapConnect(), "content");
  
  $template->display("content");
  
  
  ?>
  
   
