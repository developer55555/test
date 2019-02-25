<?php
include "./inc/aik.config.php";
?>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta http-equiv="cache-control" content="no-siteapp">
<title>电影家搜索《<?php echo $_GET["sousuo"];?>》的结果：</title>
<link rel='stylesheet' id='main-css'  href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='main-css'  href='css/movie.css' type='text/css' media='all' />
<link rel='stylesheet' id='main-css'  href='css/seacher.css' type='text/css' media='all' />
<script type='text/javascript' src='http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js?ver=0.5'></script>
<meta name="keywords" content="电影家影院,电影家影视搜索">
<meta name="description" content=" 电影家影院,电影家影视搜索">
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
<!-- by 筱梦  dy.dyj521.com -->
</head>
<body>
<?php
include "header.php";
?>
<section class="container">
<div style="text-align: center;padding: 10px 0;color: #FF7562;font-size: 12px;">温馨提示:请点击搜索结果的标题或封面图进行观看！</br>如提示<b>“暂无播放资源”</b>请选择下面的站外搜索列表资源播放！</div>
<strong class="single-strong"><h4>根据关键词搜索《<?php echo $_GET["sousuo"];?>》的结果如下：</h4></strong>
<div class="m-g">
<div class="b-listtab-main">
<div>
<div>
<div class="s-tab-main">
<ul class="list g-clear">
                    
<?php
$url = "https://video.360kan.com/v?ie=utf-8&src=360sou_home&q=" . $_GET["sousuo"] . "&_re=0";
$aaa = file_get_contents($url);
$q1 = '#<a href="(.*?)" class="g-playicon js-playicon" title="(.*?)" data-logger=\'ctype=detail\'  data-longrecord="(.*?)">#';
$q2 = '#<img src="(.*?)" alt="(.*?)" />#';
$q3 = '#<div class="(.*?)" monitor-desc="(.*?)" data-logger="(.*?)">#';
preg_match_all($q1, $aaa, $a1);
preg_match_all($q2, $aaa, $a2);
preg_match_all($q3, $aaa, $a3);
$z1 = $a1[1];
$z2 = $a1[2];
$z3 = $a1[3];
$z4 = $a2[1];
$z5 = $a2[2];
$z6 = $a3[2];
$img3 = str_replace('http://www.360kan.com','',$z1);
foreach ($img3 as $key => $ww) {
	
?>

<li class='item'>
    <a class='js-tongjic' href='./play.php?play=<?php echo $ww;?>' title='<?php echo $z2[$key];?>' target='_blank'>
<div class='cover g-playicon'>
<img  src='<?php echo $z4[$key];?>' alt='<?php echo $z2[$key];?>'/><span class='hint'><?php echo $z6[$key];?></span>
</div>
<div class='detail'>
<p class='title g-clear'>
 <span class='s1'><?php echo $z2[$key];?></span>
 <span class='s2'></span></p>
<p class='star'></p>
 </div>
</a>
</li>

					

								

<?php
}
?>
</ul>
</div>
</div>
</div> 
</div>
</div>
</div>
<div style="clear: both;"></div>
<?php
$link=$aik['zhanwai'];
$a = $link.'/index.php/search?wd='.rawurlencode($_GET['sousuo']);

    //初始化
    $curl = curl_init();
    //设置抓取的url
    curl_setopt($curl, CURLOPT_URL, $a);
    //设置头文件的信息作为数据流输出
    curl_setopt($curl, CURLOPT_HEADER, 1);
    //设置获取的信息以文件流的形式返回，而不是直接输出。
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    //执行命令
    $response = curl_exec($curl);
    //关闭URL请求
    curl_close($curl);
    //显示获得的数据

 $response = strstr($response, '<div class="video-list">') ;
$response = strstr($response, '<div class="clr"></div>',TRUE) ;

$response = str_replace("/attachment", $link."/attachment", $response);
 $response = str_replace("/index.php/show/index/", "mplay.php?mso=", $response);
echo "</div></div>
<strong class=\"single-strong\">站外搜索列表Ⅰ</strong>
<div class=\"excerpts-wrapper\">
<div class=\"excerpts\">
<div class=\"zhan\">".$response."</div></div>
</div>"
?>       
<?php
    $link0=$aik['zhanwai1'];
    $sourl = $link0."/index.php?m=vod-search";
    $post_data = array("wd" => $_GET['sousuo']);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $sourl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
    $output = curl_exec($ch);
    curl_close($ch);
    $output = str_replace("/?m=vod-detail-id-", "vplay.php?vod=", $output);
    $output = str_replace("?m", "?gourl", $output);
    $output = str_replace(".html", "", $output);
    $pattern = '#<span class="xing_vb4"><a href="(.*?)" target="_blank">(.*?)</a></span>#';
    preg_match_all($pattern, $output, $matches);
    $szlen = count($matches[0]);
echo '<strong class="single-strong">站外搜索列表Ⅱ</strong>';
echo '<ul class="mvul">';
    for($xh = 0;$xh < $szlen;$xh++) {
        echo '<li>' . $matches[0][$xh] . '</li>';
    }
    echo '</ul>';

    ?>
<?php
echo "<div class=\"bdwp\">
<strong class=\"single-strong\">百度网盘搜索列表</strong>
<ul class=\"mvul\">
<li><span class=\"xing_vb4\"><a href=\"bdpan.php?sousuo=".$_GET['sousuo']."\" target=\"_blank\">".$_GET['sousuo']." 百度网盘搜索结果 点击查看</a></span></li>
</ul>
</div>
"
?>
<?php
echo "<div class=\"bdwp\">
<strong class=\"single-strong\">磁力搜索列表</strong>
<ul class=\"mvul\">
<li><span class=\"xing_vb4\"><a href=\"cili.php?sousuo=".$_GET['sousuo']."&qiehuan=1\" target=\"_blank\">".$_GET['sousuo']." 磁力搜索结果 点击查看</a></span></li>
</ul>
</div>
"
?>
<?php echo '</div></div></div>
<div style="clear: both;"></div>'?>

</section>
<?php echo "
<script>
if(document.getElementById(\"js-longvideo-container\")!=undefined){
var more =  document.getElementById('js-longvideo-container');
var cimore =    document.getElementById('more');
more.style.display = 'none';
function ckmore(){
more.style.display = 'block';
cimore.style.display = 'none';
}
}else{
    var cimore =    document.getElementById('more');
    cimore.style.display = 'none';
}

</script>";
echo '<script type="text/javascript">
    var hei = $(\'.a-engineso-body\').height();
    var ben = $(\'.excerpts\').height();
    if (hei<0 && ben<0) {
        if (confirm("抱歉.搜索内容无结果,是否为您跳转到主页")) {
           window.location.href=\'/\';
        }
        else {
            window.location.href=\'/\';
        }
    }
</script>';?>
<?php  include 'footer.php';?>
<?php
include "footer.php";
?></body></html>
