<?php include('includes/header.php'); ?>
<style>
    .form-control {
        display: block;
        width: 100%;
        height: calc(1.5em + .75rem + 2px);
        font-size: 12px;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .btn {
        display: inline-block;
        font-weight: 400;
        color: #212529;
        text-align: center;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-color: transparent;
        border: 1px solid transparent;
        padding: .375rem .75rem;
        font-size: 12px;
        line-height: 1.5;
        border-radius: .25rem;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .btn-danger {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-warning {
        color: #212529;
        background-color: #ffc107;
        border-color: #ffc107;
    }
</style>

<div class="center">
    <div class="blocos" id="pagina">
        <center>
            <img src="images/romanceicon.png" alt="" />
            <h2>Segurança e Login</h2><br><br><br><br><br><br>
        </center>
        <form class="sidepanel" method="POST" action="conectaConfigAlterarSenha.php">
            <input id="senha" name="senha" class="form-control" placeholder="Insira sua nova senha..." type="password" /><br><br>
            <center>
                <input class="btn btn-warning" type="submit" value="Alterar Senha">
            </center>
        </form>
        <br><br><br><br>
        <hr>
        <br><br><br><br>
        <form class="sidepanel" method="POST" action="conectaConfigDelConta.php">
            <center>
                <input class="btn btn-danger" type="submit" value="Excluir a conta">
            </center>
        </form>
        <br><br><br><br>
    </div>
</div>
<div class="right">
    <?php include('includes/amigos.php'); ?>
</div>
</div>
<?php include('includes/footer.php'); ?>