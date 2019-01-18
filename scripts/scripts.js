/* Barre de recherche */

var cpt = 2;

$('#logo').click( function(){
	if(cpt == 2){
		$('#recherche').css('animation','monAnim 1s 1 normal forwards');
		cpt = 3;
	}
	else{
		$('#recherche').css('animation','monAnim2 1s 1 normal forwards');
		cpt = 2;
	}
})

/* Clic sur Je Fonce */

	$("a[href^='#lesDLC']").click(function (e) {
		var 
			yPos,
			yInitPos,
			target = ($($(this).attr("href") + ":first"));
			
		// On annule le comportement initial au cas ou la base soit différente de la page courante.
		e.preventDefault(); 
		
		yInitPos = $(window).scrollTop();
		
		// On ajoute le hash dans l'url.
		window.location.hash = $(this).attr("href");
		
		// Comme il est possible que l'ajout du hash perturbe le défilement, on va forcer le scrollTop à son endroit inital.
		$(window).scrollTop(yInitPos);
		
		// On cible manuellement l'ancre pour en extraire sa position.
		// Si c'est un ID on l'obtient.
		target = ($($(this).attr("href") + ":first"));
 
		// Sinon on cherche l'ancre dans le name d'un a.
		if (target.length == 0) {
			target = ($("a[name=" + $(this).attr("href").replace(/#/gi,"") + "]:first"))
		}
		
		// Si on a trouvé un name ou un id, on défile.
		if (target.length == 1) {
			yPos = target.offset().top; // Position de l'ancre.
		
			// On anime le défilement jusqu'à l'ancre.
			$('html,body').animate({ scrollTop: yPos - 40 }, 1000); // On décale de 40 pixels l'affichage pour ne pas coller le bord haut de l'affichage du navigateur et on défile en 1 seconde jusqu'à l'ancre.
		}
	});



