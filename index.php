<!DOCTYPE html>
<html>
<head>
	<meta name = "viewport" content = "width = device-width">
	<title>Framework11</title>
	<link rel="stylesheet" type="text/css" href="css/framework11.css?=<?php echo rand() . "\n";?>">

</head>
<body>
<div class="navbar"><center><div class="title" style="float: left;">Framework11</div></center></div>


<div class="content">

<ul>
  <li><a href="javascript:loadPage(0,'index2.php');">Link1</a></li>
  <li><a href="#">Link2</a></li>
  <li style="border-bottom: 1px solid lightgray"><a href="#">Link3</a></li>

</ul>






<div id="page" class="page-closed"><iframe id="loader" src="data:text/html,&lt;center&gt;&lt;br&gt;&lt;font%20face='sans-serif'&gt;Loading&lt;/font&gt;&lt;/center&gt;" frameborder="0" style="width:100%;height:100%"></iframe></div><script>document.documentElement.addEventListener('touchstart', function (event) {
            if (event.touches.length > 1) {
                event.preventDefault();
            }
        }, false);</script>


</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="js/framework11.js?=<?php echo rand() . "\n";?>"></script>
</body>
</html>