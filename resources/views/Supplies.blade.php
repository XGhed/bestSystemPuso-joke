
@extends('Maintenance')

@section('Supplies')

<center><h4><img src="icons/maintenance_Supplies.png" class = "circle" style = "position: relative; top: 5px; height:65px; width: 75px;">Suppliers</h4></center>


<div class = "container">

<div class="row">
<form action="#" class = "col s6">
    <p>
      <input name="group1" type="radio" id="test1" />
      <label for="test1" class="black-text">Choose Supplier</label>
    </p>
    <p>
      <input name="group1" type="radio" id="test2" />
      <label for="test2" class="black-text">Add new Supplier</label>
    </p>
</form>

<form class="col s12" style="position:relative;top: 1em;left:18em">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Supplier's Name" id="first_name" type="text" class="validate">
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="action">Add
        <i class="material-icons right">send</i>
      </button>
    </form>
</div>

<form class="col s12" style="position:relative; bottom: 13em; left:17em">
      <div class="row">
        <div class="input-field col s9">
          <select>
            <option value="" disabled selected>Suppliers</option>
            <option value="1" default>Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
          </select>
          <label class="black-text">Suppliers</label>
        </div>
      </div>
    </form>
</div>



 <div class="section">
    <center><h4>Suppliers</h4></center>
    <div class="divider"></div>
     <table>
        <thead>
          <tr>
              <th data-field="id">Supplier ID</th>
              <th data-field="name">Supplier Name</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>001</td>
            <td>Alvin</td>
          </tr>
          <tr>
            <td>002</td>
            <td>Alan</td>
          </tr>
          <tr>
            <td>003</td>
            <td>Jonathan</td>
          </tr>
        </tbody>
      </table>

  </div>

<script>
  $(document).ready(function() {
    $('select').material_select();
  });
            
</script>
@endsection