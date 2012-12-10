                    
<?php
if(!isset($core_upado)){
    include("core.php");
}
if(!isset($wp_upado)){
    wp_funcoes();
}

$acao=$_GET['acao'];

if ($acao=='noticia') {
    if(!isset($_GET['id'])){
        $id="";
    }
    else{
        $id=$_GET['id'];
    }
    
    if ($id=="") {
        $query=array( 'posts_per_page'=> 1, 'paged' => 1 );
    } else {
        $query="p=".$id;
    }

    query_posts($query);
    while (have_posts()): the_post();
?>
<div id="noticia">
    <div id="cabecalho">
        <div id="data">
            <span><?php echo get_the_date('d'); ?></span><br>
            <?php echo get_the_date('M'); ?>
        </div>
        <div id="titulo">
            <?php the_title(); ?>
        </div>
    </div>
    <div class="separator"></div>
    <div id="conteudo">
        <?php the_content(); ?>
    </div>
</div> 
<?php 
    endwhile;
} 
if ($acao=="lista") {
    function limit_words($string, $word_limit) {
 
    // creates an array of words from $string (this will be our excerpt)
    // explode divides the excerpt up by using a space character
 
    $words = explode(' ', $string);
 
    // this next bit chops the $words array and sticks it back together
    // starting at the first word '0' and ending at the $word_limit
    // the $word_limit which is passed in the function will be the number
    // of words we want to use
    // implode glues the chopped up array back together using a space character
 
    return implode(' ', array_slice($words, 0, $word_limit));
}
    $pg=$_GET['pg'];
//Descobrindo o numero de posts
$numposts = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->posts WHERE post_status = 'publish'");
if (0 < $numposts) $numposts = number_format($numposts); 

$paginacao = new Paginacao;          //Criando Objeto para paginação, em seguida instanciamos...
$paginacao->set_numposts($numposts); //... o número total de posts.
$paginacao->set_porpg(5);            //... o número de posts por página.
$paginacao->set_pg_atual($pg);   //... a pagina atual.

    query_posts( array( 'posts_per_page'=> 5, 'paged' => $pg ) );
    
?>
<ul>
    <?php while(have_posts()):the_post(); ?>
    <li>
        <div class="data">
            <span><?php echo get_the_date('d'); ?></span><br>
            <?php echo get_the_date('M'); ?>
        </div>
        <div class="resumo">
            <span><a href="<?php the_ID(); ?>"><?php the_title(); ?></a></span><br>
            <?php echo limit_words(get_the_excerpt(), '20'); ?>...
        </div>
    </li>
    <?php endwhile; ?>
</ul>
<div id="nav">
    <?php if($paginacao->has_anterior()){ ?>
    ◄ <a href="<?php $paginacao->antpg(); ?>">ANTERIORES&nbsp;</a>&nbsp;
    <?php } if($paginacao->has_proximo()){ ?>
    <a href="<?php $paginacao->proxpg(); ?>">&nbsp;PRÓXIMAS</a> ►
    <?php } ?>
</div>
<?php } ?>