<?php
    session_start();
    include_once("conexao.php");
    //consultar as informações dentro do bd
    $result_usuarios = "SELECT id, nome, email, telefone
                        FROM usuarios";
    $resultado_usuarios = mysqli_query($conn,
                            $result_usuarios);
    //verificação dos resultados, através da 
    //query mysqli_num_rows
    if(mysqli_num_rows($resultado_usuarios) >0){
        echo "<h3> Listagem de usuários cadastrados</h3>";
        
        echo "<table border='1'>
        <tr>
            <th> Nome </th>
            <th> Email </th>
            <th> Telefone</th>
            <th> Excluir </th>
            <th> Alterar </th>
        </tr>";
    //interação com um laço de repetição
    while ($usuario = mysqli_fetch_assoc($resultado_usuarios)){
        echo '<tr>';
        //informo qual coluna quero imprimir
                   echo '<td>'. $usuario['nome'] .'</td>';
                   echo '<td>'. $usuario['email'] .'</td>';
                   echo '<td>'. $usuario['telefone'] .'</td>';
                   echo"<td><a href='excluir.php".$usuario['id']."'>
                   <img src='imagens/del.png' width='20' height='20'
                   title='Excluir'/></td>";
                   echo"<td><a href='excluir.php".$usuario['id']."'>
                   <img src='imagens/edit.png' width='20' height='20'
                   title='Alterar'/></td>";
               echo '</tr>';
           }
    echo"</table>";
    }else{
        echo"<p>Nenhum usuário cadastrado</p>";
    }
    //fechar a conexão mysqli
    mysqli_close($conn);

?>