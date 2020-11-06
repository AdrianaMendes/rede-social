<?php

include('includes/header.php'); ?>

<div id="amarra-center-left">

    <div class="center">

        <div class="blocos" id="pagina">
            <h2><?php echo ($idDaSessao <> $idExtrangeiro) ? 'Atualizações de ' . $user_fullname : 'Minhas Atualizações'; ?></h2>
            <?php include('includes/form_recados.php'); ?>
            <?php
            $solicitacoes = DB::getConn()->prepare('SELECT * FROM `amizade` WHERE para=? ANd `status`=0');
            $solicitacoes->execute(array($idDaSessao));
            $dadosamizade = DB::getConn()->prepare("SELECT `nome`,`sobrenome` FROM `usuarios` WHERE `id`=? LIMIT 1");

            if ($solicitacoes->rowcount() > 0) {
                $link = '<a href="php/amizade.php?ac=';
                echo '<ul>';
                while ($resmeuamigo = $solicitacoes->fetch(PDO::FETCH_ASSOC)) {
                    $dadosamizade->execute(array($resmeuamigo['de']));
                    $asdadsoamizade = $dadosamizade->fetch(PDO::FETCH_ASSOC);
                    echo '<li>' . $asdadsoamizade['nome'] . ' ' . $asdadsoamizade['sobrenome'] . ' quer ser seu amigo ' .
                        $link . 'aceitar|' . $resmeuamigo['id'] . '">aceitar</a> ' .
                        $link . 'remover|' . $resmeuamigo['de'] . '|' . $idDaSessao . '|' . $resmeuamigo['id'] . '">recusar</a></li>';
                }
                echo '</ul>';
            }
            ?>
        </div>
        <div class="blocos">
            <?php
                $feed_url = "http://localhost/redesocial/feed.php";
                $object = new DOMDocument();
                $object->load($feed_url);
                $content = $object->getElementsByTagName("item");

                foreach ($content as $row) {
                    echo '<h3 class="text-info">'.$row->getElementsByTagName("title")->item(0)->nodeValue.'</h3>';
                    echo '<hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <p>'.$row->getElementsByTagName("pubDate")->item(0)->nodeValue.'</p><br>
                                </div>
                                <div class="col-md-9">
                                    <p align="right"><b><i>By '.$row->getElementsByTagNameNS("ns:1", "*")->item(0)->nodeValue.'</i></b></p><br>
                                    <p>'.$row->getElementsByTagName("description")->item(0)->nodeValue.'</p>
                                </div>
                            </div><br><hr><br>';
                }
            ?>
        </div>
    </div>
    <div class="right">
        <?php include('includes/amigos.php'); ?>
    </div>
</div>
<?php include('includes/footer.php'); ?>