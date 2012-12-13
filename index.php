<?php include("header.php"); ?>
    <title>Sites Conectados</title>
  </head>
  <body>
    <div id="header">
        <div id="logo"></div>
        <img src="<?php servidor(); ?>images/topo_infinito.jpg" id="infinito" alt="">
        <div id="menu">
            <ul class="centraliza">
                <li><a href="#oqe"><img src="<?php servidor(); ?>images/menu/1_off.png" alt="" class="botao"></a></li>
                <li>|</li>
                <li><a href="#pq"><img src="<?php servidor(); ?>images/menu/2_off.png" alt="" class="botao"></a></li>
                <li>|</li>
                <li><a href="#noticias"><img src="<?php servidor(); ?>images/menu/3_off.png" alt="" class="botao"></a></li>
                <li>|</li>
                <li><a href="#parceiros"><img src="<?php servidor(); ?>images/menu/4_off.png" alt="" class="botao"></a></li>
                <li>|</li>
                <li><a href="#contato"><img src="<?php servidor(); ?>images/menu/5_off.png" alt="" class="botao"></a></li>
            </ul>            
        </div>
    </div>
    <div id="content">
        <div id="oqe">
            <div class="centraliza">
                <img src="<?php servidor(); ?>images/oqe/title.png" alt="" class="title_pg">
            </div>
            <div id="conteudo" class="centraliza">
                <div id="sub_titulo">
                    <img src="<?php servidor(); ?>images/oqe/sub_title.png" alt="">
                </div>
                <div id="text_oqe">
                    <p>Construir uma plataforma integrada de sites corporativos, considerando os conceitos de design moderno e integração e redução de custos, foi o que motivou as equipes das empresas Onbyte Tecnologia e Talento Design. Com o conceito de computação em nuvem, foi desenvolvida a plataforma PINGO, Plataforma Integrada de Gerenciamento de Negócios e Oportunidades. Essa ferramenta é capaz de gerenciar sozinha a publicação de conteúdo do site da empresa, redes sociais como Facebook, Twitter e Google+, além de distribuir anúncios em sites parceiros como iPará, OLX e Trovit, aumentando assim as possibilidades de negócios na web.</p>
                    <br/>
                    <p>Conectar o seu negócio na plataforma PINGO significa aumentar a visibilidade do seu produto diminuindo o esforço de publicar nesses múltiplos canais disponíveis na Internet.</p>
                    <a class="pingo_popup" href="images/pingo_zoom.jpg" rel="gallery1">
                        <img src="<?php servidor(); ?>images/oqe/botao_oqe_off.png" alt="" class="botao">
                    </a>
                    <a class="pingo_popup"  href="images/pingo2.jpg" rel="gallery1"></a>
                </div>
            </div>
        </div>
        <div id="pq">
            <div class="centraliza">
                <img src="<?php servidor(); ?>images/pq/title.png" alt="" class="title_pg">
            </div>            
            <div id="texto" class="centraliza">
                <img src="images/pq/antes.png" alt="">
                <img src="images/pq/depois.png" alt="">
            </div>
        </div>
        <div id="noticias">
            <div class="centraliza">
                <img src="<?php servidor(); ?>images/noticias/title.png" alt="" class="title_pg">
                <div class="separator"></div>
                <div id="indice">

                    <?php 
                    $_GET['acao']="lista";
                    $_GET['pg']=1;
                    include("noticias.php"); 

                    ?>
                </div>
                <div id="noticia_area">
                    <?php 
                    $_GET['acao']="noticia";
                    $wp_upado=true;
                    include("noticias.php"); 

                    ?>
                                   
                </div>
                <div class="separator"></div>
            </div>
        </div>
        <div id="parceiros">
            <div class="centraliza">
                <img src="<?php servidor(); ?>images/parceiros/title.png" alt="" class="title_pg">
            </div>
            <div id="sub_parceiros" class="centraliza">
            	<p>Conheça alguns de nossos parceiros.</p> 
            </div>     
            
            <div id="conteudo_parceiros" class="centraliza">            
	            <img src="<?php servidor(); ?>images/parceiros/logo_homeplug.png" alt=""><br/>
	            <img src="<?php servidor(); ?>images/parceiros/logo_feiradoempreendedor.png" alt="" id="logo">
	            <img src="<?php servidor(); ?>images/parceiros/logo_conjove.png" alt="" id="conjove">
	            <img src="<?php servidor(); ?>images/parceiros/logo_acp.jpg" alt="" id="logo">            
            </div>
        </div>
        <div id="contato">
            <div class="centraliza">
                <img src="<?php servidor(); ?>images/contato/title.png" alt="" class="title_pg">
            </div>
            <div id="sub_contato" class="centraliza">
	            <p>Se você quer saber mais sobre como fazer negócio pela web.</p>
				<p>Entre em contato conosco preenchendo o formulário abaixo.</p><br/>
            </div>
            
            <div id="formulario" class="centraliza">
            <form action="">
            	<label for=""><img src="<?php servidor(); ?>images/contato/nome.png" alt=""></label><br>
                <input type="text" name="" id="nome"><br>
                
                <label for=""><img src="<?php servidor(); ?>images/contato/empresa.png" alt=""></label><br>
                <input type="text" name="" id="empresa"><br>
                
                <label for=""><img src="<?php servidor(); ?>images/contato/email.png" alt=""></label><br>
                <input type="text" name="" id="email"><br>
                
                <label for=""><img src="<?php servidor(); ?>images/contato/mensagem.png" alt=""></label><br>
                <textarea name="" id="mens" cols="30" rows="10"></textarea><br>
                
                <input type="image" src="<?php servidor(); ?>images/contato/enviar_off.png" alt="" class="botao" id="cont_bt">
            </form>
            
            </div>
        </div>
    </div>
    <a href="#header" id="voltar"><img src="images/topo.png" alt=""></a>
    <?php include("contato_msg.php"); ?>
  </body>
</html>

