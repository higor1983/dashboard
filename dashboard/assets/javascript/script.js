const btnMobile = document.getElementById('btn-mobile');

btnMobile.addEventListener('click', menuMobile);

function menuMobile(){
    const barraLateral = document.getElementById('menu-lateral');
    barraLateral.classList.toggle('active');
    btnMobile.classList.toggle('inverter');
}

/*
Comando para ativar o Acordion da menu/ link design
*/

const btnAcordionDesign = document.getElementById('btn-acordion-design');

btnAcordionDesign.addEventListener('click', acordionDesign);

function acordionDesign(){

    const acordionDesign = document.getElementById('acordion-design');
    acordionDesign.classList.toggle('acordion-active');
    const styleAcordion = document.getElementById('li-acordion');
    styleAcordion.classList.toggle('li-acordion');
}

