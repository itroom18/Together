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
define( 'DB_NAME', 'together' );

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
define( 'AUTH_KEY',         '8rz`[<3&C:0EF9^NA3ljT?&S9]i^-,0N+e. r%GmC>n>,}ni$@.OdxmA%!pH<{Ky' );
define( 'SECURE_AUTH_KEY',  '0bx7|=Y@Sa)+2!Jj=dFBDCDsS&=_ !#6aOq=4WX@<l3k0{#=8^ O_vk:j9zp^R|U' );
define( 'LOGGED_IN_KEY',    'NH>FQ54~GEu Ys g*m]0A%Da=i>yY@SM%,`Pja+,;KvKX?4q}F:yuhV30rfk4Jue' );
define( 'NONCE_KEY',        '-{yx~?>M<G@eKh>2UN6,rK!^)G{ 44bKNQPwOF_u>.6rS_wvtQ1#^{&E-cp[,R/d' );
define( 'AUTH_SALT',        'QJ2L!7%3lBZ}CdU`WdRF!M1pwELoyyK3]E.7lwViYVbYXnu^fQOjH=]K1tiE&sib' );
define( 'SECURE_AUTH_SALT', '(VfHUT<A;`:m18au{l8*IL|P3kczsY+:_,_yDX{L Wz4q+d ]y4-fp8H*K<MB1Kx' );
define( 'LOGGED_IN_SALT',   'B]6p,wn-_I+}p/.p6nv&Gzmt4@P= sqc^Kj43RlUcU=%m*z1={{(L<21C5;]#DfC' );
define( 'NONCE_SALT',       'M^k?LqUa` P)`}8(B*1Bie0qg$S=i{3NP0/9P3oH9L3 k?:Bpp0+4q9Y])RQ28=Y' );

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
