<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add products</h1>
<form action="{{ route('allproducts') }}"  method="post" id="addProductForm">
    @csrf
  <label for="name">name</label><br>
  <input type="text" id="fname" name="name"><br>
  <label for="price">price:</label><br>
  <input type="number" id="lname" name="price"><br>
  <label for="size">Choose size:</label><br>
<select name="size" id="size">
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
</select>
<label for="color">Color:</label><br>
<input type="radio" id="black" name="color" value="black" />
<label for="black">black:</label><br>
<input type="radio" id="white" name="color" value="white">
<label for="black">white:</label><br>
<input type="radio" id="blue" name="color" value="blue">
  <label for="black">blue:</label><br>
  
  <label for="quantity">quantity:</label>
  <input type="number" id="lname" name="quantity"><br>
  <label for="quantity">status:</label><br>
  <input type="text" id="lname" name="status"><br><br>
  <button type="submit">add product</button>
</form>
</body>
</html>