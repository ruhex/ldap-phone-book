<?php
  include '../include/config.php';
  include '../include/ldap.php';
  error_reporting( E_ERROR );
  
  
  
  foreach (Ldap::LdapConnect($_GET['user'], $_GET['ou']) as $tmp)
            {   echo "<tr>";
                echo "<td>". $tmp->getDisplayName() ."</td>";
                echo "<td>". $tmp->getDn() ."</td>";
                echo "<td>". $tmp->getMail() ."</td>";
                echo "<td>". $tmp->getPhone() ."</td>";
                echo "<td>". $tmp->getMobile() ."</td>";
                echo "</tr>";
            }
            
            ?>

      