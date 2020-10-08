@extends('layouts.app')
@section('body-content')

    @include('shared.tinyeditor')
   <div class="row">
       <div class="col-md-4"></div>
       <div class="col-md-4">
           <h2>Create new post</h2>
           <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nesciunt error illum a explicabo, ipsam nostrum.</p>

           {!! Form::open(['route' => 'post.store', 'method' => 'post','files'=>true]) !!}

           <div class="form-group">
               {!! Form::label('title', 'Title', ['class' => 'control-label']) !!}
               {!! Form::text('title', null, ['class' => 'form-control']) !!}
           </div>
           <div class="form-group">
               {!! Form::label('category_id', 'Category', ['class' => 'control-label']) !!}
               {!! Form::select('category_id',$category ,null, ['class' => 'form-control text-black']) !!}
           </div>
           <div class="form-group">
               {!! Form::file('photo_id',null, ['class' => 'form-control']) !!}
           </div>
           <div class="form-group">
               {!! Form::label('body', 'Description', ['class' => 'control-label']) !!}
               {!! Form::textarea('description', null, ['class' => 'form-control','id'=>'mytextarea']) !!}
           </div>
           <div class="form-group">
               {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
           </div>
           {!! Form::close() !!}
       </div>
       <div class="col-md-4"></div>
   </div>
@endsection
