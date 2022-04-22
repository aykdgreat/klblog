<?php 


if(isset($_POST['create-post'])){
  $title = $_POST['post-title'];
  $tags = $_POST['post-tags'];
  $body = $_POST['post-body'];
  if(!empty($title) && !empty($tags) &&!empty($body)){
    echo "okay";
  } else {
    echo "not okay";
  }
}






$pageTitle = "Create Post";
include "inc/header.php"; 
?>

  <div class="card">
    <form action="" class="create-form" method="post">
    <h1 class="create-heading">Create New Post</h1>
      <div class="input-group">
        <label for="title">Post Title</label>
        <input type="text" class="input-field" name="post-title">
      </div>
      <div class="input-group">
        <label for="title">Post Tags</label>
        <input type="text" class="input-field" name="post-tags">
      </div>
      <div class="input-group">
        <label for="title">Post Body</label>
        <textarea class="input-field textarea" name="post-body"></textarea>
      </div>
      <input type="submit" name="create-post" value="Create post" class="create-btn" />
    </form>
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