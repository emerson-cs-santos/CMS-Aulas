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

function nova_mensagem_de_erro(): string
{
    return 'Credenciais inválidas!';
}
// Exemplo usando filter hook - Fim



// Exemplo usando action hook - Inicio
add_action('wp_head', 'colocaComentario');

function colocaComentario()
{
    // is_single = se retornar true, significa que o usuário está em uma página de um unico post
    if ( is_single() ) 
    {
      //  echo "<!-- Comentário de exemplo -->";
      // get_the_title - Pega titulo do post
      echo '\\n \\n';

      echo '<meta property="og:title" content="' . get_the_title() .'">';

      $title = wp_title('', false);
      //$title = get_site();
      echo '<meta property="og:site_name" content="' . $title .'">';

      echo '<meta property="og:url" content="' . get_permalink( get_the_ID() ) .'">';

      echo '\\n \\n';
    }
}
// Exemplo usando action hook - Fim