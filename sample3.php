<?php
  //1次元配列
  $tan =[1,2,3];
  echo $tan[0]."\n";

  //多次元配列
  $nizi = 
     [
      ['松下',29,'男性'],
      ['高田',25,'男性'],
      ['岡田',25,'女性']
     ];

      echo '私の名前は'. $nizi[0][0].'です。';

  //連想配列
  $ren =
     [
        'name' => '田中',
        'age' => 24,
        'codelamg' => 'HTML'
     ];

     echo '年齢は'.$nizi[0][1].$nizi[0][2].'です。'. "\n";
     echo $ren['name'];
?>