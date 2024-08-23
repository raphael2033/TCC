var txt =document.querySelector('div.txt')
var wallpaper = document.body.style
var font = document.getElementsByClassname('button')
var confirm = 0

function start(){
    confirm = 1
    txt.innerhtml = 'JOGO INICIADO <br>'
    wallpaper.background = 'rgb(84, 161, 84)'
}

function stop(){
if (confirm == 1){
    txt.innerHTML = 'JOGO PAUSADO'
    wallpaper.background = 'rgb(209, 47, 47)'
} else {
    alert ('JOGO NAO INICIADO')
}
}

function selecionar(){
if (confirm ==1){
txt.innerHTML = 'JOGO SELECIONADO'
wallpaper.background = 'GRAY'
} else {
    alert ('JOGO NAO INICIADO')
}
}

function fechar(){
    if (confirm == 1){
        txt.innerHTML = 'SAIR'
        wallpaper.background = 'red'
        confirm = 0
    } else {
        alert('JOGO NAO INICIADO')
    }
}