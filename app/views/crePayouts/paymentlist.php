<?php
/* @var $this CrePayoutsController */
/* @var $model CrePayouts */
/* @var $form CActiveForm */
//var_dump($items);die();
?>
<table >
	<tr>
		<td width="10%"></td><td>HIGHER EDUCATION LOANS BOARD</td><td></td>
	</tr>
	<tr>
		<td></td><td>Disbursment list for: </td><td> <? echo  $_REQUEST['uni'] ?></td>
	</tr>
	<tr>
		<td></td><td>Payment Date: </td><td><? echo $_REQUEST['date']?></td>
	</tr>

	<tr>
		<td></td><td>Pinted on: </td><td><? echo date("d-m-Y h:i:sa")?></td>
	</tr>
	<tr>
		<td></td><td>Amount: </td><td><? echo number_format($_REQUEST['sum']) ?></td>
	</tr>
</table>

<div class="form">
<table>
<tdead>
	<tr>
		
	<td  width="5%"></td><td align="center" width="7%"> Serial No</td>	<td align="left" width="15%"> Name</td><td align="center" width="7%"> Id Number</td><td align="left" width="15%">Reg No</td><td align="right"  width="6%">Amount</td><td align="right" width="5%">Payment for</td><td  align="right" width="5%"> Date</td>
	</tr>
</thead>
	<?
	$j=1;

	 foreach($items as $i=>$item): 
//$data=CrePayouts::getdistinctsums($item->PRINTDATE);
	
	?>
<tr>
	<td align="right"><strong><? echo $j?>. </strong></td><td align="center"> <? echo $item->FSERIAL?></td><td align="left">  <? echo $item->IDFNAME." ". $item->IDLNAME?></td><td align="center"> <? echo $item->IDNO?></td><td align="left"> <? echo $item->ADMI_NO?></td><td align="right" ><? echo number_format($item->AWARD)?> </td><td align="right"> <? echo $item->PAYMENT_SUBSET?></td><td align="right"><? echo $item->PRINTDATE?> </td>
</tr>
 <?php 
$j++;
endforeach; ?>
</table>



</div><!-- form -->