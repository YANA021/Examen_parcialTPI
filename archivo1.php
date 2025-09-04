<?php
$CATS = [
  'todas' => 'Todas',
  'principales' => 'Personajes principales',
  'villanos' => 'Villanos',
  'amigos' => 'Amigos de Shrek',
  'secundarios' => 'Secundarios'
];
$P = [
  ['img'=>'imagenes/img1.jpg','nom'=>'Lord Farquaad','cat'=>'villanos','desc'=>'Tirano de Duloc.'],
  ['img'=>'imagenes/img3.jpg','nom'=>'Shrek','cat'=>'principales','desc'=>'Ogro prota.'],
  ['img'=>'imagenes/img2.jpg','nom'=>'hermanastra_mas_fea','cat'=>'secundario','desc'=>'Es un papucho, su cara parece tallada por los mismos angeles, el meme.'],
  ['img'=>'imagenes/img4.jpg','nom'=>'Burro','cat'=>'amigos','desc'=>'Burro o donkey amigo del protagonista.'],
  ['img'=>'imagenes/img5.jpg','nom'=>'jengibre','cat'=>'amigos','desc'=>'galleta de jengibre.'],
];

$cat = $_GET['cat'] ?? 'todas';
$lista = array_filter($pers, fn($p)=>$cat==='todas' || $p['cat']===$cat);
?>
<!doctype html><meta charset="utf-8"><title>Personajes</title>
<nav>
  <?php foreach($cats as $k=>$v): ?>
    <a href="?cat=<?=$k?>"><?=$v?></a>
  <?php endforeach; ?>
</nav>
<h3>Mostrando <?=count($lista)?></h3>
<?php foreach($lista as $p): ?>
  <div>
    <img src="<?=$p['img']?>" width="120"><br>
    <b><?=$p['nom']?></b> (<?=$cats[$p['cat']]?>)
  </div>
<?php endforeach; ?>