<!DOCTYPE html>
<html lang="en">

<head>
  <?php get_header(); ?>
  <!--headerの読み込み-->
</head>

<body>
  <!--headerの読み込み-->
  <?php get_template_part('includes/header'); ?>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <!-- ここからPage Header -->
      <?php
      $id = get_post_thumbnail_id();
      $img = wp_get_attachment_image_src($id);
      ?>

      <header class="masthead" style="background-image: url('<?php echo $img[0]; ?>')">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <?php the_post_thumbnail()); ?>
              <div class="post-heading">
                <h1><?php the_title(); ?></h1>
                <span class="meta">Posted by
                  <?php the_author(); ?>
                  on <?php the_date(); ?></span>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- ここまでPage Header -->

      <!-- Post Content -->
      <article>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </article>

      <hr>
    <?php endwhile; ?>
  <?php else : ?>
    <p>記事が見つかりませんでした。</p>
  <?php endif; ?>

  <!--Footerの読み込み-->
  <?php get_template_part('includes/footer'); ?>

  <!--footerの読み込み-->
  <?php get_footer(); ?>

</body>

</html>