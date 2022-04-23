

<?php
$tags = [];
$tag = "";
if (isset($_GET['save'])) {
  $tags = explode(' ', $_GET['tags']);
}

echo str_word_count("Dorem ipsum dolor sit amet, consectetur adipisicing elit. Sit cupiditate esse excepturi eveniet illum dolorum maxime qui veniam velit, hic aliquid ipsa, culpa assumenda dolor mollitia doloremque eligendi atque id reiciendis. Numquam expedita suscipit magnam ea earum minus, repudiandae amet neque exercitationem unde ad aliquid similique, mollitia repellendus dicta laudantium. Ducimus voluptas consequuntur a iste quasi, maiores recusandae nemo mollitia, ea vitae molestias accusamus necessitatibus nam? Neque tenetur, laboriosam, fugiat amet voluptatem tempore rerum enim itaque molestias. Labore iste amet fugit ea unde culpa? Eos reprehenderit unde minus natus at deleniti aliquam molestiae beatae maiores alias, totam eius numquam quam quibusdam veniam quasi nesciunt, consectetur porro reiciendis optio. Ad, quod? Atque ullam, tempora beatae aliquid, inventore dolorem repellendus ipsum. Distinctio quo quas veniam voluptatum, error asperiores, totam non, perspiciatis consequatur accusantium quia minus quaerat blanditiis ab? Sint, ipsam temporibus. Eveniet voluptates obcaecati eius expedita esse illo totam reiciendis illum error modi cumque, rerum tempore doloribus mollitia beatae similique. Voluptatum repellat, natus provident, cumque, cupiditate iure totam magni eum nulla incidunt asperiores! Illo minima quos quia consequuntur non. Distinctio consequuntur sunt, adipisci maxime, assumenda labore, ipsa fugit laborum excepturi soluta beatae aut nulla provident tempore iste quam quas minima quia temporibus. Dorem ipsum dolor sit amet, consectetur adipisicing elit. Sit cupiditate esse excepturi eveniet illum dolorum maxime qui veniam velit, hic aliquid ipsa, culpa assumenda dolor mollitia doloremque eligendi atque id reiciendis. Numquam expedita suscipit magnam ea earum minus, repudiandae amet neque exercitationem unde ad aliquid similique, mollitia repellendus dicta laudantium. Ducimus voluptas consequuntur a iste quasi, maiores recusandae nemo mollitia, ea vitae molestias accusamus necessitatibus nam? Neque tenetur, laboriosam, fugiat amet voluptatem tempore rerum enim itaque molestias. Labore iste amet fugit ea unde culpa? Eos reprehenderit unde minus natus at deleniti aliquam molestiae beatae maiores alias, totam eius numquam quam quibusdam veniam quasi nesciunt, consectetur porro reiciendis optio. Ad, quod? Atque ullam, tempora beatae aliquid, inventore dolorem repellendus ipsum. Distinctio quo quas veniam voluptatum, error asperiores, totam non, perspiciatis consequatur accusantium quia minus quaerat blanditiis ab? Sint, ipsam temporibus. Eveniet voluptates obcaecati eius expedita esse illo totam reiciendis illum error modi cumque, rerum tempore doloribus mollitia beatae similique. Voluptatum repellat, natus provident, cumque, cupiditate iure totam magni eum nulla incidunt asperiores! Illo minima quos quia consequuntur non. Distinctio consequuntur sunt, adipisci maxime, assumenda labore, ipsa fugit laborum excepturi soluta beatae aut nulla provident tempore iste quam quas minima quia temporibus.");
echo str_word_count("LOREM IPSUM DOLOR SIT AME, CONSECTETUR ADIPISICING ELIT. CUMQUE BLANDITIIS AT ODIO DELENITI OFFICIIS IPSA");
echo str_word_count("img not found
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi veniam iure dolores laborum similique architecto, alias reprehenderit dolor nemo, aperiam distinctio consectetur totam! Assumenda, est ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style type="text/css" media="all">
    .tag {
      background-color: #000;
      color: #fff;
      /*font-size: 10px;*/
      text-transform: capitalize;
      font-variant: small-caps;
    }
  </style>
</head>
<body>
  <?php foreach($tags as $tag): ?>
  
  <span class="tag"><?php echo $tag; ?></span>
  
  <?php endforeach ?>
  
  
  <form action="" method="get">
  <input type="text" name="tags" id="">
  <input type="submit" name=save value="Save" />
</form>
</body>
</html>