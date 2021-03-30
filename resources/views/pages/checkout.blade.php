<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout Page</title>
</head>
<body>
    
    <div class="row">
        <div class="col-75">
          <div class="container">

           
            <form action="createRequest" method="POST">
                {{csrf_field()}}
      
              <div class="row">
                <div class="col-50">
                  <h3>Billing Address</h3>
                  <label for="name"><i class="fa fa-user"></i> Full Name</label>
                  <input type="text" id="name" name="name" value={{auth()->user()->name}}>
                  <label for="email"><i class="fa fa-envelope"></i> Email</label>
                  <input type="text" id="email" name="email" value={{auth()->user()->email}}>
                  <label for="adr"><i class="fa fa-address-card-o"></i> Phone</label>
                  <input type="number" id="phone" name="phone" >
                  <label for="total"><i class="fa fa-institution"></i> Total</label>
                  <input type="integer" id="total" name='total' value={{$t}} readonly>
      
                 
              <input type="submit" value="Continue to checkout" class="btn">
            </form>
            
         






</body>
</html>


