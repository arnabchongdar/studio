@extends('pages.layout');

@section('content')

    <h3>Update Posts</h3>
    <form method="Post" action="{{route('packageController.update',$posts->id)}}">  
 @method('PATCH')     
 @csrf

        <div class="form-group">
            {{Form::label('title','Title')}}
            <input type="text" class="form-control" name="title" value={{$posts->title}}>
        </div>

        <div class="form-group">
            {{Form::label('body','Body')}}
            <input type="text" class="form-control" name="body" value={{$posts->body}}>
        </div>
        
            {{Form::submit('Update',['class'=>'btn btn-primary'])}}
           


    </form>
    
@endsection