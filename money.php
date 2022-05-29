<!DOCTYPE html>
<html>
    <head>
            <title>Paiement</title>
            <meta charset="utf-8" />
          <style type="text/css">
           *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
           }
           body{
            background-color: skyblue;
            font-family: Arial, Helvetica, sans-serif;
           }
            .wrapper{
                background-color: whitesmoke;
                width: 500px;
                padding: 25px;
                border-radius: 10px;
                margin: 25px auto 0;
                margin-left: 0;
                box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
                text-align: center;
                justify-content: center;
                display: block;

            }
            .wrapper h2{
                background-color: white;
                color: darkcyan;
                font-size: 24px;
                padding: 10px;
                margin-bottom: 8px;
                border: 1px dashed lightcyan;
            }
            .wrapper legend{
                padding-bottom: 5px;
                color: darkcyan;
             }
             .wrapper2{
                background-color: whitesmoke;
                width: 500px;
                padding: 25px;
                border-radius: 10px;
                margin: 25px auto 0;
                margin-left: 0;
                box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
                text-align: center;
                justify-content: center;
                display: block;

            }
            .wrapper2 h2{
                background-color: white;
                color: darkcyan;
                font-size: 24px;
                padding: 10px;
                margin-bottom: 8px;
                border: 1px dashed lightcyan;
            }
            .wrapper2 legend{
                padding-bottom: 5px;
                color: darkcyan;
             }
             .input_group{
                margin-bottom: 8px;
                width: 100%;
                position: relative;
                padding: 5px 0;
             }
             .input_box{
                width: 100%;
                margin-right: 12px;
                position: relative;
             }
             .input_box input{
                    margin: 10px 0;
                    padding: 10px;
                    border: none;
                    outline: none;
                    border-bottom: 2px solid cornflowerblue;
                    transition: 0.25s;
                    border-radius: 10px;
                }

            .input_box input:hover{
                     border-bottom: 2px solid salmon;
                            }
          
              
            button{
                    margin: 10px 0;
                    padding: 10px;
                    border: none;
                    outline: none;
                    border-bottom: 2px solid cornflowerblue;
                    transition: 0.25s;
                    border-radius: 10px;

            }   
           button:hover{
                     border-bottom: 2px solid salmon;
                            }             
            </style>
    </head> 
    <body>
         <form action="gestionpaiement.php" method="post">
        <div class="wrapper">
            <h2>Paiement</h2>
           
                         <!--Informations personnels clients-->
          
                <fieldset>
                    <legend>Vos informations personnels</legend>
                <div class="input_group">
                    <div class="input_box">
                        <input type="text" name="nom" placeholder="Votre nom" required> 
                    </div>
                    <div class="input_box">
                        <input type="text" name="prenom" placeholder="Votre prénom" required> 
                    </div>

                    <div class="input_box">
                        <input type="text" name="al1" placeholder="Adresse ligne une" required> 
                    </div>
                    <div class="input_box">
                        <input type="text" name="al2" placeholder="Adresse ligne deux " required> 
                    </div>
                    <div class="input_box">
                        <input type="text" name="ville" placeholder="Votre ville" required> 
                    </div>
                    <div class="input_box">
                        <input type="number" name="codepostal" placeholder="Votre code postal" required> 
                    </div>
                    <div class="input_box">
                        <input type="text" name="pays" placeholder="Votre pays de résidence"required> 
                    </div>
                    <div class="input_box">
                        <input type="number" name="telephone" placeholder="Votre numéro de téléphone"> 
                    </div>
                    <div class="input_box">
                        <input type="number" name="cartev" placeholder="Votre carte vitale" required> 
                    </div>
                </div>
          
            </fieldset>
                <!--fin informations personnels clients-->
                 
                              
         
        </div>   <!--fin wrapper-->
        <div class="wrapper2">
               <fieldset>
                    <legend>Vos informations bancaires </legend>
                 
                <div class="input_group">
 <!--type carte-->    <div class="input_box">
                            <input type="radio" name="typecarte" id="visa" class="radio" checked >
                        <label for="visa"> <span> Visa</span></label>

                         <input type="radio" name="typecarte" id="american" class="radio" >
                        <label for="american"> <span> American express</span></label>

                         <input type="radio" name="typecarte" id="paypal" class="radio">
                        <label for="paypal"> <span> Paypal</span></label>
                         <input type="radio" name="typecarte" id="master" class="radio" >
                        <label for="master"> <span> Master Card</span></label>
                    </div><!--fin type carte-->

                     <div class="input_box">
                        <input type="number" name="numcarte" placeholder="1111-2222-3333-4444" required> 
                    </div>
                     <div class="input_box">
                        <input type="text" name="nomcarte" placeholder="Nom sur la carte" required> 
                    </div>
                     <div class="input_box">
                        <input type="date" name="expiration" required> 
                    </div>
                     <div class="input_box">
                        <input type="number" name="code" placeholder="Digit de sécurité" required> 
                    </div>

                </div>
                 <button name="proceder" type="submit" >Procéder au paiement</button> <br>

            </fieldset>

                <!--fin informations bancaires clients-->


        </div>
        
           </form>


    </body>
    </html>