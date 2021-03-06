<!-- code might look strange because of the usage of php; check the github project -->
<?php
$lang = $_GET["lang"];
include("$lang/$lang.php");

$srHome = "";
$srCantemir = "active";
$srTeam = "";
$srGallery = "";
?>

<html>
<head>
    <?php include("assets/misc/html/head.php"); ?>
    <title><?= $highschool . ' ' . $baseTitle ?></title>
</head>

<body>
<?php include("assets/misc/navbar/navbar.php"); ?>

<div class="row featurette" id="spacingtop">
    <div class="col-md-6 order-0 mx-1 mx-md-5">
        <h1 class="featurette-heading text-center mb-4 ml-3"><?= $cantemir ?></h1>
        <h2 class="featurette-heading2 mx-4 mb-1"><?= $cantemirText ?></h2>
        <p class="lead mx-4 mb-2 ind"><?= $cantemirText1 ?></p>
        <h2 class="featurette-heading2 mx-4 mb-1"><?= $cantemirText2 ?></h2>
        <p class="lead mx-4 ind"><?= $cantemirText3 ?></p>
    </div>
    <div class="col-md-5 order-1 my-auto">
        <?php include("assets/misc/3rd party parts/map.php"); ?>
    </div>
</div>

<?php include("assets/misc/footer/footer.php"); ?>
<?php include("assets/misc/html/scripts.php"); ?>
</body>
</html>