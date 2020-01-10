<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Update account</h1>
  <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Users</h6>
              <div class="card-body">
                <?php
                require 'database.php';
                $email = $_GET["email"];
                
                $sql = "SELECT id,email, name_user, lastname_user, level, status, fecha_nac FROM users where email ='$email' LIMIT 1";
                $result = $conn->query($sql);
                $data = null;
                $level =null;
                $status=null;
                
                if ($result->num_rows > 0) 
                {
                    foreach ($result as $data)
                    {
                    /* echo "<br>";
                        echo "Id:" .$data["id"]. "<br";
                        echo "Email: ".$data["email"]. "<br>";
                        echo "Level: ".$data["level"]. "<br>";
                        echo "Status: ".$data["status"]. "<br>";*/
                        $level = $data["level"];
                        $status =$data["status"];
                    }
                    
                }
                ?>
                <form class="user" action="modifiedProcess.php" method ="post" >
                    <label>Email</label>  
                    <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp"  value="<?php echo $data["email"];?>" disabled>
                    </div>  

                    <label>Name</label>  
                    <div class="form-group">
                      <input type="name_user" name="name_user" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="name_userHelp" value="<?php echo $data["name_user"];?>" >
                    </div>   

                    <label>Lastname</label>  
                    <div class="form-group">
                      <input type="lastname_user" name="lastname_user" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="lastname_userHelp" value="<?php echo $data["lastname_user"];?>" >
                    </div> 
                    
                    <label>Level</label>  
                    <select class="browser-default custom-select" name="level">
                      <option value="0" <?php if ($level == 0) echo 'Selected' ?> >Usuario Administrador</option>
                      <option value="1" <?php if ($level == 1) echo 'Selected' ?>>Usuario Regular</option>
                    </select>

                    <label>Status</label>  
                    <select class="browser-default custom-select" name="status">
                      <option value="0" <?php if ($status== 0) echo 'Selected' ?> >Habilitado</option>
                      <option value="1" <?php if ($status== 1) echo 'Selected' ?>>Deshabilitado</option>
                    </select>

                    <label>Birthday</label>  
                    <div class="form-group">
                      <input type="date" name="date" class="form-control form-control-user" value="<?php echo $data["fecha_nac"];?>" > 
                    </div>

                    <div class="form-group">  
                      <input type="hidden" name="id" value="<?php echo $data["id"];?>" >
                      <input class="btn btn-primary btn-user btn-block" type="submit" value="Update">
                    </div>
                </form>
                <?php  
                $conn->close();
                ?>
              </div>
            </div>
  </div>
</div>