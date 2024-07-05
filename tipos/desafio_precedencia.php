<div class="titulo">Desafio Precedencia</div>

<?php 
echo '<p>1. Qual o valor será impresso?</p>';
echo '<p>2 + 5 * 3 + (12 / 6) / (-8 + 2 ** 3)</p>';
echo '<p> A expressão 2 + 5 * 3 + (12 / 6) / (-8 + 2 ** 3) é calculada da seguinte forma:
2 ** 3 é 8. -8 + 8 é 0. (12 / 6) / 0 resulta em uma divisão por zero, o que causa um erro em PHP.
Portanto, essa expressão não imprimirá um valor válido e resultará em um erro de divisão por zero</p>';

echo '<p>2. Qual a expressão imprime o valor 100?</p>';
echo '<p>A) (1 + 2) * 20 - 15 </p>'; 
echo '<p>B) 4 * 5 ** 2 </p>';
echo '<p>C) 2 ** 3 ** 4 / 1e25 </p>';
echo '<p>D) 3 + (3 * 8) / 2 - 3 </p>';

echo '<p>A) ', (1 + 2) * 20 - 15, '</p>';
echo '<p>B) ', 4 * 5 ** 2, '</p>';
echo '<p>C) ', 2 ** 3 ** 4 / 1e25, '</p>';
echo '<p>D) ', 3 + (3 * 8) / 2 - 3, '</p>';
?>
