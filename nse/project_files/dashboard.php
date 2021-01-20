
<?php

include "../includes/conn.php";


$query_country= "select company_name,short_name from company  order by company_name asc";
$country_array=array();
	
$result_country = mysql_query ( $query_country );
while ( $row_country = mysql_fetch_array ( $result_country ) ) {

    $short_name = $row_country ['short_name'];
    $company_name = $row_country ['company_name'];

    array_push($country_array,$company_name."-".$short_name);
        
    }
    $myJSON = json_encode($country_array);

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.html">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color:sandal;
}

.header {
  overflow: hidden;
  background-color: #3a2d7d;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: red;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
h1{
    color:#00bfff;
}
#search {
    padding-left:300px;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  margin: 0;
  position: absolute;
  top: 25%;
  left: 90%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}



</style>
</head>
<title>NATIONAL STOCK EXCHANGE</title>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
   
    var availableTags = <?php echo $myJSON;?>;
    $( "#company_name" ).autocomplete({
      source: availableTags
    });
  } );
  </script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<body>

<div class="header">
  <a href="#default" class="logo">CompanyLogo</a>
  <div class="header-right">
    <a class="active" href="#home">Home</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
  </div>
</div>

<div style="padding-left:200px" >
<h1>Welcome To National Stock EXCHANGE</h1>
</div>

<div id="search" >
<form class="example" action="dashboard.php">
  <input type="text" placeholder="Search.." name="search" id="company_name" >
  
  
  <input type="button" class="button" value="Search" onclick="call_company_details();">
</form>
</div>

<div id="load_company_data"></div>

</body>
</html>

<script>



function call_company_details()
{

var company_name=document.getElementById("company_name").value;

var res_company_name = company_name.split("-");
var pass_company_name=res_company_name[0];


var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     
    var res = this.responseText;
    
    document.getElementById("load_company_data").innerHTML = res;

    
    }
  };
  xhttp.open("GET", "call_company_data.php?company_name="+pass_company_name, true);
  xhttp.send();

}

</script>

