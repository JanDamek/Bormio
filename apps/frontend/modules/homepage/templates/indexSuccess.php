<?php use_helper('Lightbox'); ?>

<div id="page">  
    <!-- CONTENT -->
    <div id="content">
        <div id="obsah"> 
            <div id="leva">
                <?php
                $URL = $stranka->getLinkH1();
                if (strpos($URL, "http://"))
                    $URL = $URL;
                else
                    $URL = "http://$URL";
                echo link_to('<span>Bormio</span>', $URL, array('id' => 'logo'));

                $images = array();
                $link_options = array(
                    'title' => 'Fotogalerie',
                    'size' => '880x530',
                    'speed' => '20'
                );
                $imagehw = GetImageSize(sfConfig::get('sf_web_dir') . $stranka->getTopImg());
//                var_dump($imagehw);
                $imagewidth = $imagehw[0];
                if ($imagewidth<=0) $imagewidth=1;
                $imageheight = $imagehw[1];
                if ($imageheight<=0) $imageheight = 1;
                $images[] = array(
                    'thumbnail' => image_resizer(100, 548, $stranka->getTopImg()),
                    'image' => image_resizer($imagewidth, $imageheight, $stranka->getTopImg()),
                    'options' => array('title' => $stranka->getTopImgTitle(), 'alt' => $stranka->getTopImgAlt())
                );


                //echo image_tag(image_resizer(465, 250, $stranka->getTopImg()), array('alt' => $stranka->getTopImgAlt(), 'title' => $stranka->getTopImgTitle(), 'class' => 'velkafotka'));

                echo light_slide_text(image_tag(image_resizer(465, 250, $stranka->getTopImg()), array('alt' => $stranka->getTopImgAlt(), 'title' => $stranka->getTopImgTitle())), $images, $link_options);
                ?>
                <p><?php echo $stranka->getRaw('popis_levy'); ?></p>
                <?php if ($ImgGal1) { ?>
                    <?php
                    $images = array();
                    $link_options = array(
                        'title' => 'Fotogalerie',
                        'size' => '880x530',
                        'speed' => '20'
                    );
                    foreach ($ImgGal1_img as $value) {
                        $images[] = array(
                            'thumbnail' => image_resizer(100, 80, $value->getPath()),
                            'image' => image_resizer(870, 500, $value->getPath()),
                            'options' => array('title' => $value->getTitle(), 'alt' => $value->getTitle())
                        );
                    }
                    echo light_slide_text(image_tag(image_resizer(203, 104, $stranka->getImg1()), array('alt' => $stranka->getImg1Alt(), 'title' => $stranka->getImg1Title(), 'class' => 'obrazek')), $images, $link_options);
                    ?>
                <?php } else { ?>                        
                    <?php echo image_tag(image_resizer(203, 104, $stranka->getImg1()), array('alt' => $stranka->getImg1Alt(), 'title' => $stranka->getImg1Title(), 'class' => 'obrazek')); ?>
                <?php } ?>

                <?php if ($ImgGal2) { ?>
                    <?php
                    $images = array();
                    $link_options = array(
                        'title' => 'Fotogalerie',
                        'size' => '880x530',
                        'speed' => '20'
                    );
                    foreach ($ImgGal2_img as $value) {
                        $images[] = array(
                            'thumbnail' => image_resizer(100, 80, $value->getPath()),
                            'image' => image_resizer(870, 500, $value->getPath()),
                            'options' => array('title' => $value->getTitle(), 'alt' => $value->getTitle())
                        );
                    }
                    echo light_slide_text(image_tag(image_resizer(203, 104, $stranka->getImg2()), array('alt' => $stranka->getImg2Alt(), 'title' => $stranka->getImg2Title(), 'class' => 'obrazek')), $images, $link_options);
                    ?>
                <?php } else { ?>                        
                    <?php echo image_tag(image_resizer(203, 104, $stranka->getImg2()), array('alt' => $stranka->getImg2Alt(), 'title' => $stranka->getImg2Title(), 'class' => 'obrazek')); ?>
                <?php } ?>

                <?php if ($ImgGal3) { ?>
                    <?php
                    $images = array();
                    $link_options = array(
                        'title' => 'Fotogalerie',
                        'size' => '880x530',
                        'speed' => '20'
                    );
                    foreach ($ImgGal3_img as $value) {
                        $images[] = array(
                            'thumbnail' => image_resizer(100, 80, $value->getPath()),
                            'image' => image_resizer(870, 500, $value->getPath()),
                            'options' => array('title' => $value->getTitle(), 'alt' => $value->getTitle())
                        );
                    }
                    echo light_slide_text(image_tag(image_resizer(203, 104, $stranka->getImg3()), array('alt' => $stranka->getImg3Alt(), 'title' => $stranka->getImg3Title(), 'class' => 'obrazek')), $images, $link_options);
                    ?>
                <?php } else { ?>                        
                    <?php echo image_tag(image_resizer(203, 104, $stranka->getImg3()), array('alt' => $stranka->getImg3Alt(), 'title' => $stranka->getImg3Title(), 'class' => 'obrazek')); ?>
                <?php } ?>

                <?php if ($ImgGal4) { ?>
                    <?php
                    $images = array();
                    $link_options = array(
                        'title' => 'Fotogalerie',
                        'size' => '880x530',
                        'speed' => '20'
                    );
                    foreach ($ImgGal4_img as $value) {
                        $images[] = array(
                            'thumbnail' => image_resizer(100, 80, $value->getPath()),
                            'image' => image_resizer(870, 500, $value->getPath()),
                            'options' => array('title' => $value->getTitle(), 'alt' => $value->getTitle())
                        );
                    }
                    echo light_slide_text(image_tag(image_resizer(203, 104, $stranka->getImg4()), array('alt' => $stranka->getImg4Alt(), 'title' => $stranka->getImg4Title(), 'class' => 'obrazek')), $images, $link_options);
                    ?>
                <?php } else { ?>                        
                    <?php echo image_tag(image_resizer(203, 104, $stranka->getImg4()), array('alt' => $stranka->getImg4Alt(), 'title' => $stranka->getImg4Title(), 'class' => 'obrazek')); ?>
                <?php } ?>
            </div>
            <div id="prava">
                <div class="region">
                    Region: <strong><?php echo $stranka->getRegion(); ?></strong><br />
                    Vzdálenost od Prahy: <strong><?php echo $stranka->getVzdalenost(); ?> km</strong>
                </div>
                <p><?php echo $stranka->getRaw('popis_pravy'); ?></p>
            </div>

            <div class="ubytovani">
                <h4><strong> Vybrané ubytovací kapacity v Bormiu:</strong></h4> <br><br>

                <div class="zajezd" style="margin-right: 60px;">
                    <div class="zajezd_obsah">
                        <?php if ($gal1) { ?>
                            <?php
                            $images = array();
                            $link_options = array(
                                'title' => 'Fotogalerie',
                                'size' => '880x530',
                                'speed' => '20'
                            );
                            foreach ($gal1_img as $value) {
                                $images[] = array(
                                    'thumbnail' => image_resizer(100, 80, $value->getPath()),
                                    'image' => image_resizer(870, 500, $value->getPath()),
                                    'options' => array('title' => $value->getTitle(), 'alt' => $value->getTitle())
                                );
                            }
                            echo light_slide_text(image_tag(image_resizer(151, 105, $stranka->getPromo1Img()), array('alt' => $stranka->getPromo1ImgAlt(), 'title' => $stranka->getPromo1ImgTitle())), $images, $link_options);
                            ?>
                        <?php } else { ?>                        
                            <?php echo image_tag(image_resizer(151, 105, $stranka->getPromo1Img()), array('alt' => $stranka->getPromo1ImgAlt(), 'title' => $stranka->getPromo1ImgTitle())); ?>
                        <?php } ?>
                        <h3><?php
                        echo $stranka->getPromo1Title();
                        for ($i = 1; $i <= $stranka->getPromo1Star(); $i++)
                            echo '*';
                        ?></h3>
                        <p><?php echo $stranka->getRaw('promo1_popis'); ?></p>
                    </div>
                    <div class="cena">Cena od: <strong><?php echo $stranka->getPromo1Cena(); ?></strong></div><a href="<?php echo $stranka->getPromo1Link(); ?>" class="butvice"><span>více informací</span></a>
                </div>

                <div class="zajezd">
                    <div class="zajezd_obsah">
                        <?php if ($gal2) { ?>
                            <?php
                            $images = array();
                            $link_options = array(
                                'title' => 'Fotogalerie',
                                'size' => '880x530',
                                'speed' => '20'
                            );
                            foreach ($gal2_img as $value) {
                                $images[] = array(
                                    'thumbnail' => image_resizer(100, 80, $value->getPath()),
                                    'image' => image_resizer(870, 500, $value->getPath()),
                                    'options' => array('title' => $value->getTitle(), 'alt' => $value->getTitle())
                                );
                            }
                            echo light_slide_text(image_tag(image_resizer(151, 105, $stranka->getPromo2Img()), array('alt' => $stranka->getPromo2ImgAlt(), 'title' => $stranka->getPromo2ImgTitle())), $images, $link_options);
                            ?>
                        <?php } else { ?>                        
                            <?php echo image_tag(image_resizer(151, 105, $stranka->getPromo2Img()), array('alt' => $stranka->getPromo2ImgAlt(), 'title' => $stranka->getPromo2ImgTitle())); ?>
                        <?php } ?>
                        <h3><?php
                        echo $stranka->getPromo2Title();
                        for ($i = 1; $i <= $stranka->getPromo2Star(); $i++)
                            echo '*';
                        ?></h3>
                        <p><?php echo $stranka->getRaw('promo2_popis'); ?></p>
                    </div>
                    <div class="cena">Cena od: <strong><?php echo $stranka->getPromo2Cena(); ?></strong></div><a href="<?php echo $stranka->getPromo2Link(); ?>" class="butvice"><span>více informací</span></a>
                </div>

                <div class="zajezd" style="margin-right: 60px;">
                    <div class="zajezd_obsah">
                        <?php if ($gal3) { ?>
                            <?php
                            $images = array();
                            $link_options = array(
                                'title' => 'Fotogalerie',
                                'size' => '880x530',
                                'speed' => '20'
                            );
                            foreach ($gal3_img as $value) {
                                $images[] = array(
                                    'thumbnail' => image_resizer(100, 80, $value->getPath()),
                                    'image' => image_resizer(870, 500, $value->getPath()),
                                    'options' => array('title' => $value->getTitle(), 'alt' => $value->getTitle())
                                );
                            }
                            echo light_slide_text(image_tag(image_resizer(151, 105, $stranka->getPromo3Img()), array('alt' => $stranka->getPromo3ImgAlt(), 'title' => $stranka->getPromo3ImgTitle())), $images, $link_options);
                            ?>
                        <?php } else { ?>                        
                            <?php echo image_tag(image_resizer(151, 105, $stranka->getPromo3Img()), array('alt' => $stranka->getPromo3ImgAlt(), 'title' => $stranka->getPromo3ImgTitle())); ?>
                        <?php } ?>
                        <h3><?php
                        echo $stranka->getPromo3Title();
                        for ($i = 1; $i <= $stranka->getPromo3Star(); $i++)
                            echo '*';
                        ?></h3>
                        <p><?php echo $stranka->getRaw('promo3_popis'); ?></p>
                    </div>
                    <div class="cena">Cena od: <strong><?php echo $stranka->getPromo3Cena(); ?></strong></div><a href="<?php echo $stranka->getPromo3Link(); ?>" class="butvice"><span>více informací</span></a>
                </div>

                <div class="zajezd">
                    <div class="zajezd_obsah">
                        <?php if ($gal4) { ?>
                            <?php
                            $images = array();
                            $link_options = array(
                                'title' => 'Fotogalerie',
                                'size' => '880x530',
                                'speed' => '20'
                            );
                            foreach ($gal4_img as $value) {
                                $images[] = array(
                                    'thumbnail' => image_resizer(100, 80, $value->getPath()),
                                    'image' => image_resizer(870, 500, $value->getPath()),
                                    'options' => array('title' => $value->getTitle(), 'alt' => $value->getTitle())
                                );
                            }
                            echo light_slide_text(image_tag(image_resizer(151, 105, $stranka->getPromo4Img()), array('alt' => $stranka->getPromo4ImgAlt(), 'title' => $stranka->getPromo4ImgTitle())), $images, $link_options);
                            ?>
                        <?php } else { ?>                        
                            <?php echo image_tag(image_resizer(151, 105, $stranka->getPromo4Img()), array('alt' => $stranka->getPromo4ImgAlt(), 'title' => $stranka->getPromo4ImgTitle())); ?>
                        <?php } ?>
                        <h3><?php
                        echo $stranka->getPromo4Title();
                        for ($i = 1; $i <= $stranka->getPromo4Star(); $i++)
                            echo '*';
                        ?></h3>
                        <p><?php echo $stranka->getRaw('promo4_popis'); ?></p>
                    </div>
                    <div class="cena">Cena od: <strong><?php echo $stranka->getPromo4Cena(); ?></strong></div><a href="<?php echo $stranka->getPromo4Link(); ?>" class="butvice"><span>více informací</span></a>
                </div>  
            </div>

            <div class="banners">
                <div class="banner" style="margin-right: 30px;"><a href="<?php echo $stranka->getBaner1Link(); ?>"><?php echo image_tag(image_resizer(310, 100, $stranka->getBaner1Img()), array('alt' => $stranka->getBaner1ImgAlt(), 'title' => $stranka->getBaner1ImgTitle())); ?></a></div>
                <div class="banner" style="margin-right: 30px;"><a href="<?php echo $stranka->getBaner2Link(); ?>"><?php echo image_tag(image_resizer(310, 100, $stranka->getBaner2Img()), array('alt' => $stranka->getBaner2ImgAlt(), 'title' => $stranka->getBaner2ImgTitle())); ?></a></div>
                <div class="banner"><a href="<?php echo $stranka->getBaner3Link(); ?>"><?php echo image_tag(image_resizer(310, 100, $stranka->getBaner3Img()), array('alt' => $stranka->getBaner3ImgAlt(), 'title' => $stranka->getBaner3ImgTitle())); ?></a></div>
            </div>

            <div class="seo">
                <p>
                    DOVOLENÁ BORMIO - ZÁJEZDY BORMIO - POBYTY BORMIO - UBYTOVÁNÍ BORMIO<br>APARTMÁNY BORMIO - HOTELY BORMIO - LYŽOVÁNÍ BORMIO - ALTA VALTELLINA   
                </p>
            </div>

        </div>
    </div>
    <!-- END CONTENT -->

    <!-- FOOTER -->
    <div id="footer">
        Copyright © 2012 Cestovní agentura Italia v.o.s. | <a href="http://www.caitalia.cz">www.caitalia.cz</a>
    </div>

    <div id="links">
        <?php
        $first = true;
        foreach ($odkazy as $item) {
            if (!$first) {
                echo ' | ';
            }
            echo '<a href="' . $item->getLink() . '">' . $item->getName() . '</a>';
            $first = false;
        }
        ?>
    </div>
    <!-- END FOOTER -->

</div>