<head>
	<style type="text/css">
		table,tr,td{
			border:1px solid black;
		}
	</style>
</head>

<h1><?php echo $title ?></h1>

<!-- <table style="border:1px solid black;"> -->
	<table style="border:1px solid black;">
	<thead>
		<tr>
			<!-- <td>ID</td> -->
			<td>Name</td>
			<td>Surname</td>
			<td>Email</td>
		</tr>
	</thead>
<?php foreach ($user_item as $data): ?>
		<tr >
			<td ><h3><?php echo $data['name']; ?></h3></td>
			<td ><h3><?php echo $data['surname']; ?></h3></td>
			<td ><h3><?php echo $data['email']; ?></h3></td>
		</tr>
	
       
<?php endforeach; ?>

</table>