<?php
get_header();
while (have_posts()) {
  the_post(); ?>
  <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?= get_theme_file_uri('images/ocean.jpg') ?>)"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <p>Don't forget to replace me later</p>
      </div>
    </div>
  </div>

  <div class="container container--narrow page-section">
    <?php $parent_id = wp_get_post_parent_id(get_the_ID()); ?>
    <?php $child_of = $parent_id ? $parent_id : get_the_ID(); ?>
    <?php if($parent_id): ?>
    <div class="metabox metabox--position-up metabox--with-home-link">
      <p>
        <a class="metabox__blog-home-link" href="<?= get_permalink($parent_id); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?= get_the_title($parent_id) ?></a> <span class="metabox__main"><?php the_title(); ?></span>
      </p>
    </div>
    <?php endif; ?>

    <?php
    $test_array = get_pages(array(
      'child_of' => get_the_id(),
    ));
    ?>
    <?php if($parent_id || $test_array): ?>
    <div class="page-links">
      <h2 class="page-links__title"><a href="<?= get_permalink($parent_id) ?>"><?= get_the_title($parent_id) ?></a></h2>
      <ul class="min-list">
        <?php 
          wp_list_pages(array(
            'title_li' => null,
            'child_of' => $child_of,
            'sort_column' => 'menu_order'
          ));
        ?>
      </ul>
    </div>
    <?php endif; ?>
    <div class="generic-content">
      <?php the_content(); ?>
    </div>
  </div>
<?php
}
get_footer();
?>