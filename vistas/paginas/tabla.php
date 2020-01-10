<?php
$usuarios = ControladorFormularios::ctrSeleccionar();
?>
<div class="table-responsive">
  <table class="centered responsive-table table-hover" id="dataTable" width="100%" cellspacing="0">
    <thead class="thead-dark">
      <tr>
        <th>Email</th>
        <th>Name</th>
        <th>Last Name</th>
        <th>Level</th>
        <th>Status</th>
        <th>Birthday</th>
        <th>Modified</th>
      </tr>
    </thead>
    <tbody>
     <?php foreach ($usuarios as $key => $value): ?>
      <tr>
        <td><?php echo $key+1; ?> </td>                            
        <td><?php echo $value["email"]; ?> </td>
        <td><?php echo $value["name_user"]; ?> </td>
        <td><?php echo $value["lastname_user"]; ?> </td>
        <td><?php echo $value["level"]; ?> </td>   
        <td><?php echo $value["status"]; ?> </td>
        <td><?php echo $value["fecha_nac"]; ?> </td>
        <td>
          <div class = "btn-group">
             <button class = "btn btn-warning href="http://localhost/bt-admin/modified.php?email=$value["email"]."> <i class = "fas fa-pencil-alt" ></i> </button>
             <button class = "btn btn-danger"> <i class = "fas fa-trash-alt" ></i> </button>
          </div>
        </td>
      </tr>
      <?php endforeach ?>                       
    </tbody>
  </table>
</div>