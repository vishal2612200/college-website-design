$(document).ready(function(){
	$('.single-service-content').hover(function(){},function(){
		$(this).children("p.text").addClass('hidden')
		$(this).children('p').find('a.read-more').removeClass('hidden')
		
	})
	$('.read-more').click(function(){
		console.log('here')
		$(this).addClass('hidden')
		$(this).parent().next().removeClass('hidden')
	})
})