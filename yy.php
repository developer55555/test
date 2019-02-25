<?php
include "./inc/aik.config.php";
include "./inc/init.php";
?><!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta http-equiv="cache-control" content="no-siteapp">
<title>看电影-最新好看的最新电影电视-<?php echo $aik["title"];?></title>
<link rel='stylesheet' id='main-css'  href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='main-css'  href='css/movie.css' type='text/css' media='all' />
<script type='text/javascript' src='http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js?ver=0.5'></script>
<meta name="keywords" content="看电影-2017最新好看的最新电影">
<meta name="description" content="<?php echo $aik["title"];?>-看电影-2017最新好看的最新电影">
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
</head>
<body>
<?php
include "header.php";
?>
<section class="container">
<div class="fenlei">
<div class="b-listfilter" style="padding: 0px;">

<dl class="b-listfilter-item js-listfilter" style="padding-left: 0px;height:auto;padding-right:0px;">
<dd class="item g-clear js-listfilter-content" style="margin: 0;">
<a class="theme-a" href="/yy.php?list=t10027.html">热舞</a>
<a class="theme-a" href="/yy.php?list=t10025.html">动听</a>
<a class="theme-a" href="/yy.php?list=t10026.html">说唱</a>
<a class="theme-a" href="/yy.php?list=t10028.html">乐器</a>
<a class="theme-a" href="/yy.php?list=t10029.html">另类</a>
</dd>
</dl>
</div>
</div>
<div class="m-g">
<div class="b-listtab-main">

<div class="s-tab-main">
<ul class="list g-clear">


<?php   //    导航
ini_set('user_agent','Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; SV1; .NET CLR 1.1.4322)');
if (empty($_GET['list'])) {
$arta= file_get_contents('http://www.yy.com/shenqu/clist/t10025.html');
} else {
$arta= file_get_contents('http://www.yy.com/shenqu/clist/' .$_GET['list']. '');
	}
$uu1 = '#<img  src="(.*?)"   alt="(.*?)">#';
$qq = '#<p class="text">(.*?)</p>#';
$ww = '#<a href="(.*?)" title="(.*?)" class="target-link"   >#';
preg_match_all($uu1,$arta, $lj);
preg_match_all($qq,$arta, $rs);
preg_match_all($ww,$arta, $ee);
$bf = $lj[1];
$mz = $lj[2];
$gk = $rs[1];
$rr = $ee[1];
$tt = $ee[2];
$responsg = str_replace('/shenqu/play/id_','', $rr);
$responsa = str_replace('.html','', $responsg);
foreach ($bf as $gg => $qz1){
?>




<li class='item'>
    <a class='js-tongjic' href='./playy.php?post=<?php echo $responsa[$gg];?>' title='<?php echo $mz[$gg];?>' target='_blank'>
<div class='cover g-playicon'>
<img  src='<?php echo $qz1;?>' alt='<?php echo $mz[$gg];?>'/>
</div>
<div class='detail'>
<p class='title g-clear'>
 <span class='s1'><?php echo $gk[$gg];?></span>
 <span class='s2'></span></p>
<p class='star'><?php echo $mz[$gg];?></p>
 </div>
</a>
</li>

</ul>



<?php
}
?>
<?php   //    导航
ini_set('user_agent','Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; SV1; .NET CLR 1.1.4322)');
if (empty($_GET['list'])) {
$art= file_get_contents('http://www.yy.com/shenqu/clist/t10025.html');
} else {
$art= file_get_contents('http://www.yy.com/shenqu/clist/' .$_GET['list']. '');
	}

$ii = '#<ul class="pagination clf">([\s\S]+?)</ul>#';


preg_match_all($ii,$art, $lj);

$bf = $lj[1];
$response = str_replace("<li>","", $bf);
$responsf = str_replace("</li>","", $response);
$responsj = str_replace('class="prev"','',$responsf);
$responsg = str_replace('class="next"','', $responsj);
$responsh = str_replace('href="/shenqu/clist/','href="yy.php?list=', $responsg);
foreach ($responsh as $gf => $responsi){
?>

<?php echo $responsi;?>



<?php
}
?><div class="asst asst-list-footer"><?php echo $aik["tv_ad"];?></div></section>
<?php
include "footer.php";
?></body></html>
