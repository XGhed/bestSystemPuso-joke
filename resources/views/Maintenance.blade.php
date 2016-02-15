@extends('parent')


@section('title')
Maintenance
@endsection



@section('Maintenance-title')

<h1><i class="medium material-icons">settings</i>Maintenance</h1>

@endsection



          


@section('Maintenance-body')

@yield('try')
<!-- Page Layout here -->
<div class="row">

      <div class="col s3">
        <ul class="collection with-header" style="border-radius:50px;">
          <li class="collection-header"><h4>Maintenance</h4></li>
            <a href="#!" class="collection-item"><span class="black-text">Supplies</span></a>
            <a href="#!" class="collection-item"><span class="black-text">Users</span></a>
            <a href="#!" class="collection-item"><span class="black-text">Items</span></a>
            <a href="#!" class="collection-item"><span class="black-text">Delivery</span></a>
            <a href="#!" class="collection-item"><span class="black-text">Payment</span></a>
        </ul>    
      </div>


<div class="col s8 bembem" style="border-radius: 50px">      
    <div class = "container" >
       @yield('Supplies')
    </div>
</div>



</div>






@endsection