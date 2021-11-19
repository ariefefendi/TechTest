<?php include('assets/head.php') ?>

<div class="jumbotron war1">
  <div class="container-fluid">
    <h2 class="text-center" >TEST & SIMPLE MODULAR APPS </h2>

    <div class="row">
      <div class="col-md-4 col-md-offset-4">

        <form action="proses_login.php" method="POST" role="form">
          <legend class="text-center">Insert username and password to login!</legend>

          <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="username" class="form-control" id="" placeholder="Insert here your username!">
          </div>

          <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" id="" placeholder="Insert here your password!">
          </div>

          <input type="submit" name="submit" value="Login" class="btn btn-success"/>
          <a href="publics.php?page=soal-01" class="btn btn-info">Jawaban Test = 1 s.d 4</a>
          <!-- <a href="admin.php" type="submit" class="btn btn-success">Admin</a> -->
        </form>

      </div>
    </div>

  </div>
</div>  

<div class="row navbar-static-top">
  <div class="col-md-6 col-md-offset-3">
    <div class="jumbotron note warning">
      <h4>User Akses : </h4>
      <p>
        Username = <b>admin</b><br/>
        Password = <b>admin</b>
      </p>
    </div>
  </div>
</div>

<?php include('assets/foot.php') ?>


<style>
.jumbotron.note{
  padding: 20px;
  border-radius: 9px; 
  color: #fff;
}
.jumbotron.note:hover{
  background-color: #eea236;
}
.warning{
  background-color: #f0ad4e;
  border-color: #eea236;
}
</style>