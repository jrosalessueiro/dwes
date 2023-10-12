<?php
/**
 * Indica cuál de los siguientes son nombres de variables válidas e inválidos, 
 * indica por qué (en comentarios) y corrige los fallos:
 * 
 * RESPUESTA: 
 * Debemos decir que una variable se define con el símbolo de dolar ($) seguido de un nombre válido.
 * Un nombre de variable válido tiene que empezar con una letra o un carácter de subrayado 
 * , seguido de cualquier número de letras, números y caracteres de subrayado.
 * 
*- valor            INVÁLIDO-- debe iniciar con $.
*- $_N              VÁLIDO
*- $valor_actual    VÁLIDO
*- $n               VÁLIDO
*- $#datos          INVÁLIDO-- Empieza por un símbolo que no es el caracter de subrayado. 
*- $valorInicial0   VÁLIDO
*- $proba,valor     INVÁLIDO-- Tiene una coma que es un símbolo y no es el caracter de subrayado.
*- $2saldo          INVÁLIDO-- Empieza con un número. 
*- $n               VÁLIDO
*- $meuProblema     VÁLIDO
*- $meu Problema    INVÁLIDO-- Tiene un espacio 
*- $echo            VÁLIDO
*- $m&m             INVÁLIDO-- Tiene un & que es un símbolo y no es el caracter de subrayado.
*- $registro        VÁLIDO
*- $ABC             VÁLIDO
*- $85 Nome         INVÁLIDO-- Empieza con un número y tiene un espacio.
*- $AAAAAAAAA       VÁLIDO
*- $nome_apelidos   VÁLIDO
*- $saldoActual     VÁLIDO
*- $92              INVÁLIDO-- Empieza con un número.
*- $*143idade       INVÁLIDO-- Empieza por un símbolo que no es el caracter de subrayado.
 */
?>