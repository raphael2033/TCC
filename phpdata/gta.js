var txt =document.querySelector('div.txt')
var wallpaper = document.body.style
var font = document.getElementsByClassName('button')
var comfirm = 0

function start (){
			comfirm = 1
			txt.innerHTML = ' JOGO INICIADO <br>'
			wallpaper.background = ' rgb(84, 161, 84)'
			}

Function stop (){ 
		If (comfirm = 1 ) {
		txt.innerHTML = ' JOGO PAUSADO' 
		wallpaper.background = ' rgb(209, 47, 47)'
		}else {
		alert ('Jogo não iniciado')
		}
		function selecionar (){
		if (comfirm = 1){
		txt.innerHTML = ' jogo selecionado'
		wallpaper.background = 'gray'
		} else {
		 alert ('jogo nao iniciado')
		 }