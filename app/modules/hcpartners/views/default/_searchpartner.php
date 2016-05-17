
<head>
<style>
hr {color: sienna;}
p {margin-left: 20px;}
body {background-image: url("images/background.gif");}
</style>
</head>
<div class="wide form">
<?php 

		$model=new HcPartners;
 ?>
 <?php echo CHtml::beginForm(); ?>
 <div id="searching">
 <fieldset>
 <legend><p class="note"></p></legend>
 <table>
 	<tr>
 		<td>Phone No:	<?php echo CHtml::textField('phone','',array('id'=>'phone','size'=>10)); ?> </td>
 		<td> Code:	<?php echo CHtml::textField('code','',array('id'=>'code','size'=>10)); ?>	</td>
 		<td> <div class="" id="bankDet_div">
	&nbsp;&nbsp;
		  <?php
		  
		 
			echo CHtml::ajaxSubmitButton('Search Record',array('default/SearchPartner'),
					array (
						'update'=>'#data2',
						'type'=>'submit',
						//'beforeSend'=>'function(){$(\'body\').undelegate(\'#searchpartner\', \'click\');
						//'beforeSend'=>'function(){
						'beforeSend'=>'function(){$("#searchpartner").attr("disabled", "disabled");
						  $("#bankDet_div").hide();
						  $("#data2").hide();
						  $("#loading_div").addClass("loading2");
						  }',
						 'complete' => 'function(){
						  $("#loading_div").removeClass("loading2");
						  $("#searchpartner").removeAttr("disabled");
						  $("#bankDet_div").show();
						  $("#data2").show();
						  $("#searching").hide();
						 // $("#funzopersonaldetails_table").hide();
						  
						 //$("#funzopersonaldetails-form")[0].reset();
						  }',
						  
						),
						 array('class'=>'btn-primary','id'=>'searchpartner', 'name'=>'searchpartner')
						);					
			?>
	</div>
	
	</td>
 	</tr>
 </table>
		
	<!--<div  id="loading_div" class="row"> &nbsp;</div>  -->	
					
			

	
	
	
</fieldset>			
</div>	
<?php echo CHtml::endForm(); ?>

<div id="data2">
   <?php //$this->renderPartial('_ajaxContent', array('myValue'=>$myValue)); ?>
</div>
 <div id="data3">
   <?php //$this->renderPartial('_ajaxContent', array('myValue'=>$myValue)); ?>
</div>
 
</div><!-- search-form -->
