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

                                <a href="exportation_intervention.php" class="btn btn-secondary btn-with-icon"><i
                                            class="typcn typcn-export"></i> Exporter</a>
                            </div>
                        </div>

                        <div class="table-responsive mg-t-20">
                            <?php
                            ?>
                            <style>
                                td{
                                    padding: 5px;
                                }
                            </style>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Site</th>
                                    <th>Machine</th>
                                    <th>Technicien</th>
                                    <th>Date création</th>
                                    <th>Date prise</th>
                                    <th>Date pause</th>
                                    <th>Date finir</th>
                                    <th>Durée final</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php

                                $interventionsRef = $db->collection('intervention');
                                $query = $interventionsRef->orderBy('createdAt', 'DESC');
                                $interventions = $query->documents();

                                foreach ($interventions as $intervention) {
                                    ?>
                                    <tr>
                                        <td><?php echo $intervention['site'] ?></td>
                                        <td><?php if($intervention['codemachine']!='Unknown') echo $intervention['codemachine']; else echo '-'; ?></td>
                                        <td>
                                            <?php
                                            if (isset($intervention['affecter']) and !empty($intervention['affecter'])) {
                                                $technicien = $intervention['affecter'];
                                            } else {
                                                $technicien = $intervention['personnep'];
                                            }
                                            echo $technicien;
                                            ?>
                                        </td>
                                        <td><?php if($intervention['createdAt']!='') echo $intervention['createdAt']->get()->format('d-m-Y H:i'); else echo '-'; ?></td>
                                        <td><?php if($intervention['dateprise']!='') echo extraire_date($intervention['dateprise'])." ".extraire_heure($intervention['dateprise']); else echo '-'; ?></td>
                                        <td><?php if($intervention['datepause']!='') echo extraire_date($intervention['datepause'])." ".extraire_heure($intervention['datepause']); else echo '-'; ?></td>
                                        <td><?php if($intervention['datefinir']!='') echo extraire_date($intervention['datefinir'])." ".extraire_heure($intervention['datefinir']); else echo '-'; ?></td>
                                        <td><?php echo $intervention['dureefinal'] ?></td>
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
