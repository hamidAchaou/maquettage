<!DOCTYPE html>
<html lang="fr">

<!-- Inclure l'en-tête -->
<?php include_once "../../layouts/heade.php" ?>

<body class="sidebar-mini" style="height: auto;">

    <div class="wrapper">
        <!-- Navigation -->
        <?php include_once "../../layouts/nav.php" ?>
        <!-- Barre latérale -->
        <?php include_once "../../layouts/aside.php" ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Dossiers bénéficiaires</h1>
                        </div>
                        <div class="col-sm-6">
                            <a href="./create.php" type="button" class="btn btn-primary float-right">
                                <i class="fas fa-plus"></i> Ajouter une consultation
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <div class="content px-3">


                <div class="clearfix"></div>

                <div class="card-header">
                    <div class="col-sm-12 d-flex justify-content-between p-0">
                        <div>
                        </div>
                        <!-- SEARCH FORM -->
                        <form class="form-inline ml-3">
                            <div class="input-group input-group-sm">
                                <input type="search" class="form-control form-control-lg" id="search"
                                    placeholder="Recherche">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-lg btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card" id="table-container">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped" id="dossier-patients-table">
                                <thead>
                                    <tr>
                                        <th>N° dossier</th>
                                        <th>Bénéficiaire</th>
                                        <th>État de processus</th>
                                        <th colspan="3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>John Doe</td>
                                        <td>In Progress</td>
                                        <td>
                                            <a href="./show.php" class='btn btn-default btn-sm'>
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a href="./edit.php" class="btn btn-sm btn-default"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                            <button type="button" class="btn btn-sm btn-danger"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jane Smith</td>
                                        <td>Completed</td>
                                        <td>
                                            <a href="./show.php" class='btn btn-default btn-sm'>
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a href="./edit.php" class="btn btn-sm btn-default"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                            <button type="button" class="btn btn-sm btn-danger"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                    </div>

                    <div class="card-footer clearfix">
                        <div class="float-left">


                        </div>
                        <div class="float-right">
                            <div class="row">

                            </div>
                        </div>
                    </div>



                    <!-- Modal Import -->
                    <div class="modal fade" id="importModel" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Imprimer </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="http://127.0.0.1:8000/import" method="post"
                                        enctype="multipart/form-data">
                                        <input type="hidden" name="_token"
                                            value="YQv3AiqNcUn2SoqIBfgp9fxuhbqdAQNqUbSERFzA" autocomplete="off"> <input
                                            type="file" name="file" class="form-control">
                                        <br>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Annuler</button>
                                            <button class="btn btn-success">Importer</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>
                Copyright &copy; 2023-2024 CNMH.</strong> Tous droits réservés.
        </footer>
    </div>

    <link rel="modulepreload" href="http://127.0.0.1:8000/build/assets/app-e421d829.js" />
    <script type="module" src="http://127.0.0.1:8000/build/assets/app-e421d829.js"></script>
    <script src="http://127.0.0.1:8000/assets/summernote/summernote-lite.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/in1ymb8opnzm71imuxq58hv4i699ihhovjpugtacxnoqbdsy/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        // tinymce.init({
        //     selector: 'textarea',
        //     plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        //     toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        // });



        document.addEventListener('DOMContentLoaded', function () {
            var editLink = document.getElementById('editLink');
            var beneficiaireSelect = document.getElementById('beneficiaire_select');
            beneficiaireSelect.addEventListener('change', function () {
                var selectedId = beneficiaireSelect.value;
                var editUrl = '/patients/' + selectedId + '/edit';

                console.log(editUrl);
                editLink.href = editUrl;
            });
        });
    </script>



    <script>
        $(document).ready(function () {
            function fetch_data(page, search) {
                $.ajax({
                    url: "/pôle-social/entretien-social",
                    data: {
                        page: page,
                        search: search
                    },
                    success: function (data) {
                        $('#dossier-patients-table').html($(data).find('#dossier-patients-table').html());
                        $('.card-footer').html($(data).find('.card-footer').html());
                        var paginationHtml = $(data).find('.pagination').html();
                        $('.pagination').html(paginationHtml || '');
                    }
                });
            }

            $('body').on('click', '.pagination li', function (event) {
                event.preventDefault();
                var page = $(this).find('.page-link').attr('page-number');
                var search = $('#search').val();
                fetch_data(page, search);
            });

            $('body').on('keyup', '#search', function () {
                var search = $(this).val();
                var page = 1;
                fetch_data(page, search);
            });

            fetch_data(1, '');
        });

    </script>
    <script src="https://cnmh2-production.up.railway.app/build/assets/app-e421d829.js"></script>
    <script>
        $(document).ready(() => {
            // $('.menu-open').click()
        })
    </script>
    <!-- /.content-wrapper -->

    <!-- Inclure le pied de page -->
    <?php include_once "../../layouts/footer.php" ?>

    </div>

    <!-- Inclure le script -->
    <?php include_once "../../layouts/script-link.php" ?>
</body>

</html>