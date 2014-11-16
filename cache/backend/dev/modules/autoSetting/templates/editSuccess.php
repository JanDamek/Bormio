<?php use_helper('I18N', 'Date') ?>
<?php include_partial('setting/assets') ?>

<div id="sf_admin_container" class="sf_admin_edit ui-widget ui-widget-content ui-corner-all">
  <div class="fg-toolbar ui-widget-header ui-corner-all">
    <h1><?php echo __('Edit Setting', array(), 'messages') ?></h1>
  </div>

  <?php include_partial('setting/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('setting/form_header', array('setting' => $setting, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('setting/form', array('setting' => $setting, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('setting/form_footer', array('setting' => $setting, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <?php include_partial('setting/themeswitcher') ?>
</div>
