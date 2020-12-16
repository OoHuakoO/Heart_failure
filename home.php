<?php
    #get data form form
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $sex = $_POST["sex"];
    $age = $_POST["age"];
    $redblood = $_POST["1"];
    $ensyne = $_POST["2"];
    $sweet = $_POST["3"];
    $heart = $_POST["4"];
    $kwamdan = $_POST["5"];
    $ketblood = $_POST["6"];
    $creatine = $_POST["7"];
    $sodium = $_POST["8"];
    $smokeweed = $_POST["9"];
    
    #create h-input.arff file to save data for prediction
    $inputfile = fopen("h-input.arff","w") or die("Unable to open file!");
    $text = '
        @RELATION HeartDisease
        @ATTRIBUTE age NUMERIC
        @ATTRIBUTE sex {0,1}
        @ATTRIBUTE cp {0,1,2,3}
        @ATTRIBUTE trestbps NUMERIC
        @ATTRIBUTE chol NUMERIC
        @ATTRIBUTE fbs {0,1}
        @ATTRIBUTE restecg {0,1,2}
        @ATTRIBUTE thalach NUMERIC
        @ATTRIBUTE exang {0,1}
        @ATTRIBUTE oldpeak NUMERIC
        @ATTRIBUTE slope {0,1,2}
        @ATTRIBUTE ca NUMERIC
        @ATTRIBUTE thal {0,1,2,3}
        @ATTRIBUTE target {0,1}
        @DATA '
        .$age.','.$sex.','.$cp.','.$trestbps.','.$chol.','.$fbs.','.$restecg
        .','.$thalach.','.$exang.','.$oldpeak.','.$slope.','.$ca.','.$thal.',?';
    fwrite($inputfile,$text);
    fclose($inputfile);

    #save data from form to $data
    $data = [$fname,$lname,$age,$sex,$redblood,$ensyne,$sweet,$heart,$kwamdan,$ketblood,$creatine,$sodium,$smokeweed];
    #execute weka
    $cmd = "java -cp ..\Weka-3-8\weka.jar weka.classifiers.bayes.NaiveBayes -T h-input.arff -l model\Heart-Bayes.model -p 0";
    exec($cmd,$output);

    #pass data by session
    session_start();
    ob_start();
    $_SESSION["output"] = $output;
    $_SESSION["data"] = $data;

    #redirect page to results
    header('Location:result.php');
?>