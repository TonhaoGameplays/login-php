<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listagem | Cadastro</title>
        <link>
    <body>
        <a href="registro.html">
        <input type="button" value="Voltar para a pagina inicial de cadastro <--">
        </a>
        <table border="1">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Senha</th>
                <th>Email</th>
                <th>Tipo</th>
                
            </tr>
        </thead>
        <tbody>
    <?php
    include "connect.php";
    $dados = $conn ->query("SELECT * FROM dados");
    
    
    while ($linha = mysqli_fetch_assoc($dados)) {
        $id = $linha['ID'];
        $nomeusuario = $linha['nomeusuario'];
        $senha = $linha['senha'];
        $email = $linha['email'];
        $tipo_de_usuario = $linha['tipo_de_usuario'];
        echo "<tr>

        <td>$id</td>
        <td>$nomeusuario</td>
        <td>$senha</td>
        <td>$email</td>
        <td>$tipo_de_usuario</td>       
        <td><a href = 'confirmar_alteracao.html?email=$email'>Alterar</a></td>
        </tr>";
    }
    echo "</table>";

?>
    </tbody>
    </body>
    </html>