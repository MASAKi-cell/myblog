<!DOCTYPE html>
<html lang="en">

<head>
    <?php get_header(); ?>
    <!--headerの読み込み-->
</head>

<body <?php body_class(); ?>>
    <!--プラグイン読み込み用-->
    <?php wp_body_open(); ?>

    <!--includes/headerの読み込み-->
    <?php get_template_part('includes/header'); ?>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/home-tree.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1><?php bloginfo('name'); ?></h1>
                        <span class="subheading"><?php bloginfo('description'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <?php if (have_posts()) : ?>
        <?php
        if (isset($_GET['s']) && empty($_GET['s'])) {
            echo '検索キーワード未入力'; // 検索キーワードが未入力の場合のテキストを指定
        } else {
            echo '“' . $_GET['s'] . '”の検索結果：' . $wp_query->found_posts . '件'; // 検索キーワードと該当件数を表示
        }
        ?>
        <ul>
            <?php while (have_posts()) : the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else : ?>
        <p>検索されたキーワードにマッチする記事はありませんでした。</p>
    <?php endif; ?>

    <hr>
    <?php get_template_part('includes/footer'); ?>


    <?php get_footer(); ?>
    <!--footerの読み込み-->
</body>

</html>