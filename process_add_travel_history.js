$(document).ready(function(){ 	
	$("button#submit").click(function(){
		$.ajax({
			type: "POST",
			url: "index.php",
			data: $('form.travel_history_form').serialize(),
			success: function(data){
				$("#travel_history_btn").html(message)
				$("#travel_history_list").modal('hide'); 
			},
			error: function(){
				alert("Error");
			}
		});
	});
	
});
