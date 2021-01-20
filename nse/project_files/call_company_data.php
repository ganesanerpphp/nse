<?php


ob_start ();
session_start ();
include "../includes/conn.php";

?>


  
  <table  border="1" width="90%">
    <thead>
      <tr>
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
  $select_company="SELECT  market_cap,current_price,stock_pe,divident_yield,divident_yield,roce,roe,debut_to_equity,eps,reserves,debt
  FROM `company_data`
  WHERE  company_name = '$company_name'";
  $result_company=mysql_query($select_company);
  while($row_company=mysql_fetch_array($result_company))
{
    ?>
    
    <tr>
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









  


                          
                
            
