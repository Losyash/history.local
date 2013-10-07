<?php
  /**
   * @author Alexei Naimushin <alexei.naimushin@gmail.com>
   * @version 0.1
   */
  mysql_connect("", "", "") OR die("Ошибка соединения с сервером баз данных: " . mysql_error());
    
  mysql_select_db("") OR die("Ошибка соединения с базой данных: " . mysql_error());
  
  mysql_set_charset("utf8");
  
  if (isset($_POST['wd_graduate_firstname'])) {
    $wd_graduate_firstname = $_POST['wd_graduate_firstname'];     
  }
  
  if (isset($_POST['wd_graduate_patronymic'])) {
    $wd_graduate_patronymic = $_POST['wd_graduate_patronymic'];     
  }
  
  if (isset($_POST['wd_graduate_lastname'])) {
    $wd_graduate_lastname = $_POST['wd_graduate_lastname'];     
  }
  
  if (isset($_POST['wd_graduate_year'])) {
    $wd_graduate_year = $_POST['wd_graduate_year'];     
  }    

  if (isset($_POST['wd_graduate_level'])) {
    $wd_graduate_level = $_POST['wd_graduate_level'];     
  }    
  
  if (isset($_POST['wd_graduate_speciality'])) {
    $wd_graduate_speciality = $_POST['wd_graduate_speciality'];     
  } 
  
  if (isset($_POST['wd_graduate_workplace'])) {
    $wd_graduate_workplace = $_POST['wd_graduate_workplace'];     
  }   

  if (isset($_POST['wd_graduate_post'])) {
    $wd_graduate_post = $_POST['wd_graduate_post'];     
  }   
  
  if (isset($_POST['wd_graduate_telephone'])) {
    $wd_graduate_telephone = $_POST['wd_graduate_telephone'];     
  } 
  
  if (isset($_POST['wd_graduate_email'])) {
    $wd_graduate_email = $_POST['wd_graduate_email'];     
  }       
  
  $result = mysql_query("INSERT INTO wd_graduates VALUES (NULL, '$wd_graduate_firstname', '$wd_graduate_patronymic', '$wd_graduate_lastname', '$wd_graduate_year', '$wd_graduate_level', '$wd_graduate_speciality', '$wd_graduate_workplace', '$wd_graduate_post', '$wd_graduate_telephone', '$wd_graduate_email')");
  
  if (!$result) {
    echo("Ошибка добавления записи в базу данных: " . mysql_error());    
  }
  else {
    include("welcome.html");
  }
      
?>