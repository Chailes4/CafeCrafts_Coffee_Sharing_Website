<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Café Crafts</title>
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

      <div class="slider-item" style="background-image: url(images/bg-addrecipe.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
                <h1 class="mb-3 mt-5 bread">Our Recipe</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="login.html">Home</a></span> <span>Recipe</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

      
    <section class="ftco-menu mb-5 pb-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Discover</span>
            <h2 class="mb-4">Our Recipe</h2>
            <p>Experience the rich harmony of flavors in our latest coffee recipe creation.</p>
          </div>
        </div>

<?php
// Include the file for database connection
include('db.php'); // Ensure this file contains the correct database connection code

// Items per page
$itemsPerPage = 3;

// Get the current page for hot coffee, defaulting to 1 if not set
$pageHot = isset($_GET['page_hot']) ? (int)$_GET['page_hot'] : 1;

// Calculate the offset for hot coffee query
$offsetHot = ($pageHot - 1) * $itemsPerPage;

// Get the current page for cold coffee
$pageCold = isset($_GET['page_cold']) ? (int)$_GET['page_cold'] : 1;

// Calculate the offset for cold coffee query
$offsetCold = ($pageCold - 1) * $itemsPerPage;

// Fetch hot coffee items with pagination
$hotCoffeeQuery = "SELECT * FROM coffee_items WHERE category = 'hot' AND status = 'approved' LIMIT $itemsPerPage OFFSET $offsetHot";
$hotCoffeeResult = mysqli_query($conn, $hotCoffeeQuery);

// Fetch cold coffee items with pagination
$coldCoffeeQuery = "SELECT * FROM coffee_items WHERE category = 'cold' AND status = 'approved' LIMIT $itemsPerPage OFFSET $offsetCold";
$coldCoffeeResult = mysqli_query($conn, $coldCoffeeQuery);

// Calculate the total pages for hot and cold coffee
$totalHotItemsResult = mysqli_query($conn, "SELECT COUNT(*) AS total FROM coffee_items WHERE category = 'hot' AND status = 'approved'");
$totalHotItemsRow = mysqli_fetch_assoc($totalHotItemsResult);
$totalHotPages = ceil($totalHotItemsRow['total'] / $itemsPerPage);

$totalColdItemsResult = mysqli_query($conn, "SELECT COUNT(*) AS total FROM coffee_items WHERE category = 'cold' AND status = 'approved'");
$totalColdItemsRow = mysqli_fetch_assoc($totalColdItemsResult);
$totalColdPages = ceil($totalColdItemsRow['total'] / $itemsPerPage);
?>

<div class="row d-md-flex">
    <div class="col-lg-12 ftco-animate p-md-5">
        <div class="row">
            <div class="col-md-12 nav-link-wrap mb-5">
                <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Hot Coffee</a>
                    <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Cold Coffee</a>
                </div>
            </div>
            <div class="col-md-12 d-flex align-items-center">            
                <div class="tab-content ftco-animate" id="v-pills-tabContent">

                    <!-- Hot Coffee Section -->
                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                        <div class="row">
                            <?php
                            if ($hotCoffeeResult && mysqli_num_rows($hotCoffeeResult) > 0) {
                                while ($row = mysqli_fetch_assoc($hotCoffeeResult)) {
                                    echo '<div class="col-md-4 text-center">';
                                    echo '<div class="menu-wrap">';
                                    echo '<a href="coffee_details.php?id=' . htmlspecialchars($row["id"], ENT_QUOTES) . '" class="menu-img img mb-4" style="background-image: url(\'' . htmlspecialchars($row["image_url"], ENT_QUOTES) . '\'); height: 300px; background-size: cover; background-position: center;"></a>';

                                    echo '<div class="text">';
                                    echo '<h3><a href="coffee_details.php?id=' . htmlspecialchars($row["id"], ENT_QUOTES) . '">' . htmlspecialchars($row["name"], ENT_QUOTES) . '</a></h3>';
                                    
                                    $description = $row["description"];
                                    $maxLength = 100;

                                    if (strlen($description) > 100) {
                                        $shortenedDescription = substr($description, 0, $maxLength) . '...';
                                    } else {
                                        $shortenedDescription = $description;
                                    }

                                    echo '<p>' . htmlspecialchars($shortenedDescription, ENT_QUOTES) . '</p>';
                                    echo '</div>'; // Close 'text' div
                                    echo '</div>'; // Close 'menu-wrap' div
                                    echo '</div>'; // Close 'col-md-4' div
                                }
                            } else {
                                echo "No hot coffee items available.";
                            }
                            ?>
                        </div>

                        <!-- Pagination for Hot Coffee -->
                        <div class="pagination-container">
                            <div class="pagination">
                                <?php
                                if ($totalHotPages > 1) {
                                    for ($i = 1; $i <= $totalHotPages; $i++) {
                                        $activeClass = ($i == $pageHot) ? 'class="active"' : '';
                                        echo '<a ' . $activeClass . ' href="?page_hot=' . $i . '"> ' . $i . ' </a>'; // Page numbers for hot coffee
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Cold Coffee Section -->
                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                        <div class="row">
                            <?php
                            if ($coldCoffeeResult && mysqli_num_rows($coldCoffeeResult) > 0) {
                                while ($row = mysqli_fetch_assoc($coldCoffeeResult)) {
                                    echo '<div class="col-md-4 text-center">';
                                    echo '<div class="menu-wrap">';
                                    echo '<a href="coffee_details.php?id=' . htmlspecialchars($row["id"], ENT_QUOTES) . '" class="menu-img img mb-4" style="background-image: url(\'' . htmlspecialchars($row["image_url"], ENT_QUOTES) . '\'); height: 300px; background-size: cover; background-position: center;"></a>';

                                    echo '<div class="text">';
                                    echo '<h3><a href="coffee_details.php?id=' . htmlspecialchars($row["id"], ENT_QUOTES) . '">' . htmlspecialchars($row["name"], ENT_QUOTES) . '</a></h3>';
                                    
                                    $description = $row["description"];
                                    $maxLength = 100;

                                    if (strlen($description) > 100) {
                                        $shortenedDescription = substr($description, 0, $maxLength) . '...';
                                    } else {
                                        $shortenedDescription = $description;
                                    }

                                    echo '<p>' . htmlspecialchars($shortenedDescription, ENT_QUOTES) . '</p>';
                                    echo '</div>'; // Close 'text' div
                                    echo '</div>'; // Close 'menu-wrap' div
                                    echo '</div>'; // Close 'col-md-4' div
                                }
                            } else {
                                echo "No cold coffee items available.";
                            }
                            ?>
                        </div>

                        <!-- Pagination for Cold Coffee -->
                        <div class="pagination-container">
                            <div class="pagination">
                                <?php
                                if ($totalColdPages > 1) {
                                    for ($i = 1; $i <= $totalColdPages; $i++) {
                                        $activeClass = ($i == $pageCold) ? 'class="active"' : '';
                                        echo '<a ' . $activeClass . ' href="?page_cold=' . $i . '"> ' . $i . ' </a>'; // Page numbers for cold coffee
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
mysqli_close($conn); // Close the database connection to prevent resource leaks
?>


<style>
.pagination-container {
    display: flex;
    justify-content: center; /* Horizontally center content */
    align-items: center; /* Vertically center content if needed */
    height: 100px; /* Adjust as needed to control vertical positioning */
}

.pagination {
    text-align: center; /* Center the pagination */
}

.pagination a {
    display: inline-block;
    padding: 2px 15px;
    margin: 0 5px; /* Spacing between pagination links */
    border: 1px solid #ddd; /* Border for circle effect */
    border-radius: 500%; /* Circle shape */
    text-decoration: none; /* Remove underline */
    color: #fff; /* Text color */
}

.pagination a:hover {
    background-color: #a36628; /* Hover effect */
}

.pagination a.active {
    background-color: #a36628; /* Active page background */
    color: #fff; /* Active page text color */
}
</style>

  

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