@extends('layout.app');

@section('content')

    <h3>Your Assigned Studio Details</h3>

    <table border="1px">  
        <thead>  
        <tr>  
        <td>  
        Name </td>  
        <td>  
        Email </td>  
        <td> 
            phone</td>    
        </tr>  
        </thead>  
        <tbody> 
    @if(count($or) >0)

 @foreach($or as $crud)
 @foreach($stu as $stud)
    @if($crud->studio_id==$stud->id&& auth()->user()->email==$crud->email)  
        <tr border="none">  
            <td>{{$stud->name}}</td>  
            <td>{{$stud->email}}</td>
            <td>{{$stud->phone}}</td>  
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
@endforeach 
    </tbody>  
    </table>
   
    
    
      
    @else
        <h3><a href="studioCreate" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Blog');" rel="noopener">Update your profile details</a></h3>
    @endif
   
    
@endsection
