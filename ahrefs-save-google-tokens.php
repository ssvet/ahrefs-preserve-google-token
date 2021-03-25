<?php
/**
Plugin Name: Ahrefs Save Google Tokens
Plugin URI: https://ahrefs.com/wordpress-seo-plugin
Description: Do not revoke Google token when account disconnect (click on disconnect link or on some fatal error). This way existing in DB tokens can be used again after account was disconnected. Do not forget to save tokens from DB field to some text file.
Author: ssvet
Version: 1.0
Requires at least: 5.0
Requires PHP: 5.5
 */

declare(strict_types=1);
namespace ahrefs\AhrefsSeo;

if ( ! defined( 'AHREFS_SEO_PRESERVE_TOKEN' ) ) {
	define( 'AHREFS_SEO_PRESERVE_TOKEN', true );
}
