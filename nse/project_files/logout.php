<?php
ob_start ();
session_start ();
$_SESSION["branch_id"]="";
$_SESSION["user_name"]="";
session_destroy();
header('Location: top_bar.php');
exit;
?>
    
    

                                           
                              
