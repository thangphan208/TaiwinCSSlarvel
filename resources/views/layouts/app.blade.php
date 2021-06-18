<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel-casts Voting</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.0-canary.16/tailwind.min.css"
          integrity="sha512-bCrETtEVhxwUaYXKR7LeP4wkzfqBrjL2H/u0c7tKRnZGLqatfZzSB+VvG3vCszHoo+QeWOl467pRgsRaXPyZPA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.0-canary.16/base.css"
          integrity="sha512-XvHTHOOd5g3cct0+XtmtgFzz86Ed98aM2EJyPo11zXUp07PbCNvGMZBqGPc0gKL9k3S5pbP+JTrByWKugFVVNg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.0-canary.16/utilities.min.css"
          integrity="sha512-einsnY5Ti9WNRsxAwifno5lMOviZlMkkewp55Mi480T97asB8MBDxRvZLd93jX5yebFwygHb1KHhlajtS3aMsA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="font-sans text-gray-900 text-sm bg-gray-50">

    {{--    header of  this page    --}}

        @include('layouts.header')

    {{--end of header of this page--}}

    {{--begin main--}}

        @include('layouts.main')
    {{--end of main--}}

</body>
</html>
