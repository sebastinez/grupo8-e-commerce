@extends("index")

@section("content")
<div class="padding">
    <div class="container pb-5">
        {{ Breadcrumbs::render('cart') }}
        <div class="titulos">Carrito de compra</div>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            Se confirmo su compra con exito!
        </div>
        @else

        <div class="row">
            <div class="col-md-8 col-xs-12">
                <div class="carrito-items">

                    @if(count($albums) > 0)
                    <div class="carritoActivo">
                        @foreach ($albums as $album)
                        <div class="row pb-3 carrito-contain" data-disco="d{{$album->id}}">
                            <div class="col-lg-4 col-md-12">
                                <img src="{{$album->cover}}"></div>
                            <div class="col-lg-5 col-md-12">
                                <p class="carrito-name-disc">{{$album->name}}</p>
                                <p class="carrito-name-artist">{{$album->artist[0]->name}}</p>
                                @if($album->stock > 0)
                                <p class="text-success">En Stock (quedan {{$album->stock}} discos)</p>
                                @else
                                <p class="text-warning">No hay stock</p>
                                @endif
                                <div class="form-row">
                                    <div class="col-3">
                                        <input type="number" name="cantidad" class="form-control" value="{{$album->pivot->cantidad}}" data-disco="d{{$album->id}}">
                                    </div>
                                    <div class="col-4">
                                        <button class="btn btn-warning " data-stock="{{$album->stock}}" data-id="{{$album->id}}" data-type="update">Actualizar</button>
                                    </div>
                                    <div class="col-4">
                                        <button class="btn btn-danger" data-id="{{$album->id}}" data-type="borrar">Borrar</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12 carrito-precio precio-desktop"><span id="precio">{{$album->precio}}</span> ARS</div>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <div class="mensaje-no-carrito">
                        <p> <br>
                            No hay discos en el carrito </p><a href="/"><span class="animated fadeInDown"> ¡Ve a elegir uno!</span></a>
                    </div>
                    @endif
                </div>
            </div>
            @if(count($albums) > 0)
            <div class="col-md-4 col-xs-12">
                <div class="carrito-subtotal">
                    <div class="card-subtotal">
                        <div class="card-body">
                            <div class="pb-3">
                                <h3>Subtotal: <span id="valor-subtotal">{{$subtotal}}</span> ARS</h3>
                            </div>
                            <form action="/carrito/confirm" method="POST">
                                @csrf
                                <input type="hidden" name="cartId" value="{{$cart->id}}" />
                                <button class="btn btn-success">Confirmar compra</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="carrito-relacionados">
                    <div class="card-subtotal">
                        <div class="card-body">
                            <div class="pb-3">
                                <h4>Productos relacionados</h4>
                                <div id="carrito-listadoRelacionados">
                                    @foreach($relacionados as $album)
                                    <a href="/albums/{{$album->id}}">
                                        <img src="{{$album->cover}}" width="80">
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
        @endif
    </div>
</div>
<script src="{{asset("/js/comprarDisco.js")}}"></script>

@endsection