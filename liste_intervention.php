<?php
require('db.php');
require('includes/verif_session.php');
require('includes/function.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Accueil</title>
    <?php require("includes/header.php") ?>

</head>
<body>


<?php require("includes/navbar.php") ?>

<div class="az-content az-content-dashboard">
    <div class="container">
        <div class="az-content-body">
            <div>
                <h2 class="az-dashboard-title">Liste des interventions</h2>
            </div>
            <div class="row row-sm mg-b-20 mg-lg-b-0">
                <div class="col-lg-12 col-xl-12 mg-t-20 mg-lg-t-0">
                    <div class="card card-table-one">
                        <div class="row justify-content-end">
                            <div class="col-lg-3 col-md-4">
                                <a href="ajouter_intervention.php" class="btn btn-success btn-with-icon"><i
                                            class="typcn typcn-plus"></i> Nouvelle intervention</a>
                            </div>
                        </div>
                        <div class="table-responsive mg-t-20">
                            <?php
                            ?>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Date création</th>
                                    <th>Degrée</th>
                                    <th><i class="typcn typcn-eye" style="font-size: 20px;"></i></th>
                                    <th>Site</th>
                                    <th>Défaut</th>
                                    <th>Ordre</th>
                                    <th>Status</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php

                                $interventionsRef = $db->collection('intervention');
                                if(isset($_REQUEST['etat']) and !empty($_REQUEST['etat'])){
                                    $query = $interventionsRef->where('etat',"==",$_REQUEST['etat']);
                                }
                                if(isset($_REQUEST['site']) and !empty($_REQUEST['site'])){
                                    $query = $interventionsRef->where('site',"==",$_REQUEST['site']);
                                }
                                //$query = $interventionsRef->where('etat',"==","doing")->orderBy('createdAt', 'DESC');
                                $interventions = $query->documents();

                                foreach ($interventions as $intervention) {
                                    ?>
                                    <?php
                                    $bg_color='';
                                    if (isset($tab_color_degres[$intervention['degres']])) {
                                        $bg_color=$tab_color_degres[$intervention['degres']];
                                    } ?>
                                    <tr style="background-color: <?php echo $bg_color?>">
                                        <td><?php echo $intervention['createdAt']->get()->format('d-m-Y'); ?></td>
                                        <td>
                                            <?php if (isset($tab_degres[$intervention['degres']])) {
                                                echo $tab_degres[$intervention['degres']];
                                            } else {
                                                echo $intervention['degres'];
                                            } ?>
                                        </td>

                                        <td><a href="detail_intervention.php?id=<?php echo $intervention->id() ?>" class="btn btn-secondary"><?php if (isset($intervention['Views'])) echo count($intervention['Views']); else echo "0"; ?></a></td>
                                        <td><?php echo $intervention['site'] ?></td>
                                        <td><?php echo $intervention['defaut'] ?></td>
                                        <td><?php echo $intervention['ordre'] ?></td>
                                        <td><?php
                                            if (isset($tab_status[$intervention['etat']])) {
                                                echo $tab_status[$intervention['etat']];
                                            }else{
                                                echo $intervention['etat'];
                                            } ?></td>
                                        <td>
                                            <div class="btn-icon-list float-right">
                                                <a href="detail_intervention.php?id=<?php echo $intervention->id() ?>"
                                                   class="btn btn-info btn-icon btn-sm"><i
                                                            class="typcn typcn-info-outline"></i></a>
                                                <a href="modifier_intervention.php?id=<?php echo $intervention->id() ?>"
                                                   class="btn btn-warning btn-icon btn-sm"><i
                                                            class="typcn typcn-pen"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                } ?>
                                </tbody>
                            </table>
                        </div><!-- table-responsive -->
                    </div><!-- card -->
                </div><!-- col-lg -->

            </div><!-- row -->
        </div><!-- az-content-body -->
    </div>
</div><!-- az-content -->
<?php require_once 'includes/footer.php' ?>
</body>
</html>
