<?php
/**
 * Title: 爱客影院系统自动更新站外链接程序V2.2
 * User: King
 * Date: 2018/3/9
 * Time: 20:53
 * Help: http://zeink.cn/?p=167
 */


//任意 站外1的链接填入 这里用默认的即可
$king_zwurl = "http://wv1.wangzhedb.com/";


header('Content-Type: text/html; charset=utf-8');
session_start();
error_reporting(0);
include('../inc/aik.config.php');
define('SYSPATH', $aik['path']);

function redirect($url, $rule = 'https://zeink.cn/')
{
    $header = get_headers($url, 1);
    //print_r($header);
    if (strpos($header[0], '301') !== false || strpos($header[0], '302') !== false) {
        // 无限检测最新跳转
        if (array_key_exists('Set-Cookie', $header)) {
            $cookies = $header['Set-Cookie'];
            foreach ($cookies as $k => $v) {
                header('Set-Cookie: ' . $v);
            }
        }
        if (array_key_exists('Location', $header)) {
            $url = $header['Location'];
            if (is_array($url)) {
                foreach ($url as $k => $v) {
                    if (true) {
                        // 跳转地址与$rule匹配, 返回该地址
                        return $v;
                    } else {
                        // 不匹配则访问一次中转网址
                        file_get_contents($v);
                    }
                }
            } else {
                if (true) {
                    // 跳转地址与$rule匹配, 返回该地址
                    return $url;
                }
            }
        }
    }
    return $url;
}


echo "New URL：";
//输出跳转到的网址
echo redirect($king_zwurl);


$data = $aik;
$data['zhanwai'] = redirect($king_zwurl);
echo "<br>";
$aik = $data;
if (file_put_contents('../inc/aik.config.php', "<?php\n \$aik =  " . var_export($data, true) . ";\n?>")) {
    echo "The New URL has been set up!";
} else {
    echo "The New URL Setting failure!";
}
?>