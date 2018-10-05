<?php $lang = $_GET["lang"];
include("$lang/$lang.php");
$srHome = "active";
$srCantemir = "";
$srTeam = "";

$mobile = false;
//$useragent = $_SERVER['HTTP_USER_AGENT'];
$useragent = 'blackberry';
if( preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $useragent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent, 0, 4)) )
    $mobile = true;
?>
<html>
<head>
    <?php include("assets/misc/html/head.php"); ?>
    <title> <?= $home . ' ' . $title ?> </title>
</head>
<body>
<?php
if( $mobile )
{
    echo '
        <div class="alert alert-warning alert-dismissible fade show mb-0" role="alert">
            <strong><h3 class="display-2">' . $mobileTitle . '</h3></strong><h5 class="display-4">' . $mobileText . '</h5>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><h3 class="display-1">&times;</h3></span>
            </button>
        </div>
    ';
}
?>
<?php include("assets/misc/navbar/navbar.php"); ?>


<?php include("assets/misc/posts/carousel.php"); ?>

<!-- index (for dev)

1) Introducere
2) Ce este Euroscola?
3) Ce este Erasmus?
4) Erasmus in CNDC
5) Campania noastra de promovare
6) Impact
7) Sponsori / Parteneri
8) Pagina / Grup de Facebook

<!--Introduction-->
<hr class="featurette-divider">
<div class="row featurette ">
    <div class="col-7">
        <h2 class="featurette-heading"><?= $oneTitle ?> </h2>
        <p class="lead"><?= $oneText ?></p>
    </div>
    <div class="col-5">
        <img class="featurette-image img-fluid mx-auto" src="../assets/img/team/team.png">
    </div>
</div>

<hr class="featurette-divider">

<!-- Erasmus -->
<div class="row featurette">
    <div class="col-7">
        <h2 class="featurette-heading"><?= $twoTitle ?>
            <p class="lead"><?= $twoText ?></p>
    </div>
    <div class="col-5">
        <img class="featurette-image img-fluid mx-auto" src="../assets/img/team/team.png">
    </div>
</div>

<hr class="featurette-divider">

<!-- Euroscola -->
<div class="row featurette">
    <div class="col-7">
        <h2 class="featurette-heading"><?= $threeTitle ?></h2>
        <p class="lead"><?= $threeText ?></p>
    </div>
    <div class="col-5">
        <img class="featurette-image img-fluid mx-auto" src="../assets/img/team/team.png">
    </div>
</div>

<hr class="featurette-divider">

<div class="container">
    <div id="player"></div>

    <script>
        var tag = document.createElement('script');

        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        var player;

        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                height: '360',
                width: '640',
                videoId: 'rVeMiVU77wo',
                events: {
                    'onStateChange': onPlayerStateChange
                }
            });
        }

        var done = false;

        function onPlayerStateChange(event) {
            if (event.data == YT.PlayerState.PLAYING && !done) {
                setTimeout(stopVideo, 6000);
                done = true;
            }
        }

        function stopVideo() {
            player.stopVideo();
        }
    </script>
</div>

<?php include("assets/misc/footer/footer.php"); ?>
<?php include("assets/misc/html/scripts.php"); ?>
</body>
</html>