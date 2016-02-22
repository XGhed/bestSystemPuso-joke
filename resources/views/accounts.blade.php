@extends('adminParent')


@section('title')
Manage Supplier
@endsection

@section('title1')
<h1 class="center">Manage Accounts</h1>
@endsection


@section('supplier')


<!-- SEARCH -->
<br>
<br>
<div class="row">
<div class="col s8">
<form>
<div class="input-field col s3">
    <select>
      <option value="" disabled selected>Filter</option>
      <option value="1">Name</option>
      <option value="2">Address</option>
      <option value="3">Contact Number</option>
      <option value="3">Email Address</option>
    </select>
    <label>Search By</label> <!-- BASAHIN MO TO. SEARCH O FILTER?-->
  </div>

        <div class="input-field col s6">
          <input id="search" type="search" required>
          <label for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
</form>
</div>

<div class="col s4">
<!-- MODAL TRIGGER-->
  <a class="modal-trigger waves-effect waves-light btn green z-depth-5 left" href="#modal1">Add Supplier</a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Add Supplier</h4>

   <!-- LINYA LANG--><div class="divider"></div><!-- LINYA LANG-->

    <!-- MODAL BODY -->
        <div class="row">
    <form class="col s12">
            <div class="row">
                <div class="input-field col s8">
                  <input id="last_name" type="text" class="validate">
                  <label for="last_name">Supplier's Name</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s3">
                  <select>
                    <option value="" disabled selected>Province</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>
                  <label>Province</label>
                </div>

                <div class="input-field col s2">
                  <select>
                    <option value="" disabled selected>Zip Code</option>
                    <option value="1">Code1</option>
                    <option value="2">Code2</option>
                    <option value="3">Code3</option>
                  </select>
                  <label>Postal Code</label>
                </div>

                <div class="input-field col s3">
                  <select>
                    <option value="" disabled selected>City</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>
                  <label>City/Municipality</label>
                </div>

                <div class="input-field col s2">
                  <select>
                    <option value="" disabled selected>Barangay</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>
                  <label>Barangay</label>
                </div>

                <div class="input-field col s2">
                  <select>
                    <option value="" disabled selected>Street</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>
                  <label>Street</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s8">
                  <input id="last_name" type="text" class="validate">
                  <label for="last_name">Contact Number</label>
                </div>
            </div>

            <div class="row">
              <div class="input-field col s8">
                  <input id="last_name" type="email" class="validate">
                  <label for="last_name">Email Address</label>
              </div>
            </div>
            
            </div>
        </div>

        <div class="modal-footer">
              <button class="btn waves-effect waves-light green darken-2 white-text" type="submit" name="action">
              <i class="material-icons right">add</i>Add Supplier</button>
          
        </div>
    </form>
  

          <script>
          //MODAL
          $('.modal-trigger').leanModal({
              dismissible: true, // Modal can be dismissed by clicking outside of the modal
              opacity: .5, // Opacity of modal background
              in_duration: 300, // Transition in duration
              out_duration: 200, // Transition out duration
            }
          );

          //SELECT FORM
          $(document).ready(function() {
            $('select').material_select();
          });
          
          </script>
        </div> <!--MODAL BODY-->
</div>  
</div>
    
        <!-- DATA TABLE -->
        <table class="highlight responsive-table">
        <thead>
          <tr>
              <th data-field="id"></th>
              <th data-field="id"></th>
              <th data-field="id">Name</th>
              <th data-field="name">Address</th>
              <th data-field="price">Contact number</th>
              <th data-field="price">Email Address</th>
          </tr>
        </thead>

        <tbody>
          <tr>
          <td>
<a class="btn-floating btn-large waves-effect waves-light green z-depth-5 tooltipped" data-position="top" data-delay="50" data-tooltip="Delete"><i class="material-icons">delete</i></a>
            </td>
            <td>
<a class="btn-floating btn-large waves-effect waves-light green z-depth-5 tooltipped" data-position="top" data-delay="50" data-tooltip="Edit"><i class="material-icons">edit</i></a>
            </td>
            <td>Muming Company Inc.</td>
            <td>Laguna, San Pedro, Brgy. San Vicente Wednesday Street</td>
            <td>+639 26 735 4975</td>
            <td>Muming_jerome@yahoo.com</td>
          </tr>

          <tr>
            <td>
<a class="btn-floating btn-large waves-effect waves-light green z-depth-5 tooltipped" data-position="top" data-delay="50" data-tooltip="Delete"><i class="material-icons">delete</i></a>
            </td>
            <td>
<a class="btn-floating btn-large waves-effect waves-light green z-depth-5 tooltipped" data-position="top" data-delay="50" data-tooltip="Edit"><i class="material-icons">edit</i></a>
            </td>
            <td>Muming Company Inc.</td>
            <td>Laguna, San Pedro, Brgy. San Vicente Wednesday Street</td>
            <td>+639 26 735 4975</td>
            <td>Muming_jerome@yahoo.com</td>
          </tr>

          <tr>
          <td>
<a class="btn-floating btn-large waves-effect waves-light green z-depth-5 tooltipped" data-position="top" data-delay="50" data-tooltip="Delete"><i class="material-icons">delete</i></a>
            </td>
            <td>
<a class="btn-floating btn-large waves-effect waves-light green z-depth-5 tooltipped" data-position="top" data-delay="50" data-tooltip="Edit"><i class="material-icons">edit</i></a>
            </td>
            <td>Muming Company Inc.</td>
            <td>Laguna, San Pedro, Brgy. San Vicente Wednesday Street</td>
            <td>+639 26 735 4975</td>
            <td>Muming_jerome@yahoo.com</td>
          </tr>

          <tr>
          <td>
<a class="btn-floating btn-large waves-effect waves-light green z-depth-5 tooltipped" data-position="top" data-delay="50" data-tooltip="Delete"><i class="material-icons">delete</i></a>
            </td>
            <td>
<a class="btn-floating btn-large waves-effect waves-light green z-depth-5 tooltipped" data-position="top" data-delay="50" data-tooltip="Edit"><i class="material-icons">edit</i></a>
            </td>
            <td>Wassup Company Inc.</td>
            <td>Metro Manila, Muntinlupa, Brgy. Tunasan 2nd Street</td>
            <td>808 751 8427</td>
            <td>boom@gmail.com</td>
          </tr>

          <tr>
          <td>
<a class="btn-floating btn-large waves-effect waves-light green z-depth-5 tooltipped" data-position="top" data-delay="50" data-tooltip="Delete"><i class="material-icons">delete</i></a>
            </td>
            <td>
<a class="btn-floating btn-large waves-effect waves-light green z-depth-5 tooltipped" data-position="top" data-delay="50" data-tooltip="Edit"><i class="material-icons">edit</i></a>
            </td>
            <td>Coca-cola Manufacturing company</td>
            <td>Metro Manila, Pasay City, Brgy. 504,  Wednesday Street</td>
            <td>09 29 233 4681</td>
            <td>Pepsi@rocketmail.com</td>
          </tr>
        </tbody>
      </table>

    <!-- hindi pa functtioning wala pang database-->
      <center><ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul></center>
           </div> 
@endsection