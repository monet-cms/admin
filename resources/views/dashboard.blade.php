<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Dashboard</title>

        @livewireStyles
        <link rel="stylesheet" type="text/css" href="{{mix('/vendor/monet.admin/admin.css')}}"/>
    </head>
    <body>
        <select>
            @foreach($dashboardNames as $id => $name)
                <option value="{{$id}}"
                        @if($id === $dashboard->id) selected @endif/>
                {{$name}}
                </option>
            @endforeach
        </select>

        <div class="grid gap-2">
            <x-monet.dashboard::dashboard :dashboard="$dashboard"/>
        </div>

        @livewireScripts
    </body>
</html>