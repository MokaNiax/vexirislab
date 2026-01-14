<?php include("includes/header.php"); ?>

<link rel="stylesheet" href="assets/css/pc-gamer.css">

<main class="pc-gamer">
  <h1>Nos PC Gamer</h1>
  <div class="filters">
    <label for="tri">Trier par : 
      <select id="tri">
        <option value="prix-asc">Prix croissant</option>
        <option value="prix-desc">Prix décroissant</option>
        <option value="puissance">Puissance</option>
      </select>
    </label>
  </div>

  <div class="pc-list">
    <div class="pc-card">
      <img src="assets/img/pc1.jpg" alt="PC Gamer 1">
      <h2>PC Gamer Cheap</h2>
      <p>Intel I3 | GTX 1660 | 16 Go RAM</p> 
      <span class="price">399 €</span>
      <button type="gotopage" class="btn">Voir</button>
    </div>

    <div class="pc-card">
      <img src="assets/img/pc1.jpg" alt="PC Gamer 1">
      <h2>PC Gamer Simple</h2>
      <p>Intel I5 | RTX 2060 | 16 Go RAM</p>
      <span class="price">499 €</span>
      <button type="gotopage" class="btn">Voir</button>
    </div>

    <div class="pc-card">
      <img src="assets/img/pc1.jpg" alt="PC Gamer 1">
      <h2>PC Gamer Pro</h2>
      <p>Intel I9 | RTX 4080 SUPER | 32 Go RAM</p>
      <span class="price">3 499 €</span>
      <button type="gotopage" class="btn">Voir</button>
    </div>
  </div>
</main>

<?php include("includes/footer.php"); ?>
