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
define('DB_NAME', 'maquette');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'jean');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'auf');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');
define('FS_METHOD', 'direct');

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
define('AUTH_KEY',         '+5i7H=~C!:SN2A$$l3kJadGGK3Pde^-Pk).j-pyVC__X1yF+DCo<2g*y<> Q]lk-');
define('SECURE_AUTH_KEY',  ';Cg^z9-#-cMR&d:Q)?[$sTm(tH.a+C%i=hqJ0^%#mCK8zi}cUczNBY]nj4ldN8b6');
define('LOGGED_IN_KEY',    'YQ9B}1e,e|~JgYsXWK8RW(~S~oW:5PAYhJq=Zh3Fmj^+Ut~!v;9fsE5s kedCHd4');
define('NONCE_KEY',        '=i9DIszT{(jTgf>13R,h4&By=)I>yLdBD#{b.e^I,3.Yy](2.Xe.)sx1i*JuB|(#');
define('AUTH_SALT',        'b+H$MrurJk%U_uUymCOTSjxyPn,=+*DY/B:/QnXETX/x`6|pxR<CNuq]}yaiX%%x');
define('SECURE_AUTH_SALT', 'l4iFPa[QWG0<{DJ+2EQYR^jaRwt{msjy~m[#qg0jJ1$R4NkjZb1 :zLfV@d/`mQz');
define('LOGGED_IN_SALT',   '2Gjw1|wjIHY+$]wA17(J8*u.}BzkyYb|pmHXkbc/sgmMiUd4jGa&^tUuN*H_ CNV');
define('NONCE_SALT',       'd/7!`h(jy!-p]Cg3iRR@j~>;&M5|9PcJdY{ vT}v==#:&fLBFDl7H>z@hT$@-f]h');
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