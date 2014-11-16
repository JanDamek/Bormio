<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_id ui-state-default ui-th-column">
  <?php if ('id' == $sort[0]): ?>
    <?php /*echo link_to(__('Id', array(), 'messages'), '@stranka?sort=id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Id', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Id', array(), 'messages'), '@stranka?sort=id&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=id&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Id', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_name ui-state-default ui-th-column">
  <?php if ('name' == $sort[0]): ?>
    <?php /*echo link_to(__('Name', array(), 'messages'), '@stranka?sort=name&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=name&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Name', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Name', array(), 'messages'), '@stranka?sort=name&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=name&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Name', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_link_h1 ui-state-default ui-th-column">
  <?php if ('link_h1' == $sort[0]): ?>
    <?php /*echo link_to(__('Link h1', array(), 'messages'), '@stranka?sort=link_h1&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=link_h1&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Link h1', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Link h1', array(), 'messages'), '@stranka?sort=link_h1&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=link_h1&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Link h1', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_title_seo ui-state-default ui-th-column">
  <?php if ('title_seo' == $sort[0]): ?>
    <?php /*echo link_to(__('Title seo', array(), 'messages'), '@stranka?sort=title_seo&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=title_seo&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Title seo', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Title seo', array(), 'messages'), '@stranka?sort=title_seo&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=title_seo&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Title seo', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_keywords ui-state-default ui-th-column">
  <?php if ('keywords' == $sort[0]): ?>
    <?php /*echo link_to(__('Keywords', array(), 'messages'), '@stranka?sort=keywords&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=keywords&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Keywords', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Keywords', array(), 'messages'), '@stranka?sort=keywords&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=keywords&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Keywords', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_description ui-state-default ui-th-column">
  <?php if ('description' == $sort[0]): ?>
    <?php /*echo link_to(__('Description', array(), 'messages'), '@stranka?sort=description&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=description&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Description', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Description', array(), 'messages'), '@stranka?sort=description&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=description&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Description', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_title_str ui-state-default ui-th-column">
  <?php if ('title_str' == $sort[0]): ?>
    <?php /*echo link_to(__('Title str', array(), 'messages'), '@stranka?sort=title_str&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=title_str&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Title str', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Title str', array(), 'messages'), '@stranka?sort=title_str&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=title_str&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Title str', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_top_img ui-state-default ui-th-column">
  <?php if ('top_img' == $sort[0]): ?>
    <?php /*echo link_to(__('Top img', array(), 'messages'), '@stranka?sort=top_img&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=top_img&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Top img', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Top img', array(), 'messages'), '@stranka?sort=top_img&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=top_img&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Top img', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_top_img_title ui-state-default ui-th-column">
  <?php if ('top_img_title' == $sort[0]): ?>
    <?php /*echo link_to(__('Top img title', array(), 'messages'), '@stranka?sort=top_img_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=top_img_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Top img title', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Top img title', array(), 'messages'), '@stranka?sort=top_img_title&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=top_img_title&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Top img title', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_top_img_alt ui-state-default ui-th-column">
  <?php if ('top_img_alt' == $sort[0]): ?>
    <?php /*echo link_to(__('Top img alt', array(), 'messages'), '@stranka?sort=top_img_alt&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=top_img_alt&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Top img alt', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Top img alt', array(), 'messages'), '@stranka?sort=top_img_alt&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=top_img_alt&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Top img alt', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_popis_levy ui-state-default ui-th-column">
  <?php if ('popis_levy' == $sort[0]): ?>
    <?php /*echo link_to(__('Popis levy', array(), 'messages'), '@stranka?sort=popis_levy&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=popis_levy&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Popis levy', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Popis levy', array(), 'messages'), '@stranka?sort=popis_levy&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=popis_levy&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Popis levy', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_popis_pravy ui-state-default ui-th-column">
  <?php if ('popis_pravy' == $sort[0]): ?>
    <?php /*echo link_to(__('Popis pravy', array(), 'messages'), '@stranka?sort=popis_pravy&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=popis_pravy&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Popis pravy', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Popis pravy', array(), 'messages'), '@stranka?sort=popis_pravy&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=popis_pravy&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Popis pravy', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_region ui-state-default ui-th-column">
  <?php if ('region' == $sort[0]): ?>
    <?php /*echo link_to(__('Region', array(), 'messages'), '@stranka?sort=region&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=region&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Region', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Region', array(), 'messages'), '@stranka?sort=region&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=region&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Region', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_vzdalenost ui-state-default ui-th-column">
  <?php if ('vzdalenost' == $sort[0]): ?>
    <?php /*echo link_to(__('Vzdalenost', array(), 'messages'), '@stranka?sort=vzdalenost&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=vzdalenost&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Vzdalenost', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Vzdalenost', array(), 'messages'), '@stranka?sort=vzdalenost&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=vzdalenost&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Vzdalenost', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_img1 ui-state-default ui-th-column">
  <?php if ('img1' == $sort[0]): ?>
    <?php /*echo link_to(__('Img1', array(), 'messages'), '@stranka?sort=img1&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=img1&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Img1', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Img1', array(), 'messages'), '@stranka?sort=img1&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=img1&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Img1', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_img1_title ui-state-default ui-th-column">
  <?php if ('img1_title' == $sort[0]): ?>
    <?php /*echo link_to(__('Img1 title', array(), 'messages'), '@stranka?sort=img1_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=img1_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Img1 title', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Img1 title', array(), 'messages'), '@stranka?sort=img1_title&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=img1_title&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Img1 title', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_img1_alt ui-state-default ui-th-column">
  <?php if ('img1_alt' == $sort[0]): ?>
    <?php /*echo link_to(__('Img1 alt', array(), 'messages'), '@stranka?sort=img1_alt&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=img1_alt&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Img1 alt', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Img1 alt', array(), 'messages'), '@stranka?sort=img1_alt&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=img1_alt&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Img1 alt', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_img2 ui-state-default ui-th-column">
  <?php if ('img2' == $sort[0]): ?>
    <?php /*echo link_to(__('Img2', array(), 'messages'), '@stranka?sort=img2&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=img2&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Img2', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Img2', array(), 'messages'), '@stranka?sort=img2&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=img2&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Img2', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_img2_title ui-state-default ui-th-column">
  <?php if ('img2_title' == $sort[0]): ?>
    <?php /*echo link_to(__('Img2 title', array(), 'messages'), '@stranka?sort=img2_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=img2_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Img2 title', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Img2 title', array(), 'messages'), '@stranka?sort=img2_title&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=img2_title&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Img2 title', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_img2_alt ui-state-default ui-th-column">
  <?php if ('img2_alt' == $sort[0]): ?>
    <?php /*echo link_to(__('Img2 alt', array(), 'messages'), '@stranka?sort=img2_alt&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=img2_alt&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Img2 alt', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Img2 alt', array(), 'messages'), '@stranka?sort=img2_alt&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=img2_alt&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Img2 alt', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_img3 ui-state-default ui-th-column">
  <?php if ('img3' == $sort[0]): ?>
    <?php /*echo link_to(__('Img3', array(), 'messages'), '@stranka?sort=img3&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=img3&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Img3', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Img3', array(), 'messages'), '@stranka?sort=img3&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=img3&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Img3', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_img3_title ui-state-default ui-th-column">
  <?php if ('img3_title' == $sort[0]): ?>
    <?php /*echo link_to(__('Img3 title', array(), 'messages'), '@stranka?sort=img3_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=img3_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Img3 title', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Img3 title', array(), 'messages'), '@stranka?sort=img3_title&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=img3_title&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Img3 title', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_img3_alt ui-state-default ui-th-column">
  <?php if ('img3_alt' == $sort[0]): ?>
    <?php /*echo link_to(__('Img3 alt', array(), 'messages'), '@stranka?sort=img3_alt&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=img3_alt&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Img3 alt', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Img3 alt', array(), 'messages'), '@stranka?sort=img3_alt&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=img3_alt&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Img3 alt', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_img4 ui-state-default ui-th-column">
  <?php if ('img4' == $sort[0]): ?>
    <?php /*echo link_to(__('Img4', array(), 'messages'), '@stranka?sort=img4&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=img4&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Img4', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Img4', array(), 'messages'), '@stranka?sort=img4&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=img4&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Img4', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_img4_title ui-state-default ui-th-column">
  <?php if ('img4_title' == $sort[0]): ?>
    <?php /*echo link_to(__('Img4 title', array(), 'messages'), '@stranka?sort=img4_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=img4_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Img4 title', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Img4 title', array(), 'messages'), '@stranka?sort=img4_title&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=img4_title&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Img4 title', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_img4_alt ui-state-default ui-th-column">
  <?php if ('img4_alt' == $sort[0]): ?>
    <?php /*echo link_to(__('Img4 alt', array(), 'messages'), '@stranka?sort=img4_alt&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=img4_alt&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Img4 alt', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Img4 alt', array(), 'messages'), '@stranka?sort=img4_alt&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=img4_alt&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Img4 alt', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_promo1_title ui-state-default ui-th-column">
  <?php if ('promo1_title' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo1 title', array(), 'messages'), '@stranka?sort=promo1_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo1_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo1 title', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo1 title', array(), 'messages'), '@stranka?sort=promo1_title&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo1_title&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo1 title', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_promo1_img ui-state-default ui-th-column">
  <?php if ('promo1_img' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo1 img', array(), 'messages'), '@stranka?sort=promo1_img&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo1_img&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo1 img', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo1 img', array(), 'messages'), '@stranka?sort=promo1_img&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo1_img&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo1 img', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_promo1_img_title ui-state-default ui-th-column">
  <?php if ('promo1_img_title' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo1 img title', array(), 'messages'), '@stranka?sort=promo1_img_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo1_img_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo1 img title', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo1 img title', array(), 'messages'), '@stranka?sort=promo1_img_title&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo1_img_title&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo1 img title', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_promo1_img_alt ui-state-default ui-th-column">
  <?php if ('promo1_img_alt' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo1 img alt', array(), 'messages'), '@stranka?sort=promo1_img_alt&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo1_img_alt&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo1 img alt', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo1 img alt', array(), 'messages'), '@stranka?sort=promo1_img_alt&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo1_img_alt&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo1 img alt', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_foreignkey sf_admin_list_th_promo1_gallery_id ui-state-default ui-th-column">
  <?php if ('promo1_gallery_id' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo1 gallery', array(), 'messages'), '@stranka?sort=promo1_gallery_id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo1_gallery_id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo1 gallery', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo1 gallery', array(), 'messages'), '@stranka?sort=promo1_gallery_id&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo1_gallery_id&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo1 gallery', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_promo1_star ui-state-default ui-th-column">
  <?php if ('promo1_star' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo1 star', array(), 'messages'), '@stranka?sort=promo1_star&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo1_star&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo1 star', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo1 star', array(), 'messages'), '@stranka?sort=promo1_star&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo1_star&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo1 star', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_promo1_popis ui-state-default ui-th-column">
  <?php if ('promo1_popis' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo1 popis', array(), 'messages'), '@stranka?sort=promo1_popis&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo1_popis&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo1 popis', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo1 popis', array(), 'messages'), '@stranka?sort=promo1_popis&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo1_popis&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo1 popis', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_promo1_cena ui-state-default ui-th-column">
  <?php if ('promo1_cena' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo1 cena', array(), 'messages'), '@stranka?sort=promo1_cena&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo1_cena&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo1 cena', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo1 cena', array(), 'messages'), '@stranka?sort=promo1_cena&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo1_cena&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo1 cena', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_promo1_link ui-state-default ui-th-column">
  <?php if ('promo1_link' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo1 link', array(), 'messages'), '@stranka?sort=promo1_link&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo1_link&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo1 link', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo1 link', array(), 'messages'), '@stranka?sort=promo1_link&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo1_link&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo1 link', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_promo2_title ui-state-default ui-th-column">
  <?php if ('promo2_title' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo2 title', array(), 'messages'), '@stranka?sort=promo2_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo2_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo2 title', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo2 title', array(), 'messages'), '@stranka?sort=promo2_title&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo2_title&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo2 title', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_promo2_img ui-state-default ui-th-column">
  <?php if ('promo2_img' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo2 img', array(), 'messages'), '@stranka?sort=promo2_img&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo2_img&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo2 img', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo2 img', array(), 'messages'), '@stranka?sort=promo2_img&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo2_img&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo2 img', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_promo2_img_title ui-state-default ui-th-column">
  <?php if ('promo2_img_title' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo2 img title', array(), 'messages'), '@stranka?sort=promo2_img_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo2_img_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo2 img title', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo2 img title', array(), 'messages'), '@stranka?sort=promo2_img_title&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo2_img_title&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo2 img title', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_promo2_img_alt ui-state-default ui-th-column">
  <?php if ('promo2_img_alt' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo2 img alt', array(), 'messages'), '@stranka?sort=promo2_img_alt&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo2_img_alt&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo2 img alt', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo2 img alt', array(), 'messages'), '@stranka?sort=promo2_img_alt&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo2_img_alt&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo2 img alt', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_foreignkey sf_admin_list_th_promo2_gallery_id ui-state-default ui-th-column">
  <?php if ('promo2_gallery_id' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo2 gallery', array(), 'messages'), '@stranka?sort=promo2_gallery_id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo2_gallery_id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo2 gallery', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo2 gallery', array(), 'messages'), '@stranka?sort=promo2_gallery_id&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo2_gallery_id&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo2 gallery', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_promo2_star ui-state-default ui-th-column">
  <?php if ('promo2_star' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo2 star', array(), 'messages'), '@stranka?sort=promo2_star&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo2_star&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo2 star', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo2 star', array(), 'messages'), '@stranka?sort=promo2_star&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo2_star&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo2 star', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_promo2_popis ui-state-default ui-th-column">
  <?php if ('promo2_popis' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo2 popis', array(), 'messages'), '@stranka?sort=promo2_popis&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo2_popis&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo2 popis', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo2 popis', array(), 'messages'), '@stranka?sort=promo2_popis&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo2_popis&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo2 popis', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_promo2_cena ui-state-default ui-th-column">
  <?php if ('promo2_cena' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo2 cena', array(), 'messages'), '@stranka?sort=promo2_cena&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo2_cena&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo2 cena', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo2 cena', array(), 'messages'), '@stranka?sort=promo2_cena&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo2_cena&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo2 cena', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_promo2_link ui-state-default ui-th-column">
  <?php if ('promo2_link' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo2 link', array(), 'messages'), '@stranka?sort=promo2_link&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo2_link&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo2 link', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo2 link', array(), 'messages'), '@stranka?sort=promo2_link&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo2_link&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo2 link', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_promo3_title ui-state-default ui-th-column">
  <?php if ('promo3_title' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo3 title', array(), 'messages'), '@stranka?sort=promo3_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo3_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo3 title', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo3 title', array(), 'messages'), '@stranka?sort=promo3_title&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo3_title&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo3 title', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_promo3_img ui-state-default ui-th-column">
  <?php if ('promo3_img' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo3 img', array(), 'messages'), '@stranka?sort=promo3_img&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo3_img&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo3 img', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo3 img', array(), 'messages'), '@stranka?sort=promo3_img&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo3_img&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo3 img', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_promo3_img_title ui-state-default ui-th-column">
  <?php if ('promo3_img_title' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo3 img title', array(), 'messages'), '@stranka?sort=promo3_img_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo3_img_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo3 img title', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo3 img title', array(), 'messages'), '@stranka?sort=promo3_img_title&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo3_img_title&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo3 img title', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_promo3_img_alt ui-state-default ui-th-column">
  <?php if ('promo3_img_alt' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo3 img alt', array(), 'messages'), '@stranka?sort=promo3_img_alt&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo3_img_alt&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo3 img alt', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo3 img alt', array(), 'messages'), '@stranka?sort=promo3_img_alt&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo3_img_alt&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo3 img alt', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_foreignkey sf_admin_list_th_promo3_gallery_id ui-state-default ui-th-column">
  <?php if ('promo3_gallery_id' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo3 gallery', array(), 'messages'), '@stranka?sort=promo3_gallery_id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo3_gallery_id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo3 gallery', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo3 gallery', array(), 'messages'), '@stranka?sort=promo3_gallery_id&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo3_gallery_id&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo3 gallery', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_promo3_star ui-state-default ui-th-column">
  <?php if ('promo3_star' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo3 star', array(), 'messages'), '@stranka?sort=promo3_star&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo3_star&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo3 star', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo3 star', array(), 'messages'), '@stranka?sort=promo3_star&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo3_star&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo3 star', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_promo3_popis ui-state-default ui-th-column">
  <?php if ('promo3_popis' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo3 popis', array(), 'messages'), '@stranka?sort=promo3_popis&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo3_popis&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo3 popis', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo3 popis', array(), 'messages'), '@stranka?sort=promo3_popis&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo3_popis&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo3 popis', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_promo3_cena ui-state-default ui-th-column">
  <?php if ('promo3_cena' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo3 cena', array(), 'messages'), '@stranka?sort=promo3_cena&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo3_cena&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo3 cena', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo3 cena', array(), 'messages'), '@stranka?sort=promo3_cena&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo3_cena&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo3 cena', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_promo3_link ui-state-default ui-th-column">
  <?php if ('promo3_link' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo3 link', array(), 'messages'), '@stranka?sort=promo3_link&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo3_link&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo3 link', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo3 link', array(), 'messages'), '@stranka?sort=promo3_link&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo3_link&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo3 link', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_promo4_title ui-state-default ui-th-column">
  <?php if ('promo4_title' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo4 title', array(), 'messages'), '@stranka?sort=promo4_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo4_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo4 title', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo4 title', array(), 'messages'), '@stranka?sort=promo4_title&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo4_title&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo4 title', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_promo4_img ui-state-default ui-th-column">
  <?php if ('promo4_img' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo4 img', array(), 'messages'), '@stranka?sort=promo4_img&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo4_img&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo4 img', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo4 img', array(), 'messages'), '@stranka?sort=promo4_img&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo4_img&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo4 img', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_promo4_img_title ui-state-default ui-th-column">
  <?php if ('promo4_img_title' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo4 img title', array(), 'messages'), '@stranka?sort=promo4_img_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo4_img_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo4 img title', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo4 img title', array(), 'messages'), '@stranka?sort=promo4_img_title&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo4_img_title&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo4 img title', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_promo4_img_alt ui-state-default ui-th-column">
  <?php if ('promo4_img_alt' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo4 img alt', array(), 'messages'), '@stranka?sort=promo4_img_alt&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo4_img_alt&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo4 img alt', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo4 img alt', array(), 'messages'), '@stranka?sort=promo4_img_alt&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo4_img_alt&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo4 img alt', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_foreignkey sf_admin_list_th_promo4_gallery_id ui-state-default ui-th-column">
  <?php if ('promo4_gallery_id' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo4 gallery', array(), 'messages'), '@stranka?sort=promo4_gallery_id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo4_gallery_id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo4 gallery', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo4 gallery', array(), 'messages'), '@stranka?sort=promo4_gallery_id&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo4_gallery_id&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo4 gallery', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_promo4_star ui-state-default ui-th-column">
  <?php if ('promo4_star' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo4 star', array(), 'messages'), '@stranka?sort=promo4_star&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo4_star&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo4 star', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo4 star', array(), 'messages'), '@stranka?sort=promo4_star&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo4_star&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo4 star', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_promo4_popis ui-state-default ui-th-column">
  <?php if ('promo4_popis' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo4 popis', array(), 'messages'), '@stranka?sort=promo4_popis&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo4_popis&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo4 popis', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo4 popis', array(), 'messages'), '@stranka?sort=promo4_popis&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo4_popis&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo4 popis', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_promo4_cena ui-state-default ui-th-column">
  <?php if ('promo4_cena' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo4 cena', array(), 'messages'), '@stranka?sort=promo4_cena&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo4_cena&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo4 cena', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo4 cena', array(), 'messages'), '@stranka?sort=promo4_cena&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo4_cena&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo4 cena', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_promo4_link ui-state-default ui-th-column">
  <?php if ('promo4_link' == $sort[0]): ?>
    <?php /*echo link_to(__('Promo4 link', array(), 'messages'), '@stranka?sort=promo4_link&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo4_link&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Promo4 link', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Promo4 link', array(), 'messages'), '@stranka?sort=promo4_link&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=promo4_link&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Promo4 link', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_baner1_img ui-state-default ui-th-column">
  <?php if ('baner1_img' == $sort[0]): ?>
    <?php /*echo link_to(__('Baner1 img', array(), 'messages'), '@stranka?sort=baner1_img&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=baner1_img&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Baner1 img', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Baner1 img', array(), 'messages'), '@stranka?sort=baner1_img&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=baner1_img&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Baner1 img', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_baner1_img_title ui-state-default ui-th-column">
  <?php if ('baner1_img_title' == $sort[0]): ?>
    <?php /*echo link_to(__('Baner1 img title', array(), 'messages'), '@stranka?sort=baner1_img_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=baner1_img_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Baner1 img title', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Baner1 img title', array(), 'messages'), '@stranka?sort=baner1_img_title&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=baner1_img_title&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Baner1 img title', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_baner1_img_alt ui-state-default ui-th-column">
  <?php if ('baner1_img_alt' == $sort[0]): ?>
    <?php /*echo link_to(__('Baner1 img alt', array(), 'messages'), '@stranka?sort=baner1_img_alt&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=baner1_img_alt&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Baner1 img alt', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Baner1 img alt', array(), 'messages'), '@stranka?sort=baner1_img_alt&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=baner1_img_alt&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Baner1 img alt', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_baner1_link ui-state-default ui-th-column">
  <?php if ('baner1_link' == $sort[0]): ?>
    <?php /*echo link_to(__('Baner1 link', array(), 'messages'), '@stranka?sort=baner1_link&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=baner1_link&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Baner1 link', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Baner1 link', array(), 'messages'), '@stranka?sort=baner1_link&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=baner1_link&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Baner1 link', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_baner2_img ui-state-default ui-th-column">
  <?php if ('baner2_img' == $sort[0]): ?>
    <?php /*echo link_to(__('Baner2 img', array(), 'messages'), '@stranka?sort=baner2_img&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=baner2_img&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Baner2 img', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Baner2 img', array(), 'messages'), '@stranka?sort=baner2_img&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=baner2_img&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Baner2 img', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_baner2_img_title ui-state-default ui-th-column">
  <?php if ('baner2_img_title' == $sort[0]): ?>
    <?php /*echo link_to(__('Baner2 img title', array(), 'messages'), '@stranka?sort=baner2_img_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=baner2_img_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Baner2 img title', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Baner2 img title', array(), 'messages'), '@stranka?sort=baner2_img_title&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=baner2_img_title&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Baner2 img title', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_baner2_img_alt ui-state-default ui-th-column">
  <?php if ('baner2_img_alt' == $sort[0]): ?>
    <?php /*echo link_to(__('Baner2 img alt', array(), 'messages'), '@stranka?sort=baner2_img_alt&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=baner2_img_alt&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Baner2 img alt', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Baner2 img alt', array(), 'messages'), '@stranka?sort=baner2_img_alt&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=baner2_img_alt&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Baner2 img alt', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_baner2_link ui-state-default ui-th-column">
  <?php if ('baner2_link' == $sort[0]): ?>
    <?php /*echo link_to(__('Baner2 link', array(), 'messages'), '@stranka?sort=baner2_link&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=baner2_link&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Baner2 link', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Baner2 link', array(), 'messages'), '@stranka?sort=baner2_link&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=baner2_link&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Baner2 link', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_baner3_img ui-state-default ui-th-column">
  <?php if ('baner3_img' == $sort[0]): ?>
    <?php /*echo link_to(__('Baner3 img', array(), 'messages'), '@stranka?sort=baner3_img&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=baner3_img&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Baner3 img', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Baner3 img', array(), 'messages'), '@stranka?sort=baner3_img&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=baner3_img&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Baner3 img', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_baner3_img_title ui-state-default ui-th-column">
  <?php if ('baner3_img_title' == $sort[0]): ?>
    <?php /*echo link_to(__('Baner3 img title', array(), 'messages'), '@stranka?sort=baner3_img_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=baner3_img_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Baner3 img title', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Baner3 img title', array(), 'messages'), '@stranka?sort=baner3_img_title&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=baner3_img_title&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Baner3 img title', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_baner3_img_alt ui-state-default ui-th-column">
  <?php if ('baner3_img_alt' == $sort[0]): ?>
    <?php /*echo link_to(__('Baner3 img alt', array(), 'messages'), '@stranka?sort=baner3_img_alt&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=baner3_img_alt&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Baner3 img alt', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Baner3 img alt', array(), 'messages'), '@stranka?sort=baner3_img_alt&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=baner3_img_alt&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Baner3 img alt', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_baner3_link ui-state-default ui-th-column">
  <?php if ('baner3_link' == $sort[0]): ?>
    <?php /*echo link_to(__('Baner3 link', array(), 'messages'), '@stranka?sort=baner3_link&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=baner3_link&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Baner3 link', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Baner3 link', array(), 'messages'), '@stranka?sort=baner3_link&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=baner3_link&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Baner3 link', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_date sf_admin_list_th_created_at ui-state-default ui-th-column">
  <?php if ('created_at' == $sort[0]): ?>
    <?php /*echo link_to(__('Created at', array(), 'messages'), '@stranka?sort=created_at&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=created_at&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Created at', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Created at', array(), 'messages'), '@stranka?sort=created_at&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=created_at&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Created at', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_date sf_admin_list_th_updated_at ui-state-default ui-th-column">
  <?php if ('updated_at' == $sort[0]): ?>
    <?php /*echo link_to(__('Updated at', array(), 'messages'), '@stranka?sort=updated_at&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=updated_at&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Updated at', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Updated at', array(), 'messages'), '@stranka?sort=updated_at&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=updated_at&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Updated at', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_slug ui-state-default ui-th-column">
  <?php if ('slug' == $sort[0]): ?>
    <?php /*echo link_to(__('Slug', array(), 'messages'), '@stranka?sort=slug&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), array('class' => $sort[1]))*/ ?>

    <a href="<?php echo url_for('@stranka?sort=slug&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>">
      <span class="ui-icon <?php echo ($sort[1] == 'asc' ? 'ui-icon-circle-triangle-s' : 'ui-icon-circle-triangle-n') ?>"></span>
      <?php echo __('Slug', array(), 'messages') ?>
    </a>

    <?php //echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php /*echo link_to(__('Slug', array(), 'messages'), '@stranka?sort=slug&sort_type=asc')*/ ?>

    <a href="<?php echo url_for('@stranka?sort=slug&sort_type=asc') ?>">
      <span class="ui-icon ui-icon-triangle-2-n-s"></span>
      <?php echo __('Slug', array(), 'messages') ?>
    </a>

  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>