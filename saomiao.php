//判断扫描二维码的APP为 QQ
if(strstr($_SERVER['HTTP_USER_AGENT'], 'QQ/')){
 echo 'QQ';
 //判断扫描二维码的APP为 支付宝
}ELSE IF(strstr($_SERVER['HTTP_USER_AGENT'], 'Alipay')){
 echo '支付宝';
 //判断扫描二维码的APP为 微信
}ELSE IF(strstr($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger/')){
echo '微信';
}