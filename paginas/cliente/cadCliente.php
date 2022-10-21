<header>
    <h3 style="text-align: center;">Cadastro Cliente</h3>
</header>
<div>
    <form style="margin: auto; width: 1000px; height: 450px; border: 1px solid;" 
          action="index.php?menuop=inserircliente" method="post">
        <div class="row" style="margin: auto;">
            <div class="col">
                <label style="margin-left: 5px;">Nome:</label>
                <input style="font-size: small; width: 717px; margin-left: 5px;" type="text" class="form-control" name="nome">
            </div>
            <div class="col">
                <label style="margin-left: 5px;">Data Nascimento:</label>
                <input style="font-size: small; width: 220px; margin-left: 5px;" type="date" class="form-control" name="dtnasc">
            </div>
        </div>
        <div class="row" style="margin: auto;">
            <div class="col">
                <label style="margin-left: 5px;">RG:</label>
                <input style="font-size: small; width: 200px; margin-left: 5px;" type="text" class="form-control" name="rg">
            </div>
            <div class="col">
                <label style="margin-left: 5px;">CPF:</label>
                <input style="font-size: small; width: 200px; margin-left: 5px;" type="text" class="form-control" name="cpf">
            </div>
            <div class="col">
                <label style="margin-left: 5px;">EMail:</label>
                <input style="font-size: small; width: 500px;" type="email" class="form-control" name="email">
            </div>
        </div>
        <div class="row" style="margin: auto;">
            <div class="col">
                <label style="margin-left: 5px;">Telefone (Fixo):</label>
                <input style="font-size: small; width: 120px; margin-left: 5px;" type="text" class="form-control" name="fone1">
            </div>
            <div class="col">
                <label style="margin-left: 5px;">Telefone (Celular):</label>
                <input style="font-size: small; width: 120px; margin-left: 5px;" type="text" class="form-control" name="fone2">
            </div>
            <div class="col">
                <label style="margin-left: 5px;">Seguro:</label>
                <input style="font-size: small; width: 650px; margin-left: 5px;" type="text" class="form-control" name="seguro">
            </div>
        </div>
        <div class="row" style="margin: auto;">
            <div class="col">
                <label style="margin-left: 5px;">Produto:</label>
                <input style="font-size: small; width: 500px; margin-left: 5px;" type="text" class="form-control" name="produto">
            </div>
            <div class="col">
                <label style="margin-left: 5px;">Apólice:</label>
                <input style="font-size: small; width: 200px; margin-left: 5px;" type="text" class="form-control" name="apolice">
            </div>
            <div class="col">
                <label style="margin-left: 5px;">Data Fechamento Apólice:</label>
                <input style="font-size: small; width: 210px; margin-left: 5px;" type="date" class="form-control" name="dtfechaapol">
            </div>
        </div>
        <div class="row" style="margin: auto;">
            <div class="col">
                <label style="margin-left: 5px;">Saúde:</label>
                <input style="font-size: small; width: 720px; margin-left: 5px;" type="text" class="form-control" name="saude">
            </div>
            <div class="col">
                <label style="margin-left: 5px;">Data Fechamento Saúde:</label>
                <input style="font-size: small; width: 220px; margin-left: 5px;" type="date" class="form-control" name="dtfechasaude">
            </div>
        </div>
        <div class="row" style="margin: auto;">
            <div class="col">
                <label style="margin-left: 5px;">Observação:</label>
                <input style="font-size: small; width: 970px; margin-left: 5px;" type="text" class="form-control" name="obs">
            </div>
        </div>
        <div class="row" style="margin: auto;">
            <div class="col">
                <br>
                <input style="margin-left: 5px;" type="submit" value="Salvar" nome="btnSalvar">
            </div>
        </div>
    </form>
</div>
