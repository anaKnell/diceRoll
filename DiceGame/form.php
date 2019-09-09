<div id="dice-container">
    <div class="container-diceInput form-group row m-2">
        <form action="#" method="POST">
            <div class="form-group">
                <label for="2">Nombre de dès à 2 faces</label>
                <input type="number" name="2" class="number-of-dice form-control" value="0">
            </div>
            <div class="form-group">
              <label for="4">Nombre de dès à 4 faces</label> 
              <input type="number" name="4" class="number-of-dice form-control" value="0">
            </div>
            <div class="form-group">
                <label for="6">Nombre de dès à 6 faces</label>
                <input type="number" name="6" class="number-of-dice form-control" value="0">
            </div>
            <div class="form-group">
                <label for="8">Nombre de dès à 8 faces</label>
                <input type="number" name="8" class="number-of-dice form-control" value="0">
            </div>
            <div class="form-group">
                <label for="10">Nombre de dès à 10 faces</label>
                <input type="number" name="10" class="number-of-dice form-control" value="0">
            </div>
            <div class="form-group">
                <label for="12">Nombre de dès à 12 faces</label>
                <input type="number" name="12" class="number-of-dice form-control" value="0">
            </div>
            <div class="form-group">
                <label for="20">Nombre de dès à 20 faces</label>
                <input type="number" name="20" class="number-of-dice form-control" value="0">
            </div>
            <div class="form-group">
                <label for="100">Nombre de dès à 100 faces</label>
                <input type="number" name="100" class="number-of-dice form-control" value="0" min="0" step="1">
            </div>
            <div class="form-group">
                <label for="display-all-cb">Afficher le résultat de chaque dès ? </label> 
                <input type="checkbox" id="display-all-cb">
             </div>
            <input type="submit" id="roll-button" value="Lancer les dès"></input>

            <div class="bigText">Resultat: <?php if (isset($_POST)){var_dump($result);echo $result;}?><br/>
                <span id="all-rolls" class="bigText grey"></span>
                <span id="dice-roll"></span>
                <br/>
            </div>

        </form>
    </div>
</div>  
