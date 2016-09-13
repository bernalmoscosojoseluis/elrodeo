$(function(){
		$('#modalButton').click(function(){	
				$('#modal').modal('show')
					.find('#modalContent')
					.load($(this).attr('value'));
		});
	});

$(function(){
	$('#modalButton1').click(function(){
		$('#modal1').modal('show')
			.find('#modalContent1')
			.load($(this).attr('value'));
	});
});

$(function(){
	$('#modalButton2').click(function(){
		$('#modal2').modal('show')
			.find('#modalContent2')
			.load($(this).attr('value'));
	});
});

$(function(){
		$('#modala').click(function(){
				$('#modala').modal('show')
					.find('#modalContentido')
					.load($(this).attr('value'));
		});
	});