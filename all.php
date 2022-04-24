<?php 

include "inc/isAdmin.php"; 
include "inc/db.php"; 
isAdmin();

$sql = "SELECT * FROM posts";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0) {
  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
  // print_r($posts);
}

$pageTitle = "All Posts";
include "inc/header.php"; 
?>
      <div class="card all">
        <h2 class="all-heading">All Posts</h2>
        
        <?php
        if(!empty($posts)):
        foreach($posts as $post): ?>
          <div class="all-post-list">
            <p class="btn-flex"> 
              <a href="post.php?post_id=<?php echo $post['post_id']; ?>"><?php echo $post['title']; ?></a>
              <a href="update.php?post_id=<?php echo $post['post_id']?>">Update</a>
            </p>
          </div>
          <?php endforeach;
          else: ?>
          <div class="all-post-list">
            <h3>There is no post yet!</h3>
          </div>
          <?php endif; ?>
      </div>

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
            <img src="ayk2.jpg" alt="popular" style="width:50px;height:50px;">
            <span>
              <a href="#">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, officia!</a>
              <span style="display: block;padding-top: 5px;">
                                      Sed mattis nunc
                                    </span>
            </span>
          </div>
          <div class="popular-post">
            <img src="Daigle.jpg" alt="popular" style="width:50px;height:50px;">
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