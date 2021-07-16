<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>

</head>
  <style>
  .alert-message {
    color: red;
  }
</style>
<body>

<div class="container">
    <h2 style="margin-top: 12px;" class="alert alert-success">ADAM APP -
       <a href="https://www.codingdriver.com" target="_blank" >Gestion sous saliments</a>
     </h2><br>
     <div class="row">
       <div class="col-12 text-right">
         <a href="javascript:void(0)" class="btn btn-success mb-3" id="create-new-post" onclick="addPost()">Ajouter sous aliment</a>
       </div>
    </div>
    <div class="row" style="clear: both;margin-top: 18px;">
        <div class="col-12">
          <table id="laravel_crud" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>designation</th>
                    <th>prixTTC</th>
                    <th>quantite</th>
                    
                    <th>total</th>
                    <th>aliment</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                @foreach($saliments as $saliments)
                <tr id="row_{{$saliments->id}}">
                   <td>{{ $saliments->id  }}</td>
                   <td>{{ $saliments->designation }}</td>
                   <td>{{ $saliments->prixTTC }}</td>
                   <td>{{ $saliments->quantite }}</td>
                   <td>{{ $saliments->total }}</td>
                   <td>{{ $saliments->aliment->designation }}</td>
                  
                  
                   <td><a href="javascript:void(0)" data-id="{{ $saliments->id }}" onclick="editPost(event.target)" class="btn btn-info">Modifier</a></td>
                   <td>
                    <a href="javascript:void(0)" data-id="{{ $saliments->id }}" class="btn btn-danger" onclick="deletePost(event.target)">Supprimer</a></td>
                </tr>
                @endforeach
            </tbody>
          </table>
       </div>
    </div>
</div>
<div class="modal fade" id="aliment-modal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title"></h4>
          </div>
          <div class="modal-body">
              <form name="userForm" class="form-horizontal">
                 <input type="hidden" name="id" id="id">
                  <div class="form-group">
                      <label for="name" class="col-sm-2">Designation</label>
                      <div class="col-sm-12">
                          <input type="text" class="form-control" id="designation" name="designation" placeholder="designation">
                          <span id="titleError" class="alert-message"></span>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="name" class="col-sm-2">Prix TTC</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="prixTTC" name="prixTTC" placeholder="prixTTC">
                        <span id="titleError" class="alert-message"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-2">Quantité</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="quantite" name="quantite" placeholder="quantite">
                        <span id="titleError" class="alert-message"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-2">Total</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="total" name="total" placeholder="total">
                        <span id="titleError" class="alert-message"></span>
                    </div>
                </div>
              
                <div class="form-group">
                    <label for="name" class="col-sm-2">Aliment</label>
                    <div class="col-sm-12">
                    <select name="aliment_id" id="aliment_id" class="form-control"  required >
                       
                        @foreach ($aliments as $aliments)
                        <option  value="{{ $aliments->id}}">{{ $aliments->designation }}</option>

                         @endforeach
                         <option  value="aucun">Aucun choix</option>
                       
              
                    </select>
                    <span id="titleError" class="alert-message"></span>
                </div>
                </div>
                <div class="form-group">
                  <label for="name" class="col-sm-2">Image</label>
                  <div class="col-sm-12">
                      <input type="file" class="form-control" id="image" name="image" placeholder="image">
                      <span id="titleError" class="alert-message"></span>
                  </div>
              </div>
  
                
              </form>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-primary" onclick="createPost()">Enregistrer</button>
          </div>
      </div>
    </div>
  </div>
  <script>
    $('#laravel_crud').DataTable();
  
    function addPost() {
      $("#id").val('');
      $('#aliment-modal').modal('show');
    }
  
    function editPost(event) {
      var id  = $(event).data("id");
      let _url = `/saliment/${id}`;
      $('#titleError').text('');
      $('#descriptionError').text('');
      
      $.ajax({
        url: _url,
        type: "GET",
        success: function(response) {
            if(response) {
              $("#id").val(response.id);
              $("#designation").val(response.designation);
              $("#prixTTC").val(response.prixTTC);
              $("#quantite").val(response.quantite);
              $("#total").val(response.total);
              $("#aliment_id").val(response.aliment_id);
              
              $('#aliment-modal').modal('show');
            }
        }
      });
    }
  
    function createPost() {
      var designation = $('#designation').val();
      var prixTTC = $('#prixTTC').val();
      var quantite = $('#quantite').val();
     
      var total = $('#total').val();
       var aliment_id = $('#aliment_id').val();
      
      var id = $('#id').val();
  
      let _url     = `/saliment`;
      let _token   = $('meta[name="csrf-token"]').attr('content');
  
        $.ajax({
          url: _url,
          type: "POST",
          data: {
            id: id,
            designation: designation,
            prixTTC: prixTTC,
            quantite: quantite,
            aliment_id: aliment_id,
           
            total: total,
            _token: _token
          },
          success: function(response) {
              if(response.code == 200) {
                if(id != ""){
                  $("#row_"+id+" td:nth-child(2)").html(response.data.designation);
                  $("#row_"+id+" td:nth-child(3)").html(response.data.prixTTC);
                  $("#row_"+id+" td:nth-child(4)").html(response.data.quantite);
                  $("#row_"+id+" td:nth-child(5)").html(response.data.total);
                  $("#row_"+id+" td:nth-child(6)").html(response.data.aliment_id);
                 
                } else {
                  $('table tbody').prepend('<tr id="row_'+response.data.id+'"><td>'+response.data.id+'</td><td>'+response.data.designation+'</td><td>'+response.data.prixTTC+'</td><td>'+response.data.quantite+'</td><td>'+response.data.total+'</td><td>'+response.data.aliment_id+'</td><td><a href="javascript:void(0)" data-id="'+response.data.id+'" onclick="editPost(event.target)" class="btn btn-info">Edit</a></td><td><a href="javascript:void(0)" data-id="'+response.data.id+'" class="btn btn-danger" onclick="deletePost(event.target)">Delete</a></td></tr>');
                }
                $('#designation').val('');
                $('#prixTTC').val('');
                $('#quantite').val('');
                 $('#total').val('');
                 
                $('#aliment_id').val('');
               
  
                $('#aliment-modal').modal('hide');
              }
          },
          error: function(response) {
            $('#titleError').text(response.responseJSON.errors.designation);
            $('#descriptionError').text(response.responseJSON.errors.total);
          }
        });
    }
  
    function deletePost(event) {
      var id  = $(event).data("id");
      let _url = `/saliment/${id}`;
      let _token   = $('meta[name="csrf-token"]').attr('content');
  
        $.ajax({
          url: _url,
          type: 'DELETE',
          data: {
            _token: _token
          },
          success: function(response) {
            $("#row_"+id).remove();
          }
        });
    }
  
  </script>
</body>
</html>