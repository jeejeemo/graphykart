<?php
session_start();
require_once 'elements/header.php';
require_once 'fonctions/auth.php';
require_once 'fonctions/compteur.php';

forcer_utilisateur_connecte();


$annee = (int)date('Y');
$annee_selection = empty($_GET['année'])?null :(int)$_GET['année'];
$mois_selection =empty($_GET['mois'])?null :$_GET['mois'];
if($annee_selection && $mois_selection){
    $total = nombre_vues_mois($annee_selection, $mois_selection);
    $detail = nombre_vues_detail_mois($annee_selection,$mois_selection);
}else{
	$total = nombre_vues();
}

$mois = [
    '01' => 'Janvier',
    '02' => 'Février',
    '03' => 'Mars',
    '04' => 'Avril',
    '05' => 'Mai',
    '06' => 'Juin',
    '07' => 'Juillet',
    '08' => 'Aout',
    '09' => 'Septembre',
    '10' => 'Octobre',
    '11' => 'Novembre',
    '12' => 'Décembre'
];
$annee_selection = empty($_GET['année'])?null :(int)$_GET['année'];
$mois_selection =empty($_GET['mois'])?null :$_GET['mois'];

?><div class="row">
    <div class="col-md-4">
        <div class="list-group">
            <?php for($i=0;$i<5;$i++):?>
            <a class="list-group-item <?= $annee - $i=== $annee_selection?'active' :'' ;?>" href="dashboard.php?année=<?=$annee - $i ?>"><?= $annee - $i?></a>
            <?php if($annee - $i=== $annee_selection):?>
                <div class="list-group">
                <?php foreach ($mois as $kmois => $nom):?>
                    <a class="list-group-item <?= $kmois==$mois_selection?'active' :''?>" href="dashboard.php?année=<?=$annee_selection ?>&mois=<?= $kmois?>" >

                <?=$nom ;?>
                    </a>
                <?php endforeach;?>

                </div>
            <?php endif;?>
            <?php endfor;?>

        </div>
    </div>
    <div class="col-md-8">
        <div class="card mb-4">
            <strong><?= $total ?></strong>
            <!--	Visite--><?php //if($total>1):?><!--s--><?php //endif;?><!--total-->
            Visite<?= $total>1?'s':'';?> total
        </div>
        <?php if(isset($detail)):?>
        <h2>Détails des visites pour le mois</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Jour</th>
                <th>Nombre de visite</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($detail as $ligne):?>

            <tr>
                <td><?= $ligne['jour'] ?></td>
                <td><?= $ligne['visites']?> visite<?=$ligne['visites']>1?'s':'' ?></td>
            </tr>
            <?php endforeach;?>
            </tbody>
        </table>
        <?php endif;?>
    </div>
</div>






<?php
require 'elements/footer.php';
?>
