
<!DOCTYPE html>

<html lang="fr">

<head>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="resources/css/bootstrap.min.css" rel="stylesheet">

    <meta charset="utf-8" />
    <title>Lycée Elie Vinet</title>
</head>

<!-- BODY -->
<body>

    <!-- Bannière -->
    <section>
        <div class="entete col-sm-12">
            <img class="bande" src="/img/template.png" width="100%"/>
            <img class="video" src="https://media.giphy.com/media/ykW8VLKYgjVnesFHE8/giphy.gif"/>
        </div>
    </section>

    @include('header')

    <div class="container-fluid">
        <div class="row">
            <section class="col-sm-4">
                <!-- Informations administratives -->
                    <h3 class="fo-aside__title">Informations pratiques</h3>
                    <ul class="list-group">

                        <!-- Media1 -->

                        <li class="list-group-item">
                            <div class="media">
                                <img src="/img/menu1.png" alt="Generic placeholder image" class="img-fluid">
                                <div class="texte col-md-9">
                                    <h5 class="font-weight-bold">Menu du self</h5>
                                    <h6 class="font-italic text-muted">Menu de la semaine du 04 janvier au 08 janvier 2021</h6>
                                </div>
                            </div>
                        </li>

                        <!-- Media2 -->
                        <li class="list-group-item">
                            <div class="media">
                                <img src="/img/logo-pix.jpg" alt="Generic placeholder image" class="img-fluid">
                                <div class="texte col-md-9">
                                    <h5 class="font-weight-bold">Certification PIX</h5>
                                    <h6 class="font-italic text-muted">Cultivez vos compétences numériques</h6>
                                </div>
                            </div>
                        </li>

                        <!-- Media3 -->
                        <li class="list-group-item">
                            <div class="media">
                                <img src="/img/self.jpg" alt="Generic placeholder image" class="img-fluid">
                                <div class="texte col-md-9">
                                    <h5 class=" font-weight-bold ">Accés au compte restauration</h5>
                                    <h6 class="font-italic text-muted  ">Accéder à votre espace personnel</h6>
                                </div>
                            </div>
                        </li>

                        <!-- Media4 -->
                        <li class="list-group-item">
                            <div class="media">
                                <img src="/img/conseil-de-classe.png" alt="Generic placeholder image" class="img-fluid">
                                <div class="texte col-md-9">
                                    <h5 class=" font-weight-bold ">Conseil de classe du 1er trimes...</h5>
                                    <h6 class="font-italic text-muted  ">Planning définitif actualisé le 05/01/2021</h6>
                                </div>
                            </div>
                        </li>

                        <!-- Media5 -->
                        <li class="list-group-item">
                            <div class="media">
                                <img src="/img/conseil-de-classe.png" alt="Generic placeholder image" class="img-fluid">
                                <div class="texte col-md-9">
                                    <h5 class=" font-weight-bold ">Conseil de classe du 1er trimes...</h5>
                                    <h6 class="font-italic text-muted  ">Planning définitif actualisé le 05/01/2021</h6>
                                </div>
                            </div>
                        </li>

                        <!-- Media6 -->
                        <li class="list-group-item">
                            <div class="media">
                                <img src="/img/conseil-de-classe.png" alt="Generic placeholder image" class="img-fluid">
                                <div class="texte col-md-9">
                                    <h5 class=" font-weight-bold ">Conseil de classe du 1er trimes...</h5>
                                    <h6 class="font-italic text-muted  ">Planning définitif actualisé le 05/01/2021</h6>
                                </div>
                            </div>
                        </li>

                    </ul>
            </section>


            <section class="col-sm-4">
                <!-- Vie de l'éleve | Parcours éducatifs -->
                    <h3 class="fo-aside__title">Vie du lycée</h3>

                    <ul class="list-group">

                        <!-- Media1 -->
                        <li class="list-group-item col">
                            <div class="media">
                                <img src="/img/journal.jfif" alt="Generic placeholder image" class="img-fluid">
                                <div class="texte col-md-9">
                                    <h5 class=" font-weight-bold ">Le Web Journal des lycéens</h5>
                                    <h6 class="font-italic text-muted  ">Découvrez la journée de nos lycéens</h6>
                                </div>
                            </div>
                        </li>

                        <!-- Media2 -->
                        <li class="list-group-item col">
                            <div class="media">
                                <img src="/img/activite.jfif" alt="Generic placeholder image" class="img-fluid">
                                <div class="texte col-md-9">
                                    <h5 class=" font-weight-bold ">Activités au sein du lycée</h5>
                                    <h6 class="font-italic text-muted  ">Planning des activités à l'internat</h6>
                                </div>
                            </div>
                        </li>

                        <!-- Media3 -->
                        <li class="list-group-item">
                            <div class="media">
                                <img src="/img/bus.jpg" alt="Generic placeholder image" class="img-fluid">
                                <div class="texte col-md-9">
                                    <h5 class=" font-weight-bold ">Sortie scolaire des BTS SIO</h5>
                                    <h6 class="font-italic text-muted  ">Visite de l'entreprise Websco</h6>
                                </div>
                            </div>
                        </li>

                        <!-- Media4 -->
                        <li class="list-group-item">
                            <div class="media">
                                <img src="/img/activite.jfif" alt="Generic placeholder image" class="img-fluid">
                                <div class="texte col-md-9">
                                    <h5 class=" font-weight-bold ">Activités au sein du lycée</h5>
                                    <h6 class="font-italic text-muted  ">Planning des activités à l'internat</h6>
                                </div>
                            </div>
                        </li>

                        <!-- Media5 -->
                        <li class="list-group-item">
                            <div class="media">
                                <img src="/img/activite.jfif" alt="Generic placeholder image" class="img-fluid">
                                <div class="texte col-md-9">
                                    <h5 class=" font-weight-bold ">Activités au sein du lycée</h5>
                                    <h6 class="font-italic text-muted  ">Planning des activités à l'internat</h6>
                                </div>
                            </div>
                        </li>

                        <!-- Media6 -->
                        <li class="list-group-item">
                            <div class="media">
                                <img src="/img/activite.jfif" alt="Generic placeholder image" class="img-fluid">
                                <div class="texte col-md-9">
                                    <h5 class=" font-weight-bold ">Activités au sein du lycée</h5>
                                    <h6 class="font-italic text-muted  ">Planning des activités à l'internat</h6>
                                </div>
                            </div>
                        </li>

                    </ul>
            </section>

            <section class="col-sm-4">

                        <!-- Liens utiles -->
                        <h3 class="fo-aside__title">Liens utiles</h3>
                        <div class="liens">
                            <a href="https://lyceeconnecte.fr/" title="Lycée connecté">
                                <img src="/img/region.jpg" width='100' height='75'>
                            </a>

                            <a href="https://0120010z.esidoc.fr/" title="e-sidoc">
                                <img src="/img/e-sidoc.jpg" width='100' height='75'>
                            </a>

                            <a href="https://services.ard.fr/fr/espaces-clients/etablissements/barbezieux-elie_vinet.html" title="Compte Restauration">
                                <img src="/img/ard.jpg" width='100' height='75'>
                            </a>

                            <a href="../restauration/menu" title="Menu">
                                <img src="/img/menu.jpg" width='100' height='75'>
                            </a>
                        </div>
                    
                        <!-- Twitter -->
                        <h3 class="fo-aside__title">L'actualité sur Twitter</h3>
                        <div class="twitter">
                            <a class="twitter-timeline" href="https://twitter.com/acpoitiers?ref_src=twsrc%5Etfw" height="530">Tweets by acpoitiers</a>
                            <script>
                                ! function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0],
                                        p = /^http:/.test(d.location) ? 'http' : 'https';
                                    if (!d.getElementById(id)) {
                                        js = d.createElement(s);
                                        js.id = id;
                                        js.src = p + "://platform.twitter.com/widgets.js";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }
                                }(document, "script", "twitter-wjs");
                            </script>
                        </div>

            </section>
            
        </div>
    </div>

    <!-- FOOTER -->
    <footer>
        @include('footer')
    </footer>

</body>

</html>

<!-- CSS -->
<style>
    .bande{
        position: relative;
        z-index:1;
        left:-1%;
    }
    .video{
        position: absolute;
        right: 0;
        width: 40%;
        height: 100%;
    }
    .fo-aside__title{
        margin-left:0%;
        margin-top:3%;
        background-color: #d00027;
    }
    .col-sm-12 {
        max-width: 100%;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .img-fluid {
        width: 135px;
        height: 84px;
        padding-right: 2%;
    }
</style>
