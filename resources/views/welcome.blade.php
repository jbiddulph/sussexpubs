@extends('layouts.app')

@section('content')

        <div class="colorbar"></div>

    <div style="width: 100%; height: 300px;">
        {!! Mapper::render() !!}
    </div>
    <div class="container mt-4 welcome">
        <h1 class="mb-4">Venues</h1>
        <div class="row">
            @foreach($venues as $venue)
                <div class="col-md-3">
                    <div class="property-card card mb-4">
                        @if(isset($venue->photo))
                            @php
                                $mainphoto = str_replace('public/venues/', 'storage/venues/', $venue->photo)
                            @endphp
                            <div class="mainpic">
                                <a href="/venues/{{ str_slug($venue->town)}}/{{str_slug($venue->venuename)}}/{{$venue->id}}"><img class="d-block img-fluid prop_photo" src="/{{ $mainphoto }}" alt="{{$venue->venuename}}"></a>
                            </div>
                        @endif
                        <div class="card-body">
                            <h4 class="card-title"><a href="/venues/{{ str_slug($venue->town)}}/{{str_slug($venue->venuename)}}/{{$venue->id}}">{{$venue->venuename}}</a></h4>
                            <h5><a href="/venues/towns/{{ str_slug($venue->town)}}/">{{$venue->town}}</a></h5>    
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div>
            <a href="{{route('venues')}}">
                <button class="btn btn-secondary btn-lg mt-4" style="width: 100%;">Browse All</button>
            </a>
        </div>
        <div class="row">
            <div class="col-md-4">


            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>
    <div class="colorbar mt-5"></div>
@endsection
