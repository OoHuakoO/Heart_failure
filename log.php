<?php 
    #file h-his.txt for save prediction history
    $hisfile = fopen("h-his.txt","r") or die("Unable to open file!");
    $array = explode("\n", file_get_contents('h-his.txt'));
    #his array to save data from file as array
    $his = [];
    for($i=0;$i<sizeof($array);$i++){
        $list = explode(",",$array[$i]);
        array_push($his,$list);
    }
    fclose($hisfile);

    #edit data value
    for($i=0;$i<sizeof($his);$i++){
        for($j=0;$j<sizeof($his[$i]);$j++){
            //edit sex
            if($j==4){
                if($his[$i][$j]=='0'){
                    $his[$i][$j] = str_replace('0','ชาย',$his[$i][$j]);
                }else{
                    $his[$i][$j] = str_replace('1','หญิง',$his[$i][$j]);
                }
            }

            //edit redblood
            if($j==5){
                if($his[$i][$j]=='0'){
                    $his[$i][$j] = str_replace('0','ลดลง',$his[$i][$j]);
                }else if($his[$i][$j]=='1'){
                    $his[$i][$j] = str_replace('1','ไม่ลดลง',$his[$i][$j]);
                }
            }

            //edit sweet 
            if($j==7){
                if($his[$i][$j]=='0'){
                    $his[$i][$j] = str_replace('0','เป็น',$his[$i][$j]);
                }else{
                    $his[$i][$j] = str_replace('1','ไม่เป็น',$his[$i][$j]);
                }
            }

            //edit lohit
            if($j==9){
               if($his[$i][$j]=='0'){
                    $his[$i][$j] = str_replace('0','เป็น',$his[$i][$j]);
                }else{
                    $his[$i][$j] = str_replace('1','ไม่เป็น',$his[$i][$j]);
                }
            }

            //edit smokeweed
            if($j==13){
                if($his[$i][$j]=='0'){
                    $his[$i][$j] = str_replace('0','สูบ',$his[$i][$j]);
                }else{
                    $his[$i][$j] = str_replace('1','ไม่สูบ',$his[$i][$j]);
                }
            }
           
        }
    }
?>