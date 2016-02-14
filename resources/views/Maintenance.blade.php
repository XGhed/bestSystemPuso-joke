@extends('parent')


@section('title')
Maintenance
@endsection



@section('Maintenance-title')

<h1><i class="medium material-icons">settings</i>   Maintenance</h1>

@endsection



          


@section('Maintenance-body')


<!-- Page Layout here -->
    <div class="row">


      <div class="col s3 grey hoverable" style="border-radius: 50px; margin-left: 35px;">
        <div class="row" style="margin: 10% 0 0 15%;">
          <a href = "">
            <div class="col s10">
                <div class="row valign-wrapper bembem z-depth-5" style= "border-radius: 30px;">
                   <img src="icons/maintenance_Supplies.png" style = "width:85px; height: 70px;"alt="" class="circle responsive-img">
                  <span class="black-text">
                <h5>Suppliers</h5>
              </span>
        </div>
    </div>
</div>
</a>




<div class="row" style="margin: 10% 0 0 15%;">
<a href = "">
    <div class="col s10">
        <div class="row valign-wrapper red lighten-2 z-depth-5" style= "border-radius: 30px;">
              <img src="icons/maintenance_Accounts.png" style = "width:85px; height: 70px;"alt="" class="circle responsive-img">
                  <span class="black-text">
                <h5>Users</h5>
              </span>
        </div>
    </div>
</div>
</a>


<div class="row" style="margin: 10% 0 0 15%;">
<a href = "">
     <div class="col s10">
        <div class="row valign-wrapper yellow lighten-2 z-depth-5" style= "border-radius: 30px;">
              <img src="icons/maintenance_Item.png" style = "width:85px; height: 70px;"alt="" class="circle responsive-img">
                  <span class="black-text">
                <h5>Item</h5>
              </span>
        </div>
    </div>
</div>
</a>


<div class="row" style="margin: 10% 0 0 15%;">
<a href = "">
     <div class="col s10">
        <div class="row valign-wrapper green lighten-2 z-depth-5" style= "border-radius: 30px;">
              <img src="icons/maintenance_Delivery.png" style = "width:85px; height: 70px;"alt="" class="circle responsive-img">
                  <span class="black-text">
                <h5>Delivery</h5>
              </span>
        </div>
    </div>
</div>
</a>

<div class="row" style="margin: 10% 0 0 15%;">
<a href = "">
     <div class="col s10">
        <div class="row valign-wrapper orange lighten-2 z-depth-5" style= "border-radius: 30px;">
              <img src="icons/maintenance_Payment.png" style = "width:85px; height: 70px;"alt="" class="circle responsive-img">
                  <span class="black-text">
                <h5>Payment</h5>
              </span>
        </div>
    </div>
</div>
</a>

</div>




<div class="col s8 pull-s1">
        
<div class = "container" style = "float: top;">
@yield('Supplies')
</div>



      </div>

    </div>







@endsection