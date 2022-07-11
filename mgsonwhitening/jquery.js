$(document).ready(function() {
	$("#country").on('change', function(){
		var countryID = $(this).val();
		$.ajax({
			method: "POST",
			url: "ajax.php",
			data: {id:countryID},
			dataType: "html",
			success: function(data){
				$("#city").html(data);
			}
		});
	});
});