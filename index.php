<?php include("header.php") ?>
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
        </div>
        <div id="pq">
            <div class="centraliza">
                <img src="<?php servidor(); ?>images/pq/title.png" alt="" class="title_pg">
            </div>
        </div>
        <div id="noticias">
            <div class="centraliza">
                <img src="<?php servidor(); ?>images/noticias/title.png" alt="" class="title_pg">
                <div class="separator"></div>
                <div id="indice">
                    <ul>
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
                    </div>
                </div>
                <div id="noticia">
                    <div id="titulo"></div>
                </div>
                <div class="separator"></div>
            </div>
        </div>
        <div id="parceiros">
            <div class="centraliza">
                <img src="<?php servidor(); ?>images/parceiros/title.png" alt="" class="title_pg">
            </div>
        </div>
        <div id="contato">
            <div class="centraliza">
                <img src="<?php servidor(); ?>images/contato/title.png" alt="" class="title_pg">
            </div>
        </div>
    </div>
    <div id="footer">
    <?php $data=date("Y"); echo $data; ?> <!-- Data Atual -->
    </div>
  </body>
</html>

