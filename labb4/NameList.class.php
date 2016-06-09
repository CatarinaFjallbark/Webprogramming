<?php
/*Catarina Sörensen
Webbprogrammering
Mittuniversitetet
I denna filen finns en klass NameList som har en metod som skriver ut namnen.
*/
class NameList{
  public $lists = array();
  public $sortning;

  public function printNames($dbconn){
    $sort = $this->sortning;

    if($sort == 0){
      ?><h2>Sorterad på förnamn stigande</h2><?php
      $query = "SELECT * FROM labb4.namelist ORDER BY firstname ASC;";
    }else if($sort == 1){
      $query = "SELECT * FROM labb4.namelist ORDER BY firstname DESC;";
      ?><h2>Sorterad på förnamn avtagande</h2><?php
    }else if($sort == 2){
      $query = "SELECT * FROM labb4.namelist ORDER BY lastname ASC;";
      ?><h2>Sorterad på efternamn stigande</h2><?php
    }else if($sort == 3){
      $query = "SELECT * FROM labb4.namelist ORDER BY lastname DESC;";
      ?><h2>Sorterad på efternamn avtagande</h2><?php
    }else{
      $query = "SELECT * FROM labb4.namelist;";
      ?><h2>Ej sorterad</h2><?php
    }

    $nameResult = pg_query($dbconn, $query);

    for($i = 0; $i<35; $i++){
      $data = pg_fetch_object($nameResult, $i);
      $rows = new RowClass();
      $rows->name = $data->firstname;
      $rows->last = $data->lastname;
      $rows->userid = $data->userid;
      array_push($this->lists, $rows);
      ?>
      <br>
      <?php
      echo $this->lists[$i]->name . " " . $this->lists[$i]->last . " " . $this->lists[$i]->userid;
      ?>
      <br><br>
      <?php
    }

  }
}
?>
