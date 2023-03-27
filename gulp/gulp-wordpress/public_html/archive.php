<?php
/*
Template Name: アーカイブ
*/
?>

<?php get_header(); ?>

<main>
  <div class="news_title commontitle">
    <span>NEWS</span>
  </div>

  <div class="news-wrapper">

    <?php
      //取得したい投稿記事などの条件を引数として渡す
      $args = array(
        // 投稿タイプ
        'post_type'      => 'post',
        // カテゴリー名
        'category_name' => 'news, event',
        // 1ページに表示する投稿数
        'posts_per_page' => 10,
      );
      // データの取得
      $posts = get_posts($args);
    ?>
    <!-- ループ処理 -->
    <?php foreach ($posts as $post) : ?>
    <?php setup_postdata($post); ?>

    
      <div class="newscontainer">
        <a href="">

          <div class="newsgrp">
            <span class="text_category">
              <?php
                $cat = get_the_category();
                $cat = $cat[0];
                echo get_cat_name($cat->term_id);
              ?>
            </span> <!-- カテゴリ -->
            <p class="text_title"><?php the_title(); ?></p>  <!-- タイトル -->
            <p class="text_day"><?php echo get_the_date(); ?></p>  <!-- 投稿日 -->
          </div>
          <div class="mark_container">
            <div class="mark"></div>
          </div>

        </a>

        <!-- <a href="<?php echo get_permalink(); ?>"></a> -->
      </div>

      <?php endforeach; ?>
      <!-- 使用した投稿データをリセット -->
      <?php wp_reset_postdata(); ?>

  </div>

    


  <?php get_footer(); ?>