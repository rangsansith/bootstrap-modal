$(document).ready(function() {

	$('form').submit(function(e) {
		e.preventDefault();

		var data = $(this).serializeArray();
		data.push({name: 'tag', value: 'login'});

		$.ajax({
			url: 'procesa.php',
			type: 'post',
			dataType: 'json',
			data: data,
			beforeSend: function() {
				$('.fa').css('display','inline');
			}
		})
		.done(function() {  //true
			$('span').html("Correcto");
		})
		.fail(function() {  //false
			$('span').html("Falso");
		})
		.always(function() {
			var $jQuery=window.parent.$;
			$jQuery('body').find('.close').trigger('click');
			setTimeout(function() {

				$('.fa').hide();

			}, 1000);
		});
		
	})
})