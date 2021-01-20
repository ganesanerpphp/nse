<?php

include "../includes/conn.php";


$pass=$_POST['pass'];

$select_user="select count(*) as count,user_id from user where password='$pass'";
$result_count=mysql_query($select_user);
$item_count=mysql_fetch_array($result_count);
$count=$item_count['count'];

if($count==0)
{
    header('Location: login.php?w=0');
exit;
}
else
{
    

    $_SESSION["user_name"]=$item_count['user_name'];
    $_SESSION["user_id"]=$item_count['user_id'];

    ob_start ();
    session_start ();

    header('Location: dashboard.php');
exit;

    


}


?>
    
    

                                           
                              
