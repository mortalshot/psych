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
define( 'DB_NAME', 'Psych' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'yHWz}7~sTp+3G>3c26.sy:(4jqc&9x/*SORi{1Ysz&Rg$P[>WvXEw$*7Pz@b:A]S' );
define( 'SECURE_AUTH_KEY',  '`&2^:|iPA+|BvdFs{V5 NgcjN+<6A2fow6sU5 flbW###8h+7^z&F?6|Ne83B:~X' );
define( 'LOGGED_IN_KEY',    'yBSz[IbP6LL=37%EYt}G 0h|a]PKJ_2{XOFPaT_2#Y[h8IpSZ<4nP+AaM#MTEBEf' );
define( 'NONCE_KEY',        'J/=M4M4L _S~b=r=t2-jcW{/do$|S!]iuEM=d49R0:t.&in3I>NFBW.:Db3K.T;2' );
define( 'AUTH_SALT',        'LtpWDILQespxH#@x[19k42^wf*f1O+R}m^P$+1-o}4~ 2N*fKZ8@Db@Gr|Pw6*Jj' );
define( 'SECURE_AUTH_SALT', '00O`j$3q>56,B2p3&+9nGGI.X?(-Kq&^pws:cazm5z~|DJM(Gn}7k+4kmebn]j!R' );
define( 'LOGGED_IN_SALT',   'h,17kU<^`%a2wL~x4*<Fxjeu_.^`v_yJygEe`*E)d966gRZ|i^BqgYeNq2GCFPZP' );
define( 'NONCE_SALT',       'OihS-Me,J6I7a $@X{4&dkY+p`25j_,k|=>b] <yt$%OC$x7:rdIVKAy@Q-aTXi2' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
