<?php
// $form_id = 'patients-form';
// $form = $this->beginWidget('CActiveForm', array(
//     'id' => $form_id,
//     'enableAjaxValidation' => true,
//     'htmlOptions' => array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data', 'role' => 'form'),
//         ));
?>

<?php
        // $form = $this->beginWidget('CActiveForm', array(
        //     'id' => 'new-pledges-form',
        //     'enableAjaxValidation' => true,
        //     'action' => $this->createUrl('newPldeges/postpayment', array('nope' => 1)),
        //     'enableClientValidation' => true,
        //     'clientOptions' => array(
        //         'validateOnSubmit' => true,
        //         'validateOnChange' => true,
        //         'validateOnType' => true
        //     ),
        // ));
        // ?>

<?if (is_object($model) && !empty($model->name)):?>
<?php $model2 = new NewPldegePayments; ?>

                                                <?php //$this->renderPartial('_form_personal_det', array('model' => $model)) ?>
                                                 <div class="detail-view ">
                <?php
                $this->widget('application.components.widgets.DetailView', array(
                    'data' => $model,
                    'attributes' => array(
                        array(
                            'name' => 'code',
                        ),
                        array(
                            'name' => 'name',
                        ),
                        array(
                            'name' => 'contact',
                        ),
                       
                    array(
                            'name' => 'occupation',
                        ),
                    array(
                           'name' => 'oldpledge',
                           'visible' => ($model->oldpledge>0),
                       ), array(
                           'name' => 'amount_paid',
                           'visible' => ($model->amount_paid>0),
                       ), array(
                           'name' => 'newpledge',
                           'visible' => ($model->newpledge>0),
                       ), array(
                           'name' => 'totalpldege',
                          
                       ),
                  
                   
                    ),
                ));
                ?>
            </div>
                                       
       
                                                <?php $this->renderPartial('_form_loan_det', array('model' => $model2,'val'=>$model->id)) ?>
                                                
                                       
  
<?else:?>
No record found



<?endif;?>

<?php // $this->endWidget(); ?>


