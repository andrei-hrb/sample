<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="top">
    <a class="navbar-brand" href="../home.php/?lang=<?= $lang ?>"><img class="logo" src="../assets/img/ui stuff/logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ml-1"><a class="nav-link nav-elm <?= $srHome ?>" href="../home.php/?lang=<?= $lang ?>"><?= $home ?></a></li>
            <li class="nav-item ml-1"><a class="nav-link nav-elm <?= $srCantemir ?>" href="../cantemir.php/?lang=<?= $lang ?>"><?= $highschool ?></a></li>
            <li class="nav-item ml-1"><a class="nav-link nav-elm <?= $srTeam ?>" href="../team.php/?lang=<?= $lang ?>"><?= $team ?></a></li>
            <li class="nav-item ml-1"><a class="nav-link nav-elm <?= $srGallery ?>" href="../gallery.php/?lang=<?= $lang ?>"><?= $gallery ?></a></li>
        </ul>

        <div class="ml-md-auto flags">
            <a class="flagLink" href="<?= $frLink ?>"><img class="mx-1 flag <?= $frFlag ?>" id="fr" src="../assets/img/flags/fr.png"></a>
            <a class="flagLink" href="<?= $enLink ?>"><img class="mx-1 flag <?= $enFlag ?>" id="en" src="../assets/img/flags/uk.png"></a>
            <a class="flagLink" href="<?= $roLink ?>"><img class="mx-1 flag <?= $roFlag ?>" id="ro" src="../assets/img/flags/ro.png"></a>
        </div>
    </div>
</nav>
