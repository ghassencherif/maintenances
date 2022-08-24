<?php
require('db.php');
require('includes/verif_session.php');
require('includes/function.php');

$interventionsRef = $db->collection('intervention');
$intervention = $interventionsRef->document($_REQUEST['id'])->snapshot()->data();

if (isset($_POST['btn_submit_interv'])) {

    $inteventionRef = $db->collection('intervention')->document($_REQUEST['id']);
    if ($_POST["site"] == 'Administration') {
        $code_machine = $_POST["bureau"];
    } else {
        $code_machine = $_POST["equipement"];
    }
    $inteventionRef->update([
        ['path' => 'defaut', 'value' => $_POST["defaut"]],
        ['path' => 'desc', 'value' => $_POST["descript"]],
        ['path' => 'degres', 'value' => $_POST["degres"]],
        ['path' => 'ordre', 'value' => $_POST["ordre"]],
        ['path' => 'site', 'value' => $_POST["site"]],
        ['path' => 'zone', 'value' => $_POST["zone"]],
        ['path' => 'codemachine', 'value' => $code_machine],
    ]);


    /* if (!empty($_FILES["photo"]["name"])) {
         $target_dir = "uploads/";
         $extension_file = strtolower(pathinfo(basename($_FILES["photo"]["name"]), PATHINFO_EXTENSION));
         $new_name = $row_inter['id_interv'] . '.' . $extension_file;
         $target_file = $target_dir . $new_name;

         if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
             $up_interv = 'update intervention set photo="' . $new_name . '" where id=' . $row_inter['id_interv'];
             mysqli_query($conn, $up_interv);
         }
     }*/
    header('location:detail_intervention.php?id=' . $_REQUEST['id']);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Modifier intervention</title>
    <?php require("includes/header.php") ?>

</head>
<body>


<?php require("includes/navbar.php") ?>

<div class="az-content az-content-dashboard">
    <div class="container">
        <div class="az-content-body">
            <div>
                <h2 class="az-dashboard-title">Modifier intervention</h2>
            </div>
            <div class="row row-sm mg-b-20 mg-lg-b-0">
                <div class="col-lg-12 col-xl-12 mg-t-20 mg-lg-t-0">
                    <div class="card card-table-one">
                        <div class="row justify-content-end">
                            <div class="col-lg-3 col-md-4">
                                <a href="intervention.php" class="btn btn-info btn-with-icon"><i
                                            class="typcn typcn-th-list"></i> Liste des interventions</a>
                            </div>
                        </div>
                        <form method="post" enctype="multipart/form-data">

                            <div class="row  mb-2 mt-3">
                                <div class="col-lg-4">
                                    <label for=""><b>Ordre de travail</b></label>
                                    <select name="ordre" class="form-control" required>
                                        <option value="">Sélectionner</option>
                                        <?php
                                        $ordretravailsRef = $db->collection('ordretravail');
                                        $query = $ordretravailsRef->orderBy('nom', 'ASC');
                                        $ordretravails = $query->documents();

                                        foreach ($ordretravails as $ordretravail) {
                                            $selected = '';
                                            if ($ordretravail['nom'] == $intervention['ordre']) {
                                                $selected = 'selected';
                                            }
                                            ?>
                                            <option value="<?php echo $ordretravail['nom'] ?>" <?php echo $selected ?>><?php echo $ordretravail['nom'] ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label for=""><b>Degrée d'urgence</b></label>
                                    <select name="degres" class="form-control" required>
                                        <option value="">Sélectionner</option>
                                        <?php
                                        foreach ($tab_degres as $id_degree => $nom_degree) {
                                            $selected = '';
                                            if ($id_degree == $intervention['degres']) {
                                                $selected = 'selected';
                                            }
                                            ?>
                                            <option value="<?php echo $id_degree ?>" <?php echo $selected ?>><?php echo $nom_degree ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label for=""><b>Type de défaut</b></label>
                                    <select name="defaut" class="form-control" required>
                                        <option value="">Sélectionner</option>
                                        <?php
                                        $defautsRef = $db->collection('defaut');
                                        $query = $defautsRef->orderBy('nom', 'ASC');
                                        $defauts = $query->documents();

                                        foreach ($defauts as $defaut) {
                                            $selected = '';
                                            if ($defaut['nom'] == $intervention['defaut']) {
                                                $selected = 'selected';
                                            }
                                            ?>
                                            <option value="<?php echo $defaut['nom'] ?>" <?php echo $selected ?>><?php echo $defaut['nom'] ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-4">
                                    <label for=""><b>Site centralisateur</b></label>
                                    <select name="site" class="form-control" id="intervention_site" required>
                                        <option value="">Sélectionner</option>
                                        <?php
                                        $sitesRef = $db->collection('Site');
                                        $query = $sitesRef->orderBy('nom', 'ASC');
                                        $sites = $query->documents();

                                        foreach ($sites as $site) {
                                            $selected = '';
                                            if ($site['nom'] == $intervention['site']) {
                                                $selected = 'selected';
                                            }
                                            ?>
                                            <option value="<?php echo $site['nom'] ?>" <?php echo $selected ?>><?php echo $site['nom'] ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label for=""><b>Zone</b></label>
                                    <select name="zone" id="intervention_zone" class="form-control" required>
                                        <option value="">Sélectionner</option>
                                        <?php
                                        $sitesRef = $db->collection('zone');
                                        $query = $sitesRef->where('site', '=', $intervention['site']);
                                        $zones = $query->documents();

                                        foreach ($zones as $zone) {
                                            $selected = '';
                                            if ($zone['nom'] == $intervention['zone']) {
                                                $selected = 'selected';
                                            }
                                            ?>
                                            <option value="<?php echo $zone['nom'] ?>" <?php echo $selected ?>><?php echo $zone['nom'] ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                    <img src="img/spinner.svg" class="spinner_zone d-none" alt="">
                                </div>
                                <?php
                                if ($intervention['site'] == 'Administration') {
                                    $show_equip = 'd-none';
                                    $show_bureau = '';
                                } else {
                                    $show_equip = '';
                                    $show_bureau = 'd-none';
                                }
                                ?>
                                <div class="col-lg-4 select_bureau  <?php echo $show_bureau ?>">
                                    <label for=""><b>Bureau</b></label>
                                    <select name="bureau" id="intervention_bureau" class="form-control">
                                        <option value="">Sélectionner</option>
                                        <?php
                                        $bureauxRef = $db->collection('Bureau');
                                        $query = $bureauxRef->where('zone', '=', $intervention['zone']);
                                        $bureaux = $query->documents();

                                        foreach ($bureaux as $bureau) {
                                            $selected = '';
                                            if ($bureau['ref'] == $intervention['codemachine']) {
                                                $selected = 'selected';
                                            }
                                            ?>
                                            <option value="<?php echo $bureau['ref'] ?>" <?php echo $selected ?>><?php echo $bureau['nom'] ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                    <img src="img/spinner.svg" class="spinner_bureau d-none" alt="">
                                </div>

                                <div class="col-lg-4 select_equipement <?php echo $show_equip ?>">
                                    <label for=""><b>Equipement</b></label>
                                    <select name="equipement" id="intervention_equipement" class="form-control">
                                        <option value="">Sélectionner</option>
                                        <?php
                                        $equipementsRef = $db->collection('equipements');
                                        $query = $equipementsRef->where('zone', '=', $intervention['zone']);
                                        $equipements = $query->documents();

                                        foreach ($equipements as $equipement) {
                                            $selected = '';
                                            if ($equipement['codeint'] == $intervention['codemachin']) {
                                                $selected = 'selected';
                                            }
                                            ?>
                                            <option value="<?php echo $equipement['codeint'] ?>" nom="<?php echo $equipement['nom'] ?>" <?php echo $selected ?>><?php echo $equipement['codeint'] ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                    <div id="div_nom_equip"></div>
                                    <img src="img/spinner.svg" class="spinner_equipement d-none" alt="">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-4">
                                    <label for=""><b>Photo</b></label>
                                    <input type="file" name="photo" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-12">
                                    <label for=""><b>Description</b></label>
                                    <textarea name="descript" class="form-control" cols="30"
                                              rows="10"><?php echo $intervention['desc'] ?></textarea>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-4">
                                    <button class="btn btn-success" name="btn_submit_interv">Enregistrer</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- card -->
                </div><!-- col-lg -->

            </div><!-- row -->
        </div><!-- az-content-body -->
    </div>
</div><!-- az-content -->
<?php require_once 'includes/footer.php' ?>
</body>
</html>
