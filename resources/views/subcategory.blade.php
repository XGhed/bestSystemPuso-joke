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
<!--*************************************************** ADDCATEGORY **************************************-->
	<!-- <div class="col s4">
		
			  <a class="modal-trigger waves-effect waves-light btn" href="#modal1"><i class="material-icons left">add</i>Add Subcategory</a>

			 
			  <div id="modal1" class="modal modal-fixed-footer">
			    <div class="modal-content">
			      <h4><i class="medium material-icons left">dns</i>Add Subcategory</h4>
			      			<div class="divider"></div>
			        <div class="row">
					    <form class="col s12">
						    <div class="row">
						       	<div class="input-field col s5">
						        	<input id="category" type="text" class="validate">
						         	<label for="category">Category</label>
						        </div>
						    </div>
					    </form>
					</div>
			    </div>
			    <div class="modal-footer">
			      <a href="#!" class="modal-action modal-close waves-effect waves-green btn "><i class="material-icons left">done</i>Confirm</a>
			    </div>
			  </div>
	</div>
<!--***************************************************END ADDCATEGORY **************************************-->

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
							    <div class="row">
							    <!--LOOP MO NA LANG KUNG ILAN UNG SUB CAT NIYA-->
							       	<div class="input-field col s5">
							        	<input id="category" type="text" class="validate">
							         	<label for="category">Subcategory</label>
							        </div>
							    </div>
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