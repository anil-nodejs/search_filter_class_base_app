<?php
$date = date('j.Y.h.i.s');
$iPod = stripos($_SERVER['HTTP_USER_AGENT'], "iPod");
$iPhone = stripos($_SERVER['HTTP_USER_AGENT'], "iPhone");
$iPad = stripos($_SERVER['HTTP_USER_AGENT'], "iPad");
$Android = stripos($_SERVER['HTTP_USER_AGENT'], "Android");
$webOS = stripos($_SERVER['HTTP_USER_AGENT'], "webOS");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Use Cases and Examples | Newsfeed SmartApps</title>
    <meta name="description" content="Use cases, examples and case studies of different brands using Newsfeed SmartAps " />
    <meta name="keywords" content="newsfeed app use cases, newsfeed app examples, newsfeed app case study, newsfeed app brands, newsfeed app htc, newsfeed app dubai, newsfeed apps, newsfeed smartapps, newsfeed posts, interactive posts, interactive newsfeed apps, smartposts, interactive facebook posts, fb interactive posts, newsfeed interaction, newsfeed engagement, newsfeed smartapp ideas ">

    <?php require_once 'css_header_usecases.php'; ?>
    <link rel="stylesheet" href="all_js_uses_cases/css/style2.css?v=<?php echo $date ?>">
    <link rel="stylesheet" href="all_js_uses_cases/css/scroll.css?v=<?php echo $date ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script> -->

</head>

<body>
    <?php
    $activeMenu = 'USECASES';
    require_once 'header.php';
    ?>
    <div class="content examples">
        <section class="examples-data">
            <div class="holder-content">
                <div class="container">
                    <h1 class="usecase-header text-center">Examples of Newsfeed SmartApp Games</h1>
                    <p class="usecase-body col-md-offset-2 col-md-8">Branded hyper-casual games and interactive experiences we've built for brands across regions and sectors. These include Newsfeed SmartApp playable games, Swipe Up Games and Facebook Playable Ads. These experiences were deployed on social apps, mobile ad networks, Google display network, integrated into existing mobile apps/websites, promoted via e-mailers and in-store QR codes. Click TRY IT to experience.</p>
                </div>

            </div>
        </section>

        <section class="filterTheApp">
            <div class="threePatternData" id="newSearchDivDataDummy">
                <form id="search_app">
                    <input type="text" class="inputDataSearch" placeholder="Search">

                </form>

            </div>
            <div class="threePatternData">
                <select class="ui search dropdown" name="platform" id="platform">
                    <option value="" selected disable hidden>Platform</option>
                    <option value="all">All</option>
                    <option value="newsfeed">Newsfeed SmartApps</option>
                    <option value="swipeupgames">Swipe Up Games</option>
                </select>
            </div>
            <div class="threePatternData">
                <select class="ui dropdown" name="industry" id="industry">
                    <option value="" selected disable hidden>Industry</option>
                    <option value="all">All</option>
                    <option value="alcohol">Alcohol</option>
                    <option value="automotive">Automotive</option>
                    <option value="eCommerceInternet">E-Commerce</option>
                    <option value="education">Education</option>
                    <option value="electronics">Electronics, Phones & More.</option>
                    <option value="fashion">Fashion</option>
                    <option value="financialservices">Financial Services</option>
                    <option value="fmcg">FMCG</option>
                    <option value="foodRestaurants">Food Processing</option>
                    <option value="foodBeverage">Food & Beverage</option>
                    <option value="healthcare">Health Care</option>
                    <option value="manufacturing">Manufacturing</option>
                    <option value="entertainment">Media & Entertainment</option>
                    <option value="personalcare">Personal Care</option>
                    <option value="realestate">Real Estate</option>
                    <option value="retail">Retail</option>
                    <option value="sport">Sport</option>
                    <option value="technology">Technology</option>
                    <option value="tourism">Tourism</option>
                    <option value="transport">Transport</option>
                    <option value="others">Others</option>
                </select>

            </div>
        </section>
        <section class="usecase-list">
            <div class="usecase-holder usesListHead">
                <ul class="row" id="align_app">

                </ul>
                <div id="loadMore">Load more</div>
                <button onclick="topFunction()" id="scrollBtn" title="Go to top"><i class="arrow upDirection"></i></button>
                <div id="notavailable">Sorry, this app has not been added yet!</div>

            </div>


        </section>


    </div>
    <!-- <link rel="stylesheet" href="all_js_uses_cases/semantic/semantic.css"> -->
    <link rel="stylesheet" href="all_js_uses_cases/css/auto.css">
    <?php require_once 'footer.php'; ?>
    <?php require_once 'js_footer.php'; ?>
    <script src="all_js_uses_cases/uses_case2.js?v=<?php echo $date ?>"></script>
    <script src="all_js_uses_cases/dropdown.js?v=<?php echo $date ?>"></script>
    <script src="all_js_uses_cases/app_align.js?v=<?php echo $date ?>"></script>
    <script src="all_js_uses_cases/scroll.js?v=<?php echo $date ?>"></script>
    <!-- load more  -->
    <script>
        var app_li = $(".row>.app").size();
        console.log(app_li);
        x = 12;
        $('.row>.app:lt(' + x + ')').show();

        $('#loadMore').click(function() {
            $('#scroll').show();
            x = (x + 12 <= app_li) ? x + 12 : app_li;
            $('.row>.app:lt(' + x + ')').show();
            if (x == 44) {
                $('#loadMore').hide();
            }
        });
    </script>
    <!-- input js  -->
    <script src="all_js_uses_cases/inputSeach.js?v=<?php echo $date ?>"></script>


</body>

</html>