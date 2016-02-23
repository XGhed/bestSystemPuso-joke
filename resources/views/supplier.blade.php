@extends('adminParent')


@section('title')
Manage Supplier
@endsection

@section('title1')
<h1 class="center">Manage Supplier</h1>
@endsection


@section('supplier')


<br>
<br>

<div class="row">
    <div class="col s8">
      <form>
        <div class="input-field col s3">
          <select>
            <option disabled selected>Filter</option>
            <option value="1">Name</option>
            <option value="2">Address</option>
            <option value="3">Contact Number</option>
            <option value="3">Email Address</option>
          </select>
            <label>Filter By</label> <!-- BASAHIN MO TO. SEARCH O FILTER?-->
        </div>
      </form>
    </div>

<!--*************************** SEARCH ***************************
        <div class="input-field col s6">
            <input id="search" type="search" required>
              <label for="search"><i class="material-icons">search</i></label>
              <i class="material-icons">close</i>
        </div>
      </form>
    </div>
-->


<!--***************************ADD BUTTON***************************-->
<div class="col s4">
<!-- MODAL TRIGGER-->
  <a class="modal-trigger waves-effect waves-light btn z-depth-5 left" href="#addBtn"><i class="material-icons left">add</i>Add Supplier</a>

  <!-- Modal Structure -->
  <div id="addBtn" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4><i class="medium material-icons left">face</i>Add Supplier</h4>

   <!-- LINYA LANG--><div class="divider"></div><!-- LINYA LANG-->

    
        <div class="row">
    <form class="col s12" action="/confirmSupplier" method="POST">
            <div class="row">
                <div class="input-field col s8">
                  <input id="supplier_name" type="text" class="validate" name="add_name">
                  <label for="supplier_name">Supplier's Name</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s3">
                  <select name="add_province">
                    <option value="" disabled selected>Province</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>
                  <label>Province</label>
                </div>

                <div class="input-field col s3">
                  <select name="add_city">
                    <option value="" disabled selected>City</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>
                  <label>City/Municipality</label>
                </div>

                <div class="input-field col s3">
                  <select name="add_barangay">
                    <option value="" disabled selected>Barangay</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>
                  <label>Barangay</label>
                </div>

                <div class="input-field col s3">
                  <select name="add_street">
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
                  <input id="contact_num" type="text" class="validate" name="add_contactNo">
                  <label for="contact_num">Contact Number</label>
                </div>
            </div>

            <div class="row">
              <div class="input-field col s8">
                  <input id="eAddress" type="email" class="validate" name="add_email">
                  <label for="eAddress">Email Address</label>
              </div>
            </div>
          </div><!--*************************** ROW ***************************-->
        </div> <!--*************************** MODAL CONTENT ***************************-->

        <div class="modal-footer">
              <button class="btn waves-effect waves-light green darken-2 white-text" type="submit" name="add">
              <i class="material-icons left">add</i>Add Supplier</button>
        </div>
    </form>  
        </div> <!--MODAL BODY-->
</div>
    
        <!-- DATA TABLE -->
        <table class="highlight responsive-table">
        <thead>
          <tr>
              <th></th>
              <th data-field="Name">Name</th>
              <th data-field="Address">Address</th>
              <th data-field="Contact number">Contact number</th>
              <th data-field="Email Address">Email Address</th>
          </tr>
        </thead>

        <tbody>
        <form action="#">
          <input type="hidden" name="hid_key">
          @foreach($results as $key => $result)
            <tr>
              <td>
                  <input type="radio" id="test{{$key}}" value="{{$key}}" onclick="myJavascriptFunction(this.value);"/>
                  <label for="test{{$key}}" class="left">Edit</label>
              </td>
              <td>{{$result->SupplierName}}</td>
              <td>{{$result->Province_Address}}</td>
              <td>{{$result->SupplierContactNo}}</td>
              <td>{{$result->SupplierEmail}}</td>
            </tr>
          @endforeach
            </form>
        </tbody>
      </table>
<!-- ***************************************************EDIT**************************************-->

    <!-- Modal Structure -->
    <div id="modal1" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h4><i class="medium material-icons left">edit</i>Edit</h4>
     <!-- LINYA LANG--><div class="divider"></div><!-- LINYA LANG-->
          <div class="row">
          <form class="col s12" action="/confirmSupplier" method="POST">
              <input type="hidden" name="edit_ID" value="{{isset($_GET['keyID']) ? $results[$_GET['keyID']]->SupplierID : 'None'}}">
              <div class="row">
                  <div class="input-field col s8">
                    <input id="supplier_name" type="text" class="validate" name="edit_name" value="{{isset($_GET['keyID']) ? $results[$_GET['keyID']]->SupplierName : 'None'}}">
                    <label for="supplier_name">Supplier's Name</label>
                  </div>
              </div>

              <div class="row">
                  <div class="input-field col s3">
                    <select name="edit_province">
                      <option value="{{isset($_GET['keyID']) ? $results[$_GET['keyID']]->Province_Address : 'None'}}" selected>{{isset($_GET['keyID']) ? $results[$_GET['keyID']]->Province_Address : 'None'}}</option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                    </select>
                    <label>Province</label>
                  </div>

                  <div class="input-field col s3">
                    <select name="edit_city">
                      <option value="{{isset($_GET['keyID']) ? $results[$_GET['keyID']]->City_Address : 'None'}}" selected>{{isset($_GET['keyID']) ? $results[$_GET['keyID']]->City_Address : 'None'}}</option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                    </select>
                    <label>City/Municipality</label>
                  </div>

                  <div class="input-field col s3">
                    <select name="edit_barangay">
                      <option value="{{isset($_GET['keyID']) ? $results[$_GET['keyID']]->Barangay_Address : 'None'}}" selected>{{isset($_GET['keyID']) ? $results[$_GET['keyID']]->Barangay_Address : 'None'}}</option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                    </select>
                    <label>Barangay</label>
                  </div>

                  <div class="input-field col s3">
                    <select name="edit_street">
                      <option value="{{isset($_GET['keyID']) ? $results[$_GET['keyID']]->Street_Address : 'None'}}" selected>{{isset($_GET['keyID']) ? $results[$_GET['keyID']]->Street_Address : 'None'}}</option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                    </select>
                    <label>Street</label>
                  </div>
              </div>

              <div class="row">
                  <div class="input-field col s8">
                    <input id="contact_num" type="text" class="validate" name="edit_contactNo" value="{{isset($_GET['keyID']) ? $results[$_GET['keyID']]->SupplierContactNo : 'None'}}">
                    <label for="contact_num">Contact Number</label>
                  </div>
              </div>

              <div class="row">
                <div class="input-field col s8">
                    <input id="eAddress" type="email" class="validate" name="edit_email" value="{{isset($_GET['keyID']) ? $results[$_GET['keyID']]->SupplierEmail : 'None'}}">
                    <label for="eAddress">Email Address</label>
                </div>
              </div>
            </div><!--*************************** ROW ***************************-->
          </div> <!--*************************** MODAL CONTENT ***************************-->

          <div class="modal-footer">
                <button class="btn waves-effect waves-light green darken-2 white-text col s2" type="submit" name="edit">
                <i class="material-icons left">edit</i>Change</button>

                <button class="btn waves-effect waves-light z-depth-5 col s2" type="submit" name="delete">Delete
            <i class="material-icons left">delete</i>
          </button>
          </div>
      </form>
            <script>
                //MODAL
                $(document).ready(function(){
                $('.modal-trigger').leanModal();
              });  
                //SELECT FORM
                $(document).ready(function() {
                  $('select').material_select();
                });
            </script>
          </div> <!--MODAL BODY-->
      </div>


    <!-- hindi pa functtioning wala pang database-->
        <div class="center">
          <ul class="pagination">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="active"><a href="#!">1</a></li>
            <li class="waves-effect"><a href="#!">2</a></li>
            <li class="waves-effect"><a href="#!">3</a></li>
            <li class="waves-effect"><a href="#!">4</a></li>
            <li class="waves-effect"><a href="#!">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
          </ul>
        </div> 

      </div>

      <script>
        function myJavascriptFunction(keyVal) { 
          //var keyVal = document.querySelector('input[name="group1"]:checked').value;
          var javascriptVariable = keyVal;
          window.location.href = "supplier?keyID=" + javascriptVariable; 
        }
      </script>
      <?php if (isset($_GET['keyID'])) echo "<script>$('#modal1').openModal();</script>";?>
@endsection