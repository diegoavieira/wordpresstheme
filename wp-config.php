<?php
/**
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valoresss.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpresstheme');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '12345');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

define('FS_METHOD','direct');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wh_2Ft;_a(]>u*+bMc#[[Y?8$Fep2(M+cc=sMid0ctvoRK(v-+xt@D^B)8hpaE!P');
define('SECURE_AUTH_KEY',  'ln`=y<dNWk%A,lZ_YU 2b}?:|u?J+5{+}4d@6dU{lPGxUJAh96cG9)?7Ej-HD={e');
define('LOGGED_IN_KEY',    'yC46zDLE3_6MIC73*f%o@}.zYwEy^>!4oxcNt@|Loo#l/J^R68=6gxJ#6pD{ic-(');
define('NONCE_KEY',        'fUBF!bi?GEX;|^^UCbFG9,ak>Jk#a|_84[+qR[X>|6rs?{|oT(4xZ^ )xEVZ<cj7');
define('AUTH_SALT',        'u8Q_b8D %UpGI!O@c;t?_h|;Z96@!Xy.<}TSrKU,i+_I<;w|xmu`,d+A+CS`BXo+');
define('SECURE_AUTH_SALT', '>1wdjN^E2<_?0h{?c;zY%NPkP9zB-Q4^]6tS^eS-IuFr=|V&3c{-!@--.p1dDeB*');
define('LOGGED_IN_SALT',   'I;z;4%^bJw^f*@]RWjI9v]e}>KT1(9>Na~_2mNh10yb^rcb7<JD+tbv0B`gi( ],');
define('NONCE_SALT',       'i!{Wr4n?@Nfh!=ZEZ5LyA;~CK+UWzqmI5DU{X|Yn}Z/8iEviS+Xc:o@R@-2EOT{F');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
