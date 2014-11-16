<?php

/**
 * stranka module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage stranka
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 12474 2008-10-31 10:41:27Z fabien $
 */
class BaseStrankaGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getCredentials($action)
  {
    if (0 === strpos($action, '_'))
    {
      $action = substr($action, 1);
    }

    return isset($this->configuration['credentials'][$action]) ? $this->configuration['credentials'][$action] : array();
  }

  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
		//  added show view
	  // return array(  '_delete' => NULL,  '_list' => NULL,  '_show' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  
    return array();
  }

  public function getListObjectActions()
  {
		// =============== Added show view
	  return array(  '_show' => NULL,  '_edit' => NULL,  '_delete' => NULL,);
  
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%id%% - %%name%% - %%link_h1%% - %%title_seo%% - %%keywords%% - %%description%% - %%title_str%% - %%top_img%% - %%top_img_title%% - %%top_img_alt%% - %%popis_levy%% - %%popis_pravy%% - %%region%% - %%vzdalenost%% - %%img1%% - %%img1_title%% - %%img1_alt%% - %%img2%% - %%img2_title%% - %%img2_alt%% - %%img3%% - %%img3_title%% - %%img3_alt%% - %%img4%% - %%img4_title%% - %%img4_alt%% - %%promo1_title%% - %%promo1_img%% - %%promo1_img_title%% - %%promo1_img_alt%% - %%promo1_gallery_id%% - %%promo1_star%% - %%promo1_popis%% - %%promo1_cena%% - %%promo1_link%% - %%promo2_title%% - %%promo2_img%% - %%promo2_img_title%% - %%promo2_img_alt%% - %%promo2_gallery_id%% - %%promo2_star%% - %%promo2_popis%% - %%promo2_cena%% - %%promo2_link%% - %%promo3_title%% - %%promo3_img%% - %%promo3_img_title%% - %%promo3_img_alt%% - %%promo3_gallery_id%% - %%promo3_star%% - %%promo3_popis%% - %%promo3_cena%% - %%promo3_link%% - %%promo4_title%% - %%promo4_img%% - %%promo4_img_title%% - %%promo4_img_alt%% - %%promo4_gallery_id%% - %%promo4_star%% - %%promo4_popis%% - %%promo4_cena%% - %%promo4_link%% - %%baner1_img%% - %%baner1_img_title%% - %%baner1_img_alt%% - %%baner1_link%% - %%baner2_img%% - %%baner2_img_title%% - %%baner2_img_alt%% - %%baner2_link%% - %%baner3_img%% - %%baner3_img_title%% - %%baner3_img_alt%% - %%baner3_link%% - %%created_at%% - %%updated_at%% - %%slug%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Stranka List';
  }

  public function getEditTitle()
  {
    return 'Edit Stranka';
  }

  public function getNewTitle()
  {
    return 'New Stranka';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array(  'SEO' =>   array(    0 => 'title_seo',    1 => 'keywords',    2 => 'description',  ),  'Základní' =>   array(    0 => 'name',    1 => 'link_h1',    2 => 'title_str',    3 => 'top_img',    4 => 'top_img_title',    5 => 'top_img_alt',    6 => 'popis_levy',    7 => 'popis_pravy',    8 => 'region',    9 => 'vzdalenost',  ),  'Zakl. IMG' =>   array(    0 => 'img1',    1 => 'img1_title',    2 => 'img1_alt',    3 => 'img2',    4 => 'img2_title',    5 => 'img2_alt',    6 => 'img3',    7 => 'img3_title',    8 => 'img3_alt',    9 => 'img4',    10 => 'img4_title',    11 => 'img4_alt',  ),  'Promo 1' =>   array(    0 => 'promo1_title',    1 => 'promo1_img',    2 => 'promo1_img_title',    3 => 'promo1_img_alt',    4 => 'promo1_gallery_id',    5 => 'promo1_star',    6 => 'promo1_popis',    7 => 'promo1_cena',    8 => 'promo1_link',  ),  'Promo 2' =>   array(    0 => 'promo2_title',    1 => 'promo2_img',    2 => 'promo2_img_title',    3 => 'promo2_img_alt',    4 => 'promo2_gallery_id',    5 => 'promo2_star',    6 => 'promo2_popis',    7 => 'promo2_cena',    8 => 'promo2_link',  ),  'Promo 3' =>   array(    0 => 'promo3_title',    1 => 'promo3_img',    2 => 'promo3_img_title',    3 => 'promo3_img_alt',    4 => 'promo3_gallery_id',    5 => 'promo3_star',    6 => 'promo3_popis',    7 => 'promo3_cena',    8 => 'promo3_link',  ),  'Promo 4' =>   array(    0 => 'promo4_title',    1 => 'promo4_img',    2 => 'promo4_img_title',    3 => 'promo4_img_alt',    4 => 'promo4_gallery_id',    5 => 'promo4_star',    6 => 'promo4_popis',    7 => 'promo4_cena',    8 => 'promo4_link',  ),  'Baner 1' =>   array(    0 => 'baner1_img',    1 => 'baner1_img_title',    2 => 'baner1_img_alt',    3 => 'baner1_link',  ),  'Baner 2' =>   array(    0 => 'baner2_img',    1 => 'baner2_img_title',    2 => 'baner2_img_alt',    3 => 'baner2_link',  ),  'Baner 3' =>   array(    0 => 'baner3_img',    1 => 'baner3_img_title',    2 => 'baner3_img_alt',    3 => 'baner3_link',  ),);
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'id',  1 => 'name',  2 => 'link_h1',  3 => 'title_seo',  4 => 'keywords',  5 => 'description',  6 => 'title_str',  7 => 'top_img',  8 => 'top_img_title',  9 => 'top_img_alt',  10 => 'popis_levy',  11 => 'popis_pravy',  12 => 'region',  13 => 'vzdalenost',  14 => 'img1',  15 => 'img1_title',  16 => 'img1_alt',  17 => 'img2',  18 => 'img2_title',  19 => 'img2_alt',  20 => 'img3',  21 => 'img3_title',  22 => 'img3_alt',  23 => 'img4',  24 => 'img4_title',  25 => 'img4_alt',  26 => 'promo1_title',  27 => 'promo1_img',  28 => 'promo1_img_title',  29 => 'promo1_img_alt',  30 => 'promo1_gallery_id',  31 => 'promo1_star',  32 => 'promo1_popis',  33 => 'promo1_cena',  34 => 'promo1_link',  35 => 'promo2_title',  36 => 'promo2_img',  37 => 'promo2_img_title',  38 => 'promo2_img_alt',  39 => 'promo2_gallery_id',  40 => 'promo2_star',  41 => 'promo2_popis',  42 => 'promo2_cena',  43 => 'promo2_link',  44 => 'promo3_title',  45 => 'promo3_img',  46 => 'promo3_img_title',  47 => 'promo3_img_alt',  48 => 'promo3_gallery_id',  49 => 'promo3_star',  50 => 'promo3_popis',  51 => 'promo3_cena',  52 => 'promo3_link',  53 => 'promo4_title',  54 => 'promo4_img',  55 => 'promo4_img_title',  56 => 'promo4_img_alt',  57 => 'promo4_gallery_id',  58 => 'promo4_star',  59 => 'promo4_popis',  60 => 'promo4_cena',  61 => 'promo4_link',  62 => 'baner1_img',  63 => 'baner1_img_title',  64 => 'baner1_img_alt',  65 => 'baner1_link',  66 => 'baner2_img',  67 => 'baner2_img_title',  68 => 'baner2_img_alt',  69 => 'baner2_link',  70 => 'baner3_img',  71 => 'baner3_img_title',  72 => 'baner3_img_alt',  73 => 'baner3_link',  74 => 'created_at',  75 => 'updated_at',  76 => 'slug',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'name' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'link_h1' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'title_seo' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'keywords' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'description' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'title_str' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'top_img' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'top_img_title' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'top_img_alt' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'popis_levy' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'popis_pravy' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'region' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'vzdalenost' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'img1' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'img1_title' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'img1_alt' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'img2' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'img2_title' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'img2_alt' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'img3' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'img3_title' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'img3_alt' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'img4' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'img4_title' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'img4_alt' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'promo1_title' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'promo1_img' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'promo1_img_title' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'promo1_img_alt' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'promo1_gallery_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'promo1_star' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'promo1_popis' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'promo1_cena' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'promo1_link' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'promo2_title' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'promo2_img' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'promo2_img_title' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'promo2_img_alt' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'promo2_gallery_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'promo2_star' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'promo2_popis' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'promo2_cena' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'promo2_link' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'promo3_title' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'promo3_img' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'promo3_img_title' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'promo3_img_alt' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'promo3_gallery_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'promo3_star' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'promo3_popis' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'promo3_cena' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'promo3_link' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'promo4_title' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'promo4_img' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'promo4_img_title' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'promo4_img_alt' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'promo4_gallery_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'promo4_star' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'promo4_popis' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'promo4_cena' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'promo4_link' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'baner1_img' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'baner1_img_title' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'baner1_img_alt' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'baner1_link' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'baner2_img' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'baner2_img_title' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'baner2_img_alt' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'baner2_link' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'baner3_img' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'baner3_img_title' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'baner3_img_alt' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'baner3_link' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'slug' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'name' => array(),
      'link_h1' => array(),
      'title_seo' => array(),
      'keywords' => array(),
      'description' => array(),
      'title_str' => array(),
      'top_img' => array(),
      'top_img_title' => array(),
      'top_img_alt' => array(),
      'popis_levy' => array(),
      'popis_pravy' => array(),
      'region' => array(),
      'vzdalenost' => array(),
      'img1' => array(),
      'img1_title' => array(),
      'img1_alt' => array(),
      'img2' => array(),
      'img2_title' => array(),
      'img2_alt' => array(),
      'img3' => array(),
      'img3_title' => array(),
      'img3_alt' => array(),
      'img4' => array(),
      'img4_title' => array(),
      'img4_alt' => array(),
      'promo1_title' => array(),
      'promo1_img' => array(),
      'promo1_img_title' => array(),
      'promo1_img_alt' => array(),
      'promo1_gallery_id' => array(),
      'promo1_star' => array(),
      'promo1_popis' => array(),
      'promo1_cena' => array(),
      'promo1_link' => array(),
      'promo2_title' => array(),
      'promo2_img' => array(),
      'promo2_img_title' => array(),
      'promo2_img_alt' => array(),
      'promo2_gallery_id' => array(),
      'promo2_star' => array(),
      'promo2_popis' => array(),
      'promo2_cena' => array(),
      'promo2_link' => array(),
      'promo3_title' => array(),
      'promo3_img' => array(),
      'promo3_img_title' => array(),
      'promo3_img_alt' => array(),
      'promo3_gallery_id' => array(),
      'promo3_star' => array(),
      'promo3_popis' => array(),
      'promo3_cena' => array(),
      'promo3_link' => array(),
      'promo4_title' => array(),
      'promo4_img' => array(),
      'promo4_img_title' => array(),
      'promo4_img_alt' => array(),
      'promo4_gallery_id' => array(),
      'promo4_star' => array(),
      'promo4_popis' => array(),
      'promo4_cena' => array(),
      'promo4_link' => array(),
      'baner1_img' => array(),
      'baner1_img_title' => array(),
      'baner1_img_alt' => array(),
      'baner1_link' => array(),
      'baner2_img' => array(),
      'baner2_img_title' => array(),
      'baner2_img_alt' => array(),
      'baner2_link' => array(),
      'baner3_img' => array(),
      'baner3_img_title' => array(),
      'baner3_img_alt' => array(),
      'baner3_link' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'slug' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'name' => array(),
      'link_h1' => array(),
      'title_seo' => array(),
      'keywords' => array(),
      'description' => array(),
      'title_str' => array(),
      'top_img' => array(),
      'top_img_title' => array(),
      'top_img_alt' => array(),
      'popis_levy' => array(),
      'popis_pravy' => array(),
      'region' => array(),
      'vzdalenost' => array(),
      'img1' => array(),
      'img1_title' => array(),
      'img1_alt' => array(),
      'img2' => array(),
      'img2_title' => array(),
      'img2_alt' => array(),
      'img3' => array(),
      'img3_title' => array(),
      'img3_alt' => array(),
      'img4' => array(),
      'img4_title' => array(),
      'img4_alt' => array(),
      'promo1_title' => array(),
      'promo1_img' => array(),
      'promo1_img_title' => array(),
      'promo1_img_alt' => array(),
      'promo1_gallery_id' => array(),
      'promo1_star' => array(),
      'promo1_popis' => array(),
      'promo1_cena' => array(),
      'promo1_link' => array(),
      'promo2_title' => array(),
      'promo2_img' => array(),
      'promo2_img_title' => array(),
      'promo2_img_alt' => array(),
      'promo2_gallery_id' => array(),
      'promo2_star' => array(),
      'promo2_popis' => array(),
      'promo2_cena' => array(),
      'promo2_link' => array(),
      'promo3_title' => array(),
      'promo3_img' => array(),
      'promo3_img_title' => array(),
      'promo3_img_alt' => array(),
      'promo3_gallery_id' => array(),
      'promo3_star' => array(),
      'promo3_popis' => array(),
      'promo3_cena' => array(),
      'promo3_link' => array(),
      'promo4_title' => array(),
      'promo4_img' => array(),
      'promo4_img_title' => array(),
      'promo4_img_alt' => array(),
      'promo4_gallery_id' => array(),
      'promo4_star' => array(),
      'promo4_popis' => array(),
      'promo4_cena' => array(),
      'promo4_link' => array(),
      'baner1_img' => array(),
      'baner1_img_title' => array(),
      'baner1_img_alt' => array(),
      'baner1_link' => array(),
      'baner2_img' => array(),
      'baner2_img_title' => array(),
      'baner2_img_alt' => array(),
      'baner2_link' => array(),
      'baner3_img' => array(),
      'baner3_img_title' => array(),
      'baner3_img_alt' => array(),
      'baner3_link' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'slug' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'name' => array(),
      'link_h1' => array(),
      'title_seo' => array(),
      'keywords' => array(),
      'description' => array(),
      'title_str' => array(),
      'top_img' => array(),
      'top_img_title' => array(),
      'top_img_alt' => array(),
      'popis_levy' => array(),
      'popis_pravy' => array(),
      'region' => array(),
      'vzdalenost' => array(),
      'img1' => array(),
      'img1_title' => array(),
      'img1_alt' => array(),
      'img2' => array(),
      'img2_title' => array(),
      'img2_alt' => array(),
      'img3' => array(),
      'img3_title' => array(),
      'img3_alt' => array(),
      'img4' => array(),
      'img4_title' => array(),
      'img4_alt' => array(),
      'promo1_title' => array(),
      'promo1_img' => array(),
      'promo1_img_title' => array(),
      'promo1_img_alt' => array(),
      'promo1_gallery_id' => array(),
      'promo1_star' => array(),
      'promo1_popis' => array(),
      'promo1_cena' => array(),
      'promo1_link' => array(),
      'promo2_title' => array(),
      'promo2_img' => array(),
      'promo2_img_title' => array(),
      'promo2_img_alt' => array(),
      'promo2_gallery_id' => array(),
      'promo2_star' => array(),
      'promo2_popis' => array(),
      'promo2_cena' => array(),
      'promo2_link' => array(),
      'promo3_title' => array(),
      'promo3_img' => array(),
      'promo3_img_title' => array(),
      'promo3_img_alt' => array(),
      'promo3_gallery_id' => array(),
      'promo3_star' => array(),
      'promo3_popis' => array(),
      'promo3_cena' => array(),
      'promo3_link' => array(),
      'promo4_title' => array(),
      'promo4_img' => array(),
      'promo4_img_title' => array(),
      'promo4_img_alt' => array(),
      'promo4_gallery_id' => array(),
      'promo4_star' => array(),
      'promo4_popis' => array(),
      'promo4_cena' => array(),
      'promo4_link' => array(),
      'baner1_img' => array(),
      'baner1_img_title' => array(),
      'baner1_img_alt' => array(),
      'baner1_link' => array(),
      'baner2_img' => array(),
      'baner2_img_title' => array(),
      'baner2_img_alt' => array(),
      'baner2_link' => array(),
      'baner3_img' => array(),
      'baner3_img_title' => array(),
      'baner3_img_alt' => array(),
      'baner3_link' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'slug' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'name' => array(),
      'link_h1' => array(),
      'title_seo' => array(),
      'keywords' => array(),
      'description' => array(),
      'title_str' => array(),
      'top_img' => array(),
      'top_img_title' => array(),
      'top_img_alt' => array(),
      'popis_levy' => array(),
      'popis_pravy' => array(),
      'region' => array(),
      'vzdalenost' => array(),
      'img1' => array(),
      'img1_title' => array(),
      'img1_alt' => array(),
      'img2' => array(),
      'img2_title' => array(),
      'img2_alt' => array(),
      'img3' => array(),
      'img3_title' => array(),
      'img3_alt' => array(),
      'img4' => array(),
      'img4_title' => array(),
      'img4_alt' => array(),
      'promo1_title' => array(),
      'promo1_img' => array(),
      'promo1_img_title' => array(),
      'promo1_img_alt' => array(),
      'promo1_gallery_id' => array(),
      'promo1_star' => array(),
      'promo1_popis' => array(),
      'promo1_cena' => array(),
      'promo1_link' => array(),
      'promo2_title' => array(),
      'promo2_img' => array(),
      'promo2_img_title' => array(),
      'promo2_img_alt' => array(),
      'promo2_gallery_id' => array(),
      'promo2_star' => array(),
      'promo2_popis' => array(),
      'promo2_cena' => array(),
      'promo2_link' => array(),
      'promo3_title' => array(),
      'promo3_img' => array(),
      'promo3_img_title' => array(),
      'promo3_img_alt' => array(),
      'promo3_gallery_id' => array(),
      'promo3_star' => array(),
      'promo3_popis' => array(),
      'promo3_cena' => array(),
      'promo3_link' => array(),
      'promo4_title' => array(),
      'promo4_img' => array(),
      'promo4_img_title' => array(),
      'promo4_img_alt' => array(),
      'promo4_gallery_id' => array(),
      'promo4_star' => array(),
      'promo4_popis' => array(),
      'promo4_cena' => array(),
      'promo4_link' => array(),
      'baner1_img' => array(),
      'baner1_img_title' => array(),
      'baner1_img_alt' => array(),
      'baner1_link' => array(),
      'baner2_img' => array(),
      'baner2_img_title' => array(),
      'baner2_img_alt' => array(),
      'baner2_link' => array(),
      'baner3_img' => array(),
      'baner3_img_title' => array(),
      'baner3_img_alt' => array(),
      'baner3_link' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'slug' => array(),
    );
  }

  public function getFieldsShow()
  {
    return array(
      'id' => array(),
      'name' => array(),
      'link_h1' => array(),
      'title_seo' => array(),
      'keywords' => array(),
      'description' => array(),
      'title_str' => array(),
      'top_img' => array(),
      'top_img_title' => array(),
      'top_img_alt' => array(),
      'popis_levy' => array(),
      'popis_pravy' => array(),
      'region' => array(),
      'vzdalenost' => array(),
      'img1' => array(),
      'img1_title' => array(),
      'img1_alt' => array(),
      'img2' => array(),
      'img2_title' => array(),
      'img2_alt' => array(),
      'img3' => array(),
      'img3_title' => array(),
      'img3_alt' => array(),
      'img4' => array(),
      'img4_title' => array(),
      'img4_alt' => array(),
      'promo1_title' => array(),
      'promo1_img' => array(),
      'promo1_img_title' => array(),
      'promo1_img_alt' => array(),
      'promo1_gallery_id' => array(),
      'promo1_star' => array(),
      'promo1_popis' => array(),
      'promo1_cena' => array(),
      'promo1_link' => array(),
      'promo2_title' => array(),
      'promo2_img' => array(),
      'promo2_img_title' => array(),
      'promo2_img_alt' => array(),
      'promo2_gallery_id' => array(),
      'promo2_star' => array(),
      'promo2_popis' => array(),
      'promo2_cena' => array(),
      'promo2_link' => array(),
      'promo3_title' => array(),
      'promo3_img' => array(),
      'promo3_img_title' => array(),
      'promo3_img_alt' => array(),
      'promo3_gallery_id' => array(),
      'promo3_star' => array(),
      'promo3_popis' => array(),
      'promo3_cena' => array(),
      'promo3_link' => array(),
      'promo4_title' => array(),
      'promo4_img' => array(),
      'promo4_img_title' => array(),
      'promo4_img_alt' => array(),
      'promo4_gallery_id' => array(),
      'promo4_star' => array(),
      'promo4_popis' => array(),
      'promo4_cena' => array(),
      'promo4_link' => array(),
      'baner1_img' => array(),
      'baner1_img_title' => array(),
      'baner1_img_alt' => array(),
      'baner1_link' => array(),
      'baner2_img' => array(),
      'baner2_img_title' => array(),
      'baner2_img_alt' => array(),
      'baner2_link' => array(),
      'baner3_img' => array(),
      'baner3_img_title' => array(),
      'baner3_img_alt' => array(),
      'baner3_link' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'slug' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'name' => array(),
      'link_h1' => array(),
      'title_seo' => array(),
      'keywords' => array(),
      'description' => array(),
      'title_str' => array(),
      'top_img' => array(),
      'top_img_title' => array(),
      'top_img_alt' => array(),
      'popis_levy' => array(),
      'popis_pravy' => array(),
      'region' => array(),
      'vzdalenost' => array(),
      'img1' => array(),
      'img1_title' => array(),
      'img1_alt' => array(),
      'img2' => array(),
      'img2_title' => array(),
      'img2_alt' => array(),
      'img3' => array(),
      'img3_title' => array(),
      'img3_alt' => array(),
      'img4' => array(),
      'img4_title' => array(),
      'img4_alt' => array(),
      'promo1_title' => array(),
      'promo1_img' => array(),
      'promo1_img_title' => array(),
      'promo1_img_alt' => array(),
      'promo1_gallery_id' => array(),
      'promo1_star' => array(),
      'promo1_popis' => array(),
      'promo1_cena' => array(),
      'promo1_link' => array(),
      'promo2_title' => array(),
      'promo2_img' => array(),
      'promo2_img_title' => array(),
      'promo2_img_alt' => array(),
      'promo2_gallery_id' => array(),
      'promo2_star' => array(),
      'promo2_popis' => array(),
      'promo2_cena' => array(),
      'promo2_link' => array(),
      'promo3_title' => array(),
      'promo3_img' => array(),
      'promo3_img_title' => array(),
      'promo3_img_alt' => array(),
      'promo3_gallery_id' => array(),
      'promo3_star' => array(),
      'promo3_popis' => array(),
      'promo3_cena' => array(),
      'promo3_link' => array(),
      'promo4_title' => array(),
      'promo4_img' => array(),
      'promo4_img_title' => array(),
      'promo4_img_alt' => array(),
      'promo4_gallery_id' => array(),
      'promo4_star' => array(),
      'promo4_popis' => array(),
      'promo4_cena' => array(),
      'promo4_link' => array(),
      'baner1_img' => array(),
      'baner1_img_title' => array(),
      'baner1_img_alt' => array(),
      'baner1_link' => array(),
      'baner2_img' => array(),
      'baner2_img_title' => array(),
      'baner2_img_alt' => array(),
      'baner2_link' => array(),
      'baner3_img' => array(),
      'baner3_img_title' => array(),
      'baner3_img_alt' => array(),
      'baner3_link' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'slug' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'strankaForm';
  }

  public function getFormOptions()
  {
    return array();
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'strankaFormFilter';
  }

	  protected function getConfig()
  {
    $configuration = parent::getConfig();
    $configuration['show'] = $this->getFieldsShow();
    return $configuration;
  }

  protected function compile()
  {
    parent::compile();
    
    $config = $this->getConfig();
    
    // add configuration for the show view 
    $this->configuration['show'] = array( 'fields'         => array(),
                                          'title'          => $this->getShowTitle(),
                                          'actions'        => $this->getShowActions(),
                                          'display'        => $this->getShowDisplay(),
                                        ) ;

    foreach (array('show') as $context)
    {
      foreach ($this->configuration[$context]['actions'] as $action => $parameters)
      {
        $this->configuration[$context]['actions'][$action] = $this->fixActionParameters($action, $parameters);
      }
    }


  }

  public function getShowActions()
  {
    return array(  '_list' => NULL,  '_edit' => NULL, '_delete' => NULL);
  }

  
  public function getShowTitle()
  {
    return 'View Stranka';
  }

  public function getShowDisplay()
  {
      return array(  0 => 'id',  1 => 'name',  2 => 'link_h1',  3 => 'title_seo',  4 => 'keywords',  5 => 'description',  6 => 'title_str',  7 => 'top_img',  8 => 'top_img_title',  9 => 'top_img_alt',  10 => 'popis_levy',  11 => 'popis_pravy',  12 => 'region',  13 => 'vzdalenost',  14 => 'img1',  15 => 'img1_title',  16 => 'img1_alt',  17 => 'img2',  18 => 'img2_title',  19 => 'img2_alt',  20 => 'img3',  21 => 'img3_title',  22 => 'img3_alt',  23 => 'img4',  24 => 'img4_title',  25 => 'img4_alt',  26 => 'promo1_title',  27 => 'promo1_img',  28 => 'promo1_img_title',  29 => 'promo1_img_alt',  30 => 'promo1_gallery_id',  31 => 'promo1_star',  32 => 'promo1_popis',  33 => 'promo1_cena',  34 => 'promo1_link',  35 => 'promo2_title',  36 => 'promo2_img',  37 => 'promo2_img_title',  38 => 'promo2_img_alt',  39 => 'promo2_gallery_id',  40 => 'promo2_star',  41 => 'promo2_popis',  42 => 'promo2_cena',  43 => 'promo2_link',  44 => 'promo3_title',  45 => 'promo3_img',  46 => 'promo3_img_title',  47 => 'promo3_img_alt',  48 => 'promo3_gallery_id',  49 => 'promo3_star',  50 => 'promo3_popis',  51 => 'promo3_cena',  52 => 'promo3_link',  53 => 'promo4_title',  54 => 'promo4_img',  55 => 'promo4_img_title',  56 => 'promo4_img_alt',  57 => 'promo4_gallery_id',  58 => 'promo4_star',  59 => 'promo4_popis',  60 => 'promo4_cena',  61 => 'promo4_link',  62 => 'baner1_img',  63 => 'baner1_img_title',  64 => 'baner1_img_alt',  65 => 'baner1_link',  66 => 'baner2_img',  67 => 'baner2_img_title',  68 => 'baner2_img_alt',  69 => 'baner2_link',  70 => 'baner3_img',  71 => 'baner3_img_title',  72 => 'baner3_img_alt',  73 => 'baner3_link',  74 => 'created_at',  75 => 'updated_at',  76 => 'slug',);
  }

  public function getFilterForm($filters)
  {
    $class = $this->getFilterFormClass();

    return new $class($filters, $this->getFilterFormOptions());
  }

  public function getFilterFormOptions()
  {
    return array();
  }

  public function getFilterDefaults()
  {
    return array();
  }

  public function getPager($model)
  {
    $class = $this->getPagerClass();

    return new $class($model, $this->getPagerMaxPerPage());
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }

  public function getConnection()
  {
    return null;
  }
}
