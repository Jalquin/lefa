<?php
// Define the available pages and their corresponding template files
$pages = array(
    'index' => 'home.php',
    'o-nas' => 'o-nas.php',
    'zaluzie-horizontalni' => 'zaluzie-horizontalni.php',
    'zaluzie-vertikalni' => 'zaluzie-vertikalni.php',
    'plise' => 'plise.php',
    'rolety' => 'rolety.php',
    'shrnovaci-dvere-drevene' => 'shrnovaci-dvere-drevene.php',
    'shrnovaci-dvere-kozenkove' => 'shrnovaci-dvere-kozenkove.php',
    'shrnovaci-dvere-pvc' => 'shrnovaci-dvere-pvc.php',
    'zaclony' => 'zaclony.php',
    'delici-steny' => 'delici-steny.php',
    'japonske-steny' => 'japonske-steny.php',
    'zatemneni' => 'zatemneni.php',
    'venkovni-zaluzie' => 'venkovni-zaluzie.php',
    'venkovni-rolety-hlinikove' => 'venkovni-rolety-hlinikove.php',
    'venkovni-rolety-drevene' => 'venkovni-rolety-drevene.php',
    'markyzy' => 'markyzy.php',
    'garazova-vrata' => 'garazova-vrata.php',
    'site-proti-hmyzu' => 'site-proti-hmyzu.php',
    'eurookna-a-dvere' => 'eurookna-a-dvere.php',
    'produkty' => 'produkty.php',
    'reference' => 'reference.php',
    'kontakty' => 'kontakty.php',
    '404' => '404.php',
    'gdpr' => 'gdpr.php',
    'typography' => 'typography.php'
);

// Define the page titles
$page_titles = array(
    'index' => '',
    'o-nas' => 'O nás',
    'zaluzie-horizontalni' => 'Horizontální Žaluzie',
    'zaluzie-vertikalni' => 'Vertikální Žaluzie',
    'plise' => 'Plisé',
    'rolety' => 'Látkové Rolety',
    'shrnovaci-dvere-drevene' => 'Dřevěné shrnovací dveře',
    'shrnovaci-dvere-kozenkove' => 'Koženkové shrnovací dveře',
    'shrnovaci-dvere-pvc' => 'PVC Shrnovací dveře',
    'zaclony' => 'Záclonové pojezdy a garnýže',
    'delici-steny' => 'Dělící stěny - HARMONIE',
    'japonske-steny' => 'Japonské posuvné panelové stěny',
    'zatemneni' => 'Zatemnění',
    'venkovni-zaluzie' => 'Venkovní žaluzie',
    'venkovni-rolety-hlinikove' => 'Hliníkové venkovní rolety',
    'venkovni-rolety-drevene' => 'Dřevěné venkovní rolety',
    'markyzy' => 'Markýzy',
    'garazova-vrata' => 'Garážová vrata - rolovací',
    'site-proti-hmyzu' => 'Sítě proti hmyzu',
    'eurookna-a-dvere' => 'Eurookna a dveře',
    'produkty' => 'Poskytované produkty',
    'reference' => 'Reference',
    'kontakty' => 'Kontakty',
    '404' => 'Stránka nenalezena',
    'gdpr' => 'Zásady ochrany osobních údajů',
    'typography' => 'Typografie'
);

// Check if a page is specified in the GET parameter, default to index, if page does not exist to 404
if (isset($_GET['page']) && array_key_exists($_GET['page'], $pages)) {
    $page = $_GET['page'];
} elseif (!isset($_GET['page'])) {
    $page = 'index';
} else {
    $page = '404';
}

// Load the corresponding template file for the selected page
$template_file = 'pages/' . $pages[$page];

?>

<!DOCTYPE html>
<html lang="cs">
<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>
        LEFA Servis
        <?php
        if ($page != 'index') {
            echo ' - ';
        }
        echo $page_titles[$page];
        ?>
    </title>
    <meta name="description" content="Firma LEFA SERVIS se vždy zaměřovala na poskytování vysoce kvalitních služeb, které se opírají o
                        prvotřídní použité materiály.">
    <meta name=author content="Jakub Červený">

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon
  ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <!--<link rel="manifest" href="images/site.webmanifest">-->
    <link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#0463c3">
    <link rel="shortcut icon" href="images/favicon.ico">
    <meta name="msapplication-TileColor" content="#0463c3">
    <meta name="msapplication-config" content="/images/browserconfig.xml">
    <meta name="theme-color" content="#0463c3">

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
    <script src="https://www.google.com/recaptcha/api.js"></script>

</head>
<body>

<div class="body-inner">

    <?php
    // Include the header
    include('header.php');
    ?>

    <main id="content" class="solid-bg">
        <?php
        // Include the content
        include($template_file);
        ?>
    </main>

    <?php
    // Include the footer
    include('footer.php');
    ?>

    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="plugins/jQuery/jquery.min.js"></script>
    <!-- Bootstrap jQuery -->
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <!-- Slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/slick/slick-animation.min.js"></script>
    <!-- Color box -->
    <script src="plugins/colorbox/jquery.colorbox.js"></script>
    <!-- shuffle -->
    <script src="plugins/shuffle/shuffle.min.js"></script>

    <!-- Template custom -->
    <script src="js/script.js"></script>

    <script> // compensating body to the fixed navbar
        // Get the height of the "navbar" element
        const elemHeight = document.getElementById('navbar').offsetHeight;
        // Set the padding top of "content" element as the same height
        document.getElementById('content').style.paddingTop = elemHeight + 'px';
    </script>

</div><!-- Body inner end -->
</body>
</html>