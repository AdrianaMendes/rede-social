<?php include('includes/header.php'); ?>
    <div class="center">
        <div class="blocos" id="pagina">
        <center>
				<img src="images/romanceicon.png" alt="" />
                <h2>Inserir histórias</h2><br>
		</center>
            <form method="POST" action="conecta2.php" name="historias">
                <input type="text" id="titulo" name="titulo" placeholder="Título"><br><br>     
                <textarea id="descricao" name="descricao" rows="10" cols="30" placeholder="Descrição"></textarea>
                <br>              
                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>
    <div class="right">
		<?php include('includes/amigos.php'); ?>
	</div>
</div>
<?php include('includes/footer.php'); ?>