@extends('layout.app');

@section('content')

    <h3>Names</h3>

    <table border="1px">  
        <thead>  
        <tr>  
        <td>  
        Image </td>  
        <td>  
        Name </td>  
        <td>  
        Address</td>
        <td>  
            Phone Number </td>
        <td>  
            Location </td>    
        </tr>  
        </thead>
        <tbody> 
    @if(count($posts) >0)

     @foreach($posts as $crud)
     @if(auth()->user()->email==$crud->email||auth()->user()->user_type == 1)  
        <tr border="none">  
            <td><img src="/storage/studio_images/{{$crud->studio_image}}" width=300px height=300px></td>
            <td>{{$crud->name}}</td>  
            <td>{{$crud->address}}</td>  
            <td>{{$crud->phone}}</td>
            <td>{{$crud->location}}</td>

            <td >  
                <form action="{{ route('studio.edit', $crud->id)}}" method="GET">  
                       @csrf  
                        
                       <button class="btn btn-danger" type="submit">Edit</button>  
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
         

       </tr>  
       
       @endif
       @endif
       @if(auth()->user()->email !=$crud->email||count($posts)==0)
       <div>
       <a href="studioCreate" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Blog');" rel="noopener">Update your profile details</a>
       </div>
   @endif
    @endforeach  
    </tbody>  
    </table>
   
    
    
      
    @else
        <h3><a href="studioCreate" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Blog');" rel="noopener">Update your profile details</a></h3>
    @endif
   
    
@endsection
