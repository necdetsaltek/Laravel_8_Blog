@extends('layouts.app')

@section('content')
  
    <div class="container">
        <div class="col-md-12 py-5 display-4">Services Page</div>
    </div>
    
    <div class="container">
       @php //print_r($item_href);
       @endphp
              
       @if (count($services)>0)
       <ul class="list-group">
            @foreach ($services as $service)
                          
            <li class="btn btn-danger btn-lg px-2 list-group-item">{{$service}}</li>
            @endforeach
          </ul>

          <ul class="list-group"> 
            @foreach ($item_href as $href)
            <li class="btn btn-warning btn-lg px-2 list-group-item">{{$href}}</li>
            @endforeach
          </ul>          
       @endif
    </div>    

@endsection