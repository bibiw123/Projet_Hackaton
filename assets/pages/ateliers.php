<?php  include('header.php');?>
<?php include('footer.php'); ?>
<div>
    <h1>Mon super site</h1>
</div>

<div class="container">
    <div class="row">
        <?php foreach ($articles as $article) { ?>
            <div class="col-lg-3 col-md-4 col-xs-12 my-3">
                <div class="card">
                    <img src=<?php echo $article['image']; ?> class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $article['titre']; ?></h5>
                        <p class="card-text"><?php echo $article['description']; ?></p>
                        <a href="#" class="btn btn-plop">Voir Plus</a>
                    </div>
                </div>
            </div>
    <?php } ?>
    </div>
</div>

<div class="row g-0 bg-light position-relative">
    <div class="col-md-6 mb-md-0 p-md-4">
        <img src="../assets/images/argile1.jpg" class="w-100" alt="...">
    </div>
    <div class="col-md-6 p-4 ps-md-0">
        <h5 class="mt-0">Atelier enfants</h5>
        <p>Another instance of placeholder content for this other custom component. It is intended to mimic what some real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
        <a href="#" class="stretched-link">lire plus</a>
    </div>
</div>