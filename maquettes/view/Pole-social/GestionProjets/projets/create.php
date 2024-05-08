<!DOCTYPE html>
<html lang="fr">

<!-- Inclure l'en-tête -->
<?php include_once "../../../layouts/heade.php" ?>

<body class="sidebar-mini" style="height: auto;">

    <div class="wrapper">
        <!-- Navigation -->
        <?php include_once "../../../layouts/nav.php" ?>
        <!-- Barre latérale -->
        <?php include_once "../../../layouts/aside.php" ?>

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
                                    <div class="bs-stepper ">
                                        <div id="deliverable-form">

                                            <div class="bs-stepper-header" role="tablist">
                                                <!-- your steps here -->
                                                <div class="step" data-target="#description-part">
                                                    <button type="button" class="step-trigger" role="tab" aria-controls="description-part" id="description-part-trigger">
                                                        <span class="bs-stepper-circle">1</span>
                                                        <span class="bs-stepper-label">Tuteur</span>
                                                    </button>
                                                </div>
                                                <div class="line"></div>
                                                <div class="step" data-target="#competence-part">
                                                    <button type="button" class="step-trigger" role="tab" aria-controls="competence-part" id="competence-part-trigger">
                                                        <span class="bs-stepper-circle">2</span>
                                                        <span class="bs-stepper-label">Bénéficier</span>
                                                    </button>
                                                </div>
                                                <div class="line"></div>
                                                <div class="step" data-target="#affectation-part">
                                                    <button type="button" class="step-trigger" role="tab" aria-controls="affectation-part" id="affectation-part-trigger">
                                                        <span class="bs-stepper-circle">3</span>
                                                        <span class="bs-stepper-label">Entretien social</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="bs-stepper-content">
                                                <!-- your steps content here -->
                                                <div id="description-part" class="content" role="tabpanel" aria-labelledby="description-part-trigger">
                                                <div class="card-header">

<div class="col-sm-12 d-flex justify-content-between">
    <div class="col-sm-6">
        <a class="btn btn-info " href="#">

            Ajouter tuteur
        </a>
    </div>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input type="search" id="searchTuteur" class="form-control form-control-lg" placeholder="Rechercher">
            <div class="input-group-append">
                <button type="button" class="btn btn-lg btn-default">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </form>
</div>
</div>

                                <div class="card-body table-responsive  table-bordered p-0">
                                    <table class="table table-striped text-nowrap">
                                        <thead>
                                            <tr>
                                            <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Téléphone</th>
                                                <th>Email</th>
                                                <th>Adresse</th>
                                                <th>Cin</th>
                                                <th>État civil</th>
                                                <th  colspan="3" class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <td>   yasmine</td>
                                                <td>   daifane</td>
                                                <td>
                                                 060606060
                                                </td>
                                            
                                                <td>daifaney@gmail.com</td>
                                                <td>somewhere</td>
                                                <td>HH36052</td>
                                                <td>cilibatair</td>
                                            
                                                <td class="text-center">
                                                    <a href="./show.php" class='btn btn-default btn-sm'>
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                    <a href="./edit.php" class="btn btn-sm btn-default"><i class="fa-solid fa-pen-to-square"></i></a>
                                                    <button type="button" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                                </td>
                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                </div>


                            
                           
                   
                                                   
                                <div class="ml-4 mb-3 mt-3">
                                <button id="next-button" class="btn btn-info " onclick="stepper.next()">Suivant</button>
                                <a href="./index.php" class="btn btn-secondary">Annuler</a>                                

                              

                            </div>
                                                </div>
                                                <div id="competence-part" class="content" role="tabpanel" aria-labelledby="projet-part-trigger">
                                                <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="nom">Nom <span class="required-field">*</span></label>
                <input type="text" name="nom" value="Dupont" class="form-control" required maxlength="255">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="prenom">Prénom <span class="required-field">*</span></label>
                <input type="text" name="prenom" value="Jean" class="form-control" required maxlength="255">
            </div>
        </div>
    </div>

    <input type="hidden" name="tuteur_id" value="1">

    <div class="form-group">
        <label for="niveau_scolaire_id">Niveau Scolaire <span class="required-field">*</span></label>
        <select name="niveau_scolaire_id" class="form-control" required>
            <option value="1" selected>Niveau 1</option>
            <option value="2">Niveau 2</option>
            <option value="3">Niveau 3</option>
        </select>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="telephone">Téléphone</label>
                <input type="text" name="telephone" value="123456789" class="form-control" maxlength="255">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="cin">CIN</label>
                <input type="text" name="cin" value="AB123456" class="form-control" maxlength="255">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" value="example@email.com" class="form-control" maxlength="255">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="adresse">Adresse</label>
        <input type="text" name="adresse" value="123 Rue de la Liberté" class="form-control" maxlength="255">
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="date_naissance">Date de naissance <span class="required-field">*</span></label>
                <input type="date" name="date_naissance" value="1990-01-01" id="date_naissance_input" class="form-control" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="age">Age</label>
                <input type="text" name="age" value="32" id="age" class="form-control" readonly>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="sexe">Sexe <span class="required-field">*</span></label>
        <select name="sexe" class="form-control" required>
            <option value="Homme" selected>Homme</option>
            <option value="Femme">Femme</option>
        </select>
    </div>

    <div class="form-group">
        <label for="remarques">Remarques</label>
        <div contenteditable="true" class="form-control" style="min-height: 150px; max-height: 300px; overflow-y: auto;" id="remarques" name="remarques">This is a sample remark. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
        <!-- Hidden input to store the HTML content -->
        <input type="hidden" id="remarques_input" name="remarques_input">
    </div>
</div>


   
  

    <div class="row">
        <div class="col-md-6">
            <button class="btn btn-primary" onclick="stepper.previous()">Précédent</button>
    
     
            <button class="btn btn-primary" onclick="stepper.next()">Suivant</button>
        </div>
    </div>
</div>

                                                <div id="affectation-part" class="content" role="tabpanel" aria-labelledby="affectation-part-trigger">
                                                    <div class="d-flex flex-column mt-3 form-check">
                                                        <input type="checkbox" id="checkAll" class="form-check-input" id="flexCheckIndeterminate">
                                                        <label class="form-check-label" for="flexCheckIndeterminate">Tout
                                                            cocher<br>
                                                            <?php
                                                            $apprenants = [
                                                                "sarsri imrane",
                                                                "Grain Reda",
                                                                "Bouik Hussein",
                                                                "Assaid Amina",
                                                                "zaani hamza",
                                                                "FAIZ SAFAA",
                                                                "El ajoumi Mohammed aymane",
                                                                "Lharrak Adnan",
                                                                "YASMINE DAIFANE",
                                                                "BEN NASAR ADNAN",
                                                                "Achaou Hamid",
                                                                "Betroji Jalil",
                                                                "lamchatab amine",
                                                                "Boukhar Soufiane"
                                                            ];
                                                            ?>

                                                            <div class="row">
                                                                <?php foreach ($apprenants as $apprenant) : ?>
                                                                    <div class="col-sm-4 mb-2">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="apprenants[]" value="<?php echo $apprenant; ?>" checked>
                                                                            <label class="form-check-label" for="<?php echo $apprenant; ?>">
                                                                                <?php echo $apprenant; ?>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                <?php endforeach; ?>
                                                            </div>

                                                        </label>
                                                    </div>

                                                    <button class="btn btn-primary" onclick="stepper.previous()">Précédent</button>
                                                    <a href="./index.php" type="submit" class="btn btn-primary">Ajouter</a>
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
    <?php include_once "../../../layouts/footer.php" ?>




    <!-- Inclure le pied de page -->
    <?php include_once "../../../layouts/footer.php" ?>

    </div>
    <script>
        // Add functionality for "Add Another Deliverable" button
        const addDeliverableButton = document.getElementById("addDeliverable");
        const deliverableForm = document.getElementById("deliverableForm");

        addDeliverableButton.addEventListener("click", function() {
            // Clone the existing deliverable group (including all its inputs)
            const newDeliverableGroup = deliverableForm.querySelector(".deliverable-group").cloneNode(true);

            // Clear the values of the cloned inputs to avoid pre-filled data
            newDeliverableGroup.querySelector("input").value = "";

            // Append the cloned group to the form
            deliverableForm.appendChild(newDeliverableGroup);
        });
    </script>
    <!-- Inclure le script -->
    <?php include_once "../../../layouts/script-link.php" ?>
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
        document.addEventListener('DOMContentLoaded', function() {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })
    </script>

    <!-- Place the following <script> and <textarea> tags your HTML's <body> -->

    <script>
        document.getElementById('checkAll').addEventListener('change', function() {
            var checkboxes = document.querySelectorAll('.form-check-input'); // Select all checkboxes
            for (var i = 0; i < checkboxes.length; i++) {
                checkboxes[i].checked = this.checked; // Set checked state based on "checkAll"
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
                removeLinkBtn.addEventListener('click', function() {
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
        const existingResources = [{
                url: "https://grafikart.fr/formations/laravel",
                text: "https://grafikart.fr/formations/laravel"
            },
            {
                url: "https://laracasts.com/series/phpunit-testing-in-laravel",
                text: "https://laracasts.com/series/phpunit-testing-in-laravel"
            },
        ];

        const existingReferences = [{
                url: "https://www.figma.com/file/Aciw4FSMe0rRsC3x1LH3R1/biblioth%C3%A8que-website?type=design&node-id=55%3A344&mode=design&t=bXJnh73iQoHkdkdj-1",
                text: "https://www.figma.com/file/Aciw4FSMe0rRsC3x1LH3R1/biblioth%C3%A8que-website?type=design&node-id=55%3A344&mode=design&t=bXJnh73iQoHkdkdj-1"
            },
            {
                url: "https://m3.material.io/",
                text: "https://m3.material.io/"
            },
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
                removeLinkBtn.addEventListener('click', function() {
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