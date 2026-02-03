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
const wstecz=document.querySelectorAll('input[value="wstecz"]');
wstecz.forEach(cofnij=>{
    cofnij.addEventListener('click',function(){
        location.reload();
    });
});
const poniedzialek=document.getElementById("poniedzialek");
const sroda=document.getElementById("sroda");
const piatek=document.getElementById("piatek");
const zmien=document.querySelectorAll('input[name="ktoryDzien"]');
zmien.forEach(radio=>{
    radio.addEventListener('click', function(){
        const day=this.value;
        poniedzialek.style.display = 'none';
        sroda.style.display        = 'none';
        piatek.style.display="none";
        if (day=="poniedzialek")
        {
            poniedzialek.style.display="block";
        }
        if (day=="sroda")
        {
            sroda.style.display="block";
        }
        if (day=="piatek")
        {
            piatek.style.display="block";
        }
    });
});
