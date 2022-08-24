<?php
$menu_index='';
$menu_intervention='';
if($_SERVER['REQUEST_URI']=='/index.php'){
    $menu_index='active show';

}else {
    $menu_intervention = 'active show';
}

require('db.php');
require('includes/verif_session.php');
require('includes/function.php');
$interventionsRef = $db->collection('intervention');
$intervention = $interventionsRef->document($_REQUEST['id'])->snapshot()->data();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Détails intervention</title>
    <?php require("includes/header.php") ?>

</head>
<body>


<?php require("includes/navbar.php") ?>

<div class="az-content az-content-dashboard">
    <div class="container">
        <div class="az-content-body">
            <div>
                <h2 class="az-dashboard-title">Détails intervention</h2>
            </div>
            <div class="row row-sm mg-b-20 mg-lg-b-0">
                <div class="col-lg-12 col-xl-12 mg-t-20 mg-lg-t-0">
                    <div class="card card-table-one">
                        <div class="row justify-content-end">
                            <div class="col-lg-3 col-md-4">
                                <a href="intervention.php" class="btn btn-info btn-with-icon"><i
                                            class="typcn typcn-th-list"></i> Liste des interventions</a>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <a href="modifier_intervention.php?id=<?php echo $_REQUEST['id']; ?>"
                                   class="btn btn-warning btn-with-icon"><i class="typcn typcn-pencil"></i> Modifier
                                    interventions</a>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-8">
                                <table class="table table-striped">

                                    <tr>
                                        <th>Ordre de travail</th>
                                        <td><?php echo $intervention['ordre'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Site</th>
                                        <td><?php echo $intervention['site'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Zone</th>
                                        <td><?php echo $intervention['zone'] ?></td>
                                    </tr>
                                    <tr>
                                        <th> <?php
                                            if ($intervention['site'] == 'Administration') {
                                                echo 'Bureau';
                                            } else {
                                                echo "Equipement";
                                            }
                                            ?>
                                        </th>
                                        <td> <?php echo $intervention['codemachine']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Défaut</th>
                                        <td><?php echo $intervention['defaut'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Etat</th>
                                        <td><?php
                                            if (isset($tab_status[$intervention['etat']])) {
                                                echo $tab_status[$intervention['etat']];
                                            } else {
                                                echo $intervention['etat'];
                                            } ?></td>
                                        <td>
                                    </tr>
                                    <tr>
                                        <th>Degrée d'urgence</th>
                                        <td>
                                            <?php if (isset($tab_degres[$intervention['degres']])) {
                                                $bg_color = '';
                                                if (isset($tab_color_degres[$intervention['degres']])) {
                                                    $bg_color = $tab_color_degres[$intervention['degres']];
                                                }
                                                echo "<span class='label_degres'  style='background-color: " . $bg_color . "'>";
                                                echo $tab_degres[$intervention['degres']];
                                                echo "</div>";
                                            } else {
                                                echo $intervention['degres'];
                                            } ?></td>
                                    </tr>
                                    <tr>
                                        <th>Date de création</th>
                                        <td><?php echo $intervention['createdAt']->get()->format('d/m/Y'); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Visualiser par</th>
                                        <td><?php
                                            if (isset($intervention['Views']) and !empty($intervention['Views'])) {
                                                echo "<ul>";
                                                foreach ($intervention['Views'] as $view_user) {
                                                    echo '<li>' . $view_user . '</li>';
                                                }
                                                echo "</ul>";
                                            }
                                            ?></td>
                                    </tr>
                                    <tr>
                                        <?php
                                        if (isset($intervention['photo']) and $intervention['photo'] != 'nopicture' and !empty($intervention['photo'])) {
                                            $data = $intervention['photo'];
                                            ?>
                                            <td colspan="2"><?= '<img src="data:image/gif;base64,' . $data . '" />';?></td>
                                            <?php
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <th colspan="2">Description</th>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><?php echo $intervention['desc'] ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <?php
                                if (isset($intervention['affecter']) and !empty($intervention['affecter'])) {
                                    $technicien = $intervention['affecter'];
                                } else {
                                    $technicien = $intervention['personnep'];
                                }
                                if ($user_connect['fonction'] == 'administrateur') {
                                if ($intervention['etat'] == 'todo') {
                                    //if (!isset($intervention['affecter']) || empty($intervention['affecter'])) {
                                    ?>
                                    <form action="evenement_intervention.php" method="post"
                                          id="form_affect_intervention" class="mb-3">
                                        <input type="hidden" name="id_intervention"
                                               value="<?php echo $_REQUEST['id']; ?>">
                                        <input type="hidden" name="affecter" id="input_affecter"
                                               value="<?php echo $user_connect['fullname']; ?>">
                                        <button type="submit" name="btn_affecter"
                                                class="btn btn-block btn-success">
                                            Je m'occupe de cette intervention
                                        </button>

                                    </form>
                                    <button data-toggle="dropdown" name="btn_affecter"
                                            class="btn btn-secondary btn-block">Affecter
                                        intervention <i class="icon ion-ios-arrow-down tx-11 mg-l-3"></i></button>
                                    <div class="dropdown-menu">
                                        <?php
                                        $usersRef = $db->collection('users');
                                        $query = $usersRef->orderBy('createdAt', 'DESC');
                                        $users = $query->documents();

                                        foreach ($users as $user) {
                                            ?>
                                            <a href="#" class="dropdown-item affect_user"
                                               name="<?php echo $user['fullname'] ?>"><?php echo $user['fullname'] ?></a>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <?php
                                } else {
                                    ?>
                                    <p><b>Affecté à :</b> <?php echo $technicien ?></p>

                                    <p><b>Date prise:</b>
                                        <?php
                                        if (isset($intervention['dateprise']) and $intervention['dateprise'] != '') {
                                            ?>
                                            <i class="typcn typcn-calendar"></i><?php echo extraire_date($intervention['dateprise']); ?>
                                            <i class="typcn typcn-time"></i><?php echo extraire_heure($intervention['dateprise']); ?>
                                            <?php
                                        }
                                        ?>
                                    </p>
                                    <?php
                                    if (isset($intervention['datepause']) and $intervention['datepause'] != '') {
                                        ?>
                                        <p><b>Date pause :</b>
                                            <i class="typcn typcn-calendar"></i><?php echo extraire_date($intervention['datepause']); ?>
                                            <i class="typcn typcn-time"></i><?php echo extraire_heure($intervention['datepause']); ?>
                                        </p>
                                        <?php
                                        if (isset($intervention['dureeap']) and $intervention['dureeap'] != '') {
                                            ?>
                                            <p><b>Durée de pause :</b>
                                                <?php echo $intervention['dureeap'] . ' minutes'; ?>
                                            </p>
                                            <?php
                                        }
                                    }
                                    if (isset($intervention['datefinir']) and $intervention['datefinir'] != '') {
                                        ?>
                                        <p><b>Date finir :</b>
                                            <i class="typcn typcn-calendar"></i><?php echo extraire_date($intervention['datefinir']); ?>
                                            <i class="typcn typcn-time"></i><?php echo extraire_heure($intervention['datefinir']); ?>
                                        </p>
                                        <p><b>Durée final:</b> <?php echo $intervention['dureefinal']; ?></p>
                                        <p><b>Rapport:</b> <?php echo $intervention['feedback']; ?></p>
                                        <?php
                                    }
                                    if ($technicien == $user_connect['fullname']) {
                                        if (!isset($intervention['datepause']) or $intervention['datepause'] == '') {
                                            ?>
                                            <form action="evenement_intervention.php" method="post">
                                                <input type="hidden" name="id_intervention"
                                                       value="<?php echo $_REQUEST['id']; ?>">
                                                <button type="submit" name="btn_pause"
                                                        class="btn btn-block btn-success btn_pause btn-with-icon">
                                                    <i class="typcn typcn-media-pause"></i> Pause
                                                </button>
                                            </form>
                                            <?php
                                        } else if ($intervention['etat'] == 'pause') {
                                            ?>
                                            <form action="evenement_intervention.php" method="post">
                                                <input type="hidden" name="id_intervention"
                                                       value="<?php echo $_REQUEST['id']; ?>">
                                                <button type="submit" name="btn_reprise"
                                                        class="btn btn-block btn-success btn_reprise btn-with-icon">
                                                    <i class="typcn typcn-media-play-reverse"></i> Reprise
                                                </button>
                                            </form>
                                            <?php
                                        }

                                        if ((!isset($intervention['datefinir']) or $intervention['datefinir'] == '') and $intervention['etat'] != 'todo' and $intervention['etat'] != 'pause') {
                                            ?>
                                            <form action="evenement_intervention.php" method="post">
                                                <input type="hidden" name="id_intervention"
                                                       value="<?php echo $_REQUEST['id']; ?>">
                                                <label for=""><b>Rapport:</b></label>
                                                <textarea name="feedback" class="form-control" rows="5"></textarea><br>
                                                <button type="submit" name="btn_finir_interv"
                                                        class="btn btn-block btn-primary  btn-with-icon">
                                                    <i class="typcn typcn-input-checked"></i> Finir l'intervetion
                                                </button>
                                            </form>
                                            <?php
                                        }
                                        if ($intervention['etat'] == 'done') {
                                            ?>
                                            <form action="evenement_intervention.php" method="post">
                                                <input type="hidden" name="id_intervention"
                                                       value="<?php echo $_REQUEST['id']; ?>">
                                                <button type="submit" name="btn_verifier_interv"
                                                        class="btn btn-block btn-primary  btn-with-icon">
                                                    <i class="typcn typcn-th-large"></i> Vérifier l'intervetion
                                                </button>
                                            </form>
                                            <?php
                                        }
                                    }
                                }
                                }
                                ?>
                            </div>
                        </div>

                    </div><!-- card -->
                </div><!-- col-lg -->

            </div><!-- row -->
        </div><!-- az-content-body -->
    </div>
</div><!-- az-content -->
<?php require_once 'includes/footer.php' ?>
</body>
</html>
