<?php
$title = 'Contact';
include_once('header.php');
?>

<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="read.php">Read</a>
            </li>
        </ul>
    </nav>
    <?php
    if (isset($_POST['name'], $_POST['email'], $_POST['message'])) {
        if (!empty($_POST['name']) and $_POST['email'] and $_POST['message']) {
            require_once('Functions.php');
            $function = new Functions;
            if ($function->create($_POST['name'], $_POST['email'], $_POST['message'])) {
                echo '<div class="alert alert-success text-center" role="alert">Succesvol in de database gezet</div>';
            } else {
                echo '<div class="alert alert-danger text-center" role="alert">Er is iets mis gegaan</div>';
            }
        }
    }
    ?>
    <form id="contact-form" method="post" role="form">
        <div class="jumbotron">
            <div class="col-sm-8 mx-auto">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">Name *</label>
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Vul je naam in *" required="required" data-error="Name is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">E-mail *</label>
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Vul je e-mailaddress in *" required="required" data-error="E-mailaddress is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_message">Message *</label>
                            <textarea id="form_message" name="message" class="form-control" placeholder="Voer je bericht in *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex justify-content-end">
                        <input type="submit" class="btn btn-primary btn-send" value="Send message">
                    </div>
                </div>
            </div>
        </div>
    </form>

</body>

</html>