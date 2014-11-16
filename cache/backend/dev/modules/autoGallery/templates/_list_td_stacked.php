<td colspan="3">
  <?php echo __('%%title%% - %%is_active%% - %%description%%', array('%%title%%' => link_to($gallery->getTitle(), 'gallery_edit', $gallery), '%%is_active%%' => get_partial('gallery/list_field_boolean', array('value' => $gallery->getIsActive())), '%%description%%' => $gallery->getDescription()), 'messages') ?>
</td>
