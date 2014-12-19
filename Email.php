$to = $email;
$subject = "Pre-Order Form";

$message = "<html>
<body>
 <table width='100%' cellpadding='15px' border='0''>
 
 
  <tr border= '1' style='width:100%; font-size: 1.1em; '>
 
   <td  > <img src='http://dev.tsume-art.com/images/dp.png'/></td>
<td > </td> <td > </td> 
 <td colspan='3' style =' width:100%; text-align:left;'> 
 <h2>Tsume SA  </h2>	
	p/a TRACOL IMMOBILIER SA  	<br/>
 			BP38 L-5201 SANDWEILER  	<br/>
			Luxembourg 	<br/>
 			Phone : +352 20 21 14 30 	<br/>
 			Email : wholesale@tsume-art.com 	</td>
 </tr>
 
 
  <tr style='width:100%; font-size: 1.1em; '>
 
   <td colspan='6' style =' width:70%; text-align:left;' > <b> Dear ".$fname." ".$lname."</b>, 
  
   
   <br/> We have recieved order from you company, ".$cname.". Kindly check the billing and delivery details you mentioned in your form. 			      
 </td>
 
 </tr>
 
 <tr style='width:100%; font-size: 1.1em; '>
 
   <td style =' width:70%; text-align:left;' >
   Contact Person: ".$fname. " ".$lname. " <br/>
   Contact No: ".$ph." <br/>
   VAT No.: ".$vatno." <br/> <br/> 
    <b> Delivery Address: </b>
   
   <br/> Delivery Address: ".$dlvad1." 
      <br/> Delivery Address2: ".$dlvad2." 
	     <br/> Postal Code: ".$dlv_postal." 
		    <br/> City: ".$dlv_city." 
			   <br/> Country: ".$dlv_country." 
			      
 </td>
 <td > </td> <td > </td> 
 <td colspan='3' style =' width:70%; text-align:left;' > <b> Billing Address: </b>
   
   <br/> Bill Address: ".$billad1." 
      <br/> Bill Address2: ".$billad2." 
	     <br/> Postal Code: ".$bill_postal." 
		    <br/> City: ".$bill_city." 
			   <br/> Country: ".$bill_country." 
			      
 </td>
 
 </tr>
 
   <tr border='1' style='width:100%; font-size: 1.1em; 
    background-color:#66F; color: #ffffff;text-align:left; '>

  	
   <th style =' width:50%; text-align:left;' > Product</th>
    <th style =' width:10%;' > Retail </th>
   <th style =' width:10%;'> Discount </th>

   <th style =' width:10%;' > Qty.</th>
   <th style =' width:10%;'> Total</th>
   <th style =' width:10%;' > Shipment</th>
   </tr>";
$i=0;	
while($i<sizeof($final))
{
	$message .= "   <tr style='font-size: 1.1em;text-align:left; 
    background-color:#CCC; border: solid 1px #999;'>" ; 

	$k=0;
	for($k=0; $k<6; $k++)
	{
	
	$message .= "
	
	<td style:'text-align:left;'><font size=\"2\" face=\"Arial, Helvetica, sans-serif\">".$final[$i]."</font></td> 
	";
	$i++; 
	}
	$message .= "</tr>"; 
	
	
}; 
$message .= "
<tr></tr>
<tr></tr>
 <tr style='font-size: 1.1em;text-align:center; 
     border: solid 1px #999;'>
	 <td > </td><td > </td> <td > </td> 
<td colspan='3' style='background-color:#CCF;'> Total Dues </td>

 </tr>
 
 
  <tr style='font-size: 1.1em; border: solid 1px #999;'>
	 <td > </td> 
	 <td > </td> <td > </td> 
<td colspan='2' style='background-color:#CFC;'> Total Exc. Tax</td> <td style='background-color:#CFC;'> ".$totaltax."€</td> </tr>
<tr>
 <td > </td>  <td > </td> <td > </td> 
<td colspan='2' style='background-color:#CFC;'> Total Shipping </td> <td style='background-color:#CFC;'> ".$totalship."€</td> </tr>
<tr>
 <td > </td> <td > </td> <td > </td> 
<td colspan='2' style='background-color:#CFC;'> Taxes </td> <td style='background-color:#CFC;'> ".$tax."€</td> </tr>
<tr>
 <td > </td> <td > </td> <td > </td> 
<td colspan='2' style='background-color:#CFC;'> Due Payment </td> <td style='background-color:#CFC;'> ".$due."€</td> </tr>
  
<tr> <td colspan='4'> </td> </tr>
<tr> <td colspan='4'> </td> </tr> 
  <tr border= '1' style='width:100%; font-size: 1.1em; '>
 
 <td colspan='3' style='font-size: 0.9em;'> Terms of Payment and billing:

<p style='font-size: 0.9em;'>HQS: Payment 30% deposit on preorder/ 70% before shipment.<br/> The payment of the order must be made by bank transfer, please find out bank details here: </p>

<p style='font-size: 0.9em;'>Account name: TSUME SA <br/> IBAN: LU48 0028 81000181 4400 <br/> Code BIC: BILLLULL</p>
<p style='font-size: 0.9em;'>
BIL Banque Internationale Luxembourg 69, <br/> Route d Esch L-2953 Luxembourg
</p></td>
 </tr>



</table> </body></html>";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <bint.e.javed@gmail.com>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);

