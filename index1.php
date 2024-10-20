<?php
$ua = $_SERVER['HTTP_USER_AGENT'];

// 检查是否来自微信客户端
if (strpos($ua, 'MicroMessenger')) {
    $type = 'wepay';
    $name = '微信支付';
    // 微信支付链接
    $url = 'wxp://f2f0jOM5bOpx6tku4YMSz-a6i_Su8ORxaRIDJ4FtsOdp2FKureupOtKGS9rFDpeLWNQ3';
    $icon_img = '<img src="/images/微信图片_20241011221224.jpg" width="48px" height="48px" alt="' . $name . '">';
} elseif (strpos($ua, 'AlipayClient')) {
    // 支付宝链接
    $url = 'https://qr.alipay.com/fkx11732bu0gc9pmtns5o5b';
    header('location: ' . $url);
} elseif (strpos($ua, 'QQ/')) {
    $type = 'qq';
    $name = 'QQ钱包支付';
    // QQ钱包支付链接
    $url = 'https://i.qianbao.qq.com/wallet/sqrcode.htm?m=tenpay&f=wallet&a=1&u=2911638248&n=%E7%A5%9D%E8%9E%8D%E6%98%9F&ac=CAEQ6KWw7AoYmIDTuAZCIGRkNzJmZDg4NWVhYWRjYTBjOWE5YjgxNWEwMWRmMmQ5_xxx_sign';
    $icon_img = '<img src="/images/微信图片_20241020163333.jpg" width="48px" height="48px" alt="' . $name . '">';
} else {
    $type = 'other';
    $name = '打赏作者';
    // 通用支付链接
    $url = 'http://' . $_SERVER['HTTP_HOST'] . '/erweima.php';
    // 通用支付图标
    $icon_img = '<img src="/path/to/your/general/logo.jpg" width="48px" height="48px" alt="' . $name . '">';
}

// 生成二维码图片
$qr_img = '<img src="http://qr.liantu.com/api.php?text=' . urlencode($url) . '">';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?></title>
    <style type="text/css">
        * {margin: auto;padding: 0;border: 0;}
        html {-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%}
        body {font-family: -apple-system, SF UI Text, Arial, Microsoft YaHei, Hiragino Sans GB, WenQuanYi Micro Hei, sans-serif;color: #333;}
        img {max-width: 100%;}
        h3 {padding: 10px;}
        .container {text-align: center;}
        .title {padding: 2em 0;background-color: #fff;}
        .content {padding: 2em 1em;color: #fff;}
        .wepay {background-color: #23ac38;}
        .qq {background-color: #4c97d5;}
        .other {background-color: #ff7055;}
    </style>
</head>
<body class="<?php echo $type; ?>">
    <div class="container">
        <div class="title"><?php echo $icon_img; ?><h1><?php echo $name; ?></h1></div>
        <div class="content">
            <?php if ($type == 'other') { ?>
                <?php echo $qr_img . '<h3>请使用支付宝、微信、QQ客户端扫码付款</h3>'; ?>
            <?php } else { ?>
                <?php echo $qr_img . '<h3>扫描或长按识别二维码，向TA付款</h3>'; ?>
            <?php } ?>
        </div>
    </div>
</body>
</html>