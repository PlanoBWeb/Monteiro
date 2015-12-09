<?php

session_start();
if( $_SESSION['idioma'] == "I")
{
	//INGLÊS
	$arrayIdioma = array(
		// Header
		'MN_ATEND'  		=> 'Atendimento:',
		'MN_HOME'  			=> 'Home',
		'MN_ESCRITORIO'  	=> 'Escritório',
		'MN_APRESENTACAO'  	=> 'APRESENTAÇÃO',
		'MN_MISVALOBJ'  	=> 'MISSÃO, VALORES E OBJETIVO',
		'MN_RESPSOCIAL'  	=> 'RESPONSABILIDADE SOCIAL',
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
		'MN_VIDEOS'		  	=> 'Vídeos',

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
		
		'MN_TXT_DP'  		=> 'Na área do Direito Público, a Marcos Monteiro Sociedade de Advogados, por meio de uma equipe altamente especializada, está apta a atender seus clientes de maneira rápida e eficiente em relação ao conjunto das normas jurídicas de natureza pública que regulam a relação entre o particular e o Estado e também às atividades, funções e organizações de poderes do Estado e dos seus servidores.',
		'MN_TITULO_DP'  	=> 'Direito Público',
		'MN_TITULO_TC'  	=> 'Tribunal de Contas',
		'MN_TXT_TC'  		=> 'Atua na fiscalização contábil, financeira, orçamentária, operacional e patrimonial de estados, municípios e da União, além das respectivas entidades de administração direta ou indireta e fundações, quanto à legalidade, legitimidade, economicidade, aplicação de subvenções e renúncia de receitas.<br><br>

								A jurisdição do Tribunal alcança administradores e demais responsáveis por dinheiro, bens e valores públicos, além das pessoas físicas ou jurídicas, que, mediante convênios, acordos, ajustes ou outros instrumentos congêneres, apliquem auxílios, subvenções ou recursos repassados pelo Poder Público.<br><br>

								Todo cuidado é pouco quando se trata do dinheiro público e os clientes da Marcos Monteiro Sociedade de Advogados são assessorados em todas as particularidades que envolvem os detalhados processos de prestação de contas dos órgãos públicos, incluindo:<br><br>

								- Patrocínio de defesas especializadas por área, tanto no setor público como privado (prefeituras, câmaras municipais, empresas).<br>
								- Acompanhamento simultâneo do andamento processual realizado por sistema próprio.<br>
								- Manifestações complementares contínuas ao longo da instrução processual, com elaboração de memoriais, diligências e sustentações orais, permitindo maiores chances de êxito na causa.<br><br>',
		'MN_TITULO_LC'  	=> 'Licitações e Contratos',
		'MN_TXT_LC'  		=> 'A licitação é o procedimento administrativo formal, indispensável aos procedimentos de compra, aquisição ou contratação de bens e serviços, em que a Administração Pública convoca, mediante condições estabelecidas em ato próprio (edital ou convite), empresas interessadas na apresentação de propostas para esse fim.<br><br>

								Assessoramos nossos clientes na participação de todas as etapas dos procedimentos licitatórios, incluindo:<br><br>

								- Patrocínio de defesa em órgãos de controle externo (TCU, TCE, MP).<br><br>
								- Equipe especializada em editais de licitação, recursos administrativos e mandados de segurança.<br><br>
								- Atuação em exames prévios de editais junto ao TCE.',
		'MN_TITULO_IA'  	=> 'Improbidade Administrativa',
		'MN_TXT_IA'  		=> 'É o ato ilegal ou contrário aos princípios básicos da Administração Pública, cometido por agente público, durante o exercício de função pública ou decorrente desta.<br><br>

								Os clientes da Marcos Monteiro Sociedade de Advogados contam com os seguintes serviços para evitar os problemas causados por questões de improbidade administrativa:<br><br>

								- Consultoria preventiva especializada para órgãos públicos.<br>
								- Patrocínio de defesa especializada no Judiciário.<br>
								- Acompanhamento e manifestação em inquérito civil.',
		'MN_TITULO_CR'  	=> 'Crimes de Responsabilidade',
		'MN_TXT_CR'  		=> 'Correspondem às infrações político-administrativas cometidas no desempenho da função pública e que podem levar à perda do cargo e a impossibilidade de ocupar cargo público por um determinado período de tempo.<br><br>

								O completo assessoramento a nossos clientes inclui:<br><br>

								- Consultoria preventiva para gestores públicos.<br>
								- Patrocínio de defesa em órgãos de controle.',
		'MN_TITULO_TS'  	=> 'Terceiro Setor',
		'MN_TXT_TS'  		=> 'É o conjunto de entidades e associações da sociedade civil com fins públicos, mas sem fins lucrativos.<br><br>

								Um dos principais problemas que o gestor público enfrenta é a contratação e fiscalização das parcerias com o TERCEIRO SETOR. O escritório tem atuação de destaque nesta área, com diversos artigos publicados, equipe especializada e acompanhamento diário da jurisprudência, atendendo o setor público e o privado:<br><br>

								<strong>Setor Público</strong><br><br>

								- Consultoria preventiva com elaboração legislativa.<br>
								- Regulamentação interna.<br>
								- Capacitação de equipe.<br>
								- Elaboração de concurso de projetos.<br>
								- Editais e contratos de gestão ou termos de parceria.<br>
								- Defesa especializada em processos nos órgãos de controle (tribunais de contas).<br><br>

								<strong>Setor Privado (entidades, OS\'s e OSCIP\'s)</strong><br><br>

								- Defesa especializada em processos nos órgãos de controle (tribunais de contas).<br>
								- Consultoria jurídica na gestão e aplicação dos recursos públicos.<br>
								- Prestação de contas.<br>
								- Manuais de procedimentos, compras e contratações.<br>
								- Assessoria em licitações e contratos.<br>
								- Assessoria em qualificação para entidades.',
		'MN_TITULO_PL'  	=> 'Processo Legislativo',
		'MN_TXT_PL'  		=> 'É o conjunto de atos realizados pelas Assembleias, Câmaras e o Congresso Nacional, visando a elaboração das leis de forma democrática, ordenados conforme as regras expressas na Constituição e nos regimentos internos.<br><br>

								A equipe de advogados da Marcos Monteiro Sociedade de Advogados trabalha para oferecer completa assessoria a seus clientes na área do processo legislativo, incluindo:<br><br>

								- Consultoria técnica em elaboração legislativa, tanto do Executivo como do Legislativo (projetos de lei e decretos, entre outros atos normativos).<br>
								- Acompanhamento de projetos de lei específicos por áreas de interesse de grupos empresariais.<br>
								- Parecer de constitucionalidade de atos normativos.',
		'MN_TITULO_C'  		=> 'Consultoria',
		'MN_TXT_C'  		=> 'A Marcos Monteiro Sociedade de Advogados realiza consultoria completa por meio de processos consultivos, atendimento em reuniões e respostas técnicas via e-mails, tanto para o setor público como privado:<br><br>

								<strong>Setor Público </strong><br><br>

								- Consultoria preventiva em licitações e contratos.<br>
								- Contratação e admissão de pessoal.<br>
								- Contratação do terceiro setor (áreas de saúde, cultura, educação, entre outros).<br>
								- Análise de minutas de editais.<br>
								- Gestão contábil e fiscal.<br>
								- Acompanhamento de jurisprudência e comunicados dos tribunais de contas.<br>
								- Acompanhamento processual nos tribunais de contas.<br>
								- Reestruturação administrativa de quadro de pessoal para prefeituras e câmaras municipais.<br>
								- Modelagem de Parcerias Público-Privadas (PPP\'s).<br><br>

								<strong>Setor Privado </strong><br><br>

								- Consultoria para empresas interessadas em participar de licitações e contratos com órgãos públicos.<br>
								- Recursos administrativos.',
		'MN_TITULO_CM'  	=> 'Consórcios Municipais',
		'MN_TXT_CM'  		=> 'Importante instrumento de política pública para o desenvolvimento econômico e melhorias no sistema de saúde, saneamento, meio ambiente, entre outros, criando-se uma articulação institucional entre municípios para construir soluções para problemas comuns.<br><br>

								Mas para a eficiência dos consórcios, é necessário que eles funcionem de acordo com as regras estabelecidas na legislação e a Marcos Monteiro Sociedade de Advogados oferece:<br><br>

								- Defesa em órgãos de controle.<br>
								- Consultoria em criação e dissolução.<br>
								- Consultoria em contratos e licitações.<br>
								- Modelagem de Parcerias Público-Privadas (PPP\'s).',
		'MN_TITULO_DE'  	=> 'Direito Eleitoral',
		'MN_TXT_DE'  		=> 'Ramo do Direito Público que trata de institutos relacionados com os direitos políticos e as eleições, em todas as suas fases, como forma de escolha dos titulares dos mandatos políticos e das instituições do Estado, disciplina a criação dos partidos, o ingresso do cidadão no corpo eleitoral para fruição dos direitos políticos, o registro das candidaturas, a propaganda eleitoral, o processo eletivo e a investidura no mandato.<br><br>

								A Marcos Monteiro Sociedade de Advogados oferece uma equipe altamente especializada que presta assessoria completa em todas as áreas do Direito Eleitoral, desde a pré-candidatura até a prestação de contas da campanha:',
		'MN_TITULO_APC'  	=> 'Assessoria para Pré-candidatos',
		'MN_TXT_APC'  		=> '<strong>Pré-candidaturas </strong><br><br>

								- Exigências legais iniciais, escolha do partido político, filiação política partidária, fidelidade partidária, desincompatibilizações e afastamentos legais para fins eleitorais.',
		'MN_TITULO_FP'  	=> 'Fidelidade Partidária',
		'MN_TXT_FP'  		=> '- Pedido à Justiça Eleitoral decretação da perda de cargo eletivo em decorrência de desfiliação partidária sem justa causa.',
		'MN_TITULO_RX'  	=> '“Raio X” do Candidato',
		'MN_TXT_RX'  		=> 'Primeiro passo para aqueles interessados em pleitear ou candidatar-se a mandato eletivo é saber se não há nenhum impedimento para a candidatura e a Marcos Monteiro Sociedade de Advogados providencia um completo raio-X do candidato ou de seus adversários, incluindo:<br><br>

								- Certidões judiciais.<br><br>
								- Certidões administrativas (órgãos de controle).<br><br>
								- Certidões eleitorais.<br><br>
								- Parecer sobre elegibilidade de acordo com a Lei da Ficha Limpa.',
		'MN_TITULO_RC'  	=> 'Registro de candidatura',
		'MN_TXT_RC'  		=> '- Observação de limites e prazos.<br>
								- Organização da documentação necessária para o registro.',
		'MN_TITULO_PC'  	=> 'Prestação de Contas',
		'MN_TXT_PC'  	=> '- Orientação da prestação de contas de acordo com as rígidas regras eleitorais.
							- Atendimento a partidos políticos, candidatos (inclusive vices e suplentes) e comitês financeiros, que estão obrigados a prestar contas à Justiça Eleitoral a respeito da movimentação financeira de suas campanhas eleitorais.',								
		'MN_TITULO_PE'  	=> 'Propaganda Eleitoral',
		'MN_TXT_PE'  		=> '- Orientação em relação ao que é permitido ou não de acordo com a legislação eleitoral.
								- Orientação em relação aos prazos permitidos para cada tipo de propaganda.
								- Defesa em ações propostas pela Justiça Eleitoral ou outros candidatos e partidos.',
		'MN_TITULO_AC'  	=> 'Assessoria em Campanhas',
		'MN_TXT_AC'  		=> '- Assessoria em todas as etapas da campanha eleitoral.',
		'MN_TITULO_IME'  	=> 'Impugnação de Mandato Eletivo',
		'MN_TXT_IME'  		=> '- Ação eleitoral, prevista na Constituição Federal, que tem por objetivo impugnar o mandato obtido com abuso de poder econômico, corrupção ou fraude.',
		'MN_TITULO_CIE'  	=> 'Crimes ou infrações eleitorais',
		'MN_TXT_CIE'  		=> '- Corrupção.<br>
								- Inscrição fraudulenta.<br>
								- Coação ou ameaça.<br>
								- Concentração de eleitores.<br>
								- Transporte e alimentação de eleitores.<br>
								- Fraude do voto.<br>
								- Divulgação de fatos inverídicos. <br>
								- Calúnia, difamação, injúria.<br>
								- Inutilizar ou impedir propaganda eleitoral.<br>
								- Recusar ou abandonar o serviço eleitoral.<br>
								- Uso de símbolos, frases ou imagens associadas às de uso de órgão de governo, empresa ou sociedade de economia mista.<br>
								- Divulgação de pesquisa fraudulenta.<br><br>

								<strong>No dia da eleição</strong><br><br>

								- Uso de alto-falantes e amplificadores de som ou a promoção de comício ou carreata.<br>
								- Arregimentação de eleitor ou a propaganda de boca de urna. <br>
								- Divulgação de qualquer espécie de propaganda de partidos políticos ou de seus candidatos.',
		'MN_TITULO_CPI'  	=> 'CPI',
		'MN_TXT_CPI'  		=> '- Acompanhamento de Comissão Parlamentar de Inquérito (CPI), investigação conduzida pelo Poder Legislativo, que transforma a própria casa parlamentar em comissão para ouvir depoimentos e colher informações diretamente.',
		'MN_TITULO_DEMP'  	=> 'Direito Empresarial',
		'MN_TXT_DEMP'  		=> 'Ramo do direito que estuda as relações que envolvem a empresa e o empresário, o estudo da empresa, o direito societário, as relações de título de crédito, as relações de direito concorrencial, as relações de direito intelectual e industrial e os contratos mercantis, entre outros.<br><br>

								A Marcos Monteiro Sociedade de Advogados coloca à disposição de seus clientes uma equipe especializada na área do Direito Empresarial, incluindo os seguintes serviços:',
		'MN_TITULO_PT'  	=> 'Planejamento Tributário',
		'MN_TXT_PT'  		=> '- Análise da estrutura da empresa e do tipo de tributação mais vantajosa.<br>
								- Análise das diversas opções de modalidades dos tributos federais, estaduais e municipais a serem escolhidos.<br>
								- Racionalização da carga tributária a ser suportada pela empresa.<br>
								- Otimização da aplicação dos recursos disponíveis.',
		'MN_TITULO_RC'  	=> 'Recuperação de Créditos',
		'MN_TXT_RC'  		=> '- Identificação de créditos fiscais não apropriados na escrita fiscal e contábil da empresa. <br>
								- Apuração e habilitação dos valores dos créditos de impostos e contribuições e seu aproveitamento na forma de restituição, ressarcimento e compensação com débitos vencidos e vincendos.',
		'MN_TITULO_DFE'  	=> 'Debitos Federais e Estaduais',
		'MN_TXT_DFE'  		=> '- Levantamento de certidões negativas relativas aos encargos federais e estaduais.',
		'MN_TITULO_RL'  	=> 'Representação em Licitações',
		'MN_TXT_RL'  		=> '- Acompanhamento das sessões dos certames licitatórios, perante quaisquer órgãos públicos. <br>
								- Análise e aprovação prévia da documentação do cliente e dos concorrentes.<br>
								- Representação do cliente na retirada de certidões e comparecimentos em vistorias técnicas.',
		'MN_TITULO_IMPE'  	=> 'Impugnações em Editais',
		'MN_TXT_IMPE'  		=> '- Petições de impugnações sempre que se apurar a existência de irregularidades em seu conteúdo, que venham a contrariar a lei licitatória.',
		'MN_TITULO_MS'  	=> 'Mandado de Segurança',
		'MN_TXT_MS'  		=> '- Ação que serve para resguardar Direito líquido e certo, não amparado por Habeas Corpus ou Habeas Data, que seja negado, ou mesmo ameaçado, por autoridade pública no exercício de atribuições do poder público.',
		'MN_TITULO_DN'  	=> 'Diligências Negociais',
		'MN_TXT_DN'  		=> '- Diligências aos órgãos administrativos, como repartições públicas, estabelecimentos financeiros, cartórios, fóruns, Receita Federal, dentre outros, inclusive aos relacionamentos bancários.',
		'MN_TITULO_DAC'  	=> 'Advocacia Consultiva',
		'MN_TXT_DAC'  		=> '- Elaboração de pareceres sobre temas gerais do Direito relacionados à atividade empresarial.<br>
								- Elaboração, análise, revisão e ajustes de contratos e acordos, visando a adequação de tais instrumentos à legislação vigente, incluindo normas trabalhistas, Código de Defesa do Consumidor, Código Civil, entre outros.<br>
								- Auditoria Preventiva de forma a levantar todos passivos (inclusive ocultos) da empresa, em todas as áreas de atuação descritas acima.<br>
								- Consultoria e assessoria preventiva a fim de reduzir eventuais riscos e custos dos clientes, por meio de orientações preventivas contra possíveis demandas judiciais e extrajudiciais.
								',
		'MN_TITULO_CC'  	=> 'Contencioso Civil',
		'MN_TXT_CC'  		=> '- Representação na solução de conflitos ligados a violações de contratos, disputa entre sócios ou acionistas, marcas e patentes, responsabilidade civil em geral, tanto em processos judiciais quanto em procedimentos administrativos, de qualquer natureza, ou através de formas alternativas de solução de conflitos, como mediação e arbitragem.',
		'MN_TITULO_ADI'  	=> 'Direito Imobiliário',
		'MN_TXT_ADI'  		=> 'O Direito Imobiliário é o ramo do direito privado pelo qual se disciplinam vários aspectos da vida privada, tais como, as várias formas de aquisição e perda da propriedade, a compra e venda, o condomínio, o aluguel, os financiamentos e incorporações imobiliárias, a posse, a permuta, a doação, a cessão de direitos, a usucapião, o direito do inquilinato, o direito de vizinhança, o registro de imóveis, a regularização de loteamentos, dentre outros institutos jurídicos concernentes aos bens imóveis. <br><br>

								Tal tem suas raízes no direito das coisas, parte do direito civil que rege a propriedade, instituto de significativa influência na estrutura da sociedade, seja como direito subjetivo à detenção de uma coisa, seja como ramo especializado da Doutrina Jurídica. <br><br>

								Infinitos são os problemas que permeiam o ramo do Direito Imobiliário, de tal sorte que é indiscutível a viabilidade na contratação de um advogado especializado, profissional este, apto a regulamentar os aspectos práticos da vida cotidiana. ',
		'MN_TITULO_CAJ'  	=> 'Consultoria & Assessoria Jurídicas',
		'MN_TXT_CAJ'  		=> 'A prestação de consultoria e assessoria jurídicas, conforme previstas no Artigo 1º, inciso I do “Estatuto da Advocacia”, tem a função de advocacia preventiva, de modo a disponibilizar, tanto às pessoas naturais quanto às empresariais, o acompanhamento técnico, por advogado, de situações da vida cotidiana que, quando desenvolvidas sob a orientação adequada, dificilmente se transformam em litígio futuro. <br><br>

								A Marcos Monteiro Sociedade de Advogados possui uma equipe especializada na prestação de assessoria concernente à venda e compra de imóveis, condomínios, regularização de loteamentos (fracionamentos, desmembramentos e remembramentos), contratos e operações imobiliárias, bem como, atua na área de consultoria jurídica mediante elaboração de “Pareceres”, os quais possibilitam assertiva orientação aos seus clientes. <br><br>

								No que tange à assessoria, esta será desenvolvida mediante o estreitamento dos laços com a concretude do direito e sua realização do plano material, a qual se dará por atos orientados pelo advogado ou até mesmo, diretamente realizados por este. <br><br>

								Atuando na atividade de consultoria, o advogado analisa os diversos questionamentos recebidos a fim de que, após considerar as várias hipóteses possíveis, elabore parecer que permita ao consulente trilhar pelo caminho jurídico mais adequado e, para tal, faz uma avaliação do que é e do que não é jurídico, do que é permitido ou proibido, apontando soluções às dúvidas suscitadas, sempre com vistas à proteção e defesa dos interesses e direitos de seu cliente, dentro de princípios éticos e legais. <br><br>

								A abrangência assistencial comporta, desde mínimas dúvidas até ao desenvolvimento de trabalhos técnicos especializados na resolução de entraves que, na maioria das vezes, tendem a arrastarem-se por anos. ',
		'MN_TITULO_RLI'  	=> 'Registro e Legalização de Imóveis',
		'MN_TXT_RLI'  		=> 'Através de procedimentos técnicos e jurídicos torna-se possível a legalização de imóveis inicialmente considerados clandestinos ou irregulares, adequando-os à legislação vigente e observando os procedimentos administrativos junto aos respectivos Cartórios de Registro de Imóveis. <br><br>

								A legalização imobiliária possibilita o efetivo registro do imóvel, assegurando a propriedade com caráter de autenticidade, segurança e eficácia jurídica. <br><br>

								A Marcos Monteiro Sociedade de Advogados possui um corpo jurídico apto a promover as ações concernentes à regularização de tais áreas, bem como, atuar na obtenção do efetivo registro dominial. ',
		'MN_TITULO_RCI'  	=> 'Renegociação de Contratos Imobiliários',
		'MN_TXT_RCI'  		=> 'Em financiamentos de imóveis a longo prazo é possível que o mutuário venha a se deparar com importantes mudanças em sua vida financeira, alterando as provisões para pagamento das parcelas. Situações como desemprego, divórcio, perda de cargo comissionado, no caso de servidores públicos, podem fazer com que as prestações deixem de ser pagas. <br><br>

								Para evitar a ocorrência de penhora e conseguinte leilão do imóvel, os advogados que compõe o nosso corpo jurídico adotarão providências junto à instituição de financiamento a fim de obter a renegociação dos débitos, seja este mediante acordo administrativo ou via judicial. <br><br>

								O Superior Tribunal de Justiça já exarou entendimento de que, nos contratos habitacionais populares, é possível renegociar a dívida devido à alteração da renda. <br><br>

								Inobstante, inúmeras são as ocorrências de refinanciamento negado em virtude desta renda, pois, quando assina o contrato de venda e compra, o adquirente não é alertado sobre os riscos de ter o financiamento negado pelo banco. <br><br>

								Nosso compromisso é garantir ao proprietário o direito à revisão dos contratos do SFH (Sistema Financeiro da Habitação) quando há comprometimento de renda, em conformidade à previsão legislativa vigente. ',
		'MN_TITULO_CJE'  	=> 'Contencioso Judicial e Extrajudicial',
		'MN_TXT_CJE'  		=> 'Os advogados da Marcos Monteiro Sociedade de Advogados estarão sempre aptos a interceder na defesa dos interesses de seus clientes, seja em âmbito judicial ou extrajudicial. <br><br>

								Atuando nos processos judiciais ou procedimentos administrativos, tais profissionais possuem a máxima qualificação e expertise, inclusive de forma preventiva em todas as questões que envolvam imóveis. <br><br>

								A representação de seus clientes poderá se dar nos mais variados litígios, tais como: ações de despejo, nulidades de assembleias, usucapião, retificação de registro, reintegração de posse, desapropriação, etc. ',
		'MN_TITULO_AU'  	=> 'Ações de Usucapião',
		'MN_TXT_AU'  		=> 'Usucapião, também denominada de prescrição aquisitiva, por definição, é um modo de aquisição da propriedade e / ou de qualquer direito real que se dá pela posse prolongada da coisa, de acordo com os requisitos legais. <br><br>

								Está fundamentado no princípio da utilidade social, na conveniência de se dar segurança e estabilidade à propriedade, bem como de se consolidar as aquisições e facilitar a prova do domínio, podendo ser das seguintes espécies:<br><br> 

								i. Usucapião comum extraordinária;<br><br> 

								ii. Usucapião comum ordinária; <br><br>

								iii. Usucapião especial de imóvel urbano; <br><br>

								iv. Usucapião especial rural. <br><br>

								Observados os requisitos de cada uma das espécies da usucapião é possível ao nosso corpo jurídico intentar ações específicas visando a efetiva regularização da propriedade. <br><br>

								Não menos importante, salientamos que com a promulgação do novo Código de Processo Civil, será possível, ainda, o pedido de reconhecimento extrajudicial de usucapião, o qual será processado diretamente perante o cartório de registro, a requerimento do interessado, representado por advogado. ',
		'MN_TITULO_IJEP'  	=> 'Inventários Judicial e Extrajudicial com partilha',
		'MN_TXT__IJEP'  	=> 'Trata-se de procedimento por meio do qual são oficialmente relacionados os bens encontrados em nome da pessoa falecida, sendo sua realização obrigatória para que os sucessores possam obter a atribuição legal dos bens que lhes são cabíveis. <br><br>

								Seu objetivo é a arrecadação, a descrição e a avaliação dos bens e outros direitos pertencentes ao de cujus, bem como a discriminação, o pagamento das dívidas e dos impostos e os demais atos indispensáveis à liquidação do montante que era daquele. <br><br>

								Em suma, o que se almeja é a liquidação dos bens e a divisão patrimonial do acervo hereditário. <br><br>

								Tal procedimento poderá se dar tanto na via judicial quanto na extrajudicial, em consonância ao que preconiza o Código de Processo Civil Brasileiro. <br><br>

								Ressalte-se que, tanto no procedimento por via judicial, quanto naquele efetuado extrajudicialmente, é imperativo a existência de um advogado, no primeiro caso, postulando em juízo no interesse de seus clientes, no segundo, dando plena assistência às partes, tanto nos atos que antecedem a lavratura da escritura pública pelo tabelião, quando no efetivo momento desta. ',
		'MN_TITULO_AAJVI'  	=> 'Autorização / Alvará Judicial para Venda de Imóveis',
		'MN_TXT_AAJVI'  	=> 'Trata-se de ordem judicial, obtida para realização de determinado ato, sendo cabível quando o requerente, ou requerentes, necessitam que o juiz intervenha em uma situação eminentemente privada. <br><br>

								No direito brasileiro, é possível a autorização judicial para venda de imóveis pertencentes a incapazes, ou ainda, no curso do inventário para a retirada de valores necessários à administração do espólio antes que se conclua, efetivamente, a partilha. <br><br>

								Neste último caso, há necessidade de preenchimento de três requisitos: anuência de todos os herdeiros, autorização judicial para a efetivação da venda através de alvará judicial e pagamento do imposto correspondente, o chamado ITCMD. <br><br>

								O alvará pode ser solicitado de modo autônomo ou ainda durante o processo de inventário, caso os herdeiros concordem em efetuar a alienação de um determinado bem para obtenção de recursos necessários ao pagamento dos impostos, taxas e demais despesas do processo. <br><br>

								Tal procedimento, também dependerá da avaliação de cada caso e da posição de cada magistrado, havendo aqueles que concedem o alvará e outros que somente concedem em casos extremos, onde a venda imediata visa possibilitar cirurgias ou outros procedimentos urgentes. <br><br>

								Daí a indispensável atuação de um advogado especializado, que possa fundamentar com excelência o pedido nos autos, traduzindo claramente, a necessidade dos herdeiros. <br><br>

								Não menos importante é a utilização do alvará com vistas à regularização imobiliária, vez que, é bastante comum a celebração de compromisso de venda e compra de um determinado imóvel e, antes da outorga da escritura definitiva, o vendedor vir a óbito. <br><br>

								Neste caso, é necessário que o comprador demonstre ao juiz e aos demais herdeiros que todas as parcelas foram honradas, a fim de que obtenha sentença que autorize a transferência da propriedade do imóvel adquirido em seu favor, legitimando, assim, a sua titularidade. <br><br>

								Para todos esses casos, a Marcos Monteiro Sociedade de Advogados possui profissionais preparados a fim de lograr êxito na viabilização do interesse de seu cliente.',
		'MN_TITULO_APIP'  	=> 'Ações possessórias e Imissão na posse',
		'MN_TXT_APIP'  		=> 'Objetivando a proteção da posse para seus clientes, a Marcos Monteiro Sociedade de Advogados tem plena expertise na ajuização das ações de reintegração de posse, manutenção de posse e ainda, interdito proibitório. <br><br>

								Havendo esbulho ou turbação na posse, o proprietário de um imóvel poderá contar com os profissionais que compõem o nosso corpo jurídico a fim de assegurar o seu direito através do ingresso das ações possessórias, as quais são determinadas conforme a gravidade da lesão. <br><br>

								Ação de reintegração de posse: <br><br>

								Necessária no caso da perda total da posse sobre determinado bem imóvel, através de invasão ou mediante violência, cujo objetivo é restituir ao proprietário (autor) a posse sobre o bem. <br><br>

								Ação de manutenção de posse: <br><br>

								Esta ação é cabível para aquele que esteja sofrendo turbação (perturbação), porém, ainda não tenha se operado a perda da posse do bem. <br><br>

								Tal ação visa à manutenção da posse, garantindo ao autor o efetivo exercício desta sem interferência de outrem. <br><br>

								Ação de interdito proibitório: <br><br>

								Sua aplicação se dá quando o possuidor de um bem tem o receio justificado e iminente de que poderá vir a perder a posse por ato de terceiro, inibindo tal ato mediante ordem judicial. <br><br>

								De outra sorte, nossos advogados também estão aptos a promover ações com vistas à Imissão na posse, as quais se dão quando, embora a pessoa tenha um título dominial sobre determinado bem, ainda não possui efetiva posse do mesmo. <br><br>

								Trata-se de ação não possessória fundamentada no direito à posse, sendo que o autor, por intermédio de um advogado, peticiona tal direito, vez que este nunca o exerceu anteriormente. <br><br>

								Os requisitos para a viabilidade da ação de imissão na posse são três: <br><br>

								i. o direito à posse jamais exercida através de um título (contrato particular, escritura publica, etc.); <br><br>

								ii. posse do bem reclamado nas mãos de outra pessoa; <br><br>

								iii. recusa na entrega do bem reclamado pelo detentor; <br><br>

								A ação de imissão na posse é uma ação real e não uma ação pessoal, fundada em direito obrigacional, daí sua natureza executiva. Na imissão não se discute a existência de um direito, pois o direito já é certo, líquido e exigível. O pedido, enfim, é torná-lo efetivo. <br><br>

								Tal ação tem larga aplicação em casos de arrematação de imóveis através de leilão judicial e extrajudicial, bem como pelo adquirente contra o vendedor e também pelo compromissário-comprador perante o promitente-vendedor. ',
		'MN_NOT_POR'  		=> 'Por',
		'MN_NOT_EM'  		=> 'Em',
		'MN_NOT_DESTA'  	=> 'Destaques',
		'MN_NOT_ARQ'  		=> 'Arquivos',
		'MN_NOT_CAT'  		=> 'Categorias',
		'MN_NOT_TAG'  		=> 'Tags',
		'MN_NOT_FONTE'  	=> 'Fonte',
		'MN_NOT_IMPRIMI'  	=> 'Imprimir',
		'MN_NOT_COMP'  		=> 'Compartilhe!',
		'MN_NOT_IND_NOT'  	=> 'Indicar esta notícia',
		'MN_NOT_LEIA_TBM'  	=> 'Leia também',
		'MN_TXT_EMBREVE'  	=> 'Em breve!',
		'MN_PROF' 			=> 'PROFSSIONAIS',
		'MN_TXT_ESCRITORIO' => 'ESCRITÓRIO',
		'MN_LAT_APRESENTA' 	=> 'Apresentação',
		'MN_LAT_MVO'  		=> 'Missão, Valores e Objetivo',
		'MN_LAT_RS'  		=> 'Responsabilidade Social',
		'MN_NOT_IND_PUB'  	=> 'Indicar esta publicação',
		'MN_TESTE'  		=> '',
		'MN_RESULT_BUSCA'	=> 'Não existe resultado',
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
		'MN_RESPSOCIAL'  	=> 'RESPONSABILIDADE SOCIAL',
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
		'MN_VIDEOS'		  	=> 'Vídeos',

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
		
		'MN_TXT_DP'  		=> 'Na área do Direito Público, a Marcos Monteiro Sociedade de Advogados, por meio de uma equipe altamente especializada, está apta a atender seus clientes de maneira rápida e eficiente em relação ao conjunto das normas jurídicas de natureza pública que regulam a relação entre o particular e o Estado e também às atividades, funções e organizações de poderes do Estado e dos seus servidores.',
		'MN_TITULO_DP'  	=> 'Direito Público',
		'MN_TITULO_TC'  	=> 'Tribunal de Contas',
		'MN_TXT_TC'  		=> 'Atua na fiscalização contábil, financeira, orçamentária, operacional e patrimonial de estados, municípios e da União, além das respectivas entidades de administração direta ou indireta e fundações, quanto à legalidade, legitimidade, economicidade, aplicação de subvenções e renúncia de receitas.<br><br>

								A jurisdição do Tribunal alcança administradores e demais responsáveis por dinheiro, bens e valores públicos, além das pessoas físicas ou jurídicas, que, mediante convênios, acordos, ajustes ou outros instrumentos congêneres, apliquem auxílios, subvenções ou recursos repassados pelo Poder Público.<br><br>

								Todo cuidado é pouco quando se trata do dinheiro público e os clientes da Marcos Monteiro Sociedade de Advogados são assessorados em todas as particularidades que envolvem os detalhados processos de prestação de contas dos órgãos públicos, incluindo:<br><br>

								- Patrocínio de defesas especializadas por área, tanto no setor público como privado (prefeituras, câmaras municipais, empresas).<br>
								- Acompanhamento simultâneo do andamento processual realizado por sistema próprio.<br>
								- Manifestações complementares contínuas ao longo da instrução processual, com elaboração de memoriais, diligências e sustentações orais, permitindo maiores chances de êxito na causa.<br><br>',
		'MN_TITULO_LC'  	=> 'Licitações e Contratos',
		'MN_TXT_LC'  		=> 'A licitação é o procedimento administrativo formal, indispensável aos procedimentos de compra, aquisição ou contratação de bens e serviços, em que a Administração Pública convoca, mediante condições estabelecidas em ato próprio (edital ou convite), empresas interessadas na apresentação de propostas para esse fim.<br><br>

								Assessoramos nossos clientes na participação de todas as etapas dos procedimentos licitatórios, incluindo:<br><br>

								- Patrocínio de defesa em órgãos de controle externo (TCU, TCE, MP).<br><br>
								- Equipe especializada em editais de licitação, recursos administrativos e mandados de segurança.<br><br>
								- Atuação em exames prévios de editais junto ao TCE.',
		'MN_TITULO_IA'  	=> 'Improbidade Administrativa',
		'MN_TXT_IA'  		=> 'É o ato ilegal ou contrário aos princípios básicos da Administração Pública, cometido por agente público, durante o exercício de função pública ou decorrente desta.<br><br>

								Os clientes da Marcos Monteiro Sociedade de Advogados contam com os seguintes serviços para evitar os problemas causados por questões de improbidade administrativa:<br><br>

								- Consultoria preventiva especializada para órgãos públicos.<br>
								- Patrocínio de defesa especializada no Judiciário.<br>
								- Acompanhamento e manifestação em inquérito civil.',
		'MN_TITULO_CR'  	=> 'Crimes de Responsabilidade',
		'MN_TXT_CR'  		=> 'Correspondem às infrações político-administrativas cometidas no desempenho da função pública e que podem levar à perda do cargo e a impossibilidade de ocupar cargo público por um determinado período de tempo.<br><br>

								O completo assessoramento a nossos clientes inclui:<br><br>

								- Consultoria preventiva para gestores públicos.<br>
								- Patrocínio de defesa em órgãos de controle.',
		'MN_TITULO_TS'  	=> 'Terceiro Setor',
		'MN_TXT_TS'  		=> 'É o conjunto de entidades e associações da sociedade civil com fins públicos, mas sem fins lucrativos.<br><br>

								Um dos principais problemas que o gestor público enfrenta é a contratação e fiscalização das parcerias com o TERCEIRO SETOR. O escritório tem atuação de destaque nesta área, com diversos artigos publicados, equipe especializada e acompanhamento diário da jurisprudência, atendendo o setor público e o privado:<br><br>

								<strong>Setor Público</strong><br><br>

								- Consultoria preventiva com elaboração legislativa.<br>
								- Regulamentação interna.<br>
								- Capacitação de equipe.<br>
								- Elaboração de concurso de projetos.<br>
								- Editais e contratos de gestão ou termos de parceria.<br>
								- Defesa especializada em processos nos órgãos de controle (tribunais de contas).<br><br>

								<strong>Setor Privado (entidades, OS\'s e OSCIP\'s)</strong><br><br>

								- Defesa especializada em processos nos órgãos de controle (tribunais de contas).<br>
								- Consultoria jurídica na gestão e aplicação dos recursos públicos.<br>
								- Prestação de contas.<br>
								- Manuais de procedimentos, compras e contratações.<br>
								- Assessoria em licitações e contratos.<br>
								- Assessoria em qualificação para entidades.',
		'MN_TITULO_PL'  	=> 'Processo Legislativo',
		'MN_TXT_PL'  		=> 'É o conjunto de atos realizados pelas Assembleias, Câmaras e o Congresso Nacional, visando a elaboração das leis de forma democrática, ordenados conforme as regras expressas na Constituição e nos regimentos internos.<br><br>

								A equipe de advogados da Marcos Monteiro Sociedade de Advogados trabalha para oferecer completa assessoria a seus clientes na área do processo legislativo, incluindo:<br><br>

								- Consultoria técnica em elaboração legislativa, tanto do Executivo como do Legislativo (projetos de lei e decretos, entre outros atos normativos).<br>
								- Acompanhamento de projetos de lei específicos por áreas de interesse de grupos empresariais.<br>
								- Parecer de constitucionalidade de atos normativos.',
		'MN_TITULO_C'  		=> 'Consultoria',
		'MN_TXT_C'  		=> 'A Marcos Monteiro Sociedade de Advogados realiza consultoria completa por meio de processos consultivos, atendimento em reuniões e respostas técnicas via e-mails, tanto para o setor público como privado:<br><br>

								<strong>Setor Público </strong><br><br>

								- Consultoria preventiva em licitações e contratos.<br>
								- Contratação e admissão de pessoal.<br>
								- Contratação do terceiro setor (áreas de saúde, cultura, educação, entre outros).<br>
								- Análise de minutas de editais.<br>
								- Gestão contábil e fiscal.<br>
								- Acompanhamento de jurisprudência e comunicados dos tribunais de contas.<br>
								- Acompanhamento processual nos tribunais de contas.<br>
								- Reestruturação administrativa de quadro de pessoal para prefeituras e câmaras municipais.<br>
								- Modelagem de Parcerias Público-Privadas (PPP\'s).<br><br>

								<strong>Setor Privado </strong><br><br>

								- Consultoria para empresas interessadas em participar de licitações e contratos com órgãos públicos.<br>
								- Recursos administrativos.',
		'MN_TITULO_CM'  	=> 'Consórcios Municipais',
		'MN_TXT_CM'  		=> 'Importante instrumento de política pública para o desenvolvimento econômico e melhorias no sistema de saúde, saneamento, meio ambiente, entre outros, criando-se uma articulação institucional entre municípios para construir soluções para problemas comuns.<br><br>

								Mas para a eficiência dos consórcios, é necessário que eles funcionem de acordo com as regras estabelecidas na legislação e a Marcos Monteiro Sociedade de Advogados oferece:<br><br>

								- Defesa em órgãos de controle.<br>
								- Consultoria em criação e dissolução.<br>
								- Consultoria em contratos e licitações.<br>
								- Modelagem de Parcerias Público-Privadas (PPP\'s).',
		'MN_TITULO_DE'  	=> 'Direito Eleitoral',
		'MN_TXT_DE'  		=> 'Ramo do Direito Público que trata de institutos relacionados com os direitos políticos e as eleições, em todas as suas fases, como forma de escolha dos titulares dos mandatos políticos e das instituições do Estado, disciplina a criação dos partidos, o ingresso do cidadão no corpo eleitoral para fruição dos direitos políticos, o registro das candidaturas, a propaganda eleitoral, o processo eletivo e a investidura no mandato.<br><br>

								A Marcos Monteiro Sociedade de Advogados oferece uma equipe altamente especializada que presta assessoria completa em todas as áreas do Direito Eleitoral, desde a pré-candidatura até a prestação de contas da campanha:',
		'MN_TITULO_APC'  	=> 'Assessoria para Pré-candidatos',
		'MN_TXT_APC'  		=> '<strong>Pré-candidaturas </strong><br><br>

								- Exigências legais iniciais, escolha do partido político, filiação política partidária, fidelidade partidária, desincompatibilizações e afastamentos legais para fins eleitorais.',
		'MN_TITULO_FP'  	=> 'Fidelidade Partidária',
		'MN_TXT_FP'  		=> '- Pedido à Justiça Eleitoral decretação da perda de cargo eletivo em decorrência de desfiliação partidária sem justa causa.',
		'MN_TITULO_RX'  	=> '“Raio X” do Candidato',
		'MN_TXT_RX'  		=> 'Primeiro passo para aqueles interessados em pleitear ou candidatar-se a mandato eletivo é saber se não há nenhum impedimento para a candidatura e a Marcos Monteiro Sociedade de Advogados providencia um completo raio-X do candidato ou de seus adversários, incluindo:<br><br>

								- Certidões judiciais.<br><br>
								- Certidões administrativas (órgãos de controle).<br><br>
								- Certidões eleitorais.<br><br>
								- Parecer sobre elegibilidade de acordo com a Lei da Ficha Limpa.',
		'MN_TITULO_RC'  	=> 'Registro de candidatura',
		'MN_TXT_RC'  		=> '- Observação de limites e prazos.<br>
								- Organização da documentação necessária para o registro.',
		'MN_TITULO_PC'  	=> 'Prestação de Contas',
		'MN_TXT_PC'  	=> '- Orientação da prestação de contas de acordo com as rígidas regras eleitorais.
							- Atendimento a partidos políticos, candidatos (inclusive vices e suplentes) e comitês financeiros, que estão obrigados a prestar contas à Justiça Eleitoral a respeito da movimentação financeira de suas campanhas eleitorais.',								
		'MN_TITULO_PE'  	=> 'Propaganda Eleitoral',
		'MN_TXT_PE'  		=> '- Orientação em relação ao que é permitido ou não de acordo com a legislação eleitoral.
								- Orientação em relação aos prazos permitidos para cada tipo de propaganda.
								- Defesa em ações propostas pela Justiça Eleitoral ou outros candidatos e partidos.',
		'MN_TITULO_AC'  	=> 'Assessoria em Campanhas',
		'MN_TXT_AC'  		=> '- Assessoria em todas as etapas da campanha eleitoral.',
		'MN_TITULO_IME'  	=> 'Impugnação de Mandato Eletivo',
		'MN_TXT_IME'  		=> '- Ação eleitoral, prevista na Constituição Federal, que tem por objetivo impugnar o mandato obtido com abuso de poder econômico, corrupção ou fraude.',
		'MN_TITULO_CIE'  	=> 'Crimes ou infrações eleitorais',
		'MN_TXT_CIE'  		=> '- Corrupção.<br>
								- Inscrição fraudulenta.<br>
								- Coação ou ameaça.<br>
								- Concentração de eleitores.<br>
								- Transporte e alimentação de eleitores.<br>
								- Fraude do voto.<br>
								- Divulgação de fatos inverídicos. <br>
								- Calúnia, difamação, injúria.<br>
								- Inutilizar ou impedir propaganda eleitoral.<br>
								- Recusar ou abandonar o serviço eleitoral.<br>
								- Uso de símbolos, frases ou imagens associadas às de uso de órgão de governo, empresa ou sociedade de economia mista.<br>
								- Divulgação de pesquisa fraudulenta.<br><br>

								<strong>No dia da eleição</strong><br><br>

								- Uso de alto-falantes e amplificadores de som ou a promoção de comício ou carreata.<br>
								- Arregimentação de eleitor ou a propaganda de boca de urna. <br>
								- Divulgação de qualquer espécie de propaganda de partidos políticos ou de seus candidatos.',
		'MN_TITULO_CPI'  	=> 'CPI',
		'MN_TXT_CPI'  		=> '- Acompanhamento de Comissão Parlamentar de Inquérito (CPI), investigação conduzida pelo Poder Legislativo, que transforma a própria casa parlamentar em comissão para ouvir depoimentos e colher informações diretamente.',
		'MN_TITULO_DEMP'  	=> 'Direito Empresarial',
		'MN_TXT_DEMP'  		=> 'Ramo do direito que estuda as relações que envolvem a empresa e o empresário, o estudo da empresa, o direito societário, as relações de título de crédito, as relações de direito concorrencial, as relações de direito intelectual e industrial e os contratos mercantis, entre outros.<br><br>

								A Marcos Monteiro Sociedade de Advogados coloca à disposição de seus clientes uma equipe especializada na área do Direito Empresarial, incluindo os seguintes serviços:',
		'MN_TITULO_PT'  	=> 'Planejamento Tributário',
		'MN_TXT_PT'  		=> '- Análise da estrutura da empresa e do tipo de tributação mais vantajosa.<br>
								- Análise das diversas opções de modalidades dos tributos federais, estaduais e municipais a serem escolhidos.<br>
								- Racionalização da carga tributária a ser suportada pela empresa.<br>
								- Otimização da aplicação dos recursos disponíveis.',
		'MN_TITULO_RC'  	=> 'Recuperação de Créditos',
		'MN_TXT_RC'  		=> '- Identificação de créditos fiscais não apropriados na escrita fiscal e contábil da empresa. <br>
								- Apuração e habilitação dos valores dos créditos de impostos e contribuições e seu aproveitamento na forma de restituição, ressarcimento e compensação com débitos vencidos e vincendos.',
		'MN_TITULO_DFE'  	=> 'Debitos Federais e Estaduais',
		'MN_TXT_DFE'  		=> '- Levantamento de certidões negativas relativas aos encargos federais e estaduais.',
		'MN_TITULO_RL'  	=> 'Representação em Licitações',
		'MN_TXT_RL'  		=> '- Acompanhamento das sessões dos certames licitatórios, perante quaisquer órgãos públicos. <br>
								- Análise e aprovação prévia da documentação do cliente e dos concorrentes.<br>
								- Representação do cliente na retirada de certidões e comparecimentos em vistorias técnicas.',
		'MN_TITULO_IMPE'  	=> 'Impugnações em Editais',
		'MN_TXT_IMPE'  		=> '- Petições de impugnações sempre que se apurar a existência de irregularidades em seu conteúdo, que venham a contrariar a lei licitatória.',
		'MN_TITULO_MS'  	=> 'Mandado de Segurança',
		'MN_TXT_MS'  		=> '- Ação que serve para resguardar Direito líquido e certo, não amparado por Habeas Corpus ou Habeas Data, que seja negado, ou mesmo ameaçado, por autoridade pública no exercício de atribuições do poder público.',
		'MN_TITULO_DN'  	=> 'Diligências Negociais',
		'MN_TXT_DN'  		=> '- Diligências aos órgãos administrativos, como repartições públicas, estabelecimentos financeiros, cartórios, fóruns, Receita Federal, dentre outros, inclusive aos relacionamentos bancários.',
		'MN_TITULO_DAC'  	=> 'Advocacia Consultiva',
		'MN_TXT_DAC'  		=> '- Elaboração de pareceres sobre temas gerais do Direito relacionados à atividade empresarial.<br>
								- Elaboração, análise, revisão e ajustes de contratos e acordos, visando a adequação de tais instrumentos à legislação vigente, incluindo normas trabalhistas, Código de Defesa do Consumidor, Código Civil, entre outros.<br>
								- Auditoria Preventiva de forma a levantar todos passivos (inclusive ocultos) da empresa, em todas as áreas de atuação descritas acima.<br>
								- Consultoria e assessoria preventiva a fim de reduzir eventuais riscos e custos dos clientes, por meio de orientações preventivas contra possíveis demandas judiciais e extrajudiciais.
								',
		'MN_TITULO_CC'  	=> 'Contencioso Civil',
		'MN_TXT_CC'  		=> '- Representação na solução de conflitos ligados a violações de contratos, disputa entre sócios ou acionistas, marcas e patentes, responsabilidade civil em geral, tanto em processos judiciais quanto em procedimentos administrativos, de qualquer natureza, ou através de formas alternativas de solução de conflitos, como mediação e arbitragem.',
		'MN_TITULO_ADI'  	=> 'Direito Imobiliário',
		'MN_TXT_ADI'  		=> 'O Direito Imobiliário é o ramo do direito privado pelo qual se disciplinam vários aspectos da vida privada, tais como, as várias formas de aquisição e perda da propriedade, a compra e venda, o condomínio, o aluguel, os financiamentos e incorporações imobiliárias, a posse, a permuta, a doação, a cessão de direitos, a usucapião, o direito do inquilinato, o direito de vizinhança, o registro de imóveis, a regularização de loteamentos, dentre outros institutos jurídicos concernentes aos bens imóveis. <br><br>

								Tal tem suas raízes no direito das coisas, parte do direito civil que rege a propriedade, instituto de significativa influência na estrutura da sociedade, seja como direito subjetivo à detenção de uma coisa, seja como ramo especializado da Doutrina Jurídica. <br><br>

								Infinitos são os problemas que permeiam o ramo do Direito Imobiliário, de tal sorte que é indiscutível a viabilidade na contratação de um advogado especializado, profissional este, apto a regulamentar os aspectos práticos da vida cotidiana. ',
		'MN_TITULO_CAJ'  	=> 'Consultoria & Assessoria Jurídicas',
		'MN_TXT_CAJ'  		=> 'A prestação de consultoria e assessoria jurídicas, conforme previstas no Artigo 1º, inciso I do “Estatuto da Advocacia”, tem a função de advocacia preventiva, de modo a disponibilizar, tanto às pessoas naturais quanto às empresariais, o acompanhamento técnico, por advogado, de situações da vida cotidiana que, quando desenvolvidas sob a orientação adequada, dificilmente se transformam em litígio futuro. <br><br>

								A Marcos Monteiro Sociedade de Advogados possui uma equipe especializada na prestação de assessoria concernente à venda e compra de imóveis, condomínios, regularização de loteamentos (fracionamentos, desmembramentos e remembramentos), contratos e operações imobiliárias, bem como, atua na área de consultoria jurídica mediante elaboração de “Pareceres”, os quais possibilitam assertiva orientação aos seus clientes. <br><br>

								No que tange à assessoria, esta será desenvolvida mediante o estreitamento dos laços com a concretude do direito e sua realização do plano material, a qual se dará por atos orientados pelo advogado ou até mesmo, diretamente realizados por este. <br><br>

								Atuando na atividade de consultoria, o advogado analisa os diversos questionamentos recebidos a fim de que, após considerar as várias hipóteses possíveis, elabore parecer que permita ao consulente trilhar pelo caminho jurídico mais adequado e, para tal, faz uma avaliação do que é e do que não é jurídico, do que é permitido ou proibido, apontando soluções às dúvidas suscitadas, sempre com vistas à proteção e defesa dos interesses e direitos de seu cliente, dentro de princípios éticos e legais. <br><br>

								A abrangência assistencial comporta, desde mínimas dúvidas até ao desenvolvimento de trabalhos técnicos especializados na resolução de entraves que, na maioria das vezes, tendem a arrastarem-se por anos. ',
		'MN_TITULO_RLI'  	=> 'Registro e Legalização de Imóveis',
		'MN_TXT_RLI'  		=> 'Através de procedimentos técnicos e jurídicos torna-se possível a legalização de imóveis inicialmente considerados clandestinos ou irregulares, adequando-os à legislação vigente e observando os procedimentos administrativos junto aos respectivos Cartórios de Registro de Imóveis. <br><br>

								A legalização imobiliária possibilita o efetivo registro do imóvel, assegurando a propriedade com caráter de autenticidade, segurança e eficácia jurídica. <br><br>

								A Marcos Monteiro Sociedade de Advogados possui um corpo jurídico apto a promover as ações concernentes à regularização de tais áreas, bem como, atuar na obtenção do efetivo registro dominial. ',
		'MN_TITULO_RCI'  	=> 'Renegociação de Contratos Imobiliários',
		'MN_TXT_RCI'  		=> 'Em financiamentos de imóveis a longo prazo é possível que o mutuário venha a se deparar com importantes mudanças em sua vida financeira, alterando as provisões para pagamento das parcelas. Situações como desemprego, divórcio, perda de cargo comissionado, no caso de servidores públicos, podem fazer com que as prestações deixem de ser pagas. <br><br>

								Para evitar a ocorrência de penhora e conseguinte leilão do imóvel, os advogados que compõe o nosso corpo jurídico adotarão providências junto à instituição de financiamento a fim de obter a renegociação dos débitos, seja este mediante acordo administrativo ou via judicial. <br><br>

								O Superior Tribunal de Justiça já exarou entendimento de que, nos contratos habitacionais populares, é possível renegociar a dívida devido à alteração da renda. <br><br>

								Inobstante, inúmeras são as ocorrências de refinanciamento negado em virtude desta renda, pois, quando assina o contrato de venda e compra, o adquirente não é alertado sobre os riscos de ter o financiamento negado pelo banco. <br><br>

								Nosso compromisso é garantir ao proprietário o direito à revisão dos contratos do SFH (Sistema Financeiro da Habitação) quando há comprometimento de renda, em conformidade à previsão legislativa vigente. ',
		'MN_TITULO_CJE'  	=> 'Contencioso Judicial e Extrajudicial',
		'MN_TXT_CJE'  		=> 'Os advogados da Marcos Monteiro Sociedade de Advogados estarão sempre aptos a interceder na defesa dos interesses de seus clientes, seja em âmbito judicial ou extrajudicial. <br><br>

								Atuando nos processos judiciais ou procedimentos administrativos, tais profissionais possuem a máxima qualificação e expertise, inclusive de forma preventiva em todas as questões que envolvam imóveis. <br><br>

								A representação de seus clientes poderá se dar nos mais variados litígios, tais como: ações de despejo, nulidades de assembleias, usucapião, retificação de registro, reintegração de posse, desapropriação, etc. ',
		'MN_TITULO_AU'  	=> 'Ações de Usucapião',
		'MN_TXT_AU'  		=> 'Usucapião, também denominada de prescrição aquisitiva, por definição, é um modo de aquisição da propriedade e / ou de qualquer direito real que se dá pela posse prolongada da coisa, de acordo com os requisitos legais. <br><br>

								Está fundamentado no princípio da utilidade social, na conveniência de se dar segurança e estabilidade à propriedade, bem como de se consolidar as aquisições e facilitar a prova do domínio, podendo ser das seguintes espécies:<br><br> 

								i. Usucapião comum extraordinária;<br><br> 

								ii. Usucapião comum ordinária; <br><br>

								iii. Usucapião especial de imóvel urbano; <br><br>

								iv. Usucapião especial rural. <br><br>

								Observados os requisitos de cada uma das espécies da usucapião é possível ao nosso corpo jurídico intentar ações específicas visando a efetiva regularização da propriedade. <br><br>

								Não menos importante, salientamos que com a promulgação do novo Código de Processo Civil, será possível, ainda, o pedido de reconhecimento extrajudicial de usucapião, o qual será processado diretamente perante o cartório de registro, a requerimento do interessado, representado por advogado. ',
		'MN_TITULO_IJEP'  	=> 'Inventários Judicial e Extrajudicial com partilha',
		'MN_TXT__IJEP'  	=> 'Trata-se de procedimento por meio do qual são oficialmente relacionados os bens encontrados em nome da pessoa falecida, sendo sua realização obrigatória para que os sucessores possam obter a atribuição legal dos bens que lhes são cabíveis. <br><br>

								Seu objetivo é a arrecadação, a descrição e a avaliação dos bens e outros direitos pertencentes ao de cujus, bem como a discriminação, o pagamento das dívidas e dos impostos e os demais atos indispensáveis à liquidação do montante que era daquele. <br><br>

								Em suma, o que se almeja é a liquidação dos bens e a divisão patrimonial do acervo hereditário. <br><br>

								Tal procedimento poderá se dar tanto na via judicial quanto na extrajudicial, em consonância ao que preconiza o Código de Processo Civil Brasileiro. <br><br>

								Ressalte-se que, tanto no procedimento por via judicial, quanto naquele efetuado extrajudicialmente, é imperativo a existência de um advogado, no primeiro caso, postulando em juízo no interesse de seus clientes, no segundo, dando plena assistência às partes, tanto nos atos que antecedem a lavratura da escritura pública pelo tabelião, quando no efetivo momento desta. ',
		'MN_TITULO_AAJVI'  	=> 'Autorização / Alvará Judicial para Venda de Imóveis',
		'MN_TXT_AAJVI'  	=> 'Trata-se de ordem judicial, obtida para realização de determinado ato, sendo cabível quando o requerente, ou requerentes, necessitam que o juiz intervenha em uma situação eminentemente privada. <br><br>

								No direito brasileiro, é possível a autorização judicial para venda de imóveis pertencentes a incapazes, ou ainda, no curso do inventário para a retirada de valores necessários à administração do espólio antes que se conclua, efetivamente, a partilha. <br><br>

								Neste último caso, há necessidade de preenchimento de três requisitos: anuência de todos os herdeiros, autorização judicial para a efetivação da venda através de alvará judicial e pagamento do imposto correspondente, o chamado ITCMD. <br><br>

								O alvará pode ser solicitado de modo autônomo ou ainda durante o processo de inventário, caso os herdeiros concordem em efetuar a alienação de um determinado bem para obtenção de recursos necessários ao pagamento dos impostos, taxas e demais despesas do processo. <br><br>

								Tal procedimento, também dependerá da avaliação de cada caso e da posição de cada magistrado, havendo aqueles que concedem o alvará e outros que somente concedem em casos extremos, onde a venda imediata visa possibilitar cirurgias ou outros procedimentos urgentes. <br><br>

								Daí a indispensável atuação de um advogado especializado, que possa fundamentar com excelência o pedido nos autos, traduzindo claramente, a necessidade dos herdeiros. <br><br>

								Não menos importante é a utilização do alvará com vistas à regularização imobiliária, vez que, é bastante comum a celebração de compromisso de venda e compra de um determinado imóvel e, antes da outorga da escritura definitiva, o vendedor vir a óbito. <br><br>

								Neste caso, é necessário que o comprador demonstre ao juiz e aos demais herdeiros que todas as parcelas foram honradas, a fim de que obtenha sentença que autorize a transferência da propriedade do imóvel adquirido em seu favor, legitimando, assim, a sua titularidade. <br><br>

								Para todos esses casos, a Marcos Monteiro Sociedade de Advogados possui profissionais preparados a fim de lograr êxito na viabilização do interesse de seu cliente.',
		'MN_TITULO_APIP'  	=> 'Ações possessórias e Imissão na posse',
		'MN_TXT_APIP'  		=> 'Objetivando a proteção da posse para seus clientes, a Marcos Monteiro Sociedade de Advogados tem plena expertise na ajuização das ações de reintegração de posse, manutenção de posse e ainda, interdito proibitório. <br><br>

								Havendo esbulho ou turbação na posse, o proprietário de um imóvel poderá contar com os profissionais que compõem o nosso corpo jurídico a fim de assegurar o seu direito através do ingresso das ações possessórias, as quais são determinadas conforme a gravidade da lesão. <br><br>

								Ação de reintegração de posse: <br><br>

								Necessária no caso da perda total da posse sobre determinado bem imóvel, através de invasão ou mediante violência, cujo objetivo é restituir ao proprietário (autor) a posse sobre o bem. <br><br>

								Ação de manutenção de posse: <br><br>

								Esta ação é cabível para aquele que esteja sofrendo turbação (perturbação), porém, ainda não tenha se operado a perda da posse do bem. <br><br>

								Tal ação visa à manutenção da posse, garantindo ao autor o efetivo exercício desta sem interferência de outrem. <br><br>

								Ação de interdito proibitório: <br><br>

								Sua aplicação se dá quando o possuidor de um bem tem o receio justificado e iminente de que poderá vir a perder a posse por ato de terceiro, inibindo tal ato mediante ordem judicial. <br><br>

								De outra sorte, nossos advogados também estão aptos a promover ações com vistas à Imissão na posse, as quais se dão quando, embora a pessoa tenha um título dominial sobre determinado bem, ainda não possui efetiva posse do mesmo. <br><br>

								Trata-se de ação não possessória fundamentada no direito à posse, sendo que o autor, por intermédio de um advogado, peticiona tal direito, vez que este nunca o exerceu anteriormente. <br><br>

								Os requisitos para a viabilidade da ação de imissão na posse são três: <br><br>

								i. o direito à posse jamais exercida através de um título (contrato particular, escritura publica, etc.); <br><br>

								ii. posse do bem reclamado nas mãos de outra pessoa; <br><br>

								iii. recusa na entrega do bem reclamado pelo detentor; <br><br>

								A ação de imissão na posse é uma ação real e não uma ação pessoal, fundada em direito obrigacional, daí sua natureza executiva. Na imissão não se discute a existência de um direito, pois o direito já é certo, líquido e exigível. O pedido, enfim, é torná-lo efetivo. <br><br>

								Tal ação tem larga aplicação em casos de arrematação de imóveis através de leilão judicial e extrajudicial, bem como pelo adquirente contra o vendedor e também pelo compromissário-comprador perante o promitente-vendedor. ',
		'MN_NOT_POR'  		=> 'Por',
		'MN_NOT_EM'  		=> 'Em',
		'MN_NOT_DESTA'  	=> 'Destaques',
		'MN_NOT_ARQ'  		=> 'Arquivos',
		'MN_NOT_CAT'  		=> 'Categorias',
		'MN_NOT_TAG'  		=> 'Tags',
		'MN_NOT_FONTE'  	=> 'Fonte',
		'MN_NOT_IMPRIMI'  	=> 'Imprimir',
		'MN_NOT_COMP'  		=> 'Compartilhe!',
		'MN_NOT_IND_NOT'  	=> 'Indicar esta notícia',
		'MN_NOT_IND_PUB'  	=> 'Indicar esta publicação',
		'MN_NOT_LEIA_TBM'  	=> 'Leia também',
		'MN_TXT_EMBREVE'  	=> 'Em breve!',
		'MN_PROF' 			=> 'PROFSSIONAIS',
		'MN_TXT_ESCRITORIO' => 'ESCRITÓRIO',
		'MN_LAT_APRESENTA' 	=> 'Apresentação',
		'MN_LAT_MVO'  		=> 'Missão, Valores e Objetivo',
		'MN_LAT_RS'  		=> 'Responsabilidade Social',
		'MN_RESULT_BUSCA'	=> 'Não existe resultado',
	);
}

?>


