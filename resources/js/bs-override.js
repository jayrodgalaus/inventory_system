$(function(){
	/*nav toggle override*/
	$(document).on('click','#nav-menu-toggler',function(e){
		var expanded = $(this).attr('data-open');
		var target = $(this).attr('data-bs-target');
		if(expanded=='true'){
			$(this).attr('data-open','false')
			$(this).attr('aria-expanded','false')
			setTimeout(function(){$(target).collapse('hide');},400)
		}else{
			$(this).attr('data-open','true')
		}
		
	})
});