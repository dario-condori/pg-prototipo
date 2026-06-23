<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'MMM')</title>
    <meta name="robots" content="noindex, nofollow">
    <meta name="description" content="Ministerio de Mineria y Metalurgia">
    <meta name="keywords" content="Mineria y Metalurgia">

    <link href="{{ asset('plantilla/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('plantilla/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">

    <link href="{{ asset('plantilla/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plantilla/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('plantilla/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('plantilla/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plantilla/phosphor-icons/phosphor-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('plantilla/lucide-icons/lucide.css') }}" rel="stylesheet">
    <link href="{{ asset('plantilla/simple-datatables/style.css') }}" rel="stylesheet">
    <link href="{{ asset('plantilla/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('plantilla/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('plantilla/choices.js/choices.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plantilla/flatpickr/flatpickr.min.css') }}" rel="stylesheet">

    <link href="{{ asset('plantilla/assets/css/main.css') }}" rel="stylesheet">
    @yield('hojaEstilos')
</head>

<body>
    @include('plantilla.cabecera')
    @include('plantilla.opciones')

    <!-- Main Content -->
    <main class="main">
        @yield('contenido')

        <!-- Footer -->
        @include('plantilla.pie')
    </main>

    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- Vendor JS Files -->
    {{-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
    <script src="{{ asset('plantilla/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('plantilla/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('plantilla/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('plantilla/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('plantilla/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('plantilla/quill/quill.js') }}"></script>
    <script src="{{ asset('plantilla/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('plantilla/choices.js/choices.min.js') }}"></script>
    <script src="{{ asset('plantilla/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('plantilla/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS Files -->
    <script src="{{ asset('plantilla/assets/js/theme.js') }}"></script>
    <script src="{{ asset('plantilla/assets/js/main.js') }}"></script>

    <!-- App Sidebar Toggle (for app pages with sidebars) -->
    <script src="{{ asset('plantilla/assets/js/apps-sidebar-toggle.js') }}"></script>

    @yield('javascripts')
</body>

</html>
