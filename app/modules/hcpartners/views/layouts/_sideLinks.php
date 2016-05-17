<?php if ($this->showLink(UserResources::RES_USER_ADMIN)): ?>
        <li class="<?php //echo $this->getModuleName() === 'users' ? 'active open' : '' ?>">
                <a href="<?php echo Yii::app()->createUrl('users/default/index') ?>" class="dropdown-toggle">
                        <i class="icon-user"></i>
                        <span class="menu-text"> <?php echo Lang::t('Reports') ?></span>
                        <b class="arrow icon-angle-down"></b>
                </a>
                <ul class="submenu">
                               <li class="<?php //echo $this->activeMenu === UsersModuleController::MENU_USER_ADMIN ? 'active' : '' ?>"><a href="<?php echo Yii::app()->createUrl('hcpartners/partnerscontribution/cleared') ?>"><i class="icon-double-angle-right"></i><?php echo Lang::t('Settled pledges') ?></a></li>
                               <li class="<?php //echo $this->activeMenu === UsersModuleController::MENU_USER_ROLES ? 'active' : '' ?>"><a href="<?php echo Yii::app()->createUrl('hcpartners/partnerscontribution/notcleared') ?>"><i class="icon-double-angle-right"></i><?php echo Lang::t('Unsettled Pledges') ?></a></li>
                               <li class="<?php //echo $this->activeMenu === UsersModuleController::MENU_USER_RESOURCES ? 'active' : '' ?>"><a href="<?php echo Yii::app()->createUrl('hcpartners/default/totals') ?>"><i class="icon-double-angle-right"></i><?php echo Lang::t('Payment Progress') ?></a></li>
                               <li class="<?php //echo $this->activeMenu === UsersModuleController::MENU_USER_LEVELS ? 'active' : '' ?>"><a href="<?php echo Yii::app()->createUrl('hcpartners/partnerscontribution/admin') ?>"><i class="icon-double-angle-right"></i><?php echo Lang::t('Manage Payments ') ?></a></li>
                                        
                                <li class="<?php //echo $this->activeMenu === UsersModuleController::MENU_USER_LEVELS ? 'active' : '' ?>"><a href="<?php echo Yii::app()->createUrl('hcpartners/default/admin') ?>"><i class="icon-double-angle-right"></i><?php echo Lang::t('Manage Partners') ?></a></li>
                                 <li class="<?php //echo $this->activeMenu === UsersModuleController::MENU_USER_LEVELS ? 'active' : '' ?>"><a href="<?php echo Yii::app()->createUrl('hcpartners/partnerscontribution/Hccontributionreport') ?>"><i class="icon-double-angle-right"></i><?php echo Lang::t('View Payment Report ') ?></a></li>
                                    
                </ul>
        </li>
<?php endif; ?>

