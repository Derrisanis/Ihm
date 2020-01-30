@extends('layouts.app')
@section('content')
<!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">la recherche n'a jamais été aussi simple!</h1>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          {!! Form::open(['action' => 'SearchController@search','method' => 'POST']) !!}
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                {{form::text('search','',['class'=>'form-control form-control-lg','placeholder'=>'Rechercher...'])}}
              </div>
              <div class="col-12 col-md-3">
                {{Form::submit('Recherche',['class'=>'btn btn-block btn-lg btn-primary'])}}
               
              </div>
            </div>
            {!! Form::close() !!}
        </div>
      </div>
    </div>
  </header>

  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-screen-desktop m-auto text-primary"></i>
            </div>
            <h3>Design responsive</h3>
            <p class="lead mb-0">adapter a tout les ecrans du plus grand au plus petit!</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-layers m-auto text-primary"></i>
            </div>
            <h3>Plus de {{$post}} images</h3>
            <p class="lead mb-0">une des plus complete base d'images de lesion cutanées!</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-check m-auto text-primary"></i>
            </div>
            <h3>Tres facile a utiliser</h3>
            <p class="lead mb-0">meme un enfant pourait l'utiliser!</p>
          </div>
        </div>
      </div>
    </div>
  </section>



 


@endsection
