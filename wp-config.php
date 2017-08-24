<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'portfolio_wp');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'V^8<nsQRzu7uzK5.vKL6SoBEA289I9>RGC+ls1dtm,wHGaxF&x*>0d%Poj#y>~TQ');
define('SECURE_AUTH_KEY',  '=UfE87KG4q;M>+9H<z~&,B ^VU.sb1afp}AMgJ,hA0c1a$EZ_vq:J$IFE%:V3ysJ');
define('LOGGED_IN_KEY',    'NS3r+L6AuWReW:Kc:y&:t%$sQh3izLfzjdfd:5sLq1=RFD&C1h05YqULweoXQ]-B');
define('NONCE_KEY',        'VY$yJ::qpG(lDIaVNVtqh]I1Sf(-2`Zxp,]-{%C(aunNIjx-#$nEYl2r74g pJu8');
define('AUTH_SALT',        ';KU;MMTKU.Ue62J|0J_)ywCBo@bt|fzOY$GG9C1xLgeqp-dNC pa!gh*B,ykbKy1');
define('SECURE_AUTH_SALT', '>YC!Q}ORhks<ir+003Uf1`Kj9;#lq< 4AdSueY/SEgevK[_NzWw9k&Cz2NWO4mxS');
define('LOGGED_IN_SALT',   '^$uH+*^r^iW)K=R(R^o:a]ho-MbsrWf3XbIYBg_XIBV5w(3xT21n<n+W?k;1IJq(');
define('NONCE_SALT',       'RYCVWU-F##cP;pba`l%FfnD#WcA<?j]/Q1p:r{z88md-2iZCsy<X7Vc@OX-OB6!7');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');