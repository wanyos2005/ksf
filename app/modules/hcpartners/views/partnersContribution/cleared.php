
<div align="right" style="width: 30%; height: 8.5%; background-color: darkseagreen; border-radius: 6px">
  
  Percentage completion



           <?php $form = $this->beginWidget('CActiveForm', array(
            'id' => 'partners-cleared',
            'enableAjaxValidation' => false,
        ));
        ?>
           <?php
                    $model = new PartnersContribution;
                    $model->amount = $range;
                    $mins = array(100 => 'Exactly 100%', 101 => 'Above 100%', 102 => '100% and Above');
                    echo $form->dropDownList($model, 'amount', $mins, array('style' => 'height:95%; font-size:95%; background-color:darkcyan; color:white; font-weight:bold; border-radius:4px'));
                    ?>
             
   <?php
          
            echo CHtml::ajaxSubmitButton('Search',array('PartnersContribution/Cleared'),
                    array (
                        'update'=>'#data2',
                        'type'=>'submit',
                        'beforeSend'=>'function(){

                          $("#data2").hide();
                            $("#data3").show();
                          $("#data3").addClass("loadingmy");
                          }',
                         'complete' => 'function(){
                          $("#data3").removeClass("loadingmy");
                          $("#data2").show();
                          $("#data3").hide();
                            }',
                          
                        ),
                         array('class'=>'btn-danger','id'=>'btn_cleared', 'name'=>'btn_cleared')
                        );                  
            ?>
              
           <?php $this->endWidget(); ?>
     </div> 
     

    <div id="data2" class="report_div">
      

       
        <?php $this->renderPartial('_cleared', array('partners' => $partners)); ?>
   
           
      
            
     </div>    
      

   

     <div id="data3" style="width: 100%; height: 120px;  text-align: center">
     &nbsp;
</div>