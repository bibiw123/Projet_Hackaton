<?php include('../data/db.php'); ?>
<?php include('header.php'); ?>


<section class="container bg-white">
<div class="section-titre">
    <h2 class="taille" style="color:#521945">NOS ATELIERS</h2>
</div>
    <?php foreach ($ateliers as $atelier) { ?>
        <br>
        <br>
        <div id=<?php echo $atelier['id'] ?>>
        <h4 class="card-title"><strong><?php echo $atelier["titre"]; ?></strong></h4>
        <br>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
            <img src=<?php echo $atelier['image']; ?> class="card-img-top" alt="Atelier enfant">
            </div>
            <div class="col-lg-6 col-md-6 col-xs-6 mt-2">
            <p class="card-text purple"><?php echo $atelier["description"]; ?></p>
            </div>
        </div>
        
        
        <?php } ?>
    </section>


 
<?php include('footer.php');?>