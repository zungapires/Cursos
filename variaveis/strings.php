//para juntar duas strings em php usamos o (.) tipo "curso"."php"="CursoPhp".
// e usamos aspas unicas(singleqoted) '' para strings  imprimir sem interpretação nenhuma tipo $nome='zunga \u{1F30E}' vai imprimir tal igual
//ex

<?php
$nome='zunga pires \u{1F30E}';
$apelido='pires';

echo "$nome $apelido";
?>
//no exemplo, a primeira variavel vai imprimir o nome e o codigo, mas se mudarmos para duas aspas vai imprimir
o nome e o emogi da terra

//Para imprimir uma constante usamos (.)

exemplo:
<?php 
const PROVINCIA = "MAPUTO";
echo "vivo em " .PROVINCIA;
?>