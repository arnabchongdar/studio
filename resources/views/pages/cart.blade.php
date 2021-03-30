<head>
  <script language=”Javascript”>

    function submitTowForms() {
    document.forms[0].submit();
    document.forms[1].submit();
    alert(“Both Forms Submitted”);
    return false;
    }
    
    </script>
</head>

@extends('layout.app');

@section('content')
<table border="1px">  
    <thead>  
    <tr>  
    <td>  
    Package Id</td>  
    <td>  
    Image</td>  
    <td>  
    Quantity</td>
    <td>  
        Price </td> 
     <td>  
        Sub Total </td>
      <td>  
          Delete Item </td>    
    </tr>  
    </thead>  
    <tbody>
        @if(count($carts) >0)
        @php
        $total=0;
        @endphp
        @foreach($carts as $crud)  
        @if($crud->customer_mail==auth()->user()->email)
        @php
            $subtotal=($crud->price)*($crud->qty);
            $package[]=($crud->package_id);
            $package_qty[]=($crud->qty);
           
        @endphp
        
           <tr border="none">  
               <td>{{$crud->package_id}}</td>
               <td><img src="/storage/cover_images/{{$crud->cover_image}}" width=300px height=300px></td>
               <td><div class="quantity">
                <form action="{{ url('quantityUpdate'. $crud->package_id)}}" method="POST">  
                  @csrf  
                    
                    <input type="text" name="qty" value="{{$crud->qty}}">
                    
                  <button class="btn btn-danger" type="submit">Update</button>  
                </form>
                </div></td> 
               <td>{{$crud->price}}</td>
               <td>{{$subtotal}}</td>  
           <td> 
              <form action="{{ route('cart.destroy', $crud->package_id)}}" method="POST">  
                   @csrf  
                   @method('DELETE')  
                   <button class="btn btn-danger" type="submit">Delete</button>  
                 </form>  
           </td>  
            
   
          </tr>  
          
          @php
              $total=$total+$subtotal;
          @endphp
          @else
          
          @php
          $subtotal=0;
          $package[]=0;
          $package_qty[]=0;
          @endphp
          @endif
          @endforeach
         @php
              $package_sr=base64_encode(serialize($package));
            $package_qty_sr=base64_encode(serialize($package_qty));
         @endphp
          
          <tr>
            <td>Total Cost</td>
            <td>{{$total}}</td>
            <td><form action="{{ url('checkout')}}" method="get" name="form1">  
              <input type="hidden" name="total" value="{{$total}}">
             
              <button class="btn btn-danger" value="Checkout" type="submit">Checkout</button>
               
            </form> </td>
            <td>{!! Form::open(['action' => 'orderController@store','method'=>'POST','name'=>'form2']) !!}  
              <input type="hidden" name="total" value="{{$total}}">
              <input type="hidden" name="package_id" value="{{$package_sr}}">
              <input type="hidden" name="qty" value="{{$package_qty_sr}}">
             
             
              {{Form::submit('Submit',['class'=>'btn btn-primary'])}}


    {!! Form::close() !!}
    </td>
            


       @else
       <h3>No Post exists</h3>
       @endif

    </tbody>

   
</table>

  
@endsection
