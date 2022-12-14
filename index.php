<?php



$ping = "5";

$server = "too bus";

$ping2 = "10";

$times = "1";



$load = sys_getloadavg();

if ($load[0] > $ping) {

    header('HTTP/1.1 503 Too busy, try again later');

    die($server);

}



$gip = $_SERVER["REMOTE_ADDR"];







if($gip){



$ip = "http://".$gip.":80";



}else{



header("Location: 0.0.0.0:80");



}







if($_COOKIE["ck"])header("Location: $ip ");



 



setcookie("ck",$ping2,time()+$times);







if (isset($_GET['connect'])) {



$loads = sys_getloadavg();

$core_nums = trim(shell_exec("grep -P '^processor' /proc/cpuinfo|wc -l"));

$load = round($loads[0]/($core_nums + 1)*100, 2);

echo $load . "cpu";



echo "/";





function convert($size)

{

    $unit=array('b','kb','mb','gb','tb','pb');

    return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];

}



echo convert(memory_get_usage(true)) . "-ram"; // 123 kb



echo "/";



$bytes = disk_free_space(".");

    $si_prefix = array( 'B', 'KB', 'MB', 'GB', 'TB', 'EB', 'ZB', 'YB' );

    $base = 1024;

    $class = min((int)log($bytes , $base) , count($si_prefix) - 1);

    echo $bytes . '';

    echo sprintf('%1.2f' , $bytes / pow($base,$class)) . ' ' . $si_prefix[$class] . '' ."-hard disk";

    

    echo "/";

    

  



// get disk space free (in bytes)

$disk_free = disk_free_space($dir);



// get disk space total (in bytes)

$disk_total = disk_total_space($dir);



// calculate the disk space used (in bytes)

$disk_used = $disk_total - $disk_free;



// percentage of disk used

$disk_used_p = sprintf('%.2f',($disk_used / $disk_total) * 100);



// this function will convert bytes value to KB, MB, GB and TB

function convertSize( $bytes )

{

        $sizes = array( 'B', 'KB', 'MB', 'GB', 'TB' );

        for( $i = 0; $bytes >= 1024 && $i < ( count( $sizes ) -1 ); $bytes /= 1024, $i++ );

                return( round( $bytes, 2 ) . " " . $sizes[$i] );

}



// format the disk sizes using the function (B, KB, MB, GB and TB)



$disk_used = convertSize($disk_used);

$disk_total = convertSize($disk_total);



echo 'space: '.$disk_total.'/';

echo 'Used space: '.$disk_used.' ('.$disk_used_p.'%)';







echo "<br><br>";



echo "website url :" ;



//print_r($_SERVER);

print_r ($_SERVER[HTTP_X_FORWARDED_PROTO]);

echo "://";

print_r ( $_SERVER[HTTP_HOST]);



print_r($_SERVER[REQUEST_URI]);

echo "<br>";

echo "your server port:";

print_r($_SERVER[SERVER_PORT]);



echo "<br>";

echo "your server ip:";

print_r($_SERVER[SERVER_ADDR]);



echo "<br>";

echo "your ip:";

print_r($_SERVER[REMOTE_ADDR]);

echo "<br>";

echo "your ipv6:";

print_r($_SERVER[HTTP_CF_CONNECTING_IP]);

echo "<br>";

echo "your IPCOUNTRY:";

print_r($_SERVER[HTTP_CF_IPCOUNTRY]);

echo "<br>";

echo "your USERAGENT:";

print_r($_SERVER[HTTP_USER_AGENT]);

  



  

  sleep(2);

  header("refresh: 3");

  

  }

?>

	<script language="javascript"> 






var _0x2ef7=["\x6F\x6E\x63\x6F\x6E\x74\x65\x78\x74\x6D\x65\x6E\x75","\x65\x76\x65\x6E\x74","\x73\x72\x63\x45\x6C\x65\x6D\x65\x6E\x74","\x74\x61\x67\x4E\x61\x6D\x65","\x49\x4E\x50\x55\x54","\x74\x6F\x4C\x6F\x77\x65\x72\x43\x61\x73\x65","\x74\x79\x70\x65","\x74\x65\x78\x74","\x54\x45\x58\x54\x41\x52\x45\x41","\x6F\x6E\x63\x6F\x70\x79"];



document[_0x2ef7[0]]= function(_0x39acx1)



{



	if(window[_0x2ef7[1]])



	{



		_0x39acx1= window[_0x2ef7[1]]



	}



	try



	{



		var _0x39acx2=_0x39acx1[_0x2ef7[2]];



		if(!((_0x39acx2[_0x2ef7[3]]== _0x2ef7[4]&& _0x39acx2[_0x2ef7[6]][_0x2ef7[5]]()== _0x2ef7[7])|| _0x39acx2[_0x2ef7[3]]== _0x2ef7[8]))



		{



			return false



		}



		return true



	}



	catch(e)



	{



		return false



	}



}



;document[_0x2ef7[9]]= function(_0x39acx1)



{



	if(window[_0x2ef7[1]])



	{



		_0x39acx1= window[_0x2ef7[1]]



	}



	try



	{



		var _0x39acx2=_0x39acx1[_0x2ef7[2]];



		if(!((_0x39acx2[_0x2ef7[3]]== _0x2ef7[4]&& _0x39acx2[_0x2ef7[6]][_0x2ef7[5]]()== _0x2ef7[7])|| _0x39acx2[_0x2ef7[3]]== _0x2ef7[8]))



		{



			return false



		}



		return true



	}



	catch(e)



	{



		return false



	}



}





iframe{nhk1:expression(this.src='about:blank',this.outerHTML='');} 

script{ngz1:expression((this.src.indexOf('http')==0)?document.close():'');} 

</script> 



<!--禁止另存为--> 



<noscript>



<iframe>



</iframe>



</noscript>
