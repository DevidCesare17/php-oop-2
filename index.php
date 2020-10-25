<?php
  class Casa_aut {
    public $nomeCasa;
    public $sedeCasa;
    public $numeroDip;

    public function __construct($nome_casa, $sede_casa, $numero_dip) {
      $this->nomeCasa = $_nomeCasa;
      $this->sedeCasa = $_sedeCasa;
      $this->numeroDip = $_numeroDip;
    }
  }

  $casa1 = new Casa_aut("Ford", "USA", "10000");
  $casa2 = new Casa_aut("Toyota", "JP", "20000");
  $casa3 = new Casa_aut("BMW", "DE", "15000");

  $case_ar = [$casa1, $casa2, $casa3];

  class Dipendenti extends Casa_aut {
    public $nomeDip;
    public $cognomeDip;
    public $emailDip;
    public $telDip;
    public $livelloDip;
    public $eta;

    public function __construct($nome_casa, $sede_casa, $numero_dip) {
      $this->nomeDip = $_nomeDip;
      $this->cognomeDip = $_cognomeDip;
      $this->livelloDip = $_livelloDip;
    }
  }

  $dipendente1 = new Dipendenti("Davide", "Cesare", "B");
  $dipendente1->eta = 27;
  $dipendente1->nomeCasa;

  $dipendente2 = new Dipendenti("Mario", "Rossi", "A");
  $dipendente2->eta = 35;
  $dipendente2->nomeCasa;

  $dipendente3 = new Dipendenti("Marco", "Verdi", "D");
  $dipendente3->eta = 20;
  $dipendente3->nomeCasa;

  $dipendente4 = new Dipendenti("Giulio", "Gatti", "?");
  $dipendente4->eta = 50;
  $dipendente4->nomeCasa;

  $dipendenti = [$dipendente1, $dipendente2, $dipendente3, $dipendente4];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP OOP</title>
</head>
<body>
  <div class="list_main">
    <?php foreach ($case_ar as $case_si) { ?>
      <ul class="list_users">
        <li>NOME CASA: <?php echo $case_si->nomeCasa; ?></li>
        <li>SEDE CASA: <?php echo $case_si->sedeCasa; ?></li>
        <li>NUMERO DIPENDENTI: <?php echo $case_si->numeroDip; ?></li>
      </ul>
    <?php } ?>
  </div>

  <hr>

  <div class="list_main">
    <?php foreach ($dipendenti as $dipendente) { ?>
      <ul class="list_users">
        <li>NOME DIPENDENTE: <?php echo $dipendente->nomeDip; ?></li>
        <li>COGNOME DIPENDENTE: <?php echo $dipendente->cognomeDip; ?></li>
        <li>ANNI DIPENDENTE: <?php echo $dipendente->eta; ?></li>
          <li>AZIENDA DIPENDENTE: <?php echo $dipendente->nomeCasa; ?></li>
        <li>LIVELLO DIPENDENTE: <?php echo $dipendente->livelloDip; ?></li>
      </ul>
    <?php } ?>
  </div>
</body>
</html>
