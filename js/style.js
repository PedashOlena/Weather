function myFunction() {
	var x = document.getElementById("myTopnav");
	if(x.className === 'topnav'){
		x.className += ' responsive';
	}else{
		x.className = 'topnav';
	}
}



/* NAVIGATION

$(function() {
    var pull = $('#pull');
        menu = $('nav ul');
        menuHeight = menu.height();
    $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
    });
});
 */
