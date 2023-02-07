
<div class="container-fluid">

    <br><br><br><br>
    <div class="row">


        <div class="col">
            <form class="form-group mx-auto" action="<?php print $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data" style="width: 80%;">
                <legend>Vos informations :</legend>

                <div class="row">
                    <div class="col-md-6">
                        <label for="login">Login : </label>
                        <input name="login" class="form-control" type="text" placeholder="Entrez votre login">
                        <?php
                        if (isset($_POST['submit_form'])) {
                            if (empty($login)) {
                                print '<p class="text-danger fw-bold bg-light rounded">Veuillez entrer le login.</p>';
                            }
                        }
                        ?>
                    </div>

                    <div class="col-md-6">
                        <label for="pwd">Password : </label>
                        <input name="pwd" class="form-control" type="password" placeholder="Entrez votre mot de passe">
                        <?php
                        if (isset($_POST['submit_form'])) {
                            if (empty($pwd)) {
                                print '<p class="text-danger fw-bold bg-light rounded">Veuillez entrer votre mot de passe</p>';
                            }
                        }
                        ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label for="email">Email : </label>
                        <input name="email" class="form-control" type="email" placeholder="Entrez votre email">
                        <?php
                        if (isset($_POST['submit_form'])) {
                            if(empty($email)) {
                                print '<p class="text-danger fw-bold bg-light rounded">Veuillez entrer votre e-mail</p>';
                            }
                        }
                        ?>
                    </div>

                    <div class="col-md-6">
                        <label for="age">Âge : </label>
                        <input name="age" class="form-control" type="number" placeholder="Entrez votre age">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label for="address">Adresse :</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="numéro et adresse">
                    </div>

                    <div class="col-md-6">
                        <label for="country">Pays : </label>
                        <select class="form-control" name="country">
                            <option value="Allemagne">Allemagne</option>
                            <option value="Autriche">Autriche</option>
                            <option value="Belgique">Belgique</option>
                            <option value="Bulgarie">Bulgarie</option>
                            <option value="Croatie">Croatie</option>
                            <option value="Danemark">Danemark</option>
                            <option value="Espagne">Espagne</option>
                            <option value="France">France</option>
                            <option value="Grèce">Grèce</option>
                            <option value="Irlande">Irlande</option>
                            <option value="Italie">Italie</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Paysbas">Pays-Bas</option>
                            <option value="Pologne">Pologne</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Républiquetchèque">République-tchèque</option>
                            <option value="Roumanie">Roumanie</option>
                            <option value="Slovaquie">Slovaquie</option>
                            <option value="Slovénie">Slovénie</option>
                            <option value="Suède">Suède</option>
                            <option value="Turquie">Turquie</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label for="telephone">Téléphone : </label>
                        <input name="telephone" class="form-control" type="tel" placeholder="Entrez votre numéro">
                    </div>

                </div>


                <div class="row">
                    <div class="col-md-6">
                        <br><label for="comment">Un commentaire :</label>
                        <br>
                        <textarea class="form-control" name="comment" rows="3" cols="25" id="comment"
                                  placeholder="Entrez vos remarques "></textarea>
                    </div>

                    <div class="col-md-6">
                        <br><label for="file">Ajouter une photo de votre vermicomposteur :</label><br>
                        <input type="file" class="form-control" name="file" accept="image/png,image/jpeg">
                    </div>
                </div>

                <br>

                <div class="row">
                    <div>
                        <p>Voulez-vous recevoir un courrier explicatif : <label for="letter1">Oui </label>
                            <input type="radio" id="yesNews" name="letter" value="Oui">
                            <label for="Newsletter2">Non </label>
                            <input type="radio" id="NoNews" name="letter" value="Non"></p>

                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col md-6">
                        <button type="submit" name="submit_form" id=submit" class="btn btn-success">Valider</button>
                        <button type="reset" class="btn btn-secondary">Effacer</button>
                    </div>

                </div>

            </form>

            <?php
            if(isset($_POST['submit_form'])){
                extract($_POST, EXTR_OVERWRITE);
                if(!empty($login) && !empty($pwd) && !empty($email)){
                    print '<div class="row mx-auto"><br><br><br>';
                    print '<button class="btn btn-success mx-auto" style="width: 30%"><a href="./images/pdf.pdf" target="_blank">Télécharger le pdf</a></button>';
                    print '</div>';
                }

            }

            ?>

        </div>

        <div class="col">
            <img class="rounded mx-auto d-block" src="../images/worm.png"  style="width: 30%">

            <?php
            if (isset($_POST['submit_form'])) {
                extract($_POST, EXTR_OVERWRITE);
                if (!empty($login) && !empty($pwd) && !empty($email)) {


                    print '<div class="row mx-auto m-4"><table class="table table-success table-striped rounded ">';
                    print '<thead>Récapitulatif : </thead>';
                    print '<tbody>';
                    print '<tr class="table-success"><th scope="col">Login</th><th scope="col">Password</th><th scope="col">Email</th></tr>';
                    print '<tr class="table-success"><td>' . $login .'</td>';
                    print '<td>' . $pwd .'</td>';
                    print '<td>' . $login .'</td></td>';

                    if(!empty($age) && !empty($address) && !empty($country)){
                        print '<tr class="table-success"><th scope="col">age</th><th scope="col">adresse</th><th scope="col">pays</th></tr>';
                        print '<tr class="table-success"><td>' . $age .'</td>';
                        print '<td>' . $address .'</td>';
                        print '<td>' . $country .'</td></td>';
                    }
                    if(!empty($telephone) && !empty($comment) && !empty($letter)){
                        print '<tr class="table-success"><th scope="col">Telephone</th><th scope="col">Commentaire</th><th scope="col">Choix lettre</th></tr>';
                        print '<tr class="table-success"><td>' . $telephone .'</td>';
                        print '<td>' . $comment .'</td>';
                        print '<td>' . $letter .'</td></td>';
                    }
                    print '</tbody>';
                    print '</table></div>';
                }
                ?>



                <div class="row">

                    <p>
                        <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                            boostrap - Table
                        </button>
                    </p>
                    <div style="min-height: 120px;">
                        <div class="collapse collapse-horizontal" id="collapseWidthExample">
                            <div class="card card-body" style="width: 300px;">
                                <p>
                                    Utilisation de Boostrap Table : <button type="button" class="btn btn-info"><a href="https://getbootstrap.com/docs/5.2/content/tables/" target="_blank">Lien Bootstrap Tables</a></button><br>
                                    Récupération des données entrées dans le formulaire, insérées dans une table et mise en forme avec Boostrap.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            <?php
                print '<div class="row">';
                /* https://www.w3schools.com/php/php_file_upload.asp */
                $target_dir = "./uploads/";
                $target_file = $target_dir . basename($_FILES["file"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                if (isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["file"]["tmp_name"]);

                    if ($check !== false) {
                        echo "Le fichier est une image : " . $check["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                        echo "Erreur : le fichier n'est pas une image.";
                        $uploadOk = 0;
                    }

                }
                if(!empty($imageFileType)){
                    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                        echo "<br>Désolé, seuls les formats JPG, JPEG, PNG et GIF sont autorisés.";
                        $uploadOk = 0;
                    }

                    if (file_exists($target_file)) {
                        echo "<br>Désolé, le fichier a déjà été chargé.";
                        $uploadOk = 0;
                    }
                }


                if ($uploadOk == 0) {
                    echo "<br>Erreur lors du chargement du fichier.";
                } else {
                    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                        echo "Le fichier : " . htmlspecialchars(basename($_FILES["file"]["name"])) . " a été chargé correctement.";
                        print '<br><p class="mx-auto">Fichier uploadé : </p><br><img class="mx-auto" style="width: 70%" src="../uploads/' . htmlspecialchars(basename($_FILES["file"]["name"])) . '">';
                    } else {
                        echo "<br>Pas de fichier chargé par l'utilisateur.";
                    }

                }
            }

            print '</div>';

            ?>



        </div>


    </div>


    <div class="row">
        <img src="../images/info_poubelle.png" alt="nouveau schéma de collecte" style="width: 70%;" class="mx-auto m-4">
    </div>


</div>


