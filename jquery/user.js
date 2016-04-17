$( document ).ready(function() {
	$( ".btn-warning" ).click(function() {
		var id = $(this).attr("id");
  		console.log(id);
		 $.ajax({
		    url: 'http://localhost/code/index.php/user/'+id, 
			type: "delete", 
		    data: {}, 
		    success: function (r) {
			    $(".fila"+"#"+id).remove();
			}
		});
	});
});