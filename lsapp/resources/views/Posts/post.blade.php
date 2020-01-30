@extends('layouts.app')
@section('content')
   </header> 
      <div class="album py-5 bg-light">
        
         <div class="container">
            <div class="row">
             @foreach ($posts as $post) 
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                <img src="{{URL($post->path)}}" width="100%" height="225" alt="thumbnail">
                  <div class="card-body">
                  @php
                    $file=file_get_contents(URl($post->meta));
                    $data=json_decode($file,true);
                  @endphp
                  <p class="card-text">    
                <table class="table table-light">
                  <tbody>
                    <tr>
                      <td>benign ou malignant:</td><td>{{$data['meta']['clinical']['benign_malignant']}}</td>
                    </tr>
                    <tr>
                      <td>age aproximative:</td><td> {{$data['meta']['clinical']['age_approx']}}</td>
                    </tr>
                    <tr>
                      <td>sexe :</td><td> {{$data['meta']['clinical']['sex']}}</td>
                    </tr>
                    <tr>
                      <td>diagnostique :</td><td>{{$data['meta']['clinical']['diagnosis']}}</td> 
                    </tr>
                    <tr>
                      <td> position anatomique :</td> <td> {{$data['meta']['clinical']['anatom_site_general']}}</td>
                    </tr>
                  
                  </tbody>
                </table>
                   
                  </p> 
            
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                      </div>
                      <small class="text-muted">{{$post->created_at}}</small>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach 
              
            </div>
        </div> 
        {{$posts->links()}}
    </div>

</body>
</html>
@endsection  