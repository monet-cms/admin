@extends('monet.admin::layouts.admin')

@section('content')
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
@endsection