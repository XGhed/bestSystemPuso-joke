
@extends('Maintenance')

@section('Supplies')

<center><h4 style="position:relative; bottom:16em;">Supplier</h4></center>


<div class = "container" style="position:relative; bottom:35em;">
<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Supplier's Name" id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
      </div>
    </form>
</div>


<table>
        <thead>
          <tr>
              <th data-field="id">SUPPLIER'S ID?</th>
              <th data-field="name">SUPPLIERS NAME</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
          </tr>
        </tbody>
      </table>
</div>
@endsection