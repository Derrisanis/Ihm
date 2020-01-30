@extends('layouts.app')
@section('content')
  @if ($post==null)
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Resultat</div>

                <div class="card-body">
                   aucun resultat trouvé!
                </div>
            </div>
        </div>
    </div>
</div>
  @else
      
 
      <div class="album py-5 bg-light">
      
         <div class="container">
            <div class="row">
              
             @foreach ($post as $pos) 
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                <img src="{{URL($pos->path)}}" width="100%" height="225" alt="thumbnail">
                  <div class="card-body">
                  @php
                    $file=file_get_contents(URl($pos->meta));
                    $data=json_decode($file,true);
                  @endphp
               <p class="card-text">      
                  @foreach ($data["meta"]["clinical"] as $d)   
                   {{$d}}
                  @endforeach</p> 
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                      </div>
                      <small class="text-muted">{{$pos->created_at}}</small>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach 
            </div>
        </div> 
        
      
    </div>
 @endif
@endsection
