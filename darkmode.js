function toggleTheme() {  
    // Alterna a classe 'dark-mode' no corpo  
    document.body.classList.toggle('dark-mode');  

    // Aplica a classe 'dark-mode' a outros elementos conforme necessário  
    document.querySelectorAll('.banner, nav, footer, .links2, article, .caixa1, aside, .sitemex').forEach(function(element) {  
        element.classList.toggle('dark-mode');  
    });  

    // Salva a preferência do tema no localStorage  
    if (document.body.classList.contains('dark-mode')) {  
        localStorage.setItem('theme', 'dark');  
    } else {  
        localStorage.setItem('theme', 'light');  
    }  
}  

// Verifica a preferência de tema ao carregar a página  
window.onload = function() {  
    const savedTheme = localStorage.getItem('theme');  
    if (savedTheme === 'dark') {  
        document.body.classList.add('dark-mode');  
        // Aplica 'dark-mode' no resto  
        document.querySelectorAll('.banner, nav, footer, .links2, article, .caixa1, aside, .sitemex').forEach(function(element) {  
            element.classList.add('dark-mode');  
        });  
    }  
}  