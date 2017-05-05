<!DOCTYPE html>
    <html lang="fr">
        <?php include('entete.php');?>
    <body style="background: url('../Resources/harpe-extr.png') no-repeat fixed center; background-size: cover;">
        <!-- Page Content -->
            <div class="container">
                <div class="brand" style="color: black;">
                    Membres : « En cours de construction »
                </div>
                <form>
                    <p> <label>Accès membre :</label> <input type="text" id="accm" placeholder="Ex : Identifiant"/></p>
                    <p><label> Mot de passe :</label> <input type="text" placeholder="**************" id="mdp" /></p>
                    <input  style="margin-left:120px" type="submit"  value="Connexion" />
                </form>

            </div>
    <!-- /#wrapper -->
    <?php include('pied.php'); ?>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/control.js"></script>
</body>
</html>