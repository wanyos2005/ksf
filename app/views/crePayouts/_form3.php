<?php
/* @var $this CrePayoutsController */
/* @var $model CrePayouts */
/* @var $form CActiveForm */

?>

<div class="form">
<? if (empty($items)) {
	# code...
	echo "No records found";
} else {
	# code...
	?>



<table>

	<tr>
		
		<td align="right" width="3%"> <strong>Date</strong></td><td width="3%"  align="right"><strong>Amount</strong> </td><td align="center" width="10%"> View List</td>
	</tr>
	<? foreach($items as $i=>$item): 	?>
<tr style="border:1px dotted gray;">
	<td align="right"><? echo $item->PRINTDATE?> </td><td  align="right"> <? echo number_format($item->sum) ?></td><td align="center"> <?php echo CHtml::link('Click here to view the list',array('tblPastapplicants/List','date'=>$item->PRINTDATE,'uni'=>$uni,'sum'=>$item->sum),array('target'=>'_blank')); ?></td>
</tr>
 <?php 
$i++;
endforeach; ?>
</table>


	<?
}
?>

</div><!-- form -->