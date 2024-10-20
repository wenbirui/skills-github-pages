<?php
// 生成三合一二维码
$combined_qr_img = '<img src="http://qr.liantu.com/api.php?text=https://example.com/combined-pay-link">';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>三合一支付二维码</title>
    <style type="text/css">
        * {margin: auto;padding: 0;border: 0;}
        html {-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%}
        body {font-family: -apple-system, SF UI Text, Arial, Microsoft YaHei, Hiragino Sans GB, WenQuanYi Micro Hei, sans-serif;color: #333;}
        img {max-width: 100%;}
        h3 {padding: 10px;}
        .container {text-align: center;}
        .content {padding: 2em 1em;color: #fff;}
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <?php echo $combined_qr_img; ?>
            <h3>请使用支付宝、微信、QQ客户端扫码付款</h3>
        </div>
    </div>
</body>
</html>