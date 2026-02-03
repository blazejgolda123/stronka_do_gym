<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $ciezar=[];
        $tab=["przysiad","dipy","ohp","wyciskanieFrancuskie","plank","allahy"];
        for ($i=0; $i<6; $i++){
            $ciezar[$i]=$_POST[$tab[$i]];
            
        }
        echo $ciezar[1];
    ?>
</body>
</html>
przysiad, 70, 3, 5