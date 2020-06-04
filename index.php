<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Prodotto_OOP</title>
</head>
<body>

    <!-- Provare a immaginare una classe come quella vista a lezione, definendo le variabili d'ambiente per disegnare un ipotetico prodotto di magazzino;
    Definire anche costruttore completo (tutti le variabili che avete creato) + printMe per fare il log, nell'ottica di quanto visto questa mattina a lezione -->


   <?php

        class Canvas{

            private $width;
            private $heigth;
            private $material;
            private $price;

            public function __construct ($width, $height, $material, $price){

                $this -> width = $width;
                $this -> height = $height;
                $this -> material = $material;
                $this -> price = $price;

            
            }

            public function printMe(){

                echo 'Tela larga ' . $this -> width . ', alta ' . $this -> height . ' e realizzata in ' . $this -> material . '.' . '<br><br>' . 'Prezzo: ' .  $this -> price . '<br><br>';
            }
            
        }


        $canvas1 = new Canvas('25cm', '30cm', 'cotone', '€30');
        $canvas1 -> printMe();

        $canvas2 = new Canvas('30cm', '40cm', 'cotone', '€40');
        $canvas2 -> printMe();



    
   
   ?>





</body>
</html>