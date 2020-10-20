<?php
/*
* Plugin Name: Olá Mundo, meu primeiro plug-in
* Plugin URI: https://google.com
* Description: Um plug-in muito simples que apenas coloca olá mundo nos posts
* Version: 0.0.1
* Author: Emerson Costa
* Author URI: https://github.com/emerson-cs-santos
* License: CC BY
*/

// Exemplo usando filter hook - Inicio
add_filter( 'login_errors', 'nova_mensagem_de_erro');

function nova_mensagem_de_erro()
{
    return 'Credenciais inválidas!';
}
// Exemplo usando filter hook - Fim

