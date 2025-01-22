<?php
    namespace PHP\Modelo;
    require_once('Cliente.php');
    require_once('Funcionario.php');
    use PHP\Modelo\Funcionario;
    use PHP\Modelo\Cliente;

    //Criando o objeto
    $cliente1 = new Cliente("12345678910",
                            "João Carlos",
                            "1199999-5656",
                            "Rua Jipa, 15",
                            1500);
    
    //Visualizar os dados
    echo $cliente1->imprimir();

    //Criando o objeto
    $func1 = new Funcionario("12345678910",
                            "Paulo Carlos",
                            "1199999-5656",
                            "Rua Jipa, 15",
                            3500);
    
    //Visualizar os dados
    echo "<br>".$func1->imprimir();




?>