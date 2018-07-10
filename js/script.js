var parallax = {

    animSpeed: 0.6, 

    doParallax: function(element) {
        var bounding  = element.getBoundingClientRect();
        var offset = element.offsetTop * this.animSpeed;

        if (bounding.y < bounding.height) {

            var windowYOffset = window.pageYOffset;
            var elementBackgrounPos = "50% " + (windowYOffset * this.animSpeed - offset) + "px";
            
            element.style.backgroundPosition = elementBackgrounPos;
            //console.log(element.style.backgroundPosition);
        }
    }
}

var header = document.getElementById('header');

window.addEventListener("scroll", function() {
    parallax.doParallax(header);
});