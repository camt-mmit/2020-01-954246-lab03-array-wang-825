<?php
/*ID: 602110191
Name:Wang Zexue
Wechat: Wang*/   
    $datas = [];
    $i=1;
  while(true){
        printf("Input score $i ('e' for the end of data): ");
        fscanf(STDIN, "%s", $a);
        if($a =="e") {
            break;}
        else $datas[]=$a;
        $i++;
    }
    printf("\n");
    if(count($datas) > 0) {
        $t = 0;
        foreach($datas as $data) $t += $data;
        printf("The average score for ",$average = $t / count($datas));
        foreach($datas as $i => $data) {
            $delim = "";
            if($i>0&&$i<count($datas)-1 ) $delim =",";
            else if($i==count($datas)-1) $delim =" and ";
            printf("%s%.2f", $delim, $data);
        }   
        printf(" = %.2f\n", $average);
    } 
    else {
        printf("No data!!");}

