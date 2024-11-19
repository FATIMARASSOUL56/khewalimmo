<div class="container mt-5 pt-5">
    <div class="row mb-5 mt-2">
       
        <div class="col-md-8 card">
            <h2>Nouveau compte : </h2> 
            <form action="" method="post">
                <div class="row">
                    
                <div class="form-group col-md-6">
                    <label for="name">prenom</label>
                    <input type="text" class="form-control"  required class="form-control" name="prenom">
                </div>
                <div class="form-group col-md-6">
                    <label for="name">nom</label>
                    <input type="text" class="form-control"   required class="form-control"name="nom">
                </div>
                <div class="form-group col-md-6">
                    <label for="">adresse</label>
                    <input type="text" class="form-control"   required class="form-control"name="adresse">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Numero de téléphone</label>
                    <input type="number" class="form-control" name="tel" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">numero de carte d identité</label>
                    <input type="number" class="form-control" name="CNI" required class="form-control" >
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" required class="form-control"name="email">
                </div>
                <div class="form-group">
                    <label for="password">mot de passe</label>
                    <input type="password" class="form-control"  required class="form-control" name="motdpasse">
                </div>
                </div>
                <div class="btn-group">
                    <button type="submit"  name="register" class="btn btn-warning m-3">créer un compte</button>
                    
                </div>
            </form>
        </div>

        <div class="col-md-4">
            <h2>connexion : </h2> 
            <?php if($erreur): ?>
                <div class="alert alert-danger"><?=$erreur?></div>

                <?php endif;?>
            <form action="" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" required class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="password">mot de passe</label>
                    <input type="password" class="form-control" id="password" required class="form-control" name="motdpasse">
                </div>
                <div class= "btn-group">
                <div class="text-center">
                    <button type="submit" class="btn btn-success mt-3" name="connecter">connecter</button> 
                    
                </div>
            </form>
        </div>        
    </div>
                
</div>
 