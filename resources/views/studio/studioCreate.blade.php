@extends('layout.app');

@section('content')

    <h3>Update Profile</h3>
    {!! Form::open(['action' => 'HomeController@store','method'=>'POST','enctype' => 'multipart/form-data']) !!}

            <div class="form-group">
                {{Form::label('name','Name')}}
                {{Form::text('name','',['class'=>'form=control','placeholder'=>'Name'])}}
            </div>
    
            <div class="form-group">
                {{Form::label('address','Address')}}
                {{Form::textarea('address','',['class'=>'form=control','placeholder'=>'Address'])}}
            </div>
            <div class="form-group">
                {{Form::label('email','Email')}}
                {{Form::text('email','',['class'=>'form=control','placeholder'=>'Email'])}}
            </div>
            <div class="form-group">
                {{form::file('studio_image')}}
            </div>
            <div class="form-group">
                {{Form::label('phone','Phone Number')}}
                {{Form::number('phone','',['class'=>'form=control','placeholder'=>'Phone Number'])}}
            </div>
            <div class="form-group">
                {{Form::label('location','Location')}}
                {{Form::text('location','',['class'=>'form=control','placeholder'=>'Location'])}}
            </div>
    
    
    
                {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
               
    
    
        {!! Form::close() !!}
    </form>
    
@endsection