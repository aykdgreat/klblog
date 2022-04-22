<?php 
$user = $_GET['user'];
$pageTitle = $user;
include "inc/header.php";
?>


<article >
    <section class="user-info">
        <img src="avat.png" alt="user" style="width: 200px; display:block;margin:20px auto;padding:20px;">
        <div class="user">
            USER: <h1><?php echo $user; ?></h1>
            ROLE: <h3><?php if ($user == "Admin") { echo "Administrator"; } else { echo "Reader"; } ?></h3>
        </div>
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