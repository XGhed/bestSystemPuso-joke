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
    <form class="col s12">
            <div class="row">
                <div class="input-field col s8">
                  <input id="supplier_name" type="text" class="validate">
                  <label for="supplier_name">Supplier's Name</label>
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

                <div class="input-field col s3">
                  <select>
                    <option value="" disabled selected>City</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>
                  <label>City/Municipality</label>
                </div>

                <div class="input-field col s3">
                  <select>
                    <option value="" disabled selected>Barangay</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>
                  <label>Barangay</label>
                </div>

                <div class="input-field col s3">
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
                  <input id="contact_num" type="text" class="validate">
                  <label for="contact_num">Contact Number</label>
                </div>
            </div>

            <div class="row">
              <div class="input-field col s8">
                  <input id="eAddress" type="email" class="validate">
                  <label for="eAddress">Email Address</label>
              </div>
            </div>
          </div><!--*************************** ROW ***************************-->
        </div> <!--*************************** MODAL CONTENT ***************************-->

        <div class="modal-footer">
              <button class="btn waves-effect waves-light green darken-2 white-text" type="submit" name="action">
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
          <tr>
              <td>
                <p>
                  <input name="group1" type="radio" id="test1" />
                  <label for="test1"></label>
                </p>
              </td>
              <td>Muming Company Inc.</td>
              <td>Laguna, San Pedro, Brgy. San Vicente Wednesday Street</td>
              <td>+639 26 735 4975</td>
              <td>Muming_jerome@yahoo.com</td>
          </tr>

          <tr>
              <td>
                <p>
                  <input name="group1" type="radio" id="test2" />
                  <label for="test2"></label>
                </p>
              </td>
              <td>Wassup Company Inc.</td>
            <td>Metro Manila, Muntinlupa, Brgy. Tunasan 2nd Street</td>
            <td>808 751 8427</td>
            <td>boom@gmail.com</td>
          </tr>

          <tr>
              <td>
                <p>
                  <input name="group1" type="radio" id="test3" />
                  <label for="test3"></label>
                </p>
              </td>
            <td>Coca-cola Manufacturing company</td>
            <td>Metro Manila, Pasay City, Brgy. 504,  Wednesday Street</td>
            <td>09 29 233 4681</td>
            <td>Pepsi@rocketmail.com</td>
          </tr>

          <tr>
              <td>
                <p>
                  <input name="group1" type="radio" id="test4" />
                  <label for="test4"></label>
                </p>
              </td>
            <td>Coca-cola Manufacturing company</td>
            <td>Metro Manila, Pasay City, Brgy. 504,  Wednesday Street</td>
            <td>09 29 233 4681</td>
            <td>Pepsi@rocketmail.com</td>
            </form>
          </tr>
        </tbody>
      </table>
<!-- ***************************************************EDIT**************************************-->
      <div class="row">
        <div class="col s3">
          <a class="modal-trigger waves-effect waves-light btn z-depth-5 right" href="#modal1"><i class="material-icons right">edit</i>Edit</a>
        
    <!-- Modal Structure -->
    <div id="modal1" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h4><i class="medium material-icons left">edit</i>Edit</h4>

     <!-- LINYA LANG--><div class="divider"></div><!-- LINYA LANG-->

      
          <div class="row">
          <form class="col s12">
              <div class="row">
                  <div class="input-field col s8">
                    <input id="supplier_name" type="text" class="validate">
                    <label for="supplier_name">Supplier's Name</label>
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

                  <div class="input-field col s3">
                    <select>
                      <option value="" disabled selected>City</option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                    </select>
                    <label>City/Municipality</label>
                  </div>

                  <div class="input-field col s3">
                    <select>
                      <option value="" disabled selected>Barangay</option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                    </select>
                    <label>Barangay</label>
                  </div>

                  <div class="input-field col s3">
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
                    <input id="contact_num" type="text" class="validate">
                    <label for="contact_num">Contact Number</label>
                  </div>
              </div>

              <div class="row">
                <div class="input-field col s8">
                    <input id="eAddress" type="email" class="validate">
                    <label for="eAddress">Email Address</label>
                </div>
              </div>
            </div><!--*************************** ROW ***************************-->
          </div> <!--*************************** MODAL CONTENT ***************************-->

          <div class="modal-footer">
                <button class="btn waves-effect waves-light green darken-2 white-text right" type="submit" name="action">
                <i class="material-icons left">done</i>Confirm</button>
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

        <div class="col s3">
          <button class="btn waves-effect waves-light z-depth-5 left" data-target="modal1" type="submit" name="action">Delete
            <i class="material-icons right">delete</i>
          </button>
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
@endsection