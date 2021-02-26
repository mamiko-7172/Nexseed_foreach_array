<?php
    $products_name = array('くつ', 'ズボン', 'Tシャツ', 'ネクタイ')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php foreach($products_name as $product_name): ?>
      <div>
          <h2>商品名</h2>
             <p>
               <?php echo $product_name; ?>
             </p>
      </div>
    <?php endforeach; ?>
    
</body>
</html>