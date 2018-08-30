<!DOCTYPE html>
<html lang="<?=gila::config('language')?>">
<?php
view::stylesheet('lib/gila.min.css');
view::stylesheet('themes/limon/style.css');
view::head()?>
<style>
<?php
$theme_color=gila::option('theme.color','#6b8f23');
$a_color=gila::option('theme.primary-color','#4682b4');
?>
.widget .g-nav.vertical li a:hover{color: <?=$theme_color?>;}
.post-review a:hover{color: <?=$theme_color?>;}
.header h1{font-family:Arial;margin:0;color: <?=$theme_color?>;font-family:sans-serif}
.widget-social-icons li a i:hover:before{background: <?=$theme_color?>;}
.g-navbar, .g-navbar ul{background: <?=$theme_color?>}
.g-nav li ul{border-width:0; background: <?=$theme_color?>; margin-top:-2px}
.g-nav .active{background: <?=$theme_color?>}
:root{--main-a-color: <?=$a_color?>;--main-primary-color: <?=$theme_color?>}
</style>

<body>
  <div>
    <div class="wrapper header">
        <?php view::widget_area('body'); ?>
        <div class="inline-block">
          <a href="<?=gila::config('base')?>" style="color:#333;">
	  <h1><?=gila::config('title')?></h1>
	  <span><?=gila::config('slogan')?></span>
          </a>
        </div>
    </div>
    <!-- Navigation -->
     <nav class="inline-flex fullwidth g-navbar mainmenu">
          <span class="fullwidth"><?php view::menu(); ?></span>
    </nav>
    <div class="main">
