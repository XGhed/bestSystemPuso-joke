@extends('adminParent')


@section('title')
Manage Accounts
@endsection


@section('accounts')
<script>
	
	$(document).ready(function() {
    $('select').material_select();
  });

  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
      
</script>
<center><h1><i class="medium material-icons">account_circle</i>Accounts</h1></center>
<br>
<br>
<br>


<div class="col s4">
<form action="#">
    <p>
      <input name="group1" type="radio" id="test1" />
      <label for="test1">Edit Account</label>
    </p>
    <p>
      <input name="group1" type="radio" id="test2" />
      <label for="test2">Add Account</label>
    </p>   
</form>
</div>

<div class="col s4 push-s2">
 <div class="input-field col s12">
    <select>
      <option value="" disabled selected>Choose account</option>
      <option value="1">Account1</option>
      <option value="2">Account2</option>
      <option value="3">Account3</option>
    </select>
    <label>Select Account</label>
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
  	<center><h3>Account Info</h3></center>
  </div>
<div class="divider"></div>
<br>
<br>


<div class="row">
    <form class="col s12">
    <div class="row">
        <div class="input-field col s6">
          <input placeholder="#00063" id="first_name" type="text" class="validate" disabled>  
          <label for="first_name">Bidder Number</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Full name" id="first_name" type="text" class="validate">
          <label for="Supplier_name">Full Name</label>
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
      <div class="row">
        <div class="input-field col s6">
            <select>
              <option value="" disabled selected>Choose account Type</option>
              <option value="1">AccountType1</option>
              <option value="2">AccountType2</option>
              <option value="3">AccountType3</option>
            </select>
            <label>Select Account</label>
          </div>
      </div>
      <div class="row">
        <div class="col s6">
        <label for="Birthdate">Birthdate</label>
          <input type="date" class="datepicker">
        </div>
      </div>
      <p></p>
      <div>
      <p>
      <input type="checkbox" id="test8" />
      <label for="test8">Provided necessary requirements</label>
    </p>

     <p>
      <input type="checkbox" id="test8" />
      <label for="test8">Agreed to terms & requirements</label>
    </p>
    </div>
    </form>

    <button class="btn blue waves-effect waves-light right" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
  </div>

<!-- -->


<div class="section">
  	<center><h3>List of Accounts</h3></center>
  </div>
<div class="divider"></div>
<table>
        <thead>
          <tr>
              <th data-field="id">Account ID</th>
              <th data-field="id">Customer's name</th>
              <th data-field="name">Customer's address</th>
              <th data-field="name">Contact number</th>
              <th data-field="name">Email address</th>
              <th data-field="id">Account type</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>001</td>          
            <td>Alvin</td>
            <td>Jan sa tabi</td>
            <td>+639 26 735 4975</td>
            <td>Alvin@yahoo.com</td>
            <td>End-user</td>
          </tr>
          <tr>
            <td>002</td>
            <td>Alan</td>
            <td>Jan sa kanto</td>
            <td>505 432 5431</td>
            <td>gwapo@yahoo.com</td>
            <td>Retailer</td>
          </tr>
          <tr>
            <td>069</td>
            <td>Jonathan</td>
            <td>CR ng 5th south</td>
            <td>0929 233 4681</td>
            <td>panget@yahoo.com</td>
            <td>Retailer</td>
          </tr>
        </tbody>
      </table>

@endsection