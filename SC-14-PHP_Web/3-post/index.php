<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cadastro.php" method="POST">
        <div>
        <input type="text" name="marca" placeholder="Insira a marca" />
        </div>
        <div>
        <input type="text" name="preco" placeholder="preço do carro" />
        </div>
        <div>
        <input type="checkbox" name="opcionais[]" value="Teto solar"> Teto solar </input>
       </div>
       <div>
        <input type="checkbox" name="opcionais[]" value="Pelicula"> Pelicula </input>
       </div>
       <div>
        <input type="checkbox" name="opcionais[]" value="Blindado"> Blindado </input>
       </div>
       <div>
        <input type="submit" value="Enviar">
       </div>
       
    </form>

<a href='http://localhost/curso_php/SC-14-PHP_Web'>Voltar</a>

</body>
</html>