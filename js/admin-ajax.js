$ = jQuery.noConflict();

$(document).ready(function(){
	//get URL Ajax php
	//console.log(url_eliminar.ajaxurl);

	$('.delete-bookings'). on('click', function(e){
		e.preventDefault();

		var id = $(this).attr('data-reservations');
		
		$.ajax ({
			type: 'post',
			data: {

				'action' : 'adminondemand_delete',
				'id' : id,
				'tipo': 'eliminar'


			},
			url: url_eliminar.ajaxurl,
			success: function(data){

				console.log(data);

			}

		});

	});

});