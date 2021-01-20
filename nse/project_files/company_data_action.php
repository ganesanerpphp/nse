<?php
ob_start ();
session_start ();
include "../includes/conn.php";
$date=get_the_indian_time();
$today=date( "Y-m-d", strtotime ($date) );

  $company_name=$_POST['company_name'];
  $market_cap=$_POST['market_cap'];
  $current_price=$_POST['current_price'];
  $stock_pe=$_POST['stock_pe'];
  $divident_yield=$_POST['divident_yield'];
  $roce=$_POST['roce'];
  $roe=$_POST['roe'];
  $debut_to_equity=$_POST['debut_to_equity'];
  $eps=$_POST['eps'];
  $reserves=$_POST['reserves'];
  $debt=$_POST['debt'];
  
    


  
if($company_name!="")
{

  $insert_branch="INSERT INTO `company_data`( `company_name`,`market_cap`,`current_price`,`stock_pe`,`divident_yield`,`roce`
  ,`roe`,`debut_to_equity`,`eps`,`reserves`,`debt`
  ) VALUES 
  ('$company_name', '$market_cap','$current_price', '$stock_pe','$divident_yield', '$roce'
  ,'$roe', '$debut_to_equity','$eps', '$reserves','$debt'
   );";
  mysql_query($insert_branch);

  header('Location:company_data_view.php?a=1');
exit;
}







?>

    

                                           
                              
