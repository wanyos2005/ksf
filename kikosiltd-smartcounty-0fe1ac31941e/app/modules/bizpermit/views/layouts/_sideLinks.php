<?php if ($this->showLink(UserResources::RES_BUSINESS_PERMIT)): ?>
        <li  class="<?php echo $this->activeMenu === BizpermitModuleController::MENU_BIZ_PERMIT ? 'active' : '' ?>">
                <a href="<?php echo Yii::app()->createUrl(ModulesEnabled::MOD_BUSINESS_PERMIT . '/default/index') ?>">
                        <i class="icon-certificate"></i>
                        <span class="menu-text"> <?php echo Lang::t('Business Permits') ?></span>
                </a>
        </li>
<?php endif; ?>

