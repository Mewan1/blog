<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Wel Come</h1>
<table border="1">

	<tr>
	<td>Product name</td>
	<td>Price</td>
	<td>Action</td>
	</tr>
	@foreach($result as $list)
	<tr>
		<td>{{$list->p_name}}</td>
		<td>{{$list->price}}</td>
	<td><a href="<?php echo 'Todo-update/'. $list->id; ?>" >Edit </a>
		<a href="<?php echo 'delete/'. $list->id; ?>" >Delete </a></td></tr>
	@endforeach

	

</table>
</body>
</html>