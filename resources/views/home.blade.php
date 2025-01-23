<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Dentaire</title>
</head>

<body>
    @include('layout.header')

    <section class="home-top">
        <div class="container">
            <div class="content">
                <h4>Votre santé dentaire, notre priorité.</h4>
                <h6>Des soins dentaires de qualité pour un sourire éclatant.</h6>
                <a>Réserver maintenant</a>
            </div>
        </div>
    </section>

    <section class="home-about my-5" id="à-propos">
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-5 col-sm-6 col-md-6 text-center">
                    <img src="img/about.jpg" class="img-fluid" alt="Image illustrative de soins dentaires">
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6">
                    <h6>À propos</h6>
                    <h4>En savoir plus sur nous et lire nos offres</h4>
                    <p>Chez Dentaire, nous mettons votre santé dentaire au cœur de nos priorités. Grâce à une équipe
                        expérimentée et des technologies de pointe, nous offrons des soins personnalisés et complets,
                        allant du nettoyage dentaire aux traitements avancés comme les implants et le blanchiment. Tout
                        cela dans un environnement chaleureux et moderne, pour un sourire éclatant en toute confiance.
                    </p>
                    <div class="d-flex">
                        <div class="w-50 align-items-center">
                            <i class="fa-solid fa-headset"></i>
                            <span>Client Support</span>
                        </div>
                        <div class="w-50 align-items-center">
                            <i class="fa-solid fa-user-doctor"></i>
                            <span>Doctor Support</span>
                        </div>
                    </div>
                    <div class="d-flex my-4">
                        <div class="w-50">
                            <a href="">Contact</a>
                        </div>
                        <div class="w-50">
                            <a href="" style="background-color:blue;">Réserver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-service mt-5 pt-5" id="services">
        <div class="container">
            <div class="text-center">
                <h4 class="title">Services</h4>
                <h6>Choisissez les meilleurs services que nous offrons</h6>
                <div class="row my-5 py-5">
                    <div class="col-lg-4 col-sm-12 col-md-6">
                        <div class="content">
                            <img src="img/services1.png" alt="">
                            <h5>Contrôle des bactéries</h5>
                            <p>Prévention et élimination des bactéries pour une santé bucco-dentaire optimale.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-6">
                        <div class="content">
                            <img src="img/services2.png" alt="">
                            <h5>Obturation</h5>
                            <p>Restauration des dents endommagées par des caries pour une protection durable.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-6">
                        <div class="content">
                            <img src="img/services3.png" alt="">
                            <h5>Nettoyage</h5>
                            <p>Élimination de la plaque et du tartre pour une santé bucco-dentaire optimale.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-6">
                        <div class="content">
                            <img src="img/services4.png" alt="">
                            <h5>Contrôle</h5>
                            <p>Surveillance régulière pour prévenir et traiter les problèmes dentaires tôt.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-6">
                        <div class="content">
                            <img src="img/services5.png" alt="">
                            <h5>Extraction</h5>
                            <p>Retrait d'une dent pour prévenir les infections et soulager la douleur.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-6">
                        <div class="content">
                            <img src="img/services6.png" alt="">
                            <h5>Blanchiment</h5>
                            <p>Éclaircissement des dents pour un sourire plus éclatant et naturel.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="home-service mb-5" id="home-contact">
        <div class="container">
            <div class="text-center">
                <h4 class="title">Contact</h4>
                <h6>Pour toute question, n'hésitez pas à nous contacter ou à nous rendre visite.</h6>
            </div>
            <div class="contact-content">
                <div class="row py-5">
                    <div class="col-lg-6 col-sm-12 col-md-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13241.651642743205!2d-6.906577351560861!3d33.93050660432431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda76d2362a77b2d%3A0x1e04057b83373f0e!2sCentre%20Dentaire%20Hachimi!5e0!3m2!1sfr!2sma!4v1737632619585!5m2!1sfr!2sma" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-md-12 ">
                        <ul>
                            <li><a href=""><i class="fa-solid fa-location-dot"></i>Test , Test , N00</a></li>
                            <li><a href=""><i class="fa-solid fa-envelope"></i>info@gmail.com</a></li>
                            <li><a href=""><i class="fa-solid fa-phone"></i>+212 652583234</a></li>
                            <li><a href=""><i class="fa-brands fa-whatsapp"></i>+212 652583234</a></li>
                            <li><a href=""><i class="fa-brands fa-instagram"></i>test_test</a></li>
                            <li><a href=""><i class="fa-brands fa-facebook"></i>Test Test</a></li>
                            <li><a href=""><i class="fa-brands fa-telegram"></i>+212 652583234</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    @include('layout.footer')

    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>


</body>

</html>
