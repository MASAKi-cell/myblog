  <!-- ここからNavigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <?php
        //メニューIDを取得 決まり文句
        $menu_name = 'global_nav';
        $locations = get_nav_menu_locations();
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu -> term_id);
      ?>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <!-- メニューの繰り返し構文 $menu_itemsの内容をforeachで1つずつ取り出しながら -->
        <?php foreach($menu_items as $item): ?> 
          <li class="nav-item"> <!--esc = Escape(エスケープ処理)esc_attr urlはhref属性として出力する為、esc_html メニューの部分はhtmlで出力する為-->
            <a class="nav-link" href="<?php echo esc_attr($item->url); ?>"><?php echo esc_html($item->title); ?></a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </nav>
  <!-- ここまでNavigation -->
