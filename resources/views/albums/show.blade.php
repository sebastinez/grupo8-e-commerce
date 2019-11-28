@extends('index')

@section("content")
<section class="fondos_albums" style="background: url({{$album->cover}});background-size: cover;">
    <div class="fondos_albums">
        <div class="pt-5">
            <div class="container padding">
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{$album->cover}}" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{$album->name}}</h5>
                                <h5 class="card-title">
                                    <a href="/artists/{{$album->artist[0]->id}}" class="text-white">
                                        {{$album->artist[0]->name}}
                                    </a>
                                </h5>
                                <p class="card-text">Release: {{$album->release_date}}<br>
                                    Cantidad de canciones: {{$album->total_tracks}}</p>
                                <span class="precio">{{$album->precio}} ARS</span>
                                @auth
                                @if($album->stock > 0)
                                <button style="display:block" data-type="comprar" data-id="{{$album->id}}" data-user="{{Auth::user()->id}}" class="btn btn-naranja">comprar</button>
                                @else
                                <button class="btn btn-secondary" disabled>SIN STOCK</button>
                                @endif
                                @endauth
                                <div class="tracks_albums">
                                    {{-- @foreach ($album->track as $track)
                                    <span class="badge badge-light"> {{$track->name}} </span>
                                    @endforeach --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row pb-5" style="color: #fff;">
            <div class="container">
                <div class="col-12">

                    @foreach ($album->track as $track)
                    <div class="container mt-5">
                        @if($track->preview_url !== null)
                        <div class="name_tracks">
                            <p>{{$track->track_number}} - {{$track->name}}</p>
                        </div>
                        <audio src="{{$track->preview_url}}" controls> </audio>
                        @else
                        <h5><a href={{'https://open.spotify.com/track/'.$track["spotify_id"]}}>{{$track->track_number}} - {{$track->name}}</a></h5>
                        @endif
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{asset("/js/comprarDisco.js")}}"></script>

@endsection