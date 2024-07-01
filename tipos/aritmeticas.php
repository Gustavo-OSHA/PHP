<div class="titulo">Operações Aritmeticas</div>

<?php 
echo 1 + 1, '<br>'; // Exibe o resultado da soma 1 + 1, seguido de uma quebra de linha HTML
var_dump(1 + 1); // Exibe informações detalhadas sobre o resultado da soma 1 + 1, incluindo seu tipo e valor
echo '<br>'; // Adiciona uma quebra de linha HTML
echo 1 + 2.5, '<br>'; // Exibe o resultado da soma 1 + 2.5, seguido de uma quebra de linha HTML
echo 10 -2 , '<br>'; // Exibe o resultado da subtração 10 - 2, seguido de uma quebra de linha HTML
echo 2 * 5, '<br>'; // Exibe o resultado da multiplicação 2 * 5, seguido de uma quebra de linha HTML
echo 7 / 4, '<br>'; // Exibe o resultado da divisão 7 / 4, seguido de uma quebra de linha HTML
echo intdiv(7,4), '<br>'; // Exibe o resultado da divisão inteira de 7 por 4 usando intdiv, seguido de uma quebra de linha HTML
echo round(7/4), '<br>'; //Exibe o resultado da divisão 7 / 4 arredondado para o inteiro mais próximo, seguido de uma quebra de linha HTML
echo 7 % 4 , '<br>'; // Exibe o resto da divisão de 7 por 4, seguido de uma quebra de linha HTML, util para saber se o numero e par ou impar 
echo 7 % 2 , '<br>'; //Exibe o resto da divisão de 7 por 2, seguido de uma quebra de linha HTML, util para saber se o numero e par ou impar
echo 8 % 2 , '<br>'; // Exibe o resto da divisão de 8 por 2, seguido de uma quebra de linha HTML, util para saber se o numero e par ou impar
//echo 7 / 0, '<br>'; tentativa de dividir 7 por 0, o que causaria um erro
//echo intdiv(7, 0); tentativa de realizar divisão inteira de 7 por 0, o que causaria um erro
echo 4 ** 2, '<br>'; //Exibe o resultado da exponenciação 4 ** 2 (4 elevado a 2), seguido de uma quebra de linha HTML

//Precedencia de operadores:
// () => ** => / * % => + -

echo '<p>Precedencias</p>';
echo 2 + 3 * 4, '<br>'; // Exibe o resultado da expressão 2 + 3 * 4, considerando a precedência de operadores (multiplicação antes da soma), seguido de uma quebra de linha HTML
echo (2 + 3) * 4, '<br>'; // Exibe o resultado da expressão (2 + 3) * 4, considerando a precedência de operadores (parênteses antes da multiplicação), seguido de uma quebra de linha HTML
echo 2 + 3 * 4 **2, '<br>';// Exibe o resultado da expressão 2 + 3 * 4 ** 2, considerando a precedência de operadores (exponenciação antes da multiplicação, que é antes da soma), seguido de uma quebra de linha HTML
echo ((2 + 3) * 4) **2; // Exibe o resultado da expressão ((2 + 3) * 4) ** 2, considerando a precedência de operadores (parênteses antes da exponenciação), seguido de uma quebra de linha HTML