<?php  include('header.php');?>
<?php include('../data/db.php'); ?>

<div class="container py-8">

    <div class="section-titre">
        <h2 class="taille">HISTORIQUE</h2>
    </div>
    <div class="historique">
        Un contexte économique difficile, un climat politique inquiétant et une désespérance sociale grandissante mettent à mal de nombreuses associations.<br>
        Mais plus que jamais, AFRICA réaffirme ses principes de citoyenneté, d'égalité des droits pour tous et toutes : Français, Immigrés, Femmes et Hommes.<br>
        La naissance d'AFRICA s'est faite dans un contexte raciste, marqué par l'avènement de l'extrême-droite.<br>
        L'association est née à la Courneuve le 17 décembre 1987. Elle répondait à la volonté d'un groupe de jeunes, issus de l'immigration algérienne, de lutter contre le racisme.<br>
        A cette époque, le contexte politique était lourd : explosion du Front National et très forte banalisation de la parole raciste.<br> Des partis qui se réclamaient de la République n'hésitaient pas à sombrer dans la défense des valeurs françaises contre les immigrés jugés dangereux.<br>
        C'était aussi un positionnement extrêmement frileux de l'ensemble de la gauche qui avait abandonné la défense des immigrés au profit du « produire français »,ou encore de « la France ne peut accueillir toute la misère du monde ».<br> Nous étions seuls et isolés.<br> Même nos tentatives de rejoindre des organisations comme le MRAP avaient échoué. L'air était malsain pour nous immigrés et enfants d'immigrés qui, pourtant, avions marché dans toute la France en 1983.<br>
        Nous avons pris alors la décision de nous organiser de manière autonome pour nous défendre :
        AFRICA a été créée. 
    </div>


    <div class="row">
        <?php foreach ($historiques as $plop) { ?>    
        <div class="col-lg-3 col-md-4 col-xs-12 my-3 d-flex">
            
            <div class="" style="height: 300px; width:100%;">
                <img class="mx-auto" style=" width: 230px;height: 260px; object-fit:cover;" src=<?php echo $plop['image'];?>>
                <div class="card-body">
                    <h5 class="card-text text-center mb-1" style="color:#521945"><?php echo $plop['titre'];?></h5>
                </div>
            </div>
           
        </div>  
        <?php } ?>      
    </div>
</div>
<?php include('footer.php'); ?>