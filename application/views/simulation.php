<form action="" method="post">
    <div class="form-group">
        <label for="montant">Montant du pret:</label>
        <input type="number" id="montant" name="montant" required>
    </div>
    <div class="form-group">
        <label for="taux">Taux Effectif Global :</label>
        <input type="number" id="taux" name="taux" required>
    </div>
    <div class="form-group">
        <label for="duree">Duree d' amortissement(en mois)  :</label>
        <input type="number" id="duree" name="duree" required>
    </div>
    <div class="form-group">
        <label for="dateDebut">Date debut de l' emprunt :</label>
        <input type="date" id="dateDebut" name="dateDebut" required>
    </div>
    <button type="submit">envoyer</button>
</form>