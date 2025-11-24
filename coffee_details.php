<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Coffee Details</title>
    <style>
    .coffee-details {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            margin-bottom: 20px;
        }
        
        .coffee-details img {
            width: 30%;
            max-width: 400px;
            height: auto;
            margin-right: 20px;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }
        
        .description {
            flex: 1;
        }

        .description h2, .description h3 {
            margin: 0 0 10px;
            color: white;
        }
        .description h4 {
            font-size: 20px;
        }
        
        .description p {
            margin: 0 0 15px;
            line-height: 1.6;
        }
        
        .time {
            color: white;
        }
        .added-by p {
            text-align: right;
        }
        
        ul, ol {
            margin: 10px 0;
            padding-left: 20px;
        }
        
        li {
            margin-bottom: 5px;
            line-height: 1.6;
            color: white;
        }
        p{
            color: white;
        }
        
        /* Comment Section Styles */
.comment-section {
    padding: 20px;
    background-color:transparent; /* Light gray background */
    margin-top: 20px;
    
}

.comment-section h3 {
    color: white; /* Dark gray text for heading */
}

#comments-container {
    margin-top: 10px;
}

.comment {
    padding: 15px;
    background-color: #af874c; /* Brown background */
    border-radius: 5px;
    margin-bottom: 15px;
}

.comment p {
    margin: 0 0 5px 0; /* Spacing between paragraphs */
    color: black; /* Dark gray text for comments */
    line-height: 1.5; /* Improved readability */
    font-weight: bold;
}

/* Comment Form Styles */
#comment-form {
    margin-top: 15px;
}

#comment-form label {
    font-weight: bold;
    color: white; /* Dark gray text for label */
}

#comment-form textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #cccccc; /* Medium gray border */
    border-radius: 5px;
    font-family: Arial, sans-serif; /* Ensure readability */
}

#comment-form button {
    background-color: #af874c; /* Brown background */
    color: #ffffff; /* White text */
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 14px;
    cursor: pointer;
}

#comment-form button:hover {
    background-color: #917143;
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

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
                <h1 class="mb-3 mt-5 bread">Recipe Details</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Recipe Details</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <div class="container">
        <?php
        // Include the database connection file
        include('db.php');

        // Check if the 'id' parameter is set in the URL
        if (isset($_GET['id'])) {
            // Sanitize the ID parameter to prevent SQL injection
            $id = mysqli_real_escape_string($conn, $_GET['id']);

            // Fetch coffee details from the database based on the ID
            $sql = "SELECT c.*, u.firstname 
                    FROM coffee_items c 
                    LEFT JOIN users u ON c.added_by = u.id 
                    WHERE c.id = '$id'";
            $result = mysqli_query($conn, $sql);

            // Check if a single row is returned
            if (mysqli_num_rows($result) == 1) {
                // Fetch the row as an associative array
                $row = mysqli_fetch_assoc($result);
                ?>
                <br>
                <br>
                <div class="coffee-details">
                    <img src="<?php echo $row['image_url']; ?>" alt="<?php echo $row['name']; ?>">
                    <div class="description">
                        <h2><?php echo $row['name']; ?></h2>
                        <h4>Type of Coffee: <?php echo $row['coffeecateg']; ?></h4> 
                        <p><?php echo $row['description']; ?></p>
                        <div class="time">
                    <p>&#9633; Preparation Time: <?php echo $row['preparation_time_value'] . ' ' . $row['preparation_time_unit']; ?></p> 
                    <p>&#9633; Additional Time: <?php echo $row['cook_time_value'] . ' ' . $row['cook_time_unit']; ?></p>
                    <p>&#9633; Servings: <?php echo $row['servings']; ?></p>
                </div>
                        <h3>Ingredients:</h3>
                        <ul>
                            <?php
                            // Fetch ingredients associated with the coffee item
                            $ingredients_sql = "SELECT * FROM ingredients WHERE coffee_id = '$id'";
                            $ingredients_result = mysqli_query($conn, $ingredients_sql);

                            // Check if ingredients are found
                            if (mysqli_num_rows($ingredients_result) > 0) {
                                // Loop through each ingredient and display it
                                while ($ingredient_row = mysqli_fetch_assoc($ingredients_result)) {
                                    echo "<li>" . $ingredient_row['ingredient'] . "</li>";
                                }
                            } else {
                                echo "<li>No ingredients found.</li>";
                            }

                            // Free result set
                            mysqli_free_result($ingredients_result);
                            ?>
                        </ul>
                        <h3>Directions:</h3>
                        <ol>
                            <?php
                            // Fetch directions associated with the coffee item
                            $directions_sql = "SELECT * FROM directions WHERE coffee_id = '$id'";
                            $directions_result = mysqli_query($conn, $directions_sql);

                            // Check if directions are found
                            if (mysqli_num_rows($directions_result) > 0) {
                                // Loop through each direction and display it
                                while ($direction_row = mysqli_fetch_assoc($directions_result)) {
                                    echo "<li>" . $direction_row['step'] . "</li>";
                                }
                            } else {
                                echo "<li>No directions found.</li>";
                            }

                            // Free result set
                            mysqli_free_result($directions_result);
                            ?>
                        </ol>
                    </div>
                </div>
                <div class="added-by">
                 <p>Posted by: <?php echo $row['added_by']; ?><br>
                    <?php echo date("F j, Y"); ?></p>
                </div>
                 <!-- Comment Section -->
            <div class="comment-section">
                <h3>Comments:</h3>
                <div id="comments-container">
                    <?php
                    // Fetch comments associated with the coffee item
                    $comments_sql = "SELECT * FROM comments WHERE coffee_id = '$id'";
                    $comments_result = mysqli_query($conn, $comments_sql);

                    // Check if comments are found
                    if (mysqli_num_rows($comments_result) > 0) {
                        // Loop through each comment and display it
                        while ($comment_row = mysqli_fetch_assoc($comments_result)) {
                            echo "<div class='comment'>";
                            echo "<p> " . $comment_row['email'] . "</p>";
                            echo "<p> " . $comment_row['comment'] . "</p>";
                            echo "</div>";
                        }
                    } else {
                        echo "<p>No comments found.</p>";
                    }

                    // Free result set
                    mysqli_free_result($comments_result);
                    ?>
                </div>

              <!-- Comment Form -->
<h3>Add a Comment:</h3>
<form id="comment-form">
    <input type="hidden" name="coffee_id" value="<?php echo $id; ?>">
    <!-- Automatically include the email of the logged-in user -->
    <input type="hidden" name="email" value="<?php echo $_SESSION['email']; ?>">
    <label for="comment">Comment:</label><br>
    <textarea id="comment" name="comment" rows="4" required></textarea><br>
    <button type="submit">Submit</button>
</form>

            </div>
            <!-- End of Comment Section -->

            <?php
        } else {
            echo "Coffee item not found.";
        }

        // Free result set
        mysqli_free_result($result);
    } else {
        echo "Invalid request. Please provide a valid coffee ID.";
    }

    // Close the database connection
    mysqli_close($conn);
    ?>
</div>

<script>
    // JavaScript for handling comment submission via AJAX
    document.getElementById('comment-form').addEventListener('submit', function(event) {
        event.preventDefault();
        
        var formData = new FormData(this);
        
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'add_comment.php', true);
        
        xhr.onload = function() {
            if (xhr.status === 200) {
                var response = xhr.responseText;
                document.getElementById('comments-container').innerHTML += response;
            } else {
                alert('Your comment contains inappropriate word/s. Please remove them and try again.');
            }
        };
        
        xhr.send(formData);
    });
</script>
    
    <footer class="ftco-footer ftco-section img" style="padding-top: 10px; padding-bottom: 10px;">
    <div class="overlay"></div>
    <div class="container" style="padding-left: 15px; padding-right: 15px;">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="ftco-footer-widget mb-2">
                    <h2 class="ftco-heading-2">About Us</h2>
                    <p style="font-size: 14px;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
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
                    <h2 class="ftco-heading-2">Have a Recipe Request?</h2>
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