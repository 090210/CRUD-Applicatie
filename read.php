<?php
$title = 'Read';
include_once('header.php');

?>
<style>
.foo {
    word-break: break-all;

}
    </style
<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="read.php">Read</a>
            </li>
        </ul>
    </nav>


    <?php
    require_once 'functions.php';
    $function = new Functions;
    $function->read();
?>
<table class="table table-striped">
<thead>
  <tr>
    <th scope="col">ID</th>
    <th scope="col">Name</th>
    <th scope="col">E-mail</th>
    <th scope="col">Message</th>
    <th scope="col">Update / delete</th>

  </tr>
</thead>
<tbody>
<?php while ($row = $function->stmt->fetch(PDO::FETCH_ASSOC)) : ?>
        <tr>
            <th scope="row"><?= $row['id'] ?></th>
            <td class='foo'><?= $row['name'] ?></td>
            <td class='foo'><?= $row['email'] ?></td>
            <td class='foo'><?= $row['message'] ?></td>
            <td class='foo'><a href="delete.php?del=<?= $row['id'] ?>"><i class="fas fa-trash-alt text-danger"></i></a>&nbsp;&nbsp;<a href="edit.php?id=<?= $row['id'] ?>"><i class="fas fa-edit text-primary"></i></a></td>


        </tr>
    <?php endwhile; ?>

</tbody>
</table> 
       
<a class="btn btn-danger col-md-3 d-flex justify-content-center m-auto" href="delete.php?all" role="button">Klik hier om elke record te verwijderen</a>
