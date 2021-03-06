@extends('adminParent')


@section('title')
Mode of Payment
@endsection

@section('title1')
<h1 class="left col s6 push-s1 white-text" style="font-size: 45px">Manage Mode of Payment</h2>

<?php
    if (isset($message)){
      if($message != null && $message == '1')
        echo "<script> 
                var toastContent = $('<span>RECORD ADDED!</span>');
                Materialize.toast(toastContent, 5000, 'add');
              </script>";
      elseif($message != null && $message == '2')
        echo "<script> 
                var toastContent = $('<span>RECORD EDITED!</span>');
                Materialize.toast(toastContent, 5000, 'edit');
              </script>";
      elseif($message != null && $message == '3')
        echo "<script> 
                var toastContent = $('<span>RECORD DELETED!</span>');
                Materialize.toast(toastContent, 5000, 'delete');
              </script>";
      elseif($message != null && $message == '-1')
        echo "<script> 
                var toastContent = $('<span>ERROR!</span>');
                Materialize.toast(toastContent, 5000, 'delete');
              </script>";
    }
  ?>
@endsection


@section('modePayment')
<br>
<br>

<div class="row">
<!--*************************************************** ADDCOMPANY **************************************-->
  <div class="col s8">

        <a class="modal-trigger waves-effect waves-light btn z-depth-5 left" href="#modal1"><i class="material-icons left">add</i>Add Keyword</a>

        <div id="modal1" class="modal modal-fixed-footer">
          <div class="modal-content">
            <h4><i class="medium material-icons left">payment</i>Add Payment method</h4>
                  <div class="divider"></div>
              <div class="row">
              <form class="col s12" action="" method="">
               <div class="input-field col s6">
                  <input id="keyword" type="text" class="validate">
                  <label for="keyword">Edit Payment Method</label>
                </div>

          </div>
          </div>
          <div class="modal-footer">
            <button class="modal-action modal-close white-text waves-effect waves-green btn-flat green" type="submit" name="add">
                  <i class="material-icons left">done</i>Add Payment Method</button></form>
          </div>
        </div>
  </div>
<!--*************************************************** END ADDCOMPANY **************************************-->


</div>


  <!--***************************************************DATA TABLE **************************************-->
<div class="row">
  <table class="responsive-table">
        <thead>
          <tr>
              <th></th>
              <th data-field="id">Payment Method</th>
          </tr>
        </thead>

        <tbody>
              <tr>
              <td>
                <input name="group1" type="radio" id="" value="" onclick=""/>
                   <label for="" class="left">Edit</label>
              </td>
              <td>Credit</td>
            </tr>
        </tbody>
      </table>
</div>
  <!--********************** END DATA TABLE  *******-->

  <!--********************** PAGINATION **************-->
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
    <!--********************* END PAGINATION *************************--> 
    
    <!--*************************************************** EDIT ************************************************-->
      
    <a class="modal-trigger waves-effect waves-light btn" href="#modal3">EDIT KEYWORD//LIPAT MO NA LANG SA RADIO</a>
      
      <div id="modal3" class="modal modal-fixed-footer">
        <div class="modal-content">
          <h4><i class="medium material-icons left">edit</i>Edit</h4>
                        <div class="divider"></div>
            <form>
                <div class="input-field col s6">
                  <input id="Place" type="text" class="validate">
                  <label for="Place">Edit Payment Method</label>
                </div>
        </div>


        <div class="modal-footer">
          <button class="btn-flat green waves-effect waves-light white-text col s2" type="submit" name="edit">
                <i class="material-icons left">edit</i>Change</button>

                <button class="btn-flat red waves-effect waves-light white-text col s2" type="submit" name="delete">Delete
            <i class="material-icons left">delete</i></button></form> 
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
@endsection