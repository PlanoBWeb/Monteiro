<?php /* Smarty version 2.6.12, created on 2015-11-13 14:25:53
         compiled from admin/noticias/dados.html */ ?>
﻿<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/topo.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- Conteúdo -->
    <form name="frm_cadastro" method="POST" enctype="multipart/form-data">
	    <input type="hidden" name="acao" value="gravar" />
	    <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['dados'][0]['id']; ?>
" />
        <input type="hidden" name="caminhoImagem" value="<?php echo $this->_tpl_vars['dados'][0]['caminhoImagem']; ?>
" />
        <input type="hidden" name="caminhoImagemThumb" value="<?php echo $this->_tpl_vars['dados'][0]['caminhoImagemThumb']; ?>
" />
        <input type="hidden" name="extencoeValidas" value="jpg|jpeg|gif|png|pdf">

	    <h1 class="titulo-pag">Noticia</h1>

	    <label>*Titulo :</label>
	    <input type="text" name="titulo" value="<?php echo $this->_tpl_vars['dados'][0]['titulo']; ?>
" />

	    <label>*Titulo Inglês:</label>
	    <input type="text" name="titulo_I" value="<?php echo $this->_tpl_vars['dados'][0]['titulo_I']; ?>
" />
	    
	    <label>*Por:</label>
	    <input type="text" name="por" size="50" value="<?php echo $this->_tpl_vars['dados'][0]['por']; ?>
" />

	    <label>*Data:</label>
	    <input type="date" name="data" value="<?php echo $this->_tpl_vars['dados'][0]['data']; ?>
" />

	    <label>*Texto:</label>
	    <textarea name="texto"><?php echo $this->_tpl_vars['dados'][0]['texto']; ?>
</textarea>

	    <label>*Texto Inglês:</label>
	    <textarea name="texto_I"><?php echo $this->_tpl_vars['dados'][0]['texto_I']; ?>
</textarea>
	 	
	 	<label>*Tags:</label>
	    <input type="text" name="tag" value="<?php echo $this->_tpl_vars['dados'][0]['tag']; ?>
" />

	    <label>*Tags Inglês:</label>
	    <input type="text" name="tag_I" value="<?php echo $this->_tpl_vars['dados'][0]['tag_I']; ?>
" />

	    <label>*Destaque:</label>
	    <input type="radio" name="destaque" <?php if ($this->_tpl_vars['dados'][0]['destaque'] == '1'): ?>selected<?php endif; ?> value="1" />

	    <label>*Categoria:</label>
	    <select name="categoria">
	    	<option value="1">teste</option>
	    </select>

	    <label>*Imagem:</label>
        <input type="file" name="arquivo" size="100"/>
        <?php if ($this->_tpl_vars['dados'][0]['caminhoImagem']): ?>
            <img src="<?php echo $this->_tpl_vars['dados'][0]['caminhoImagem']; ?>
" width="100" border="0"/>
        <?php endif; ?>

		<label>*Imagem Thumb:</label>
        <input type="file" name="arquivo2" size="50"/>
        <?php if ($this->_tpl_vars['dados'][0]['caminhoImagemThumb']): ?>
            <img src="<?php echo $this->_tpl_vars['dados'][0]['caminhoImagemThumb']; ?>
" width="100" border="0"/>
        <?php endif; ?>

	 	<input name="submit" type="submit" class="btn-form top-btn" value="<?php echo $this->_tpl_vars['botao']; ?>
" onclick="return checa();" /><br>
	    <label class="no-top">* Campos obrigatórios.</label>
    </form>
<!-- FIM Conteúdo -->
	<?php echo '	
		<script>

			function checa()
			{
				frm = document.frm_cadastro;
				msg = "Preencha o campo ";
				
				if(trim(frm.nome.value)=="")
				{
					alert(msg + "Nome!");
					frm.nome.focus();
					return false;
				}
				
				if(trim(frm.email.value) == "")
				{
					alert(msg + "E-mail!");
					frm.email.focus();
					return false;
				}
				
				if(!email(frm.email, \'E-mail inválido!\'))
					return false;

				if(!frm.id.value){
					if(trim(frm.senha.value) == "")
					{
						alert(msg + "Senha!");
						frm.senha.focus();
						return false;
					}
					
					if(trim(frm.senha2.value) == "")
					{
						alert(msg + "Repetir Senha!");
						frm.senha2.focus();
						return false;
					}
					
					if(trim(frm.senha.value) != trim(frm.senha2.value))
					{
						alert("As senhas estão diferentes!");
						return false;
					}
				} 

				frm.submit();
			}
		</script>
	'; ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/rodape.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>