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
                    <p>Construir uma plataforma integrada de sites coorporativos, considerando os conceitos de design moderno, integração e redução de custos, foi o que motivou as equipes das empresas Onbyte Tecnologia e Talento Design. Com o conceito de computação em nuvem, foi desenvolvida a plataforma PINGO, Plataforma Integrada de Gerenciamento de Negócios e Oportunidades. Que é capaz de gerenciar sozinha a publicação de conteúdo do site da empresa, redes sócias como facebook, twitter e google+, além de distribuir anúncios em sites parceiros como iPará, OLX e Trovit, aumentando assim as possibilidades de negócios na web.</p>
                    <br/>
                    <p>Conectar o seu negócio na plataforma PINGO significa aumentar a visibilidade do seu produto diminuindo o esforço de publicar nesses múltiplos canais disponíveis na Internet.</p>
                    <a id="pingo_popup" href="images/pingo_zoom.jpg"><img src="<?php servidor(); ?>images/oqe/botao_oqe_off.png" alt="" class="botao"></a>
                </div>
            </div>
            
        </div>
        <div id="pq">
            <div class="centraliza">
                <img src="<?php servidor(); ?>images/pq/title.png" alt="" class="title_pg">
            </div>            
            <div id="texto" class="centraliza">
                
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
                    <!--<ul>
                        <?php $i=0; while ($i<5) { ?>
                        <li>
                            <div class="data">
                                <span>12</span><br>
                                dez
                            </div>
                            <div class="resumo">
                                <span><a href="">Abertura na feira do empreendor foi um sucesso</a></span><br>
                                "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etl....
                            </div>
                        </li>
                        <?php $i++; } ?>
                    </ul>
                    <div id="nav">
                        ◄ <a href="">ANTERIORES&nbsp;</a>&nbsp;
                        <a href="">&nbsp;PRÓXIMAS</a> ►
                    </div>-->
                </div>
                <div id="noticia_area">
                    <?php 
                    $_GET['acao']="noticia";
                    $wp_upado=true;
                    include("noticias.php"); 

                    ?>
                    <!--<div id="noticia">
                        <div id="cabecalho">
                            <div id="data">
                                <span>12</span><br>
                                dez
                            </div>
                            <div id="titulo">
                                Abertura na feira do empreendedor foi um sucesso.
                            </div>
                        </div>
                        <div class="separator"></div>
                        <div id="conteudo">
                            <p> <img src="<?php servidor(); ?>images/teste.jpg" alt=""> </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eros elit, molestie vel posuere fermentum, condimentum nec ante. Pellentesque malesuada cursus mi, et dapibus ipsum molestie ac. Nunc eget sapien velit, ut facilisis orci. Phasellus vel erat nisi. Aenean ipsum nisi, porta vitae rutrum eu, mattis sit amet justo. Nam a lorem lectus, quis suscipit justo. Suspendisse sagittis arcu sed justo malesuada vehicula. In hendrerit malesuada lectus, sit amet interdum sem pulvinar a. Nunc sed odio mauris, quis luctus mi.</p>
                            <p>Phasellus vehicula nisi eget neque consectetur rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis suscipit iaculis ultricies. Duis sodales interdum metus eu scelerisque. Mauris accumsan dictum luctus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dapibus porta sodales. Praesent eros dolor, cursus eget lobortis bibendum, sollicitudin at tortor. Suspendisse potenti. In a magna velit, et venenatis quam. Mauris in tellus at erat mollis mattis sit amet at mauris. Nunc laoreet, orci sit amet tincidunt posuere, risus justo blandit nunc, non aliquet diam libero viverra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam venenatis, purus et mollis elementum, lorem lectus viverra lectus, in iaculis odio sem vel sapien. Donec porta gravida lorem, sed tincidunt odio lobortis eu. Vestibulum rutrum rhoncus magna, ut ullamcorper turpis congue vel.</p>
                            <p>Maecenas eget rhoncus metus. Nullam quis magna nibh. Cras ut porttitor libero. Fusce id lacus mi. Duis bibendum vehicula neque, et vehicula purus tempor tempor. Ut viverra ligula in nibh facilisis eu vulputate turpis ornare. Fusce libero metus, scelerisque gravida tempus vel, auctor nec nulla. Duis sit amet metus lacus, a dictum nulla.</p>
                            <p>Phasellus iaculis tortor at elit laoreet elementum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent pellentesque ipsum at velit sagittis semper. Praesent lobortis dui sit amet tellus volutpat vitae facilisis massa placerat. Nulla vel nibh arcu. Curabitur et pharetra ipsum. Fusce eget euismod nibh. Donec sit amet interdum quam. Nullam eu nulla neque. Quisque porta auctor lacus at fermentum.</p>
                            <p>Aliquam suscipit tincidunt massa, sagittis rutrum leo pulvinar vel. Etiam vel massa sem, sit amet sagittis ante. In hac habitasse platea dictumst. Maecenas aliquet nisl non nunc viverra consequat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam lacinia magna non nunc tincidunt at ornare eros laoreet. Mauris at ultrices enim. Nulla eu quam metus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus a porta risus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin molestie volutpat nibh, ultricies fringilla tellus interdum sit amet. Aenean fermentum pulvinar nisl nec sagittis. Morbi tristique iaculis enim vel eleifend. Suspendisse posuere leo sit amet nibh scelerisque in euismod lacus tempus.</p>
                            <p>Aliquam erat volutpat. Vestibulum dictum tellus sit amet justo convallis ac commodo sapien hendrerit. Sed et rhoncus odio. Donec sed semper felis. Proin orci sem, rutrum eget egestas et, tristique eget neque. Fusce porttitor viverra tortor eu sagittis. Ut malesuada massa vitae lorem faucibus at fermentum nunc eleifend. Sed dignissim quam sed enim consectetur sit amet auctor nisl condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur vel odio in nibh imperdiet eleifend a quis nisl. Pellentesque lacinia sollicitudin ipsum eu blandit. Nunc aliquet lacus sit amet quam commodo bibendum eget sit amet augue. Duis ullamcorper augue et mauris rhoncus id adipiscing arcu hendrerit. Donec id lectus elit, et ultrices metus.</p>
                            <p>Fusce mi mauris, laoreet id facilisis in, ullamcorper et nisl. In pharetra lacinia orci at accumsan. Nunc sagittis, lacus tincidunt lobortis ornare, dolor diam lobortis erat, adipiscing rutrum lectus nisi id eros. Donec semper hendrerit lectus eu tincidunt. Sed quis libero ut urna ultricies sagittis. Praesent id ultrices risus. Integer consectetur rutrum diam at cursus. Aliquam quis sem dui. Aliquam posuere malesuada est ut lacinia. Duis convallis luctus vestibulum. Sed porta consectetur mauris in ultrices. Suspendisse augue justo, aliquet vitae porta nec, posuere vitae turpis.</p>
                            <p>In vitae sem libero. Donec odio diam, molestie sit amet adipiscing a, blandit convallis augue. Vestibulum a nisl eu orci tristique euismod a sit amet purus. Etiam gravida nunc ac lacus suscipit non lacinia orci elementum. Mauris diam justo, vehicula vitae posuere vel, fermentum vel augue. Nullam feugiat est sed lacus eleifend eu sagittis enim malesuada. Maecenas eget massa turpis. Donec sollicitudin, nunc eget laoreet eleifend, nibh sapien consequat lorem, in feugiat sapien sem nec eros. Integer venenatis mi ac neque viverra eget aliquam mi convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam leo nisl, accumsan non molestie in, imperdiet vel nisl.</p>
                        </div>
                    </div>-->                    
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
	            <img src="<?php servidor(); ?>images/parceiros/logo_feiradoempreendedor.png" alt="">
	            <img src="<?php servidor(); ?>images/parceiros/logo_conjove.png" alt="">
	            <img src="<?php servidor(); ?>images/parceiros/logo_acp.jpg" alt="">            
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
    <div id="footer">
    <?php $data=date("Y"); echo $data; ?> <!-- Data Atual -->
    </div>
    <?php include("contato_msg.php"); ?>
  </body>
</html>

