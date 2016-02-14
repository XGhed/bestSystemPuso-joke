
@extends('Maintenance')

@section('Supplies')

<center><h4 style="position:relative; bottom:16em;">Users</h4></center>


<div class = "container" style="position:relative; bottom:35em;">
<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="User-type" id="first_name" type="text" class="validate">
          <label for="first_name">Add User-type</label>
        </div>
      </div>
    </form>
</div>


<table>
        <thead>
          <tr>
              <th data-field="id">LIST OF BIDDERS</th>
              <th data-field="name">USER - TYPE</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Muming</td>
            <td>
	            <a class='dropdown-button btn' href='#' data-activates='dropdown1'>CURRENT USER TYPE<!-- CURRENT TYPE --></a>
					<ul id='dropdown1' class='dropdown-content'>
					    <li><a href="#!">End-User</a></li>
					    <li><a href="#!">Retailer</a></li>
					</ul>
 			</td>
          </tr>
          <tr>
            <td>Gwapo</td>
            <td>
	            <a class='dropdown-button btn' href='#' data-activates='dropdown1'>CURRENT USER TYPE<!-- CURRENT TYPE --></a>
					<ul id='dropdown1' class='dropdown-content'>
					    <li><a href="#!">End-User</a></li>
					    <li><a href="#!">Retailer</a></li>
					</ul></td>
          </tr>
          <tr>
            <td>HEHEHE</td>
            <td>
	            <a class='dropdown-button btn' href='#' data-activates='dropdown1'>CURRENT USER TYPE<!-- CURRENT TYPE --></a>
					<ul id='dropdown1' class='dropdown-content'>
					    <li><a href="#!">End-User</a></li>
					    <li><a href="#!">Retailer</a></li>
					</ul></td>
          </tr>
        </tbody>
      </table>
</div>

</div>

<script>
 $('.dropdown-button').dropdown({
      inDuration: 500,
      outDuration: 500,
      constrain_width: true, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'left' // Displays dropdown with edge aligned to the left of button
    }
  );

</script>
@endsection