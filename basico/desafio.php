<div class="titulo">Desafio</div>

<ul>
    <li> 1 + 1 = ?</li>
    <li> 4 + 4 = ?</li>
    <li> 8 + 8 = ?</li>
    <li> 12 + 12 = ?</li>
</ul>

<h5>Utilizando php dentro do li</h5>
<ul>
    <li> 1 + 1 =  <?= 1 + 1 ?></li>
    <li> 4 + 4 =  <?= 4 + 4 ?></li>
    <li> 8 + 8 =  <?= 8 + 8 ?></li>
    <li> 12 + 12 = <?php echo 12 + 12; ?></li>
</ul>


<h5>Utilizando bloco php</h5>
<?php 
   echo "<li> 1 + 1 = " . (1 + 1) . "</li>";
   echo "<li> 4 + 4 = " . (4 + 4) . "</li>";
   echo "<li> 8 + 8 = " . (8 + 8) . "</li>";
   echo "<li> 12 + 12 = " . (12 + 12) . "</li>";
?>

<h5>Utilizando variaveis</h5>
<?php 
   $result1 = 1 + 1;
   $result2 = 4 + 4;
   $result3 = 8 + 8;
   $result4 = 12 + 12;

   echo "<li> 1 + 1 = $result1 </li>";
   echo "<li> 4 + 4 = $result2 </li>";
   echo "<li> 8 + 8 = $result3 </li>";
   echo "<li> 12 + 12 = $result4 </li>";
?>

<h5>Utilizando funções</h5>
<?php 
   function soma($a, $b) {
       return $a + $b;
   }

   echo "<li> 1 + 1 = " . soma(1, 1) . "</li>";
   echo "<li> 4 + 4 = " . soma(4, 4) . "</li>";
   echo "<li> 8 + 8 = " . soma(8, 8) . "</li>";
   echo "<li> 12 + 12 = " . soma(12, 12) . "</li>";
?>

<h5>Utilizando Arrays e loop</h5>
<?php 
   $somas = [
       [1, 1],
       [4, 4],
       [8, 8],
       [12, 12]
   ];

   foreach ($somas as $soma) {
       echo "<li> {$soma[0]} + {$soma[1]} = " . ($soma[0] + $soma[1]) . "</li>";
   }
?>

