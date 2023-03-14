<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Insertion de donnee</title>
        <link rel="stylesheet" href=<?php echo base_url()."assets/css/bootstrap.css"?>>
        <link rel="stylesheet" href=<?php echo base_url()."assets/css/style.css"?>>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row loha">
                <h1>header</h1>
            </div>
            <div class="row sary">
                image
            </div>
        </div>

        <!-- vatana iray manontolo -->
        <div class="container">
            <div class="row">
                <div class="titre">
                    <h1>Insertion de donner</h1>
                    <hr>
                </div>
            </div>

            <!-- formulaire iray anaty vatana -->
            <div class="row form-section"> 
                <div class="row">
                    <h2>a propos du societe</h2>
                    <hr>
                </div>
    
                <form action="<?php echo site_url("Upload"); ?>" method="post" enctype="multipart/form-data">  
                    <div class="row donner">
                        <div class="col-md-10 col-md-offset-1 donner-part1">    
                            <div class="form-group">
                                <label>nom societe : </label>
                                <input class="form-control" type="text" placeholder="entrer ici">
                                <!-- <small class="form-text">nom societe</small> -->
                            </div>               
                            
                            <div class="form-group">
                                <label>nom societe : </label>
                                <input class="form-control" type="text">
                                <!-- <small class="form-text">nom societe</small> -->
                            </div>

                            <div class="form-group">
                                <label>nom societe : </label>
                                <input class="form-control" type="text">
                                <!-- <small class="form-text">nom societe</small> -->
                            </div>

                            <div class="form-group">
                                <label>nom societe : </label>
                                <input class="form-control" type="text">
                                <!-- <small class="form-text">nom societe</small> -->
                            </div>
                         </div>
                    </div>               
                <!-- </form> -->
            </div>

            <!-- formulaire iray anaty vatana -->
            <div class="row form-section"> 
                <div class="row">
                    <h2>donnee personnelle</h2>
                    <hr>
                </div>
    
                <!-- <form action="" method="post">   -->
                    <div class="row donner">
                        <div class="col-md-10 col-md-offset-1 donner-part1">    
                            <div class="form-group">
                                <label>email : </label>
                                <input class="form-control" type="text" placeholder="entrer ici">
                                <small class="form-text">nous ne partagerons pas votre email</small>
                            </div>               
                            
                            <div class="form-group">
                                <label>nom societe : </label>
                                <input class="form-control" type="text">
                                <small class="form-text">nom societe</small>
                            </div>

                            <div class="form-group">
                                <label>nom societe : </label>
                                <input class="form-control" type="text">
                                <small class="form-text">nom societe</small>
                            </div>

                            <div class="form-group">
                                <label>nom societe : </label>
                                <input type="file" name="userfile">
                                <input type="submit" value="envoyer">
                            </div>
                         </div>
                    </div>               
                </form>

                <div class="row">
                    <div class=" col-md-3 col-md-offset-2" style="margin-top: 50px;">
                    <a href=<?php echo site_url("welcome/test"); ?>>
                        <input type="button" class="btn btn-lg btn-primary" value="valider">
                    </a>
                    </div>
                </div>

            </div>
            
        </div>

        <!-- <div class="container-fluid"> -->
            <div class="row" style="margin-top: 100px; height: 200px;">
                <div class="col-md-4 test1">
                    test1
                </div>
                <div class="col-md-4 col-md-offset-4  test2">
                    test1
                </div>
            </div>
        <!-- </div> -->
    </body>

    <script src=<?php echo base_url()."assets/js/bootstrap.js"?>></script>
    <script src=<?php echo base_url()."assets/js/jquery.min.js"?>></script>
</html>
