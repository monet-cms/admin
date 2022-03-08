<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Dashboard</title>

        @livewireStyles
        <link rel="stylesheet" type="text/css" href="{{asset('/vendor/monet.admin/admin.css')}}"/>
    </head>
    <body class="font-sans antialiased bg-gray-100 text-sm text-gray-600">
        <x-monet.admin::top-header/>

        <div class="mt-20 px-10 py-5 flex">
            <x-monet.admin::side-nav/>

            <div class="flex-grow px-4">
                @yield('content')
            </div>
        </div>

        @livewireScripts
    </body>
</html>
