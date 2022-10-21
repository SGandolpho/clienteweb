<header>
    <h3>Inserir Cliente</h3>
</header>

<?php
    $nome = mysqli_real_escape_string($conexao,  $_POST["nome"]);
    $dtnascimento = mysqli_real_escape_string($conexao,  $_POST["dtnasc"]);
    $rg = mysqli_real_escape_string($conexao,  $_POST["rg"]);
    $cpf = mysqli_real_escape_string($conexao,  $_POST["cpf"]);
    $email = mysqli_real_escape_string($conexao,  $_POST["email"]);
    $fone1 = mysqli_real_escape_string($conexao,  $_POST["fone1"]);
    $fone2 = mysqli_real_escape_string($conexao,  $_POST["fone2"]);
    $seguro = mysqli_real_escape_string($conexao,  $_POST["seguro"]);
    $produto = mysqli_real_escape_string($conexao,  $_POST["produto"]);
    $apolice = mysqli_real_escape_string($conexao,  $_POST["apolice"]);
    $dtfechaapol = mysqli_real_escape_string($conexao,  $_POST["dtfechaapol"]);
    $saude = mysqli_real_escape_string($conexao,  $_POST["saude"]);
    $dtfechasaude = mysqli_real_escape_string($conexao,  $_POST["dtfechasaude"]);
    $obs = mysqli_real_escape_string($conexao,  $_POST["obs"]);
    $sql = "insert into cliente 
      (nome, dtnascimento, rg, cpf, email, fone1, fone2, seguro, produtos, apolice, dtfechamento_apolice,
      saude, dtfechamento_saude, observacao) values ('$nome', '$dtnascimento', '$rg', '$cpf', '$email', '$fone1', 
      '$fone2', '$seguro', '$produto', '$apolice', '$dtfechaapol', '$saude', '$dtfechasaude', '$obs')";
    mysqli_query($conexao, $sql) or die ("Erro ao inseri novo contato " .mysqli_error($conexao));
    echo "Clienteinserido com sucesso";
?>