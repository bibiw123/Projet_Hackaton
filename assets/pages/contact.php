<?php include('../data/db.php'); 
      include('header.php'); 


$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['message'])) {
        //var_dump($_POST);
        $message = "Bonjour vous avez reçu un message de " . $_POST['name'] . " (" . $_POST['email'] . ") : " . $_POST['message'];
        mail('africalacourneuve@gmail.com', 'sujet', $message);
    } else {
        $error = '';
    }
}

?>

    <style>

        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap');


        .btn-purple{
            background-color: #521944;
            color: #fff;

    }

        * {
            font-family : Montserrat;
    }
    </style>

</head>

<body>
<section class="container my-3">
    <h1>Contact</h1>
    <br>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2621.4546663602373!2d2.376200115714808!3d48.92578130391327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66c1b2b7bf7ad%3A0xc01fdd5ddc2b53ab!2sAFRICA!5e0!3m2!1sfr!2sfr!4v1656596456083!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="fluid"></iframe>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <ul class="list-unstyled p-5">
                    <li>
                        <p><i class="fas fa-map-marker-alt pe-2"style= "color:#521945"></i>1 rue Irène et Frédéric Joliot -Curie 93120 LA COURNEUVE</p>
                    </li>
                    <li>
                        <p><i class="fas fa-phone pe-2"style= "color:#521945"></i>01 48 36 95 74 / 06 60 11 94 91</p>
                    </li>
                    <li>
                        <p><i class="fas fa-envelope pe-2 mb-0"style= "color:#521945"></i>africalacourneuve@gmail.com</p>
                    </li>
                    <li>
                        <p><i class="fas fa-clock pe-2"style= "color:#521945"></i>Horaire d'ouverture : Du Lundi au Vendredi de 10h à 18h</p>
                    </li>
                </ul>
            </div>
        </div>
</section>
    
    <section id="contact" class="container p-3">
    <h3>Formulaire de Contact</h3>
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
            <button type="submit" class="btn btn-purple mt-3">Envoi</button>
    
        </form>
    </section>
    
    <?php include('footer.php'); ?>