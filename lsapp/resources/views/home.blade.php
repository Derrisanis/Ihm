@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif  
                     <h3> Tes images </h3>
                  
                    @if ($posts!=null)
                    <table class="table table-striped  table-responsive">
                      @foreach ($posts as $post)
                      @php
                      $file=file_get_contents(URl($post->meta));
                      $data=json_decode($file,true);
                    @endphp
                            <tr>
                                <th> <a href="{{URL($post->path)}}" class="nav-link">{{$data['name']}}</a> </th>
                               <th> {!! Form::open(['action' => ['PostsController@destroy',$post->id],'method' => 'DELETE',]) !!}
                                    {{Form::hidden('_methode','DELETE')}}   
                                    {{Form::submit('Suprimer',['class'=>'btn btn-danger'])}}
                                        {!! Form::close() !!} </th>
                              
                                
                                <th></th>
                            </tr>
                            @endforeach
                    </table>
                  
                 @endif  
                 <a href="/Post/create" class="btn btn-primary">Ajouter</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
