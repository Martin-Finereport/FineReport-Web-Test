<?php
/**
 * Created by IntelliJ IDEA.
 * User: doufucheng
 * Date: 2020/7/1
 * Time: 9:37 AM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>header</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


</head>
<body>
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <!-- 	  <div  style="overflow: hidden;padding: 0;" class="international_info ">
    <div class="international_info_content" >

    <a href="/en/webinar">
    </a>
    </div>

    </div> -->
    <div class="container" >
        <div class="navbar-header">
            　
            <!-- .navbar-toggle样式用于toggle收缩的内容，即nav-collapse collapse样式所在元素 -->
            <button class="navbar-toggle " type="button" data-toggle="collapse" data-target="#navbar-responsive-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/en/index" class="navbar-brand" style="margin-top:10px"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/header/header_logo.png" alt="FineReport_LOGO" height="30"></a>

        </div>
        <!-- 屏幕宽度小于768px时，div.navbar-responsive-collapse容器里的内容都会隐藏，显示icon-bar图标，当点击icon-bar图标时，再展开。屏幕大于768px时，默认显示。 -->
         <div id="navbar-responsive-collapse" class="collapse navbar-collapse" style="margin-top:-20px">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">Product<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/en/download2"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/header/nav-icon-down.png" class="nav-icon">Download</a></li>
                        <li><a href="/en/activation
"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/header/nav-icon-active.png" class="nav-icon">Free Activation</a></li>
                        <li><a href="/en/beat-corona-virus
"><img src="https://www.finereport.com/images/nav-icon-heart.png" class="nav-icon">Beat COVID-19</a></li>
                        <li><a href="https://endemo.finereport.com/webroot/decision" rel="nofollow"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/header/nav-icon-demo.png" class="nav-icon">Try Demo</a></li>
                        <li><a href="https://www.finereport.com/en/releases" ><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/header/nav-icon-update.png" class="nav-icon">Release History</a></li>
                    </ul>
                </li>
                <li><a href="/en/product" target="_blank" >Why FineReport</a></li>
                <li><a href="http://community.finereport.com/61/" target="_blank">Community</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" >Solutions<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                                     <li><a href="/en/sales-dashboard"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/header/deploy-icon1.png" class="nav-icon">Sales-Dashboards</a></li>
                                     <li><a href="/en/iot-dashboards"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/header/mobile.png" class="nav-icon">Iot-Dashboards</a></li>
                                     <li><a href="/en/financial-dashboards"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/header/dashboard.png" class="nav-icon">Financial-Dashboards</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" >Features<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                                                <li><a href="/en/features/report-designer"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/header/designer.png" class="nav-icon">FineReport Designer</a></li>
                        <li><a href="/en/features/data-integration"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/header/integration.png" class="nav-icon">Data Intergration</a></li>
                        <li><a href="/en/features/data-visualization"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/header/data%20visualization.png" class="nav-icon">Data Visualization</a></li>
                        <li><a href="/en/features/data-entry"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/header/data%20entry.png" class="nav-icon">Data Entry</a></li>
                        <li><a href="/en/features/decision-making-system"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/header/DMP.png" class="nav-icon">Decision-Making Platform</a></li>
                        <li><a href="/en/features/deploy-and-integration"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/header/deploy-icon1.png" class="nav-icon">Deployment & Integration</a></li>
                        <li><a href="/en/features/mobilebi"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/header/mobile.png" class="nav-icon">Mobile Application</a></li>
                        <li><a href="/en/features/tv-dashboard"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/header/dashboard.png" class="nav-icon">Large Screen Dashboard</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" >Resources<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/en/learning-path">Learning Path</a></li>

                        <!-- 				<li><a href="/en/webinar">Webinar</a></li> -->
                        <li><a href="/en/fr_webinar" >Online Webinar</a></li>
                        <li><a href="http://doc.fanruan.com/display/VHD/FineReport" rel="nofollow">Help Document</a></li>
                        <li><a href="/en/video-training" >Video Center</a></li>
                        <li><a href="/en/blog" target="_blank">FineReport Blogs</a></li>

                                   

                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">About Us<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                         <li><a href="/en/about-us" >About Us</a></li>
                        <li><a href="/en/security" >Security</a></li>
                        <li><a href="/en/contact-us" >Contact us</a></li>
                        <li><a href="/en/partner-network" >Partner</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">Language<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://www.finereport.com/">简体中文</a></li>
                        <li><a href="http://www.finereport.com/en/">En</a></li>
                        <li><a href="http://www.finereport.com/tw/">繁體中文</a></li>
                        <li><a href="http://www.finereport.com/jp/">日本語</a></li>
                        <li><a href="http://www.finereport.com/kr/">한국어</a></li>
                        <li><a href="https://finereport.com/id/">bahasa Indonesia</a></li>
                                               
                    </ul>
                </li>
                <li><a href="/en/activation" class="download" style="height:38px">Try Now</a></li>
            </ul>
        </div>
    </div>
</div>






<!-- JS, Popper.js, and jQuery -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>