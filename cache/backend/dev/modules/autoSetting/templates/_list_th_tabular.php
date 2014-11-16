<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_id ui-state-default ui-th-column">
  <?php if ('id' == $sort[0]): ?>
    <?php /*echo link_to(__('Id', array(), 'messages'), '@setting?sort=id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@setting?sort=id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Id', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Id', array(), 'messages'), '@setting?sort=id&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@setting?sort=id&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Id', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_SiteName ui-state-default ui-th-column">
  <?php if ('SiteName' == $sort[0]): ?>
    <?php /*echo link_to(__('Site name', array(), 'messages'), '@setting?sort=SiteName&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@setting?sort=SiteName&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Site name', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Site name', array(), 'messages'), '@setting?sort=SiteName&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@setting?sort=SiteName&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Site name', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_email ui-state-default ui-th-column">
  <?php if ('email' == $sort[0]): ?>
    <?php /*echo link_to(__('Email', array(), 'messages'), '@setting?sort=email&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@setting?sort=email&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Email', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Email', array(), 'messages'), '@setting?sort=email&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@setting?sort=email&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Email', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_tel ui-state-default ui-th-column">
  <?php if ('tel' == $sort[0]): ?>
    <?php /*echo link_to(__('Tel', array(), 'messages'), '@setting?sort=tel&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@setting?sort=tel&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Tel', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Tel', array(), 'messages'), '@setting?sort=tel&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@setting?sort=tel&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Tel', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_mobil ui-state-default ui-th-column">
  <?php if ('mobil' == $sort[0]): ?>
    <?php /*echo link_to(__('Mobil', array(), 'messages'), '@setting?sort=mobil&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@setting?sort=mobil&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Mobil', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Mobil', array(), 'messages'), '@setting?sort=mobil&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@setting?sort=mobil&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Mobil', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_pracovni_doba ui-state-default ui-th-column">
  <?php if ('pracovni_doba' == $sort[0]): ?>
    <?php /*echo link_to(__('Pracovni doba', array(), 'messages'), '@setting?sort=pracovni_doba&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@setting?sort=pracovni_doba&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Pracovni doba', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Pracovni doba', array(), 'messages'), '@setting?sort=pracovni_doba&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@setting?sort=pracovni_doba&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Pracovni doba', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_ulice ui-state-default ui-th-column">
  <?php if ('ulice' == $sort[0]): ?>
    <?php /*echo link_to(__('Ulice', array(), 'messages'), '@setting?sort=ulice&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@setting?sort=ulice&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Ulice', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Ulice', array(), 'messages'), '@setting?sort=ulice&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@setting?sort=ulice&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Ulice', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_mesto ui-state-default ui-th-column">
  <?php if ('mesto' == $sort[0]): ?>
    <?php /*echo link_to(__('Mesto', array(), 'messages'), '@setting?sort=mesto&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@setting?sort=mesto&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Mesto', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Mesto', array(), 'messages'), '@setting?sort=mesto&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@setting?sort=mesto&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Mesto', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_web_adr ui-state-default ui-th-column">
  <?php if ('web_adr' == $sort[0]): ?>
    <?php /*echo link_to(__('Web adr', array(), 'messages'), '@setting?sort=web_adr&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@setting?sort=web_adr&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Web adr', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Web adr', array(), 'messages'), '@setting?sort=web_adr&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@setting?sort=web_adr&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Web adr', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_ga_code ui-state-default ui-th-column">
  <?php if ('ga_code' == $sort[0]): ?>
    <?php /*echo link_to(__('Ga code', array(), 'messages'), '@setting?sort=ga_code&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@setting?sort=ga_code&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Ga code', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Ga code', array(), 'messages'), '@setting?sort=ga_code&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@setting?sort=ga_code&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Ga code', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_google_overeni ui-state-default ui-th-column">
  <?php if ('google_overeni' == $sort[0]): ?>
    <?php /*echo link_to(__('Google overeni', array(), 'messages'), '@setting?sort=google_overeni&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@setting?sort=google_overeni&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Google overeni', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Google overeni', array(), 'messages'), '@setting?sort=google_overeni&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@setting?sort=google_overeni&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Google overeni', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_date sf_admin_list_th_created_at ui-state-default ui-th-column">
  <?php if ('created_at' == $sort[0]): ?>
    <?php /*echo link_to(__('Created at', array(), 'messages'), '@setting?sort=created_at&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@setting?sort=created_at&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Created at', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Created at', array(), 'messages'), '@setting?sort=created_at&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@setting?sort=created_at&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Created at', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_date sf_admin_list_th_updated_at ui-state-default ui-th-column">
  <?php if ('updated_at' == $sort[0]): ?>
    <?php /*echo link_to(__('Updated at', array(), 'messages'), '@setting?sort=updated_at&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@setting?sort=updated_at&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Updated at', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Updated at', array(), 'messages'), '@setting?sort=updated_at&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@setting?sort=updated_at&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Updated at', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>