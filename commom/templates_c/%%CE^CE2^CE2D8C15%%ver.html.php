<?php /* Smarty version 2.6.12, created on 2015-11-17 13:19:30
         compiled from admin/publicacoes/ver.html */ ?>
﻿<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/topo.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<!-- Conteúdo -->
	<div class="container">
		<form class="form-ver">

			<h1 class="titulo-pag">Publicação</h1>

			<label><strong>*Tipo:</strong></label>
			<input type="text" disabled value="<?php echo $this->_tpl_vars['dados'][0]['tipo']; ?>
">	

			<label><strong>*Titulo:</strong></label>
			<input type="text" disabled value="<?php echo $this->_tpl_vars['dados'][0]['titulo']; ?>
">	

			<label><strong>*Titulo Inglês:</strong></label>
			<input type="text" disabled value="<?php echo $this->_tpl_vars['dados'][0]['titulo_I']; ?>
">	

			<label><strong>*Numero Publicação:</strong></label>
			<input type="text" disabled value="<?php echo $this->_tpl_vars['dados'][0]['numPubclicacao']; ?>
">	

			<label><strong>*Numero Publicação Inglês:</strong></label>
			<input type="text" disabled value="<?php echo $this->_tpl_vars['dados'][0]['numPubclicacao_I']; ?>
">	

			<label><strong>*Por:</strong></label>
			<input type="text" disabled value="<?php echo $this->_tpl_vars['dados'][0]['por']; ?>
">	

			<label><strong>*Data:</strong></label>
			<input type="text" disabled value="<?php echo $this->_tpl_vars['dados'][0]['data']; ?>
">	

			<label><strong>*Texto:</strong></label>
			<textarea disabled><?php echo $this->_tpl_vars['dados'][0]['textoSemTag']; ?>
</textarea>

			<label><strong>*Texto Inglês:</strong></label>
			<textarea disabled><?php echo $this->_tpl_vars['dados'][0]['textoSemTag_I']; ?>
</textarea>

			<label><strong>*Tags:</strong></label>
			<input type="text" disabled value="<?php echo $this->_tpl_vars['dados'][0]['tag']; ?>
">	

			<label><strong>*Tags Inglês:</strong></label>
			<input type="text" disabled value="<?php echo $this->_tpl_vars['dados'][0]['tag_I']; ?>
">	

			<label>*Categoria:</label>
			<input type="text" disabled value="<?php echo $this->_tpl_vars['dados'][0]['nomeCategoria']; ?>
">

			<?php if ($this->_tpl_vars['dados'][0]['caminhoImagem']): ?>
				<label><strong>*Imagem:</strong></label>
				<img src="<?php echo $this->_tpl_vars['dados'][0]['caminhoImagem']; ?>
" width="250" border="0">
			<?php endif; ?>
			
			<?php if ($this->_tpl_vars['dados'][0]['caminhoImagemThumb']): ?>
				<label><strong>*Imagem Thumb:</strong></label>	
				<img src="<?php echo $this->_tpl_vars['dados'][0]['caminhoImagemThumb']; ?>
" style="max-width: 200px;" border="0">
			<?php endif; ?>

			<br>
			<br>
			<a href="adm_publicacoes.php?acao=pesquisar" class="btn-form" ><< voltar</a>
		</form>
	</div>
	<!-- FIM Conteúdo -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/rodape.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>