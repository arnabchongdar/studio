@extends('layout.app');

@section('content')

    <h3>Create Posts</h3>
    {!! Form::open(['action' => 'packageController@store','method'=>'POST','enctype' => 'multipart/form-data']) !!}

        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title','',['class'=>'form=control','placeholder'=>'Title'])}}
        </div>

        <div class="form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body','',['class'=>'form=control','placeholder'=>'BodyText'])}}
        </div>
        <div class="form-group">
            {{form::file('cover_image')}}
        </div>
        <div class="form-group">
            {{Form::label('price','Price')}}
            {{Form::number('price','',['class'=>'form=control','placeholder'=>'price'])}}
        </div>



            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
           


    {!! Form::close() !!}
    
@endsection
