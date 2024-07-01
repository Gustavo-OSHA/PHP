<div class="titulo">Tipo Float</div>

<?php 
echo 1.1, '<br>'; // Exibe o número 1.1 seguido de uma quebra de linha HTML

var_dump(1.0); // Exibe informações detalhadas sobre o valor 1.0, incluindo seu tipo e valor
echo '<br>';

echo PHP_FLOAT_MAX, '<br>'; //Exibe o maior valor de ponto flutuante que o PHP pode lidar, seguido de uma quebra de linha HTML
echo PHP_FLOAT_MIN, '<br>'; //Exibe o menor valor de ponto flutuante que o PHP pode lidar, seguido de uma quebra de linha HTML
echo 1.2e3, '<br>'; // Exibe o número 1.2e3 (notação científica para 1.2 * 10^3, ou seja, 1200), seguido de uma quebra de linha HTML
echo 13E-3; // Exibe o número 13E-3 (notação científica para 13 * 10^-3, ou seja, 0.013)