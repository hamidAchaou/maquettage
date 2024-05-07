<!DOCTYPE html>
<html lang="fr">

<!-- Include the header -->
<?php include_once "../layouts/heade.php" ?>

<body class="sidebar-mini" style="height: auto;">

    <div class="wrapper">
        <!-- Navigation -->
        <?php include_once "../layouts/nav.php" ?>
        <!-- Sidebar -->
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
                                        <div class="card card-default">

                                            <div class="steps">
                                                <div class="md-stepper-horizontal orange">
                                                    <div class="md-step done">
                                                        <div class="md-step-circle"><span>1</span></div>
                                                        <div class="md-step-title">Rendez-Vous</div>
                                                        <div class="md-step-bar-left"></div>
                                                        <div class="md-step-bar-right"></div>
                                                    </div>
                                                    <div class="md-step done">
                                                        <div class="md-step-circle"><span>2</span></div>
                                                        <div class="md-step-title">Patient</div>
                                                        <div class="md-step-bar-left"></div>
                                                        <div class="md-step-bar-right"></div>
                                                    </div>
                                                    <div class="md-step active ">
                                                        <div class="md-step-circle"><span>3</span></div>
                                                        <div class="md-step-title">Consultation</div>
                                                        <div class="md-step-bar-left"></div>
                                                        <div class="md-step-bar-right"></div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="card-body p-0 mt-2">
                                                <div class="form-group col-12">
                                                    <label>Select Apprenants</label>
                                                    <select class="form-control" multiple>
                                                        <option>Apprenant 1</option>
                                                        <option>Apprenant 2</option>
                                                        <option>Apprenant 3</option>
                                                        <option>Apprenant 4</option>
                                                        <option>Apprenant 5</option>
                                                        <option>Apprenant 6</option>
                                                        <option>Apprenant 7</option>
                                                        <option>Apprenant 8</option>
                                                        <option>Apprenant 9</option>
                                                        <option>Apprenant 10</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-12">
                                                    <label>Nombre du sicences</label>
                                                    <input type="number" id="numSciences" class="form-control" value="4" onchange="generateScienceInputs(this.value)" />
                                                </div>

                                                <div id="scienceInputs"></div>
                                            </div>

                                            <div class="ml-4 mb-3">
                                                <a href="./patientInfo.php" class="btn btn-secondary">Previous</a>
                                                <a href="./index.php" class="btn btn-info">Save</a>
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

    <!-- Include the footer -->
    <?php include_once "../layouts/footer.php" ?>

    </div>

    <!-- Include the script -->
    <?php include_once "../layouts/script-link.php" ?>

    <script>
        function generateScienceInputs(num) {
            var scienceInputs = document.getElementById('scienceInputs');
            scienceInputs.innerHTML = '';

            for (var i = 1; i <= num; i++) {
                var input = document.createElement('input');
                input.type = 'date';
                input.className = 'form-control';
                input.placeholder = 'Date of Science ' + i;
                scienceInputs.appendChild(input);
            }
        }
    </script>
</body>

</html>
