$(document).ready(function () {
    $('body').on('change', '#intervention_site', function () {

        var site = $(this).val();

        $.ajax({
            url: 'liste_zone_site.php',
            type: 'POST',
            data: 'site=' + site,
            beforeSend: function (xhr) {
                $('.spinner_zone').removeClass('d-none');
                if (site == 'Administration') {
                    $('.spinner_bureau').removeClass('d-none');

                    $('.select_equipement').addClass('d-none');
                    $('#intervention_equipement').attr('required', false);
                    $('#intervention_equipement').html('<option value="">Sélectionner</option>');

                    $('.select_bureau').removeClass('d-none');
                    $('#intervention_bureau').attr('required', true);
                    $('#intervention_bureau').html('<option value="">Sélectionner</option>');
                } else {
                    $('.spinner_equipement').removeClass('d-none');

                    $('.select_equipement').removeClass('d-none');
                    $('#intervention_equipement').attr('required', true);
                    $('#intervention_equipement').html('<option value="">Sélectionner</option>');

                    $('.select_bureau').addClass('d-none');
                    $('#intervention_bureau').attr('required', false);
                    $('#intervention_bureau').html('<option value="">Sélectionner</option>');
                }

            },
            success: function (html) {
                $('.spinner_zone').addClass('d-none');
                $('#intervention_zone').html(html);

                if (site == 'Administration') {
                    $('.spinner_bureau').addClass('d-none');
                } else {
                    $('.spinner_equipement').addClass('d-none');
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
            }
        });

    });
    $('body').on('click', '.affect_user', function () {
        var nom_user = $(this).attr('name');
        $('#input_affecter').val(nom_user);
        if (nom_user != '') {
            $('#form_affect_intervention').submit();
        }
    });
    $('body').on('change', '#intervention_equipement', function () {
        $('#div_nom_equip').html('');
        if($(this).val()!=''){
        var nom=$('option:selected', this).attr('nom');
        $('#div_nom_equip').html(nom);
        }

    });
    $('body').on('change', '#intervention_zone', function () {

        var site = $('#intervention_site').val();
        var zone = $(this).val();
        if (site == 'Administration') {
            $.ajax({
                url: 'liste_bureau_zone.php',
                type: 'POST',
                data: 'zone=' + zone,
                beforeSend: function (xhr) {
                    $('.spinner_bureau').removeClass('d-none');

                },
                success: function (html) {
                    $('.spinner_bureau').addClass('d-none');
                    $('#intervention_bureau').html(html);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                }
            });
        } else {
            $.ajax({
                url: 'liste_equipement_zone.php',
                type: 'POST',
                data: 'zone=' + zone,
                beforeSend: function (xhr) {
                    $('.spinner_equipement').removeClass('d-none');

                },
                success: function (html) {
                    $('.spinner_equipement').addClass('d-none');
                    $('#intervention_equipement').html(html);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                }
            });
        }


    });
});
function load_courbe_disponibilite(nb_total_heur) {
    $.ajax({
        url: 'courbe_disponibilite_equipement.php',
        type: 'POST',
        data: 'nb_total_heur=' + nb_total_heur,
        beforeSend: function (xhr) {
            $('.spinner_dispo_equip').removeClass('d-none')
        },
        success: function (html) {
            $('.spinner_dispo_equip').addClass('d-none')
            $('.contenu_disponibilite').html(html);
        },
        error: function (jqXHR, textStatus, errorThrown) {
        }
    });

}
function load_courbe_tmr() {
    $.ajax({
        url: 'courbe_tmr.php',
        type: 'POST',
        beforeSend: function (xhr) {
            $('.spinner_tmr').removeClass('d-none');
        },
        success: function (html) {
            $('.spinner_tmr').addClass('d-none')
            $('.contenu_tmr').html(html);
        },
        error: function (jqXHR, textStatus, errorThrown) {
        }
    });
}