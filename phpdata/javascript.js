var txt =document.querySelector('div.txt') var wallpaper document.body.style
var font = document.getElementsByClassName('button')
var confirm = 0
function start(){
confirm = 1
txt.innerHTML = 'JOGO INICIADO <br>' wallpaper.background 'rgb(84, 161, 84)'
}
function stop(){
if (confirm == 1) {
txt.innerHTML = 'JOGO PAUSADO
wallpaper.background 'rgb(209, 47, 47)'
} else {
alert ('Jogo não iniciado.") 
}
function selecionar(){ if (confirm -1){ txt.innerHTML JOGO SELECIONADO' wallpaper.background 'gray' alert ('Jogo não iniciado')
} else {
}
}
function fechar(){
if (confirm -- 1){
txt.innerHTML = wallpaper.background - confirm = 0
} else {
alert ('Jogo não iniciado')
}