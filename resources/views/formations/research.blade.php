@extends('formations.layouts.app');

@section('content')
     <!-- barre de recherche -->
     <div class="row justify-content-center my-5">
        <div class="col-sm-8 col-md-6">
            <form class="example" action="{{ route('formations.research') }}">
                <input type="text" placeholder="Search.." name="search" value="{{ request()->search ?? '' }}">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <!-- End search bar -->

    <div class="col-12 px-0">
        <div class="col-10 offset-1">
            <!-- Parcours title -->
            <h2 class=" fw-bold text-uppercase sp-red sp-line-under mb-2">Résultat de la recherche </h2>
            <p class="my-5 text-justify">
                    @if (count($formation_Search) == 0)
                    <div class="text-center">
                        <span class="" style="color: red; font-size: 25px;">Aucune formation trouver </span>
                    </div>
                @endif
                @if (count($formation_Search) > 0)
                    <div class="text-center">
                        <span class="" style="font-size: 25px;"> Voici la liste des formations  </span>
                    </div>
                @endif
            </p>
            <div class="row align-items-center p-relative">
                <!-- menu secondaire -->
                
                <!-- menu -->
                <div class="d-none d-md-inline-block col-md-2 col-sm-12 p-0 text-center">
                    <div class="left-bloc my-4 d-flex align-items-center  align-items-sm-start  ">
                        <div class="vertical-bar">
                        </div>
                    </div>
                </div>
                <!-- card formation -->
                <div class="col-md  ">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3">
                        
                        @foreach ($formation_Search as $formation)
                            <div class="my-3 justify-content-center ">
                                <div class="card shadow-sm h-100 text-center sp-rounded-to sp-rounded-bottom-15">
                                    <img src= "{{Storage::url($formation->image)}}"
                                        class="card-img-top sp-rounded-top-15" alt="Leadership illustration">
                                    <div class="card-body sp-rounded-bottom-15">
                                        <h5 class="card-title center text-uppercase fw-bold sp-red sp-text-sm">
                                        {{$formation->titre}}</h5>
                                        <p class="card-text"> 
                                            {{$formation->description}}
                                        </p>
                                        <a href="{{ route('formations.show',$formation) }}"
                                            class=" d-inline-block my-2  sp-text-sm  px-3 py-1 sp-rounded-link  sp-btn-danger ">En
                                            savoir plus</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection