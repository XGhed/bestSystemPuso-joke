@extends('adminParent')


@section('title')
Manage Subcategory
@endsection

@section('title1')
<h1 class="left col s6 push-s1 white-text" style="font-size: 45px">Manage Subcategory</h2>
@endsection


@section('subcategory')
<br>
<br>

<div class="row">

<!--***************************************************ADD SUBCATEGORY **************************************-->
	<div class="col s4">
		 <!-- Modal Trigger -->
			  <a class="modal-trigger waves-effect waves-light btn" href="#modal2"><i class="material-icons left">add</i>Add Subcategory</a>

			  <!-- Modal Structure -->
			  <div id="modal2" class="modal modal-fixed-footer">
			    <div class="modal-content">
			      <h4><i class="medium material-icons left">dns</i>Add Subcategory</h4>
			      			<div class="divider"></div>
			      	<div class="row">
					    <form class="col s12" action="/confirmSubCategory" method="POST">		
					      	<div class="row">
						        <div class="input-field col s7">
								    <select name="add_ID">
								    	<option value="" disabled selected>Choose your Category</option>
								    	@foreach($results as $key => $result)
	            							<option id="{{$key}}" value="{{$result->CategoryID}}">{{$result->CategoryName}}</option>
         								@endforeach
								    </select>
								  </div>
							 </div>

							<div class="row">
							    <div class="input-field col s6">
							        <input id="category" type="text" class="validate" name="add_name">
							        <label for="category">Name of Subcategory</label>
							    </div>
							</div> 
					</div>
			    </div>
			    <div class="modal-footer">
			      <button class="modal-action modal-close waves-effect waves-green btn " type="submit" name="add">
                	<i class="material-icons left">done</i>Confirm</button></form>
			    </div>
			  </div>
	</div>

	<!--***************************************************END SUBCATEGORY **************************************-->
</div>


	<!--***************************************************DATA TABLE **************************************-->
<div class="row">
	<table class="responsive-table">
        <thead>
          <tr>
          	  <th></th>
              <th data-field="id">Category</th>
              <th data-field="name">Subcategory</th>
          </tr>
        </thead>

        <tbody>
        	@foreach($results as $key => $result)
				<tr>
					<td>
		          		<input name="group1" type="radio" id="test{{$key}}" value="" onclick=""/>
		                <label for="test{{$key}}" class="left">Edit</label>
		            </td>
		            <td>{{$result->CategoryName}}</td>
		            <td>
		            	@foreach($result->subCategory as $key2 => $subResult)
		            		{{$subResult->SubCategoryName}},&nbsp;
		            	@endforeach
		            </td>
		          </tr>
	          	<tr>
			@endforeach
        </tbody>
      </table>
</div>
	<!--***************************************************END DATA TABLE **************************************-->

	<!--*************************************************** PAGINATION **************************************-->
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
    <!--*************************************************** END PAGINATION **************************************--> 
    
    <!--*************************************************** EDIT ************************************************-->
    	
		<a class="modal-trigger waves-effect waves-light btn" href="#modal3">EDIT MODAL //LIPAT MO NA LANG SA RADIO</a>
		  
		  <div id="modal3" class="modal modal-fixed-footer">
		    <div class="modal-content">
		      <h4><i class="medium material-icons left">edit</i>Edit</h4>
		      							<div class="divider"></div>
		      	<form>
		      		
			     		<div class="row">
			     			<div class="input-field col s6 pull-s1">
							    <select>
							      <option value="" disabled selected>Choose Category</option>
							      <option value="1">Category1</option>
							      <option value="2">Category2</option>
							      <option value="3">Category3</option>
							    </select>
							    <label>Category</label>
							  </div>
						</div>
							
						<div class="row">
							<div class="input-field col s6 push-s1">
							    <select>
							      <option value="" disabled selected>Choose Subcategory</option>
							      <option value="1">SubCategory1</option>
							      <option value="2">SubCategory2</option>
							      <option value="3">SubCategory3</option>
							    </select>
							    <label>Subcategory</label>
							</div>
						</div>

						<div class="input-field col s6">
				          <input id="new_sub" type="text" class="validate">
				          <label for="new_sub">New Subcategory</label>
				        </div>
		    </div>


		    <div class="modal-footer">
		      <button class="modal-action modal-close waves-effect waves-green btn " type="submit" name="edit">
                	<i class="material-icons left">done</i>Change</button>
                <button class="modal-action modal-close waves-effect waves-green btn " type="submit" name="delete">
                	<i class="material-icons left">done</i>Delete</button></form>	
		    </div>
		  </div>
    <!--*************************************************** END EDIT ************************************************-->  
      
			<script>

			//MODAL
			$(document).ready(function(){
			    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
			    $('.modal-trigger').leanModal();
			  });
			//SELECT
			$(document).ready(function() {
			    $('select').material_select();
			  });
			</script>
			<script>
	        function myJavascriptFunction(keyVal) { 
	          //var keyVal = document.querySelector('input[name="group1"]:checked').value;
	          var javascriptVariable = keyVal;
	          window.location.href = "category?keyID=" + javascriptVariable; 
	        }
	      	</script>
	      	<?php if (isset($_GET['keyID'])) echo "<script>$('#modal3').openModal();</script>";?>
@endsection