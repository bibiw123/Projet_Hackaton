<?php include('../data/db.php'); ?>

<?php 
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['message'])) {
        //var_dump($_POST);
        $message = "Bonjour vous avez reçu un message de " . $_POST['name'] . " (" . $_POST['email'] . ") : " . $_POST['message'];
        mail('africalacourneuve@gmail.com
        ', 'sujet', $message);
    } else {
        $error = 'Veuillez remplir tous les champs';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $websiteTitle; ?> - Contact</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>
    
    <section id="contact">
        <p><?= !empty($error) ? $error : '' ?></p>
        <form method="POST">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" id="name" placeholder="Votre nom" name="name">
            </div>

            <div class="form-group">
                <label for="name">Prénom</label>
                <input type="text" class="form-control" id="name" placeholder="Votre prénom" name="name">
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Votre email" name="email">
            </div>
            
            <div class="form-group">
                <label for="phone">Téléphone</label>
                <input type="tel" class="form-control" id="phone" placeholder="Votre téléphone" name="phone">
            </div>
            <div>
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="3" name="message"></textarea>
            </div>

            <div class="form-group mt-3">
                <select name="option" id="pet-select mt-5">
                    <option value="">--Merci de choisir une option--</option>
                    <?php foreach ($form['option'] as $option ) { ?>
                    <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
                    <?php } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-3 -3">Envoi</button>
    
        </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>