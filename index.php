<?php
    require_once("bd/conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Sistema CLIWEB</title>
</head>
<body>
    <header>
        <h4 style="text-align: center; height: 20px;">Sistema Cadastro de Clientes</h4>
        <hr>
        <form style="margin: auto; width: 630px;">
            <button style="width: 100px;"><a style="text-decoration: none;" href="index.php?menuop=home">Home</a></button>
            <button style="width: 100px;"><a style="text-decoration: none;" href="index.php?menuop=cliente">Cliente</a></button>
            <button style="width: 100px;"><a style="text-decoration: none;" href="index.php?menuop=endereco">Endereço</a></button>
            <button style="width: 100px;"><a style="text-decoration: none;" href="index.php?menuop=dependente">Dependente</a></button>
            <button style="width: 100px;"><a style="text-decoration: none;" href="index.php?menuop=conjuge">Conjuge</a></button>
            <button style="width: 100px;"><a style="text-decoration: none;" href="index.php?menuop=vendedor">Vendedor</a></button>
        </form>
    </header>
    <hr>    
    <main>
        <?php
            $menuop = (isset($_GET["menuop"]))?$_GET['menuop']:"home";

            switch ($menuop) {
                case 'home':
                    include "paginas/home/home.php";
                    break;
                
                case 'cliente':
                    include "paginas/cliente/cliente.php";
                    break;
    
                case 'cadcliente':
                    include "paginas/cliente/cadcliente.php";
                    break;

                case 'inserircliente':
                    include "paginas/cliente/inserircliente.php";
                    break;

                case 'alteracliente':
                    include "paginas/cliente/alteracliente.php";
                    break;
                        
                case 'endereco':
                    include "paginas/endereco/endereco.php";
                    break;

                case 'dependente':
                    include "paginas/dependente/dependente.php";
                    break;
    
                case 'conjuge':
                    include "paginas/conjuge/conjuge.php";
                    break;
                    
                case 'vendedor':
                    include "paginas/vendedor/vendedor.php";
                    break;
    
                default:
                    include "paginas/home/home.php";
                    break;
            }
        ?>
    </main>
</body>
</html>