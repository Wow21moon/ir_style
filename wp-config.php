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
define( 'DB_NAME', 'ir_style' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'aC;sa4X?^K]~{w1hw?d`lgo)Dpbm&2ybQsE~)BOG|+{u}D(c5#Ec;=}NC1q$3V,S' );
define( 'SECURE_AUTH_KEY',  '6 LQ,~[0Q5QSZ7#*sY*7$6H)u,P3@,o#y{`$S9}A3*Pil?/rjOd7eRH!rB6|F.G!' );
define( 'LOGGED_IN_KEY',    '6~)P<R;N.P}uuh|gILzk~=-rK;2qARvXy[uPq1qcq<SdjXi%7@3YL,YB*41yP}gT' );
define( 'NONCE_KEY',        'l/Xa!k<>Ao{05UHL{&.#|$KuVU0Hcxs50+j-8lYfo@`|(drEpME9M+?BV9xLA;4d' );
define( 'AUTH_SALT',        '&~xMz`7+3Q&I|Cajd;Mym#qz)#qH#wuAza@PuTlTomwwe8^.JKf.R%Vd|M*!TLPE' );
define( 'SECURE_AUTH_SALT', 'm0I%*CsaO+P232j@/=~pl4O=sA2M(w4yRd{(V/IIJW[7vR;(np @ U.`)Wgq{F(D' );
define( 'LOGGED_IN_SALT',   ')cNQ!s7I->dlxG+UWmDeWA?aY&&[%@G`5pqx*4=)X=)bE4(R4?YTERG:V:Lw(3g@' );
define( 'NONCE_SALT',       '-a.:j>#341YpgkjXq%RsP7~i>;y~_2g S;bE6w51dMTtdxk3tfX92`f7kWyx!{]]' );

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
