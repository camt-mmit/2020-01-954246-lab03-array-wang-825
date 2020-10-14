<?php
/*ID: 602110191
Name:Wang Zexue
Wechat: Wang*/   
    printf("Input number of data: ");
    fscanf(STDIN, "%d", $n);
    $datas = [];
    for($i = 1; $i <=$n; $i++) {
        printf("Input score $i: ");
        fscanf(STDIN, "%f", $datas[]);
    }
    if(count($datas) > 0) {
        $t = 0;
        foreach($datas as $data) $t += $data;
        printf("The average score for ",$average = $t / count($datas));
        foreach($datas as $i => $data) {
            $delim = "";
            if($i>0&&$i<$n-1 ) $delim =",";
            else if($i==$n-1) $delim =" and ";
            printf("%s%.2f", $delim, $data);
        }   
        printf(" = %.2f\n", $average);
    } 