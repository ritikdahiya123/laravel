<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
</head>
<body>
    <h1>Update Product</h1>
    <form action="{{ url('/updateproducts') . '/' . $products->id }}" method="post" id="updateProductForm">
        @csrf
        @method('PATCH') {{-- Use this for Laravel to recognize it as a PATCH request --}}
        <label for="name">Name:</label><br>
        <input type="text" id="fname" name="name" value="{{ $products->name }}"><br>

        <label for="price">Price:</label><br>
        <input type="number" id="lname" name="price" value="{{ $products->price }}"><br>

        <label for="size">Choose size:</label><br>
        <select name="size" id="size">
            <option value="5" {{ $products->size == 5 ? 'selected' : '' }}>5</option>
            <option value="6" {{ $products->size == 6 ? 'selected' : '' }}>6</option>
            <option value="7" {{ $products->size == 7 ? 'selected' : '' }}>7</option>
            <option value="8" {{ $products->size == 8 ? 'selected' : '' }}>8</option>
        </select><br>

        <label>Color:</label><br>
        <input type="radio" id="black" name="color" value="black" {{ $products->color == 'black' ? 'checked' : '' }}>
        <label for="black">Black</label><br>

        <input type="radio" id="white" name="color" value="white" {{ $products->color == 'white' ? 'checked' : '' }}>
        <label for="white">White</label><br>

        <input type="radio" id="blue" name="color" value="blue" {{ $products->color == 'blue' ? 'checked' : '' }}>
        <label for="blue">Blue</label><br>

        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" value="{{ $products->quantity }}"><br>

        <label for="status">Status:</label><br>
        <input type="text" id="status" name="status" value="{{ $products->status }}"><br><br>

        <button type="submit">Update Product</button>
    </form>
</body>
</html>
