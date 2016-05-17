<div style="width: 96%; height: 500px; background-color: lightsteelblue; text-align: center; overflow: hidden">
    <div style="width: 70%; height: 8.5%; float: left; overflow: hidden">
        <h2 style="margin: 0; padding: 0"> Unsettled Pledges </h2>
    </div>
    <div style="width: 30%; height: 8.5%; float: right; background-color: darkseagreen; border-radius: 6px; overflow: hidden">
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'partners-uncleared',
            'enableAjaxValidation' => false,
        ));
        ?>
        <div style="width:70%; height: 100%; float: left">
            <div style="width:100%; height: 40%">
                Percentage Payment
            </div>
            <div style="width:100%; height: 60%">
                <?php
                $model = new PartnersContribution;
                $model->phone = $range['min'];
                $model->amount = $range['max'];
                $mins = array();
                for ($i = -5; $i < 100; $i++) {
                    $i = $i + (5 - $i % 5);
                    if ($i >= 0)
                        $mins[$i] = array('lft' => $i);
                }
                $mins = CHtml::listData($mins, 'lft', 'lft');
                ?>
                <div style="width:50%; height: 100%; float: left">
                    <div style="width: 20%; height: 90%; float: left">
                        Min: 
                    </div>
                    <div style="width: 80%; height: 90%; float: right">
                        <?php
                        echo $form->dropDownList($model, 'phone', $mins, array('style' => 'width:70%; height:95%; font-size:95%; text-align:left; background-color:darkcyan; color:white; font-weight:bold; border-radius:4px'));
                        ?>
                    </div>
                </div>
                <?php
                for ($i = -5; $i < 100; $i++) {
                    $i = $i + (5 - $i % 5);
                    if ($i - 1 >= 0)
                        $mins[$i - 1] = array('lft' => $i - 1);
                }
                $mins = CHtml::listData($mins, 'lft', 'lft');
                ?>
                <div style="width:50%; height: 100%; float: right">
                    <div style="width: 20%; height: 90%; float: left">
                        Max: 
                    </div>
                    <div style="width: 80%; height: 90%; float: right">
                        <?php
                        echo $form->dropDownList($model, 'amount', $mins, array('style' => 'width:70%; height:95%; font-size:95%; text-align:left; background-color:darkcyan; color:white; font-weight:bold; border-radius:4px'));
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div style="width:30%; height: 80%; float: right; margin-top: 10px">
            <?php /*echo CHtml::ajaxSubmitButton('Refresh', array('PartnersContribution/NotCleared'), 
                array('update' => '#data2','type' => 'submit'));
           */ ?>


              <?php
          
            echo CHtml::ajaxSubmitButton('Search',array('PartnersContribution/NotCleared'),
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
        <div style="width: 5%; height: 100%; float: left; overflow: hidden">
            No
        </div>
        <div style="width: 24.5%; height: 100%; float: left; overflow: hidden">
            Name
        </div>
        <div style="width: 15%; height: 100%; float: left; overflow: hidden">
            Phone
        </div>
        <div style="width: 14.5%; height: 100%; float: left; overflow: hidden">
            Pledge
        </div>
        <div style="width: 15%; height: 100%; float: left; overflow: hidden">
            Paid
        </div>
        <div style="width: 6%; height: 100%; float: left; overflow: hidden">
            %
        </div>
        <div style="width: 15%; height: 100%; float: left; overflow: hidden">
            Balance
        </div>
    </div>

    <div id="data2" style="width: 100%; height: 85.3%">
        <?php $this->renderPartial('_uncleared', array('partners' => $partners)); ?>
    </div>
      <div id="data3" style="width: 100%; height: 85.3%;  text-align: center">

         <p> please wait for the report to load. </p> &nbsp;
    </div>

</div>