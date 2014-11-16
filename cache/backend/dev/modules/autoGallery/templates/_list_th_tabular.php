<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_title ui-state-default ui-th-column">
  <?php if ('title' == $sort[0]): ?>
    <?php /*echo link_to(__('Titulek', array(), 'messages'), '@gallery?sort=title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@gallery?sort=title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Titulek', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Titulek', array(), 'messages'), '@gallery?sort=title&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@gallery?sort=title&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Titulek', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_boolean sf_admin_list_th_is_active ui-state-default ui-th-column">
  <?php if ('is_active' == $sort[0]): ?>
    <?php /*echo link_to(__('Aktivní', array(), 'messages'), '@gallery?sort=is_active&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@gallery?sort=is_active&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Aktivní', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Aktivní', array(), 'messages'), '@gallery?sort=is_active&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@gallery?sort=is_active&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Aktivní', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_description ui-state-default ui-th-column">
  <?php if ('description' == $sort[0]): ?>
    <?php /*echo link_to(__('Popis', array(), 'messages'), '@gallery?sort=description&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@gallery?sort=description&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Popis', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Popis', array(), 'messages'), '@gallery?sort=description&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@gallery?sort=description&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Popis', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>