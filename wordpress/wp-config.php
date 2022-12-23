<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'shop' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'Admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'giveme5' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*/qLn93-2[`<1eU%A`g2c?[_iy/4h/%N^w}+;TD xyo|EH3upj]CO4o!7>qI%LUf' );
define( 'SECURE_AUTH_KEY',  '$.RdF#G~L0@mS/U8>0bSGlI1T8yHYy)3JocWZKfg&v}Y>t/`7LDsR,~PZ.npLy1M' );
define( 'LOGGED_IN_KEY',    'Ca2PihitJW^U(.-|gqj.8%`x@VTC(>tp3|C+hs#4bj*O}Oi8zT+rTwZE&HSDvwHI' );
define( 'NONCE_KEY',        'Q_@A:7>a3q-ax3{BSO-ehnWV*ygH2C4XLD_vO6{QnSavM1IVRzI,4v@(SA@a6cgH' );
define( 'AUTH_SALT',        ':4;mamHL7|^(^r rUOgoc!L*WYh(4JX5P7h&{;D-6T<$WS93X(Yn}#;~>9OH)vQa' );
define( 'SECURE_AUTH_SALT', 'WDc~u2p?C?O]^LDZ .<7]2*n_j>hpp5B@nUdwN6*+2Xq|wz41GO@5Ks#nLs7jp**' );
define( 'LOGGED_IN_SALT',   'A_&1b+]80E}Gx]L[$>Wl4CrA 4=$hn*WmHR)lj>DD:,#U::xYM~:[5nrzI (tDbB' );
define( 'NONCE_SALT',       'FR]JxolspbA()QK;+9{n| :<MBzBSJF_(~eO0*bP@;}it|b!m&$y*M6<Z(Tl^$j}' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
