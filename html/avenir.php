<!DOCTYPE html>
<html>

 <?php include('entete.php');?>
<body style="background: url('../Resources/harpe-extr.png') no-repeat fixed center; background-size: cover;">
  <div class="container">
    <div class="row">
      <div class="col-md-12" style="color: red">
        <h1 class="text-center">Réalisations</h1>
      </div>
    </div>
    <nav class="navbar navbar-expand-md navbar-light bg-faded">
      <div class="container text-center"> <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav" style="list-style: none;">
            <li class="nav-item"> <a class="nav-link" href="projets.php">L'équipe</a> </li>
            <li class="nav-item" style="border-bottom: 3px solid red; margin-left: 20px;> <a class="nav-link active" href="realisation.html">réalisations</a> </li>
            <li class="nav-item" style="margin-left: 20px;"><a class="nav-link" href="avenir.php">NOS PROJETS</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <div class="pi-draggable py-5  section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="text-primary text-capitalize">Réacteur d'innovation térritorial</h1>
          <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,
            pretium quis, sem. </p>
        </div>
        <div class="col-md-6"> <img class="img-responsive" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg" class="img-fluid"> </div>
      </div>
    </div>
  </div>
  <?php include('pied.php'); ?>
  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/site.js"></script>
</body>

</html>