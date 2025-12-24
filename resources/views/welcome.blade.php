<!doctype html>
<html lang="en">

<head>
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-T95B5X7HQD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-T95B5X7HQD');
    </script>

    <!-- Meta Information -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Stylesheets -->
    <!-- Bootstrap.css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <!-- FontAwesome.css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <!-- Open Sans Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Animate On Scroll CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" media="all" href="{{ URL::asset('css/app.css') }}" />
    <!-- JavaScript Imports-->
    <!-- Animate On Scroll Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="56">

        @include('partials.navigation')

        <div class="container shadow-box no-padding">

            @include('partials.header')

            @include('partials.interests')

            @include('partials.inspirations')

            @include('partials.skills')

            @include('partials.experience')

            @include('partials.education')

        </div>

        <div class="container no-padding" style="">

            @include('partials.portfolio')

            @include('partials.contact')

        </div>

        <footer class="text-center col-md-12">&copy; 2018 Jonasmohr.dk</footer>

    <script src="{{ URL::asset('js/index.js') }}"></script>


</body>

</html>