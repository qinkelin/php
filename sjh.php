<?php

	$a=$_POST['cid'];
	$b=$_POST['title'];
	//$C=$_POST['img'];
	$d=$_POST['con'];
	var_dump($a);
	var_dump($b);
	//var_dump($c);
	var_dump($d);
$_SESSION['mysqli']=mysqli_connect('localhost','root','','qwe');//连接数据库
	mysqli_query($_SESSION['mysqli'],'set names utf8');//设置数据传输编码
	if(mysqli_connect_errno($_SESSION['mysqli'])){
		echo'连接失败：'.mysqli_connect_errno();
	}else{
		echo'连接成功：';
		//echo $sql="insert into zxc(id,name,content,cid) value (null,'$b','$d','$a')";//将一条数据插入数据库
		//$res = mysqli_query($_SESSION['mysqli'],$sql);//函数执行某个针对数据库的查询
		//var_dump($res);
		//if($res||$res['num_rows']>0){
		//	echo"成功";
		//}
		//	mysqli_close($_SESSION['mysqli']);
	
	//$sql = "select * from zxc where cid=6";
	//$res = mysqli_query($_SESSION['mysqli'],$sql);
 	
	//var_dump(mysqli_fetch_assoc($res));
 	//if($res||$res['num_rows']>0){
		///echo "成功";
		//}
   //mysqli_close($_SESSION['mysqli']);
 
	$sql = "update zxc set name='55556', where cid=1";
	$res = mysqli_query($_SESSION['mysqli'],$sql);
	var_dump(mysqli_fetch_assoc($res));
	if($res||$res['num_rows']>0){
		echo"成功";
	}
	mysqli_close($_SESSTON['mysqli']);
 
 
 
	}

?>
