@extends ('layout')

@section ('content')
<div class="container center">
    <h1>{{$product['nom']}}</h1><br>

    <div>

        <div class="container">


        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-12">

            <div class="container">
                <div class="bd-example">
                    <div id="carouselExampleCaptions" class="carousel slide carousel-fade " data-interval="false">                             <!-- DEBUT CAROUSSEL -->
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="photo-1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="photo-2"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="photo-3"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="photo-4"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="photo-5"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{$product['image1']}}" class="image" alt="photo-1">   <!-- 1 SLIDE -->
                            </div>
                            <div class="carousel-item">
                                <img src="{{$product['image2']}}" class="image" alt="photo-2">   <!-- 2 SLIDE -->
                            </div>
                            <div class="carousel-item">
                                <img src="{{$product['image3']}}" class="image" alt="photo-3">   <!-- 3 SLIDE -->
                            </div>
                            <div class="carousel-item">
                                <img src="{{$product['image4']}}" class="image" alt="photo-4">   <!-- 3 SLIDE -->
                            </div>
                            <div class="carousel-item">
                                <embed width="1100" height="600" src="{{$product['video']}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>  <!-- 3 SLIDE -->
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon fleche-g" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next " href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon fleche-d" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>                                                                                              <!-- FIN CAROUSSEL -->
                </div>
                <div class="card-body">

                    <h4>€ {{$product['prix']}}</h4>
                    <a href="#" class="btn colorBtn btn-lg">Ajout Panier</a>
                </div>
            </div>
            <div class="card card-outline-secondary my-4">
                <div class="card-header">
                    Description Produit
                </div>
                <div class="card-body">
                    <strong><p>{{$product['description']}}</p></strong>
                    <hr>

                    <div class="card-header">
                        Avis Client
                    </div>
                <div class="card-body">
                    <p>{{$avisClient['avis']}}</p>
                    <small class="text-muted">Posté par . {{$avisClient['nomClient']}} le . {{$avisClient['date']}}</small>
                    <hr>
                </div>
            </div>
        </div>

            <a href="{{$product['pdf']}}" class="btn colorBtn btn-lg end">Fiche Technique (PDF)</a><br>              <!-- LIEN PDF -->

    </div>

</div>
</div>
    <script src="{{asset('js/app.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.js')}}" crossorigin="anonymous"></script>      <!-- SCRIPT JAVA BOOTSTRAP -->
@endsection
