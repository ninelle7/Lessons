<?php 

/*$percent="65";
$nissan="niss4.jpg";
$cover="p.jpg";


//create_hidden_pic($nissan,$cover,$percent,'new.jpg');  
echo '<img src="'.create_hidden_pic($nissan,$cover,$percent,'new.jpg').'">';

function create_hidden_pic($open_img,$cover_img,$percent,$new_jpg){
$pic=(1080*$percent)/100;
$dest = imagecreatefromjpeg($open_img);
$src = imagecreatefromjpeg($cover_img);

imagecopymerge($dest, $src, 0, 1080-(1080-$pic), 0, 0, 1920, 1080-$pic, 100);
imagejpeg($dest, $new_jpg);
imagedestroy($dest);
imagedestroy($src);
return $new_jpg;
}
*/


        
        $month = '11';
        $today = time();
        echo $today;
        $next_date=$today + $month*30*24*60*60;
        echo date("F Y",$next_date);
        
        echo 'Привет?';
        
        echo 'Love you';
        echo'test';
 
?>