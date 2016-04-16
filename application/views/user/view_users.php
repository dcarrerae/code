<h1><?php echo $title; ?></h1>

<head>
	<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
	<style type="text/css">
		table,tr,td{
			border:1px solid black;
		}
	</style>
	<script type="text/javascript">
		$( document ).ready(function() {
			console.log( "<?php echo "$title" ?>" );
			$( ".button" ).click(function() {
				var id = $(this).attr("id");
		  		console.log(id);
		  		$.ajax({
				    url: 'http://localhost/code/index.php/user/'+id, // url del recurso
				    type: "delete", // podría ser get, post, put o delete.
				    data: {}, // datos a pasar al servidor, en caso de necesitarlo
				    success: function (r) {
				        console.log(r);
				        $(".fila"+"#"+id).remove();
				    }
				});
			});
		});

	</script>

</head>
<body>

	<form action="user" method="post">
		First name:<br>
		<input type="text" name="name" required><br>
		Last name:<br>
		<input type="text" name="surname" required><br>
		Email:<br>
		<input type="text" name="email" required>
		<input type="submit" value="Submit">
	</form>


	<table style="border:1px solid black;">
		<thead>
			<tr>
				<td>ID</td>
				<td>Name</td>
				<td>Surname</td>
				<td>Email</td>
				<td>Delete</td>
			</tr>
		</thead>
			<?php foreach ($user_item as $data): ?>
					<tr id="<?php echo $data['id'] ?>"  class="fila">
						<td ><h3><?php echo $data['id']; ?></h3></td> 
						<td ><h3><?php echo $data['name']; ?></h3></td>
						<td ><h3><?php echo $data['surname']; ?></h3></td>
						<td ><h3><?php echo $data['email']; ?></h3></td>
						<td><button type="button" class="button" id="<?php echo $data['id'] ?>">Delete!</button></td>
					</tr>
			<?php endforeach; ?>
	</table>
</body>


