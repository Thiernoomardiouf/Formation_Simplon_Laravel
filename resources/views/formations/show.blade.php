@extends('formations.layouts.app');

@section('content')
    <div class="container my-3">
        <h2>Les détails de la formation {{ $formation->titre }} </h2>
        <img src="{{Storage::url($formation->image)}}" alt="" class="w-75 h-50">
    </div>
    <div class="container" style="margin-top: 80px; margin-bottom: 15px">
        <h4>Nom: {{ $formation->titre }}</h4>
          <h4>Catégorie: {{ $formation->categorie }}</h4>
          <h4>Déscription de la formation :</h4>  <p> {{ $formation->description }}</p>
    </div>

@endsection