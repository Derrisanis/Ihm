@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Creation D'une image</div>
                 <div class="card-body">
                     {!! Form::open(['action' => 'PostsController@store','method' => 'POST','enctype' => 'multipart/form-data']) !!} 
                     <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>
                        {{Form::select('type', array('M' => 'Maligne', 'B' => 'Benigne'))}}                                  
                     </div>
                     <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Type Diagnostiqué') }}</label>
                        {{Form::select('typeD', array('M' => 'Nevus', 'B' => 'Melanoma'))}}                                  
                     </div>
                     <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nouveau type') }}</label>
                        
                        {{Form::text('New')}} 
                                                       
                     </div>
                     <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label> 
                     {{Form::file('image')}} 
                     <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('.Json') }}</label>
                     {{Form::file('txt')}}
                     
                     </div>
                        </div>
                        {{Form::submit('Ajouter',['class'=>'btn btn-primary'])}}
                        {!! Form::close() !!}
                   </div>          
               </div>
            </div>
       </div>   
   </div>  
</div>
@endsection  