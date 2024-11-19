<form action="" class="container" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Nom <span class="text-danger">*</span></label>
                    <input type="text" name="nom" value="<?= isset($b) ? $b->nom : '' ?>" required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Prix <span class="text-danger">*</span></label>
                    <input type="number" min="0" name="prix" value="<?= isset($b) ? $b->prix : '' ?>" required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Emplacement <span class="text-danger">*</span></label>
                    <input type="text" name="lieu" value="<?= isset($b) ? $b->lieu : '' ?>" required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Superficie (m<sup>2</sup>) <span class="text-danger">*</span></label>
                    <input type="number" min="0" step="0.01" name="superficie" value="<?= isset($b) ? $b->superficie : '' ?>" required class="form-control">
                </div>
                <div class="form-group col-md-<?= isset($b) ? '12' : '6' ?>">
                    <label for="">Description <span class="text-danger">*</span></label>
                    <textarea name="description" class="form-control" required><?php if(isset($b))  echo $b->description; ?>
                    </textarea>
                </div>
                <?php if (isset($b)) : ?>
                    <div class="col-md-6">
                        <img src="images/<?= $b->image ?>" id="img_cible" width="400" height="200" alt="">
                    </div>
                <?php endif; ?>
                <div class="form-group col-md-6">
                    <label for="">Image <?php if (!isset($b)) : ?> <span class="text-danger">*</span> <?php endif; ?></label>
                    <input type="file" id="img" name="image" <?= !isset($b) ? 'required' : '' ?> class="form-control">
                </div>

            </div>
            <?php if ($_GET['type'] == "edit") : ?>
                <button class="btn btn-warning mt-3" type="submit" name="modifier">Modifier</button>
            <?php else : ?>
                <button class="btn btn-success mt-3" type="submit" name="ajouter">Ajouter</button>
            <?php endif; ?>
        </form>

        
<!-- traitement de l'image en javascript  -->

<script>
    document.getElementById("img").addEventListener("change", (event) => {
        const file = event.target.files[0];

        // on verifie si l'element est reellement une image 
        if (!file || !file.type.startsWith("image/")) {
            alert("Veuillez selectionner une image");
            event.target.src = "";
            return;
        }

        const reader = new FileReader();

        reader.onload = function(e) {
            let imgSrc = e.target.result;

            // et on change l'image de la chambre au niveau de l'affichage 
            document.getElementById("img_cible").src = imgSrc;
        }

        reader.readAsDataURL(file);
    })
</script>