<!doctype html>

<html>

<head>
  <title>Ch 04 - Dynamic Website Example</title>
  <meta charset='utf-8' />
  <link rel='stylesheet' href='./css/style.css' type='text/css' />
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" />
</head>

<?php include('./includes/inc_header.php'); ?>

<body>
  <nav>
    <?php include('./includes/inc_buttonnav.php'); ?>
  </nav>
  <section>
    <?php
      if (isset($_GET['content'])) {
        switch ($_GET['content']) {
          case 'About Me':
            include('./includes/inc_about.php');
            break;
          case 'Contact Me':
            include('./includes/inc_contact.php');
            break;
          case 'Home':
            include('./includes/inc_home.php');
            break;
          default:
            include('./includes/inc_home.php');
            break;
        }
      } else {
        include('./includes/inc_home.php');
      }
    ?>
  </section>
</body>

<?php include('./includes/inc_footer.php'); ?>

</html>
