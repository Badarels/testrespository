 
 <?php
    session_start();
   //include './listeetudiant.php';
    if(!isset($_SESSION['NIV'])){
        header('location:authentification.php');
    }
        
   ?>
 
  <!doctype html>
 <html>
     <head style="width:100%;float: top;">
         <title>GestCommande</title>
           
       
         <link rel="stylesheet" href="../res/styles/commande.css">
         <link rel="stylesheet" href="../res/js/bootstrap/css/bootstrap.min.css" >
         <link rel="stylesheet" href="../res/js/bootstrap/css/bootstrap-theme.min.css">
         <link rel="stylesheet" href="../res/js/bootstrap/css/bootstrap.css">
     </head>
     <body  style="background-color:#F5F5f5;background: url('../res/images/feuille.jpeg') no-repeat center fixed;
      -webkit-background-size: cover">
         <div class="navbar  navbar-default  navbar-fixed-top" style="background-color: #00caaa;z-index: 100000;margin-bottom: 0px;">
              
                          <form method="post" name="deconnection">
                   <ul class="nav nav-pills col-lg-offset-3" style="float: bottom;float: right;margin-right: 20px; ">
                        <li role="presentation"  name="deconnection">
                       <div class="form-group">
                       <div class="col-sm-offset-1 col-sm-8">
                           <button type="submit" name="Deconnection"  class="btn btn-default" style="margin: 10px;width:150px;color:#fff;background-color: #00cccf;">Deconnection</button>
                       </div>
                     </div></li> 
                                     
                     </ul>
                                    </form>
                                   <?php
                                      
                                         if(isset($_POST['Deconnection'])){
                                            session_destroy();
                                            header('location:authentification.php');
                                        }
                                    ?>
                   
                          
                        <ul class="nav nav-pills" style="float: bottom;">
                            <li role="presentation" style="float: left; margin-left: 10px;"><img src="http://localhost/GestCommande/res/images/rels.jpg" width="50px" height="50px" class="img-rounded"/></li> 
                            <li role="presentation"><li role="presentation" style="float: left;"><a href=" #"><span><g>GestCommande</g></span><span style="color:#00cccf;"><g>.com</g></span></a></li>             
                          
                             <li role="presentation"><a href="http://localhost/GestCommande/src/listedesproduits.php">Liste des produits</a></li>
                            <li role="presentation"><a href="http://localhost/GestCommande/src/ajout_produit.php">Ajout Produit</a></li>
                        </ul>         
             </div>    
                        
              <!--header-->
          
              <!--content-->
           
                   <div class=" col-md-5 col-lg-offset-3 col-lg-7" style="opacity: 0.6;width: 700px ; background-color:#fff; margin-top: 60px;"> 
                       <div class="row h4" style="border-bottom: solid 3px #00ccff;padding: 1px;padding-left: 10px;margin-bottom: 0px; color:#00cccf;"><h4>Liste des Clients</h4></div>            
                              
                <table class="table table-simple" style=" color:black ">
                        <thead>
                          <tr>
                            <th> ID</th>
                            <th> Nom</th>
                            <th> pseudo</th>
                          </tr>
                        </thead>
                        <tbody>  
            <?php
           
              $bdd = new PDO('mysql:host=localhost;dbname=src2','root', '');
               $stmt = $bdd->query('SELECT *FROM client');
                    while($message = $stmt->fetch())
                      {

                      ?>
                         <tr>
                              <th><?php echo $message['id_client'];?></th>
                              <th><?php echo $message['nom'];?></th>
                              <th><?php echo $message['pseudo'];?></th>
                            
                          </tr>
                      <?php } ?>
                          
                        </tbody>
                    </table>
                       </div>
      
                 
       
        <div class=" col-md-5 col-lg-offset-2 col-lg-7"style="height: 800px;  "> 
      
               </div>
      
              <!--baspages-->
          <div class="col-md-4 navbar bottom" style="background-color:#00cccf;padding-left: 0px; width: 100%;float: bottom; opacity: 0.7">
              <h4 style="text-align: center;color:black; ">copyright@badarasock</h4>
          </div> 
          
     </body>
 </html>



