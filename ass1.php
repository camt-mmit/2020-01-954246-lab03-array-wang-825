<?php
/*ID: 602110191
Name:Wang Zexue
Wechat: Wang*/   
 printf("input number of data: ");
 fscanf(STDIN,"%d",$data);
 for($a=1;$a<=$data;$a++){
     printf("input score $a : ");
     fscanf(STDIN,"%f",$score);
     $c=(double)$score;
     $b=$b+$c;
 } printf("the average score %.2f\n",$average=$b/$data);

