<div style="width: 96%; height: 500px; background-color: lightsteelblue; text-align: center; overflow: hidden">
    <div style="width: 70%; height: 8.5%; float: left; overflow: hidden">
        <h2 style="margin: 0; padding: 0"> Settled Pledges </h2>
    </div>
    <div style="width: 30%; height: 8.5%; float: right; background-color: darkseagreen; border-radius: 6px; overflow: hidden">
        <?php $form = $this->beginWidget('CActiveForm', array(
            'id' => 'partners-cleared',
            'enableAjaxValidation' => false,
        ));
        ?>
        <div style="width:70%; height: 100%; float: left">
            <div style="width:100%; height: 40%">
                Percentage Payment
            </div>
            <div style="width:100%; height: 60%">
                <div style="width:100%; height: 100%;">
                    <?php
                    $model = new PartnersContribution;
                    $model->amount = $range;
                    $mins = array(100 => 'Exactly 100%', 101 => 'Above 100%', 102 => '100% and Above');
                    echo $form->dropDownList($model, 'amount', $mins, array('style' => 'width:90%; height:95%; font-size:95%; background-color:darkcyan; color:white; font-weight:bold; border-radius:4px'));
                    ?>
                </div>
            </div>
        </div>
 
        <div style="width:30%; height: 80%; float: right; margin-top: 5px">

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
        </div>
       
        <?php $this->endWidget(); ?>
    </div>

    <div style="width: 100%; height: 5%; margin: 0; padding: 0; font-size: 110%; line-height: 1.5;
         border-top: solid orange 1px; border-bottom: solid orange 2px; overflow: hidden;">
         <table>
             <tr>
                 <td> #</td>
              <td> Name</td>
              <td> Phone</td>
              <td> Pledge</td>
              <td> Paid</td>
              <td> Exceeded</td>
              <td> %</td>
              
             </tr>
         </table>
      
       
    </div>

    <div id="data2" style="width: 100%; height: 85.3%">
        <?php $this->renderPartial('_cleared', array('partners' => $partners)); ?>
    </div>

     <div id="data3" style="width: 100%; height: 85.3%;  text-align: center">
          please wait for the report to load. &nbsp;
    </div>

</div>