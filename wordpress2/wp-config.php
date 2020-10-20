<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress2' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost:3307' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'fGAS3`&XFEtV!7m[?{rxha#;?|h`g?T~@`1ja|tPkKV-fQ6fF[r5}e@g6MR6u+3_' );
define( 'SECURE_AUTH_KEY',  'eG?3zZq`YDJ0swYZ.vk+l2U<Ni7ffp|YhI~sN:fI-Kh0A$d$<+egB^C18{G_*]r`' );
define( 'LOGGED_IN_KEY',    '5zx$d=7`Q/`|Wsf6ha<E:G-e$@6bx eIUamnw#IYdwzeJE2Z8A)8kUvKTti,$Vl?' );
define( 'NONCE_KEY',        'o{Rv./1jHoif<r{BX,WnRODqKYCA0p/0V#_d9p<<HR]gjw(`ww4dOSb`_!i5Z?IZ' );
define( 'AUTH_SALT',        'Zb)1dr+rKl%uC!>+|Hse]AcJ[w!,8jWSE:?mLr80GSmy9l]<;T@~ZM4!p;3QdQRl' );
define( 'SECURE_AUTH_SALT', '^J w~CAQ)DZx2dw4Q=neCpYBrE+aQhWNFmVI_$/yi~ YV.-Z[N:ni/s1#`RET(-N' );
define( 'LOGGED_IN_SALT',   'D%18C9r)P2:]CN$kA?]?OA&fy2GZkMfbm.+dFQig1 06F,~kX]nH,vpw|{2:n0QA' );
define( 'NONCE_SALT',       'R6CJNtFx_.;Q,EhPR=ltIJCpB(kHli/ijNB:bd<e3K&?S>fhwp}|5Q!y8l7>HGia' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
