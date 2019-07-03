<?php require_once('../templates/header.php'); ?>
<?php require_once('../templates/navbar.php'); ?>
<?php('../src/database/connection.php');?>

<?php $id = $_GET['id'];

 ?>

  <div class="container" style="margin-top: 3%">
    <div class="columns">

        <div class="column is-flex is-vcentered">
            <div class="section">
                <?php include_once('../templates/menu.php')?>



</div>
</div>

<div class="column is-four-fifths">
<div class="card">
    <header class="card-header">
        <p class="card-header-title title is-3">Perfil</p>
        <div class="control is-agrouped is-pulled-right">

        <a  class="button is-warning is-outlined">Imprimir Constancia</a>
        <a  class="button is-link is-outlined">Asignar</a>
      </div>

    </header>
    <div class="card-cotent is-flex is-horizontal-center">
        <table class="table is-hoverable">
            <thead>
                <th class="title is-5">Codigo</th>
                <th class="title is-5">Nombre</th>
                <th class="title is-5">Fecha de Nacimiento</th>

            </thead>
            <tbody>
                <?php
                include('../src/database/connection.php');
                $sql = "select * from student where id = '$id'";
                $result = $db_con->query($sql);
                foreach ($result as $values) {
                    if ($values["is_active"] == 1) {
                        echo "<tr><td>"
                            . $values["codigo"]
                            . "</td><td>"
                            . $values["fullname"]
                            . "</td><td>"
                            . $values["birthdate"]
                            . "</td><td>"
                            . "<a href='update.php"
                            . "?id=" . $values["id"]
                            . "&name=" . $values["fullname"]
                            . "&date=" . $values["birthdate"]
                            . "</td><td>"

                            ;

                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
  </div>

<?php require_once('../templates/footer.php'); ?>
