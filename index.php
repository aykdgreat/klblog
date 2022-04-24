<?php
//include "inc/test_data.php";
include "inc/db.php";

$sql = "SELECT * FROM posts";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
  // print_r($posts);
}

$pageTitle = "Home";
include "inc/header.php";
?>
<article>
  <?php
  if (!empty($posts)):
  foreach ($posts as $post): ?>
  <section class="post">
    <img src="Daigle.jpg" alt="img not found">
    <div class="post-body">
      <div class="post-title">
        <a href="post.php?post_id=<?php echo $post['post_id'] ?>"><?php echo $post['title']; ?></a>
      </div>
      <div class="post-about">
        Posted by: <span class="post-by"><a href="user.php?user=Admin">Admin</a></span>
        on <span class="post-date"><?php echo $post['created_at']; ?></span>
      </div>
      <div class="post-short">
        <?php echo substr($post['body'], 0, 150).'...'; ?>
      </div>
      <div class="post-tags">
        Tags: <?php $tags = explode(',', $post['tags']);
        foreach ($tags as $tag):
        ?>
        <span class="post-tag"><?php echo $tag; ?></span>
        <?php endforeach; ?>
      </div>
      <div class="btn-flex">
        <button class="more-btn"><a href="post.php?post_id=<?php echo $post['post_id'] ?>"> Read More »</a></button>
        <span class="comments">Comments <span class="comments-count"><?php echo $post['comments']; ?></span></span>
      </div>
    </div>
  </section>
  <?php endforeach; ?>
  <?php else : ?>
  <section class="post">
    <h3>There is no post yet!!!</h3>
  </section>
  <?php endif; ?>

  <section class="pagination">
    <button class="btn-prev">Previous</button><button class="btn-next">Next »</button>
  </section>
</article>


<aside class="">
  <section class="about-me">
    <div class="img-me">
      <img src="ayk1.jpg" alt="loading...">
    </div>
    <div class="my-info">
      <h3><b>Ayokunle Dalemo</b></h3>
      <p>
        Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.
      </p>
    </div>
  </section>

  <section class="popular">
    <div class="popular-heading">
      <h4>Popular Posts</h4>
    </div>
    <div class="popular-post">
      <img src="gondol.jpg" alt="popular">
      <span>
        <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum consequuntur saepe expedita.</a>
        <!-- <span style="display: block;padding-top: 5px;">
                                Sed mattis nunc
                              </span> -->
      </span>
    </div>
    <div class="popular-post">
      <img src="gondol.jpg" alt="popular">
      <span>
        <a href="#">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, officia!</a>
        <!-- <span style="display: block;padding-top: 5px;">
                                Sed mattis nunc
                              </span> -->
      </span>
    </div>
    <div class="popular-post">
      <img src="gondol.jpg" alt="popular">
      <span>
        <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, eos.</a>
        <!-- <span style="display: block;padding-top: 5px;">
                                Sed mattis nunc
                              </span> -->
      </span>
    </div>
  </section>
</aside>
<?php include "inc/footer.php"; ?>