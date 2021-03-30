@extends('layout.app');

@section('content')
<table border="1px">  
    <thead>  
    <tr>  
    <td>  
    Name</td>  
    <td>  
    Email</td>  
    <td>  
    Total Amount</td>
    <td>  
        Payment Status </td> 
     <td>  
        Package id </td>
      <td>  
          Quantity</td>
       <td>  
           Studio Id</td>    
    </tr>  
    </thead>  
    <tbody>
        @if(count($order_items) >0)
        @php
        $total=0;
        @endphp
        @foreach($order_items as $crud)  
        
       
           <tr border="none">  
               <td>{{$crud->name}}</td>
               <td>{{$crud->email}}</td>
               <td>{{$crud->total_amt}}</td>  
               <td><div class="quantity">
                <form action="{{ url('paymentUpdate'. $crud->id)}}" method="POST">  
                  @csrf  

                  <select name="payment_status">
                    <option value={{$crud->payment_status}}>{{$crud->payment_status}}</option>
                   

                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                    
                   
                 </select>
                 
                    
                   
                    
                  <button class="btn btn-danger" type="submit">Update</button>  
                </form>
                </div></td>
                @php
                    $x=unserialize(base64_decode($crud->package_id));
                    $y=unserialize(base64_decode($crud->qty));
                    
                @endphp

               <td>@php
                   print_r($x)
                   @endphp</td>
              <td>@php
                print_r($y)
                @endphp</td> 
                <td><div class="quantity">
                  <form action="{{ url('studioUpdate'. $crud->id)}}" method="POST">  
                    @csrf  
                      
                      
                    <label for="Studio_id">Choose a Studio:</label>



                    <select name="studio_id">
                      <option value={{$crud->studio_id}}>{{$crud->studio_id}}</option>
                      @if(count($studio) >0)
                      @foreach($studio as $assign)
                      @if($assign->user_type==3)

                      <option value={{$assign->id}}>{{$assign->id}}</option>
                      
                      @endif
                      @endforeach
                      @endif
                   </select>
                   
                   
                    
                      
                      
                    <button class="btn btn-danger" name="submit" type="submit">Update</button>  
                  </form>
                  </div></td> 
          </tr>  
          
         
       
          @endforeach
         
          
          
       @else
       <h3>No Post exists</h3>
       @endif

    </tbody>

   
</table>
<br><br>
<h3>Studio Profiles</h3>

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
      Edit</td>
    <td>
      Delete</td>   
    </tr>  
    </thead>  
    <tbody> 
@if(count($studio) >0)

 @foreach($studio as $crud)
 @if($crud->user_type==3)
    <tr border="none">
        <td>{{$crud->id}}</td>  
        <td>{{$crud->name}}</td>  
        <td>{{$crud->email}}</td>  
        

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
@endforeach  
@endif
</tbody>  
</table>

  
@endsection
