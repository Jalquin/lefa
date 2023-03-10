<?php
// Define the available pages and their corresponding template files
$pages = array(
    'index' => 'home.php',
    'o-nas' => 'about.php',
    'kontakt' => 'contact.php',
    '404' => '404.php'
);

// Define the page titles
$page_titles = array(
    'index' => '',
    'o-nas' => 'O nás',
    'kontakt' => 'Kontakt',
    '404' => 'Stránka nenalezena'
);

// Check if a page is specified in the GET parameter, default to home page if not
if (isset($_GET['page']) && array_key_exists($_GET['page'], $pages)) {
    $page = $_GET['page'];
} elseif (!isset($_GET['page'])) {
    $page = 'index';
} else {
    $page = '404';
}

// Load the corresponding template file for the selected page
$template_file = 'templates/' . $pages[$page];

?>

    <!DOCTYPE html>
    <html lang="cs">
    <head>

        <!-- Basic Page Needs
      ================================================== -->
        <meta charset="utf-8">
        <title>LEFA Servis <?php if($page!='index'){echo ' - '; } echo $page_titles[$page]; ?></title>

        <!-- Mobile Specific Metas
      ================================================== -->
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="Firma Topení-Středa s.r.o. zajišťuje dodávku, montáž a servis nových způsobů vytápění, rozvodů vody, kanalizace a plynu. Zaměřujeme se na ověřené způsoby vytápění a chlazení pro rodinné a bytové domy."
              name="description">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=5.0" name="viewport">
        <meta content="Jakub Červený" name=author>

        <!-- Favicon
      ================================================== -->
        <link href="images/favicon.jpg" rel="icon" type="image/jpg">

        <!-- CSS
      ================================================== -->
        <!-- Bootstrap -->
        <link href="plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
        <!-- FontAwesome -->
        <link href="plugins/fontawesome/css/all.min.css" rel="stylesheet">
        <!-- Animation -->
        <link href="plugins/animate-css/animate.css" rel="stylesheet">
        <!-- slick Carousel -->
        <link href="plugins/slick/slick.css" rel="stylesheet">
        <link href="plugins/slick/slick-theme.css" rel="stylesheet">
        <!-- Colorbox -->
        <link href="plugins/colorbox/colorbox.css" rel="stylesheet">
        <!-- Template styles-->
        <link href="css/style.css" rel="stylesheet">

    </head>
<body>
<div class="body-inner">

<?php
// Include the header
include('header.php');
?>
<div class="margin-fix">
    <?php
    // Include the content
    include($template_file);
    ?>
</div>
<?php
// Include the footer
include('footer.php');
?>

    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="plugins/jQuery/jquery.min.js"></script>
    <!-- Bootstrap jQuery -->
    <script defer src="plugins/bootstrap/bootstrap.min.js"></script>
    <!-- Slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/slick/slick-animation.min.js"></script>
    <!-- Color box -->
    <script src="plugins/colorbox/jquery.colorbox.js"></script>
    <!-- shuffle -->
    <script defer src="plugins/shuffle/shuffle.min.js"></script>

    <!-- Template custom -->
    <script src="js/script.js"></script>

</div><!-- Body inner end -->
</body>

</html>
