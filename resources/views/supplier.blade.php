@extends('adminParent')


@section('title')
Supplier
@endsection


@section('supplier')
<script>
	
	$(document).ready(function() {
    $('select').material_select();
  })
        ;
</script>
<center><h1><i class="medium material-icons"></i>Supplier</h1></center>
<br>
<br>
<br>


<div class="col s4">
<form action="#">
    <p>
      <input name="group1" type="radio" id="test1" />
      <label for="test1">Edit Supplier</label>
    </p>
    <p>
      <input name="group1" type="radio" id="test2" />
      <label for="test2">Add Supplier</label>
    </p>   
</form>
</div>

<div class="col s4 push-s2">
 <div class="input-field col s12">
    <select>
      <option value="" disabled selected>Choose Supplier</option>
      <option value="1">Supplier1</option>
      <option value="2">Supplier2</option>
      <option value="3">Supplier3</option>
    </select>
    <label>Select Supplier</label>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<!--  -->

<div class="section">
  	<center><h3>Supplier Info</h3></center>
  </div>
<div class="divider"></div>
<br>
<br>


<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Full name" id="first_name" type="text" class="validate">
          <label for="Supplier_name">Supplier Name</label>
       		</div>
        </div>
         <div class="row">
        <div class="input-field col s6">
          <input placeholder="City" id="first_name" type="text" class="validate">
          <label for="first_name">City</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="State/Province/Region" id="first_name" type="text" class="validate">
          <label for="first_name">State/Province/Region</label>
        </div>
      </div>
		<div class="row">
        <div class="input-field col s6">
          <input placeholder="Street" id="first_name" type="text" class="validate">
          <label for="first_name">Street</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Zipcode" id="first_name" type="text" class="validate">
          <label for="first_name">Zipcode</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Email Number" id="first_name" type="text" class="validate">
          <label for="first_name">Contact Number</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Email" id="first_name" type="text" class="validate">
          <label for="first_name">Email</label>
        </div>
      </div>
    </form>

    <button class="btn blue waves-effect waves-light right" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
  </div>

<!-- -->


<div class="section">
  	<center><h3>List of Suppliers</h3></center>
  </div>
<div class="divider"></div>
<table>
        <thead>
          <tr>
              <th data-field="id">Supplier name</th>
              <th data-field="name">Supplier's Address</th>
              <th data-field="name">Contact Number</th>
              <th data-field="name">Email Address</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Jan sa tabi</td>
            <td>+639 26 735 4975</td>
            <td>Alvin@yahoo.com</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jan sa kanto</td>
            <td>505 432 5431</td>
            <td>gwapo@yahoo.com</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>CR ng 5th south</td>
            <td>0929 233 4681</td>
            <td>panget@yahoo.com</td>
          </tr>
        </tbody>
      </table>

@endsection