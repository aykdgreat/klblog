<?php 
include "inc/test_data.php"; 




$pageTitle = "Post";
include "inc/header.php"; 
?>


<article>
  <section class="post">
    <img src="Daigle.jpg" alt="img not found">
    <div class="post-body">
      <div class="post-title">
        Title heading Lorem ipsum dolor sit amet
      </div>
      <div class="post-about">
        Posted by: <span class="post-by"><a href="user.php?user=Admin">Admin</a></span>
        <span class="post-date">2022-04-11</span>
      </div>
      <div class="post-full">
        Dorem ipsum dolor <b>sit amet</b>, consectetur adipisicing elit. Sit cupiditate esse excepturi eveniet illum dolorum maxime qui veniam velit, hic aliquid ipsa, culpa assumenda dolor mollitia doloremque eligendi atque id reiciendis. Numquam expedita suscipit magnam ea earum minus, repudiandae amet neque exercitationem unde ad aliquid similique, mollitia repellendus dicta laudantium. Ducimus voluptas consequuntur a iste quasi, maiores recusandae nemo mollitia, ea vitae molestias accusamus necessitatibus nam? Neque tenetur, laboriosam, fugiat amet voluptatem tempore rerum enim itaque molestias. Labore iste amet fugit ea unde culpa? Eos reprehenderit unde minus natus at deleniti aliquam molestiae beatae maiores alias, totam eius numquam quam quibusdam veniam quasi nesciunt, consectetur porro reiciendis optio. Ad, quod? Atque ullam, tempora beatae aliquid, inventore dolorem repellendus ipsum. Distinctio quo quas veniam voluptatum, error asperiores, totam non, perspiciatis consequatur accusantium quia minus quaerat blanditiis ab? Sint, ipsam temporibus. Eveniet voluptates obcaecati eius expedita esse illo totam reiciendis illum error modi cumque, rerum tempore doloribus mollitia beatae similique. Voluptatum repellat, natus provident, cumque, cupiditate iure totam magni eum nulla incidunt asperiores! Illo minima quos quia consequuntur non. Distinctio consequuntur sunt, adipisci maxime, assumenda labore, ipsa fugit laborum excepturi soluta beatae aut nulla provident tempore iste quam quas minima quia temporibus. <p>Dorem ipsum dolor sit amet, consectetur adipisicing elit. Sit cupiditate esse excepturi eveniet illum dolorum maxime qui veniam velit, hic aliquid ipsa, culpa assumenda dolor mollitia doloremque eligendi atque id reiciendis. Numquam expedita suscipit magnam ea earum minus, repudiandae amet neque exercitationem unde ad aliquid similique, mollitia repellendus dicta laudantium. Ducimus voluptas consequuntur a iste quasi, maiores recusandae nemo mollitia, ea vitae molestias accusamus necessitatibus nam? Neque tenetur, laboriosam, fugiat amet voluptatem tempore rerum enim itaque molestias. Labore iste amet fugit ea unde culpa? Eos reprehenderit unde minus natus at deleniti aliquam molestiae beatae maiores alias, totam eius numquam quam quibusdam veniam quasi nesciunt, consectetur porro reiciendis optio. Ad, quod? Atque ullam, tempora beatae aliquid, inventore dolorem repellendus ipsum. Distinctio quo quas veniam voluptatum, error asperiores, totam non, perspiciatis consequatur accusantium quia minus quaerat blanditiis ab? Sint, ipsam temporibus. Eveniet voluptates obcaecati eius expedita esse illo totam reiciendis illum error modi cumque, rerum tempore doloribus mollitia beatae similique. Voluptatum repellat, natus provident, cumque, cupiditate iure totam magni eum nulla incidunt asperiores! Illo minima quos quia consequuntur non. Distinctio consequuntur sunt, adipisci maxime, assumenda labore, ipsa fugit laborum excepturi soluta beatae aut nulla provident tempore iste quam quas minima quia temporibus.</p>
      </div>
    </div>
  </section>
  <section class="post-comment">
    <div class="comment-heading">
      <h4>Comments</h4>
    </div>
    <?php if(!empty($comments)):
    foreach($comments as $comment): ?>
    <div class="comment-list-item">
      <img src="avat.png" alt="popular">
      <span class="com-username"><a href="user.php?user=<?php echo $comment['username']; ?>"><?php echo $comment['username']; ?></a></span> said:
      <span class="com-body">
        <?php echo $comment['comment-body']; ?>
      </span>
    </div>
    <?php endforeach; ?>
    <?php else: ?>
    <div class="comment-list-item"><h3>There are no comments on this post yet, add below!</h3></div>
    <?php endif; ?>
 </section>
  <section class="post-comment">
    <div class="comment-heading">
      <h4>Add Comment</h4>
    </div>
    <form method="post" class="create-form">
      <input type="text" value="<?php echo $posts[0]['id']?>">
      <label for="username">Enter Your Name</label>
      <input type="text" name="username" class="input-field">
      <label for="comment-body">Enter Comment</label>
      <textarea name="comment-body" class="input-field textarea"></textarea>
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

<?php include "inc/footer.php"; ?>