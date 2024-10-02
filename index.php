<?=include_once "listaProdutos.php"?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="img/icone-serenatto.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Lanchonete</title>
</head>
<body>
    <main>
        
        <h2>Cardápio Digital</h2>
        <section class="container-cafe-manha">
            <div class="container-cafe-manha-titulo">
                <h3>Opções para o Café</h3>
                
            </div>
            <div class="container-cafe-manha-produtos">

                <?php foreach($listaProdutos as $produtos):?>
                    <div class="container-produto">
                        <div class="container-foto">
                            <img src="<?=$produtos['img']?>">
                        </div>
                        <p><?=$produtos['nome']?></p>
                        <p>Café cremoso irresistivelmente suave e que envolve seu paladar</p>
                        <p>R$ 5.00</p>
                    </div>
                <?php endforeach;?>
            </div>
        </section>
        <section class="container-almoco">
            <div class="container-almoco-titulo">
                <h3>Opções de Bebidas</h3>
                
            </div>
            <div class="container-almoco-produtos">
                <div class="container-produto">
                    <div class="container-foto">
                        <img src="img/suco_laranja.jpg">
                    </div>
                    <p>Suco de Laranja</p>
                    <p>Suco natural de laranja 400ml</p>
                    <p>R$ 5.90</p>
                </div>
                <div class="container-produto">
                    <div class="container-foto">
                        <img src="img/suco_abacaxi.jpg">
                    </div>
                    <p>Suco Abacaxi com hortelã</p>
                    <p>suco natural de abacaxi com hortelã 400ml</p>
                    <p>R$ 5.90</p>
                </div>
                <div class="container-produto">
                    <div class="container-foto">
                        <img src="img/torre.jpg">
                    </div>
                    <p>Torre de Chopp</p>
                    <p>Torre de cerveja 3,5l</p>
                    <p>R$ 20.00</p>
                </div>
                <div class="container-produto">
                    <div class="container-foto">
                        <img src="img/cerveja.jpg">
                    </div>
                    <p>Como de Cerveja</p>
                    <p>Compo de cerveja 400ml</p>
                    <p>R$ 8.50</p>
                </div>
            </div>

        </section>
    </main>
</body>
</html>