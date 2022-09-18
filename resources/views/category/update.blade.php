
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
<form method="post" action=" {{ route('category.saveupdate',$category->id ) }}">
    @method('PUT')
    @csrf

		Name of the category:<br>
		<input type="text" name="name" value="{{ $category->name }}">
		<br><br>
		<input type="submit" name="save" value="update your record">
	</form>

</body>
</html>
