<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<html>
<body>

<div>
  <h1>{{$agency->name}}</h1>      
</div>
<br>

<div class="pull-right">
    <a class="btn btn-primary" href="{{ route('agency.index') }}"> Back</a>
</div>
<div class="row">
    <div class="col-sm-8">
            <h1>Agency details</h1><br>
            <table class="table table-border" >
                    <tr class="table-primary" >
                        <th scope="row">Name</th>
                        <td>{{$agency->agency_name}}</td>
                    </tr>
                    <tr class="table-primary">
                        <th scope="row">Address</th>
                        <td>
                            @if($agency->street_name)
                            {{$agency->street_name}},
                            @endif
                            @if($agency->city)
                            {{$agency->city}},
                            @endif
                            @if($agency->state)
                            {{$agency->state}},
                            @endif
                            @if($agency->pincode)
                            {{$agency->pincode}},
                            @endif
                            @if($agency->country)
                            {{$agency->country}}
                            @endif
                        </td>
                    </tr>
                    <tr class="table-primary">
                        <th scope="row">Phone number</th>
                        <td>{{$agency->agency_phone_number}}</td>
                    </tr>
                    <tr class="table-primary">
                        <th scope="row">Email</th>
                        <td>{{$agency->agency_email}}</td>
                    </tr>
            </table>
    </div>
   
</div>
</body>
</html>