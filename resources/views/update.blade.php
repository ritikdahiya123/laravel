<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>update user</h1>
    <form action="{{ url('/register/updateuser') . '/' . $customer->id }}" method="post">
    @csrf
  <label for="name">First name:</label><br>
  <input type="text" id="fname" name="name" value="{{$customer->name}}"><br>
  <label for="lname">email:</label><br>
  <input type="email" id="lname" name="email" value="{{$customer->email}}"><br>
  <label for="lname">password:</label><br>
  <input type="password" id="lname" name="password" value="{{$customer->password}}"> 
  <button type="submit">Submit</button>
</form>
</body>
</html>