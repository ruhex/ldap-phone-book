<?php
  include 'config.php';
  include 'ldap.php';
  error_reporting( E_ERROR );
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Phone book</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link href="menu.css" rel="stylesheet" type="text/css">
 </head>
 <body>
 	 <div id="header"><h1>Phone book</h1></div>
     <div class="main_top"> 
    <div class="main_center">
    </div>
    </div>
         
    <div class="main_top_">
    <div class="main_top_menu">
    <ul id="menu">
   <li><a href="#">По отделам</a>
    <ul>
     
     
     <?php
            
                $massiv = array();
                foreach (Ldap::LdapConnect() as $tmp)
                {
                    array_push($massiv, $tmp->getDn());
                }
                
                $massiv = array_unique($massiv);
                
                foreach ($massiv as $c)
                {
                    echo "<li><a href='index.php?ou=". $c ."'>". $c ."</a></li>";
                }
            
            
            
            ?>
     
     
    </ul>
   </li>
   <li><a href="#">Показать всех</a>
    
   </li>
   <li ><form  method="get" action="index.php" target="_blank"><input class="ser" name="user" id="form-query" value="" placeholder="поиск по фамилии"></form>
   </li>
  </ul>
    </div>
    </div>
    <div id="content">
      <table width=100% align="center">
        <tr> 
          <td width="94" height="30" bgcolor="#04B404">ФИО</td>
          <td width="94" height="30" bgcolor="#04B404">Отдел</td>
          <td width="94" height="30" bgcolor="#04B404">E-mail</td>
          <td width="94" height="30" bgcolor="#04B404">Внутренний номер</td>
          <td width="94" height="30" bgcolor="#04B404">Мобильный</td>
        </tr>
        
        
            
            
            <?php
            foreach (Ldap::LdapConnect($_GET['user'], $_GET['ou']) as $tmp)
            {   echo "<tr> ";
                echo "<td width='94' height='30' bgcolor='#F2F2F2'>" . $tmp->getDisplayName() ."</td>";
                echo "<td width='94' height='30' bgcolor='#F2F2F2'>". $tmp->getDn() ."</td>";
                echo "<td width='94' height='30' bgcolor='#F2F2F2'>". $tmp->getMail() ."</td>";
                echo "<td width='94' height='30' bgcolor='#F2F2F2'>". $tmp->getPhone() ."</td>";
                echo "<td width='94' height='30' bgcolor='#F2F2F2'>". $tmp->getMobile() ."</td>";
                echo "</tr>";
            }
            
            ?>
            
          
        
           

      </table>
  </div>
  
  
  
   
