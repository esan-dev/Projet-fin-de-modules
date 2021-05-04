<?php require_once "./calculator.php";
$calculator = new Calculator();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Calculator</title>
  <link rel="stylesheet" href="./style.css" />

</head>

<body>
  <div class="wrapper">
    <div class="inner">
      <h1 class="xl-title">saisir les notes d’un étudiant</h1>
      <form action="/" method="POST">
        <div class="form-fields-group">
          <label for="1-note">Première note</label>
          <input type="text" id="1-note" name="1-note" placeholder="Entrez la note " required />
        </div>
        <div class="form-fields-group">
          <label for="3-note">Deuxième note</label>
          <input type="text" id="2-note" name="2-note" placeholder="Entrez la note " required />
        </div>
        <div class="form-fields-group">
          <label for="3-note">Troisième note</label>
          <input type="text" id="3-note" name="3-note" placeholder="Entrez la note " required />
        </div>
        <button>Calculate</button>
      </form>
      <div id="js-result-calculator" class="calculator-result">
        <?= $calculator->Runcalculator() ?>
      </div>
    </div>
  </div>
</body>

</html>