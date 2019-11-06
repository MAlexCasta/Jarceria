/**
 * Created by reviv on 10/10/2019.
 */

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.carousel');
    var instances = M.Carousel.init(elems);
});

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.carousel');
    var carouselOptions={
        'indicators':true,
        'fullWidth':true
    };
    var instances = M.Carousel.init(elems, carouselOptions);
});

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
});