<?php
$title = 'Update';
include_once('header.php');
require_once('functions.php');
$function = new Functions;
$function->update();
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
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="read.php">Read</a>
            </li>
        </ul>
    </nav>
    <form id="contact-form" method="POST" role="form">
        <div class="jumbotron">
            <div class="col-sm-8 mx-auto">
                <div class="row">
                    <input type="hidden" name="id" value="<?php echo $function->row['id']; ?>">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">Name *</label>
                            <input id="form_name" type="text" name="name" value="<?php echo $function->row['name']; ?>" class="form-control" placeholder="Vul je naam in *" required="required" data-error="Name is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">E-mail *</label>
                            <input id="form_email" type="email" name="email" class="form-control" value="<?php echo $function->row['email']; ?>" placeholder="Vul je e-mailaddress in *" required="required" data-error="E-mailaddress is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_message">Message *</label>
                            <textarea id="form_message" name="message" class="form-control" placeholder="Voer je bericht in *" rows="4" required="required" data-error="Please, leave us a message."><?php echo $function->row['message'];?></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex justify-content-end">
                        <input type="submit" class="btn btn-primary btn-send" value="Update">
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
<?php include_once('footer.php'); ?>