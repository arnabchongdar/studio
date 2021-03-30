@extends('layout.app');

@section('content')

    <h3>Update Profile</h3>
    <form method="Post" action="{{route('studio.update',$posts->id)}}">  
 @method('PATCH')     
 @csrf

 <div class="form-group">
    {{Form::label('name','Name')}}
    {{Form::text('name','',['class'=>'form=control','placeholder'=>'Name'])}}
</div>

<div class="form-group">
    {{Form::label('address','Address')}}
    {{Form::textarea('address','',['class'=>'form=control','placeholder'=>'Address'])}}
</div>
<div class="form-group">
    {{form::file('cover_image')}}
</div>
<div class="form-group">
    {{Form::label('phone','Phone')}}
    {{Form::number('phone','',['class'=>'form=control','placeholder'=>'phone'])}}
</div>
<div class="form-group">
    {{Form::label('location','Location')}}
    {{Form::text('location','',['class'=>'form=control','placeholder'=>'location'])}}
</div>
        
            {{Form::submit('Update',['class'=>'btn btn-primary'])}}
           

            {!! Form::close() !!}
    </form>
    
@endsection