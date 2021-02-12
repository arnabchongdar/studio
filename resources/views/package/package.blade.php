@extends('layout.app');

@section('content')

    <h3>Names</h3>

    <table border="1px">  
        <thead>  
        <tr>  
        <td>  
        ID </td>  
        <td>  
        Title </td>  
        <td>  
        Body </td>
        <td>  
            Body </td>    
        </tr>  
        </thead>  
        <tbody> 
    @if(count($posts) >0)

     @foreach($posts as $crud)  
        <tr border="none">  
            <td><img src="/storage/cover_images/{{$crud->cover_image}}" width=300px height=300px></td>
            <td>{{$crud->id}}</td>  
            <td>{{$crud->title}}</td>  
            <td>{{$crud->body}}</td>
            <td>{{$crud->price}}</td>

            <td> 
                <form action="{{ route('cart.index', $crud->id)}}" method="POST">  
                     @csrf  
                       
                     <button class="btn btn-danger" type="submit">Add to Cart</button>  
                   </form>  
             </td>

        @if(auth()->user()->user_type == 1) 
              
        <td> 
           <form action="{{ route('packages.destroy', $crud->id)}}" method="POST">  
                @csrf  
                @method('DELETE')  
                <button class="btn btn-danger" type="submit">Delete</button>  
              </form>  
        </td>  
        <td >  
         <form action="{{ route('packages.edit', $crud->id)}}" method="GET">  
                @csrf  
                 
                <button class="btn btn-danger" type="submit">Edit</button>  
              </form> 
        </td>  

       </tr>  
       
       @endif
    @endforeach  
    </tbody>  
    </table>
   
    
    
      
    @else
        <h3>No Post exists</h3>
    @endif
    @if(Auth::user()->user_type==1)
        <div>
        <a href="create" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Blog');" rel="noopener">Create New Post</a>
        </div>
    @endif
    
@endsection
