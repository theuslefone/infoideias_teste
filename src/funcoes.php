<?php

namespace SRC;

class Funcoes
{
    /*

    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

	Exemplos para teste:

	Ano 1905 = século 20
	Ano 1700 = século 17

     * */
    public function SeculoAno(int $ano): int
    {
        if ($ano >= 0 && $ano <= 100) {
            return 1;
        } else if ($ano >= 101 && $ano <= 200) {
            return 2;
        } else if ($ano >= 201 && $ano <= 300) {
            return 3;
        } else if ($ano >= 301 && $ano <= 400) {
            return 4;
        } else if ($ano >= 401 && $ano <= 500) {
            return 5;
        } else if ($ano >= 501 && $ano <= 600) {
            return 6;
        } else if ($ano >= 601 && $ano <= 700) {
            return 7;
        } else if ($ano >= 701 && $ano <= 800) {
            return 8;
        } else if ($ano >= 801 && $ano <= 900) {
            return 9;
        } else if ($ano >= 901 && $ano <= 1000) {
            return 10;
        } else if ($ano >= 1001 && $ano <= 1100) {
            return 11;
        } else if ($ano >= 1101 && $ano <= 1200) {
            return 12;
        } else if ($ano >= 1201 && $ano <= 1300) {
            return 13;
        } else if ($ano >= 1301 && $ano <= 1400) {
            return 14;
        } else if ($ano >= 1401 && $ano <= 1500) {
            return 15;
        } else if ($ano >= 1501 && $ano <= 1600) {
            return 16;
        } else if ($ano >= 1601 && $ano <= 1700) {
            return 17;
        } else if ($ano >= 1701 && $ano <= 1800) {
            return 18;
        } else if ($ano >= 1801 && $ano <= 1900) {
            return 19;
        } else if ($ano >= 1901 && $ano <= 2000) {
            return 20;
        } else if ($ano >= 2001 && $ano <= 2100) {
            return 21;
        } else if ($ano >= 2101 && $ano <= 2200) {
            return 22;
        } else if ($ano >= 2201 && $ano <= 2300) {
            return 23;
        } else if ($ano >= 2301 && $ano <= 2400) {
            return 24;
        }
    }









    /*

    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido

    Exemplo para teste:

    Numero = 10 resposta = 7
    Número = 29 resposta = 23

     * */
    public function PrimoAnterior(int $numero): int
    {
        $arr = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97, 101, 103, 107, 109, 113, 127, 131, 137, 139, 149, 151, 157, 163, 167, 173, 179, 181, 191, 193, 197, 199, 211, 223, 227, 229, 233, 239, 241, 251, 257, 263, 269, 271, 277, 281, 283, 293, 307, 311, 313, 317, 331, 337, 347, 349, 353, 359, 367, 373, 379, 383, 389, 397, 401, 409, 419, 421, 431, 433, 439, 443, 449, 457, 461, 463, 467, 479, 487, 491, 499, 503, 509, 521, 523, 541, 547];
        for ($i = 0; $i < count($arr); $i++) {
            if ($numero > $arr[$i] && $numero < $arr[$i + 1]) {
                return  $arr[$i];
            } else if ($numero == $arr[$i]) {
                return $arr[$i - 1];
            }
        }
    }










    /*

    Desenvolva uma função que receba como parâmetro um array multidimensional de números inteiros e retorne como resposta o segundo maior número.

    Exemplo para teste:

	Array multidimensional = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);

	resposta = 25

     * */
    public function SegundoMaior(array $arr): int
    {
        $maior = max(max($arr));
        for ($i = 0; $i < count($arr); $i++) {
            for ($j = 0; $j < count($arr[$i]); $j++) {
                if ($arr[$i][$j] == $maior) {
                    unset($arr[$i][$j]);
                }
            }
        }
        $segundoMaior = max(max($arr));

        return $segundoMaior;
    }








    /*
   Desenvolva uma função que receba como parâmetro um array de números inteiros e responda com TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

	Exemplos para teste 

	Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas crescentes

    [1, 3, 2, 1]  false
    [1, 3, 2]  true
    [1, 2, 1, 2]  false
    [3, 6, 5, 8, 10, 20, 15] false
    [1, 1, 2, 3, 4, 4] false
    [1, 4, 10, 4, 2] false
    [10, 1, 2, 3, 4, 5] true
    [1, 1, 1, 2, 3] false
    [0, -2, 5, 6] true
    [1, 2, 3, 4, 5, 3, 5, 6] false
    [40, 50, 60, 10, 20, 30] false
    [1, 1] true
    [1, 2, 5, 3, 5] true
    [1, 2, 5, 5, 5] false
    [10, 1, 2, 3, 4, 5, 6, 1] false
    [1, 2, 3, 4, 3, 6] true
    [1, 2, 3, 4, 99, 5, 6] true
    [123, -17, -5, 1, 2, 3, 12, 43, 45] true
    [3, 5, 67, 98, 3] true

     * */

    public function SequenciaCrescente(array $arr): boolean
    {
        
    }
}
