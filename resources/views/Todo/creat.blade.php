<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="{{action('TodoController@store')}}" method="post">
	 @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                 {{ csrf_field() }}
	<center><table>
		<tr>
	<td><label>Product Name:</label></td>
	<td><input type="text" name="product_name"></td>
</tr>
<br><br>
	<tr>
		<td><label>Price($):</label></td>
		<td><input type="text" name="Price"></td>
	</tr>
	<br><br>
	<tr><td colspan="2"><center><input type="submit" value="send"></center></td></tr>
</table></center>
</form>
</body>
</html>