<?php 
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Consultar{
        function consultarClienteIndividual(
            Conexao $conexao,
            int $cpf
        )
        {
            try{
                $conn = $conexao->conectar();
                $sql  = "select * from cliente where codigo = '$cpf'";
                $result = mysqli_query($conn, $sql);

                while($dados = mysqli_fetch_Array($result)){
                    if($dados['codigo'] == $cpf){
                        echo "<br>CPF: ".$dados['codigo'].
                             "<br>Nome: ".$dados['nome'].
                             "<br>Telefone: ".$dados['telefone'].
                             "<br>Endereço: ".$dados['endereco'].
                             "<br>Total: ".$dados['total'];
                        return;//Finalizar o While
                    }
                    return "Código digitado invalido!";
                }//fim do while

            }
            catch(Except $erro)
            {
                echo $erro;
            }
        }//fim do consultarClienteIndividual
    
        function consultarFuncionarioIndividual(
            Conexao $conexao,
            int $cpf
        )
        {
            try{
                $conn = $conexao->conectar();
                $sql  = "select * from funcionario where codigo = '$cpf'";
                $result = mysqli_query($conn, $sql);

                while($dados = mysqli_fetch_Array($result)){
                    if($dados['codigo'] == $cpf){
                        return "<br>CPF: ".$dados['codigo'].
                             "<br>Nome: ".$dados['nome'].
                             "<br>Telefone: ".$dados['telefone'].
                             "<br>Endereço: ".$dados['endereco'].
                             "<br>Total: ".$dados['salario'];
                        
                    }
                }//fim do while
                return "Digite um CPF válido!";

            }
            catch(Except $erro)
            {
                echo $erro;
            }
        }//fim do consultarFuncionarioIndividual
    
    
    
    
    
    
    
    }//fim da classe
?>