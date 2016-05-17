<div class="form">
 
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id'=>'service-form',
    'enableAjaxValidation'=>false,
    'method'=>'post',
    //'type'=>'horizontal',
    'htmlOptions'=>array(
        'enctype'=>'multipart/form-data'
    )
)); ?> 

 
<div class="row">
        <div class="col-lg-12">
                <div class="widget-box">
                        <div class="widget-header">
                                <h4><?php echo CHtml::encode('Import paybill data'); ?></h4>
                                
                        </div>
                        <div class="widget-body">
                                <div class="widget-main">
       
 
        <?php echo $form->errorSummary($model, 'Opps!!!', null, array('class'=>'alert alert-error span12')); ?>
 
         <div class="control-group">     
            <div class="span4">
                                <div class="control-group <?php if ($model->hasErrors('postcode')) echo "error"; ?>">
        <?php echo $form->labelEx($model,'file'); ?>
        <?php echo $form->fileField($model,'file'); ?>
        <?php echo $form->error($model,'file'); ?>
                            </div>
 
 
            </div>
        </div> 
 
        <div class="form-actions">
           <?php //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>

         <?  
        // echo date("Y-m-d");
                    //
                    $file='D:\xampp\tmp\import'.date("Y-m-d").'.csv';  
                       //$file='E:\system\tmp\import.csv'; 

if (file_exists($file)) { ?>
     <button class="btn  btn-sm btn-primary" type="submit"><i class="icon-ok bigger-110"></i> <?php echo Lang::t('Import data') ?></button>
    
<? } else {
    echo "The file $file does not exist";
} ?>

            
     </div>
    <!--  <fieldset>
         <legend>Update Imported records</legend>
          <div>
        <?php
            $imported=TblCsvimport::model()->find();
        if (!empty($imported)){
            echo CHtml::ajaxSubmitButton('Update imported records', CHtml::normalizeUrl(array('default/updateimportedrecs')), array(
                            'dataType' => 'json',
                            'type' => 'post',
                            // 'update'=>'#formResult',
                            'success' => 'function(data) {
                                                      
                            if(data.status=="success"){
                             $("#SearchStud_update").show().html(data.url);
                             }
                             else{
                            $.each(data, function(key, val) {
                            $("#users-applicants-form #"+key+"_em_").text(val);                                                    
                            $("#users-applicants-form #"+key+"_em_").show();
                            });
                            }       
                        }',
                            'beforeSend' => 'function(){                        
                             $("#loadingDivSearch").addClass("loadingmy");
                              $("#SearchStud_update").hide();
                             
                          }',
                            'complete' => 'function(){
                              $("#loadingDivSearch").removeClass("loadingmy");
                               $("#SearchStud_update").show();
                         
                                  }'
                                ), array('id' => 'btn-search-stud-flash' . uniqid(), 'class' => 'btn btn-info', 'style' => 'border-radius:6px'));
        }else
        echo 'No records imported pendig update'
        ?>
    </div>

     </fieldset> -->

         
 
</div>
                        </div>
                </div>
        </div>
</div>
 
<?php $this->endWidget(); ?>
 
</div><!-- form -->

