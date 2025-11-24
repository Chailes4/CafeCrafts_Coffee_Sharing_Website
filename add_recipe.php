<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Add Recipe</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
    }

    form {
        background-color: #d38a5536;
        max-width: 700px;
        margin: 20px auto;
        padding: 20px 40px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        font-weight: bold;
        color: whitesmoke;
    }

    input[type="text"],
    textarea,
    select {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type="number"],
      select {
        width: calc(30% - 10px); /* Adjusted width */
        padding: 6px; /* Adjusted padding */
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        display: inline-block; /* Display inline */
      }

input[type="number"] {
    width: calc(60% - 10px); /* Adjusted width */
}

select {
    width: calc(40% - 10px); /* Adjusted width */
    height: 40px;
}

    button {
        background-color: #996b49;
        color: white;
        padding: 5px 8px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-align: center;
    }

    button:hover {
        background-color: #462a14;
    }


    #ingredients_list li {
        list-style-type: none;
        margin-bottom: 10px;
    }

    #directionsContainer {
        margin-top: 10px;
    }

    .directionStep {
        margin-bottom: 10px;
    }
    .row {
    width: 100%;
    }

    .column {
    float: left;
    padding: 16px;
    }

    .column-100 {
    width: 100%;
    }

    .column-70 {
    width: 70%;
    }

    .column-50 {
    width: 50%;
    }

    .column-30 {
    width: 30%;
    }
    .pull-right {
    text-align: right;
    }

    .typeofcoffee {
        width: calc(101% - 10px);
    }

    .servings[type="number"] {
        width: calc(97% - 10px);
    }

    .categ {
        width: calc(97% - 10px);
    }

    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="login.html">Café<small>Crafts</small></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Recipe
          </button>
          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="login.html" class="nav-link">Home</a></li>
                <div class="collapse navbar-collapse" id="ftco-nav">
                        <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Recipe
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <!-- Recipe Information -->
                    <a class="dropdown-item" href="recipe.php">Recipe</a>
                    <a class="dropdown-item" href="add_recipe.php">Add a Recipe</a>           <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
              <li class="nav-item"><a href="feedback.html" class="nav-link">Feedback</a></li>
              <!-- Profile Dropdown -->
                    <div class="collapse navbar-collapse" id="ftco-nav">
                        <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Profile</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <!-- Profile Information -->
                    <a class="dropdown-item" href="profile.php">View Profile</a>
                    <!-- Logout Button -->
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
                    </li>
            </ul>
          </div>
          </div>
      </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(images/bg-recipe.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
                <h1 class="mb-3 mt-5 bread">Add Recipe</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="login.html">Home</a></span> <span>Add Recipe</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <form action="add_coffee.php" method="POST" enctype="multipart/form-data">
        <label for="name">Coffee Name:</label><br>
        <input type="text" id="name" name="name" placeholder="Coffee Name [Required]" required><br>

        <!-- Type of Coffee Dropdown -->
    <label for="coffeecateg">Type of Coffee:</label><br>
    <select class="typeofcoffee" id="coffeecateg" name="coffeecateg" required>
        <option value="Drip Coffee">Drip Coffee</option>
        <option value="Pour-Over">Pour-Over</option>
        <option value="French Press">French Press</option>
        <option value="Espresso">Espresso</option>
        <option value="AeroPress">AeroPress</option>
        <option value="Brewed">Brewed</option>
        <option value="Americano">Americano</option>
        <option value="Cappucino">Cappucino</option>
        <option value="Latte">Latte</option>
        <option value="Black Coffee">Black Coffee</option>

    </select><br>
        <label for="description">Description:</label><br>
    <textarea id="description" name="description" placeholder="Describe your Coffee [Required]" required></textarea><br>
        <br>
    <!-- Details Section -->
    <form>
    <div class="container">
        <div class="row">
            <div class="column column-50">
    <div class="mntl-recipe-details__item">
        <label for="preparation_time" class="mntl-recipe-details__label">Preparation Time:</label>
        <div class="input-group">
            <input type="number" id="preparation_time" name="preparation_time_value" class="mntl-recipe-details__value" required>
            <select id="preparation_time_unit" name="preparation_time_unit">
                <option value="minutes">Minutes</option>
                <option value="hours">Hours</option>
            </select>
        </div>
    </div>
</div>

<div class="column column-50">
    <div class="mntl-recipe-details__item">
        <label for="cook_time" class="mntl-recipe-details__label">Additional Time:</label>
        <div class="input-group">
            <input type="number" id="cook_time" name="cook_time_value" class="mntl-recipe-details__value" required>
            <select id="cook_time_unit" name="cook_time_unit">
                <option value="minutes">Minutes</option>
                <option value="hours">Hours</option>
            </select>
        </div>
    </div>
</div>

    <div class="column column-50">   
        <div class="mntl-recipe-details__item">
        <label for="servings" class="mntl-recipe-details__label">Servings:</label>
        <input class="servings" type="number" id="servings" name="servings" class="mntl-recipe-details__value" placeholder="5" required>
                </div>
            </div>
               
            <div class="column column-50">
                <label for="category">Category:</label><br>
                <select class="categ" id="category" name="category" required>
                    <option value="hot">Hot Coffee</option>
                    <option value="cold">Cold Coffee</option>
                </select>
            </div>

            <div class="column column-100">
                <label for="image">Image:</label><br>
                <input type="file" id="image" name="image" required><br>
            </div>   

            <div class="column column-100">
                 <label for="ingredients">Ingredients:</label><br>
                <ul id="ingredients_list">
                    <li><input type="text" name="ingredients[]" placeholder="Ingredient 1"></li>
                    <li><input type="text" name="ingredients[]" placeholder="Ingredient 2"></li>
                    <li><input type="text" name="ingredients[]" placeholder="Ingredient 3"></li>
                </ul>
                <button type="button" id="add_ingredient_button" onclick="addIngredient()">Add Ingredient</button>
                <button type="button" id="remove_ingredient_button" onclick="removeIngredient()">Remove Ingredient</button><br><br>
            </div>

            <div class="column column-100"> 
                    <!-- Recipe Directions Section -->
                <label for="directions">Directions:</label><br>
                 <div id="directionsContainer">
                     <div class="directionStep">
                        <label for="step${index}">Step 1:</label>
                        <input type="text" id="step${index}" name="step${index}" required>
                        <button type="button" onclick="removeDirection(this)">Remove</button>
                    </div>
            </div>
            </div>
              <div class="column column-100">
                <button type="button" onclick="addDirection()">Add Step</button>
            </div>

            <div class="column column-100 pull-right">
                <input style="background-color: #996b49; color: white; border: none; border-radius:: 4px; cursor: pointer; padding: 6px;" type="submit" value="Add Coffee">
                
            </div>
        </div>   
    </div>     
</form>

    <script>
        function addIngredient() {
            var ul = document.getElementById("ingredients_list");
            var li = document.createElement("li");
            var input = document.createElement("input");
            input.setAttribute("type", "text");
            input.setAttribute("name", "ingredients[]");
            input.setAttribute("placeholder", "Ingredient");
            li.appendChild(input);
            ul.appendChild(li);
        }
        
        function removeIngredient() {
            var ul = document.getElementById("ingredients_list");
            var lastItem = ul.lastElementChild;
            if (lastItem) {
                ul.removeChild(lastItem);
            }
        }

        function addDirection() {
            const container = document.getElementById('directionsContainer');
            const index = container.children.length + 1;

            const div = document.createElement('div');
            div.innerHTML = `
                <label for="step${index}">Step ${index}:</label>
                <input type="text" id="step${index}" name="step${index}" required>
                <button type="button" onclick="removeDirection(this)">Remove</button>
            `;

            container.appendChild(div);
        }

        function removeDirection(button) {
            const div = button.parentNode;
            div.parentNode.removeChild(div);
        }
    </script>

<br>
      <br>
 <footer class="ftco-footer ftco-section img" style="padding-top: 10px; padding-bottom: 10px;">
    <div class="overlay"></div>
    <div class="container" style="padding-left: 15px; padding-right: 15px;">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="ftco-footer-widget mb-2">
                    <h2 class="ftco-heading-2">About Us</h2>
                    <p style="font-size: 14px;">At Café Crafts, we're fueled by our passion for coffee and our desire to share that passion with the world. Founded by three coffee-loving friends, Chailes, Joza, and Den, Café Crafts is more than just a website – it's a community.</p>
                    <div class="social d-flex justify-content-center">
                        <ul class="ftco-footer-social list-unstyled mt-2">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="foottitle col-lg-6">
                <br>
                <br>
                <h1 style="font-size: 100px;">Café Crafts</h1>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="ftco-footer-widget mb-2">
                    <h2 class="ftco-heading-2">Have a Feedback?</h2>
                    <div class="block-23 mb-2">
                        <ul style="font-size: 14px;">
                            <li><span class="icon icon-map-marker"></span><span class="text">Pulilan, Bulacan</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">+63 935 255 8376</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@cafécrafts.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p style="font-size: 12px;">Copyright &copy;<script>document.write(new Date().getFullYear());</script></p>
            </div>
        </div>
    </div>
</footer>



  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>

<script>
$(document).ready(function() {
    // Check if the coffee item is successfully added and pending approval
    var urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('success') && urlParams.get('success') === '1') {
        alert('Coffee item added successfully. Pending approval by the admin.');
    }
});
</script>