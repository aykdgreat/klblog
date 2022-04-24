<?php
//include "inc/test_data.php";
include "inc/db.php";

$username = $comment_body = "";

if (isset($_GET['post_id'])) {
  $post_id = $_GET['post_id'];
  $get = "SELECT * FROM posts WHERE post_id ='$post_id' limit 1";
  $result = mysqli_query($conn, $get);
  if (mysqli_num_rows($result) > 0) {
    $post = mysqli_fetch_assoc($result);
  }

  $get_comments = "SELECT * FROM comments WHERE post_id='$post_id'";
  $comments = mysqli_query($conn, $get_comments);
  $comments = mysqli_fetch_all($comments, MYSQLI_ASSOC);
}

if (isset($_POST['submit-comment'])) {
  $username = htmlspecialchars($_POST['username']);
  $comment_body = htmlspecialchars($_POST['comment_body']);
  $post_id = $_GET['post_id'];
  if (!empty($username) && !empty($comment_body)) {
    if (!(str_word_count($username) > 5 || str_word_count($comment_body) > 200)) {
      if (preg_match('/^[a-zA-Z\'().\s]+$/', $username)) {
        if (!($username == "Admin")) {

          $username = mysqli_real_escape_string($conn, $username);
          $comment_body = mysqli_real_escape_string($conn, $comment_body);

          $add_comment = "INSERT INTO comments(post_id, username, comment_body) VALUES('$post_id', '$username', '$comment_body')";
          $query = mysqli_query($conn, $add_comment);
          if ($query) {
            header('location: post.php?post_id='.$post_id);
          } else {
            die('Error:'. mysqli_error($conn));
          }
        } else {
          $error['msg'] = "Username not allowed";
        }
      } else {
        $error['msg'] = "Invalid Name: special characters not allowed";
      }

    } else {
      $error['msg'] = 'Name = 3 words max, Body = 50 words max!';
    }
  } else {
    $error['msg'] = 'Fill required fields marked *';
  }
}

$pageTitle = $post['title'];
include "inc/header.php";
?>

<article>
  <section class="post">
    <img src="Daigle.jpg" alt="img not found">
    <div class="post-body">
      <div class="post-title">
        <?php echo $post['title']; ?>
      </div>
      <div class="post-about">
        Posted by: <span class="post-by"><a href="user.php?user=Admin">Admin</a></span>
        <span class="post-date"><?php echo $post['created_at']; ?></span>
      </div>
      <div class="post-full">
        <?php echo html_entity_decode($post['body']); ?>
      </div>
    </div>
  </section>

  <section class="post-comment">
    <div class="comment-heading">
      <h4>Comments</h4>
    </div>
    <?php if (!empty($comments)):
    foreach ($comments as $comment): ?>
    <div class="comment-list-item">
      <img src="avat.png" alt="popular">
      <span class="com-username"><a href="user.php?user=<?php echo $comment['username']; ?>"><?php echo $comment['username']; ?></a></span> said:
      <span class="com-body">
        <?php echo $comment['comment_body']; ?>
        <span class="comment-date">[<?php echo $comment['created_at']; ?>]</span>
      </span>
    </div>
    <?php endforeach;
    else : ?>
    <div class="comment-list-item">
      <h3>There are no comments on this post yet, add below!</h3>
    </div>
    <?php endif; ?>
  </section>
  <section class="post-comment">
    <div class="comment-heading">
      <h4>Add Comment</h4>
    </div>
    <form method="post" class="create-form">
      <input type="hidden" value="<?php echo $post['post_id']; ?>">
      <label for="username"><span>Enter Your Name *</span><span class="error" style="text-align:center;"><?php echo $error['msg'].'<br>'; ?></span> <span id="username_word_count"><b>0/3</b></span></label>
      <input type="text" name="username" id="username" value="<?php echo $username; ?>"class="input-field" onkeyup="usernameWordCount()">
      <label for="comment_body"><span>Enter Comment * </span><span id="comment_word_count"><b>0/50</b></span></label>
      <textarea name="comment_body" id="comment-body" class="input-field textarea" onkeyup="commentWordCount()"><?php echo $comment_body; ?></textarea>
      <input type="submit" name="submit-comment" class="create-btn" value="Post Comment">
    </form>
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
      </span>
    </div>
    <div class="popular-post">
      <img src="gondol.jpg" alt="popular">
      <span>
        <a href="#">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, officia!</a>
      </span>
    </div>
    <div class="popular-post">
      <img src="gondol.jpg" alt="popular">
      <span>
        <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, eos.</a>
      </span>
    </div>
  </section>
</aside>
<script>
  function usernameWordCount() {
    let u_eval_ = document.getElementById('username')
    let username_word_count = document.getElementById('username_word_count')
    u_eval__ = u_eval_.value.split(' ')
    u_eval___ = u_eval__.filter(function(str) {
      return str != ""
    })
    username_word_count.innerHTML = u_eval___.length + "/3"
    if (u_eval___.length >= 2) {
      username_word_count.style.color = '#f00'
      username_word_count.style.fontWeight = 'bold'
    } else {
      username_word_count.style.color = '#000'
      username_word_count.style.fontWeight = 'bold'
    }
  }

  function commentWordCount() {
    let c_eval_ = document.getElementById('comment-body')
    let comment_word_count = document.getElementById('comment_word_count')
    c_eval__ = c_eval_.value.split(' ')
    c_eval___ = c_eval__.filter(function(str) {
      return str != ""
    })
    comment_word_count.innerHTML = c_eval___.length + "/50"
    if (c_eval___.length >= 40) {
      comment_word_count.style.color = '#f00'
      comment_word_count.style.fontWeight = 'bold'
    } else {
      comment_word_count.style.color = '#000'
      comment_word_count.style.fontWeight = 'bold'
    }
  }
</script>
<?php include "inc/footer.php"; ?>