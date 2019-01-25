// Paramétrage du changement d'image quand on clique sur la 
// Pokeball dans la colonne 'aside' pour afficher une Pokeball Ouverte
let image =  document.querySelector('.reglesBtnImg');

function changePokeball()
{
    if (image.getAttribute('src') == 'Images/Pokeball_regles.png')
    {
        image.src = 'Images/Pokeball_regles_ouverte.png';
    }
    else
    {
        image.src = 'Images/Pokeball_regles.png';
    }
}

