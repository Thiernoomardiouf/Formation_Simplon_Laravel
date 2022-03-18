@extends('formations.layouts.app')

@section('content')

<div class="container " style="margin-top: 80px">
        <div class="row mt-5">
            <h2 class="text-center">Formulaire pour ajouter une formation</h2>
            <div class="col">
                <form method="post" action="{{ route('formations.store') }}" enctype="multipart/form-data">
                @csrf
                  <div class="mb-3">
                    <label for="nomFtn" class="form-label">Nom de la formation</label>
                    <input type="text" class="form-control p-3" id="nomFtn" name="titre" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="descriptionFtn" class="form-label">La déscription de la formation </label>
                    <textarea class="form-control p-5" name="description" id="descriptionEte"></textarea>
                  </div>
                <div class="mb-3">
                    <label for="imageFtn" class="form-label">Image de la formation</label>
                    <input type="file" class="form-control" id="image" name="image"  accept="image/png, image/jpeg">
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" name="categorie">
                        <option selected>Séléctionner le type de la formation</option>
                        <option value="public">Par Public</option>
                        <option value="parcours">Par Parcours</option>
                        <option value="partenariat">En Partenariat</option>
                    </select>
                </div>
                
                
                              
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>

@endsection