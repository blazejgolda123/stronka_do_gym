<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Your Day</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <link rel="shortcut icon" href="img/silka.png"/>
</head>
<body>
    <div id="container">
        <div id="starter">
            <div id="zakladka"> 
                <img src="img/dodaj.png" width="70px" height="70px" alt="silka">
                <b>DODAJ</b>
            </div>
            <div id="zakladka"> 
                <img src="img/silka.png" width="70px" height="70px">
                <b>SILKA</b>
            </div>
            <div id="zakladka"> 
                <img src="img/book.png" width="70px" height="70px">
                <b>KSIAZKI</b>
            </div>
            <div id="zakladka"> 
                <img src="img/mood.png" width="70px" height="70px">
                <b>MOOD</b>
            </div>
        </div>
        <div id="zawartosc">
            <div id="formularz">
                <form id="ramka" >
                    <fieldset id="pole">
                        <legend>Dodaj</legend>
                        <div>
                            <form action="">
                                <fieldset >
                                    <div><label><input type="radio" name="opcja" value="trening">Trening</label></div>
                                    <div><label><input type="radio" name="opcja" value="ksiazki">Ksiazki</label></div>
                                    <div><label><input type="radio" name="opcja" value="mood">Mood</label></div>
                                    
                               </fieldset>
                            </form>
                        </div>
                        <div id="przycisk">
                            <input type="button" id="dalej" value="dalej" style="width: 70px; height: 30px;">
                        </div>
                    </fieldset>
                </form>
            </div>
            <div id="dodaj_trening">
                <form id="posrednik" action="podsumujtrening.php" method="post">
                    <fieldset id="pole_treningu">
                        <legend>Dodaj trening</legend>
                        <div id="dzien_tyg">
                            <fieldset style="height: 500px; border-radius: 20px; border: 3px solid rgb(149, 9, 192);">
                            <div id="day"><label><input id="ktoryDzien" type="radio" name="ktoryDzien" value="poniedzialek">Poniedzialek</label></div>
                            <div id="day"><label><input id="ktoryDzien" type="radio" name="ktoryDzien" value="sroda">sroda</label></div>
                            <div id="day"><label><input id="ktoryDzien" type="radio" name="ktoryDzien" value="piatek">piatek</label></div>
                            <div id="date"><input type="date"></div>
                            </fieldset>
                        </div>
                        <div id="poniedzialek" class="rozmiar">
                                <fieldset id="jakie_cwiczenie">
                                    <div><label>-Przysiady ze sztanga: <input type="text" placeholder="np. 70kg" name="przysiad">, ile serii: <input type="text>">, ile powtorzen: <input type="text>"> </label></div>
                                    <div><label>-Dipy z ciezarem: <input type="text" placeholder="np. 30kg" name="dipy">, ile serii: <input type="text>">, ile powtorzen: <input type="text>"> </label></div>
                                    <div><label>-ohp: <input type="text" placeholder="np. 17.5kg" name="ohp">, ile serii: <input type="text>">, ile powtorzen: <input type="text>"> </label></div>
                                    <div><label>-Wyciskanie francuskie: <input type="text" placeholder="np. 17.5kg" name="wyciskanieFrancuskie">, ile serii: <input type="text>">, ile powtorzen: <input type="text>"> </label></div>
                                    <div><label>-Allahy: <input type="text>" placeholder="np. 40 kg" name="allahy">,ile serii: <input type="text"> ile powtorzen: <input type="text>"> </label></div>
                                    <div><label>-Deska: <input type="text" placeholder="np. 10kg" name="plank"> ile serii: <input type="text"> ile czasu: <input type="text"></label></div>
                                </fieldset>
                                <div id="przyciski">
                                    <div id="przyciszczek1">
                                        <input type="button" id="wstecz" value="wstecz" style="width: 100px; height: 30px;">
                                    </div>
                                    <div id="przyciszczek2">
                                        <input type="submit" id="przeslij" value="przeslij" style="width: 100px; height: 30px;">
                                    </div>                                 
                                </div>
                        </div>
                        <div id="sroda" class="rozmiar">
                            <fieldset id="jakie_cwiczenie">
                                <div><label>-Martwy ciąg: <input type="text" placeholder="np. 70kg">, ile serii: <input type="text>">, ile powtorzen: <input type="text>"></label></div>
                                <div><label>-Podciaganie z ciezarem: <input type="text" placeholder="np. 30kg">, ile serii: <input type="text>">, ile powtorzen: <input type="text>"></label></div>
                                <div><label>-Bok barku: <input type="text" placeholder="np. 10kg">, ile serii: <input type="text>">, ile powtorzen: <input type="text>"> </label></div>
                                <div><label>-uginanie na biceps na modlitewniku: <input type="text" placeholder="np. 75kg">, ile serii: <input type="text">, ile powtorzen: <input type="text>"> </label></div>
                                <div><label>-ośle wspięcia: <input type="text" placeholder="np. 17.5kg">, ile serii: <input type="text>">, ile powtorzen: <input type="text>"> </label></div>
                                <div><label>-ściąganie warkocza na triceps, ile serii: <input type="text>">, ile powtorzen: <input type="text>"> </label></div>
                                <div><label>-allahy na stojaco: <input type="text" placeholder="np. 30sek"></label></div>
                                <div><label>-wznosy nóg na drążku: <input type="text" placeholder="np. 10"></label></div>
                            </fieldset>
                            <div id="przyciski">
                                <div id="przyciszczek1">
                                    <input type="button" id="wstecz" value="wstecz" style="width: 100px; height: 30px;">
                                </div>
                                <div id="przyciszczek2">
                                    <input type="submit" id="przeslij" value="przeslij" style="width: 100px; height: 30px;">
                                </div>                                 
                            </div>
                        </div>
                        <div id="piatek" class="rozmiar">
                            <fieldset id="jakie_cwiczenie">
                                <div><label>-Bench press: <input type="text" placeholder="np. 70kg">, ile serii: <input type="text>">, ile powtorzen: <input type="text>">, rir: <input type="text" placeholder="np. 8"></label></div>
                                <div><label>-T bar row: <input type="text" placeholder="np. 30kg">, ile serii: <input type="text>">, ile powtorzen: <input type="text>"> rir: <input type="text" placeholder="np. 8"></label></div>
                                <div><label>-Face pull: <input type="text" placeholder="np. 10kg">, ile serii: <input type="text>">, ile powtorzen: <input type="text>"> </label></div>
                                <div><label>-Sciąganie drązka na triceps: <input type="text" placeholder="np. 75kg">, ile serii: <input type="text">, ile powtorzen: <input type="text>"> </label></div>
                                <div><label>-ośle wspięcia na siedząco: <input type="text" placeholder="np. 17.5kg">, ile serii: <input type="text>">, ile powtorzen: <input type="text>"> </label></div>
                                <div><label>-plank: <input type="text>">, jaki ciezar: <input type="text>"> </label></div>
                            </fieldset>
                            <div id="przyciski">
                                <div id="przyciszczek1">
                                    <input type="button" id="wstecz" value="wstecz" style="width: 100px; height: 30px;">
                                </div>
                                <div id="przyciszczek2">
                                    <input type="submit" id="przeslij" value="przeslij" style="width: 100px; height: 30px;">
                                </div>                                 
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <script src="skrypt.js"></script>
</body>
</html>