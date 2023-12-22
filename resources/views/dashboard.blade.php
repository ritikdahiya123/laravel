<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brother innvovation</title>
    <link href="{{ asset('assets/css/index.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></link>

</head>
<style>
#updateproductForm{
    display:none;
}
</style>
<body>
<!--====== Header Section Start ======-->
<header>
    <nav class="navigation">

        <!-- Logo -->
        <div class="logo">
            <img src="{{ asset('image/logo.png') }}" alt="Brother Innovation">
        </div>

        <!-- Navigation -->
        <ul class="menu-list">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#portfolio">Project</a></li>
            <li><a href="#">Contact</a></li>
        </ul>

        <div class="humbarger">
            <div class="bar"></div>
            <div class="bar2 bar"></div>
            <div class="bar"></div>
        </div>
    </nav>
    <div id="updateproductForm">
        <!-- Your form HTML goes here -->
        <form method="post">
            @csrf
            <!-- Form fields go here -->
            <input type="number" name="id" placeholder="Product id">
            <input type="submit" value="update Product">
            
        </form>
       
    </div>

  <!-- resources/views/products/index.blade.php -->
    <!-- Button to trigger the popup form -->

    <!-- Popup form -->
    <div id="productForm" >
        <!-- Your form HTML goes here -->
        <form method="post">
            @csrf
            <!-- Form fields go here -->
            <label for="cars">Choose id to edit product:</label>
            <select name="product" id="product">
    @foreach($products as $key)
        <option value="{{ $key->id }}">{{ $key->id }}</option>
    @endforeach
 </select>
  <input type="submit" value="edit Product">
            
        </form>
       
    </div>
    <div id="dynamicContent"></div>
    <!-- Your product listing goes here -->  
</header>
<div class="main" style="margin-top:100px;">
  <div>
    <ul>
      <!-- <li><a href="/form">add product</a></li> -->
            <li><button id="redirectButton">add product</button></li>
            <li><button id="updateButton">update product</button></li>
      <li><a href="/register/updateuser/{id}">delete product</a></li>
    </ul>
</div>

</div>
<!-- create a footer -->
<div class="footer">
    <div class="heading">
    <h2>Brother Innovation<sup>™</sup></h2>
    </div>
    <div class="content">
    <div class="services">
        <h4>Services</h4>
        <p><a href="#">App development</a></p>
        <p><a href="#">Web development</a></p>
        <p><a href="#">DevOps</a></p>
        <p><a href="#">Web designing</a></p>
    </div>
    <div class="social-media">
        <h4>Social</h4>
        <p>
        <a href="#"
            ><i class="fab fa-linkedin"></i> Linkedin</a
        >
        </p>
        <p>
        <a href="#"
            ><i class="fab fa-twitter"></i> Twitter</a
        >
        </p>
        <p>
        <a href="#"
            ><i class="fab fa-github"></i> Github</a
        >
        </p>
        <p>
        <a href="#"
            ><i class="fab fa-facebook"></i> Facebook</a
        >
        </p>
        <p>
        <a href="#"
            ><i class="fab fa-instagram"></i> Instagram</a
        >
        </p>
    </div>
    <div class="links">
        <h4>Quick links</h4>
        <p><a href="#">Home</a></p>
        <p><a href="#">About</a></p>
        <p><a href="#">Blogs</a></p>
        <p><a href="#">Contact</a></p>
    </div>
    <div class="details">
        <h4 class="address">Address</h4>
        <p>
        Lorem ipsum dolor sit amet consectetur <br />
        adipisicing elit. Cupiditate, qui!
        </p>
        <h4 class="mobile">Mobile</h4>
        <p><a href="#">+91 988770-88104</a></p>
        <h4 class="mail">Email</h4>
        <p><a href="#">thakursajan758@gmail.com</a></p>
    </div>
    </div>
    <h2>Reviews</h2>
      
    <footer>
    <hr />
    © 2023 Brother Innvovation.
    </footer>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<script src="{{ asset('assets/js/index.js') }}"></script>
<script>
   $(document).ready(function () {
        $('#redirectButton').click(function () {
            // You may want to redirect to the add product page. 
             // Update this URL to the actual URL of your add product page
            $('#dynamicContent').load("/products");
        });

        // Assuming you want to send an AJAX request on form submission
        $('#productForm form').submit(function (event) {
            event.preventDefault(); // Prevent the default form submission

            // Get form data
            var formData = $(this).serialize();
            $(document).on('submit', '#addProductForm', function (event) {
            event.preventDefault(); // Prevent the default form submission

            $.ajax({
                url: "{{ route('products.view') }}", // Replace with your actual route name
                type: 'POST',
                data: formData,
                success: function (response) {
                    // Handle the success response
                    console.log(response);
                    $('#dynamicContent').append(response);
                },
                error: function (error) {
                    // Handle the error response
                    console.error(error);
                }
            });
        });
    });

   });
   $(document).ready(function () {
    $('#updateButton').click(function () {
    // You may want to redirect to the add product page. 
    // Update this URL to the actual URL of your add product page
    $('#updateproductForm').css('display', 'block');
});


        // Assuming you want to send an AJAX request on form submission
        $('#updateproductForm form').submit(function (event) {
            event.preventDefault(); // Prevent the default form submission

            // Get form data
            var formData = $(this).serialize();
            $(document).on('submit', '#updateproductForm', function (event) {
            event.preventDefault(); // Prevent the default form submission

            $.ajax({
                url: "{{ route('updateproductsview.view') }}", // Replace with your actual route name
                type: 'POST',
                data: formData,
                success: function (response) {
                    // Handle the success response
                    console.log(response);
                    $('#dynamicContent').append(response);
                },
                error: function (error) {
                    // Handle the error response
                    console.error(error);
                }
            });
        });
    });

   });
</script>
</body>
</html>