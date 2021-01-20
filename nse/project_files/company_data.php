<?php
ob_start ();
session_start ();
include "../includes/conn.php";





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
                                            <form class="form-horizontal" action="company_data_action.php" method="post">
                                                <h3>Company Data</h3>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Company Name:</label>
                                            <div class="col-md-10">
                                            <select id="company_name" name="company_name" class="vertical-spin">
                                            <?php
                                                        $select_company="select company_name from  company  order by company_name asc";
$result_company=mysql_query($select_company);
?>
<option value="">Select</option>
<?php
while($row_company=mysql_fetch_array($result_company))
{
?>
<option value="<?php echo $row_company['company_name'];?>"><?php echo $row_company['company_name'];?></option>


<?php 


}



?>
</select>
<div id="one" style="color:red"></div>
                                               
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Market Cap:</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control"  name="market_cap" id="market_cap" >
                                                <div id="two" style="color:red"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Price:</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control"  name="current_price" id="current_price" >
                                                <div id="three" style="color:red"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Stock P/E:</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control"  name="stock_pe" id="stock_pe" >
                                                <div id="four" style="color:red"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Dividend :</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control"  name="divident_yield" id="divident_yield" >
                                                <div id="five" style="color:red"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">ROCE:</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control"  name="roce" id="roce" >
                                                <div id="six" style="color:red"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">ROE:</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control"  name="roe" id="roe" >
                                                <div id="seven" style="color:red"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Debt to equity:</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control"  name="debut_to_equity" id="debut_to_equity" >
                                                <div id="eight" style="color:red"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">EPS:</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control"  name="eps" id="eps" >
                                                <div id="nine" style="color:red"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Reserves:</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control"  name="reserves" id="reserves">
                                                <div id="ten" style="color:red"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Debt:</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control"  name="debt" id="debt" ">
                                                <div id="eleven" style="color:red"></div>
                                            </div>
                                        </div>
                                       
                                       


                                      
                                       
                                       

											<button type="reset" class="btn btn-purple waves-effect waves-light">Reset</button>
												<button type="submit" class="btn btn-purple waves-effect waves-light" onclick="return validation();">Save</button>


                                    </form>
                                        </div>
                                    </div>
                                    <br>
                          
                    </div>
                </div>
               
<script>
function validation()
{

    var company_name=document.getElementById("company_name").value;
    var market_cap=document.getElementById("market_cap").value;
    var current_price=document.getElementById("current_price").value;
    var stock_pe=document.getElementById("stock_pe").value;
    var divident_yield=document.getElementById("divident_yield").value;
    var roce=document.getElementById("roce").value;

    var roe=document.getElementById("roe").value;
    var debut_to_equity=document.getElementById("debut_to_equity").value;
    var eps=document.getElementById("eps").value;
    var reserves=document.getElementById("reserves").value;
    var debt=document.getElementById("debt").value;

if(company_name=="")
{
    document.getElementById("one").innerHTML = "Please Select Company Name";
    return false;
}
else{
    document.getElementById("one").innerHTML = "";
}

if(market_cap=="")
{
    document.getElementById("two").innerHTML = "Please Fill Data";
    return false;
}
else{
    document.getElementById("two").innerHTML = "";
}

if(current_price=="")
{
    document.getElementById("three").innerHTML = "Please Fill Data";
    return false;
}
else{
    document.getElementById("three").innerHTML = "";
}

if(stock_pe=="")
{
    document.getElementById("four").innerHTML = "Please Fill Data";
    return false;
}
else{
    document.getElementById("four").innerHTML = "";
}

if(divident_yield=="")
{
    document.getElementById("five").innerHTML = "Please Fill Data";
    return false;
}
else{
    document.getElementById("five").innerHTML = "";
}

if(roce=="")
{
    document.getElementById("six").innerHTML = "Please Fill Data";
    return false;
}
else{
    document.getElementById("six").innerHTML = "";
}

if(roe=="")
{
    document.getElementById("seven").innerHTML = "Please Fill Data";
    return false;
}
else{
    document.getElementById("seven").innerHTML = "";
}

if(debut_to_equity=="")
{
    document.getElementById("eight").innerHTML = "Please Fill Data";
    return false;
}
else{
    document.getElementById("eight").innerHTML = "";
}

if(eps=="")
{
    document.getElementById("nine").innerHTML = "Please Fill Data";
    return false;
}
else{
    document.getElementById("nine").innerHTML = "";
}


if(reserves=="")
{
    document.getElementById("ten").innerHTML = "Please Fill Data";
    return false;
}
else{
    document.getElementById("ten").innerHTML = "";
}

if(debt=="")
{
    document.getElementById("eleven").innerHTML = "Please Fill Data";
    return false;
}
else{
    document.getElementById("eleven").innerHTML = "";
}











}


</script>
