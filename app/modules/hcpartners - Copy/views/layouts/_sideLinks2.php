
<?php
//echo UsersModuleController::LOG_LINK;die();
//echo $this->activeMenu;die();
 if ($this->showLink(UserResources::RES_USER_ADMIN)): ?>
        <li class="<?php echo $this->getModuleName() === 'hcpartners' ? 'active open' : '' ?>">
                <a href="<?php echo Yii::app()->createUrl('users/default/index') ?>" class="dropdown-toggle">
                        <i class="icon-calendar"></i>
                        <span class="menu-text"> <?php echo Lang::t('Data Importation') ?></span>
                        <b class="arrow icon-angle-down"></b>
                </a>
                <ul class="submenu">
                               <li class="<?php echo $this->activeMenu === UsersModuleController::MENU_USER_ADMIN ? 'active' : '' ?>"><a href="<?php echo Yii::app()->createUrl('hcpartners/default/ImportCSV') ?>"><i class="icon-double-angle-right"></i><?php echo Lang::t('import data') ?></a></li>
                               <li class="<?php echo $this->activeMenu === UsersModuleController::MENU_USER_ROLES ? 'active' : '' ?>"><a href="<?php echo Yii::app()->createUrl('hcpartners/csvimport/admin') ?>"><i class="icon-double-angle-right"></i><?php echo Lang::t('data not imported') ?></a></li>
                                             
                </ul>
        </li>
<?php endif; ?>

