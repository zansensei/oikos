@extends ('layout')

@section('content')

@foreach($homeView as $home)

<div class="content">
    <div class="col-md-12 productSlide" style="background-image: url({{$home['backgroundImage']}})">
        <div class="productName"><h2>{{$home['titreSlide']}}</h2>
        <h3>{{$home['subtitreSlide']}}</h3>
        </div>
    </div>
    <div class="productCollapse">
        <a class="btn boton" data-toggle="collapse" href="#collapseExample{{$home['id']}}" role="button" aria-expanded="false" aria-controls="collapseExample">
            +
        </a>
    <div class="collapse homeProductCollapse" id="collapseExample{{$home['id']}}">

        @foreach($product as $item)
            @if($item['id'] == $home['id'])
        <div class="card card-body productHome col-sm-3">
<div class="homeProductTitle">{{$item['nom']}}</div>
            <div class="homeProductPhoto"><img src="{{$item['image']}}" width="100%"></div>
            <div class="row"><div class="homeProductQty col-sm-6">Quantité : <input type="number" min="1" max="10" name="quantity" value="1"></div>
                <div class="homeProductPrice col-sm-6">{{$item['prix']}} €</div>
            </div>
            <div class="homeProductButton">
                <button class="btn btn-success">+ info</button>
                <button class="btn btn-success"><i class="fas fa-shopping-cart"></i></button>
            </div>
        </div>
            @endif
        @endforeach
    </div>
    </div>
</div>
@endforeach

@endsection
