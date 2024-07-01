<div class="titulo">Tipo Inteiro</div>

<?php 
echo 11; //valor literal 
echo '<br>'; //como esta no contexto de navegar a tag br ira pular linha

var_dump(11); //comando ira me trazer informações da variael 
echo '<br>';

echo PHP_INT_MAX, '<br>'; //Inteiro maximo suportado pelo PHP (Na maquina que esta trabalhando)
echo PHP_INT_MIN, '<br>'; //Inteiro minimo suportado pelo PHP (Na maquina que esta trabalhando)
echo 017, '<br>'; //Base octal, zero a esquerda 
echo 0b11, '<br>'; //Base binaria 0b
echo 0x11, '<br>'; //Base hexadecimal