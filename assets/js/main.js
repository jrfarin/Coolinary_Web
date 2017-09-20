
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
