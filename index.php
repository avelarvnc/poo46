<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="">
    
        <label for="nome">Nome</label>
        <input type="text" name="nome">
        <br>
        <label for="nome">Raça</label>
        <input type="text" name="raca">
        <br>        
        <label for="nome">Cor</label>
        <input type="text" name="cor">
        <br>        
        <label for="nome">Peso</label>
        <input type="text" name="peso">
        <br>        
        <label for="nome">Idade</label>
        <input type="text" name="idade">
        <br>
        <label for="nome">Dono</label>
        <input type="text" name="dono">
        <br>
        <input type="submit" value="Salvar">
    </form>

    <?php
        include("classes/Cachorro.php");

        // $dog = new Cachorro(); //instanciando um objeto da classe Cachorro
        // $dog->create("Spike", "Vira Lata", "Caramelo", 5, 6, "Diogo");

        // $dog->latir();

        // $dog2 = new Cachorro();
        // $dog2->create("Tobias", "Shiba Inu", "Amarelo", 3, 1, "Moises");

        // $dog2->latir();
        
        // $dog->rosnar("Diogo");
        // $dog->rosnar("Luiz");

        // $dog2->rosnar("Moises");
        // $dog2->rosnar("Julia");

        if (isset($_GET["nome"]))
        {
            $dog3 = new Cachorro();
            
            $dog3->create($_GET["nome"], $_GET["raca"], $_GET["cor"], 
                            $_GET["peso"], $_GET["idade"], $_GET["dono"]);

            $dog3->latir();

            $dog3->set_Nome("Jujuba");
            $dog3->latir();
            
            echo "<ul><li>" . $dog3->get_Raca() . "</li></ul>";
        }

    ?>
    
</body>
</html>