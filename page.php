<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <!--headerの読み込み-->
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>

  <!--includes/headerの読み込み-->
  <?php get_template_part('includes/header'); ?>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <!-- ここからPage Header -->
    <?php $img = get_eyecatch_with_default(); ?>

  <!-- ここからPage Header -->
  <header class="masthead" style="background-image: url('<?php echo $img[0]; ?>')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- ここまでPage Header -->

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php the_content(); ?>
      </div>
    </div>
  </div>

  <hr>
  <?php endwhile; ?>
  <?php endif; ?>

  <!--includes/Footerの読み込み-->
  <?php get_template_part('includes/footer'); ?>

  <!--footerの読み込み-->
  <?php get_footer(); ?>

</body>

</html>