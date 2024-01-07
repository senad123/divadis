<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Divadis</title>

    <!-- Add Font Awesome CSS for social icons and carousel controls -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/myStyle.css" />
  </head>
  <body>
    <!-- Navigation Bar -->
    <?php include 'pages/nav.php' ?>

    <!-- Header Section -->
    <?php include 'pages/header.php' ?>

    <!-- About Section -->
    <?php include 'pages/about.php' ?>

    <!-- Menu Section -->
    <?php include 'pages/menuSection.php' ?>

    <!-- Google Location Section -->
    <?php include 'pages/location.php' ?>
    <!-- Contact Us Section -->
    <?php include 'pages/contact.php' ?>

    <!-- Footer Section -->
    <?php include 'pages/footer.php' ?>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- reCAPTCHA Script -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- JavaScript to dynamically update the current year -->
    <script>
      document.getElementById("currentYear").innerText =
        new Date().getFullYear();
    </script>

    <!-- Smooth Scroll Animation -->
    <script src="./js/scrollingNav.js"></script>
    <!--// Hide or show the navbar on scroll-->
    <script src="./js/hideNavOnScroll.js"></script>
    <!-- Close the navbar on link click -->
    <script src="./js/closeNavOnClick.js"></script>

    <script>
      // Add this script to handle the button click and toggle visibility
      document.addEventListener("DOMContentLoaded", function () {
        var moreFoodButton = document.getElementById("moreFoodButton");

        moreFoodButton.addEventListener("click", function () {
          // Toggle the visibility of additional menu items
          var additionalMenuItems = document.querySelectorAll(
            ".additional-menu-item"
          );
          additionalMenuItems.forEach(function (item) {
            item.classList.toggle("d-none");
          });
        });
      });
    </script>

    <script>
      // Detect when the header comes into view
      document.addEventListener("DOMContentLoaded", function () {
        var header = document.getElementById("header");

        // Check if the header is in the viewport
        function isElementInViewport(el) {
          var rect = el.getBoundingClientRect();
          return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <=
              (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <=
              (window.innerWidth || document.documentElement.clientWidth)
          );
        }

        // Function to handle visibility
        function handleVisibility() {
          if (isElementInViewport(header)) {
            header.classList.add("visible");
          }
        }

        // Initial check
        handleVisibility();

        // Check again on scroll
        window.addEventListener("scroll", handleVisibility);
      });
    </script>

    <script>
      $(document).ready(function () {
        var images = [
          'url("./images/header/1.jpeg") center/cover no-repeat',
          'url("./images/header/2.jpeg") center/cover no-repeat',
          'url("./images/header/3.jpeg") center/cover no-repeat',
        ];

        var currentImage = 0;

        function changeBackground() {
          $("#header").animate({ opacity: 0 }, 600, function () {
            $(this)
              .css("background", images[currentImage])
              .animate({ opacity: 1 }, 600);
          });
          currentImage = (currentImage + 1) % images.length;
        }

        setInterval(changeBackground, 6000); // Change image every 5 seconds
      });
    </script>

    <!--MenuData -->
    <script src="./js/dataMenu.js"></script>
  </body>
</html>
