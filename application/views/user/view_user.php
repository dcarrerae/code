
<center><h1><?php echo $title ?></h1></center>
<div class="content-table">
	<table class="table table-bordered">
		<thead>
			<tr>
				<td>ID</td>
				<td>Name</td>
				<td>Surname</td>
				<td>Email</td>
			</tr>
		</thead>
		<?php foreach ($user_item as $data): ?>
			<tr>
				<td><?php echo $data['id']; ?></td>
				<td><?php echo $data['name']; ?></td>
				<td><?php echo $data['surname']; ?></td>
				<td><?php echo $data['email']; ?></td>
			</tr>   
		<?php endforeach; ?>
	</table>
</div>

<center><a class="btn btn-default" href="../user">Back to user list</a></center>