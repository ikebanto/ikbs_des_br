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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'teste_wordpress_blog' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'ikbs_des' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'iX3C7xTvqpsecM7b' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'db.ikbs.des.br' );

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
define( 'AUTH_KEY',         'zyPFGn)p-&-{DT3949LgjO`7+*}A_<%_+plbHtp}+A;KK<j2X3}a9mA^M+0)VS>c' );
define( 'SECURE_AUTH_KEY',  'ui5{$CHJ@0y1D;&-pWG9sI>i]zSezK}XV~m6b{e2KF#DQ$.T:jYsV$i(5G~jhXWn' );
define( 'LOGGED_IN_KEY',    '?m,S2F0S4Z<%2zN!]}t@8(T({p]J.}?ppq^V1a~VB|sW2@12yn~bzcdJ!m1cuGYQ' );
define( 'NONCE_KEY',        'r!Ifb(.[y,?8A|._[NBj2-<>}p*~@,_/NO=QN$?C|%IoUi8P&c=|yOf[=4d~4:`~' );
define( 'AUTH_SALT',        'z(x%SK/>xAL?B9h[K=]X!f$YsO5+[Fn!zuT00U*@D;jvsqPxpScL%qXeW};Pse$T' );
define( 'SECURE_AUTH_SALT', ';1$]u5J*z0sj_K+thTB$q*oS^lYZMOTqwK@%aPfU3VsrZ~{)NPrbkH*=8R>meaH@' );
define( 'LOGGED_IN_SALT',   'a)PhfE$wWu>,g?MNh/~kG5(&<]:nOe62E%-L45/x9qgy822H5<7G-tZF$9*(3a r' );
define( 'NONCE_SALT',       '>5#yhQ_D^Tr{g/Xa&5hy~_#4ag.G*&&])<vVD_wvz7z=1.fB!g(-w@mVnj92[]5l' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'des_';

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
