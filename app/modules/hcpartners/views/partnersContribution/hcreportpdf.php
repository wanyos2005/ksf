<?
$hcPartners=new HcPartners;
$model=new PartnersContribution;
?>
<table>
<?
 $records = $dataProvider->getData();

foreach($records as $record):
		
		 $record1=$model->model()->find('code=:code' , array(':code'=>$record->code),array('pagination'=>array('pageSize'=>50)));
		 
?>
<tr  class="well">	
	
		<td class="rightborder bottomborder" colspan="6">Name :&nbsp;<? echo $record1->name ?></td>  
		
		
</tr>
<tr class="well">
	
		
		<th class="bottomborder" colspan="2"></th>
        <th class="bottomborder" colspan="1">Code:&nbsp;<? echo $record1->code ?></th>
		<th class="bottomborder" colspan="1">Phone:&nbsp;<? echo $record1->phone?></th>
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
 $records2 = $dataProvider->getData();
 foreach($records2 as $record2):
?>
<tr>	
	
		<td class="rightborder bottomborder" colspan="4"></td>  
		<td class="rightborder bottomborder" style="text-align:right"><? echo $record2->tarehe?></td> 
		<td class="rightborder bottomborder" style="text-align:right"><? echo number_format($record2->amount) ?></td>
		
		
</tr>

<? endforeach; 
?>
  <?		
	
		//$model=new PartnersContribution;
		$sum_paid=0;
	    $records5=$model->model()->findAll('code=:code' , array(':code'=>$record->code));
		foreach ($records5 as $record5):
				
		

		$sum_paid=$sum_paid+$record5->amount;
		$total_paid=$total_paid+$record5->amount;
		//if($hcPartners->findHcamountpledgebyCode($partner->code)>0){
		$balance=$hcPartners->findHcamountpledgebyCode($record->code)-$sum_paid;
		//}
		$total_balance=$balance+$total_balance;

?>



<? 
	
	endforeach;
	
	?>
<tr>		
		<th class="rightborder bottomborder" colspan="2"></th> <th class="rightborder bottomborder"><em>Pledge:<? echo number_format($hcPartners->findHcamountpledgebyCode($record->code))?></em></th>
		<th class="rightborder bottomborder"><em>Balance:<? echo number_format( $hcPartners->findHcamountpledgebyCode($record->code)-$sum_paid)?></em></th>
		<th class="rightborder bottomborder" style="text-align:right">&nbsp;</th><th class="rightborder bottomborder"  style="text-align:right">_____________<br /><em><?  echo number_format($sum_paid) ?></em><br />_____________</th>

		
</tr>
<tr  class="well">	
	
		<td class="rightborder bottomborder" colspan="6">&nbsp;</td>  
		
		
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
	
	?>
		<tfoot>
		<td class="bottomborder" style="text-align:right"></td>
		
		<td class="rightborder bottomborder" ></td> 
		<td class="rightborder bottomborder">Total Pledge: <? echo number_format($plge)?></td> 
		<td class="rightborder bottomborder">Balance: <? echo number_format($plge-$paidin) ?></td> 
		<td class="rightborder bottomborder">Paid: <? echo number_format($paidin) ?></td>
		<td class="bottomborder" style="text-align:right"></td>

	</tfoot>
</table>