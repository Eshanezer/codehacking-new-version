@extends('layouts.app')
@section('body-content')
   <div class="row bg-light">
       <div class="col-sm-4"></div>
       <div class="col-sm-4 justify-content-center">
           <h4>Register new categories</h4>
           <br>
           {!! Form::open(['route' => 'categories.store', 'method' => 'post','files'=>true]) !!}

           <div class="form-group">
               {!! Form::label('name', 'Category Name', ['class' => 'control-label']) !!}
               {!! Form::text('title', null, ['class' => 'form-control']) !!}
           </div>
           <div class="form-group">
               {!! Form::file('photo_id',null, ['class' => 'form-control']) !!}
           </div>
           <div class="form-group">
               {!! Form::submit('Create Category', ['class' => 'btn btn-primary']) !!}
           </div>
           {!! Form::close() !!}
       </div>
       <div class="col-sm-4"></div>
   </div>
@endsection
