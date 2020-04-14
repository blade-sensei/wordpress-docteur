<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'site_docteur');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'alhP1W4a<lclo_-otx2tE0`C;SWQ*Y&sc-3*[/Zz00VUL>;hEO:9r[y8%`W}H*m=');
define('SECURE_AUTH_KEY',  '+EG!uT6yRSBbw@;TQszDLD#Lz774nK]}WIM<vdSt7Q6LK6?E9OX`h|J:#e0:!L^.');
define('LOGGED_IN_KEY',    'kl:]moe8|R+FX-5#L /!+DWh(~xI!-8>{Fl8D`+,la#[w5%P2-(aySX@Knr84u@M');
define('NONCE_KEY',        'p]A:Gw7c]gp]ACidV5gw0Ves+0vSDM=~z!#U~xL}!i2+.*`DNlW(u*jmzB:PI.h<');
define('AUTH_SALT',        'w-%;mh42?cn^eMrXO|,-TL$!F~[%V|LA*hebyE0~<3!Qkv3gP</),10$E-?Bx`cD');
define('SECURE_AUTH_SALT', 'o5;*qW|T5D#iA8hR66hRObmI.fU|v`Z;^ M--wb|y%CVC-y!soo+H^/MV!ZotodU');
define('LOGGED_IN_SALT',   'up[2$iHeW9)*T?bjF]1srFdkhW ,De6f+ycQV9^ qmhO%p!bD5xO2AMF@?^[GS+w');
define('NONCE_SALT',       'w,:F@k>}a:SNmG8!p{Dcli4h:}NO37b*N`9$~tyCO4y9V&WH_9-P(2VaJN&*-VQ[');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'site_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');