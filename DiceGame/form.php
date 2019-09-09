<div id="dice-container">
    <div class="container-diceInput">
        <div class="col-6">
            <form action="#" method="POST">
                <div>
                    <label>Nombre de dès à 2 faces</label><br>
                    <input type="number" name="2" class="number-of-dice" value="0">
                
                </div>
                <div>
                  <label>Nombre de dès à 4 faces</label><br> 
                  <input type="number" name="4" class="number-of-dice" value="0">
              </div>
              <div>
               <label>Nombre de dès à 6 faces</label><br>
               <input type="number" name="6" class="number-of-dice" value="0">
           </div>
           <div>
               <label>Nombre de dès à 8 faces<br></label>
               <input type="number" name="8" class="number-of-dice" value="0">
           </div>
           <div class="col-6">
               <div>
                <label>Nombre de dès à 10 faces</label><br>
                <input type="number" name="10" class="number-of-dice" value="0">
            </div>
            <div>
               <label>Nombre de dès à 12 faces</label><br>
               <input type="number" name="12" class="number-of-dice" value="0">
           </div>
           <div>
               <label>Nombre de dès à 20 faces</label><br>
               <input type="number" name="20" class="number-of-dice" value="0">
           </div>
           <div>
               <label>Nombre de dès à 100 faces</label><br>
               <input type="number" name="100" class="number-of-dice" value="0" min="0" step="1">
           </div>
       </div>
   </div>
   <div class="container-mod">
    <div>
        <label for="display-all-cb">Afficher le résultat de chaque dès ? </label><br> 
        <input type="checkbox" id="display-all-cb">
    </div>
    <input type="submit" id="roll-button" value="Lancer les dès"></input>

    <div class="bigText">Resultat: <?php if (isset($_POST)){$dice = new dice; echo $dice->rollDice();}?><br/>
       <span id="all-rolls" class="bigText grey"></span>
       <span id="dice-roll"></span>
   </div>
</div>
</form>

</div>  
