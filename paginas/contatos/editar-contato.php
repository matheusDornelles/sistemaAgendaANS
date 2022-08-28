<?php
$idContato = $_GET['idContato'];
$sql = "SELECT * FROM tbcontatos WHERE idContato = '{$idContato}'";
$rs = mysqli_query($conexao,$sql) or die("Erro ao recuperar os dados do registro." . mysqli_error($conexao));

$dados = mysqli_fetch_assoc($rs);
?>


<header>
    <h3>Editar Contato</h3>
</header>
<header>
    <h3>Página principal</h3>
</header>
<div>
    <form action="index.php?menuop=atualizar-contato" method="post">
        <div>
            <label for="idContato">ID</label>
            <input type="text" name="idContato" value="<?=$dados["idContato"]?>">
        </div>
        <div>
            <label for="nomeContato">Nome</label>
            <input type="text" name="nomeContato" value="<?=$dados['nomeContato']?>">
        </div>
        <div>
            <label for="emailContato">E-Mail</label>
            <input type="email" name="emailContato" value="<?=$dados["emailContato"]?>">
        </div>
        <div>
            <label for="telefoneContato">Telefone</label>
            <input type="text" name="telefoneContato" value="<?=$dados["telefoneContato"]?>">
        </div>
        <div>
            <label for="enderecoContato">Endereço</label>
            <input type="text" name="enderecoContato" value="<?=$dados["enderecoContato"]?>">
        </div>
        <div>
            <label for="sexoContato">Sexo</label>
            <input type="text" name="sexoContato" value="<?=$dados["sexoContato"]?>">
        </div>
        <div>
            <label for="dataContato">Data de Nascimento</label>
            <input type="date" name="dataNascContato" value="<?=$dados["dataNascContato"]?>">
        </div>

        <input type="submit" value="Atualizar" name="btnAtualizar">
    </form>
</div>