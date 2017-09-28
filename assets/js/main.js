
// Disabled Links
var x = document.querySelectorAll('a.disabled');
var i = 0;
for( i = 0; i < x.length; i++) {
    x[i].addEventListener('click', function(e){
        e.preventDefault();
    })
};

var x = document.querySelectorAll('a.home-disabled');
var i = 0;
for( i = 0; i < x.length; i++) {
    x[i].addEventListener('click', function(e){
        e.preventDefault();
    })
};

var x = document.querySelectorAll('a.recetas-disabled');
var i = 0;
for( i = 0; i < x.length; i++) {
    x[i].addEventListener('click', function(e){
        e.preventDefault();
    })
};


// Contact-Form
$(document).ready(function(){
      $("#contact-form").submit(function( event ){
       event.preventDefault();

       $.ajax({
           type: 'POST',
           url: '../mail/contact-form.php',
           data: $(this).serialize(),
           success: function(data){
               $("#respuesta").slideDown();
               $("#respuesta").html(data);
               $('#respuesta2').modal('show');
               document.getElementById('contact-form').reset();
           }
       });

       return false;
   });
});
