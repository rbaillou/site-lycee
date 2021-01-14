<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<!-- Affiche Header -->
@include('header')

<body>
    <!-- Bannière -->
    <div>
        <img class="bande" src="/img/restauration.jpg" width="100%">
    </div>

    <!-- Tableau -->
    <div class="border">
        <div class="grid-container">
            <div class="Image">
                <img class="img-fluid" src="/img/resto_coeur.jpg">
            </div>
            <div class="Menu">
                <p></p>
                Menu
                <p>
                    <a href="/restauration/menu">
                        <img onmouseover="select('menuPng')" onmouseout="deselect('menuPng')" id="menuPng" hspace="0" src="/img/menu.png" style="border-width: 0px; border-style: solid;" title="" vspace="0" width="20%">
                    </a>
                </p>
            </div>
            <div class="Restauration">
                <p></p>
                Restauration
                <p>
                    <a href="https://services.ard.fr/fr/espaces-clients/etablissements/barbezieux-elie_vinet.html">
                        <img onmouseover="select('restaurationPng')" onmouseout="deselect('restaurationPng')" id="restaurationPng" src="/img/bill.png" style="border-width: 0px; border-style: solid;" title="" vspace="0" width="20%">
                    </a>
                </p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

<!-- Afficher Footer -->
@include('footer')

</html>

<!-- CSS -->
<style>
    .grid-container {
    display: grid;
    grid-template-columns: 0.8fr 0.8fr 1.4fr;
    gap: 5px 4px;
    grid-template-areas:
        "Titre Titre Titre"
        "Image Image Menu"
        "Image Image Restauration";
    }
    .Image { grid-area: Image; }
    .Menu {
        grid-area: Menu;
        text-align: center;
        font-size: 40px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        background-color: #343a40;
        color: white;
    }
    .Restauration {
        grid-area: Restauration;
        text-align: center;
        font-size: 40px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        background-color:#343a40;
        color: white;
    }
    .Titre {
        grid-area: Titre; 
    }
</style>

<!-- JS -->
<script>
    function select(id){
        var myImg = document.getElementById(id);
        myImg.style.height = '150px';
        myImg.style.width = '150px';
    }

    function deselect(id){
        var myImg = document.getElementById(id);
        myImg.style.height = '145px';
        myImg.style.width = '145px';
    }
</script>