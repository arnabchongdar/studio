@extends('layout.app');

@section('content')

    <h3>Names</h3>

    <table border="1px">  
        <thead>  
        <tr>  
        <td>  
        Id </td>  
        <td>  
        Name </td>  
        <td>  
        Email</td>
        <td>  
            Edit </td>
          
        </tr>  
        </thead>  
        <tbody> 
    @if(count($posts) >0)

     @foreach($posts as $crud)
     @if(auth()->user()->email==$crud->email)  
        <tr border="none">  
            <td>{{$crud->id}}</td>  
            <td>{{$crud->name}}</td>  
            <td>{{$crud->email}}</td>
            

            <td >  
                <form action="{{ url('customeredit', $crud->id)}}" method="GET">  
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
      
    @endforeach  
    </tbody>  
    </table>
   
    
    
      
    @else
        <h3><a href="studioCreate" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Blog');" rel="noopener">Update your profile details</a></h3>
    @endif
   
    
@endsection
