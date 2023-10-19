function setDark(){
    let dark = document.getElementById('mode');
    dark.classList.toggle('dark');
}

const img1 = document.getElementById('img1');
const img2 = document.getElementById('img2');
const img3 = document.getElementById('img3');
const img4 = document.getElementById('img4');
const img5 = document.getElementById('img5');
const img6 = document.getElementById('img6');

function trans() {
    img1.style.transition = 'all 400ms ease';
    img1.style.transform = 'scale(0.80)';
    img2.style.transition = 'all 400ms ease';
    img2.style.transform = 'scale(0.80)';
    img3.style.transition = 'all 400ms ease';
    img3.style.transform = 'scale(0.80)';
    img4.style.transition = 'all 400ms ease';
    img4.style.transform = 'scale(0.80)';
    img5.style.transition = 'all 400ms ease';
    img5.style.transform = 'scale(0.80)';
    img6.style.transition = 'all 400ms ease';
    img6.style.transform = 'scale(0.80)';
    
    
    img1.removeEventListener('click', trans);
    img2.removeEventListener('click', trans);
    img3.removeEventListener('click', trans);
    img4.removeEventListener('click', trans);
    img5.removeEventListener('click', trans);
    img6.removeEventListener('click', trans);
    
    img1.addEventListener('transitionend', function() {
        img1.style.transition = 'all 400ms ease';
        img1.style.transform = 'scale(1)';
    
        img1.addEventListener('click', trans);
    });
    img2.addEventListener('transitionend', function() {
        img2.style.transition = 'all 400ms ease';
        img2.style.transform = 'scale(1)';
        
        img2.addEventListener('click', trans);
    });
    img3.addEventListener('transitionend', function() {
        img3.style.transition = 'all 400ms ease';
        img3.style.transform = 'scale(1)';
        
        img3.addEventListener('click', trans);
    });
    img4.addEventListener('transitionend', function() {
        img4.style.transition = 'all 400ms ease';
        img4.style.transform = 'scale(1)';
        
        img4.addEventListener('click', trans);
    });
    img5.addEventListener('transitionend', function() {
        img5.style.transition = 'all 400ms ease';
        img5.style.transform = 'scale(1)';
        
        img5.addEventListener('click', trans);
    });
    img6.addEventListener('transitionend', function() {
        img6.style.transition = 'all 400ms ease';
        img6.style.transform = 'scale(1)';
        
        img6.addEventListener('click', trans);
    });
}

img1.addEventListener('click', trans);
img2.addEventListener('click', trans);
img3.addEventListener('click', trans);
img4.addEventListener('click', trans);
img5.addEventListener('click', trans);
img6.addEventListener('click', trans);






