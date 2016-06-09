<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Autocomplete test</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(function() {
    var taggar = ["Anna","Beatrice","Catarina","Daniel","Eva","Felicia","Gabriella","Helen","Ida","Jenny","Klara","Mina","Nora","Ove","Peter","Rita","Sven","Tove","Urban","Vilma","Wilma"];
    $("#tags").autocomplete({
      source: taggar
    });
  });
  </script>
</head>
<body>

<div class="ui-widget">
  <label for="tags">Skriv namn: </label>
  <input id="tags">
</div>


</body>
</html>
