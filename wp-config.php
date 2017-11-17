<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'scroboau_5dots');

/** Имя пользователя MySQL */
define('DB_USER', 'scroboau_5dots');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '7m0@6*[u');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'YEDNa9=5A=;iln2kJtKQF+NG3 gXb%_I*8_h~9&TOh?81zl`u{YMUrR^,]hN)t$D');
define('SECURE_AUTH_KEY',  '0?>M}Nc(<.&si{GV9cU|.s>.#jShw},AL9>->7gk }]mzp{$$$zC&-LV{4$iL.y.');
define('LOGGED_IN_KEY',    'Iy>KZi,{Oylys2z+doUDjoUXqBX`]5WmLZN9?Y|&#B;4i;v0H31DKtWy=$6<M*tE');
define('NONCE_KEY',        'Bn;dYpY_v{K{f!EE<3+K|7}L@hZ8g.452}!}[JZO9o,+ni!;5pF2Ec;,n8{]]xg6');
define('AUTH_SALT',        'ktjoQ_qY=3:#wG^4Ua8.<$=~~,g</yU{^N {neDJpzcPMls.1:T#Z6Q%aSu<&JG?');
define('SECURE_AUTH_SALT', '7%i$}3J2-l{t4Z1iq}hp^z<4g~>u{D)[R8nnN`V_M&kfI@syaXd<gIz*!yLurl+F');
define('LOGGED_IN_SALT',   '@I]7skwBS=`Yb[zJ{m>vm[(>*(K3Z`T8p)Xu7Bf#ErtSSP ~ !645LS/0X,~_nwy');
define('NONCE_SALT',       '1vCT|xP%LlUM)mR/ylmX!3v-J6(iAg<-o`gMBB0.[dr<Kc%A/;QF+0;Y_Bx6ivHA');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
define('WP_HOME', 'https://five-dots.ru/');
define('WP_SITEURL', 'https://five-dots.ru/');

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
