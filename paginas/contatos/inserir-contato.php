<header>
    <h3>Inserir Contato</h3>
</header>
<?php

    $nomeContato = myslqi_real_escape_string($conexao,$_POST["nomeContato"]);
    $emailContato = myslqi_real_escape_string($conexao,$_POST["emailContato"]);
    $telefoneContato = myslqi_real_escape_string($conexao,$_POST["telefoneContato"]);
    $sexoContato = myslqi_real_escape_string($conexao,$_POST["sexoContato"]);
    $dataNascContato = myslqi_real_escape_string($conexao,$_POST["dataNascContato"]);
    $sql = "INSERT INTO tbcontatos(

        nomeContato
        emailContato
        telefoneContato
        sexoContato
        dataNascContato
        )
        VALUES(
            '{$nomeContato}',
            '{$emailContato}',
            '{$telefoneContato}',
            '{$sexoContato}',
            '{$dataNascContato}',
        )
        ";
        $rs = mysqli_query($conexao,$sql) or die ("Erro ao executar consulta." . mysqli_error($conexao));
        
        echo "O registro foi realizado com sucesso!" ;