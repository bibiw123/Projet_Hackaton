<?php include('../data/db.php'); ?>
<?php  include('header.php');?>

<section class="container bg-white">

<div class="section-titre">
    <h2 class="taille" style="color:#521945">NOS EVENEMENTS</h2>
</div>
    <?php foreach ($evenements as $evenement) { ?>
        <br>
        <br>
        <div id=<?php echo $evenement['id'] ?>>
        <h4 class="card-title"><strong><?php echo $evenement["titre"]; ?></strong></h4>
        <br>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
            <img src=<?php echo $evenement['image']; ?> class="card-img-top" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-xs-6">
            <p class="card-text purple"><?php echo $evenement["description"]; ?></p>
            </div>
        </div>
        
        
        <?php } ?>
    </section>

 
<?php include('footer.php');?>