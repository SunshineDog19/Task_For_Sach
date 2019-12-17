<!DOCTYPE html>
<html>
<head>
 <style type="text/css">
.banner
{
  display: block;
  max-width:200px;
  max-height:100px;
  width: auto;
  height: auto;
}
 </style>
</head>
<body>
<!-- Картинка может находися на диске С, а не в директории, как у меня в примере, тогда просто стоит добавить путь до неё, типа "C:/led.jpg"-->
<img class="banner" src="led.jpg"/> 
<!-- Задание три, сделал все в одном файле-->
<?php
$n = 100;
for ($i=0;$i<=$n;$i++){
print_r($arr[$i] = rand(1,3)." ");
}
$count=0;
for($i=0;$i<$n;$i++)
{	
	if ($arr[$i] == $arr[$i+1]){
    $count++;
	}
}
print_r('<br />');
print_r(" Количество последовательных пар одинаковых элементов - ".$count);
?>	
			
</body>
</html>