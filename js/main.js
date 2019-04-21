//    
//    
//    document.querySelector('.btn').addEventListener('click',function(){
//        
//        document.querySelector('.nav-list').classList.toggle('active');
//        
//        
//    });
//

$(document).ready(function(){
    new WOW().init();
      AOS.init();
$('.vid').show();
});

function funchange() {

var x = document.querySelector('.icon-menu');

    x.classList.toggle("change");
    
  
}

function nshow(){
    var nav=document.querySelector('.navshow');
    nav.classList.toggle("nshow");
}