<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add new department</title>
</head>
<body>
<form action="/department/create" method="post" enctype="multipart/form-data">
    @csrf
    <label for="name">Department Name::</label><br>
    <input type="text" name="name"><p><p>
    <label for="sname">Department Short Name::</label><br>
    <input type="text" name="sname"><p><p>
    <input type="submit" value="Save Department">
</form>
</body>
</html>
