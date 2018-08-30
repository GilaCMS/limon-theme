<div class="row">
<div class="gm-9 wrapper">
  <h1 class="post-title"><?=$title?></h1>
      <span class="meta">Posted by <a href="<?=gila::url('blog/author/'.$author_id)?>"><?=$author?></a> on <?=date('F j, Y',strtotime($updated))?></span>
  <br>

  <!-- Post Content nl2br($text) -->
  <article>
      <?=$text?>
  </article>
  <?php view::widget_area('post.after'); ?>
</div>

<div class="gm-3 sidebar wrapper">
  <?php view::widget_body('search')?>
  <?php view::widget_area('sidebar'); ?>
</div>
</div>
