
@extends('Maintenance')

@section('Supplies')

<center><h4>Item</h4></center>


<div class = "container">
<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Add Category" id="first_name" type="text" class="validate">
          <label for="first_name">Item Category</label>
        </div>
      </div>
    </form>
</div>


<table>
        <thead>
          <tr>
              <th data-field="id">LIST OF CATEGORY</th>
              <th data-field="name">OPTIONS</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>APPLIANCES</td>
            <td>
					    <a class="waves-effect waves-light btn">EDIT</a>
              <a class="waves-effect waves-light btn">DELETE</a>
 			</td>
          </tr>
          <tr>
            <td>CELLPHONES</td>
            <td>
					     <a class="waves-effect waves-light btn">EDIT</a>
                <a class="waves-effect waves-light btn">DELETE</a>
             </td>
          </tr>
          <tr>
            <td>EWAN</td>
            <td>
	            <a class="waves-effect waves-light btn">EDIT</a>
              <a class="waves-effect waves-light btn">DELETE</a></td>
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