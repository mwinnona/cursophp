<div class="container-fluid" >
         <div class="page-header header-filter" id="back">
          <!-- Page Heading -->
          <br></br>
          <div class = "profile">
            <div class="avatar"  >
                <img src="https://source.unsplash.com/WLUHO9A_xik/1600x900" alt="Circle Image" class="img-raised rounded-circle img-fluid" width= "160px" height="160px" >
            </div>
            <div class="name">
              <span class="mr-2 d-none d-lg-inline text-white"><strong><?php echo $session_home; ?></strong></span>
            </div>
            <br></br>
          </div >
            
          <!-- DataTales Example -->
          <div class="container">
            <div class="main main-raised">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"></h6>
                <div class="card-body">
                  <?php
                  require 'database.php';
                  $email = $_GET["email"];
                  
                  $sql = "SELECT id,email, name_user, lastname_user, level, status, fecha_nac FROM users where email ='$session_home' LIMIT 1";
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
                  <form class="user" action="profileProcess.php" method ="post" >
                      <label>Email</label>  
                      <div class="form-group">
                        <input type="email" name="email" class="form-control form-control-user"  aria-describedby="emailHelp"  value="<?php echo $data["email"];?>" disabled>
                      </div>  

                      <label>Name</label>  
                      <div class="form-group">
                        <input type="name_user" name="name_user" class="form-control form-control-user"  aria-describedby="name_userHelp" value="<?php echo $data["name_user"];?>" >
                      </div>   

                      <label>Lastname</label>  
                      <div class="form-group">
                        <input type="lastname_user" name="lastname_user" class="form-control form-control-user"  aria-describedby="lastname_userHelp" value="<?php echo $data["lastname_user"];?>" >
                      </div> 
                      
                      <label>Level</label>  
                      <select class="form-group browser-default custom-select" name="level" disabled>
                        <option value="0" <?php if ($level == 0) echo 'Selected' ?> >Usuario Administrador</option>
                        <option value="1" <?php if ($level == 1) echo 'Selected' ?>>Usuario Regular</option>
                      </select>

                      <label>Status</label>  
                      <select class="from group browser-default custom-select" name="status" disabled>
                        <option value="0" <?php if ($status== 0) echo 'Selected' ?> >Habilitado</option>
                        <option value="1" <?php if ($status== 1) echo 'Selected' ?>>Deshabilitado</option>
                      </select>

                      <label>Birthday</label>  
                      <div class="form-group">
                        <input type="date" name="date" class="form-control form-control-user" value="<?php echo $data["fecha_nac"];?>" > 
                      </div>

                      <div class="form-group">  
                        <input type="hidden" name="id" value="<?php echo $data["id"];?>" >
                        <input class="btn btn-primary btn-user btn-block" type="submit" value="Edit">
                      </div>
                  </form>

                


                </div>
              </div>
            </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
              <div class="container my-auto">
                <div class="copyright text-center my-auto">
                  <span>Copyright &copy; Your Website 2020</span>
                </div>
              </div>
            </footer>
      <!-- End of Footer -->
          </div>

        </div>

