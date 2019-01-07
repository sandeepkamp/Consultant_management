<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<html>
<body>
<h2 style="padding: 2px;">Agency Lists</h2>
<div class="row">
    
        <div class="col-lg-12 margin-tb"> 
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('agency.create') }}"> Create New</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif    
    <table class="table table-bordered">
        <tr>
            <th>Agency Name</th>
            <th>Phone number</th>
            <th>Email</th>
            <th width="210px">Action</th>
        </tr>
        @foreach($agencies as $agency)
        <tr>
           <td>{{$agency->agencyname}}</td>
           <td>{{$agency->agencyphone_number}}</td>
           <td>{{$agency->agencyemail}}</td>
           <td>
                <form action="{{ route('agency.destroy',$agency->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('agency.show',$agency->id) }}">Show</a>

 
    
                    <a class="btn btn-primary" href="{{ route('agency.edit',$agency->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    
      
    </body>
</html>