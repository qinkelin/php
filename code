<?php
function ycode($numder=4,$dian,$hx,$size=20,$width=0,$height=0,$num='0123456789abcdefjhijklnmopqrstZXCVBNMASDFGHJKL',$font=array('001.ttf','002.TTF')){
	if($width==0){//如果初始宽为0时
		$width=($numder +1)*$size;//自动生成验证码图片
	}
	if($height==0){//如果初始高为0时
		$height=$size*2.5;//自动生成验证码图片
	}
//$numder=4;//验证码4个
//$size=20;//字体大小20
//$width=($numder+1)*$size;//画布宽度4+1个字体宽度
//$height=$numder*10;//画布高度
//$height=40;//画布高度
//$font=array('001.ttf','002.TTF');//把文字样式存进数组
$im=imagecreatetruecolor($width,$height);//创建画布
$imcolor=imagecolorallocate($im,rand(60,255),rand(60,255),rand(60,255));//随机颜色
imagefilledrectangle($im,0,0,$width,$height,$imcolor);//画布背景颜色
//$num="0123456789abcdefjhijklnmopqrstZXCVBNMASDFGHJKL";//验证码循环
$vcode='';//定义一个空变量
$fontMax = count($font)-1;//获取长度
for($i=0;$i<$numder;$i++){//随机获取验证码
	$wx = $size*0.5+$size*$i;//x轴的位置
	$wy = rand($size*1.5,$size*2);
	$strMax = strlen($num)-1;//获取最大索引
	$code = $num[rand(0,$strMax)];//获取随机验证码
	$vcode.=$code;//把验证码放到之前定义的变量里面
	$randcolorl = imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255));//随机颜色
	imagettftext($im,$size,rand(-10,10),$wx,$wy,$randcolorl,$font[rand(0,$fontMax)],$code);//把字体写入画布
}
	$pn=$size*30;//点的个数
	for($j=0;$j<$dian;$j++){
		$randcolor=imagecolorallocate($im,rand(0,80),rand(0,80),rand(0,80));//给点设置随机颜色
		$wwx=rand(0,$width);//X轴的位置
		$wwy=rand(0,$height);//Y轴的位置
		imagesetpixel($im,$wwx,$wwy,$randcolor);//把干扰点放入画布		
}
	for($a=0;$a<$hx;$a++){//设置干扰线
		$randcolor=imagecolorallocate($im,rand(0,70),rand(0,70),rand(0,70));//给干扰线设置颜色
		$cx = rand(0,300);
		$cy = rand(0,300);
		$w = rand(0,250);
		$h = rand(0,150);
		$s = rand(0,360);
		$e = rand(0,360);
		imagearc($im,$cx,$cy,$w,$h,$s,$e,$randcolor);
	}
	

if(!isset($_SESSION)){
	session_start();
}
ob_clean();
header("Content-type:image/png;charset=utf-8");
imagepng($im);
imagedestroy($im);
}
echo ycode(10,200,100);

?>
