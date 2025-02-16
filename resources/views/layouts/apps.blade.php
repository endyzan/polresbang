<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="@yield('meta_description', 'Default Description')" />
    <meta name="author" content="Polres Bangkalan" />
    <meta name="keywords" content="Polres template" />
    <meta name="robots" content="index, follow" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', '')</title>
    <link rel="icon" type="image/x-icon" href="/assets/img/logos/logo_polres.png" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}?v={{ time() }}" rel="stylesheet" />
    <style>
        header.masthead {
            background-image: url("{{ asset('assets/img/mainbackground/Polri.jpg') }}");
        }
    </style>
</head>
<body class="bodyuser">
    <!-- Navbar -->
    @include('includes.navbar')

    <!-- Konten -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('includes.footer')

    <!-- Tombol Back to Top -->
    <button id="backToTop" title="Back to Top">
        <i class="fa-solid fa-angle-up"></i>
    </button>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-QF0xxS5H8mMRy5FZ56PbmgCkP0o9yrbuR+ctiJmkV+j8K7+1vxA7IeSGuqNE0V05" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuDaVvnZ8AB1lx7W00q0PAPoQZsYmGuj2ph2UpmoI9F7jRGdJwnjDgTMvfby1zF+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/scripts.js') }}?v={{ time() }}"></script>

    <script>
        // Ambil elemen tombol
        let backToTopButton = document.getElementById("backToTop");

        // Tampilkan tombol saat scroll ke bawah
        window.onscroll = function() {
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                backToTopButton.style.display = "flex";
            } else {
                backToTopButton.style.display = "none";
            }
        };

        // Scroll ke atas saat tombol diklik
        backToTopButton.addEventListener("click", function() {
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    </script>
</body>
</html>
