    $(document).ready(function() {
        $(".edit").click(function(e) {
            e.preventDefault();
            console.log($(this).parent().parent().siblings());
            $(this).parent().parent().attr('id', 'actions');
            $(this).parent().parent().siblings().addClass('editable');

            var id = $(this).attr("val");
            var link = $(this).attr("lien");
            var token = $(this).attr('token');
            var method = $(this).attr('method');

            $(".editable").each(function(index, element) {
                if ($(this).hasClass("selectable")) {
                    var selection = $("#selection").html();
                    $(this).html(selection);
                } else if ($(this).hasClass("state")) {
                    var states = "<select class='form-control fillable'><option value='1'>activer</option><option value='0'>Desactiver</option></select>";
                    $(this).html(states);
                } else {
                    var val = $.trim($(this).text());
                    $(this).html("<input type='text' class='form-control fillable' value='" + val + "' id='field" + index + "'>");
                }

            });

            $(this).hide();
            $("#delete").hide();
            $("#actions").html("<a id='save'></a>");
            $("#actions").append("<a id='dismiss'></a>");
            $("#save").addClass('btn btn-outline-info btn-sm');
            $("#save").html('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>');
            $("#dismiss").addClass('btn btn-outline-danger btn-sm');
            $("#dismiss").html('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-octagon table-cancel"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>');


            $("#save").click(function(e) {
                e.preventDefault();
                var fields = [];
                var reponse = {};

                var block_ele = $(this).closest('.card');
                $(block_ele).block({
                    message: '<i class="fas fa-spin fa-sync text-white"></i>',
                    overlayCSS: {
                        backgroundColor: '#000',
                        opacity: 0.5,
                        cursor: 'wait'
                    },
                    css: {
                        border: 0,
                        padding: 0,
                        backgroundColor: 'transparent'
                    }
                });

                var errors = 0;
                $(".fillable").each(function(index, element) {
                    if ($(this).val() == "") {
                        $(this).addClass("is-invalid");
                        errors++;
                    } else fields.push($(this).val());
                });

                if (errors > 0) {
                    toastr.warning("Veuillez completer tous les champs", 'Erreur', { "progressBar": true });
                    $(block_ele).unblock();
                } else {
                    $.post(link, {
                            id: id,
                            _token: token,
                            _method: method,
                            champs: fields
                        },
                        function(data, textStatus, jqXHR) {
                            if (jqXHR.done()) {
                                if (data === "ok") {
                                    toastr.success('Element modifié avec succè!', 'Succès', { "progressBar": true });
                                    $(block_ele).unblock();
                                    setTimeout(() => {
                                        location.reload(true);
                                    }, 1500);
                                } else toastr.warning('Echec veuillez réesayer', 'Succès', { "progressBar": true });
                                console.log(data)
                            } else toastr.warning(textStatus, 'Erreur', { "progressBar": true });

                        }
                    );
                }
                console.info(fields);
            });

            $("#dismiss").click(function(e) {
                e.preventDefault();
                location.reload(true);
            });

        });

        $(".delete").click(function(e) {
            e.preventDefault();
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'mr-2 btn btn-danger'
                },
                buttonsStyling: false,
            })

            swalWithBootstrapButtons.fire({
                title: 'Confirmation',
                text: "Voulez vous vraiment supprimer l'élément?",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Supprimer',
                cancelButtonText: 'Annuler',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    var link = $(this).attr('href');
                    $.post(link, {
                            _method: $(this).attr("method"),
                            _token: $(this).attr("token"),
                        },
                        function(data) {
                            if (data === "deleted") {
                                swalWithBootstrapButtons.fire(
                                    'Succès!',
                                    'Element supprimé avec succès.',
                                    'success'
                                )
                                setTimeout(() => {
                                    location.reload(true);
                                }, 1500);
                            } else {
                                swalWithBootstrapButtons.fire(
                                    'Erreur',
                                    "Une erreur s'est produite veuillez réessayer :)",
                                    'error'
                                )
                            }
                        });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swalWithBootstrapButtons.fire(
                        'Annulé',
                        'Vous avez annulé votre requete :)',
                        'error'
                    )
                }
            })
        });


        $(document).on('submit', '#form', function(e) {
            e.preventDefault();
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'mr-2 btn btn-danger'
                },
                buttonsStyling: false,
            })

            var errors = 0;
            $(".form-control").each(function(index, val) {
                if ($(this).val() == "") {
                    errors++;
                    $(this).addClass('is-invalid');
                }
            });
            errors = 0;

            if (errors > 0) {
                toastr.warning('Veuillez completer tous les champs', 'Erreur', { "progressBar": true });
            } else {
                $.ajax({
                        method: $(this).attr('method'),
                        url: $(this).attr('action'),
                        data: $(this).serialize(),
                    })
                    .done(function(data) {
                        if (data === "saved") {
                            swalWithBootstrapButtons.fire(
                                "Succès",
                                'Valeur enregistré avec succès.',
                                'success'
                            );
                            setTimeout(() => {
                                location.reload(true);
                            }, 1500);
                        } else {
                            swalWithBootstrapButtons.fire(
                                'Erreur',
                                "Une erreur s'est produite veuillez réessayer :)",
                                'error'
                            )
                        }

                    })
                    .fail(function(data) {
                        swalWithBootstrapButtons.fire(
                            'Erreur',
                            "Une erreur s'est produite veuillez réessayer",
                            'error'
                        )
                    });
            }
        });


        // $("#disable").click(function(e) {
        //     e.preventDefault();
        //     var lien = $(this).attr("lien");
        //     var id = $(this).attr("val");
        //     var token = $(this).attr("token");
        //     $.ajax({
        //         type: "POST",
        //         url: lien,
        //         data: { id: id, _token: token },
        //         success: function(response) {
        //             console.log(response);
        //         }
        //     });
        // });

    });