<?php
$raccolta = [
  [
    'title' => 'New Jersey',
    'author' => 'Bon Jovi',
    'year' => 1988,
    'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg'
  ],
  [
    'title' => 'Ligabue',
    'author' => 'Ligabue',
    'year' => 1998,
    'poster' => 'https://img.discogs.com/bqN_oW5ckslIv-w3NiDkB7fjsGo=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-2875395-1396641994-5216.jpeg.jpg'
  ],
  [
    'title' => 'Bohemian Rapsody',
    'author' => 'Queen',
    'year' => 1988,
    'poster' => 'https://www.imgcinemas.it/wp-content/uploads/2018/10/bohemianrhapsody_rgb-3.jpg'
  ],
  [
    'title' => 'Yellow Sanmarine',
    'author' => 'Beatles',
    'year' => 1968,
    'poster' => 'https://img.discogs.com/En-I1oGmNh6t9491tfCOsxzsEy4=/fit-in/600x600/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-4141703-1492449982-6548.jpeg.jpg'
  ],
  [
    'title' => 'America Idiot',
    'author' => 'Greenday',
    'year' => 2006,
    'poster' => 'https://img.discogs.com/AXZRAwcNYdqqbhPeUWChPx4e4Tw=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-973706-1488163916-8517.jpeg.jpg'
  ],
  [
    'title' => 'Nord SUd Ovest Est',
    'author' => '883',
    'year' => 2000,
    'poster' => 'https://img.discogs.com/qPBLPTcPHHt5zgT6LU58jc9XOJg=/fit-in/600x592/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-1209145-1266073228.jpeg.jpg'
  ],
  [
    'title' => 'Super Hits',
    'author' => 'Giorgio Vanni',
    'year' => 2016,
    'poster' => 'https://digital24.it/56084/giorgio-vanni-giorgio-vanni-super-hits-2-cd.jpg'
  ],
  [
    'title' => 'Dark Side of The moon',
    'author' => 'Pink Floyd',
    'year' => 1981,
    'poster' => 'https://img.ibs.it/images/5099902895529_0_306_0_75.jpg'
  ],
  [
    'title' => 'Master of Puppets',
    'author' => 'Metallica',
    'year' => 1985,
    'poster' => 'https://img.discogs.com/HSuP6Uqx1DYkX7V9h3o2cC_AV6o=/fit-in/600x600/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-1549636-1265948094.jpeg.jpg'
  ],
];
  header('Content-Type: application/json');
  echo json_encode($raccolta);
 ?>
