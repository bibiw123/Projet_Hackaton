<?php include('../data/db.php'); ?>
<?php  include('header.php');?>

<section class="container bg-white">
<div class="section-titre">
    <h2 class="taille" style="color:#521945">NOS COURS</h2>
</div>
    <?php foreach ($cours as $cours) { ?>
        <br>
        <br>
        <div id=<?php echo $cours['id'] ?>>
        <h4 class="card-title"><strong><?php echo $cours["titre"]; ?></strong></h4>
        <br>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
            <img src=<?php echo $cours['image']; ?> class="card-img-top" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-xs-6 mt-2">
            <p class="card-text purple"><?php echo $cours["description"]; ?></p>
            </div>
        </div>
        
        <?php } ?>
    </section>



<?php include('footer.php');?>