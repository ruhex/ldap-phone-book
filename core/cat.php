
<?php
  include '../include/config.php';
  include '../include/ldap.php';
  error_reporting( E_ERROR );
  
  
  
  $massiv = array();
                foreach (Ldap::LdapConnect() as $tmp)
                {
                    array_push($massiv, $tmp->getDn());
                }
                
                $massiv = array_unique($massiv);
                
                foreach ($massiv as $c)
                {
                    echo "<li><a href='#'>". $c ."</a></li>";
                }
  
  
  
?>
