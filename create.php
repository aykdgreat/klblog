<?php 
$title = $tags = $body = '';
$error = ['msg' => ''];

if(isset($_POST['create-post'])){
  $title = htmlspecialchars($_POST['post-title']);
  $tags = htmlspecialchars($_POST['post-tags']);
  $body = $_POST['post-body'];
  if(!empty($title) && !empty($tags) &&!empty($body)){
    if(!(str_word_count($title) > 30 || str_word_count($body) > 750)) {
      echo $body.'<br>';
      echo $title;
      
      if (!preg_match('/^[a-zA-Z\'()!,.\s]+$/', $title)) {
        $error['msg'] = "Invalid title, special characters & numbers not allowed";
      }
      
    } else {
      $error['msg'] = 'Title = 30 words max, Body = 750 words max!';
    }
  } else {
    $error['msg'] = 'Fill all required fields *';
  }
}






$pageTitle = "Create Post";
include "inc/header.php"; 
?>

  <div class="card">
    <form action="" class="create-form" method="post" enctype=multipart/form-data>
    <h1 class="create-heading">Create New Post</h1>
      <div class="input-group">
        <label for="title"><span>Post Thumbnail</span><span class="error"><?php echo $error['msg']?></span></label>
        <input type="file" class="input-field" name="post-title" value="<?php echo $title; ?>">
      </div>
      <div class="input-group">
        <label for="title"><span>Post Title *</span> <span id="title_word_count"><b>0/30</b></span></label>
        <input type="text" class="input-field" id="post-title" name="post-title" onkeyup="titleWordCount()" value="<?php echo $title; ?>">
      </div>
      <div class="input-group">
        <label for="post-tags"><span> Post Tags *</span></label>
        <input type="text" class="input-field" name="post-tags" value="<?php echo $tags; ?>">
      </div>
      <div class="input-group">
        <label for="post-body"><span> Post Body *</span><span id="body_word_count"><b>0/750</b></span></label>
        <textarea class="input-field textarea" id="post-body" name="post-body" onkeyup="bodyWordCount()"><?php echo $body; ?></textarea>
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
    <script>
    function titleWordCount(){
      let t_eval_ = document.getElementById('post-title')
      let title_word_count = document.getElementById('title_word_count')
      t_eval__ = t_eval_.value.split(' ')
      t_eval___ = t_eval__.filter(function(str) {
        return str != ""
      })
      title_word_count.innerHTML = t_eval___.length + "/30"
      if(t_eval___.length >= 20) {
        title_word_count.style.color = '#f00'
        title_word_count.style.fontWeight = 'bold'
      } else {
        title_word_count.style.color = '#000'
        title_word_count.style.fontWeight = 'bold'
      }
    }

    function bodyWordCount(){
      let b_eval_ = document.getElementById('post-body')
      let body_word_count = document.getElementById('body_word_count')
      b_eval__ = b_eval_.value.split(' ')
      b_eval___ = b_eval__.filter(function(str) {
        return str != ""
      })
      body_word_count.innerHTML = b_eval___.length + "/750"
      if(b_eval___.length >= 700) {
        body_word_count.style.color = '#f00'
        body_word_count.style.fontWeight = 'bold'
      } else {
        body_word_count.style.color = '#000'
        body_word_count.style.fontWeight = 'bold'
      }
    }
    </script>
  <?php include "inc/footer.php"; ?>