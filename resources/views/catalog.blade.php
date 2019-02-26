@extends ("layout")

{{--dd($product)--}}
@section("content")
    @foreach($product as $cardProduct)

<br>
<div class="container">
<div class="d-flex justify-content-start "><img src="{{$cardProduct['image']}}" alt="photo" class="img-thumbnail imgperso">


    <div class="card">
        <div class="card-body">
            <h2 class="card-title">{{$cardProduct['nom']}}</h2><br>
            <h5 class="card-subtitle mb-2 text-muted"><strong>{{$cardProduct['accroche']}}</strong></h5><br>
            <p class="card-text">{{$cardProduct['description']}}</p><br>
        <div class="d-flex justify-content-between">

         <div>
               <button type="button" class="btn btn-success btn-lg">Acheter</button>
               <button type="button" class="btn btn-secondary btn-lg">Fiche complète</button>
           </div>

            <div>
            <button  type="button" class="btn btn-success ">{{$cardProduct['prix']}} €</button>
            </div>
        </div>
        </div>
    </div>
</div>

@endforeach





</div>
@endsection
