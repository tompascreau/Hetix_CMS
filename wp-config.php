<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'projet wp' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(/vf%|X#D.xK7E/xvRg@7?Yn/n2 q^j:/rDf9rZrtNpSYSUN3H1r!PZ@ZI2Xz.mB' );
define( 'SECURE_AUTH_KEY',  ';PRPUD[_nbz8wZjSqXAuE=eS&Hc6+Lc762G:cHyHVkAApXW-n;WNK6Z6F,vB 6u~' );
define( 'LOGGED_IN_KEY',    '3To%d5wf&2.0c:@C}5%!B,.zTb>e,?N.D_i.$qcheu4mx5~R]|3(8a(P/o!}73(l' );
define( 'NONCE_KEY',        'i9P&BQnB3yYWRs7TO[&}jQd!,$Qep(,IO9%G;-?~NA $5$WT*~UxAb9a7(bmftDZ' );
define( 'AUTH_SALT',        'mW&VO5{#!ax5JlrQZjSv9 Cp9[j[w;_%o%lg4Q]pHq8QzFwiuFiA<%Lzs~u|Nf+Q' );
define( 'SECURE_AUTH_SALT', '5%lo[zrsCOZm9yNwLrl_NEcX1n#??N,K*.[)Bw52ag.`Zfd)4g34F3@(_1P_d.^T' );
define( 'LOGGED_IN_SALT',   '}kYQ<Th-u]tP E:8q3zm:kE}i_.^^[;Rd6}7i[yYwV4h%Qx}yy{e2y 3(&Zk}_/8' );
define( 'NONCE_SALT',       '6*6$g;;1(|K=@?ZG1<-Kn]-*FS:t{(P.J089fY5MkCToo$J~&p7n*@)j-Qad>G;h' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
