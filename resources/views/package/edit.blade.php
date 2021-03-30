@extends('layout.app');

@section('content')

    <h3>Update Posts</h3>
    <form method="Post" action="{{route('packages.update',$posts->id)}}">  
 @method('PATCH')     
 @csrf

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
        
            {{Form::submit('Update',['class'=>'btn btn-primary'])}}
           


    </form>
    
@endsection