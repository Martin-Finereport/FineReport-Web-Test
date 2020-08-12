<?php
/**
 * Created by IntelliJ IDEA.
 * User: doufucheng
 * Date: 2020/7/3
 * Time: 2:01 PM
 */
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>下拉菜单select带图标</title>
    <link rel="stylesheet" href="../CSS/Special/countrySelect.css">
    <link rel="stylesheet" href="../CSS/Special/demo.css">
    <style>
        body {
            margin: 0;
            font-size: 14px;
            font-family: "Open Sans", Helvetica, Arial, sans-serif;
            color: #444;
            min-height: 100vh;
        }

        .container {
            margin: 10px auto;
            max-width: 640px;
        }
    </style>

</head>
<body>

<div id="main_demo">

    <div class="container">
        <form>
            <div class="form-item">
                <input id="country_selector" type="text" >
                <label for="country_selector" style="display:none;">Select a country here...</label>
            </div>
<!--            <div class="form-item" style="display:none;">-->
<!--                <input type="text" id="country_selector_code" name="country_selector_code" data-countrycodeinput="1" readonly="readonly" placeholder="Selected country code will appear here" />-->
<!--                <label for="country_selector_code">...and the selected country code will be updated here</label>-->
<!--            </div>-->
            <button type="submit" style="display:none;">Submit</button>
        </form>
    </div>
</div>
<!-- Load jQuery from CDN so can run demo immediately -->
<script src="../JS/jquery.min.js"></script>
<script src="../JS/countrySelect.js"></script>
<script>
    $("#country_selector").countrySelect({
        preferredCountries: ['cn', 'gb', 'us']
    });
</script>
</body>
</html>

