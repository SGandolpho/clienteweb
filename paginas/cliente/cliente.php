<div class="row" style="margin: auto;">
    <div class="col">
        <label style="text-align: center;"><h5>Dados Clientes</h5></label>
    </div>
    <div class="col">
        <button style="margin-left: 400px;" ><a style="text-decoration: none;" href="index.php?menuop=cadcliente">Novo Cliente</a></button>
    </div>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="text-align:center; font-size: small;">Código</th>
            <th style="text-align:center; font-size: small;">Nome</th>
            <th style="text-align:center; font-size: small;">Dt Nasc.</th>
            <th style="text-align:center; font-size: small;">RG</th>
            <th style="text-align:center; font-size: small;">CPF</th>
            <th style="text-align:center; font-size: small;">EMail</th>
            <th style="text-align:center; font-size: small;">Fone 1</th>
            <th style="text-align:center; font-size: small;">Fone 2</th>
            <th style="text-align:center; font-size: small;">Seguro</th>
            <th style="text-align:center; font-size: small;">Produtos</th>
            <th style="text-align:center; font-size: small;">Apólice</th>
            <th style="text-align:center; font-size: small;">Dt. Fech. Apól.</th>
            <th style="text-align:center; font-size: small;">Saúde</th>
            <th style="text-align:center; font-size: small;">Dt. Fech. Saúde</th>
            <th style="text-align:center; font-size: small;">Observação</th>
            <th style="text-align:center; font-size: small;">ALT.</th>
            <th style="text-align:center; font-size: small;">EXC.</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $sql = "select * from cliente";
            $rs = mysqli_query($conexao, $sql) or die("Erro executar a consulta " . mysqli_error($conexao));
            while($dados = mysqli_fetch_assoc($rs)){
                
        ?>
        <tr>
            <td style="font-size: small;"><?=$dados["id"]?></td>
            <td style="font-size: small;"><?=$dados["nome"]?></td>
            <td style="font-size: small;"><?=$dados["dtnascimento"]?></td>
            <td style="font-size: small;"><?=$dados["rg"]?></td>
            <td style="font-size: small;"><?=$dados["cpf"]?></td>
            <td style="font-size: small;"><?=$dados["email"]?></td>
            <td style="font-size: small;"><?=$dados["fone1"]?></td>
            <td style="font-size: small;"><?=$dados["fone2"]?></td>
            <td style="font-size: small;"><?=$dados["seguro"]?></td>
            <td style="font-size: small;"><?=$dados["produtos"]?></td>
            <td style="font-size: small;"><?=$dados["apolice"]?></td>
            <td style="font-size: small;"><?=$dados["dtfechamento_apolice"]?></td>
            <td style="font-size: small;"><?=$dados["saude"]?></td>
            <td style="font-size: small;"><?=$dados["dtfechamento_saude"]?></td>
            <td style="font-size: small;"><?=$dados["observacao"]?></td>
            <td><a href="index.php?menuop=alteracliente&id=<?=$dados["id"]?>">ALT</a></td>
            <td><a href="index.php?menuop=excluircliente&id=<?=$dados["id"]?>" 
                onclick="return confirm('Confirma Exclusão?');">EXC</a></td>      
        </tr>
        <?php } ?>    
    </tbody>
</table>
