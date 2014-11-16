<td class="sf_admin_text sf_admin_list_td_title">
  <?php echo link_to($gallery->getTitle(), 'gallery_edit', $gallery) ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_is_active">
  <?php echo get_partial('gallery/list_field_boolean', array('value' => $gallery->getIsActive())) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_description">
  <?php echo $gallery->getDescription() ?>
</td>
