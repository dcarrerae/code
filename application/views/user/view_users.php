

<head>
	<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

	<script type="text/javascript">
		$( document ).ready(function() {
			$( ".btn" ).click(function() {
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

	</script>

</head>
<body>
	<div style="width:300px;margin:0 auto;">
		<form action="user" method="post" >
			<div class="form-group">
		    	<label for="exampleInputEmail1">First Name</label>
		    	<input type="text" name="name" class="form-control" placeholder="Name" required>
		  	</div>
			<div class="form-group">
		    	<label for="exampleInputEmail1">Last Name</label>
		    	<input type="text" name="surname" class="form-control" placeholder="Surname" required>
		  	</div>
			<div class="form-group">
		    	<label for="exampleInputEmail1">Email</label>
		    	<input type="text" name="email" class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
		  	</div>
			<input class="btn btn-default" type="submit" value="Agregar">
		</form>
	</div>

	<div style="width:60%;margin:0 auto;">
	<table class="table table-bordered">
		<thead>
			<tr>
				<!-- <td>ID</td> -->
				<td>Name</td>
				<td>Surname</td>
				<td>Email</td>
				<td>View</td>
				<td>Delete</td>
			</tr>
		</thead>
			<?php foreach ($user_item as $data): ?>
				<tr id="<?php echo $data['id'] ?>"  class="fila">
					<!-- <td ><?php echo $data['id']; ?></td>  -->
					<td ><?php echo $data['name']; ?></td>
					<td ><?php echo $data['surname']; ?></td>
					<td ><?php echo $data['email']; ?></td>
					<td><a class="btn btn-default" href="./user/<?php echo $data['id'] ?>">View</a></td>
					<td><button type="button" class="btn btn-default" id="<?php echo $data['id'] ?>">Delete</button></td>
				</tr>
			<?php endforeach; ?>
	</table>
	</div>
</body>


