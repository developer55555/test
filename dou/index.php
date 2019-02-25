<?php
include ('../inc/aik.config.php');
?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <title>抖音短视频解析下载 - 抖音视频去水印保存到本地-<?php echo $aik['sitename'];?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $aik['title'];?>，智云影音，抖音短视频在线解析下载工具支持解析任何抖音短视频,并且解析出来的视频没有水印.">
    <meta name="keywords" content="<?php echo $aik['title'];?>，抖音解析,抖音去水印,抖音短视频下载,抖音视频去水印,保存无水印抖音视频到手机,下载抖音短视频到电脑,抖音视频解析下载">
    <meta name="application-name" content="<?php echo $aik['sitename'];?>，抖音短视频解析下载">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="referrer" content="never">
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/site.min.css?v12" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico">
    <style type="text/css">
        .container .navbar-header .logo-img {
            width: 52px;
            height: 52px;
            margin-left: 15px;
            float: left;
            display: inline-block;
            background: url(/logo/douyin.png) no-repeat;
            background-size: contain;
            background: 0 0\9;
            filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='logo/douyin.png', sizingMethod='scale');
        }
        @media (min-width: 768px) {
            .container .navbar-header .logo-img {margin-left: 0;}
        }
    </style>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <span class="logo-img"></span>
            <a class="navbar-brand" href="../dh.html">抖音短视频解析下载</a>
        </div>
        <!-- <div class="navbar-collapse collapse" role="navigation">
            <ul class="nav navbar-nav">
                <li><a href="http://muse.baidu.com/">muse<span class="visible-xs-inline">视频解析下载</span></a></li>
                <li><a href="http://toutiao.baidu.com/">头条西瓜、内涵段子<span class="visible-xs-inline">视频解析下载</span></a></li>
                <li><a href="http://weibo.baidu.com/">微博秒拍、小咖秀<span class="visible-xs-inline">、晃咖视频解析下载</span></a></li>
                <li><a href="http://huoshan.baidu.com/">火山<span class="visible-xs-inline">小视频解析下载</span></a></li>
                <li><a href="http://kuaishou.baidu.com/">快手<span class="visible-xs-inline">视频解析下载</span></a></li>
                <li><a href="http://inke.baidu.com/">映客<span class="visible-xs-inline">小视频解析下载</span></a></li>
                <li><a href="http://momo.baidu.com/">陌陌<span class="visible-xs-inline">视频解析下载</span></a></li>
                <li><a href="http://meipai.baidu.com/">美拍<span class="visible-xs-inline">视频解析下载</span></a></li>
                <li><a href="http://xiaoying.baidu.com/">小影<span class="visible-xs-inline">视频解析下载</span></a></li>
            </ul>
        </div> -->
    </div>
</div>
<div class="container" id="app" style="margin-top: 70px;">
    <div class="row">
        <div class="col-md-12">

            <div style="margin-bottom: 20px;">
                <!-- <p>本站已支持解析下载<b>抖音</b>、<b>muse(musical.ly)</b>、<b>今日头条</b>、<b>西瓜视频</b>、<b>内涵段子</b>、<b>微博</b>、<b>秒拍</b>、<b>小咖秀</b>、<b>晃咖</b>、<b>火山</b>、<b>快手</b>、<b>映客</b>、<b>陌陌</b>、<b>美拍</b>、<b>小影</b>、<b>阳光宽频</b>等平台的视频, 请通过页面顶部<span class="visible-xs-inline">右侧</span>导航菜单选择.</p> -->

                <p>抖音短视频解析下载工具特点:</p>
                <ol>
                    <li>支持解析任何抖音视频</li>
                    <li>解析出来的视频没有水印</li>
                </ol>

                <p>使用方法:</p>
                <ol>
                    <li>打开抖音短视频APP或者到官方平台获取视频链接，点开某个视频，点击右下角分享按钮，在分享弹框中点击复制链接或通过分享到微信QQ等获取分享链接</li>
                    <li>将刚才复制的链接粘贴到下面的输入框</li>
                </ol>
            </div>

            <div class="input-group input-group-lg" style="margin-bottom: 10px;">
                <input type="text" class="form-control link-input" id="douyin_link" placeholder="请将APP里复制的视频链接粘贴到这里">
                  <div class="input-group-btn">
                      <div class="btn-clear"></div>
                      <button class="btn btn-default" type="button" id="jiexi">解析视频</button>
                  </div>
            </div>
			<div style="text-align: center; display: none;" class="alert alert-danger" id="error">请输入正确的视频链接</div>
			<div style="text-align: center; display: none;" id="loading" >
				<img src="/img/loading.gif" style="width: 80px;height: 80px;">
			</div>
			
            <div class="thumbnail" style="display: none;" id="success">
                <div class="caption" style="padding:5px 0 0;">
                    <p style="text-align: center;">
                        <a target="_blank" rel="noreferrer" id="video_url" href="" download="douyin.cfzs.org.mp4"class="btn btn-success">下载视频</a>
                        <a target="_blank" rel="noreferrer" id="cover_url" href="" class="btn btn-info">视频封面</a>
                    </p>
                    <p style="text-align: center;">
                        <a href="javascript:void(0);" class="btn btn-danger" id="rest">清空</a>
                    </p>
                </div>
            </div>

            <div style="margin-top: 20px;">
                <p>常见疑问:</p>
                <ol style="word-break: break-all;">
                    <li>Android手机上可以用吗？</li>
                    <p class="alert alert-info">可以的，Android手机在常用的Chrome、UC、360、QQ等浏览器上都可以很方便的使用本站。</p>
                    <li>iOS设备（iPhone、iPad、iPod）上点击下载视频按钮后，跳转到视频页面，并没有直接下载，怎么办？</li>
                    <p class="alert alert-info">因Safari及微信内置浏览器均不支持下载文件，所以保存视频需要借助第三方App来完成下载，建议iOS用户在App Store下载免费的Documents 6，然后在Documents的内置浏览器中使用本站，可以完美下载视频，并且Documents支持将下载的视频移到手机相册。</p>
                    <li>我在电脑上用的是IE浏览器，点下载视频按钮后，出现跟上面那用iPad的哥们一样的情况，跳转到视频页面，如何下载到本地呢？</li>
                    <p class="alert alert-info">电脑上少数浏览器不支持直接下载，但可以在下载视频按钮上点击右键，然后选择"目标另存为"或"链接存储为"来下载视频；或者到跳转后的视频页面，在视频画面上点击右键，然后选择"视频另存为"来下载视频。当然，我们更推荐在电脑上使用如谷歌Chrome浏览器、360浏览器极速模式、QQ浏览器极速模式等现代浏览器来获得最佳上网体验。</p>
					<li>官方信息</li>
					<p class="alert alert-info">更多精彩请添加官方QQ交流群</p>
                </ol>
            </div>

            <div style="text-align: center;margin-top: 20px;">
                <p style="font-size: 13px;color: #999;">视频归相关网站及作者所有，本站不存储任何视频及图片。<br>&copy;<?php echo $aik['sitename'];?></p>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){ 
	$("#jiexi").click(function(){
		$("#success").css("display","none"); 
		$("#error").css("display","none"); 
		$("#loading").css("display","block"); 
		var douyin_link = $("#douyin_link").val();
		console.log(douyin_link);
		if(douyin_link.length == 0){
			$("#error").html("请先将视频链接粘贴到上面的输入框");
			$("#error").css("display","block"); 
			$("#loading").css("display","none"); 
		}else{
			var c = douyin_link.lastIndexOf("http://");
            c = (c === -1) ? douyin_link.lastIndexOf("https://") : c;
			if(c === -1){
				$("#error").html("请输入正1确的视频链接");
				$("#error").css("display","block"); 
				$("#loading").css("display","none"); 
			}else{
				douyin_link = douyin_link.substr(c);
				console.log(douyin_link);
				if(parseURL(douyin_link).host=="www.douyin.com"){
					$.ajax({
						type: "POST",
						url: "/douyin.php",
						data: {
							url:douyin_link,
						},
						dataType: "json",
						success: function(data){
							$("#loading").css("display","none"); 
							if(data.code == 1){
								$("#success").css("display","block");
								$("#video_url").attr("href",data.video_url); 
								$("#cover_url").attr("href",data.cover_url); 
							}else{
								$("#error").html(data.msg);
								$("#error").css("display","block"); 
							}
						},
						
					});
				}else{
					$("#error").html("请输入正确的视频链接");
					$("#error").css("display","block"); 
					$("#loading").css("display","none"); 
				}
			}
		}
		
	});
	$("#rest").click(function(){
		$("#success").css("display","none"); 
		$("#error").css("display","none"); 
		$("#loading").css("display","none"); 
		$("#douyin_link").val("");
	});
}); 

function parseURL(url) {
		var a = document.createElement('a');
		a.href = url;
		return {
			source: url,
			protocol: a.protocol.replace(':', ''),
			host: a.hostname,
			port: a.port,
			query: a.search,
			params: (function() {
				var ret = {},
				seg = a.search.replace(/^\?/, '').split('&'),
				len = seg.length,
				i = 0,
				s;
				for (; i < len; i++) {
					if (!seg[i]) {
						continue;
					}
					s = seg[i].split('=');
					ret[s[0]] = s[1];
				}
				return ret;
			})(),
			file: (a.pathname.match(/\/([^\/?#]+)$/i) || [, ''])[1],
			hash: a.hash.replace('#', ''),
			path: a.pathname.replace(/^([^\/])/, '/$1'),
			relative: (a.href.match(/tps?:\/\/[^\/]+(.+)/) || [, ''])[1],
			segments: a.pathname.replace(/^\//, '').split('/')
		};
	}
</script>
<!--百度收录自动推送-->
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>

<script language="javascript" type="text/javascript" src="http://js.users.51.la/18759442.js"></script>
</body>
</html>
