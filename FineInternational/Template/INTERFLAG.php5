<?php
/**
 * Created by IntelliJ IDEA.
 * User: doufucheng
 * Date: 2020/7/14
 * Time: 9:25 AM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../CSS/Basic/intlTelInput.css">
</head>
<body>
<input type="tel" id="phone">

<script src="../JS/intlTelInput.js"></script>
<script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
        utilsScript: "http://www.finereport.com/en/wp-content/themes/Newweb/utils.js"
    });
</script>

</body>
</html>