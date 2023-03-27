<footer>


</footer>
<?php wp_footer(); ?>

<!-- ハンーガメニュー -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/hamburger.js"></script>



<!-- スライドショー -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
  $(".regular").slick({
    dots: true,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000
  });
});
</script>


<!-- スクロール判定 -->
<script type="text/javascript">
$(function() {
  // ↓windowがスクロールされた時に実行する処理
  $(window).scroll(function() {
    // ↓複数のオブジェクトに対して繰り返し処理を行う
    $(".conceptimg").each(function() {
      // ↓要素が画面上に表示されたかどうかを判定させる変数を定義----------
      var scroll = $(window).scrollTop(); // 画面トップからのスクロール量
      var blockPosition = $(this).offset().top; // 画面トップから見たブロックのある位置
      var WindowHeight = $(window).height(); // ウィンドウの高さ
      // ↓if式で計算する流れ----------
      // 手順① 表示させたいブロックの位置している高さ - ウィンドウの高さ
      // 手順② スクロール量が①より多くなった時＝要素が画面上に表示されたと認識
      // 手順③ 要素に「blockIn」クラスを付与。動きはCSSで制御。
      if (scroll > blockPosition - WindowHeight + 300) {
        $(this).addClass("blockIn");
      }
    });
  });
});
</script>

</body>

</html>