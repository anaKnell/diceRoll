<div id="dice-container">
    <p id="titleRoller">Dice Roller</p>
    <div class="container-diceInput">
        <div class="col-6">
            <form action="#" method="POST">
                <p>Nombre de dès à 2 faces<br>
                    <input type="number" name="2" class="number-of-dice" value="0">
                </p>
              <p>Nombre de dès à 4 faces<br>
                   <input type="number" name="4" class="number-of-dice" value="0">
               </p>
                              <p>Nombre de dès à 6 faces<br>
                   <input type="number" name="6" class="number-of-dice" value="0">
               </p>
               <p>Nombre de dès à 8 faces<br>
                   <input type="number" name="8" class="number-of-dice" value="0">
               </p>
                           </div>
                
                <div class="col-6">
               <p>Nombre de dès à 10 faces<br>
                   <input type="number" name="10" class="number-of-dice" value="0">
               </p>
               <p>Nombre de dès à 12 faces<br>
                   <input type="number" name="12" class="number-of-dice" value="0">
               </p>
               <p>Nombre de dès à 20 faces<br>
                   <input type="number" name="20" class="number-of-dice" value="0">
               </p>
               <p>Nombre de dès à 100 faces<br>
                   <input type="number" name="100" class="number-of-dice" value="0" min="0" step="1">
               </p>
                           </div>
                       </div>
<div class="container-mod">

    <label for="display-all-cb">Afficher le résultat de chaque dès ? 
               <input type="checkbox" id="display-all-cb">
    </label><br> 
                
            <input type="submit" id="roll-button" value="Lancer les dès"></input>

            <p class="bigText">Resultat: <?php echo ?><br/>
               <span id="all-rolls" class="bigText grey"></span>
               <span id="dice-roll"></span>
           </p>
       </div>
   </form>
   
</div>  