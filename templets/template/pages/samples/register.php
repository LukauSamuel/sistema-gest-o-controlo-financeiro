<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>


  <script>
        // Verificar se há uma mensagem na URL
        const params = new URLSearchParams(window.location.search);
        const mensagem = params.get('mensagem');

        // Se houver uma mensagem, exibir um alerta
        if (mensagem) {
            
            setTimeout(function () {
            alert(mensagem); // Você pode substituir isso por código para esconder a mensagem no seu elemento personalizado
        }, 2000);
        }

        
    </script>



    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Register</h3>
                <form action="../../../../app/cadastrar.php" method="POST">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="nome" class="form-control p_input" required>
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control p_input" required>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="senha" class="form-control p_input" required>
                  </div>
               
            
                    
                  <div class="form-check" >
                  <select name="tipo" id="">
                    <option value="pessoal" class="form-check-input">Pessoal</option>
                    <option value="empresa">Empresa</option>
                </select>
                </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Cadatrar</button>
                  </div>
                  <div class="d-flex">
                   
                  </div>
                 
                </form>
                <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> <a href="../samples/login.php"> Login</a> </button>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>