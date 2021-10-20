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
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'child_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'admin' );

/** Имя сервера MySQL */
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
define( 'AUTH_KEY',         '1n,:lK~LR;UVau-#2i`/qUaK4PtL/z*39rr=AI)/X&zn2tD#[0:-L;,[rZ$Q/`wz' );
define( 'SECURE_AUTH_KEY',  'Bba(@ZVp+zg6^;V{#mF=1jQY8LgrnQjo]kO5*_5Vk~<qP]n 9z<pti_H#$6blB*l' );
define( 'LOGGED_IN_KEY',    'HNy,soAf@R&{jKTbZ9s{wqpC}`JVcpfSmdT@jtq}*ii4mM{rZK)Un[1K{wbEYMA4' );
define( 'NONCE_KEY',        '#H%r]ZXX$P>gRp1}b&$^]WOl(y3Bm@=x$<J8FWgmN?@%]X}.0KjJHD$Dx0789/?S' );
define( 'AUTH_SALT',        '4SuYVNllND,M;y5@Z<gGsvgsXXi0Bv_k34~88*uP@m{30dnm33RkNw;y(ohFiDC%' );
define( 'SECURE_AUTH_SALT', 'DW`D/O.~(@t?M=mE&xq <Vh3|T[$c,|:}1Kf`gT?[f.q|z4t~kxu6#h``})Y+)ns' );
define( 'LOGGED_IN_SALT',   '(7W1@%T% W&kDm(cxtEYGW#nT.G%4s!Kh{@%ZR6%i+1ZPF<)`] CV|CvUa/Ru1P:' );
define( 'NONCE_SALT',       'QF#wyNU:|?DMWV$}BeNbTl,1)]Xvbaq22eQ7jAM:_,R?+.UVH3IAy$]6rqUODh)R' );

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
