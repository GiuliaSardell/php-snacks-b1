<?php

// ## Snack 5
// Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

$text = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum repellat, consequuntur quae culpa consequatur nihil esse ut ea hic atque numquam at rerum doloremque repellendus quaerat, dolore eum id minima qui. Similique magni earum exercitationem perferendis ipsum sed nesciunt rem! Inventore fuga autem cupiditate odit aliquam? Quasi nisi quod, nihil excepturi doloribus perspiciatis porro minima odit obcaecati quis sunt unde sequi adipisci culpa maxime facere, harum aspernatur, veritatis consequatur laudantium distinctio. Soluta odio fugit eos earum deleniti et rerum, ut inventore, reprehenderit sint totam, labore recusandae sequi impedit voluptates eius? Eveniet qui ducimus provident veritatis, ratione magni aperiam inventore nostrum accusantium, quisquam fugiat atque eaque in expedita sed. Explicabo eum eos quo repudiandae officiis debitis blanditiis consectetur natus animi voluptates dicta esse alias, quas nam? Earum aliquid, deleniti saepe accusantium ab autem placeat suscipit nam neque officia sint nobis, ea dolore quas sequi. Officiis eos blanditiis maxime sint, at, quos, voluptate eligendi expedita sapiente et dicta earum autem incidunt accusamus distinctio natus omnis. Aliquid quia magnam error quibusdam enim praesentium aperiam quos laboriosam culpa nemo, sint nostrum in temporibus neque. Corrupti cumque nihil a ratione, iste quasi tenetur consequatur deleniti eaque, deserunt voluptatem vel voluptas possimus unde nisi? Facere iusto natus deserunt nam qui sint, sit dolorum quidem suscipit perferendis quia nihil laboriosam vitae incidunt soluta molestiae, asperiores quasi repellat in autem accusamus at! Eius nostrum rerum corporis numquam. Ipsam hic quaerat laboriosam quis aut! Eos optio, doloribus praesentium nihil illo neque magnam atque consequuntur iure velit recusandae ipsa, debitis vitae id molestias asperiores facilis ratione dolorum similique eaque mollitia ullam officia doloremque earum? Magnam voluptatum dolorum architecto rem obcaecati impedit modi libero eveniet error. Odit beatae esse ex nesciunt nulla quaerat, laudantium porro voluptates iste dolor ducimus voluptate sunt molestias recusandae tempora nostrum. Modi harum dolores culpa vel odit.';

echo "{$text} <br> <br> <br>";

// var_dump(explode('.', $text, -1));
$arrayText = explode('.', $text, -1);

for($i=0; $i<count($arrayText); $i++){
  echo "$i ====> {$arrayText[$i]} <br>";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  


</body>
</html>