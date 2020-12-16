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
        @RELATION heart_failure
        @attribute sex {0,1}
        @attribute age numeric
        @attribute anaemia {0,1}
        @attribute creatinine_phosphokinase numeric
        @attribute diabetes {0,1}
        @attribute ejection_fraction numeric
        @attribute high_blood_pressure {0,1}
        @attribute platelets numeric
        @attribute serum_creatinine numeric
        @attribute serum_sodium numeric
        @attribute smoking {0,1}
        @attribute DEATH_EVENT {0,1}
        @DATA '
           .$sex.','.$age.','.$redblood.','.$ensyne.','.$sweet.','.$heart.','.$kwamdan.','.$ketblood
        .','.$creatine.','.$sodium.','.$smokeweed.',?';
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
    header('Location:results.php');
?>