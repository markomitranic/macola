 <?php 
/*
Template Name: AJAX Template
*/

if (!isset($_POST['post_id'])) {
    echo("Access Forbidden. Return to <a href=\"https://macola.rs\" target=\"_self\">Macola Homepage</a>");
    exit;
}

$the_query = new WP_Query([
    'post_type' => 'any',
    'p' => (int) intval($_POST['post_id'])
]);

if ($the_query->have_posts()) :
    while ($the_query->have_posts()) : $the_query->the_post(); ?>

    <div class="row-fluid">
        <div class="product-images">
            <img src="<?=get_field('fancy_img1')?>">
            <img src="<?=get_field('fancy_img2')?>">
            <img src="<?=get_field('fancy_img3')?>">
        </div>
        <div class="product-text">
            <a title="Direktan link: <?=get_the_title()?>" class="fancybox-full centertag" href="<?=get_permalink()?>" target="_blank">OTVORITE OVAJ ARTIKL U NOVOM PROZORU</a>
            <a href="javascript:void(0)" onclick="closeLightbox()" id="fensiboxclose">&nbsp</a>
            <div class="product-name">
                <h2><?=get_the_title()?></h2>
            </div>
            <div class="product-description">
                <?=apply_filters('the_content', get_the_content())?>
            </div>
            <div class="product-price">
            <h4 class="centertag">
                <?php
                    $broj_rata = get_field('broj_rata');
                    if ($broj_rata === '') {
                        $broj_rata = 12;
                    }
                    $rata = str_replace(",00", "", get_field('cena'));
                    $rata = str_replace(".", "", $rata);
                    $rata = $rata / $broj_rata;
                    $rata = round($rata);
                    $rata = number_format($rata, 0, ',', '.');

                    if (isset($rata)
                        && $rata !=0
                        && $broj_rata!=1
                        && $_POST['tip']=='pro'
                    ) : ?>
                        <a href="https://macola.rs/nacini-placanja/" target="_blank"><p class="smalltext" style="color:red;"><strong>Već od <?=$rata?> mesečno!</strong></p></a>
                    <?php endif;

                    if (isset($rata)
                        && $rata !=0
                        && $broj_rata!=1
                        && $_POST['tip']=='dodaci'
                    ) : ?>
                        <a href="https://macola.rs/nacini-placanja/" target="_blank"><p class="smalltext" style="color:red;"><strong>Već od <?=$rata?> dinara mesečno!</strong></p></a>
                    <?php endif; ?>

					<button type="button" class="btn btn-success">Cena: <?=get_field('cena');?></button>
                    <br>
                    <div style="color:red; font-size:11px;"><?=get_field('usteda')?></div>
            </h4>
        </div>
            <?php
            $relatedArticles = get_field('vezani');
            if (!empty($relatedArticles)) : ?>
                <div class="centertag">
                    <h3>Uz ovaj artikl preporučujemo vam i neke od sledećih proizvoda:</h3>
                </div>
                <div class="row-fluid" style="margin-top: 5px; margin-bottom:20px;">
                    <?php foreach( $relatedArticles as $relatedArticle): ?>
                        <div class="span4">
                            <a href="<?=get_the_permalink($relatedArticle->ID)?>">
                                <div style="border: solid 1px #5c5c5c; height: 85px; width:85px;">
                                    <?=get_the_post_thumbnail( $relatedArticle->ID, array(85,85))?>
                                </div>
                                <div class="centertag"><?=$relatedArticle->post_title?></div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php else :
                    $relatedArticles = get_posts([
                        'post_type' => 'artikli',
                        'posts_per_page' => 3,
                        'orderby' => 'rand'
                    ]);
                    if (!empty($relatedArticles)) : ?>
                    <div class="centertag">
                        <h3>Ostali popularni artikli:</h3>
                    </div>
                    <div class="row-fluid" style="margin-top: 5px; margin-bottom:20px;">
                        <?php foreach($relatedArticles as $relatedArticle) : ?>
                            <div class="span4">
                                <a href="<?=get_the_permalink($relatedArticle->ID)?>">
                                    <div style="border: solid 1px #5c5c5c; height: 85px; width:85px;">
                                        <?=get_the_post_thumbnail( $relatedArticle->ID, array(85,85))?>
                                    </div>
                                    <div class="centertag"><?=$relatedArticle->post_title?></div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>

            <?php if(get_field('kompatibilno')) : ?>
                <div class="row-fluid">
                    <div class="span12">
                            <h3>Kompatibilno sa:</h3>
                    </div>
                </div>
                <div class="row-fluid" style="margin-bottom:20px;">
                    <div class="span12">
                        <div class="product-tags">
                            <?php foreach (get_field('kompatibilno') as $label) : ?>
                                <span><?=$label?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php
    endwhile;
    wp_reset_postdata();
else :
    echo 'Došlo je do greške';
    exit;
endif; ?>
