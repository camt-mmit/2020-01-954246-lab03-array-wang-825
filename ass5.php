<?php
/*ID: 602110191
Name:Wang Zexue
Wechat: Wang*/ 
echo"Input number of grades: ";
fscanf(STDIN,"%d",$n);
echo"Input grade data from max score to min score\n";
for($i=1;$i<=$n;$i++){
	echo$i,": Input grade data (grade min_score) : ";
	fscanf(STDIN,"%s %f",$c,$f);
	$array[]=$c;
	$array1[]=$f;
}for($j=1;;$j++){
	echo"Input score ",$j," ('e' for end of data): ";
	fscanf(STDIN, "%s", $a);
	if($a=="e"){
    break;
    }else{
		$array2[]=$a;
		for($e=0;$e<=count($array1);$e++){
		if($a>=$array1[$e]){
	echo"Grade is ",$array[$e],"\n";
		break;
	}
	}
}
}if(count($array2) > 0){
	foreach($array2 as$data){
		$t+=$data;
	}$avg=$t/count($array2);
	foreach($array2 as$data){
		$p=pow(($data-$avg),2);
		$m+=$p;
	}echo"The average score for ";
	foreach($array2 as$j=>$data){
			if($j>0&&$j<count($array2)-1){
				$d=", ";
			}elseif($j=count($array2)-1){
				$d=" and ";
			}printf("%s%.2f",$d,$data);
		}echo"\n";
printf("Average = %.2f\n",$avg);
printf("Variance = %.2f",$m/count($array2));
}else{
	echo"No data!!!";
}

