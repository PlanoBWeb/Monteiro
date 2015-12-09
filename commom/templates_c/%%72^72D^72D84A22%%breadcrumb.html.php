<?php /* Smarty version 2.6.12, created on 2015-11-23 14:40:10
         compiled from ../inc/breadcrumb.html */ ?>
<div class="row bloco-breadcrumb">
    <div class="tamanho-max pd-left-5">
       	<ol class="breadcrumb">
       		<!-- Noticia -->
			<?php if ($this->_tpl_vars['pagina'] == "noticia.php"): ?>
				<li><a href="index.php">Home</a></li>
				<li><a href="noticias.php">Notícias</a></li>
         		<li><?php echo $this->_tpl_vars['dados'][0]['tituloAbrev']; ?>
</li>
         	<!-- Noticias -->
			<?php elseif ($this->_tpl_vars['pagina'] == "noticias.php"): ?>
				<?php if ($_GET['ano']): ?>
					<li><a href="index.php">Home</a></li>
					<li><a href="noticias.php">Notícias</a></li>
         			<li><?php echo $this->_tpl_vars['dados'][0]['Mes']; ?>
 - <?php echo $this->_tpl_vars['dados'][0]['dataMes'][0]; ?>
</li>
         		<?php elseif ($_GET['idCat']): ?>
         			<li><a href="index.php">Home</a></li>
					<li><a href="noticias.php">Notícias</a></li>
         			<li><?php echo $this->_tpl_vars['dados'][0]['nomeCategoria']; ?>
</li>
         		<?php elseif ($_GET['tag']): ?>
         			<li><a href="index.php">Home</a></li>
					<li><a href="noticias.php">Notícias</a></li>
         			<li><?php echo $_GET['tag']; ?>
</li>
				<?php else: ?>
					<li><a href="index.php">Home</a></li>
	         		<li><?php echo $this->_tpl_vars['breadcrumb']; ?>
</li>
				<?php endif; ?>
			<!-- Informativo -->
			<?php elseif ($this->_tpl_vars['pagina'] == "informativo.php"): ?>
				<li><a href="index.php">Home</a></li>
				<li>Publicações</li>
				<li><a href="informativos.php">Informativos</a></li>
         		<li><?php echo $this->_tpl_vars['dados'][0]['tituloAbrev']; ?>
</li>
         	<!-- Informativos -->
         	<?php elseif ($this->_tpl_vars['pagina'] == "informativos.php"): ?>
				<?php if ($_GET['ano']): ?>
					<li><a href="index.php">Home</a></li>
					<li>Publicações</li>
					<li><a href="informativos.php">Informativos</a></li>
         			<li><?php echo $this->_tpl_vars['dados'][0]['Mes']; ?>
 - <?php echo $this->_tpl_vars['dados'][0]['dataMes'][0]; ?>
</li>
         		<?php elseif ($_GET['idCat']): ?>
         			<li><a href="index.php">Home</a></li>
         			<li>Publicações</li>
					<li><a href="informativos.php">Informativos</a></li>
         			<li><?php echo $this->_tpl_vars['dados'][0]['nomeCategoria']; ?>
</li>
         		<?php elseif ($_GET['tag']): ?>
         			<li><a href="index.php">Home</a></li>
         			<li>Publicações</li>
					<li><a href="informativos.php">Informativos</a></li>
         			<li><?php echo $_GET['tag']; ?>
</li>
				<?php else: ?>
					<li><a href="index.php">Home</a></li>
					<li>Publicações</li>
	         		<li><?php echo $this->_tpl_vars['breadcrumb']; ?>
</li>
				<?php endif; ?>
			<!-- Artigo -->
			<?php elseif ($this->_tpl_vars['pagina'] == "artigo.php"): ?>
				<li><a href="index.php">Home</a></li>
				<li>Publicações</li>
				<li><a href="artigos.php">Artigos</a></li>
         		<li><?php echo $this->_tpl_vars['dados'][0]['tituloAbrev']; ?>
</li>
         	<!-- Artigos -->
         	<?php elseif ($this->_tpl_vars['pagina'] == "artigos.php"): ?>
				<?php if ($_GET['ano']): ?>
					<li><a href="index.php">Home</a></li>
					<li>Publicações</li>
					<li><a href="artigos.php">Artigos</a></li>
         			<li><?php echo $this->_tpl_vars['dados'][0]['Mes']; ?>
 - <?php echo $this->_tpl_vars['dados'][0]['dataMes'][0]; ?>
</li>
         		<?php elseif ($_GET['idCat']): ?>
         			<li><a href="index.php">Home</a></li>
         			<li>Publicações</li>
					<li><a href="artigos.php">Artigos</a></li>
         			<li><?php echo $this->_tpl_vars['dados'][0]['nomeCategoria']; ?>
</li>
         		<?php elseif ($_GET['tag']): ?>
         			<li><a href="index.php">Home</a></li>
					<li><a href="artigos.php">Artigos</a></li>
         			<li><?php echo $_GET['tag']; ?>
</li>
				<?php else: ?>
					<li><a href="index.php">Home</a></li>
					<li>Publicações</li>
	         		<li><?php echo $this->_tpl_vars['breadcrumb']; ?>
</li>
				<?php endif; ?>
			<!-- Instrução -->
			<?php elseif ($this->_tpl_vars['pagina'] == "instrucao.php"): ?>
				<li><a href="index.php">Home</a></li>
				<li>Publicações</li>
				<li><a href="instrucoes.php">Instruções</a></li>
         		<li><?php echo $this->_tpl_vars['dados'][0]['tituloAbrev']; ?>
</li>
         	<!-- Instruções -->
         	<?php elseif ($this->_tpl_vars['pagina'] == "instrucoes.php"): ?>
				<?php if ($_GET['ano']): ?>
					<li><a href="index.php">Home</a></li>
					<li>Publicações</li>
					<li><a href="instrucoes.php">Instruções</a></li>
         			<li><?php echo $this->_tpl_vars['dados'][0]['Mes']; ?>
 - <?php echo $this->_tpl_vars['dados'][0]['dataMes'][0]; ?>
</li>
         		<?php elseif ($_GET['idCat']): ?>
         			<li><a href="index.php">Home</a></li>
         			<li>Publicações</li>
					<li><a href="instrucoes.php">Instruções</a></li>
         			<li><?php echo $this->_tpl_vars['dados'][0]['nomeCategoria']; ?>
</li>
         		<?php elseif ($_GET['tag']): ?>
         			<li><a href="index.php">Home</a></li>
         			<li>Publicações</li>
					<li><a href="instrucoes.php">Instruções</a></li>
         			<li><?php echo $_GET['tag']; ?>
</li>
         		<?php else: ?>
					<li><a href="index.php">Home</a></li>
					<li>Publicações</li>
	         		<li><?php echo $this->_tpl_vars['breadcrumb']; ?>
</li>
         		<?php endif; ?>
         	<!-- Palestra -->
     		<?php elseif ($this->_tpl_vars['pagina'] == "palestra.php"): ?>
				<li><a href="index.php">Home</a></li>
				<li>Publicações</li>
				<li><a href="palestras.php">Palestras</a></li>
         		<li><?php echo $this->_tpl_vars['dados'][0]['tituloAbrev']; ?>
</li>
         	<!-- Palestras -->
         	<?php elseif ($this->_tpl_vars['pagina'] == "palestras.php"): ?>
				<?php if ($_GET['ano']): ?>
					<li><a href="index.php">Home</a></li>
					<li>Publicações</li>
					<li><a href="palestras.php">Palestras</a></li>
         			<li><?php echo $this->_tpl_vars['dados'][0]['Mes']; ?>
 - <?php echo $this->_tpl_vars['dados'][0]['dataMes'][0]; ?>
</li>
         		<?php elseif ($_GET['idCat']): ?>
         			<li><a href="index.php">Home</a></li>
         			<li>Publicações</li>
					<li><a href="palestras.php">Palestras</a></li>
         			<li><?php echo $this->_tpl_vars['dados'][0]['nomeCategoria']; ?>
</li>
         		<?php elseif ($_GET['tag']): ?>
         			<li><a href="index.php">Home</a></li>
         			<li>Publicações</li>
					<li><a href="palestras.php">Palestras</a></li>
         			<li><?php echo $_GET['tag']; ?>
</li>
				<?php else: ?>
					<li><a href="index.php">Home</a></li>
					<li>Publicações</li>
	         		<li><?php echo $this->_tpl_vars['breadcrumb']; ?>
</li>
				<?php endif; ?>
			<!-- Atuação <?php echo $this->_tpl_vars['PgAtiva']; ?>
-->
			<?php elseif ($this->_tpl_vars['PgAtiva'] == 'direito publico'): ?>
				<li><a href="index.php">Home</a></li>
				<li>Atuação</li>
				<li><a href="direito-publico.php">Direito Público</a></li>
         		<li><?php echo $this->_tpl_vars['breadcrumb']; ?>
</li>
         	<?php elseif ($this->_tpl_vars['PgAtiva'] == 'direito eleitoral'): ?>
				<li><a href="index.php">Home</a></li>
				<li>Atuação</li>
				<li><a href="direito-eleitoral.php">Direito Eleitoral</a></li>
         		<li><?php echo $this->_tpl_vars['breadcrumb']; ?>
</li>
         	<?php elseif ($this->_tpl_vars['PgAtiva'] == 'direito empresarial'): ?>
				<li><a href="index.php">Home</a></li>
				<li>Atuação</li>
				<li><a href="direito-empresarial.php">Direito Empresarial</a></li>
         		<li><?php echo $this->_tpl_vars['breadcrumb']; ?>
</li>
         	<?php elseif ($this->_tpl_vars['PgAtiva'] == 'direito imobiliario'): ?>
				<li><a href="index.php">Home</a></li>
				<li>Atuação</li>
				<li><a href="direito-imobiliario.php">Direito Imobiliario</a></li>
         		<li><?php echo $this->_tpl_vars['breadcrumb']; ?>
</li>
         	<?php elseif ($this->_tpl_vars['PgAtiva'] == 'profissionais'): ?>
         		<li><a href="index.php">Home</a></li>
         		<li>Profissionais</li>
         		<li><?php echo $this->_tpl_vars['breadcrumb']; ?>
</li>
         	<?php elseif ($this->_tpl_vars['PgAtiva'] == 'escritorio'): ?>
         		<li><a href="index.php">Home</a></li>
         		<li>Escritório</li>
         		<li><?php echo $this->_tpl_vars['breadcrumb']; ?>
</li>
			<?php else: ?>
				<li><a href="index.php">Home</a></li>
         		<li><?php echo $this->_tpl_vars['breadcrumb']; ?>
</li>
			<?php endif; ?>
       	</ol>
    </div>
 </div>