<?php
ob_start ();
session_start ();
include "../includes/conn.php";
$branch_id=$_SESSION['branch_id'];
$date=get_the_indian_time();
$today=date( "Y-m-d", strtotime ($date) );
$pass_today=" and date(order_taken_dtm)='$today'";


if(isset($_GET['e'])){

    $message="Edited Successsfully";

}
if(isset($_GET['d'])){

    $message="Deleted Successsfully";

}
if(isset($_GET['a'])){

    $message="Added Successsfully";

}

?>



        <!-- Navigation Bar-->
        <?php
include "top_bar.php";
        ?>



        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            
                            <h4 class="page-title">View Item</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

               
                


                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <?php
if(isset($_GET['e'])){

    $message="Edited Successsfully";
    ?>
    <br>
                        

                        <div class="alert alert-success" role="alert">
                            <strong style="color:white" style="font-size:30px;"><?php echo $message;?></strong> 
                        </div>
                        <?php } ?>

                        <?php
if(isset($_GET['a'])){

    $message="Added Successsfully";
    ?>
    <br>
                        

                        <div class="alert alert-success" role="alert">
                            <strong style="color:white" style="font-size:30px;"><?php echo $message;?></strong> 
                        </div>
                        <?php } ?>
                        <?php
if(isset($_GET['d'])){

    $message="Deleted Successsfully";
    ?>
    <br>
                        

                        <div class="alert alert-success" role="alert">
                            <strong style="color:white" style="font-size:30px;"><?php echo $message;?></strong> 
                        </div>
                        <?php } ?>




                        
                            
                            

                        <table class="table m-0 table-colored-bordered table-bordered-custom" border="1">
                        <table  border="1" width="90%">
    <thead>
      <tr>
      <th>S.No</th>
      <th>Company Name</th>
        <th>Market Cap</th>
        <th>Current Market Price of stock</th>
        <th>Stock P/E</th>
        <th>Dividend Yield</th>
        <th>ROCE</th>
        <th>ROE</th>
        <th>Debt to equity</th>
        <th>EPS</th>
        <th>Reserves</th>
        <th>Debt</th>
      </tr>
    </thead>
    <tbody>
      
    <?php

$company_name=$_GET['company_name'];
  $select_company="SELECT  company_name,market_cap,current_price,stock_pe,divident_yield,divident_yield,roce,roe,debut_to_equity,eps,reserves,debt
  FROM `company_data`
  order by company_name asc";
  $result_company=mysql_query($select_company);
  $sn=0;
  while($row_company=mysql_fetch_array($result_company))
{
    $sn=$sn+1;
    ?>
    
    <tr>
        <td width="5"><?php echo $sn;?></td>
    <td width="100" align="center"><?php echo $row_company['company_name'];?></td>
    <td width="25" align="center"><?php echo $row_company['market_cap'];?></td>
      <td width="25" align="center"><?php echo $row_company['current_price'];?></td>
      <td width="25" align="center"><?php echo $row_company['stock_pe'];?></td>
      <td width="25" align="center"><?php echo $row_company['divident_yield'];?></td>
      <td width="25" align="center"><?php echo $row_company['roce'];?></td>
      <td width="25" align="center"><?php echo $row_company['roe'];?></td>
      <td width="25" align="center"><?php echo $row_company['debut_to_equity'];?></td>
      <td width="25" align="center"><?php echo $row_company['eps'];?></td>
      <td width="25" align="center"><?php echo $row_company['reserves'];?></td>
      <td width="25" align="center"><?php echo $row_company['debt'];?></td>
      </tr>      
      <?php } ?>
    </tbody>
  </table>
                        </div>
                    </div>
                </div>


                
                                </tbody>
                            </table>
                            
                        </div>
                        
                    </div>
                </div>
                <!-- end row -->



                

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


        <?php
include "footer.php";
        ?>
        <script>

function call_delete(id)
{
  
    var result = confirm("Are You Sure Want To Delete?");
if (result) {


var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        
       location.reload("view_item.php?d=1");
     
    }
  };
  xhttp.open("GET", "item_action.php?id="+id, true);
  xhttp.send();

}
}
</script>