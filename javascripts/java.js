$(document).ready(function(){
	$('.botao').not(".current").hover(
		function(){
			var end= $(this).attr('src');
			var hov = end.replace('_off.','_on.');
			$(this).attr('src', hov);
			},
		function(){
			var end= $(this).attr('src');
			var hov = end.replace('_on.','_off.');
			$(this).attr('src', hov);
			}		  
	);
	$(".current").each(function(){
		var end2= $(this).attr('src');
		var hov2 = end2.replace('_off.','_on.');
		$(this).attr('src', hov2);
		
		});
		
	/*---------------TWITTER-------------------*/

	$("#twits").tweet();
		
		
	/* ------------ CONTATO  AJAX ---------------------*/
	$("#contato_enviando").on('hidden',function(){
			$("#contato_enviando p").html('<center><img src="images/loading2.gif" alt=""></center>');
			$("#contato_enviando h3").html('Enviando sua mensagem...');
		});
	var some=function(){$('#contato_enviando').modal('hide')};
	
	$("#cont_bt").click(function(){
		var nome=$("#nome").val();
		var email=$("#email").val();
		var tel=$("#tel").val();
		var mens=$("#mens").val();
		var dados="nome="+nome+"&email="+email+"&tel="+tel+"&mens="+mens;
		if(nome =='' || email =='' || tel =='' || mens==''){
			$('#contato_vazio').modal("show");
			}
		else{
			$('#contato_enviando').modal({backdrop:"static"});
			$('#contato_enviando').modal("show");
			$.ajax({
				type: "POST",
				url: "../mail_contato.php",
				data: dados,
				cache: false,
				success: function(){
					$("#contato_enviando p").html('<center><img src="../images/email-send-icon.png" alt=""></center>').find('center').hide().fadeIn("slow");
					$("#contato_enviando h3").html('Mensagem Enviada');
					$("input:text, textarea").val("");
					setTimeout(some,2000);
				}
				
				});
		}
		return false;
		});
	
	/* ------------ SLIDE JCYCLE ---------------------*/	
	$("#slider").cycle({fx:"fade"});
	
	/*------------- SLIDE TO ------------------------*/
	$("#header ul li a").click(function(){
			var destino= $(this).attr("href");
			$(destino).slideto({highlight: false});		
			return false
			});
	
	/*--------- Navegação Noticias AJAX ------------*/
	var link_indice=function(){
		$("#indice li a").click(function(){
		$("body").css("cursor","wait");
		$("#indice li a").css("cursor","wait");
		var id=$(this).attr("href");
		$('#noticia_area').load('noticias.php?acao=noticia&id='+id,function(){
			$('#noticia').jScrollPane();
			$("body").css("cursor","auto");
			$("#indice li a").css("cursor","auto");
			});
		return false;	
		});};
	setTimeout(link_indice,100);
	
});
$(window).load(function(){
	$('#noticia').jScrollPane();
});