@extends('layouts.app')
@section('content')
    <header class="masthead text-white text-center">
        <div class="container">
            <div class="row" >
                <div id="block1" class="col-md-6">
                    <h2>Compte Personnel</h2>
                    <p><h4>Acces reserve aux visiteurs</h4></p>
                    <a  href="http://lsapp.test/welcome" class="btn btn-primary btn-md" >Acces Direct</a>
                </div>
                <div id="block2" class="col-md-5">
                    <h2>Compte Professionel</h2>
                    <p><h4>Acces reserve aux corps medical</h4></p>
                    <a href="{{ route('register') }}" class="btn btn-primary btn-md" >Creer un compte</a>
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
            <p class="lead mb-0">meme un enfant pourait le faire!</p>
          </div>
        </div>
      </div>
    </div>
  </section>


    
    
    

@endsection    