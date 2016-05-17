<div class="sidebar sidebar-fixed<?php echo $this->sidebar_collapsed ? ' menu-min' : '' ?>" id="sidebar">
        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                        <a class="btn btn-success" href="<?php echo Yii::app()->createUrl('parking/default/index') ?>" title="Parking"><i class="icon-truck"></i></a>
                        <a class="btn btn-warning" href="<?php echo Yii::app()->createUrl('users/default/view') ?>" title="Profile"><i class="icon-user"></i></a>
                        <a class="btn btn-danger" href="<?php echo Yii::app()->createUrl('settings/default/index') ?>" title="Settings"><i class="icon-wrench"></i></a>
                </div>
                <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                        <span class="btn btn-success"></span>
                        <span class="btn btn-info"></span>
                        <span class="btn btn-warning"></span>
                        <span class="btn btn-danger"></span>
                </div>
        </div><!-- #sidebar-shortcuts -->
        <ul class="nav nav-list my-nav">
                <li><a href="<?php echo Yii::app()->createUrl('admin/default/index') ?>"><i class="icon-dashboard"></i><span class="menu-text"> <?php echo Lang::t('Dashboard') ?> </span></a></li>
                <?php
                if (Controller::isModuleEnabled(ModulesEnabled::MOD_DEPT)):
                        $this->renderPartial(ModulesEnabled::MOD_DEPT . '.views.layouts._sideLinks');
                endif;
                ?>
                <?php
                if (Controller::isModuleEnabled(ModulesEnabled::MOD_PARKING)):
                        $this->renderPartial(ModulesEnabled::MOD_PARKING . '.views.layouts._sideLinks');
                endif;
                ?>
                <?php
                if (Controller::isModuleEnabled(ModulesEnabled::MOD_BUSINESS_PERMIT)):
                        $this->renderPartial(ModulesEnabled::MOD_BUSINESS_PERMIT . '.views.layouts._sideLinks');
                endif;
                ?>
                <?php
                if (Controller::isModuleEnabled(ModulesEnabled::MOD_LAND_RATES)):
                        $this->renderPartial(ModulesEnabled::MOD_LAND_RATES . '.views.layouts._sideLinks');
                endif;
                ?>
                <?php
                if (Controller::isModuleEnabled(ModulesEnabled::MOD_MARKET_FEES)):
                        $this->renderPartial(ModulesEnabled::MOD_MARKET_FEES . '.views.layouts._sideLinks');
                endif;
                ?>
                <?php
                if (Controller::isModuleEnabled(ModulesEnabled::MOD_CESS)):
                        $this->renderPartial(ModulesEnabled::MOD_CESS . '.views.layouts._sideLinks');
                endif;
                ?>
                <?php
                if ($this->showLink(UserResources::RES_USER_ADMIN)):
                        $this->renderPartial('users.views.layouts._sideLinks');
                endif;
                ?>
                <?php $this->renderPartial('settings.views.layouts._sideLinks'); ?>
        </ul><!-- /.nav-list -->

        <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
        </div>
</div>