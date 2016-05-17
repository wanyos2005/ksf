<?
$hcPartners=new HcPartners;


?>

<table id="yang_mau_diprint">
<thead>
<tr><th colspan="6"><?php echo $this->renderPartial('header'); ?></th></tr>
<th colspan="6" class="btn" style="text-align:right"> Print Date: <? echo date('d-m-Y')?></th>  

</thead>
<?

foreach($records as $record):
		
		 $record1=$model->model()->find('code=:code' , array(':code'=>$record->code),array('pagination'=>array('pageSize'=>50)));
		 
?>

<tr class="well">
	
		
		<th class="bottomborder" colspan="1">Name :<? echo $record1->name ?>&nbsp;</th>
        <th class="bottomborder" colspan="1">Code:<? echo $record1->code ?>&nbsp;</th>
		<th class="bottomborder" colspan="1">Phone:<? echo $record1->phone?>&nbsp;</th>
		<th class="bottomborder" colspan="1">Pledge :&nbsp;<? echo number_format($hcPartners->findHcamountpledgebyCode($record1->code)) ?></th>
		<th class="bottomborder" style="text-align:right">Pay Date</th>
		<th class="bottomborder" style="text-align:right">Amount</th>
</tr>

<?
		//$criteria = new CDbCriteria();
		$criteria=new CDbCriteria;
		//$criteria->compare('id',$this->id);
								$criteria->compare('id',$model->id);
								$criteria->compare('name',$model->name,true);
								$criteria->compare('code',$record->code,true);
								$criteria->compare('phone',$model->phone,true);
								$criteria->compare('amount',$model->amount);
								$criteria->compare('year',$model->year);
								$criteria->compare('month',$model->month);
								$criteria->compare('week',$model->week);
								$criteria->compare('day',$model->day);
		//$criteria->compare('user',$this->user,true);

		$dataProvider= new CActiveDataProvider('PartnersContribution', array(
			'criteria'=>$criteria, 'pagination'=>array('pageSize'=>1000),
		));

?>

<?
$i=0;
$pledged=0;
$total_paid=0;
$total_balance=0;
$sum_paid=0;
 $records2 = $dataProvider->getData();
 foreach($records2 as $record2):
?>
<tr>	
	
		<td class="rightborder bottomborder" colspan="4"></td>  
		<td class="rightborder bottomborder" style="text-align:right"><? echo $record2->tarehe?></td> 
		<td class="rightborder bottomborder" style="text-align:right"><? echo number_format($record2->amount) ?></td>
		
		
</tr>

<?
$sum_paid=$sum_paid+$record2->amount;
 endforeach; 
?>
 
<tr>	
	
		<td class="rightborder bottomborder" colspan="4"></td>  
		<td class="rightborder bottomborder" style="text-align:right"><strong>Total Paid</strong></td> 
		<td class="rightborder bottomborder" style="text-align:right"><strong><? echo number_format($sum_paid) ?></strong></td>
		
		
</tr>
<tr>	
	
		<td class="rightborder bottomborder" colspan="4"></td>  
		<td class="rightborder bottomborder" style="text-align:right">&nbsp;</td> 
		<td class="rightborder bottomborder" style="text-align:right"></td>
		
		
</tr>



<tr>	
	
		<td class="rightborder bottomborder" colspan="4"></td>  
		<td class="rightborder bottomborder" style="text-align:right">Balance</td> 
		<td class="rightborder bottomborder" style="text-align:right"><? echo number_format( $hcPartners->findHcamountpledgebyCode($record->code)-$sum_paid)?></td>
		
		
</tr>

<!--<tr>		
		<th class="rightborder bottomborder" colspan="2"></th> <th class="rightborder bottomborder"><em>Pledge:<? echo number_format($hcPartners->findHcamountpledgebyCode($record->code))?></em></th>
		<th class="rightborder bottomborder"><em>Balance:<? echo number_format( $hcPartners->findHcamountpledgebyCode($record->code)-$sum_paid)?></em></th>
		<th class="rightborder bottomborder" style="text-align:right">&nbsp;</th><th class="rightborder bottomborder"  style="text-align:right">_____________<br /><em><?  echo number_format($sum_paid) ?></em><br />_____________</th>

		
</tr>-->
<tr  class="well">	
	
		<td class="rightborder bottomborder" colspan="6"><center>Thank you for your support.May the God of Heaven bless you.</center></td>  
		
		
</tr>
<?
	endforeach;
?>
<?
	$plge=0;
	$records3=$hcPartners->model()->findAll();
		foreach ($records3 as $record3):
		$plge=$plge+$record3->amountpledged;
		endforeach ;
		
	$paidin=0;	
	$records4=$model->model()->findAll();
		foreach ($records4 as $record4):
		$paidin=$paidin+$record4->amount;
		endforeach ;
	
	?><tr>

		<td>&nbsp;</td>
	</tr>
		<tfoot>
	
		<tr>
		<td class="bottomborder" style="text-align:right"></td>
		
		<td class="rightborder bottomborder" >Summery:</td> 
		<td class="rightborder bottomborder">Total Pledge: <? echo number_format($plge)?></td> 
		<td class="rightborder bottomborder">Balance: <? echo number_format($plge-$paidin) ?></td> 
		<td class="rightborder bottomborder">Paid: <? echo number_format($paidin) ?></td>
		<td class="bottomborder" style="text-align:right"></td>
	</tr>
	</tfoot>
</table>