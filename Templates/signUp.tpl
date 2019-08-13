<section class="row m-5">
    <div class="col-8 border ">
      <h5>Inscription</h5>
      <form action="signUp.php" method="POST">
        <div class="row m-1">
          <div class="col-6"><label for="Name_User">Nom</label></div>
          <div class="col-6"><input type="text" id="nom_login" name="Name_User" class="form-control" value=""></div>
        </div>
        <div class="row m-1">
          <div class="col-6"><label for="Email_User">Email</label></div>
          <div class="col-6"><input type="email"id="email_login" name="Email_User" class="form-control" value=""></div>
          <span><?= $msg['name']?></span>
        </div>
        <div class="row m-1">
          <div class="col-6"><label for="Pass_User">Mot de passe</label></div>
          <div class="col-6"><input type="password" id="pass_login" name="Pass_User" class="form-control" placeholder="******" ></div>
        </div>
        <div class="row m-1">
          <div class="col-6"><label for="Repeat_Pass_User">Retapez votre mot de passe</label></div>
          <div class="col-6"><input type="password" id="Repeat_pass_login" name="Repeat_Pass_User" class="form-control" placeholder="******" value=""></div>
        </div>
        <div class="row m-1">
          <div class="col-6"></div>
          <div class="col-6"><input type="submit" id="send" name="insert_login" class="btn btn-outline-primary" value="S'inscrire"></div>
        </div>
      </form>
    </div>
  </section>