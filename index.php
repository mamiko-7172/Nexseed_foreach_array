<?php

// 配列（たんす）
// 配列の時はarrayを頭に書く

$colors = array('赤色','青色','黄色');
echo $colors[0]; //赤色 一番最初は0から始まる

foreach ($colors as $color) {
    echo $color . '<br>';
}

//　連想配列

$fruits = array('apple'=>'りんご', 'orange'=>'みかん', 'banana'=>'ばなな');
  foreach ($fruits as $key => $value) {
    echo $key . ' = ' . $value . '<br>';
  }

  $fruits = array('りんご', 'みかん', 'ばなな');
  foreach ($fruits as $fruit){
    echo $fruit . '<br>';
  }