<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $description;?>">
    <meta name="keywords" content="<?php echo $keywords;?>">
    <meta name="author" content="<?php echo $copyright;?>">
    <link rel="shortcut icon" href="<?php echo BASE_HREF;?>/templates/<?php echo $theme;?>/images/favicon.png">
    <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700italic,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo BASE_HREF;?>/templates/<?php echo $theme;?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo BASE_HREF;?>/templates/<?php echo $theme;?>/css/flexslider.css">
    <link rel="stylesheet" href="<?php echo BASE_HREF;?>/templates/<?php echo $theme;?>/css/icomoon.css">
    <link rel="stylesheet" id="theme-switch" href="<?php echo BASE_HREF;?>/templates/<?php echo $theme;?>/css/style.css">
        <?php
        if (isset($_GET['od'])) {{
            $od = "modules/default/" . $_GET['od'] . ".php";
        }
            if(!file_exists($od)) $od = "modules/default/error.php";
        }
        else $od = "modules/default/home.php";
        include($od);
        ?>
        <footer id="fh5co-footer" class="js-fh5co-waypoint">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p><small>&copy; 2016-<?php echo date('Y')?> mvt3am. All Rights Reserved.<br>With help from <a href="https://www.oktodark.com">OktoDark</a> Studios</small></p>
                        <ul class="fh5co-social-footer">
                            <li><a href="http://www.twitter.com/mvt3am"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCzPfw3b7L4oVr9C4BykM-8w"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="https://discord.gg/x8GRPhq"><i class="fab fa-discord"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="<?php echo BASE_HREF;?>/templates/default/js/jquery.min.js"></script>
    <script src="<?php echo BASE_HREF;?>/templates/default/js/jquery.cookie.js"></script>
    <script src="<?php echo BASE_HREF;?>/templates/default/js/jquery.easing.1.3.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script src="<?php echo BASE_HREF;?>/templates/default/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo BASE_HREF;?>/templates/default/js/jquery.flexslider-min.js"></script>
    <script src="<?php echo BASE_HREF;?>/templates/default/js/viewport-units-buggyfill.js"></script>
    <script src="<?php echo BASE_HREF;?>/templates/default/js/main.js"></script>
    <script src="<?php echo BASE_HREF;?>/templates/default/js/modernizr-2.6.2.min.js"></script>
    <script src="<?php echo BASE_HREF;?>/templates/default/js/respond.min.js"></script>
    <script src="https://getbootstrap.com/docs/5.1/assets/js/docs.min.js"></script>
    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
</body>
</html>
<?php if(SCHEDULED_MAINTENANCE == 1) { header('Location:'.UNDER_CONSTRUCTION_PAGE); } ?>