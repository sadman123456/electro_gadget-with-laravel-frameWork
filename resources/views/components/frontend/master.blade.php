<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- --------------------- -->
        <link href="{{ asset('assets/frontend/css/about.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/frontend/css/billing.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/frontend/css/cart.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/frontend/css/contact.css') }}" rel="stylesheet">
        <!-- <link href="{{ asset('assets/frontend/css/invoice.css') }}" rel="stylesheet"> -->
        <link href="{{ asset('assets/frontend/css/products.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/frontend/css/signle.css') }}" rel="stylesheet">
        <!-- <link href="{{ asset('assets/frontend/css/thanks.css') }}" rel="stylesheet"> -->


        

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/main.css') }}">

    <title>Electro Gadgets</title>
</head>

<body>
    <div class="container_fluid ">

    <x-frontend.partials.header />


        

        {{ $slot }}

        <!-- Footer -->
        <x-frontend.partials.footer />














        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

        </script>

        <script>
            (function () {
                const second = 1000,
                    minute = second * 60,
                    hour = minute * 60,
                    day = hour * 24;

                //I'm adding this section so I don't have to keep updating this pen every year :-)
                //remove this if you don't need it
                let today = new Date(),
                    dd = String(today.getDate()).padStart(2, "0"),
                    mm = String(today.getMonth() + 1).padStart(2, "0"),
                    yyyy = today.getFullYear(),
                    nextYear = yyyy + 1,
                    dayMonth = "08/30/",
                    birthday = dayMonth + yyyy;

                today = mm + "/" + dd + "/" + yyyy;

                //end

                const countDown = new Date(birthday).getTime(),
                    x = setInterval(function () {

                        const now = new Date().getTime(),
                            distance = countDown - now;

                        document.getElementById("days").innerText = Math.floor(distance / (day)),
                            document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                            document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                            document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);


                        //seconds
                    }, 0)
            }());
        </script>
</body>

</html>