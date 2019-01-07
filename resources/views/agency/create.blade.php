<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


 <html>
<body>
      <div class ="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-right: 320px;">
         <h1>Add Agency</h1>
         <form action="{{route('agency.store')}}" method="post">
              @if ($errors->any())
                 <div class="alert alert-danger">
                     <ul>
                     @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                     @endforeach
                     </ul>
                  </div>
              @endif
              {{csrf_field()}}
              <div class="form-group">
                 <label for="agency_name">Agency Name</label>
                 <input type="agency_name" class="form-control" id="agency_name" placeholder="Enter Name" name="agency_name">
              </div>
              <div class="form-group">
                 <label for="agency_email">Email address</label>
                 <input type="agency_email" class="form-control" id="agency_email" placeholder="Enter email" name="agency_email">
              </div>
              <div class="form-group">
                  <label for="agency_phone_number">Phone Number</label>
                  <input type="agency_phone_number" class="form-control" id="agency_phone_number" placeholder="Enter Number"  name="agency_phone_number">
              </div>
             <div class="form-group">
                <label for="street_name">Street Name</label>
                <input type="text" class="form-control" id="street_name" placeholder="Street Name" name="street_name">
             </div>

              <div class="col-sm-6" style="padding: 0px;">
                 <div class="form-group">
                     <label for="city">City</label>
                     <input type="text" class="form-control" id="city" placeholder="City" name="city" style="width: 230px;" >
                 </div>
              </div>
              <div class="col-sm-6">
                  <div class="form-group">
                     <label for="state">State</label>
                     <input type="text" class="form-control" id="state" placeholder="State" name="state" style="width: 235px;">
                  </div>
               </div>

              <div class="col-sm-6" style="padding: 0px;">
                 <div class="form-group">
                     <label for="pincode">Pincode</label>
                     <input type="text" class="form-control" id="pincode" placeholder="Pincode" name="pincode" style="width: 230px;" >
                 </div>
              </div>
              
               <div class="col-sm-6">
                  <div class="form-group">
                      <label for="country">country</label>
                      <input type="text" class="form-control" id="country" placeholder="Country" name="country" style="width: 235px;">
                  </div>
               </div>
              <div>
                 <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </form>
     </div>
    <br>
    <br>
    </body>
</html> 



