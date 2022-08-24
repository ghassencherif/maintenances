<?php
require('db.php');
require('includes/verif_session.php');
require('includes/function.php');

use Google\Cloud\Firestore\FieldValue;

if (isset($_POST['btn_submit_interv'])) {

    $createdtAt = new DateTime();
    if($_POST["site"]=='Administration'){
        $code_machine=$_POST["bureau"];
    }else{
        $code_machine=$_POST["equipement"];
    }
    $data = [
        'defaut' => $_POST["defaut"],
        'desc' => $_POST["descript"],
        'degres' => $_POST["degres"],
        'ordre' => $_POST["ordre"],
        'site' => $_POST["site"],
        'zone' => $_POST["zone"],
        'codemachine' => $code_machine,
        'createdAt' => FieldValue::serverTimestamp(),
        'personnev' => $user_connect['fullname'],
        'etat' => 'todo',
    ];

    $inteventionRef = $db->collection('intervention')->newDocument();
    $inteventionRef->set($data);

    /*$insert_interv = 'insert into intervention (DIN,Ref,Rev,createdAt,defaut,degres,ordre,site,descript) values
 ("' . $_POST["DIN"] . '","' . $_POST["Ref"] . '","' . $_POST["Rev"] . '","' . $createdtAt->format('Y-m-d H:i:s') . '","' . $_POST["defaut"] . '","' . $_POST["degres"] . '","' . $_POST["ordre"] . '","' . $_POST["site"] . '","' . $_POST["descript"] . '")';

    mysqli_query($conn, $insert_interv);

    $last_id = mysqli_insert_id($conn);
    if (!empty($_FILES["photo"]["name"])) {
        $target_dir = "uploads/";
        $extension_file = strtolower(pathinfo(basename($_FILES["photo"]["name"]), PATHINFO_EXTENSION));
        $new_name = $last_id . '.' . $extension_file;
        $target_file = $target_dir . $new_name;

        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
            $up_interv = 'update intervention set photo="' . $new_name . '" where id=' . $last_id;
            mysqli_query($conn, $up_interv);
        }
    }
    header('location:detail_intervention.php?id=' . $last_id);*/
    header('location:intervention.php');

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nouvelle intervention</title>
    <?php require("includes/header.php") ?>

</head>
<body>


<?php require("includes/navbar.php") ?>

<div class="az-content az-content-dashboard">
    <div class="container">
        <div class="az-content-body">
            <div>
                <h2 class="az-dashboard-title">Nouvelle intervention</h2>
            </div>
            <div class="row row-sm mg-b-20 mg-lg-b-0">
                <div class="col-lg-12 col-xl-12 mg-t-20 mg-lg-t-0">
                    <div class="card card-table-one">
                        <div class="row justify-content-end">
                            <div class="col-lg-3 col-md-4">
                                <a href="intervention.php" class="btn btn-info btn-with-icon"><i class="typcn typcn-th-list"></i> Liste des interventions</a>
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
                                        $query = $ordretravailsRef->orderBy('nom','ASC');
                                        $ordretravails = $query->documents();

                                        foreach ($ordretravails as $ordretravail) {
                                            ?>
                                            <option value="<?php echo $ordretravail['nom'] ?>"><?php echo $ordretravail['nom'] ?></option>
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
                                            ?>
                                            <option value="<?php echo $id_degree ?>"><?php echo $nom_degree ?></option>
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
                                        $query = $defautsRef->orderBy('nom','ASC');
                                        $defauts = $query->documents();

                                        foreach ($defauts as $defaut) {
                                            ?>
                                            <option value="<?php echo $defaut['nom'] ?>"><?php echo $defaut['nom'] ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-4">
                                    <label for=""><b>Site centralisateur</b></label>
                                    <select name="site" id="intervention_site" class="form-control" required>
                                        <option value="">Sélectionner</option>
                                        <?php
                                        $sitesRef = $db->collection('Site');
                                        $query = $sitesRef->orderBy('nom','ASC');
                                        $sites = $query->documents();

                                        foreach ($sites as $site) {
                                            ?>
                                            <option value="<?php echo $site['nom'] ?>" ><?php echo $site['nom'] ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label for=""><b>Zone</b></label>
                                    <select name="zone"  id="intervention_zone" class="form-control" required>
                                        <option value="">Sélectionner</option>
                                    </select>
                                    <img src="img/spinner.svg" class="spinner_zone d-none" alt="">
                                </div>
                                <div class="col-lg-4 select_equipement">
                                    <label for=""><b>Equipement</b></label>
                                    <select name="equipement"  id="intervention_equipement" class="form-control">
                                        <option value="">Sélectionner</option>
                                    </select>
                                    <div id="div_nom_equip"></div>
                                    <img src="img/spinner.svg" class="spinner_equipement d-none" alt="">
                                </div>
                                <div class="col-lg-4 select_bureau d-none">
                                    <label for=""><b>Bureau</b></label>
                                    <select name="bureau"  id="intervention_bureau" class="form-control">
                                        <option value="">Sélectionner</option>
                                    </select>
                                    <img src="img/spinner.svg" class="spinner_bureau d-none" alt="">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-4">
                                    <label for=""><b>Photo</b></label>
                                    <input type="file" name="photo" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-12">
                                    <label for=""><b>Description</b></label>
                                    <textarea name="descript"  class="form-control" cols="30" rows="10"></textarea>
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
