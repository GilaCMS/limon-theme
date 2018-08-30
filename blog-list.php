
<!-- Posts -->
<div class="row">
    <div class="gl-9 wrapper">
    <?php foreach ($c->posts as $r) { ?>
    <div class="gm-12 row gap-8px post-review">
            <?php
            if($img=view::thumb_md($r['img'])){
		       $title_gl='gs-6';
		       echo '<div class="gs-6">';
               echo '<img src="'.$img.'" style="width:100%; height:auto">';
		       echo '</div>';
            } else $title_gl='gm-12';
            ?>

        <div class="<?=$title_gl?>">
            <a href="<?=blog::get_url($r['id'],$r['slug'])?>">
                <h2 class="post-title" style="margin-top:0"><?=$r['title']?></h2>
            </a>
            <?=$r['description']?>
            <p><a href="<?=blog::get_url($r['id'],$r['slug'])?>">
                <?=__('Read More')?>
            </a></p>
        </div>
    </div>
    <?php } ?>

    <?php view::renderFile('pagination.php')?>
    </div>
    <div class="gl-3 sidebar wrapper">
	<?php view::widget_body('search')?>
	<?php view::widget_area('sidebar'); ?>
    </div>
</div>
