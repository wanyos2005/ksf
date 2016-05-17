<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <i class="fa fa-chevron-down"></i> <a data-toggle="collapse" data-parent="#accordion" href="#personal_info"><?php echo Lang::t('Personal Information') ?></a>
            <?php //if (Users::isMyAccount($model->id)): ?>
                <!-- <span><a class="pull-right" href="<?php echo $this->createUrl('view', array('id' => $model->id, 'action' => Users::ACTION_UPDATE_PERSONAL)) ?>"><i class="fa fa-edit"></i> <?php echo Lang::t('Edit') ?></a></span> -->
            <?php // endif; ?>
        </h4>
    </div>
   
    <div id="personal_info" class="panel-collapse collapse">
        <div class="panel-body">
            <div class="detail-view">
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
        </div>
    </div>
</div>
 </div>