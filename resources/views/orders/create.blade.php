<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
<form method="post" action="{{ route('orders.store') }}">
	@csrf
		Order's Price:<br>
		<input type="number" name="Total_Price"> <br><br>
		the user's ID ordered:<br>
		<input type="number" name="user_id">
		<br><br>
		<input type="submit" name="save" value="submit your record">
	</form>

</body>
</html>