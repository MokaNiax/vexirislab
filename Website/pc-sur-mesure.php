<?php include("includes/header.php"); ?>

<link rel="stylesheet" href="assets/css/pc-sur-mesure.css">

<main class="pc-sur-mesure">
  <h1>Créez votre PC sur mesure</h1>
  <form class="custom-form">
    <label>Processeur :
      <select>
        <option>AMD Ryzen 5</option>
        <option>AMD Ryzen 7</option>
        <option>Intel i5</option>
        <option>Intel i7</option>
      </select>
    </label>

    <label>Carte graphique :
      <select>
        <option>NVIDIA RTX 4060</option>
        <option>NVIDIA RTX 4070</option>
        <option>AMD RX 7800 XT</option>
      </select>
    </label>

    <label>Mémoire RAM :
      <input type="number" min="8" step="8" value="16" required> Go
    </label>

    <label>Informations Supplémentaires :</label>
    <textarea placeholder="Votre message..." required></textarea>

    <button type="submit" class="btn">Demander un devis</button>
  </form>
</main>

<?php include("includes/footer.php"); ?>