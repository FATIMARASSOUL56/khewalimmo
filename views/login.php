<div class="register-area" style="background-color: rgb(249, 249, 249);">
            <div class="container">

                <div class="col-md-6">
                    <div class="box-for overflow">
                        <div class="col-md-12 col-xs-12 register-blocks">
                            <h2>Nouveau compte : </h2> 
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="name">prenom</label>
                                    <input type="text" class="form-control"  required class="form-control" name="prenom">
                                </div>
                                <div class="form-group">
                                    <label for="name">nom</label>
                                    <input type="text" class="form-control"   required class="form-control"name="nom">
                                </div>
                                <div class="form-group">
                                    <label for="">adresse</label>
                                    <input type="text" class="form-control"   required class="form-control"name="adresse">
                                </div>
                                <div class="form-group">
                                    <label for="">numero de carte d identité</label>
                                    <input type="number" class="form-control" name="CNI" required class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="">Numero de téléphone</label>
                                    <input type="number" class="form-control" name="tel" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" required class="form-control"name="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">mot de passe</label>
                                    <input type="password" class="form-control"  required class="form-control" name="motdpasse">
                                </div>
                                <div class="btn-group">
                                    <button type="submit"  name="register" class="btn btn-default">créer un compte</button>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box-for overflow">                         
                        <div class="col-md-12 col-xs-12 login-blocks">
                            <h2>connexion : </h2> 
                            <?php if($erreur): ?>
                                <div class="alert alert-danger alert-dismissible fade show" 
                                role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                <strong><?=$erreur?></strong>
                                </div>

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
                                   <button type="submit" class="btn btn-default" name="connecter">connecter</button> 
                                    
                                    <a href="#" class="forgot-password">mot de passe oublié?</a>
                                </div>
                            </form>
                            </div>
                            <br>
                            
                            <h2>connexion sociale:  </h2> 
                            
                            <p>
                            <a class="login-social" href="#"><i class="fa fa-facebook"></i>&nbsp;Facebook</a> 
                            <a class="login-social" href="#"><i class="fa fa-google-plus"></i>&nbsp;Gmail</a> 
                            <a class="login-social" href="#"><i class="fa fa-twitter"></i>&nbsp;Twitter</a>  
                            </p> 
                        </div>
                        
                    </div>
                </div>

            </div>
        </div> 