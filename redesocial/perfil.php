<?php include('includes/header.php'); ?>
<div id="amarra-center-left">
    <div class="center">
        <div class="blocos" id="dexar-recados">
        <center>
				<img src="images/romanceicon.png" alt="" />
         </center>
         <center>
            <h2><?php echo ($idDaSessao <> $idExtrangeiro) ? $user_fullname : 'Meu perfil'; ?>
        </center>
                <span>
                    <?php
                    if ($idDaSessao <> $idExtrangeiro) {
                        $solicitacao = Amizade::solicitacao($idDaSessao, $idExtrangeiro);
                        $link = '<a href="php/amizade.php?ac=';
                        if ($solicitacao['r'] == 0) {
                            echo $link . 'convite|' . $idDaSessao . '|' . $idExtrangeiro . '">adicionar amigo</a>';
                        } elseif ($solicitacao['r'] == 1) {
                            echo $link . 'remover|' . $idDaSessao . '|' . $idExtrangeiro . '|' . $solicitacao['id'] . '">cancelar pedido</a>';
                        } elseif ($solicitacao['r'] == 2) {
                            echo $link . 'remover|' . $idDaSessao . '|' . $idExtrangeiro . '|' . $solicitacao['id'] . '">remover amigo</a>';
                        }
                    } else {
                        echo '<br><br>No momento você não tem solicitações.';
                    }
                    ?>
                </span>
            </h2>
        </div>
        <div class="blocos" id="pagina">
        <center>
				<img src="images/romanceicon.png" alt="" />
            <h2>Perfil</h2><br>
        </center>
            <style>
                .table td,
                .table th {
                    padding: .75rem;
                    vertical-align: top;
                    border-top: 1px solid #dee2e6;
                }
            </style>
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <?php echo '<td>Nome </td><td>' . $user_fullname . '</td>' ?>
                    </tr>
                    <tr>
                        <?php echo '<td>E-Mail</td><td>' . $user_email . '</td>' ?>
                    </tr>
                    <tr>
                        <?php echo '<td>Nascimento</td><td>' . $user_nascimento . '</td>' ?>
                    </tr>
                    <tr>
                        <?php echo '<td>Sexo</td><td>' . $user_sexo . '</td>' ?>
                    </tr>
                </tbody>
            </table>

            <?php
            if (isset($_GET['perfil']) and $_GET['perfil'] == 'UPLOAD') {
                ?>
                <form name="upload-foto-perfil" enctype="multipart/form-data" method="post" action="php/crop.php">
                    <input type="file" name="foto-perfil" />
                    <input type="submit" value="recortar" />
                    <input type="hidden" name="imgantiga" value="<?php echo $user_imagem ?>" />
                    <input type="hidden" name="upload" value="perfil" />
                    <input type="hidden" name="uid" value="<?php echo $idDaSessao ?>" />
                </form>
            <?php
        }
        ?>
        </div>
    </div>
    <div class="right">
        <?php include('includes/amigos.php'); ?>
    </div>
</div>
<?php include('includes/footer.php'); ?>