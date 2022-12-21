const formularz=document.querySelector("form");
const marka=formularz.querySelector("input[name=wejscie1]");
const model=formularz.querySelector("input[name=wejscie2]");
const numerre=formularz.querySelector("input[name=wejscie3]");
const dane4=formularz.querySelector("paliwo");
let rodzaj=document.getElementById("paliwoRodzaj").value;


formularz.addEventListener("submit", e => {
    e.preventDefault();
    alert("Marka: "+marka.value+" Model: "+model.value+" Numer rejestracyjny: "+numerre.value);
    if(rodzaj=="Benz"){
        alert("rodzaj paliwa to beznyna 95");
    
    }
    });