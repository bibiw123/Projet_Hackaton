<?php include('../data/db.php'); ?>
<?php  include('header.php');?>



<!-- CARROUSSEL accueil --> 

<h1 class="slogan mt-5"><em>"Pour une réelle citoyenneté quelque soit la nationalité."</em></h1>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false" style="width:70%;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <?php for ($i = 1; $i < count($carousel); $i++) { ?>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $i ?>" aria-label="Slide <?= $i ?>"></button>
    <?php } ?>
  </div>
  <div class="carousel-inner mt-5">
    <div class="carousel-gradient"></div>
    <?php foreach($carousel as $key => $image){ ?>
        <div class="carousel-item <?= $key === 0 ? "active" : "" ?>">
            <img src="<?= $image['image'] ?>" class="d-block w-100" alt="<?= $image['alt'] ?>">
            <div class="carousel-caption d-none d-md-block carousel-gradient-titre">
                <h4 style="text-shadow:0 0 10px rgba(0,0,0,.9);color:#ffff;"><?= $image['title'] ?></h4>
            </div>
        </div>
    <?php } ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



<!-- NOS ACTIONS -->

<div class="container py-5">

    <div class="section-titre">
        <h2 class="taille">NOS ACTIONS</h2>
    </div>

    <div class="row">
        <?php foreach ($actions as $action) { ?>    
        <div class="col-lg-3 col-md-4 col-xs-12 my-3 d-flex">
            
            <div class="card mb-4 shadow-sm" style="height: 250px; width:100%;">
                <img class="mx-auto" style=" width: 200px;height: 200px; object-fit:scale-down;" src=<?php echo $action['image'];?>>
                <div class="card-body">
                    <h6 class="card-text text-center mb-1" style="color:#521945"><?php echo $action['titre'];?></h6>
                </div>
            </div>
           
        </div>  
        <?php } ?>      
    </div>
</div>



    <div class="section-titre">
        <h2 class="taille">QUI SOMMES-NOUS ?</h2>
    </div>

    <div class="qui-sommes-nous">
        <p class="purple">Antiraciste AFRICA lutte contre toutes les discriminations en apportant aux familles les plus démunies un soutien, un accompagnement dans l'accomplissement des démarches administratives.<br>
        AFRICA accompagne particulièrement les femmes victimes de violence en leur proposant un accompagnement social , Psychologique.<br>
        Nos actions se mènent dans le grand ensemble des 4000 logements dans la ville de La Courneuve. La ville compte une population de 43 000 habitants avec une proportion de 36% d 'étrangers.<br>
        A 15 minutes de Paris, la ville compte un taux de chômage explosif soit 27%. Le territoire est situé en politique de la ville à 87% avec un chiffre de 42%de pauvres.<br>
        Notre association qui existe depuis 35 ans est située au coeur du grand ensemble et mène inlassablement des actions sociales, citoyennes et culturelles.Depuis le début de la pandémie la pauvreté s 'est aggravée, faisant sombrer de nombreuses familles dans la misère. 
        Notre objectif :<br>
        aider les femmes à devenir des citoyennes à part entière ; les faire participer à la vie sociale de leur quartier, économique, culturelle. Nous organisons traditionnellement des repas de quartiers, des concerts, des initiatives sportives et en se basant sur ce travail nous voulons à la fois offrir un accueil dans un lieu convivial.
        (les cafés et restaurants de la ville sont extrêmement masculins) et les femmes n'y entrent pas. Avoir un lieu à soi ou l'on peut passer prendre un thé, rencontrer des femmes différentes de soi, contribue à la fois au mieux vivre ensemble et à la recherche de solidarités. 
        </p>

    </div>

<?php include('footer.php'); ?> 