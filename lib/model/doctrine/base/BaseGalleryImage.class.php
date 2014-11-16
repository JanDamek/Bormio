<?php

/**
 * BaseGalleryImage
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property bigint $gallery_id
 * @property boolean $is_active
 * @property string $path
 * @property string $alt
 * @property string $title
 * @property integer $ord
 * @property Gallery $Gallery
 * 
 * @method bigint       getGalleryId()  Returns the current record's "gallery_id" value
 * @method boolean      getIsActive()   Returns the current record's "is_active" value
 * @method string       getPath()       Returns the current record's "path" value
 * @method string       getAlt()        Returns the current record's "alt" value
 * @method string       getTitle()      Returns the current record's "title" value
 * @method integer      getOrd()        Returns the current record's "ord" value
 * @method Gallery      getGallery()    Returns the current record's "Gallery" value
 * @method GalleryImage setGalleryId()  Sets the current record's "gallery_id" value
 * @method GalleryImage setIsActive()   Sets the current record's "is_active" value
 * @method GalleryImage setPath()       Sets the current record's "path" value
 * @method GalleryImage setAlt()        Sets the current record's "alt" value
 * @method GalleryImage setTitle()      Sets the current record's "title" value
 * @method GalleryImage setOrd()        Sets the current record's "ord" value
 * @method GalleryImage setGallery()    Sets the current record's "Gallery" value
 * 
 * @package    dunaverde
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseGalleryImage extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('gallery_image');
        $this->hasColumn('gallery_id', 'bigint', 20, array(
             'type' => 'bigint',
             'notnull' => true,
             'length' => 20,
             ));
        $this->hasColumn('is_active', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => true,
             ));
        $this->hasColumn('path', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('alt', 'string', 60, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 60,
             ));
        $this->hasColumn('title', 'string', 100, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 100,
             ));
        $this->hasColumn('ord', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Gallery', array(
             'local' => 'gallery_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}