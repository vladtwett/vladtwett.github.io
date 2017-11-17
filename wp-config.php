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
define('DB_NAME', 'u386345494_b1');

/** Имя пользователя MySQL */
define('DB_USER', 'u386345494_t');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'sQQAe3Jvzyma8Ib5jQ');

/** Имя сервера MySQL */
define('DB_HOST', 'mysql.hostinger.ru');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'p !D a;RL#1+Drxd&+ytvb|q Lc{9eu&:y`dYv/N`HycBrmD?=6@n!-=<dte$f^(');
define('SECURE_AUTH_KEY',  ')MI$f$/7N/J[e=x|<K2DH{Cv3fW15[GVE0dAK3-m_pD3KR;/d;=<zP7q/;FG|<ke');
define('LOGGED_IN_KEY',    'YNeO|@`Abcw@*G0<,f5-~i7t[(arbNvIS5$%%/)a=P2~U`iJGX---1puNKcOGHxm');
define('NONCE_KEY',        ',B|[=!OQ8Guv!oU4RbHBX#W;aJ.R&!{-|{.IY#14j(QKzV]pLz+[rW,4]6@)i9zT');
define('AUTH_SALT',        '.r?@qzy+|n,Z%|8)a|9n~CE+``#Zm[qnHp4syW5LPZ{.<l5a+vsI9KQafYavYMU:');
define('SECURE_AUTH_SALT', '`pb6ySd1xQ-0|hjb+Y+Q3d+PEn=&,SY0[K|B-xhhg_wM:0Q2Q_b>.PsF8iEe1/Nv');
define('LOGGED_IN_SALT',   '!TquYQ*X958_8Yy[pS;LcHCejo36>/EiR0W;u!hg<~KA<1LK?^ BbX>u)&T;%I|N');
define('NONCE_SALT',       's2=gms`zH!Um{dlL%!kA+G>)F-F{D36>Vi|&Mh@Dry+CLVXZjt|6td).VavBZ N|');

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
