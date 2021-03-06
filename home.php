<!-- code might look strange because of the usage of php; check the github project -->
<?php
$lang = $_GET["lang"];

if( $lang == "" ) header('Location: /?lang=en', true, 301);

include($lang . "/" . $lang . ".php");

$srHome = "active";
$srCantemir = "";
$srTeam = "";
$srGallery = "";
?>
<html>
<head>
    <?php include("assets/misc/html/head.php"); ?>
    <title><?= $home . ' ' . $baseTitle ?></title>
    <link href="https://getbootstrap.com/docs/4.1/assets/css/docs.min.css" rel="stylesheet">
    <link href="../assets/css/lightbox.min.css" rel="stylesheet">
    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/ro_RO/sdk.js#xfbml=1&version=v3.1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
</head>

<body>
<?php include("assets/misc/navbar/navbar.php"); ?>
<?php include("assets/misc/3rd party parts/carousel.php"); ?>

<div class="container-fluid mt-3">
    <div class="row flex-xl-nowrap">
        <div class="col-12 col-md-3 bd-sidebar" id="spacingtop">
            <ul class="section-nav">
                <li class="toc-entry toc-h1 lead">
                    <a href="#introduction"><?= $introductionTitle ?></a>
                    <hr>
                </li>
                <li class="toc-entry toc-h1 lead">
                    <a href="#euroscola"><?= $euroscolaTitle ?></a>
                    <hr>
                </li>
                <li class="toc-entry toc-h1 lead">
                    <a href="#erasmus"><?= $erasmusTitle ?></a>
                    <hr>
                </li>
                <li class="toc-entry toc-h1 lead">
                    <a href="#erasmuscndc"><?= $erasmusCNDCTitle ?></a>
                    <hr>
                </li>
                <li class="toc-entry toc-h1 lead">
                    <a href="#campaign"><?= $campaignTitle ?></a>
                    <hr>
                </li>
                <li class="toc-entry toc-h1 lead">
                    <a href="#impact"><?= $impactTitle ?></a>
                    <hr>
                </li>
                <li class="toc-entry toc-h1 lead">
                    <a href="#facebook"><?= $facebookTitle ?></a>
                </li>
            </ul>
        </div>

        <main class="col-12 col-md-9 bd-content" role="main">
            <div class="container" id="spacingtop">
                <div class="row featurette" id="introduction">
                    <div class="col-md-7 order-0">
                        <h2 class="featurette-heading text-center mb-3"><?= $introductionTitle ?> </h2>
                        <p class="lead ind"><?= $introductionText ?></p>
                    </div>
                    <div class="col-md-5 order-1">
                        <div class="mx-auto text-center">
                            <img class="img-fluid" src="../assets/img/home/cantemirsigla.png" style="width:50%">
                        </div>
                    </div>
                </div>
                <hr class="featurette-divider">

                <div id="euroscola" class="row featurette">
                    <div class="col-md-7 order-0">
                        <h2 class="featurette-heading text-center mb-3"><?= $euroscolaTitle ?></h2>
                        <p class="lead ind mb-2"><?= $euroscolaText ?></p>
                    </div>
                    <div class="align-self-center col-md-5 order-1 mx-auto text-center">
                        <img class="img-fluid mt-2 mb-1 mt-md-5 my-auto" src="../assets/img/home/euroscola.jpg" style="width:70%">
                    </div>
                </div>
                <hr class="featurette-divider">

                <div id="eurasmus" class="featurette">
                    <div class="row">
                        <div class="col-md-7 order-0">
                            <h2 class="featurette-heading text-center mb-3"><?= $erasmusTitle ?></h2>
                            <p class="lead ind"><?= $erasmusText14 ?></p>
                        </div>
                        <div class="col-md-5 order-1 mx-auto text-center float-right">
                            <img class="img-fluid mx-auto mt-2 mb-4 mt-md-5" src="../assets/img/home/erasmus.jpg" style="width:70%">
                        </div>
                    </div>
                    <h2 class="mx-4 mb-1 featurette-heading2"><?= $erasmusText ?></h2>
                    <p class="lead ind"><?= $erasmusText1 ?></p>
                    <h2 class="mx-4 mb-1 featurette-heading2"><?= $erasmusText3 ?></h2>
                    <div class="container">
                        <ul class="lead">
                            <li><?= $erasmusText4 ?></li>
                            <li><?= $erasmusText5 ?></li>
                            <li><?= $erasmusText6 ?></li>
                        </ul>
                    </div>
                    <h2 class="mx-4 mb-1 featurette-heading2"><?= $objectives ?></h2>
                    <div class="container">
                        <ul class=" mb-5">
                            <li class="lead"><?= $erasmusText7 ?></li>
                            <li class="lead"><?= $erasmusText8 ?></li>
                            <li class="lead"><?= $erasmusText9 ?></li>
                            <li class="lead"><?= $erasmusText10 ?></li>
                            <li class="lead"><?= $erasmusText11 ?></li>
                            <li class="lead"><?= $erasmusText12 ?></li>
                        </ul>
                    </div>
                    <h2 class="mx-4 mb-1 featurette-heading2"><?= $results ?></h2>
                    <p class="lead ind"><?= $erasmusText14 ?></p>
                </div>
                <hr class="featurette-divider">

                <div id="erasmuscndc" class="featurette container">
                    <div class="row">
                        <div class="col-md-7 order-0">
                            <h2 class="featurette-heading text-center mb-3"><?= $erasmusCNDCTitle ?></h2>
                            <h2 class="featurette-heading2 mx-4 mb-1 text-center">FUTURE CAREER? TOUCH IT!</h2>
                            <h2 class="featurette-heading2 mx-4 mb-1 text-center" style="font-size: large">2016-1-RO01-KA102-024210</h2>
                        </div>
                        <div class="col-md-5 order-1 mx-auto text-center">
                            <img class="img-fluid mx-6 mt-2 mb-4 mx-auto" src="../assets/img/home/logoproiect.png" style="width: 50%">
                        </div>
                    </div>
                    <div class="row">
                        <h2 class="featurette-heading2 mx-4 mb-1 "><?= $erasmusCNDCText10 ?></h2>
                        <div class="container">
                            <ul class="lead">
                                <li><?= $erasmusCNDCText12 ?> KA 1;</li>
                                <li><?= $period ?> 01/10/2016 - 30/09/2018;</li>
                                <li><?= $budget ?> 63248€;</li>
                                <li><?= $erasmusCNDCText4 ?>;</li>
                                <li><?= $erasmusCNDCText13 ?></li>
                            </ul>
                        </div>
                        <div class="mx-auto text-center row">
                            <div class="col-md-6 order-0">
                                <a href="https://infonetmedia.co.uk/" target="_blank"><img src="../assets/img/home/infonet.jpg" class="img-fluid mx-auto mt-1 mb-1" style="max-height: 700px;"></a>
                            </div>
                            <div class="col-md-6 order-1">
                                <a href="http://www.etnmanagement.eu/trainingvision/" target="_blank"><img src="../assets/img/home/training.jpg" class="img-fluid mx-auto mt-1 mb-4 mt-md-2" style="max-height: 700px;"></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h2 class="featurette-heading2 mx-4 mb-1"><?= $objectives ?></h2>
                        <div class="container">
                            <ul class="lead">
                                <li><?= $erasmusCNDCText ?></li>
                                <li><?= $erasmusCNDCText1 ?></li>
                                <li><?= $erasmusCNDCText2 ?></li>
                                <li><?= $erasmusCNDCText3 ?></li>
                                <li>
                                    <a data-toggle="collapse" href="#group" role="button" aria-expanded="false" aria-controls="group"><?= $erasmusCNDCText4 ?></a>
                                </li>
                            </ul>
                            <div class="collapse" id="group">
                                <div class="row">
                                    <div class="col-md-6 order-0">
                                        <a href="../assets/img/home/group2.jpg" data-lightbox="<?= $erasmusCNDCText14 ?>" data-title=" <?= $erasmusCNDCText14 ?>"><img class="rounded shadow mx-auto mt-2 mb-4 d-block" src="../assets/img/home/group2.jpg" style="width: 15rem; height: 10rem;"></a>
                                    </div>
                                    <div class="col-md-6 order-1">
                                        <a href="../assets/img/home/group1.jpg" data-lightbox="<?= $erasmusCNDCText15 ?>" data-title=" <?= $erasmusCNDCText15 ?>"><img class="rounded shadow mx-auto mt-2 mb-4 d-block" src="../assets/img/home/group1.jpg" style="width: 15rem; height: 10rem;"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2 class="featurette-heading2 mx-4 mb-1"> <?= $erasmusCNDCText5 ?></h2>
                        <p class="lead ind"><?= $erasmusCNDCText6 ?></p>
                        <h2 class="featurette-heading2 mx-4 mb-1"> <?= $results ?></h2>
                        <p class="lead ind"><?= $erasmusCNDCText7 ?></p>
                        <h2 class="featurette-heading2 mx-4 mb-1"> <?= $erasmusCNDCText8 ?></h2>
                        <div class="container">
                            <ul class="lead">
                                <li>Auto Message – Rareş Agachi, Bogdan Ciolpan;</li>
                                <li>Know Your Location – Felix Ifrim, Vlad Manole, Andrei Mîrţ;</li>
                                <li>Shopping Organiser – Bianca-Maria Panţâru, Teodora-Elena Zgăvîrdici;</li>
                                <li>Phone-Reply Assistant – Flavian Porfir, Darius Sandu, Călin-Andrei Rogoza.</li>
                            </ul>
                        </div>
                        <h2 class="featurette-heading2 mx-4 mb-1"> <?= $erasmusCNDCText9 ?></h2>
                        <div class="container">
                            <ul class="lead">
                                <li>SwitchIT – Butucaru Andreea <?= $footText2 ?> Pistea Catrinel</li>
                                <li>FitnessDiary – Parincu Smaranda <?= $footText2 ?> Tudoreanu Miruna</li>
                                <li>ROcycle – Gavrila Andreea <?= $footText2 ?> Moisa Irina</li>
                                <li>Smart Campus  – Higiu Andreea <?= $footText2 ?> Smarandi Anastasia</li>
                                <li>Blood Donation – Luncanu Catalina <?= $footText2 ?> Popa Lavinia</li>
                                <li><a href="https://dcerasmus.wordpress.com/" target="_blank">Dcerasmus  – Butucaru Andreea <?= $footText2 ?> Pistea Catrinel</a></li>
                                <li><a href="https://cndcvisitslondon.wordpress.com/" target="_blank">Visit London – Parincu Smaranda <?= $footText2 ?> Tudoreanu Miruna</a></li>
                                <li><a href="https://visitonesti.wordpress.com/" target="_blank">Visit Onești – Gavrila Andreea <?= $footText2 ?> Moisa Irina</a></li>
                                <li><a href="https://theportsmouthlife.wordpress.com/" target="_blank">Portsmouth Life – Higiu Andreea <?= $footText2 ?> Smarandi Anastasia</a></li>
                                <li><a href="https://visitromaniacom.wordpress.com/" target="_blank">Visit Romania – Luncanu Catalina <?= $footText2 ?> Popa Lavinia</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="featurette-divider">

                <div id="campaign" class="featurette">
                    <div class="row">
                        <div class="col-md-7 order-0">
                            <h2 class="featurette-heading text-center mb-3"><?= $campaignTitle ?></h2>
                            <h2 class="mx-4 mb-1 featurette-heading2"> <?= $period ?> 03/10/2018-17/10/2018</h2>
                            <h2 class="mx-4 mb-1 featurette-heading2"> <?= $objectives ?></h2>
                            <div class="container">
                                <ul class="lead">
                                    <li> <?= $campaignText ?> </li>
                                    <li> <?= $campaignText1 ?> </li>
                                    <li> <?= $campaignText2 ?> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5 order-1">
                            <a href="../assets/img/home/campanie1.jpg" data-lightbox="<?= $campaignTitle ?>" data-title=" <?= $campaignTitle ?>"><img class="rounded shadow img-fluid mx-md-auto mt-2 mb-4 mt-md-5" src="../assets/img/home/campanie1.jpg"></a>
                        </div>
                    </div>
                    <h2 class="mx-4 mb-1 featurette-heading2"> <?= $results ?></h2>
                    <div class="container">
                        <ul class="lead">
                            <li><?= $campaignText3 ?> <a data-toggle="collapse" href="#wk" role="button" aria-expanded="false" aria-controls="wk"><?= $campaignText4 ?></a> <?= $campaignText5 ?></li>
                            <div class="collapse" id="wk">
                                <div class="video shadow m-3">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/ZLsD074vK4Y" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                            </div>
                            <li><?= $campaignText6 ?><a href="http://www.onestiexpres.ro/un-pas-inainte-pentru-deschiderea-europeana.html" target="_blank" rel="noopener noreferrer"><?= $campaignText7 ?></a><?= $campaignText8 ?></li>
                            <li><a data-toggle="collapse" href="#int" role="button" aria-expanded="false" aria-controls="int"><?= $campaignText9 ?></a><?= $campaignText10 ?>;</li>
                            <div class="collapse" id="int">
                                <div class="video shadow m-3">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/gEpOoZSzh8k" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                            </div>
                            <li><?= $campaignText6 ?><a href="https://www.facebook.com/groups/556478561456197/" target="_blank" rel="noopener noreferrer"><?= $campaignText11 ?></a><?= $campaignText12 ?>;</li>
                            <li><a href="../assets/img/home/creators.jpg" data-lightbox="<?= $campaignText12 ?>" data-title="<?= $campaignText14 ?>"><?= $campaignText13 ?></a></li>
                        </ul>
                    </div>
                </div>
                <hr class="featurette-divider">

                <div id="impact" class="featurette">
                    <div class="row">
                        <div class="col-md-7 order-0">
                            <h2 class="featurette-heading text-center mb-3"><?= $impactTitle ?></h2>
                            <div class="container">
                                <ul class="lead">
                                    <li><?= $impactText ?> </li>
                                    <li><?= $impactText1 ?> </li>
                                    <li><?= $impactText2 ?> </li>
                                    <li><?= $impactText3 ?> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5 order-1 mx-auto text-center">
                            <a href="../assets/img/home/group.jpg" data-lightbox="<?= $impactTitle ?>" data-title=" <?= $impactTitle ?>"><img class="shadow img-fluid mx-auto mt-2 mb-4 mt-md-5" src="../assets/img/home/group.jpg" style="width:100%"></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container">
                            <ul class="lead">
                                <div class="container">
                                    <ul>
                                        <li> <?= $impactText4 ?> </li>
                                        <li> <?= $impactText5 ?> </li>
                                        <li> <?= $impactText6 ?> </li>
                                        <li> <?= $impactText7 ?> </li>
                                        <li> <?= $impactText8 ?> </li>
                                        <li><a href="../assets/downloadable/chestionare.zip" download> <?= $impactText9 ?></a></li>
                                    </ul>
                                </div>
                                <div class="container">
                                    <li> <?= $impactText10 ?> </li>
                                    <ul class="lead">
                                        <li> <?= $impactText11 ?> </li>
                                        <li> <?= $impactText12 ?> </li>
                                        <li> <?= $impactText13 ?> </li>
                                    </ul>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <hr class="featurette-divider">

                    <div id="facebook" class="row featurette">
                        <div class="col-md-7 order-0">
                            <h2 class="featurette-heading text-center mb-3"><?= $facebookTitle ?></h2>
                            <p class="lead ind"><?= $facebookText ?></p>
                            <p class="lead ind"><?= $facebookText1 ?></p>
                        </div>
                        <div class="col-md-5 order-1 m-auto text-center">
                            <?php include("assets/misc/3rd party parts/facebook.php"); ?>
                        </div>
                    </div>
                </div>
        </main>
    </div>
</div>
<?php include("assets/misc/footer/footer.php"); ?>
<?php include("assets/misc/html/scripts.php"); ?>
<script src="../assets/js/lightbox.min.js"></script>
</body>
</html>
