<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($setting->getId(), 'setting_edit', $setting) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_SiteName">
  <?php echo $setting->getSiteName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_email">
  <?php echo $setting->getEmail() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_tel">
  <?php echo $setting->getTel() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_mobil">
  <?php echo $setting->getMobil() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_pracovni_doba">
  <?php echo $setting->getPracovniDoba() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_ulice">
  <?php echo $setting->getUlice() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_mesto">
  <?php echo $setting->getMesto() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_web_adr">
  <?php echo $setting->getWebAdr() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_ga_code">
  <?php echo $setting->getGaCode() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_google_overeni">
  <?php echo $setting->getGoogleOvereni() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($setting->getCreatedAt()) ? format_date($setting->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($setting->getUpdatedAt()) ? format_date($setting->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
