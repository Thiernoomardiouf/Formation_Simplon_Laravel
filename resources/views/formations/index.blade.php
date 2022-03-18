@extends('formations.layouts.app');

@section('content')

    <figure>
        <img src="/images/formationsproBestResolution.jpg" alt="Banner" class="img-fluid">
        <figcaption class="position-absolute">Formations</figcaption>
    </figure>
     <!-- barre de recherche -->
     <div class="row justify-content-center">
        <div class="col-sm-8 col-md-6">
            <form class="example" action="{{ route('formations.research') }}">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <!-- End search bar -->

    <!-- public Section  -->
    <section class="row mb-3 justify-content-center row-secondary public-section">
            <div class="col-12">
                <div class="col-10 offset-1">
                    <!-- Public title -->
                    <h2 class=" fw-bold text-uppercase sp-red sp-line-under mb-2">Par Public </h2>
                    <p class="my-5 text-justify">
                        Physical space is often conceived in three linear dimensions, although modern physicists usually
                        consider it, with time, to be part of a boundless four-dimensional continuum known as spacetime.
                        The concept of space is considered to be of fundamental importance to an understanding of the
                        physical Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, nostrum optio id iusto
                        doloribus suscipit similique incidunt minima molestiae alias tempora beatae. Eaque, ducimus
                        maiores?
                        Corporis nostrum fugit alias eum exercitationem tempore ab sapiente temporibus modi quae tempora
                        laudantium deserunt asperiores aliquid ratione dolorum placeat omnis hic enim aperiam ducimus,
                        labore aliquam. Vitae, adipisci ea accusamus esse molestias quae tenetur asperiores aspernatur
                        laborum aperiam molestiae vero quod praesentium fuga dolore deserunt facere libero. Sunt earum
                        debitis
                        corporis nihil magni, maiores quasi natus! Deleniti cum perferendis placeat vel corporis dolor
                        quod
                        reiciendis ad ullam? Minus architecto officia animi quod quo sit.
                    </p>
                    <div class="row align-items-center">
                        <!-- menu secondaire -->
                        <div class="menu secondary-menu position-fixed d-md-none secondary-menu-public sp-hidden-left">
                            <p
                                class=" active align-items-center d-flex p-1 pe-md-3 rounded-pill rounded-start shadow-sm">
                                <span class="d-flex align-items-center">
                                    <object type="image/svg+xml" data="./formations/img/SVG/IconFemmeBlanc.svg"
                                        title="icon"></object>
                                </span>
                                Femme
                            </p>
                            <p
                                class="align-items-center d-flex p-1 pe-md-3 rounded-pill rounded-start shadow-sm">
                                <span class="d-flex align-items-center">
                                    <object type="image/svg+xml" data="./formations/img/SVG/IconDiscoverBlanc.svg"
                                        title="icon"></object>
                                </span>
                                Kids
                            </p>
                            <p
                                class="align-items-center d-flex p-1 pe-md-3 rounded-pill rounded-start shadow-sm">
                                <span class="d-flex align-items-center">
                                    <object type="image/svg+xml" data="./formations/img/SVG/IconDiscoverBlanc.svg"
                                        title="icon"></object>
                                </span>
                                PSH
                            </p>
                            <p
                                class="align-items-center d-flex p-1 pe-md-3 rounded-pill rounded-start shadow-sm">
                                <span class="d-flex align-items-center">
                                    <object type="image/svg+xml" data="./formations/img/SVG/IconDiscoverBlanc.svg"
                                        title="icon"></object>
                                </span>
                                Refugies
                            </p>
                        </div>
                        <!-- menu -->
                        <div class="d-none d-md-inline-block col-md-2 col-sm-12 p-0 text-center">
                            <div class="left-bloc my-4 d-flex align-items-center  align-items-sm-start ">
                                <div class="vertical-bar">
                                </div>
                                <div class="menu flex-column menu-public">
                                    <p
                                        class="active align-items-center d-flex my-4 p-1 pe-md-3 rounded-pill rounded-start shadow-sm">
                                        <span class="d-flex align-items-center">
                                            <object type="image/svg+xml" data="./formations/img/SVG/IconFemmeBlanc.svg"
                                                title="icon"></object>
                                        </span>
                                        Femme
                                    </p>
                                    <p
                                        class="align-items-center d-flex my-4 p-1 pe-md-3 rounded-pill rounded-start shadow-sm">
                                        <span class="d-flex align-items-center">
                                            <object type="image/svg+xml" data="./formations/img/SVG/IconKidsblanc.svg"
                                                title="icon"></object>
                                        </span>
                                        Kids
                                    </p>
                                    <p
                                        class="align-items-center d-flex my-4 p-1 pe-md-3 rounded-pill rounded-start shadow-sm">
                                        <span class="d-flex align-items-center">
                                            <object type="image/svg+xml" data="./formations/img/SVG/IconPshblanc.svg"
                                                title="icon"></object>
                                        </span>
                                        PSH
                                    </p>
                                    <p
                                        class="align-items-center d-flex my-4 p-1 pe-md-3 rounded-pill rounded-start shadow-sm">
                                        <span class="d-flex align-items-center">
                                            <object type="image/svg+xml"
                                                data="./formations/img/SVG/IconDiscoverBlanc.svg" title="icon"></object>
                                        </span>
                                        Refugies
                                    </p>
                                </div>

                            </div>
                        </div>
                        <!-- card formation --> 
                        <div class="col-md  col">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3">
                                @foreach ($formations as $formation)
                                    @if ($formation->categorie=='public')

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
                                                    <a href="{{ route('formations.show',$formation) }}" class=" d-inline-block my-2  sp-text-sm  px-3 py-1 sp-rounded-link  sp-btn-danger ">
                                                        En savoir plus
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    @endif
                
                                @endforeach
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End public Section  -->

    <!-- parcours Section  -->
    <section class="row mb-3 justify-content-center row-secondary parcours-section">
            <div class="col-12 px-0">
                <div class="col-10 offset-1">
                    <!-- Parcours title -->
                    <h2 class=" fw-bold text-uppercase sp-red sp-line-under mb-2">Par Parcours </h2>
                    <p class="my-5 text-justify">
                        Physical space is often conceived in three linear dimensions, although modern physicists usually
                        consider it, with time, to be part of a boundless four-dimensional continuum known as spacetime.
                        The concept of space is considered to be of fundamental importance to an understanding of the
                        physical Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, nostrum optio id iusto
                        doloribus suscipit similique incidunt minima molestiae alias tempora beatae. Eaque, ducimus
                        maiores?
                        Corporis nostrum fugit alias eum exercitationem tempore ab sapiente temporibus modi quae tempora
                        laudantium deserunt asperiores aliquid ratione dolorum placeat omnis hic enim aperiam ducimus,
                        labore aliquam. Vitae, adipisci ea accusamus esse molestias quae tenetur asperiores aspernatur
                        laborum aperiam molestiae vero quod praesentium fuga dolore deserunt facere libero. Sunt earum
                        debitis
                        corporis nihil magni, maiores quasi natus! Deleniti cum perferendis placeat vel corporis dolor
                        quod
                        reiciendis ad ullam? Minus architecto officia animi quod quo sit.
                    </p>
                    <div class="row align-items-center p-relative">
                        <!-- menu secondaire -->
                        <div class="menu secondary-menu position-fixed d-md-none secondary-menu-parcours">
                            <p
                                class="active align-items-center d-flex p-1 pe-md-3 rounded-pill rounded-start shadow-sm">
                                <span class="d-flex align-items-center">
                                    <object type="image/svg+xml" data="./formations/img/SVG/IconDiscoverBlanc.svg"
                                        title="icon"></object>
                                </span>
                                Decouverte
                            </p>
                            <p
                                class="align-items-center d-flex p-1 pe-md-3 rounded-pill rounded-start shadow-sm">
                                <span class="d-flex align-items-center">
                                    <object type="image/svg+xml" data="./formations/img/SVG/father-svgrepo-com.svg"
                                        title="icon"></object>
                                </span>
                                Initiation
                            </p>
                            <p
                                class="align-items-center d-flex p-1 pe-md-3 rounded-pill rounded-start shadow-sm">
                                <span class="d-flex align-items-center">
                                    <object type="image/svg+xml" data="./formations/img/SVG/IconOrienteMetierBlanc.svg"
                                        title="icon"></object>
                                </span>
                                Metier
                            </p>
                        </div>
                        <!-- menu -->
                        <div class="d-none d-md-inline-block col-md-2 col-sm-12 p-0 text-center">
                            <div class="left-bloc my-4 d-flex align-items-center  align-items-sm-start  ">
                                <div class="vertical-bar">
                                </div>
                                <div class="menu flex-column menu-parcours">
                                    <p
                                        class="active align-items-center d-flex my-4 p-1 pe-md-3 rounded-pill rounded-start shadow-sm">
                                        <span class="d-flex align-items-center">
                                            <object type="image/svg+xml"
                                                data="./formations/img/SVG/IconDiscoverBlanc.svg" title="icon"></object>
                                        </span>
                                        Decouverte
                                    </p>
                                    <p
                                        class="align-items-center d-flex my-4 p-1 pe-md-3 rounded-pill rounded-start shadow-sm">
                                        <span class="d-flex align-items-center">
                                            <object type="image/svg+xml"
                                                data="./formations/img/SVG/father-svgrepo-com.svg"
                                                title="icon"></object>
                                        </span>
                                        Initiation
                                    </p>
                                    <p
                                        class="align-items-center d-flex my-4 p-1 pe-md-3 rounded-pill rounded-start shadow-sm">
                                        <span class="d-flex align-items-center">
                                            <object type="image/svg+xml"
                                                data="./formations/img/SVG/IconOrienteMetierBlanc.svg"
                                                title="icon"></object>
                                        </span>
                                        Metier
                                    </p>
                                </div>

                            </div>
                        </div>
                        <!-- card formation -->
                        <div class="col-md  ">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3">
                              
                            @foreach ($formations as $formation)
                                    @if ($formation->categorie=='parcours')

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
                                        
                                    @endif
                
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End parcours Section  -->

    <!--Partenariat Section-->
    <section class=" partenariat row  justify-content-center">
            <!-- Parcours title -->
            <div class="col-12 px-0 me-0">
                <div class="col-10 offset-1">
                    <h2 class=" fw-bold text-uppercase sp-red sp-line-under mb-2">En Partenariat </h2>
                    <p class="my-5 text-justify">
                        Physical space is often conceived in three linear dimensions, although modern physicists usually
                        consider it, with time, to be part of a boundless four-dimensional continuum known as spacetime.
                        The concept of space is considered to be of fundamental importance to an understanding of the
                        physical Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, nostrum optio id iusto
                        doloribus suscipit similique incidunt minima molestiae alias tempora beatae. Eaque, ducimus
                        maiores?
                        Corporis nostrum fugit alias eum exercitationem tempore ab sapiente temporibus modi quae tempora
                        laudantium deserunt asperiores aliquid ratione dolorum placeat omnis hic enim aperiam ducimus,
                        labore aliquam. Vitae, adipisci ea accusam..
                    </p>
                    <div class="row me row-cols-1 row-cols-sm-2 row-cols-md-3 ">
                        <div class="my-3  justify-content-center ">

                        @foreach ($formations as $formation)
                            @if ($formation->categorie=='partenariat')

                                <div class="card shadow-sm h-100 text-center sp-rounded-top-15 sp-rounded-bottom-15">
                                    <div class="card-header sp-bg-red  sp-rounded-top-15">
                                        <p class=" text-uppercase fw-bold text-white sp-text-sm">
                                          {{$formation->titre}}
                                        </p>
                                    </div>
                                    <div class="card-body sp-rounded-bottom-15">
                                        <img class="logo-partenaire my-3 img-fluid"
                                         src= "{{Storage::url($formation->image)}}" width="150" alt="logo microsoft">
                                        <p class="card-text">
                                            {{$formation->description}}
                                        </p>
                                        <a href="{{ route('formations.show',$formation) }}"
                                            class=" d-inline-block my-2  sp-text-sm  px-3 py-1 sp-rounded-link  sp-btn-danger ">Decouvrir
                                            la formation</a>
                                    </div>
                                </div>
                                
                            @endif
        
                        @endforeach
                     </div>  
                    </div>
                </div>
            </div>
        </section>
        <!--  End Partenariat Section-->

@endsection