@extends("layout")

@section("content")

<form class="form-horizontal" action="/createProduct" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <fieldset>

        <!-- Form Name -->
        <legend>PRODUCTS</legend>



        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_name">Nom du produit</label>
            <div class="col-md-4">
                <input id="product_name" name="product_name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">

            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_categorie">Catégorie du produit</label>
            <div class="col-md-4">
                <select id="product_categorie" name="product_categorie" class="form-control">
                </select>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="available_quantity">Stock</label>
            <div class="col-md-4">
                <input id="available_quantity" name="available_quantity" placeholder="AVAILABLE QUANTITY" class="form-control input-md" required="" type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_weight">Poid</label>
            <div class="col-md-4">
                <input id="product_weight" name="product_weight" placeholder="PRODUCT WEIGHT" class="form-control input-md" required="" type="text">

            </div>
        </div>


                <!-- File Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="filebutton">auxiliary_images</label>
                    <div class="col-md-4">
                        <input id="filebutton" name="filebutton" class="input-file" type="file">
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton">Single Button</label>
                    <div class="col-md-4">
                        <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">Crée le produit</button>
                    </div>
                </div>

    </fieldset>
</form>
@endsection