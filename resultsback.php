<?php
    session_start();
    ob_start();

    #get data from session
    $output = $_SESSION["output"];
    $data = $_SESSION["data"];

    #read prediction result
    for($i=0;$i<sizeof($output);$i++){
        trim($output[$i]);
        if($i==5){ #line 5 is desired value   
            $pd = explode('      ',$output[$i]); #split string by space 7 times
            #prediction result 0 or 1
            $pre = $pd[3];
            #prop of prediction
            $prop = floatval($pd[4]);
            break;     
        }
    }

    #convert prop to be percentage
    $proppc = round($prop*100,1);
    #check result 0 or 1
    if($pre[4] == '0'){
        echo "<h3>".$data[0]." ".$data[1]." เป็นภาวะหัวใจล้มเหลว</h3>". 
        "<h4>&nbsp&nbsp&nbspPrediction confidence : ".$proppc." %<h4>";
    }else{
        echo "<h3>".$data[0]." ".$data[1]." ไม่เป็นภาวะหัวใจล้มเหลว</h3>".
        "<h4>&nbsp&nbsp&nbspPrediction confidence : ".$proppc." %<h4>";
    }

    #save history in h-his.txt
    $hisfile = fopen("h-his.txt","a") or die("Unable to open file!");
    $txt = 
        $data[0].",".$data[1].",".$data[2].",".$data[3].",".$data[4].",".$data[5].",".$data[6].",".$data[7]
        .",".$data[8].",".$data[9].",".$data[10].",".$data[11].",".$data[12].",".$data[13].",".$pre[4]."\n"
    ;
    fwrite($hisfile,$txt);
    fclose($hisfile);
?>