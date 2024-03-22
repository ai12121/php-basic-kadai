<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_016</title>
</head>

<body>
	 <p>
      <?php
			class Food{
				private $name;
				private $price;

				public function show_price(){
					echo $this-> price.'円'.'<br>';
				}
				public function __construct(string $name,int $price){
					$this -> name = $name;
					$this -> price = $price;
				}
			}
			$food = new Food('りんご',200);
			print_r($food);
			$food ->show_price();
			?>
   </p>

	 <p>
      <?php
			class Animal{
				private $name;
				private $height;
				private $weight;

				public function show_height(){
					echo $this-> height.'cm'.'<br>';
				}
				public function __construct(string $name, $height, $weight){
				  $this -> name = $name;
					$this -> height = $height;
					$this -> weight = $weight;
				}
			}

			$animal = new Animal('犬',40,35);
			print_r($animal);
			$animal ->show_height();
			?>
   </p>

</body>

</html>
