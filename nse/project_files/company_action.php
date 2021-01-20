<?php
ob_start ();
session_start ();
include "../includes/conn.php";
$date=get_the_indian_time();
$today=date( "Y-m-d", strtotime ($date) );

  $company_name=$_POST['company_name'];
  $short_name=$_POST['short_name'];
  
    


  
if($company_name!="")
{

  $insert_branch="INSERT INTO `company`( `company_name`,`short_name`) VALUES 
  ('$company_name', '$short_name' );";
  mysql_query($insert_branch);

  header('Location:company.php?a=1');
exit;
}







?>

    

                                           
                              
