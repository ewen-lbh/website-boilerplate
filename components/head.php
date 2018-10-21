<?php
if(!isset($_description)) {
    $_description = '{__DEF_DESC__}';
} else {
    $_description = $_description;
}

if(!isset($_title) | empty($_title) | $_title === ' ') {
    $_title = '{__NAME__}';
} elseif (!preg_match('/^\[ND\]/', $_title)) {
    $_title .= ' &ndash; {__NAME__}';
} else {
    $_title = $_title;
}

$_filename = basename($_SERVER['PHP_SELF'], '.php')
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php echo $_title;?></title>

    <link rel="stylesheet" href="/resources/styles/dist/main.css">
    <script src="/resources/scripts/warning-self-xss.js"></script>
    <?php require_once $_SERVER['DOCUMENT_ROOT'].'/resources/classes/global-functions.php'; ?>
</head>
