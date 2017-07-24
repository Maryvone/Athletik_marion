//Expression régulière formulaire champs 'Temps'
//var myRegex = /contenu_à_rechercher/;
//if (/^\d,\d\d$/){alert();}
//else(){ alert('Le format saisi n\'est pas correct. <br /> Utilisez ce format x,xx"');}

////selection catégorie selon date de naissance
////calcul age selon date de naissance et date du jour
// date_du_jour = 24/07/2017
// age = date_du_jour - date_de_naissance

//if age  
//>40 = Masters
// 23 – 40 = Seniors
// 20-22 = Espoirs
// 18-19 = Juniors
// 16-17 = Cadets
// 14-15 = Minimes
// 12-13 = Benjamins
$(document).on("change", "#courseaddcourse", function() {
    $("#liencourse").attr("href", '/addResultats/'+$(this).val());
});


//tableau des temps selon catégorie
var family = {
    Masters: '1,35',
    Seniors: '1',
    Espoirs: '1,09',
    Juniors: '1,18',
    Cadets: '1,21',
    Minimes: '1,35',
    Benjamins: '1,42',
    Poussins: '1,5'
};


