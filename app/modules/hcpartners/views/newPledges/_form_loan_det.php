
<?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'new-pldege-payments-form',
            'enableAjaxValidation' => true,
            'action' => $this->createUrl('newPldegePayments/postpayment', array('val' => $val)),
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
                'validateOnChange' => true,
                'validateOnType' => true
            ),
        ));
        ?>
     <div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <i class="fa fa-chevron-down"></i> <a data-toggle="collapse" data-parent="#accordion" href="#address_info"><?php echo Lang::t('Payment Information') ?></a>
            <?php //if ($can_update || Users::isMyAccount($model->person_id)): ?>
                <!-- <span><a class="pull-right" href="<?php echo $this->createUrl('view', array('id' => $model->id, 'action' => Users::ACTION_UPDATE_ADDRESS)) ?>"><i class="fa fa-edit"></i> <?php echo Lang::t('Edit') ?></a></span>
 -->            <?php // endif; ?>
        </h4>
    </div>

    <div id="address_info" class="panel-collapse collapse">
        <div class="panel-body">
            <div class="detail-view">
            <div class="flash-success" id="formResult"></div>
            <div id="AjaxLoader" style="display: none">
            <div >             <i class="fa fa-cog fa-spin fa-3x fa-fw" aria-hidden="true"></i><span class="sr-only">Saving. Hang tight!</span></div> </div>
      
                <!-- <div  class="col-xs-2"></div> -->
                <div class="col-xs-2">
                        <?php echo $form->textField($model, 'amount', array('class' => 'form-control ','size' =>8, 'maxlength' => 10,'placeholder'=>'amount')); ?>
                        <?php echo $form->error($model, 'amount') ?>
                
                
       
               <!--  <button class="btn btn-sm btn-primary" type="submit"><i class="icon-ok bigger-110"></i> <?php echo Lang::t('Post Amount') ?></button>

               --> 

            

               <?php
                    // echo CHtml::ajaxSubmitButton('Search Record', CHtml::normalizeUrl(array('usersApplicants/searchStud', 'render' => true, 'nope' => $nope)), array(
                    //     'dataType' => 'json',
                    //     'type' => 'post',
                    //     // 'update'=>'#formResult',
                    //     'success' => 'function(data) {
                                                  
                    //     if(data.status=="success"){
                    //      $("#SearchStud_update").show().html(data.url);
                    //      }
                    //      else{
                    //     $.each(data, function(key, val) {
                    //     $("#users-applicants-form #"+key+"_em_").text(val);                                                    
                    //     $("#users-applicants-form #"+key+"_em_").show();
                    //     });
                    //     }       
                    // }',
                    //         ), array('id' => 'btn-search-stud' . uniqid(), 'class' => 'btn-primary', 'style' => 'border-radius:6px'));
                    ?>


 
               <?php echo CHtml::ajaxSubmitButton('Post amount',CHtml::normalizeUrl(array('newPldegePayments/postpayment2','render'=>true,'val'=>$val)),
                 array(
                     'dataType'=>'json',
                     'type'=>'post',
                     'success'=>'function(data) {
                         $("#AjaxLoader").hide();  
                        if(data.status=="success"){
                         $("#formResult").html("Amount posted successfully.");
                         $("#user-form")[0].reset();
                        }
                         else{
                        $.each(data, function(key, val) {
                        $("#new-pldege-payments-form #"+key+"_em_").text(val);                                                    
                        $("#new-pldege-payments-form #"+key+"_em_").show();
                        });
                        }       
                    }',                    
                     'beforeSend'=>'function(){                        
                           $("#AjaxLoader").show();
                      }'
                     ),array('id'=>'mybtn','class'=>'btn btn-sm btn-danger')); ?>
                    </div>

                &nbsp; &nbsp; &nbsp;
               <!-- <a class="btn btn-sm" href="<?php echo Controller::getReturnUrl($this->createUrl('index')) ?>"><i class="icon-remove bigger-110"></i><?php echo Lang::t('Cancel') ?></a>
         <div class="col-md-12"></div> -->
            
 

<?php 
$recs = NewPldegePayments::model()->findAll('newpledgeid='.$val,array('order'=>'created asc'));
$total=0;
?>
<table class="col-sm-4">
    

        <?php foreach($recs as $rec){?>
        <tr>
            
        
        <td>
           <?php  echo CHTML::encode($rec->created);     ?>
        </td>
        <td>
           <?php  echo number_format(CHTML::encode($rec->amount));     ?>
        </td>
        </tr>
      <?php  $total=$total+$rec->amount;
       }; ?>
      <tr><td>Total Paid</td><td> <?php echo  number_format($total)?></td></tr>

</table> 
      </div>
    </div>
</div>


<?php $this->endWidget(); ?>