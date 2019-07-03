<?php require_once('templates/header.php'); ?>
<?php require_once('templates/navbar.php'); ?>

<div class="hero is-fullheight is-light">
    <div class="hero-body">

        <div class="container">
      <strong>
        <h1 style="text-align:center;" class="title is-3">Administre sus estudiantes</h1>
      </strong> <br>
            <h2 style="text-align:center;" class="subtitle">Elija una opción</h2>



<aside style="text-align:center;" class="menu">
  <strong>
   <p style="text-align:center;" class="menu-label">
        General
      </strong>
    </p>
    <ul style="text-align:center;" class="menu-list">
        <li><a href="/school">Home</a></li>
    </ul>
<strong>
    <p style="text-align:center;" class="menu-label">
        Administration
    </p>
  </strong>
    <ul style="text-align:center;" class="menu-list">
        <li><a href="/school/student/new.php">New Student</a></li>
        <li><a href="/school/student/list.php">See all students</a></li>
        <li><a href="/school/student/profile.php">profile student</a></li>

</aside>

</div>
</div>
</div>


<?php require_once('templates/footer.php'); ?>
