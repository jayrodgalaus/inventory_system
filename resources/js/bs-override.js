$(function(){
	/*nav toggle override*/
	$(document).on('click','#nav-menu-toggler',function(e){
		var expanded = $(this).attr('data-open');
		var target = $(this).attr('data-bs-target');
		if(expanded=='true'){
			$(this).attr('data-open','false');
			$(this).attr('aria-expanded','false');
			$('nav.navbar').addClass('pb-4');
			setTimeout(function(){
				$(target).collapse('hide');
				$('nav.navbar').removeClass('pb-4');
			},400)
		}else{
			$(this).attr('data-open','true')
		}
		
	})
	// .on('click','.dropdown-toggle',function(){
	// 	var expanded = $(this).attr('aria-expanded');
	// 	var dropID = $(this).attr('id');
	// 	var target = $(".dropdown-menu [aria-labelledby="+dropID+"]");
	// 	if(expanded=='true'){
	// 		// $(this).attr('data-open','false')
	// 		$(this).attr('aria-expanded','false')
	// 		$(target).collapse('hide');
	// 		// setTimeout(function(){$(target).collapse('hide');},400)
	// 	}else{
	// 		$(this).attr('aria-expanded','true');
	// 		$(target).collapse('show');
	// 	}
	// })
});