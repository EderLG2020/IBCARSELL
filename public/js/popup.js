var btnRegistroBasico = document.getElementById('btnRegbasic'),btnRegistroMedium= document.getElementById('btnRegMedium'), btnRegistroPremium=document.getElementById('btnRegPremium'),
overlay=document.getElementById('overlay'),
popup= document.getElementById('popup');
cerrarpopup= document.getElementById('button-cerrar-popup');

btnRegistroBasico.addEventListener('click',function(){
    overlay.classList.add('active');
    popup.classList.add('active');
});
btnRegistroMedium.addEventListener('click',function(){
    overlay.classList.add('active');
    popup.classList.add('active');
});
btnRegistroPremium.addEventListener('click',function(){
    overlay.classList.add('active');
    popup.classList.add('active');
});
cerrarpopup.addEventListener('click',function(){
    overlay.classList.remove('active');
    popup.classList.remove('active');
})