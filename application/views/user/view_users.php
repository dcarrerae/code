
<body>
	<div class="content-form">
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
			<input class="btn btn-success" type="submit" value="Agregar">
		</form>
	</div>

	<div class="content-table">
		<table class="table table-bordered">
			<thead>
				<tr>
					<td>Name</td>
					<td>Surname</td>
					<td>Email</td>
					<td>View</td>
					<td>Delete</td>
				</tr>
			</thead>
				<?php foreach ($user_item as $data): ?>
					<tr id="<?php echo $data['id'] ?>"  class="fila">
						<td ><?php echo $data['name']; ?></td>
						<td ><?php echo $data['surname']; ?></td>
						<td ><?php echo $data['email']; ?></td>
						<td><a class="btn btn-info" href="./user/<?php echo $data['id'] ?>">View</a></td>
						<td><button type="button" class="btn btn-warning" id="<?php echo $data['id'] ?>">Delete</button></td>
					</tr>
				<?php endforeach; ?>
		</table>
	</div>
</body>


