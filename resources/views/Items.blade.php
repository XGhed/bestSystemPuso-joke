@extends('adminParent')


@section('title')
Manage Items
@endsection


@section('items')
<script>
	
	$(document).ready(function() {
    $('select').material_select();
  })
        ;
</script>
<center><h1><i class="medium material-icons">shopping_cart</i>Items</h1></center>
<br>
<br>
<br>


<div class="col s4">
<form action="#">
    <p>
      <input name="group1" type="radio" id="test1" />
      <label for="test1">Edit Item</label>
    </p>
    <p>
      <input name="group1" type="radio" id="test2" />
      <label for="test2">Add Item</label>
    </p>   
</form>
</div>

<div class="col s4 push-s2">
 <div class="input-field col s12">
    <select>
      <option value="" disabled selected>Choose item</option>
      <option value="1">item1</option>
      <option value="2">item2</option>
      <option value="3">item3</option>
    </select>
    <label>Select item</label>
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
  	<center><h3>Item Info</h3></center>
  </div>
<div class="divider"></div>
<br>
<br>


<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Item name" id="first_name" type="text" class="validate">
          <label for="Supplier_name">Item Name</label>
       		</div>
        </div>
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Description" id="first_name" type="text" class="validate">
          <label for="first_name">Item Description</label>
        </div>
      </div>
		<div class="row">
        <div class="input-field col s6">
          <input placeholder="Category" id="first_name" type="text" class="validate">
          <label for="first_name">Item Category</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Sub category" id="first_name" type="text" class="validate">
          <label for="first_name">Item Subcategory</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Size" id="first_name" type="text" class="validate">
          <label for="first_name">Size</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Color" id="first_name" type="text" class="validate">
          <label for="first_name">Color</label>
        </div>
      </div>
    </form>

    <button class="btn blue waves-effect waves-light right" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
  </div>

<!-- -->


<div class="section">
    <center><h3>Category Info</h3></center>
  </div>
<div class="divider"></div>
<br>
<br>

<div class="col s4">
<form action="#">
    <p>
      <input name="group1" type="radio" id="test1" />
      <label for="test1">Edit Category</label>
    </p>
    <p>
      <input name="group1" type="radio" id="test2" />
      <label for="test2">Add Category</label>
    </p>   
</form>
</div> 

<div class="col s4 push-s2">
 <div class="input-field col s12">
    <select>
      <option value="" disabled selected>Choose category</option>
      <option value="1">Appliances</option>
      <option value="2">Gadgets</option>
      <option value="3">Fasion</option>
    </select>
    <label>Select Category</label>
  </div>
</div>


<br>
<br>
<br>
<br>
<br>




<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Category" id="first_name" type="text" class="validate">
          <label for="Category_name">Category Name</label>
          </div>
        </div>
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Subcategory" id="first_name" type="text" class="validate">
          <label for="Subcategory">Subcategory</label>
        </div>
      </div>
    </form>

    <button class="btn blue waves-effect waves-light right" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
  </div>


<div class="section">
    <center><h3>Categories</h3></center>
  </div>
<div class="divider"></div>
<table>
        <thead>
          <tr>
              <th data-field="id">Category</th>
              <th data-field="name">Subcategory</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Fashion</td>
            <td>Clothing</td>
          </tr>
          <tr>
            <td>Appliances</td>
            <td>Fridge</td>
          </tr>
          <tr>
            <td>Mobiles & tablets</td>
            <td>Iphone</td>
          </tr>
        </tbody>
      </table>
<!-- -->


<div class="section">
  	<center><h3>List of Items</h3></center>
  </div>
<div class="divider"></div>
<table>
        <thead>
          <tr>
              <th data-field="id">Item name</th>
              <th data-field="name">Description</th>
              <th data-field="name">Category</th>
              <th data-field="name">Size</th>
              <th data-field="name">Color</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>payong</td>
            <td>sira ung hawakan</td>
            <td>Umbrella</td>
            <td>N/A</td>
            <td>Green</td>
          </tr>
          <tr>
            <td>Fridge</td>
            <td>Hello kitty design</td>
            <td>Appliances</td>
            <td>N/A</td>
            <td>Pink</td>
          </tr>
          <tr>
            <td>iphone 4s</td>
            <td>sira ung antenna</td>
            <td>Gadgets</td>
            <td>N/A</td>
            <td>Silver</td>
          </tr>
        </tbody>
      </table>

@endsection