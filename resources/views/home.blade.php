<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Dentaire</title>
</head>

<body>
    @include('layout.header')

    <section class="home">
        <div class="container">
            <h4>Votre santé dentaire, notre priorité.</h4>
            <h6>Des soins dentaires de qualité pour un sourire éclatant.</h6>
            <button>Réserver maintenant</button>
        </div>
    </section>

    @include('layout.footer')

    <script src="main.js"></script>

</body>

</html>
