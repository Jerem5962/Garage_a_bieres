console.log('coucou')
$(function(){
    $(window).scroll(
        function () {//Au scroll dans la fenetre on déclenche la fonction
            if ($(this).scrollTop() > 300) { //si on a défini de plus de 300 px du haut vers le bas
                $('#navigation').addClass("navigation"); //on ajoute la classe "navigation" à <div id="navigation">
            } else {
                $('#navigation').removeClass("navigation");//sinon on retire la classe "navigation" à <div id="navigation">
            }
            if ($(this).scrollTop() > 280) { //si on a défini de plus de 300 px du haut vers le bas
                $('#connexion').addClass("innav"); //on ajoute la classe "navigation" à <div id="navigation">
            } else {
                $('#connexion').removeClass("innav");//sinon on retire la classe "navigation" à <div id="navigation">
            }
        }
    );
});
