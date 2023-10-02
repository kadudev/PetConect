function toggleMenu() {
    const menu = document.getElementById('menu');
    const imagem = document.getElementById('imagem');
    const conteudo = document.getElementById('conteudo');
    const header = document.getElementById('header');
    const gato = document.getElementById('gato');
    const footer = document.getElementById('footer');
    

    menu.classList.toggle('menu-aberto');
    imagem.classList.toggle('imagem-deitada');
    conteudo.classList.toggle('conteudo-escondido');
    header.classList.toggle('header-escondido');
    gato.classList.toggle('gato-escondido');
    footer.classList.toggle('footer-escondido');
}

function toggleTipoPet() {
    const selecaopet = document.getElementById('selecaopet');
    selecaopet.style.display = selecaopet.style.display === 'block' ? 'none' : 'block';
}

function toggleCidade(){
    const cidade = document.getElementById('cidade');
    cidade.style.display = cidade.style.display === 'block' ? 'none' : 'block';

}