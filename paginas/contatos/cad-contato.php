<header>
    <h3>Página principal</h3>
</header>
<div>
    <form action="index.php?menuop=inserir-contato" method="post">
        <div>
            <label for="nomeContato">Nome</label>
            <input type="text" name="nomeContato">
        </div>
        <div>
            <label for="emailContato">E-Mail</label>
            <input type="email" name="emailContato">
        </div>
        <div>
            <label for="telefoneContato">Telefone</label>
            <input type="text" name="telefoneContato">
        </div>
        <div>
            <label for="enderecoContato">Endereço</label>
            <input type="text" name="enderecoContato">
        </div>
        <div>
            <label for="sexoContato">Sexo</label>
            <input type="text" name="sexoContato">
        </div>
        <div>
            <label for="dataContato">Data de Nascimento</label>
            <input type="date" name="dataNascContato">
        </div>

        <input type="submit" value="Adionar" name="btnAdicionar">
    </form>
</div>