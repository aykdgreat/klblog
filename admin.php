<?php
session_start();
$error['msg'] = "";
if (isset($_POST['admin-auth'])) {
  $auth_input = htmlspecialchars($_POST['admin-pass']);
  if (!empty($auth_input)) {
    if ($auth_input == "klblog_admin") {
      $_SESSION['admin'] = md5('klblog_admin');
     header('location: all.php');
    } else {
      $error['msg'] = "Invalid code, permission denied!";
    }
  } else {
    $error['msg'] = "Enter authentication code!";
  }
}


$pageTitle = "Admin Login";
include "inc/header.php";
?>


<div class="card">
  <img src="avat.png" alt="user" style="width: 200px; display:block;margin:20px auto 0;padding:20px;">
  <form action="" class="create-form" method="post">
    <div class="input-group">
      <label for="admin-pass">Admin Authentication Code <span class="error"><?php echo $error['msg']; ?></span></label>
      <input type="password" class="input-field" name="admin-pass" style="margin-bottom:10px;">
    </div>
    <input type="submit" value="Validate" class="create-btn" name="admin-auth">
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

<?php include "inc/footer.php"; ?>