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
    <title>Réservation de Rendez-vous</title>
</head>

<body>
    @include('layout/header')

    <section class="appointment">
        <div class="title">
            <h5>Réservation de Rendez-vous</h5>
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m19 9-7 7-7-7" />
            </svg>
        </div>
        <div class="container py-5 mb-5">
            <div class="header-appointment">
                <div class="row">
                    <div class="col-4">
                        <span class="active">1. <strong>Temps</strong></span>
                        <hr class="active">
                    </div>
                    <div class="col-4">
                        <span>2. <strong>Confirmation</strong></span>
                        <hr>
                    </div>
                    <div class="col-4">
                        <span>3. <strong>Terminé</strong></span>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="content">
                <form action="appointmentpost" method="post">
                    @csrf
                    <div class="form-group text-center">
                        <p>Veuillez sélectionner la date de votre visite..</p>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @elseif(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <input type="date" id="date-select" name="date_reserve" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="submit" value="Suivant">
                    </div>
                </form>
            </div>
        </div>
        <div class="container py-5 mb-5">
            <div class="header-appointment">
                <div class="row">
                    <div class="col-4">
                        <span>1. <strong>Temps</strong></span>
                        <hr>
                    </div>
                    <div class="col-4">
                        <span class="active">2. <strong>Confirmation</strong></span>
                        <hr class="active">
                    </div>
                    <div class="col-4">
                        <span>3. <strong>Terminé</strong></span>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="available my-2">
                <div class="confirmed">
                    <p class="">Réservation confirmée pour le "27-01-2025". <br>  Veuillez remplir vos informations ci-dessous pour continuer.</p>
                    <form action="confirmedpost" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 my-2">
                                <label for="" class="form-label">Prénom</label>
                                <input type="text" class="form-control" name="firstname" required>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 my-2">
                                <label for="" class="form-label">Nom</label>
                                <input type="text" class="form-control" name="lastname" required>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 my-2">
                                <label for="" class="form-label">Numéro de Téléphone</label>
                                <input type="tel" class="form-control" name="phone_number" required>
                            </div>
                            <div class="col-12 my-2 d-flex justify-content-between">
                                <a href="backconfirmed" class="back">Retour</a>
                                <button type="submit" class="next">Suivant</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @include('layout/footer')


    <script src="main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>