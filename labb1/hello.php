<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
   <?php
   $expression = 10;
   if ($expression == 1): ?>
     This will show if the expression is true.
   <?php elseif($expression == 2): ?>
     Otherwise this will show.
   <?php else: ?>
     YAY.
   <?php endif; ?>
</body>
</html>
