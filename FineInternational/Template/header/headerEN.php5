<?php
/**
 * Created by Martin.Dou.
 * User: Martin.Dou
 * Date: 2020/7/1
 * Time: 9:44 AM
 */

?>
<?php
/*Template Name: History*/
?>

<?php get_header('history');  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Release History</title>

    <link rel="stylesheet" type="text/css" href="http://www.finereport.com/en/wp-content/themes/Newweb/CSS/History.css?891">


    <style>
        .cd-accordion-menu ul {
            /* by default hide all sub menus */
            display: none;
        }
        .cd-accordion-menu li {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        .cd-accordion-menu input[type=checkbox] {
            /* hide native checkbox */
            position: absolute;
            opacity: 0;
        }
        .cd-accordion-menu label, .cd-accordion-menu a {
            position: relative;
            display: block;

        }

        .cd-accordion-menu label::before, .cd-accordion-menu label::after, .cd-accordion-menu a::after {
            /* icons */
            content: '';
            display: inline-block;
            /*width: 16px;*/
            /*height: 16px;*/
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
        }
        .cd-accordion-menu label {
            cursor: pointer;
        }
        /*.cd-accordion-menu label::before, .cd-accordion-menu label::after {*/
        /*background-image: url(../img/cd-icons.svg);*/
        /*background-repeat: no-repeat;*/
        /*}*/
        .cd-accordion-menu label::before {
            /* arrow icon */
            left: 18px;
            background-position: 0 0;
            -webkit-transform: translateY(-50%) rotate(-90deg);
            -moz-transform: translateY(-50%) rotate(-90deg);
            -ms-transform: translateY(-50%) rotate(-90deg);
            -o-transform: translateY(-50%) rotate(-90deg);
            transform: translateY(-50%) rotate(-90deg);
        }
        .cd-accordion-menu label::after {
            /* folder icons */
            left: 41px;
            background-position: -16px 0;
        }
        /*.cd-accordion-menu a::after {*/
        /*!* image icon *!*/
        /*!*left: 36px;*!*/
        /*background: url(../img/cd-icons.svg) no-repeat -48px 0;*/
        /*}*/
        .cd-accordion-menu input[type=checkbox]:checked + label::before {
            /* rotate arrow */
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
        }
        .cd-accordion-menu input[type=checkbox]:checked + label::after {
            /* show open folder icon if item is checked */
            background-position: -32px 0;
        }
        .cd-accordion-menu input[type=checkbox]:checked + label + ul,
        .cd-accordion-menu input[type=checkbox]:checked + label:nth-of-type(n) + ul {
            /* use label:nth-of-type(n) to fix a bug on safari (<= 8.0.8) with multiple adjacent-sibling selectors*/
            /* show children when item is checked */
            display: block;
        }

        .no-touch .cd-accordion-menu ul label:hover, .no-touch
        .cd-accordion-menu ul a:hover {
            background: #3c3f45;
        }
        .cd-accordion-menu > li:last-of-type > label,
        .cd-accordion-menu > li:last-of-type > a,
        .cd-accordion-menu > li > ul > li:last-of-type label,
        .cd-accordion-menu > li > ul > li:last-of-type a {
            box-shadow: none;
        }
        .cd-accordion-menu ul label::before {
            left: 36px;
        }
        .cd-accordion-menu ul label::after,
        .cd-accordion-menu ul a::after {
            left: 59px;
        }
        .cd-accordion-menu ul ul label,
        .cd-accordion-menu ul ul a {
            padding-left: 100px;
        }
        .cd-accordion-menu ul ul label::before {
            left: 54px;
        }
        .cd-accordion-menu ul ul label::after,
        .cd-accordion-menu ul ul a::after {
            left: 77px;
        }
        .cd-accordion-menu ul ul ul label,
        .cd-accordion-menu ul ul ul a {
            padding-left: 118px;
        }
        .cd-accordion-menu ul ul ul label::before {
            left: 72px;
        }
        .cd-accordion-menu ul ul ul label::after,
        .cd-accordion-menu ul ul ul a::after {
            left: 95px;
        }
        @media only screen and (min-width: 600px) {
            .cd-accordion-menu label, .cd-accordion-menu a {
                /*padding: 24px 24px 24px 82px;*/
                /*font-size: 1.9rem;*/
            }
            .cd-accordion-menu label::before {
                left: 24px;
            }
            .cd-accordion-menu label::after {
                left: 53px;
            }
            .cd-accordion-menu ul label,
            .cd-accordion-menu ul a {
                padding-left: 30px;
            }
            .cd-accordion-menu ul label::before {
                left: 48px;
            }
            .cd-accordion-menu ul label::after,
            .cd-accordion-menu ul a::after {
                left: 77px;
            }
            .cd-accordion-menu ul ul label,
            .cd-accordion-menu ul ul a {
                padding-left: 130px;
            }
            .cd-accordion-menu ul ul label::before {
                left: 72px;
            }
            .cd-accordion-menu ul ul label::after,
            .cd-accordion-menu ul ul a::after {
                left: 101px;
            }
            .cd-accordion-menu ul ul ul label,
            .cd-accordion-menu ul ul ul a {
                padding-left: 154px;
            }
            .cd-accordion-menu ul ul ul label::before {
                left: 96px;
            }
            .cd-accordion-menu ul ul ul label::after,
            .cd-accordion-menu ul ul ul a::after {
                left: 125px;
            }
        }
        .cd-accordion-menu.animated label::before {
            /* this class is used if you're using jquery to animate the accordion */
            -webkit-transition: -webkit-transform 0.3s;
            -moz-transition: -moz-transform 0.3s;
            transition: transform 0.3s;
        }
    </style>



</head>
<body  class="history">
<section class="banner">
    <div class="banner-middle">
        <h1>FineReport Releases</h1>
        <h3><p >Explore the newest Finereport 10.0, faster, more accurate, and more convenient, try all for free</p></h3>
        <p><a href="/en/activation">Download our latest release</a></p>

    </div>



</section>

<section class="release clearfix">
    <div class="release-title">
        Release History
        <hr style="width: 300px;margin: 0 auto;">
    </div>

    <div class="release-left" >
        <div class="directory">Directory</div>
        <div class="line">

        </div>
        <ul class="release-left-inner cd-accordion-menu animated">
            <li>
                <input type="checkbox" name="group-1" id="group-1" >
                <label for="group-1">2020.06</label>
                <ul>
                    <li class="index-child">1.Cluster</li>
                    <li class="index-child">2.Charts</li>
                    <li class="index-child">3.Mobile</li>
                    <li class="index-child">4.Platform</li>
                </ul>
            </li>
            <li>
                <input type="checkbox" name="group-2" id="group-2" >
                <label for="group-2">2020.04</label>
                <ul>
                    <li class="index-child">1.Cluster</li>
                    <li class="index-child">2.Designer</li>
                    <li class="index-child">3.Platform</li>
                    <li class="index-child">4.Chart</li>
                    <li class="index-child">5.Security</li>
                    <li class="index-child">6.Mobile</li>

                </ul>
            </li>
            <li>
                <input type="checkbox" name="group-3" id="group-3" >
                <label for="group-3">2019.12</label>
                <ul>
                    <li class="index-child">1.Designer</li>
                    <li class="index-child">2.Platform</li>
                    <li class="index-child">3.Authorization</li>
                    <li class="index-child">4.Operation and Maintenance</li>
                    <li class="index-child">5.Cluster</li>
                    <li class="index-child">6.Mobile</li>

                </ul>
            </li>
            <li>
                <input type="checkbox" name="group-4" id="group-4" >
                <label for="group-4">2019.7</label>
                <ul>
                    <li class="index-child">1.Intelligent Maintanence</li>
                    <li class="index-child">2.Intelligent Cluster Distribution</li>
                </ul>
            </li>
            <li>
                <input type="checkbox" name="group-5" id="group-5">
                <label for="group-5">2019.5</label>
                <ul>
                    <li class="index-child">1.Operation and Maintenance</li>
                    <li class="index-child">2.Platform</li>
                    <li class="index-child">3.Cluster</li>
                    <li class="index-child">4.Others</li>
                </ul>

            </li>

            <li>
                <input type="checkbox" name="group-6" id="group-6">
                <label for="group-6">Version Updates</label>
                <ul>
                    <li class="index-child">1.Introduction</li>
                    <li class="index-child">2.Platform</li>
                    <li class="index-child">3.Designer</li>
                    <li class="index-child">4.Charts and Big Screen</li>
                    <li class="index-child">5.Cluster</li>
                    <li class="index-child">6.Safety</li>
                    <li class="index-child">7.Intelligent</li>
                    <li class="index-child">8.Operation and Maintenance</li>
                    <li class="index-child">9.Other improvements</li>
                </ul>

            </li>

        </ul>
    </div>



    <div class="release-right" >
        <div class="right-note">Click below to see all the details</div>
        <div class="line-2">

        </div>

        <ul class="cd-accordion-menu animated">
            <li >
                <input type="checkbox" name ="group-7" id="group-7" >
                <label for="group-7" class="label-right-up"><div class="release-right-inner" id="li1" ><h2 class="h2-class" id="li1">FineReport 10.0 Features and Experience Improvements</h2> <span class="time">--2020.6</span></div></label>
                <ul>
                    <li>
                        <input type="checkbox" name ="sub-group-1" id="sub-group-1" >
                        <label for="sub-group-1" class="label-right-down"><h3>1.Cluster</h3></label>

                        <ul>
                            <li><h4>1.1 Cluster Communication Encryption</h4>
                                <p class="specific"> Communication between cluster nodes is encrypted to improve security.
                                </p></li>
                        </ul>
                    </li>
                    <li >
                        <input type="checkbox" name ="sub-group-2" id="sub-group-2" >
                        <label for="sub-group-2" class="label-right-down"><h3 id="li1-2">2. Charts</h3></label>

                        <ul>
                            <li> <h4>2.1 Line Type Supports Dashed Line (New)</h4>
                                <p class="specific">The chart line type now supports dashed lines. The dashed line will be 6px segments with 6px intervals.
                                </p></li>
                            <li><h4>2.2 Export to Excel Resolution Enhance</h4>
                                <p class="specific">
                                    Improved the resolution of charts when exporting to Excel/Word and images individually.
                                </p></li>
                            <li><h4>2.3 Label Auto Adjustment Improvement</h4>
                                <p class="specific">
                                    Solved the problem of label still stacking when automatic adjustment is turned on.
                                </p></li>
                            <li><h4>2.4 Chart Drawing Area Border Improvement</h4>
                                <p class="specific">
                                    When the drawing area is set with the outer border, it will be displayed on the uppermost layer of the drawing area.
                                </p></li>
                            <li><h4>2.5 Line/Area Chart Improvement</h4>
                                <p class="specific">
                                    The line chart mark point type is changed to automatic by default. Automatically chooses to display solid mark points or mark points as none according to the mark point display rules. If the distance between the mark points is too small, the line mark points are displayed as none，otherwise solid;
                                    <br>
                                    For the area chart, the marked point will not be cut off when setting the mark point;
                                    <br>
                                    The automatic adjustment of the line chart and area chart labels is added, to solve the problem of labels displaying over charts.
                                </p></li>

                        </ul>
                    </li>
                    <li>
                        <input type="checkbox" name ="sub-group-3" id="sub-group-3" >
                        <label for="sub-group-3" class="label-right-down"><h3>3. Mobile</h3></label>

                        <ul>
                            <li><h4>3.1 Template URL Generation Supports Parameter (New)</h4>
                                <p class="specific">Fixed the issue where the one-click generation link had two layers of redirection and required transcoding in the case of single sign-on, resulting in the customer being unable to pass external parameters.
                                </p></li>
                            <li> <h4>3.2 Pop-up Window Supports js (New)</h4>
                                <p class="specific">
                                    Mobile template supports using the js function FR.closeMobilePopup() to close pop-up windows.
                                </p></li>
                            <li> <h4>3.3 Chart-related js Support (New)</h4>
                                <p class="specific">
                                    1) Support some of the chart display js events.
                                    <br>
                                    2) Support chart reload js event
                                    <br>
                                    3) Support chart switch js event
                                </p></li>
                            <li> <h4>3.4 Back Option under Screen Rotation</h4>
                                <p class="specific">
                                    The back button is not displayed under rotated screen when it's an unforced rotation.
                                </p></li>
                            <li> <h4>3.5 Transparency Setting</h4>
                                <p class="specific">
                                    In the mobile terminal display, the report block, chart block, and tab component support background transparency. The background of the mobile terminal pop-up window also supports transparency setting.
                                </p></li>
                            <li> <h4>3.6 H5 Resources Support CDN Content Distribution</h4>
                                <p class="specific">
                                    Now the H5 plugin resources are all located on the report server, and the speed of accessing the H5 template is limited by the report server's broadband. You can set resource path in the platform to speed up resource requests.
                                </p></li>
                            <li> <h4>3.7 OEM Message Push Platform Replacement</h4>
                                <p class="specific">
                                    The official App's MSG push is replaced by the pigeon paid version, which solves the problem of low push arrival rate and the failure to receive messages when Android App is running in the background. The free version will be completely offline in October 2020. The official APP and OEM versions support the paid version SDK .
                                </p></li>
                            <li> <h4>3.8 Photo Upload Improvement</h4>
                                <p class="specific">
                                    Now you can select original images.
                                </p></li>
                            <li> <h4>3.9 Folding Icon Improvement</h4>
                                <p class="specific">
                                    Folding and unfolding default icons are beautified, and the color and size are configurable.
                                </p></li>
                            <li> <h4>3.10 Widget Supports Custom General Setting</h4>
                                <p class="specific">
                                    Mobile display now contains FR existing attributes. And the unique attributes of mobile display are treated as general attributes separately, which also supports js calling.
                                </p></li>
                        </ul>
                    </li>
                    <li>
                        <input type="checkbox" name ="sub-group-4" id="sub-group-4" >
                        <label for="sub-group-4" class="label-right-down"><h3>4. Platform</h3></label>

                        <ul>
                            <li><h4>4.1 Overwrite/Increment mode under Import/Synchronization (New)</h4>
                                <p class="specific">
                                    1) When importing users, you can choose whether to overwrite user information. If you do not overwrite, you will not update the modified password and other information;
                                    <br>
                                    2) When you synchronize users, you can choose whether to overwrite user information. If you do not overwrite, you can modify user password and other information;
                                    <br>
                                    3) When the ID of the same user name conflicts during synchronization, the original id will be deleted and the new id user will be synchronized.
                                </p></li>
                            <li> <h4>4.2 Prameter Supported under Task Schedule - Execute Condition - Custom Class (New)</h4>
                                <p class="specific">
                                    The backend provides an interface to enable the class to obtain the value of the parameter, thereby realizing the reuse of scheduled tasks.
                                </p></li>
                            <li> <h4>4.3 Enable All-role Setting (New)</h4>
                                <p class="specific">
                                    Super Admin can now enable the authorization of all roles by one click, using a plugin.
                                </p></li>
                            <li> <h4>4.4 Custom Login Page Supports Origin Redirection</h4>
                                <p class="specific">
                                    When template permission is enabled, one can now be directed to the template after successful logging in through custom login page.
                                </p></li>
                            <li> <h4>4.5 Platform Title Header Font Color Setting</h4>
                                <p class="specific">
                                    If title background is set an image, then 'Title font and icon color' setting will display. Dark background images are recommended.
                                </p></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li >
                <input type="checkbox" name ="group-8" id="group-8">
                 <label for="group-8" class="label-right-up"><div class="release-right-inner" id="li1" ><h2 class="h2-class" id="li1">FineReport 10.0 Features and Experience Improvements</h2> <span class="time">--2020.4</span></div></label>

                <ul>
                    <li>
                        <input type="checkbox" name ="sub-group-5" id="sub-group-5">
                        <label for="sub-group-5" class="label-right-down"><h3>1.Cluster</h3></label>

                        <ul>
                            <li><h4>1.1 Redis Sentinel Mode Plugin(New)</h4>
                                <p class="specific"> Based on the existing framework, it supports Redis Sentinel service in the form of a plugin, allowing users to configure and connect to the Redis Sentinel service in the front end, and supports all functions of the current state server.</p></li>
                            <li> <h4>1.2 Cluster node management optimization</h4>
                                <p class="specific">
                                    Conduct message notification of node health detection and communication abnormality.</p></li>
                            <li> <h4>1.3 File synchronization & cache logic optimization</h4>
                                <p class="specific">
                                    Reduce function usage and logic complexity, optimize file synchronization & cache logic.</p></li>

                        </ul>
                    </li>
                    <li >
                        <input type="checkbox" name ="sub-group-6" id="sub-group-6">
                        <label for="sub-group-6" class="label-right-down"><h3 id="li1-2">2.Designer</h3></label>

                        <ul>
                            <li> <h4>2.1 Designer Start Guard(New)</h4>
                                <p class="specific"> Give solutions when you encounter the designer startup problems such as flashback, freezing, etc.
                                </p></li>
                            <li><h4>2.2 When the remote link version does not match, it prompts that some functions are not available</h4>
                                <p class="specific">
                                    Optimize the remote design specifications, and prompt that some functions will be affected when the remote link version is inconsistent.</p></li>
                            <li><h4>2.3 Print authentication mechanism optimization</h4>
                                <p class="specific">
                                    Optimize the authentication printing logic to avoid unauthorized loopholes and cross-authority printing. </p></li>
                            <li><h4>2.4 Print timeout</h4>
                                <p class="specific">
                                    Optimize the start speed of fineprint and reduce the phenomenon of local print start time out.
                                </p></li>
                        </ul>
                    </li>
                    <li>
                        <input type="checkbox" name ="sub-group-7" id="sub-group-7">
                        <label for="sub-group-7" class="label-right-down"><h3>3.Platform</h3></label>

                        <ul>
                            <li><h4>3.1 Department / user / role ranking and search optimization</h4>
                                <p class="specific"> Department search changed from the original search only to the first 10 results to be able to search out all matching results; at the same time optimize departments, users, roles, sorted by first letter by default.</p></li>
                            <li> <h4>3.2 Permission export plugin(New)</h4>
                                <p class="specific">
                                    Permission export plugin adapts to 10.0. </p></li>
                            <li> <h4>3.3 homepage settings optimization</h4>
                                <p class="specific">
                                    Add clear operation to facilitate setting the home page of each terminal. </p></li>
                            <li> <h4>3.4 Task schedule supports obtaining aggregation report units(New)</h4>
                                <p class="specific">
                                    Added task schedule support to get aggregation report cells. </p></li>
                            <li> <h4>3.5 Restriction on sub-administrator's operations</h4>
                                <p class="specific">
                                    Optimize the sub-administrator's authority logic to avoid the logic problem of sub-administrators adjusting their own authority.</p></li>
                            <li> <h4>3.6 Framework theme, multi-language support</h4>
                                <p class="specific">
                                    New internationalization configuration plugin, support platform switching language framework and custom internationalization configuration, built-in zh_CN (Simplified Chinese), zh_TW (Traditional Chinese), en_ US (English), ja_JP (Japanese), ko_KR (Korean).</p></li>
                            <li> <h4>3.7 Separate management and directory</h4>
                                <p class="specific">
                                    When the directory and management menu are switched, the reports opened in the previous directory are still retained.</p></li>
                            <li> <h4>3.8 Solve the problem that the file name of the task schedule file is too long</h4>
                                <p class="specific">
                                    Task schedule file name logic will add parameters, but the Windows system has restrictions on the length of the file path, and the customer's actual business has a parameter value that exceeds the limit length, resulting in the failure to generate a result file. Can identify the parameter path by converting to id to solve the problem.</p></li>

                        </ul>
                    </li>
                    <li>
                        <input type="checkbox" name ="sub-group-8" id="sub-group-8">
                        <label for="sub-group-8" class="label-right-down"><h3>4.Chart</h3></label>

                        <ul>
                            <li><h4>4.1 Map fuzzy matching</h4>
                                <p class="specific"> Optimized chart matching logic and added fuzzy matching area name function.(Currently only support Chinese characters matching</p></li>
                            <li> <h4>4.2 Dashboard style optimization</h4>
                                <p class="specific">
                                    Optimize the visual style of the dashboard.
                                </p></li>
                            <li> <h4>4.3 Multiple map tab switching log optimization</h4>
                                <p class="specific">
                                    Multi-map tab switching log is optimized to be a world map icon.

                                </p></li>
                            <li> <h4>4.4 Add tags automatically(New)</h4>
                                <p class="specific">
                                    Automatically add the position of the column chart label to improve the production efficiency. </p></li>
                            <li> <h4>4.5 New color scheme</h4>
                                <p class="specific">
                                    New color scheme options are added to optimize the interactive experience.
                                </p></li>
                            <li> <h4>4.6 Cancel phantomjs solution</h4>
                                <p class="specific">
                                    Optimize the chart export experience and cancel the phantomjs solution.
                                </p></li>

                        </ul>
                    </li>
                    <li>
                        <input type="checkbox" name ="sub-group-9" id="sub-group-9">
                        <label for="sub-group-9" class="label-right-down"><h3>5.Security</h3></label>

                        <ul>
                            <li><h4>5.1 URL Center Connection Button(New)</h4>
                                <p class="specific">To meet the customer's need to prohibit access to the external network, after the shutdown, the server's request for active links in FanRuan Cloud can be stopped. </p></li>


                        </ul>
                    </li>
                    <li>
                        <input type="checkbox" name ="sub-group-10" id="sub-group-10">
                        <label for="sub-group-10" class="label-right-down"><h3>6.Mobile</h3></label>

                        <ul>
                            <li><h4>6.1 H5 supports new data entry(New)</h4>
                                <p class="specific"> H5 not only supports data entry (including insert and delete functions), but also begins to support data entry on related js.</p></li>
                            <li> <h4>6.2 Support popup display(New)</h4>
                                <p class="specific">
                                    H5 & APP can display sub-content through the pop-up dialog box.</p></li>
                            <li> <h4>6.3 Mobile style of drop-down box(New)</h4>
                                <p class="specific">
                                    Added drop-down box mobile terminal style. </p></li>
                            <li> <h4>6.4 Simple date mobile terminal style(New)</h4>
                                <p class="specific">
                                    Added simple date mobile terminal style. </p></li>
                            <li> <h4>6.5 Scan code supports photo album & flashlight(New)</h4>
                                <p class="specific">
                                    Suitable for special scenes such as low light.</p></li>
                            <li> <h4>6.6 Support web page plugin(New)</h4>
                                <p class="specific">
                                    Added mobile terminal adaptation webpage frame.</p></li>
                            <li> <h4>6.7 Share export optimization</h4>
                                <p class="specific">
                                    Call the mobile phone OS, add more comment sharing export, such as line, SMS, or other apps</p></li>
                            <li> <h4>6.8 When WeChat or DingTalk match users manually, the display value of the user name is optimized</h4>
                                <p class="specific">
                                    Fix the problem of the display value of the user name of the remaining DingTalk synchronization report.</p></li>
                            <li> <h4>6.9 Jiugongge directory supports style adjustment</h4>
                                <p class="specific">
                                    You can adjust the number of columns in Jiugongge, icon size, font size, etc.</p></li>
                            <li> <h4>6.10 APP home page refresh</h4>
                                <p class="specific">
                                    You can click the homepage icon to refresh the APP homepage. </p></li>
                            <li> <h4>6.11 The custom report control icon supports custom display</h4>
                                <p class="specific">
                                    Text and number controls can be customized to display under the report preview. </p></li>
                            <li> <h4>6.12 H5 homepage supports bottom switch</h4>
                                <p class="specific">
                                    The homepage of H5 can be switched at the bottom like an APP.</p></li>


                        </ul>
                    </li>
                </ul>
            </li>
            <li >
                <input type="checkbox" name ="group-9" id="group-9">
                 <label for="group-9" class="label-right-up"><div class="release-right-inner" id="li1" ><h2 class="h2-class" id="li1">FineReport 10.0 Features and Experience Improvements</h2> <span class="time">--2019.12</span></div></label>

                <ul>
                    <li>
                        <input type="checkbox" name ="sub-group-11" id="sub-group-11">
                        <label for="sub-group-11" class="label-right-down"><h3>1.Designer</h3></label>

                        <ul>
                            <li><h4>1.1 Watermark density settings</h4>
                                <p class="specific"> Server and template watermark settings support horizontal and vertical density adjustment. Preview takes effect in real time.
                                </p></li>
                            <li> <h4>1.2 Startup speed optimization</h4>
                                <p class="specific">
                                    Speed up the designer startup, redesign the startup page. The built-in server is to be started when selected, so that the built-in server does not start together with the designer.

                                </p></li>

                        </ul>
                    </li>
                    <li >
                        <input type="checkbox" name ="sub-group-12" id="sub-group-12">
                        <label for="sub-group-12" class="label-right-down"><h3 id="li1-2">2.Platform</h3></label>

                        <ul>
                            <li> <h4>2.1 WebSocket optimization</h4>
                                <p class="specific"> Optimized the prompts of problems caused by unconnected WebSockets such as login exceptions, failure to view log monitoring and data update, multi-person operation without updates, or conflict alerts.<br/>

                                    Provide WebSocket port and path configuration page.<br/>

                                    Provide WebSocket configuration interface under https environment.
                                </p></li>
                            <li><h4>2.2 Data connection usability improvement & support for non-JDBC data connection</h4>
                                <p class="specific">
                                    Support the data connection authorization of non-JDBC data source such as JSON. Usability of data connection is also improved.

                                </p></li>
                            <li><h4>2.3 Task schedule structure optimization</h4>
                                <p class="specific">
                                    Optimize the code structure and interactions of task schedule.

                                </p></li>
                            <li><h4>2.4 Custom scroll bar</h4>
                                <p class="specific">
                                    Change the scroll bar style of the directory to custom.
                                </p></li>
                            <li><h4>2.6 Enhanced interaction</h4>
                                <p class="specific">
                                    Optimized common interactions, such as the prompts after synchronization, runtime and loading effect of authorization configuration.
                                </p></li>
                            <li><h4>2.7 Login verification</h4>
                                <p class="specific">
                                    Interaction is enhanced to make the difference between two methods more obvious. Last verification method is remembered to improve the ease of use.
                                </p></li>
                            <li><h4>2.8 Manage tabs integration</h4>
                                <p class="specific">
                                    Manage tabs such as directory, user, task schedule management can be integrated by the html page interface provided.

                                </p></li>
                            <li><h4>2.9 Server dataset</h4>
                                <p class="specific">
                                    Platform supports server dataset configurations.<br/>

                                    For the SQL dataset, custom SQL query and tree dataset configurations are supported in the platform.
                                </p></li>
                            <li><h4>2.10 Modern theme</h4>
                                <p class="specific">
                                    Modern theme comes back again.

                                </p></li>
                        </ul>
                    </li>
                    <li>
                        <input type="checkbox" name ="sub-group-13" id="sub-group-13">
                        <label for="sub-group-13" class="label-right-down"><h3>3.Authorization</h3></label>

                        <ul>
                            <li><h4>3.1 Hierarchical authorization – Secondary administrator</h4>
                                <p class="specific"> Optimize the scope of the secondary administrator authorization to achieve more precise control.
                                </p></li>
                            <li> <h4>3.2 User management improvement</h4>
                                <p class="specific">
                                    User management is improved to maintain unity of front end and back end, avoid conflicts and to provide clear prompts and solutions to errors.
                                </p></li>

                        </ul>
                    </li>
                    <li>
                        <input type="checkbox" name ="sub-group-14" id="sub-group-14">
                        <label for="sub-group-14" class="label-right-down"><h3>4.Operation and Maintenance</h3></label>

                        <ul>
                            <li><h4>4.1 Smart release improvement</h4>
                                <p class="specific"> After "Smart Release" is enabled, it will accurately calculate the real-time load of the system, choose the most appropriate release strategy (suspend / release) and release target, and ensure the stability of the system as well as user experience (Templates are killed only when they are most harmful to the system).
                                </p></li>
                            <li> <h4>4.2 Memory configuration recommendation</h4>
                                <p class="specific">
                                    According to the operating conditions of the system, a reasonable memory configuration is recommended to users in the platform.

                                </p></li>
                            <li> <h4>4.3 VCS</h4>
                                <p class="specific">
                                    Disk usage of template VCS is reduced.

                                </p></li>

                        </ul>
                    </li>
                    <li>
                        <input type="checkbox" name ="sub-group-15" id="sub-group-15">
                        <label for="sub-group-15" class="label-right-down"><h3>5.Cluster</h3></label>

                        <ul>
                            <li><h4>5.1 Cluster synchronization optimization</h4>
                                <p class="specific">When "Automatic synchronization between nodes" mode is selected, the first node that joins the cluster is the reference node by default. The template resource files uploaded to the reference node can be automatically synchronized to other non-reference nodes.
                                </p></li>
                            <li> <h4>5.2 Cluster cache mode configurationn</h4>
                                <p class="specific">
                                    Cache mode configuration is added. Users can choose from "active cache", "passive cache", and "close cache". After the cache is enabled, system performance can be improved and template/resource file reading and writing time is reduced. And when using the file server, if the cache is enabled, the system can continue to provide external services after the file server goes down. Currently the default cached resource files include template files, configuration files, map data, etc. Four folders "reportlets /", "resources /", "assets /", and "dashboards" are included.
                                </p></li>
                            <li> <h4>5.3 Cluster parameter configuration</h4>
                                <p class="specific">
                                    Redis storage key prefixes and internal forwarding parameters can be configured at front end.
                                </p></li>
                            <li> <h4>5.4 Shared external storage plugin</h4>
                                <p class="specific">
                                    If you need to use cluster shared NAS, NFS, external disks, etc. to read and write resource files, you can mount these to disk directories, and install shared external storage plugin, and configure the mounted disk directories for reading and writing.
                                </p></li>
                            <li> <h4>5.5 Exception notification</h4>
                                <p class="specific">
                                    Optimized the triggering conditions of cluster exception notification. Two scenarios are added: notice when the Redis cluster node is abnormal and notice when the file server is down.
                                </p></li>

                        </ul>
                    </li>
                    <li>
                        <input type="checkbox" name ="sub-group-16" id="sub-group-16">
                        <label for="sub-group-16" class="label-right-down"><h3>6.Mobile</h3></label>

                        <ul>
                            <li><h4>6.1 New Styles</h4>
                                <p class="specific"> New radio button group style;
                                    <br>

                                    New calendar date style;
                                    <br>

                                    Directory can be inserted into templates to integrate homepage and directory and to meet the need of homepage customization.
                                    <br>

                                    New directory style plugins are added to offer multiple directory styles.
                                    <br>

                                    Director-insert-into-template function is added to integrate homepage and directory, and to meet the customization level of some customers' homepages.
                                </p></li>
                            <li> <h4>6.2 Enhanced interaction</h4>
                                <p class="specific">
                                    H5 quick return plugin reduces number of clicks and makes it more convenient for users to operate.
                                    <br>

                                    Component freeze: you can freeze the specified component on the top or freeze after sliding to the top.

                                    <br>
                                    Data point prompt optimization: The data point prompt displayed at the top is replaced by display following click.

                                </p></li>
                            <li> <h4>6.3 Other improvements</h4>
                                <p class="specific">
                                    OEM can remove offline and favorite function modules.
                                    <br>

                                    Added FR.remoteEvaluateAsync support.
                                    <br>

                                    Screen rotation, two-finger zoom, select-to-activate can be configured through settings.

                                </p></li>

                        </ul>
                    </li>
                </ul>
            </li>
            <li >

                <input type="checkbox" name ="group-10" id="group-10">
                 <label for="group-10" class="label-right-up"><div class="release-right-inner" id="li1" ><h2 class="h2-class" id="li1">FineReport 10.0 Features and Experience Improvements</h2> <span class="time">--2019.7</span></div></label>


                <ul>
                    <li>
                        <input type="checkbox" name ="sub-group-17" id="sub-group-17">
                        <label for="sub-group-17" class="label-right-down"><h3>1.Intelligent Maintenance</h3></label>

                        <ul>
                            <li><h4>1.1 More Accurate Load Detection </h4>
                                <p class="specific"> Instead of ForceGC, the load judgment algorithm is based on the development of JVM underlying principle. It improves the accuracy and timeliness of system load detection and thus provides accurate system status monitoring and operation optimization.
                                </p></li>
                            <li> <h4>1.2 More Intelligent Dynamic Release</h4>
                                <p class="specific">
                                    The strategy of suspending templates is added to the intelligent release, based on existing session cleanup and queued waits. It optimizes the logic of queuing and ensures the availability of queuing logic.
                                    Smart release no longer requires the user to set various thresholds. It will intelligently select the most appropriate release strategy based on the load status to ensure stable operation of the system while minimizing adverse impact.

                                </p></li>

                        </ul>
                    </li>
                    <li >
                        <input type="checkbox" name ="sub-group-18" id="sub-group-18">
                        <label for="sub-group-18" class="label-right-down"><h3 id="li1-2">2.Intelligent Cluster Distribution</h3></label>

                        <ul>
                            <li> <h4>2.1</h4>
                                <p class="specific"> Obtain the memory usage of each node, and automatically enable the intelligent distribution mode of the high-load node based on the set smart distribution mode trigger value.
                                </p></li>
                            <li><h4>2.2 </h4>
                                <p class="specific">
                                    After a node is enabled the smart distribution mode, new requests to the high-load nodes can be randomly distributed to other low-load nodes to maintain a healthy loading of each node in the cluster environment and ensure the regular operation of each node in the cluster.

                                </p></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li>
                <input type="checkbox" name ="group-11" id="group-11">
                &nbsp;
                <label for="group-11" class="label-right-up"><div class="release-right-inner" id="li1" ><h2 class="h2-class" id="li1">FineReport 10.0 Features and Experience Improvements</h2> <span class="time">--2019.5</span></div></label>

                <ul>
                    <li>
                        <input type="checkbox" name ="sub-group-19" id="sub-group-19">
                        <label for="sub-group-19" class="label-right-down"><h3>1.Operation and Maintenance</h3></label>

                        <ul>
                            <li> <h4>1.1 GC Log</h4>
                                <p class="specific">The default output GC log can be used to observe the status of system GC. The analysis of the GC log is also helpful for us to know the condition of system operation.
                                </p></li>
                            <li> <h4>1.2 The Record of Unfinished Template Calculations</h4>
                                <p class="specific">
                                    Whether the template calculation is completed is marked under the complete field in the fine_record_execute table (1 indicates that the calculation is completed, and 0 indicates that the calculation is not completed).
                                </p></li>
                            <li><h4>1.3 Template Restriction Enhancement</h4>
                                <p class="specific">
                                    The template restriction function has been enhanced to allow users to restrict on only some of the templates. The limitation on the number of imported Excel cells and the number of submission records is also added. The user can enter the Cartesian product on the premise that the limitation of submission record number is turned on.
                                </p></li>
                            <li> <h4>1.4 Output Log Compression</h4>
                                <p class="specific">
                                    : The fanruan.log is compressed at 0 o'clock every day to save disk space. If there is log4j properties file under WEB_INF/config folder in the project, you need to delete it to make the timed compression function take effect.
                                </p></li>

                            <li><h4>1.5 Swift Queries Support More Syntax</h4>
                                <p class="specific">
                                    The Record of Unfinished Template Calculations: Whether the template calculation is completed is marked under the complete field in the fine_record_execute table (1 indicates that the calculation is completed, and 0 indicates that the calculation is not completed).
                                </p>
                            </li>

                        </ul>
                    </li>
                    <li >
                        <input type="checkbox" name ="sub-group-20" id="sub-group-20">
                        <label for="sub-group-20" class="label-right-down"><h3 >2.Platform</h3></label>

                        <ul>
                            <li>  <h4>2.1 Only the Open Permissions Are Displayed</h4>
                                <p class="specific">The default output GC log can be used to observe the status of system GC. The analysis of the GC log is also helpful for us to know the condition of system operation.
                                </p>
                            </li>
                            <li><h4>2.2 Provide the Permission Semi-Selected State</h4>
                                <p class="specific">
                                    Whether the template calculation is completed is marked under the complete field in the fine_record_execute table (1 indicates that the calculation is completed, and 0 indicates that the calculation is not completed).
                                </p>
                            </li>
                            <li><h4>2.3 User Permission Configuration Optimization</h4>
                                <p class="specific">
                                    The template restriction function has been enhanced to allow users to restrict on only some of the templates. The limitation on the number of imported Excel cells and the number of submission records is also added. The user can enter the Cartesian product on the premise that the limitation of submission record number is turned on.
                                </p>
                            </li>
                            <li><h4>2.4 Permission Performance Optimization</h4>
                                <p class="specific">
                                    : The fanruan.log is compressed at 0 o'clock every day to save disk space. If there is log4j properties file under WEB_INF/config folder in the project, you need to delete it to make the timed compression function take effect.
                                </p>
                            </li>
                            <li><h4>2.5 Login Optimization</h4>
                                <p class="specific">
                                    The Record of Unfinished Template Calculations: Whether the template calculation is completed is marked under the complete field in the fine_record_execute table (1 indicates that the calculation is completed, and 0 indicates that the calculation is not completed).
                                </p>
                            </li>
                            <li><h4>2.6 Login Page Optimization Settings</h4>
                                <p class="specific">
                                    The Record of Unfinished Template Calculations: Whether the template calculation is completed is marked under the complete field in the fine_record_execute table (1 indicates that the calculation is completed, and 0 indicates that the calculation is not completed).
                                </p>
                            </li>
                            <li><h4>2.7 Upgrade Tool Optimization</h4>
                                <p class="specific">
                                    The Record of Unfinished Template Calculations: Whether the template calculation is completed is marked under the complete field in the fine_record_execute table (1 indicates that the calculation is completed, and 0 indicates that the calculation is not completed).
                                </p>
                            </li>
                            <li><h4>2.8 </h4>
                                <p class="specific">
                                    Timed scheduling supports mailbox customization at the recipient.
                                </p>
                            </li>
                            <li><h4>2.9 </h4>
                                <p class="specific">
                                    9 After hierarchical permissions is enabled, sub-admins can manage roles within their own permissions, including adding, deleting, modifying roles and configurations.
                                </p>
                            </li>
                            <li><h4>2.10 Data Migration Supports Configuration Modification</h4>
                                <p class="specific">
                                    After the external database is configured, one can use the new library without data migration.
                                </p>
                            </li>


                        </ul>
                    </li>
                    <li >
                        <input type="checkbox" name ="sub-group-21" id="sub-group-21">
                        <label for="sub-group-21" class="label-right-down"><h3>3.Cluster</h3></label>

                        <ul>
                            <li> <h4>3.1 Jar Detection</h4>
                                <p class="specific">
                                    Using the new jar detection method, the first node jar package added to the cluster is used as a reference to accurately identify the difference between the new one and the current jar package. The detection can cover all jar files under webroot/WEB-INF/lib folder.
                                </p>
                            </li>
                            <li><h4>3.2 Exception Notification</h4>
                                <p class="specific">
                                    1) The node management page will display exception record; 2) After the cluster exception message is enabled, the message can be sent via email\SMS\platform message.
                                </p>
                            </li>
                            <li><h4>3.3 Cluster Lic Registration and Export Optimization</h4>
                                <p class="specific">
                                    For the pre-10.0 version cluster lic export, the splicing method requires complicated operation and leads to low fault tolerance. Now the machine code and the cluster Registration Information.rif file is exported automatically.
                                </p>
                            </li>
                            <li><h4>3.4 Cluster Internal Forwarding Logic Optimization</h4>
                                <p class="specific">
                                    In 10.0, the internal forwarding and processing logic of the cluster in the face of abnormal conditions (partial node downtime) is optimized.
                                </p>
                            </li>
                            <li><h4>3.5 Cluster Configuration Abnormality Check Optimization</h4>
                                <p class="specific">
                                    When the cluster is connected, the availability check is performed. If it fails, the error is reported, and the failure reason is displayed to help customers investigate the abnormal situation. The communication protocol is changed to TCP by default. The protocol can also be changed when the cluster is turned on.
                                </p>
                            </li>
                        </ul>
                    </li>
                    <li >
                        <input type="checkbox" name ="sub-group-22" id="sub-group-22">
                        <label for="sub-group-22" class="label-right-down"><h3>4.Others</h3></label>

                        <ul>
                            <li><h4>4.1 Deployment Wizard</h4>
                                <p class="specific">
                                    Due to the introduction of some new technologies that makes deployment unstable, the new Deployment Wizard feature provides guidance when accessing the platform page after a deployment failure, providing help to locate problems and guide repairs.
                                </p>
                            </li>
                            <li><h4>4.2 Image Loading Performance Optimization</h4>
                                <p class="specific">
                                    Optimize the loading mode of images, increase the image cache size, and optimize the performance problems caused by large images.
                                </p>
                            </li>
                            <li><h4>4.3 Data Migration Adapt to RDS Mysql</h4>
                                <p class="specific">
                                    Data Migration now supports Alibaba Cloud's RDS Mysql.
                                </p>
                            </li>
                            <li><h4>4.4 Multi-Level Reporting Independent Link Permission</h4>
                                <p class="specific">
                                    Use a separate page to configure the access permission of multi-level reporting independent link. Solve the problem that the multi-level reporting function is unavailable when only “Multi-level reporting” feature is purchased while “Decision-making platform” feature is not.
                                </p>
                            </li>
                            <li><h4>4.5 Template Version Management Optimization</h4>
                                <p class="specific">
                                    Template version management is now built in. The saving mode is optimized from automatic to manual, which speeds up version restorage, reduces the space occupied by the saved versions, supports version filtering.
                                </p>
                            </li>
                        </ul>
                    </li>
                </ul>

            </li>
            <li >
                <input type="checkbox" name ="group-12" id="group-12">
                 <label for="group-12" class="label-right-up"><div class="release-right-inner" ><h2 class="h2-class" >FineReport 9.0 and 10.0 Version Updates</h2> <a href="http://www.finereport.com/en/wp-content/themes/Newweb/images/History/FineReport%20Releases.pdf" class="release-right-3-a"><span>Download</span></a></div></label>
                               

                <ul>
                    <li>
                        <input type="checkbox" name ="sub-group-23" id="sub-group-23">
                        <label for="sub-group-23" class="label-right-down"><h3>1.Introduction</h3></label>

                        <ul>
                            <li>
                                <p class="specific">
                                    If comparing FineReport to a tall tree, FineReport 10.0 (FR10) aims to root more deeply. From the perspective of availability, safety, and intelligence, we extend the business scenarios and provide a wider imagination space. We hope to make FineReport a dependable reporting center with the capability to support complex reporting business and ensure the safety of business data.
                                </p></li>

                        </ul>
                    </li>
                    <li >
                        <input type="checkbox" name ="sub-group-24" id="sub-group-24">
                        <label for="sub-group-24" class="label-right-down"><h3>2.Platform</h3></label>

                        <ul>
                            <li> <h4>2.1 Appearance</h4>
                                <p class="specific">The modern style of platform makes it interactive and easy-to-use.
                                </p></li>
                            <li><h4>2.2 Stability</h4>
                                <p class="specific">
                                    Store log via Swift engine (developed by FanRuan Software Co., Ltd.) to improve the efficiency of log retrieval and analysis, prevent system crash and data loss due to too large log files, and realize the support for extreme large user volume with second level response.
                                </p></li>
                            <li> <h4>2.3 Enhanced Functionalities</h4>
                                <p class="specific">Text Message Platform: Construct a text message platform to support identity authentication, alarm of failed tasks and informing memory threshold.
                                    <br/>
                                    Advanced User Management and Permission Settings: Increase user-assigned permissions and improve accessibility
                                    <br/>
                                    System Message: Add message for the platform system to inform manager/users of failed timed scheduling tasks and memory threshold.
                                    <br/>
                                    Single Logged-In: Support killing existing logging-in and prohibiting second logging-in. Provide message for last logging-in.
                                    <br/>
                                    Optimized Directory Management: Support batch addition/deletion of reports, rearranging the order of reports, and tidying reports across directories.
                                    <br/>
                                    Enhanced Timed Scheduling: Support alert for failed tasks, running tasks for once, copying tasks, and task ordering.

                                </p></li>
                            <li> <h4>2.4 Data Connection in The Platform</h4>
                                <p class="specific">Data connection is included in the directory. New data connection can be created on the platform.
                                </p></li>
                        </ul>
                    </li>
                    <li >
                        <input type="checkbox" name ="sub-group-25" id="sub-group-25">
                        <label for="sub-group-25" class="label-right-down"><h3>3.Designer</h3></label>

                        <ul>
                            <li> <h4>3.1 Remote Design Template Permission Management </h4>
                                <p class="specific"> Support using the account of system management to configure remote design users and allocate template permission for individual users. Remote design supports adding, deleting, and renaming files and folders.
                                </p></li>
                            <li><h4>3.2 Reconstruct Data Entry Function</h4>
                                <p class="specific">
                                    Solve the problem of display lag and paves the way for subsequent style expansion.

                                </p></li>
                            <li><h4>3.3 Designer Optimization</h4>
                                <p class="specific">
                                    Fix bugs related to memory leaks; add the function to limit the maximum number of cache templates; Remove the right-click frame to make the operation process smoother; Increase the report block zoom function, which is conducive to design the report from a global perspective.

                                </p></li>
                            <li><h4>3.4 Designer solves the 0kb problem (template temporary file storage)</h4>
                                <p class="specific">
                                    Fix bugs related to memory leaks; add the function to limit the maximum number of cache templates; Remove the right-click frame to make the operation process smoother; Increase the report block zoom function, which is conducive to design the report from a global perspective.

                                </p></li>
                            <li><h4>3.5 </h4>
                                <p class="specific">
                                    The "Encoding Conversion" configuration option is removed in Designer Data Connection Interface.

                                </p></li>
                        </ul>
                    </li>
                    <li >
                        <input type="checkbox" name ="sub-group-26" id="sub-group-26">
                        <label for="sub-group-26" class="label-right-down"><h3>4.Charts and Big Screen</h3></label>

                        <ul>
                            <li> <h4>4.1 Internal Chart Types  </h4>
                                <p class="specific"> Instead of ForceGC, the load judgment algorithm is based on the development of JVM underlying principle. It improves the accuracy and timeliness of system load detection and thus provides accurate system status monitoring and operation optimization.
                                </p></li>
                            <li><h4>4.2 Animation</h4>
                                <p class="specific">
                                    After a node is enabled the smart distribution mode, new requests to the high-load nodes can be randomly distributed to other low-load nodes to maintain a healthy loading of each node in the cluster environment and ensure the regular operation of each node in the cluster.

                                </p></li>
                            <li><h4>4.3 Remote-Screen Control</h4>
                                <p class="specific">
                                    Project is projected to mobile devices via media transmission, and screens can be controlled remotely through operations such as taping.

                                </p></li>
                            <li><h4>4.4 New Functionalities </h4>
                                <p class="specific">
                                    Charts with rectangular coordinate systems support multiple category axes to display the category relationships in different hierarchies simultaneously.
                                    <br/>
                                    When data are updated at the back end, the charts at the front end demonstrate the updated content dynamically.
                                    <br/>
                                    One can modify the format of data sheet via conditional attributes for special data.
                                    <br/>
                                    The column series interval setting supports negative values.
                                    <br/>
                                    Combination chart axis with different values can set 0 value alignment.
                                    <br/>
                                    Built-in map editing interface has changed.
                                    <br/>
                                    The carousel arrow can be canceled to meet the large screen display effect.
                                    <br/>
                                    When there is no data, add a chart prompt effect.
                                    <br/>
                                    Overall optimization of the animation.

                                </p></li>
                        </ul>
                    </li>
                    <li >
                        <input type="checkbox" name ="sub-group-27" id="sub-group-27">
                        <label for="sub-group-27" class="label-right-down"><h3>5.Custer</h3></label>
                        <ul>
                            <li> <h4>5.1 Hot Deployment </h4>
                                <p class="specific"> No need to reboot cluster for node deletion. Node addition can be realized through copying node and start cluster.
                                </p></li>
                            <li><h4>5.2 High Availability</h4>
                                <p class="specific">
                                    Support automatic shift to other nodes when one node crash, so the functionalities are still available for clients and users do not need to log in again.

                                </p></li>
                            <li><h4>5.3 Concurrence Performance</h4>
                                <p class="specific">
                                    Optimize load balancing to enlarge the concurrency of single nodes.

                                </p></li>
                            <li><h4>5.4 Local Cache</h4>
                                <p class="specific">
                                    To improve response speed and reduce read-write concurrence, the contents of document server, status server and external database are cached locally in time and written to the servers when saving or configuring.

                                </p></li>
                            <li><h4>5.5 Status Server</h4>
                                <p class="specific">
                                    Add status server to store the information of cluster. The relationship between session id and node information are stored to prevent the problem of session asynchrony.
                                </p></li>
                            <li><h4>5.6 Document Server</h4>
                                <p class="specific">
                                    Add document server to share templates and their attachments. The template and attachment visited by each node keep consistent in real time.

                                </p></li>
                            <li><h4>5.7 Storing Configuration Information in External Database </h4>
                                <p class="specific">
                                    The configuration information of the platform is stored in external database to guarantee consistent configuration of the platform when being visited by multiple nodes.

                                </p></li>
                            <li><h4>5.8 </h4>
                                <p class="specific">
                                    Add a cluster's visual configuration interface to configure the status server and document server.

                                </p></li>
                        </ul>
                    </li>
                    <li >
                        <input type="checkbox" name ="sub-group-28" id="sub-group-28">
                        <label for="sub-group-28" class="label-right-down"><h3>6.Safety</h3></label>

                        <ul>
                            <li> <h4>6.1 Fix Some Security Flaws </h4>
                                <p class="specific"> Instead of ForceGC, the load judgment algorithm is based on the development of JVM underlying principle. It improves the accuracy and timeliness of system load detection and thus provides accurate system status monitoring and operation optimization.
                                </p></li>
                            <li><h4>6.2 Active Defense</h4>
                                <p class="specific">
                                    After a node is enabled the smart distribution mode, new requests to the high-load nodes can be randomly distributed to other low-load nodes to maintain a healthy loading of each node in the cluster environment and ensure the regular operation of each node in the cluster.

                                </p></li>
                            <li><h4>6.3 </h4>
                                <p class="specific">
                                    Password enhancement and preventing brute-force cracking

                                </p></li>
                            <li><h4>6.4 Watermarks</h4>
                                <p class="specific">
                                    Improve the watermark feature: The setting interface is simplified, and the font size can be set now, which solves the problem that the density setting is not clear; Optimizes the support for formulas and line breaks, and displays in the form of top-level transparency, no longer occluded by content; Optimized printing and pdf export effect to increase security.

                                </p></li>
                        </ul>
                    </li>
                    <li >
                        <input type="checkbox" name ="sub-group-29" id="sub-group-29">
                        <label for="sub-group-29" class="label-right-down"><h3>7.Intelligent</h3></label>

                        <ul>
                            <li> <h4>7.1 Alphafine Intelligent Search and Detection of Templates</h4>
                                <p class="specific">
                                    AlphaFine is the entrance to all connections; specifically, the available functionalities, their usage and available demo templates are all accessible from this entrance.
                                    Through constructing a cloud problem bank, when facing problems in the process of template design, users can figure out solutions quickly.

                                </p></li>
                            <li><h4>7.2 Intelligent Operation and Maintenance</h4>
                                <p class="specific">
                                    The more comprehensive backup and restoration solution allows the platform configuration settings, templates, jar packages, logs and the whole project whose size is within certain thresholds to be backup and restored.
                                </p></li>
                            <li><h4>7.3 Common Parameter Combinations</h4>
                                <p class="specific">
                                    The historical parameter combinations can be preserved.
                                </p></li>
                        </ul>
                    </li>
                    <li >
                        <input type="checkbox" name ="sub-group-30" id="sub-group-30">
                        <label for="sub-group-30" class="label-right-down"><h3>8.Operation and Maintenance</h3></label>

                        <ul>

                            <p class="specific"> By improving the anti-shutdown mechanism, 10.0 prevents the server from shutting down and ensures the availability of the system.
                            </p>
                            <p class="specific"> There will be forced garbage collection when the memory usage exceeds a threshold. It also allows the user to clean up expired sessions.
                            </p>
                            <p class="specific"> Delay queue is used for checking overdue sessions, so a user can manage the life cycle of a session by simple settings.
                            </p>
                            <p class="specific"> Automatically remind users to clean the logs when the files are too large.
                            </p>

                        </ul>
                    </li>
                    <li >
                        <input type="checkbox" name ="sub-group-31" id="sub-group-31">
                        <label for="sub-group-31" class="label-right-down"><h3>9.Other improvements</h3></label>
                        <ul>
                            <li> <h4>9.1 HTML Parsing</h4>
                                <p class="specific">
                                    HTML is commonly used in reporting software, but few products can solve the problem of displaying, printing and export. 10.0 aims to change the situation and hope to thoroughly solve the problems.
                                </p></li>
                            <li><h4>9.2 Adaptive Logic Improvement</h4>
                                <p class="specific">
                                    When the page is reloaded, it no longer requests calculation in the background, but instead changes to the foreground to optimize the experience. This includes dragging the browser window, performing full screen operations, etc.

                                </p></li>
                            <li><h4>9.3 Improve the Rollback Mechanism of Widget Verification Error</h4>
                                <p class="specific">
                                    Keep the current edit content when verification fails after the widget is edited, the error message is prompted, and the widget retains current edited content. (only in new data entry function)
                                </p></li>
                            <li><h4>9.4 Displaying Email Body Using HTML</h4>
                                <p class="specific">
                                    Use HTML to display reports in email body and make content clearer and support copying words.
                                </p></li>
                            <li><h4>9.5 Improved Self-Adaptation Logic</h4>
                                <p class="specific">
                                    No longer send requests to the back end when reloading pages for changing screen size and full-screen mode, instead, zoom the front end directly to reduce computation cost and improve user experience.

                                </p></li>
                            <li><h4>9.6 </h4>
                                <p class="specific">
                                    Multiple actual value of the widget can correspond to the same display value.

                                </p></li>
                            <li><h4>9.7 Embedded Server</h4>
                                <p class="specific">
                                    Embedded server change from Jett to Tomcat to enhance stability while enable users to build server quickly.

                                </p></li>

                            <li><h4>9.8 sapbw</h4>
                                <p class="specific">
                                    available for bwcube and bwquery.

                                </p></li>
                            <li><h4>9.9 Private cloud authentication</h4>
                                <p class="specific">
                                    A private cloud authentication server can be deployed locally, and the service server can authenticate on this server.

                                </p></li>


                        </ul>
                    </li>
                </ul>
            </li>


        </ul>
    </div>



</section>

<section class="features">
    <h2>For Every Detail of Reporting and Dashboards</h2>
    <div class="scroll-bg">
        <div class="scroll" >
            <ul id="scroll">
                <li><a href="/en/features/report-designer"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/History/FineReport%20Designer.png" alt=""></a></li>
                <li><a href="/en/features/data-entry"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/History/Data%20Entry.png" alt=""></a></li>
                <li><a href="/en/features/data-integration"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/History/Data%20integration.png" alt=""></a></li>
                <li><a href="/en/features/data-visualization"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/History/Data%20Visualization.png" alt=""></a></li>
                <li><a href="/en/features/decision-making-system"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/History/Decision-Making%20platform.png" alt=""></a></li>
                <li><a href="/en/features/mobilebi"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/History/Mobile%20Application.png" alt=""></a></li>
                <li><a href="/en/features/tv-dashboard"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/History/Large%20Screen%20Dashboard.png" alt=""></a></li>
                <li><a href="/en/features/deploy-and-integration"><img src="http://www.finereport.com/en/wp-content/themes/Newweb/images/History/Deployment%20%26%20Integration.png" alt=""></a></li>


            </ul>

        </div>
    </div>

</section>
<script type="text/javascript" src="http://www.finereport.com/en/js/jquery.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        var accordionsMenu = $('.cd-accordion-menu');

        if( accordionsMenu.length > 0 ) {

            accordionsMenu.each(function(){
                var accordion = $(this);
                //detect change in the input[type="checkbox"] value
                accordion.on('change', 'input[type="checkbox"]', function(){
                    var checkbox = $(this);
                    console.log(checkbox.prop('checked'));
                    ( checkbox.prop('checked') ) ? checkbox.siblings('ul').attr('style', 'display:none;').slideDown(300) : checkbox.siblings('ul').attr('style', 'display:block;').slideUp(300);
                });
            });
        }
    });




</script>

</body>
</html>


<?php get_footer('');  ?>

