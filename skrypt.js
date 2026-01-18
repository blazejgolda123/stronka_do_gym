const ktoraOpcja=document.getElementById("dalej");
const ekran=document.getElementById("formularz");
const ekran_dodaj_trening=document.getElementById("dodaj_trening");
ktoraOpcja.addEventListener("click", function(){
    const zmienna=document.querySelector('input[name="opcja"]:checked');
    if (!zmienna){
        alert("Wybierz opcje!");
        return;
    }
    else{
        const option=zmienna.value;
        if (option=="trening"){
            ekran_dodaj_trening.style.display="block";
            ekran.style.display="none";
        }
    }
});