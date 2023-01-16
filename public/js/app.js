const d = document,
      $categorias = d.getElementById('categorias'),
      $a = $categorias.querySelectorAll('.contenedor .etiquetas');
      console.log($categorias);
      

d.addEventListener('mousemove', e =>{

   if (e.target.matches('.etiquetas') || e.target.matches('.etiquetas *')){
      //console.log(e.target);
      $a.forEach(res => {
         res.style.transition = "all .8s ease";
         res.style.transform = "rotate(-10deg)";
         

      });
   }
});

d.addEventListener('mouseout', e =>{
   
   if (e.target.matches('.etiquetas' || '.etiquetas *')){
      console.log(e.target);
      $a.forEach(res => {
         res.style.transform = "rotate(0deg)";
         //res.style.transition = ".8 ease-out";

      });
   }
});