<?php 


function debugger($data, $is_die,$dump=false){
	echo "<pre style='color:#000; background-color:#ccc;'>";
	if($dump){
		var_dump($data);
		/*echo "I am dump";*/

	}else {
		print_r($data);
		/*echo "I am print_r";*/

	}
	echo "</pre>";
	if ($is_die){
		exit;
	}
	
}


function limit($x, $length)
{
  if(strlen($x)<=$length)
  {
    echo $x;
  }
  else
  {
    $y=substr($x,0,$length) . '...';
    echo $y;
  }
}



 ?>
