<?
$hcPartners=new HcPartners;

$sum_paid=0;
$j=0;

?>


<div  class="btn">


</div>

<table id="yang_mau_diprint">

<tr><td colspan="6" style="text-align:right"> Print Date: <? echo date('d-m-Y')?></td> </tr> 
<tr><td colspan="6"><?php echo $this->renderPartial('header_summery'); ?></td></tr>


<?

foreach($records as $record):
$j++;
		
		 $record1=$model->model()->find('code=:code' , array(':code'=>$record->code),array('pagination'=>array('pageSize'=>50)));
		 
?>


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
<!--<tr>	
	
		<td class="rightborder bottomborder" colspan="4"></td>  
		<td class="rightborder bottomborder" style="text-align:right"><? echo $record2->tarehe?></td> 
		<td class="rightborder bottomborder" style="text-align:right"><? echo number_format($record2->amount) ?></td>
		
		
</tr>
-->
<?
$sum_paid=$sum_paid+$record2->amount;
 endforeach; 
?>
  <?		
	//
//	    $records5=$model->model()->findAll('code=:code' , array(':code'=>$record->code));
//		foreach ($records5 as $record5):
//				
//		
//
//		//$sum_paid=$sum_paid+$record5->amount;
//		$total_paid=$total_paid+$record5->amount;
//		//if($hcPartners->findHcamountpledgebyCode($partner->code)>0){
//		$balance=$hcPartners->findHcamountpledgebyCode($record->code)-$sum_paid;
//		//}
//		$total_balance=$balance+$total_balance;
//endforeach;
?>

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
	<tr  class="well">	
	
		<td class="rightborder" colspan="3">
		<table>
					<tr><td>Amount Contributed(KShs):</td><td><? echo number_format($sum_paid)?></td></tr>
					<tr><td>No Of Contributors:</td><td><? echo $j?></td></tr>
					<? if($j>0){?>
					<tr><td>Av. Contribution(KShs):</td><td><? echo number_format($sum_paid/$j)?></td></tr>
					<? }?>
					</table>
		
		</td>  
		<td  colspan="3">
					<table>
					<tr><td>Amount Pledged:</td><td><? echo number_format($plge)?></td></tr>
					<tr><td>No of People:</td><td><? echo $hcPartners->count()?></td></tr>
					</table>
					
		</td>  
		
		
</tr>
	
</table>
