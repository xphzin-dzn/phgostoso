<h1> Dados apresentados do formulário </h1>

<?php

foreach ($resultado as $row){
    echo "id:".$row['id']. "<br>";
    echo "nome:".$row['nome']."<br>";
    echo "laboratorio:".$row['laboratorio']."<br>";
    echo "quantidade:".$row['quantidade']."<br>";
    echo "preco".$row['preco']."<br>";
    
}
?>


?>

<h2> Dados inseridos com sucesso! </h2>
<br>
<a href = "http://localhost:8080" >   Clique aqui para visualizar todos os dados </a>
