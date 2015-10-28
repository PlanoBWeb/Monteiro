
<?php

session_start();
if( $_SESSION['idioma'] == "I")
{
	//INGLÊS

	// Header
	$arrayIdioma = array(
		'MN_ATEND'  => 'Atendimento:',
	);
	
	
	
}
else
{
	//PORTUGUES

	$arrayIdioma = array(

		// Header
		'MN_ATEND'  		=> 'Atendimento:',
		'MN_HOME'  			=> 'Home',
		'MN_ESCRITORIO'  	=> 'Escritório',
		'MN_APRESENTACAO'  	=> 'APRESENTAÇÃO',
		'MN_MISVALOBJ'  	=> 'MISSÃO, VALORES E OBJETIVO',
		'MN_RESPSOCIAL'  	=> 'RESPONSAILIDADE SOCIAL',
		'MN_PROFISSIONAIS' 	=> 'Profissionais',
		'MN_ATUACAO' 		=> 'Atuação',
		'MN_DIRPUBLICO'  	=> 'DIREITO PÚBLICO',
		'MN_DIRELEITORAL'  	=> 'DIREITO ELEITORAL',
		'MN_DIREMPRESARIAL' => 'DIREITO EMPRESARIAL',
		'MN_DIRIMOBILIARIO'	=> 'DIREITO IMOBILIÁRIO',
		'MN_NOTICIAS'  		=> 'Notícias',
		'MN_PUBLICACOES'  	=> 'Publicações',
		'MN_INFORMATIVOS'  	=> 'INFORMATIVOS',
		'MN_ARTIGOS'	  	=> 'ARTIGOS',
		'MN_INSTRUCOES'  	=> 'INSTRUÇÕES',
		'MN_PALESTRAS'  	=> 'PALESTRAS',
		'MN_MIDIA'		  	=> 'Mídia',
		'MN_FALECONOSCO'  	=> 'Fale Conosco',
		'MN_LOCALIZACAO'  	=> 'Localização',
		'MN_BUSCA'		  	=> 'busca...',

		// Index
		'MN_TIT_BANNER'  	=> 'Tribunal de Contas Controle de Contas Públicas',
		'MN_TXT_BANNER'  	=> 'Assessoria prévia à prestação de contas, orientações e acompanhamentos sobre aplicação e destinação de recursos públicos diante dos atuais posicionamentos dos Tribunais de',
		'MN_TXT_DES_HOME'	=> 'Defesas sólidas, criativas e atentas aos atuais entendimentos dos tribunais superiores do país.',
		'MN_ULTIMAS_NOT'  	=> 'Últimas Notícias',
		'MN_PUBLICACOES'  	=> 'Publicações',
		'MN_VIDEOS'		  	=> 'Videos',

		// Footer
		'MN_ASSINE_NEWS'  	=> 'Assine nossa Newsletter',
		'MN_INDIQUE_SITE'  	=> 'Indique este site',
		'MN_CONECTADO_NOS' 	=> 'Fique conectado conosco',
		'MN_SOBRE_FOOTER'  	=> 'Sociedade de profissionais altamente qualificados, aptos a prestar assessoria, consultoria e direção jurídica de modo diferenciado, padronizado ou personalizado, de acordo com as exigências e o dinamismo do mercado.',
		'MN_END_FOOTER'  	=> 'Rua Maria Paula, 36 | cj. A - 3º andar <br>CEP: 01319-000 | Bela Vista | SP',
		'MN_CURTA_PAG'  	=> 'Curta nossa página!',
		'MN_DIREITOS'  		=> 'MARCOS MONTEIRO SOCIEDADE DE ADVOGADOS - Todos os direitos reservados - 2015',
		'MN_DEV'  			=> 'Desenvolvimento:',


		// Escritorio
		'MN_TITULO_APRE' 	=> 'Apresentação',
		'MN_TXT_APRE'  		=> 'MARCOS MONTEIRO SOCIEDADE DE ADVOGADOS é uma sociedade de profissionais altamente qualificados, aptos a prestar assessoria, consultoria e direção jurídica de modo diferenciado, padronizado ou personalizado, de acordo com as exigências e o dinamismo do mercado. <br><br> Através de uma atuação preventiva, evitando ou mesmo reduzindo riscos, assim como contenciosa, por meio de defesas sólidas, criativas e atentas aos atuais entendimentos dos tribunais superiores do país, nossos profissionais permitem ao cliente agir com segurança, consciência e confiança na administração de seus interesses e testemunhar à melhor proteção e garantia aos seus direitos e liberdades. ',
		'MN_TITULO_MVO'  	=> 'Missão, Valores e Objetivo',
		'MN_TXT_MVO'  		=> '<strong>MISSÃO</strong><br><br>

			                    MARCOS MONTEIRO SOCIEDADE DE ADVOGADOS nasceu do idealismo de seus sócios fundadores, empenhados em estruturar uma equipe de advogados qualificados com uma estratégia jurídico-profissional inovadora, afim de perpetuar o direito como principal instrumento de integração social. 

			                    <br><br><strong>VALORES</strong><br><br>

			                    MARCOS MONTEIRO SOCIEDADE DE ADVOGADOS é uma sociedade sólida, formada por seletos profissionais, compromissados com os valores éticos da advocacia, com a defesa das liberdades do homem e com a promoção e dispersão da Justiça.

			                    <br><br><strong>OBJETIVO</strong><br><br>

			                    MARCOS MONTEIRO SOCIEDADE DE ADVOGADOS pretende se tornar, nos próximos anos, escritório jurídico de vanguarda no campo do direito público, especialmente quanto ao controle de contas públicas municipais e estaduais pelos Tribunais de Contas em todas as esferas, área onde presta assessoria de forma especializada e inconfundível, garantindo a organização jurídica adequada das chefias executivas orçamentárias, ao mesmo tempo que compartilha e contribui para a formação e consonância da jurisprudência das cortes de contas com o ordenamento jurídico vigente. Almeja ainda promover o aculturamento de uma advocacia eleitoral preventiva, com consultas, assessoria e acompanhamento durante todo o processo pré-eleitoral, evitando imperfeições que possam prejudicar os futuros envolvidos no processo eleitoral.',
		
		'MN_TITULO_RS'  	=> 'Responsabilidade Social',
		'MN_TXT_RS'  		=> 'MARCOS MONTEIRO SOCIEDADE DE ADVOGADOS reconhece o seu papel na sociedade e se mostra comprometida com o desenvolvimento social e com a luta por uma sociedade mais justa, seja contribuindo através da elaboração de um trabalho ético, transparente, dedicado e solidário.',
		'MN_TITULO_LOCAL'  	=> 'Localização',
		'MN_TXT_LOCAL'  	=> 'O escritório está estrategicamente localizado no Centro de São Paulo, próximo ao Tribunal de Justiça, Tribunal Eleitoral, Fórum da Fazenda e Tribunal de Contas do Estado.',
		'MN_TITULO_FALE'  	=> 'Fale Conosco',
		'MN_TXT_FALE'  		=> 'A MARCOS MONTEIRO SOCIEDADE DE ADVOGADOS abre este espaço para que possa enviar suas dúvidas aos nossos profissionais. Preencha seus dados e a mensagem e retornaremos o mais breve possível.',
		'MN_FORM_NOME'  	=> 'NOME',
		'MN_FORM_EMAIL'  	=> 'E-MAIL',
		'MN_FORM_EMPRESA'  	=> 'EMPRESA',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_MSG'  		=> 'MENSAGEM',
		'MN_FORM_ENVIAR' 	=> 'Enviar',

		// Profissionais
		'MN_PROF_MARCOS'	=> 'Marcos Antonio Gaban Monteiro',
		'MN_TXT_MARCOS'  	=> 'Advogado especialista em direito público e nas parcerias entre o setor público e privado, realizando assessoria direta a Prefeituras e Câmaras na defesa de contas municipais.<br><br>
			                    Atua também na área do direito eleitoral e presta consultoria jurídica especializada a Prefeituras e Câmaras Municipais, agentes políticos, empresas e entidades do Terceiro Setor, na área do direito administrativo, com atuação junto aos tribunais de contas. <br><br>
			                    Consultor jurídico em direito público financeiro, direito do terceiro setor e direito empresarial voltado para contratações com o Poder Público. Articulista na área do direito público.<br><br> 
			                    Participou do Curso de Contabilidade Aplicada ao Setor Público do Conselho Federal de Contabilidade, em 2012. Atuou junto à Companhia de Saneamento Básico do Estado de São Paulo – SABESP, junto à Companhia de Desenvolvimento Habitacional e Urbano – CDHU, junto à Companhia Paulista de Obras e Serviços, junto à Secretaria de Habitação do Estado de São Paulo e perante a Assembleia Legislativa do Estado de São Paulo, como chefe de gabinete participou da Comissão de Financiamento e Orçamento e da Comissão de Parcerias Público-Privadas. Consultor jurídico em Direito Administrativo e parcerias público-privadas. Palestrante na área do Direito Público e contas públicas.<br><br>
			                    Sócio da Marcos Monteiro Sociedade de Advogados.',
		'MN_ALVARO'  		=> 'Álvaro Merlos Akinaga Cordeiro',
		'MN_TXT_ALVARO'  	=> 'Advogado, pós-graduando em Direito Constitucional pela Escola Superior de Direito Constitucional – ESDC, formado na Universidade Presbiteriana Mackenzie. Estagiou no Ministério Público de São Paulo e foi Conciliador no Juizado Especial Cível - Mackenzie.',
		'MN_JULIANA'  		=> 'Juliana Gaban Monteiro Multini',
		'MN_TXT_JULIANA'  	=> 'Advogada especialista em gestão pública pela Universidade de São Paulo, com atuação na área do direito público e em contencioso empresarial.<br><br>
		                        Assessoria jurídica em operações contratuais, análise de riscos e administração de passivo trabalhista. Atuou como Assessora Executiva da Presidência da Assembléia Legislativa do Estado de São Paulo. Foi integrante do Grupo de Discussão sobre Desenvolvimento Sustentado do Estado de São Paulo e sobre índice de Responsabilidade Social do Fórum Legislativo da Assembléia Legislativa de São Paulo.<br><br>
		                        Consultora jurídica em direito público e contencioso empresarial.',
		'MN_ANGELICA'  		=> 'Angélica Rebequi da Motta Santos',
		'MN_TXT_ANGELICA'  	=> 'Coordenadora Administrativa - Advogada formada pela Universidade de São Caetano do Sul – USCS – Atuante em diversos processos na área civil tais como inventário, divórcio, dano moral e material e nulidade de empréstimo consignado. ',
		'MN_KRIKOR'  		=> 'Krikor Palma Artissian',
		'MN_TXT_KRIKOR'  	=> 'Advogado especialista em Direito Civil e Consumidor pela FMB – Instituto Flávio Monteiro de Barros, atua no departamento jurídico de grandes empresas como o Grupo Educacional UNIESP, e estagiou em órgãos públicos, tais como Procuradoria da Fazenda Nacional e Justiça Federal.',
		'MN_ROBERTA'  		=> 'Roberta Moraes Dias Benatti',
		'MN_TXT_ROBERTA'  	=> 'Advogada formada pela Fundação Armando Álvares Penteado - FAAP/SP, Especialista em Direito da Infraestrutura pela Escola de Direito de São Paulo da Fundação Getúlio Vargas - GV Law/SP.<br><br>

								Atua na área do Direto Público, no consultivo e contencioso judicial e administrativo, com ênfase nas áreas do Direito Administrativo, Municipal, Urbanístico, Financeiro, Eleitoral e Infraestrutura.<br><br>

								Participou dos cursos de Arbitragem na Administração Pública e de Qualidade na Gestão Pública.<br><br>

								Atuou junto à Prefeitura do Município de São Paulo, como Assessora Jurídica Chefe e como Assessora de Gabinete. ',
		'MN_GABRIEL'  		=> 'Gabriel Vieira Almeida Machado',
		'MN_TXT_GABRIEL'  	=> 'Advogado, pós-graduando em Direito Administrativo pela Pontifícia Universidade Católica – PUC/SP, formado pelo Centro Universitário CESMAC – Maceió/AL, atuante no contencioso e consultivo nas áreas do direito administrativo, eleitoral, municipal e financeiro, participou do curso de extensão promovido pela Escola Superior da Advocacia de São Paulo sobre Parcerias na Administração Pública, estagiou no Tribunal de Justiça do Estado de Alagoas.',
		'MN_GUILHERMO'  	=> 'Guillermo Santana Andrade Glassman',
		'MN_TXT_GUILHERMO'  => 'Advogado. Mestrando em Direito Político e Econômico pela Universidade Presbiteriana Mackenzie. Especialista em Direito Administrativo pela Pontifícia Universidade Católica da São Paulo. Cursou extensão em Contratos em Infraestrutura na Fundação Getúlio Vargas/SP. Bacharel em Direito pela Universidade do Estado da Bahia. Bacharelando em Ciências Sociais pela Universidade de São Paulo. <br><br>

								Tem experiência na área de Direito Público, nos setores público e privado, com ênfase em Direito Administrativo - Contratos de Infraestrutura ',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
		'MN_FORM_TEL'  		=> 'TELEFONE',
	);
}

?>


