<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>user registration</h1>
<form action="{{ route('user') }}" enctype='multipart/form-data' method="post" id="addProductForm">
    @csrf
  <label for="name">First name:</label><br>
  <input type="text" id="fname" name="name"><br>
  <label for="lname">email:</label><br>
  <input type="email" id="lname" name="email"><br>
  <label for="lname">password:</label><br>
  <input type="password" id="lname" name="password"> <br>
  <label for="lname">choose image:</label><br>
  <input type="file" id="lname" name="image"> <br>

  <button type="submit">Submit</button>
</form>
</body>
</html>