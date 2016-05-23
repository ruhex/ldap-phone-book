<?php
  include '../include/config.php';
  include '../include/ldap.php';
  error_reporting( E_ERROR );
  
  
  
  foreach (Ldap::LdapConnect($_GET['user'], $_GET['ou']) as $tmp)
            {   echo "<tr>";
                echo "<td><span class='glyphicon glyphicon-user' aria-hidden='true'></span> ". $tmp->getDisplayName() ."</td>";
                echo "<td><span class='glyphicon glyphicon-briefcase' aria-hidden='true'></span> ". $tmp->getDn() ."</td>";
                echo "<td><span class='glyphicon glyphicon-envelope' aria-hidden='true'></span> ". $tmp->getMail() ."</td>";
                echo "<td><span class='glyphicon glyphicon-earphone' aria-hidden='true'></span> ". $tmp->getPhone() ."</td>";
                echo "<td><span class='glyphicon glyphicon-phone' aria-hidden='true'></span> ". $tmp->getMobile() ."</td>";
                echo "</tr>";
            }
            
            ?>

      