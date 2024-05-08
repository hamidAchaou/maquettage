<!DOCTYPE html>
<html lang="fr">

<!-- Inclure l'en-tête -->
<?php include_once "../layouts/heade.php" ?>

<body class="sidebar-mini" style="height: auto;">

    <div class="wrapper">
        <!-- Navigation -->
        <?php include_once "../layouts/nav.php" ?>
        <!-- Barre latérale -->
        <?php include_once "../layouts/aside.php" ?>

        <div class="content-wrapper" style="min-height: 1302.4px;">

            <div class="content-header">
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title"> <i class="nav-icon fas fa-table"></i></h3>
                                </div>

                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="card-body">
                                            <div class="p-0 mt-2">
                                                <div class="form-group">
                                                    <label for="exampleInputProject">Patient</label>
                                                    <select name="project" class="form-control" id="exampleInputProject">
                                                        <option value="projet1">Ayman Ali</option>
                                                        <option value="projet2">Aya Mohamadin</option>
                                                        <option value="projet3">Ikram Lhwari</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-12">
                                                    <label>Nombre de Sciences</label>
                                                    <input type="number" id="numSciences" class="form-control" value="4" onchange="generateScienceInputs(this.value)" />
                                                </div>

                                                <div id="scienceInputs"></div>
                                            </div>

                                            <div class="ml-4 mb-3">
                                                <a href="./sciences.php" class="btn btn-secondary">Précédent</a>
                                                <a href="./sciences.php" class="btn btn-info">Sauvegarder</a>
                                            </div>
                                            </form>

                                        </div>
                                        <!-- /.card-body -->

                                    </div>
                                    <!-- /.card -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>
    </div>

    <!-- Inclure le pied de page -->
    <?php include_once "../layouts/footer.php" ?>

    <!-- Inclure le script -->
    <?php include_once "../layouts/script-link.php" ?>

    <script>
        function generateScienceInputs(num) {
            var scienceInputs = document.getElementById('scienceInputs');
            scienceInputs.innerHTML = '';

            for (var i = 1; i <= num; i++) {
                var div = document.createElement('div');
                div.style.display = 'flex';
                div.style.flexDirection = 'column'; // Stack label and input vertically
                div.style.marginBottom = '10px'; // Space between pairs of label-input
                var label = document.createElement('label');
                label.textContent = 'Date de la Science ' + i + ':';
                label.style.marginRight = '10px'; // Space between label and input
                var input = document.createElement('input');
                input.type = 'date';
                input.className = 'form-control';
                div.appendChild(label);
                div.appendChild(input);
                scienceInputs.appendChild(div);
            }
        }
    </script>
</body>

</html>
