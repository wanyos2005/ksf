
<style>
.top {
    vertical-align: text-top;
}

img.bottom {
    vertical-align: text-bottom;
}
</style>
<?php


#status
 if (isset($_REQUEST['status'])) {
    
    $status=$_REQUEST['status'];
} else {
     $status='';
}

//var_dump($status);die();
#patient id
if (isset($_REQUEST['patientid'])) {
    ;
    $patientid=$_REQUEST['patientid'];
} else {
     $patientid='';
}
?>


<table>
<? if (strlen($status) > 0){?>
<tr><td colspan="2"><?  //$this->renderPartial('../finalDiagnosis/_form', array('model' => $finalDiagnosis,'patientid'=>$patientid ))?></td></tr>
<? }?>
    <tr>
        <td>
                <div class="panel panel-default">
                <div class="panel-heading">Part </div>
                    <div class="panel-body">

                      <table class="table table-bordered table-condensed table-hover">
                                <thead>
                                        <tr><th><?php echo Lang::t('Patient') ?></th><th><?php echo Lang::t('diagnosis') ?></th><th><?php echo Lang::t('status') ?></th></tr>
                                </thead>
                                <tbody>
                                      <tr><td><?  echo  $model->name?></td><td><?php echo $model->amountpledged ?></td><td><?php echo $model->code ?></td></tr>
                             
                                </tbody>
                        </table>
                
                    </div>
            </div>

        </td>
        <td class="top">
           <div class="panel panel-default">
            <div class="panel-heading">Past visit </div>
                    <div class="panel-body">
                


<? $partnersContribution=$partnersContribution->model()->findAll('code=:code', array(':code' => $model->code));?>
 <div class="table-responsive">
                        <table class="table table-bordered table-condensed table-hover">
                                <thead>
                                        <tr><th><?php echo Lang::t('Patient') ?></th><th><?php echo Lang::t('diagnosis') ?></th><th><?php echo Lang::t('status') ?></th></tr>
                                </thead>
                                <tbody>
                                        <?php foreach ($partnersContribution as $r): 
                                           
                                               
                                            
                                        ?>
                                              <tr><td><?  echo  $r->created?></td><td><?php echo $r->amount ?></td><td><?php echo $r->transactionno ?></td></tr>
                             
                                             

                                        <?php endforeach; ?>
                                </tbody>
                        </table>


 
                    </div>
            </div>

        </td>
    </tr>
</table>



<?php Yii::app()->clientScript->registerScript('my-roles-view', "MyController.Users.Roles.init();"); ?>