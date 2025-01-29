<?php 
    namespace PHP\Modelo\Tela;
    require_once('..\DAO\Consultar.php');
    require_once('..\DAO\Conexao.php');
    use PHP\Modelo\DAO\Consultar;
    use PHP\Modelo\DAO\Conexao;
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Consultar Funcionário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <form method="POST">
        <label>Informe um CPF</label>
        <input type="text" name="tCpf"/>
        <button type="submit">Consultar
        <?php
            $conexao = new Conexao();
            if(isset($_POST['tCpf'])){
                $cpf     = $_POST['tCpf'];
                $consultar = new Consultar(); 
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['tCpf'])){
            echo $consultar->consultarFuncionarioIndividual($conexao, $cpf);
        }else{
            echo "Preencha o campo CPF";
        }
    ?>
</body>
</html>