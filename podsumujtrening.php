<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $data=$_POST['data'];
        $tab1=["ciezar","serii","powtorzenia"];
        $tab=["przysiad","dipy","ohp","wyciskanieFrancuskie","plank","allahy"];
        $cwiczenia=[];
        foreach ($tab as $nazwa) { 
            $cwiczenia[$nazwa]=[
            "ciezar"=>0,
            "serii"=>0,
            "powtorzenia"=>0,
            ];
        }
        for ($i=0; $i<6; $i++){
            for ($j=0; $j <3 ; $j++) { 
                $cwiczenia[$tab[$i]][$tab1[$j]]=$_POST[$tab[$i]][$tab1[$j]];
            }
        }
        echo $data. "<br>";
        for ($i=0; $i < 6; $i++) { 
            echo $tab[$i].": ";
            for ($j=0; $j <3 ; $j++) { 
                echo $tab1[$j].": ".$cwiczenia[$tab[$i]][$tab1[$j]].", ";
            }
            echo "<br>";
        }
    ?>
</body>
</html>