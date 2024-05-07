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

        <div class="content-wrapper" style="min-height: 1302.4px;">

            <div class="content-header">
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h3 class="card-title">Ajouter un brief projet</h3>
                                </div>
                                <div class="card-body p-0">
                                    <div class="bs-stepper">
                                        <div id="deliverable-form">

                                            <div class="bs-stepper-header" role="tablist">
                                                <!-- your steps here -->
                                                <div class="step" data-target="#description-part">
                                                    <button type="button" class="step-trigger" role="tab"
                                                        aria-controls="description-part" id="description-part-trigger">
                                                        <span class="bs-stepper-circle">1</span>
                                                        <span class="bs-stepper-label">Rendez-Vous</span>
                                                    </button>
                                                </div>
                                                <div class="line"></div>
                                                <div class="step" data-target="#competence-part">
                                                    <button type="button" class="step-trigger" role="tab"
                                                        aria-controls="competence-part" id="competence-part-trigger">
                                                        <span class="bs-stepper-circle">2</span>
                                                        <span class="bs-stepper-label">Patient</span>
                                                    </button>
                                                </div>
                                                <div class="line"></div>
                                                <div class="step" data-target="#affectation-part">
                                                    <button type="button" class="step-trigger" role="tab"
                                                        aria-controls="affectation-part" id="affectation-part-trigger">
                                                        <span class="bs-stepper-circle">3</span>
                                                        <span class="bs-stepper-label">Consultation</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="bs-stepper-content">
                                                <!-- your steps content here -->
                                                <div id="description-part" class="content" role="tabpanel"
                                                    aria-labelledby="description-part-trigger">
                                                    <div class="d-flex justify-content-end mt-2 mr-2">
                                                        <form class="form-inline ml-3">
                                                            <div class="input-group input-group-sm">
                                                                <input type="search"
                                                                    class="form-control form-control-lg" id="search"
                                                                    placeholder="Recherche">
                                                                <div class="input-group-append">
                                                                    <button type="button"
                                                                        class="btn btn-lg btn-default">
                                                                        <i class="fa fa-search"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <div class="card-body p-0 mt-2">
                                                        <div class="table-responsive" id="#rendezVous-table">



                                                            <table class="table table-striped" id="tuteurs-table">
                                                                <thead>
                                                                    <tr>

                                                                        <th></th>
                                                                        <th>N°Dossier</th>
                                                                        <th>Nom</th>
                                                                        <th>Prénom</th>
                                                                        <th>Téléphone</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="RendezVousTable">

                                                                </tbody>

                                                            </table>


                                                        </div>
                                                    </div>


                                                    <button class="btn btn-primary"
                                                        onclick="stepper.next()">Suivant</button>
                                                </div>
                                                <div id="competence-part" class="content" role="tabpanel"
                                                    aria-labelledby="projet-part-trigger">
                                                    <div class="d-flex">
                                                        <div class="card-body">
                                                            <table class="table table-striped projects">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <img width="99" height="99"
                                                                                src="{{ asset('example.jpg') }}">
                                                                        </td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            Numéro:
                                                                        </td>
                                                                        <td>
                                                                            123456
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            Nom:
                                                                        </td>
                                                                        <td>
                                                                            John
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            Prénom:
                                                                        </td>
                                                                        <td>
                                                                            Doe
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            Téléphone:
                                                                        </td>
                                                                        <td>
                                                                            123456789
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            CIN:
                                                                        </td>
                                                                        <td>
                                                                            ABC123
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            Adresse:
                                                                        </td>
                                                                        <td>
                                                                            123 Main Street
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            Date d'enregistrement:
                                                                        </td>
                                                                        <td>
                                                                            2024-05-07
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            Remarques:
                                                                        </td>
                                                                        <td>
                                                                            Lorem ipsum dolor sit amet, consectetur
                                                                            adipiscing elit. Sed eget mauris id justo
                                                                            eleifend faucibus. Sed vel ex velit. Sed ut
                                                                            consequat purus. Nulla facilisi.
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <input type="hidden" name="dossier_patients" value="456"
                                                        class="form-control">

                                                    <button class="btn btn-primary"
                                                        onclick="stepper.previous()">Précédent</button>
                                                    <button class="btn btn-primary"
                                                        onclick="stepper.next()">Suivant</button>
                                                </div>
                                                <div id="affectation-part" class="content" role="tabpanel"
                                                    aria-labelledby="affectation-part-trigger">
                                                    <div class="form-group col-sm-6">
                                                        <label for="date_enregistrement">Date Enregistrement:</label>
                                                        <input type="datetime-local" name="date_enregistrement"
                                                            id="date_enregistrement" class="form-control"
                                                            value="2024-05-07T12:00:00">
                                                    </div>
                                                    <script type="text/javascript">
                                                        $(document).ready(function () {
                                                            $('#date_enregistrement').datepicker();
                                                        });
                                                    </script>

                                                   

                                                    <!-- Services Field -->
                                                    <div class="form-group col-sm-6">
                                                        <label for="services_select">Nombre de seance:</label>
                                                        <br>
                                                       <input type="number" name="nombre_seance" id="nombre_seance" class="form-control" placeholder="Nombre de seance" required />
                                                    </div>
                                                    <!-- Date Consultation Field -->
                                                    <div class="form-group col-sm-6">
                                                        <label for="date_consultation">Date Consultation:</label>
                                                        <input type="datetime-local" name="date_consultation"
                                                            id="date_consultation" class="form-control"
                                                            value="2024-05-07T14:00:00">
                                                    </div>
                                                    <script type="text/javascript">
                                                        $(document).ready(function () {
                                                            $('#date_consultation').datepicker();
                                                        });
                                                    </script>
                                                    <input type="hidden" name="consultation_id" value="123">

                                                    <!-- Your 'observation' textarea -->
                                                    <div class="form-group col-sm-12 col-lg-12">
                                                        <label for="observation">Observation:</label>
                                                        <textarea name="observation" id="observation"
                                                            class="form-control" maxlength="65535"></textarea>
                                                    </div>

                                                    <!-- Your 'diagnostic' textarea -->
                                                    <div class="form-group col-sm-12 col-lg-12">
                                                        <label for="diagnostic">Diagnostic:</label>
                                                        <textarea name="diagnostic" id="diagnostic" class="form-control"
                                                            maxlength="65535"></textarea>
                                                    </div>

                                                    <!-- Your 'bilan' textarea -->
                                                    <div class="form-group col-sm-12 col-lg-12">
                                                        <label for="bilan">Bilan:</label>
                                                        <textarea name="bilan" id="bilan" class="form-control"
                                                            maxlength="65535"></textarea>
                                                    </div>

                                                    <button class="btn btn-primary"
                                                        onclick="stepper.previous()">Précédent</button>
                                                    <a href="./index.php" type="submit"
                                                        class="btn btn-primary">Ajouter</a>
                                                </div>
                                                </d>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </section>
        </div>
    </div>

    <!-- Include footer -->
    <?php include_once "../../layouts/footer.php" ?>




    <!-- Inclure le pied de page -->
    <?php include_once "../../layouts/footer.php" ?>

    </div>
    <script>
        // Add functionality for "Add Another Deliverable" button
        const addDeliverableButton = document.getElementById("addDeliverable");
        const deliverableForm = document.getElementById("deliverableForm");

        addDeliverableButton.addEventListener("click", function () {
            // Clone the existing deliverable group (including all its inputs)
            const newDeliverableGroup = deliverableForm.querySelector(".deliverable-group").cloneNode(true);

            // Clear the values of the cloned inputs to avoid pre-filled data
            newDeliverableGroup.querySelector("input").value = "";

            // Append the cloned group to the form
            deliverableForm.appendChild(newDeliverableGroup);
        });
    </script>
    <!-- Inclure le script -->
    <?php include_once "../../layouts/script-link.php" ?>
    <script>
        function addInput() {
            // Create a new input element
            var input = document.createElement("input");
            input.type = "text";
            input.className = "form-control mb-3";
            input.name = "deliverable[]"; // Using array syntax for form submission
            input.placeholder = "Nom de livrable";

            // Append the new input to the container
            document.getElementById("deliverables-container").appendChild(input);
        }
    </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#inputDescription'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#inputTravailafaire'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#inputcriterevalidation'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>

        // BS-Stepper Init
        document.addEventListener('DOMContentLoaded', function () {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })
    </script>

    <!-- Place the following <script> and <textarea> tags your HTML's <body> -->

    <script>
        document.getElementById('checkAll').addEventListener('change', function () {
            var checkboxes = document.querySelectorAll('.form-check-input');  // Select all checkboxes
            for (var i = 0; i < checkboxes.length; i++) {
                checkboxes[i].checked = this.checked;  // Set checked state based on "checkAll"
            }
        });

    </script>
    <script>
        // Get references to elements
        const addLinkButtons = document.querySelectorAll('.add-link-btn');
        const resourceList = document.querySelector('.resource-list');
        const referenceList = document.querySelector('.reference-list');

        // Function to add a new link
        function addNewLink(event) {
            const newLinkInput = event.target.parentElement.parentElement.querySelector('.new-link-input');
            const newLinkValue = newLinkInput.value.trim();
            const targetList = event.target.parentElement.parentElement.nextElementSibling;

            if (newLinkValue) {
                const linkedItem = document.createElement('li');
                linkedItem.classList.add('list-group-item', 'd-flex', 'justify-content-between', 'align-items-center');

                const linkText = document.createElement('span');
                linkText.textContent = newLinkValue;

                const removeLinkBtn = document.createElement('button');
                removeLinkBtn.classList.add('btn', 'btn-sm', 'btn-danger');
                removeLinkBtn.textContent = 'Remove';
                removeLinkBtn.addEventListener('click', function () {
                    targetList.removeChild(linkedItem);
                });

                linkedItem.appendChild(linkText);
                linkedItem.appendChild(removeLinkBtn);

                targetList.appendChild(linkedItem);

                newLinkInput.value = '';
            }
        }

        // Add event listeners to the "Add Link" buttons
        addLinkButtons.forEach(button => button.addEventListener('click', addNewLink));

        // Populate existing links based on your project data
        const existingResources = [
            { url: "https://grafikart.fr/formations/laravel", text: "https://grafikart.fr/formations/laravel" },
            { url: "https://laracasts.com/series/phpunit-testing-in-laravel", text: "https://laracasts.com/series/phpunit-testing-in-laravel" },
        ];

        const existingReferences = [
            { url: "https://www.figma.com/file/Aciw4FSMe0rRsC3x1LH3R1/biblioth%C3%A8que-website?type=design&node-id=55%3A344&mode=design&t=bXJnh73iQoHkdkdj-1", text: "https://www.figma.com/file/Aciw4FSMe0rRsC3x1LH3R1/biblioth%C3%A8que-website?type=design&node-id=55%3A344&mode=design&t=bXJnh73iQoHkdkdj-1" },
            { url: "https://m3.material.io/", text: "https://m3.material.io/" },
        ];

        // Function to populate existing links (optional)
        function populateExistingLinks(linkData, targetList) {
            linkData.forEach(link => {
                const linkedItem = document.createElement('li');
                linkedItem.classList.add('list-group-item', 'd-flex', 'justify-content-between', 'align-items-center');

                const linkText = document.createElement('span');
                linkText.textContent = link.text;

                const removeLinkBtn = document.createElement('button');
                removeLinkBtn.classList.add('btn', 'btn-sm', 'btn-danger');
                removeLinkBtn.textContent = 'Remove';
                removeLinkBtn.addEventListener('click', function () {
                    targetList.removeChild(linkedItem);
                });

                linkedItem.appendChild(linkText);
                linkedItem.appendChild(removeLinkBtn);
                targetList.appendChild(linkedItem);
            });
        }

        populateExistingLinks(existingResources, resourceList);
        populateExistingLinks(existingReferences, referenceList);
    </script>
</body>

</html>