<!-- get_header() wordpressが用意しているheader.phpを読み込むための関数 -->
<?php get_header(); ?>

  <!-- welcome -->
  <main class="welcome" id="margin-for-fixed">
    <h1 class="title">Welcome to NexSeed Okinawa</h1>
    <ul class="guideline">
      <li>Be Athlete</li>
      <li>Go World</li>
      <li>Enjoy Everything</li>
    </ul>
    <div class="btn-group">
      <button class="btn register">新規登録</button>
      <button class="btn login">ログイン</button>
    </div>
  </main>
  <!-- welcome ここまで -->

  <!-- news -->
  <main class="latest_post">

  <!-- 記事が存在する場合 下記phpを書く-->
  <?php if (have_posts()): ?>
    <h2 class="subtitle">最新の投稿</h2>
    <ul>
    <!-- while (繰り返しの条件。条件が満たされていたら繰り返す) -->
    <!-- have_posts(): は、投稿された記事が存在する間-->
    <!-- the_post(); は、記事を一つ取り出して扱えるようにする-->
      <?php while (have_posts()): the_post(); ?>
      <li id="post-<?php the_ID(); ?>" class="news">
          <a href="<?php the_permalink(); //詳細のリンク ?>">
            <img src="https://placehold.jp/80x80.png" alt="" height="80", width="80">
          </a>
          <div>                
          <p><?php the_category(); //カテゴリ ?></p>
          <p><?php the_time('Y/m/d');  //投稿日時 ?></p>
          <p>
            <a href="<?php the_permalink(); //詳細のリンク ?>"><?php the_title();  //タイトル ?></a>
          </p>
          <p>
            <!-- こんにちは！寒い日が続いていますが... -->
            <?php the_excerpt(); //本文抜粋 ?>
            <a href="<?php the_permalink(); //詳細のリンク ?>">続きを読む</a>
          </p>
        </div>
      </li>
  <?php endwhile; ?>
      <!-- <li id="post-1" class="news">
          <a href="#">
            <img src="https://placehold.jp/80x80.png" alt="" height="80", width="80">
          </a>
          <div>                
          <p>カテゴリ</p>
          <p>2020年11月30日</p>
          <p>
            <a href="#">タイトル</a>
          </p>
          <p>
            お鍋がぴったりな時期になって...
            <a href="#">続きを読む</a>
          </p>
        </div>
      </li> -->
    </ul>
  <?php else:?>
    <h2 class="subtitle">投稿はありません</h2>
  <?php endif; ?>
  </main>
  <!-- new ここまで -->


<!-- カリキュラム -->
<main class="curriculum">
  <h2 class="subtitle">NexSeed Life</h2>
  <ul class="img-box">
    <li>
      <img src="<?php echo get_template_directory_uri(); ?>/img/programming.jpg">
      <span>Programing</span>
    </li>
    <li>
      <img src="<?php echo get_template_directory_uri(); ?>/img/english.jpg">
      <span>English</span>
    </li>
    <li>
      <img src="<?php echo get_template_directory_uri(); ?>/img/enjoy.jpg">
      <span>Enjoy</span>
    </li>
  </ul>
</main>
<!-- カリキュラム　ここまで -->

<!-- contact us -->
<aside class="contact">
  <h2 class="subtitle">Contact Us</h2>
  <!-- form -->
  <form>
      <div class="form">
        <!-- 左側 -->
         <div class="form-left">
           <fieldset>
             <input type="text" class="name" placeholder="お名前">
           </fieldset>
           <fieldset>
             <input type="email" class="email" placeholder="メールアドレス">
           </fieldset>
         </div>
        <!-- 右側 -->
        <div class="form-right">
          <fieldset>
            <textarea class="inquiry" placeholder="お問い合わせ内容"></textarea>
          </fieldset>
        </div>
      </div>
      
      <button>submit</button>
  </form>

</aside>
<!-- contact us ここまで -->

<!-- get_footer() wordpressが用意しているfooter.phpを読み込むための関数 -->
<?php get_footer(); ?>