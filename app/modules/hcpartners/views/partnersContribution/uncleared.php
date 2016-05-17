
        
    <div >
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'partners-uncleared',
            'enableAjaxValidation' => false,
        ));
        ?>
                Percentage Payment
          
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
                         Min: 
                          <?php
                        echo $form->dropDownList($model, 'phone', $mins, array('style' => 'text-align:left; background-color:darkcyan; color:white; font-weight:bold; border-radius:4px'));
                        ?>
                   <?php
                for ($i = -5; $i < 100; $i++) {
                    $i = $i + (5 - $i % 5);
                    if ($i - 1 >= 0)
                        $mins[$i - 1] = array('lft' => $i - 1);
                }
                $mins = CHtml::listData($mins, 'lft', 'lft');
                ?>
                            Max: 
                             <?php
                        echo $form->dropDownList($model, 'amount', $mins, array('style' => ' text-align:left; background-color:darkcyan; color:white; font-weight:bold; border-radius:4px'));
                        ?>
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

        <?php $this->endWidget(); ?>
    </div>



    <div id="data2">
        <?php $this->renderPartial('_uncleared', array('partners' => $partners)); ?>
    </div>
      <div id="data3" style="width: 100%; height: 120px;  text-align: center">

          &nbsp;
    </div>

