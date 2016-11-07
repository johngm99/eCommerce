function informatica(){
	$('.list-group').html('<a href="#" class="list-group-item" onclick="show_computadores()">Computadores</a>'+
			'<a href="#" class="list-group-item" onclick="show_printers()">Impressoras</a>'+
			'<a href="#" class="list-group-item">Monitores</a>'+
			'<a href="#" class="list-group-item">Notebooks</a>'+
			'<a href="#" class="list-group-item">Scanners</a>'+
			'<a href="#" class="list-group-item">Software</a>'+
			'<a href="#" class="list-group-item">Tablet</a>'+
			'<a href="index.html" class="list-group-item">Voltar</a>'
	).value();
}

function hardware(){
	$('.list-group').html('<a href="#" class="list-group-item">Controladoras</a>'+
			'<a href="#" class="list-group-item">Cooler</a>'+
			'<a href="#" class="list-group-item">Disco Rígido(HD)</a>'+
			'<a href="#" class="list-group-item">Drivers</a>'+
			'<a href="index.html" class="list-group-item">Voltar</a>'
	).value();
}


//So funciona a primeira necessario verificar 
function show_computadores(){
	$('#vitrine').html($(produto_estrutura('Informatica/Computadores/centrium_fastline', 'R$ 1.452,90', 'Centrium Fastline', 'Computador Centrium Fastline Intel Core I3-6100 Skylake 3.7Ghz, 4GB, HD 500GB, Linux - 314938'))).value();
	$('#vitrine').html($(produto_estrutura('Informatica/Computadores/daten_intel', 'R$ 649,90', 'Daten Intel', 'Computador Daten Intel Celeron,Dual Core J1800, 4GB, HD 500GB, DVD-RW, Lin'))).value();
	$('#vitrine').html($(produto_estrutura('Informatica/Computadores/hp_cm', '849,90', 'Daten HP CM', 'Computador HP CM 200 G1 ST Celeron 4GB 500 FreeDos P5V36LT#AC4'))).value();

}


//Estrutura basica da caixa do produto//
function produto_estrutura(img, preco, nome, descricao){
	var estrutura = '<div class="col-sm-4 col-lg-4 col-md-4">'+
	'<div class="thumbnail">'+
	'<img class="thumbnail" src="imagens/' + img + '.jpg" alt="">'+
	'<div class="caption">'+
	'<h4 class="pull-right">'+ preco +'</h4>'+
	'<h4><a href="#">'+ nome +'</a></h4>'+
	'<p>'+ descricao +'</p></div></div></div>';
	return estrutura;
}
	