<?php
ob_start ();
session_start ();
include "../includes/conn.php";







if(isset($_GET['a'])){

    $message="Added Successsfully";

}

?>




<?php
include "top_bar.php";
        ?>

        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">


                        
                           
                                    <div class="col-md-4">
                                        <br>

                                    <div class="alert alert-success" role="alert">
                                        <strong style="color:white" style="font-size:30px;"><?php echo $message;?></strong> 
                                    </div>

                                        <div class="grid-container card-box">
                                            <form class="form-horizontal" action="company_action.php" method="post">
                                                <h3>Company Details</h3>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Company Name:</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control"  name="company_name" id="company_name" value="<?php echo $branch_name; ?>">
                                                <div id="one" style="color:red"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Short Name:</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control"  name="short_name" id="short_name" value="<?php echo $land_line_no; ?>">
                                                <div id="two" style="color:red"></div>
                                            </div>
                                        </div>
                                       


                                      
                                       
                                       

											<button type="reset" class="btn btn-purple waves-effect waves-light">Reset</button>
												<button type="submit" class="btn btn-purple waves-effect waves-light" onclick="return validation();">Save</button>


                                    </form>
                                        </div>
                                    </div>
                                    <br>
                          <div class="col-md-8">
                                        <div class="grid-container card-box">
											
											
											
                                            <table class="table m-0 table-colored-bordered table-bordered-custom" border="1">

                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Company Name</th>
                                                    <th>Shot Name</th>
                                                   
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $select_company="select company_name,short_name  from company";
                                                $result_company=mysql_query($select_company);
                                                $sn=0;
                                                while($row_company=mysql_fetch_array($result_company))
                                                {
                                                
                                                    $sn=$sn+1;
                                                    
                                                
                                                ?>
                                                <tr>
                                                    
                                                    <td><?php echo  $sn;?></td>
                                                    <td><?php echo  $row_company['company_name'];?></td>
                                                    <td><?php echo  $row_company['short_name'];?></td>
                                                   
                                                    
                                                </tr>
                                                
                                                <?php } ?>
                                              </tbody>
                                        </table>
                                           
                              </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
               
<script>
function validation()
{

    var company_name=document.getElementById("company_name").value;
    var short_name=document.getElementById("short_name").value;
    

if(company_name=="")
{
    document.getElementById("one").innerHTML = "Please Fill Data";
    return false;
}
else{
    document.getElementById("one").innerHTML = "";
}
if(short_name=="")
{
    document.getElementById("two").innerHTML = "Please Fill Data";
    return false;
}
else{
    document.getElementById("two").innerHTML = "";
}

}

</script>
