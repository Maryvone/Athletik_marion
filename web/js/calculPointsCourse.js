//Expression régulière formulaire champs 'Temps'
//(/^\d,\d\d$/)

$(document).on("change", "#courseaddcourse", function() {
    $("#liencourse").attr("href", '/addResultats/'+$(this).val());
});

//sélection des points
var points = document.querySelector('.addresultpoints');

//sélection du nom de l'athlète
var athletenom = document.querySelector('.addresultlastname');

//sélection du prénom de l'athlète
var athleteprenom = document.querySelector('.addresultfirstname');

//sélection du bouton ok
var btnok = document.querySelector('.btnok');

//sélection de l'annee de naissance pour calcul age
var anneenaissance = document.querySelector('.addresultbirthdate');

//initialisation du temps
var time = document.querySelector('.addresulttime');

var coeff;
var age = 2017-anneenaissance.innerHTML ;

if (age>40){
    coeff=1,35;
}
else if (age>=23 && age<=40){
    coeff=1;
}
else if (age>=20 && age<=22){
    coeff=1,09;
}
else if (age==18 && age==19){
    coeff=1,18;
}
else if (age==16 && age==17){
    coeff=1,21;
}
else if (age==14 && age==15){
    coeff=1,35;
}
else if (age==12 && age==13){
    coeff=1,42;
}
else if (age==10 && age==11){
    coeff=1,5;
}
else {
    alert('L\'âge requis n\'est pas rempli' );
};

//lancement du calcul au click sur le bouton ok
$(document).on("change", ".changetime", function() {
    var tempssaisi = $(this).val();
    var id         = $(this).attr("id");
    var nouveautotalpoints = Math.round(1000/tempssaisi*coeff);
    
    document.getElementById('points'+id).innerHTML = nouveautotalpoints;
    
    
})


