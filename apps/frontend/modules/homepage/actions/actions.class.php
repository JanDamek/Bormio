<?php

/**
 * homepage actions.
 *
 * @package    dunaverde
 * @subpackage homepage
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homepageActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {
        $this->stranka = Doctrine::getTable('Stranka')
                ->findOneById(1);
        
        if ($this->stranka->getImg1_gallery_id()) {
            $this->ImgGal1 = Doctrine::getTable('Gallery')
                    ->findOneById($this->stranka->getImg1_gallery_id());
            if ($this->ImgGal1) {
                $this->ImgGal1_img = Doctrine::getTable('GalleryImage')
                        ->createQuery('GalleryImage i')
                        ->where('i.gallery_id = ' . $this->ImgGal1->getId())
                        ->execute();
            }else
                $this->ImgGal1_img = false;
        }else
            $this->ImgGal1 = false;
        if ($this->stranka->getImg1_gallery_id()) {
            $this->ImgGal2 = Doctrine::getTable('Gallery')
                    ->findOneById($this->stranka->getImg1_gallery_id());
            if ($this->ImgGal2) {
                $this->ImgGal2_img = Doctrine::getTable('GalleryImage')
                        ->createQuery('GalleryImage i')
                        ->where('i.gallery_id = ' . $this->ImgGal2->getId())
                        ->execute();
            }else
                $this->ImgGal2_img = false;
        }else
            $this->ImgGal2 = false;
        if ($this->stranka->getImg1_gallery_id()) {
            $this->ImgGal3 = Doctrine::getTable('Gallery')
                    ->findOneById($this->stranka->getImg1_gallery_id());
            if ($this->ImgGal3) {
                $this->ImgGal3_img = Doctrine::getTable('GalleryImage')
                        ->createQuery('GalleryImage i')
                        ->where('i.gallery_id = ' . $this->ImgGal3->getId())
                        ->execute();
            }else
                $this->ImgGal3_img = false;
        }else
            $this->ImgGal3 = false;
        if ($this->stranka->getImg1_gallery_id()) {
            $this->ImgGal4 = Doctrine::getTable('Gallery')
                    ->findOneById($this->stranka->getImg4_gallery_id());
            if ($this->ImgGal4) {
                $this->ImgGal4_img = Doctrine::getTable('GalleryImage')
                        ->createQuery('GalleryImage i')
                        ->where('i.gallery_id = ' . $this->ImgGal4->getId())
                        ->execute();
            }else
                $this->ImgGal4_img = false;
        }else
            $this->ImgGal4 = false;
        
        if ($this->stranka->getPromo1_gallery_id()) {
            $this->gal1 = Doctrine::getTable('Gallery')
                    ->findOneById($this->stranka->getPromo1_gallery_id());
            if ($this->gal1) {
                $this->gal1_img = Doctrine::getTable('GalleryImage')
                        ->createQuery('GalleryImage i')
                        ->where('i.gallery_id = ' . $this->gal1->getId())
                        ->execute();
            }else
                $this->gal1_img = false;
        }else
            $this->gal1 = false;

        if ($this->stranka->getPromo2_gallery_id()) {
            $this->gal2 = Doctrine::getTable('Gallery')
                    ->findOneById($this->stranka->getPromo1_gallery_id());
            if ($this->gal2) {
                $this->gal2_img = Doctrine::getTable('GalleryImage')
                        ->createQuery('GalleryImage i')
                        ->where('i.gallery_id = ' . $this->gal2->getId())
                        ->execute();
            }else
                $this->gal2_img = false;
        }else
            $this->gal2 = false;

        if ($this->stranka->getPromo3_gallery_id()) {
            $this->gal3 = Doctrine::getTable('Gallery')
                    ->findOneById($this->stranka->getPromo1_gallery_id());
            if ($this->gal3) {
                $this->gal3_img = Doctrine::getTable('GalleryImage')
                        ->createQuery('GalleryImage i')
                        ->where('i.gallery_id = ' . $this->gal3->getId())
                        ->execute();
            }else
                $this->gal3_img = false;
        }else
            $this->gal3 = false;

        if ($this->stranka->getPromo4_gallery_id()) {
            $this->gal4 = Doctrine::getTable('Gallery')
                    ->findOneById($this->stranka->getPromo1_gallery_id());
            if ($this->gal4) {
                $this->gal4_img = Doctrine::getTable('GalleryImage')
                        ->createQuery('GalleryImage i')
                        ->where('i.gallery_id = ' . $this->gal4->getId())
                        ->execute();
            }else
                $this->gal4_img = false;
        }else
            $this->gal4 = false;

        $this->odkazy = Doctrine::getTable('Odkazy')
                ->createQuery('Odkazy o')
                ->where('o.publikovat=?', 1)
                ->orderby('poradi')
                ->execute();

        $response = $this->getResponse();
        
        $response->addMeta('keywords', $this->stranka->getKeywords());
        $response->addMeta('description', $this->stranka->getDescription());
        $response->setTitle($this->stranka->getTitleSeo());
    }

}

