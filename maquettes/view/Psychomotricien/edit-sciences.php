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
                                                <div style="display: flex; flex-direction: column; margin-bottom: 10px;">
                                                    <label style="margin-right: 10px;">Date de la Science :</label>
                                                    <input type="date" class="form-control" value="2024-03-02">
                                                </div>

                                                <div id="scienceInputs"></div>
                                            </div>

                                            <div class="ml-4 mb-3">
                                                <a href="./sciences.php" class="btn btn-secondary">Précédent</a>
                                                <button type="submit" class="btn btn-info" onclick="saveSciences()">Sauvegarder</button>
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
</body>

</html>