<?php

/**
 * Checks if we are in a live environment.
 *
 * When no environment constant is set, the environment is considered a live environment.
 *
 * @since 1.0.0
 * @return bool
 */
function is_live() {
	return (
		// The constant ENVIRONMENT needs NOT to be set or be set to LIVE.
		! defined( 'ENVIRONMENT' ) || 'LIVE' === ENVIRONMENT
		// Environment needs to be defined and not set to DEV or STAGE.
		|| ( defined( 'ENVIRONMENT' ) && ! in_array( ENVIRONMENT, [ 'DEV', 'STAGE' ], true ) )
	);
}

/**
 * Checks whether user is a normal site visitor.
 *
 * This is mostly used to include scripts related to analytics and data tracking. For that, we normally do not want
 * to have admin calls and frontend calls made by logged-in users.
 *
 * Use this in combination with other environment functions, e.g. is_live().
 *
 * @since 1.0.0
 * @return bool
 */
function is_visitor() {
	return (
		// Only include frontend calls
		! is_admin()
		// We do not want to include admins.
		&& ! current_user_can( 'edit_posts' )
	);
}

/**
 * Checks if we are in a stating environment.
 *
 * @since 1.0.0
 * @return bool
 */
function is_stage() {
	return defined( 'ENVIRONMENT' ) && 'STAGE' === ENVIRONMENT;
}

/**
 * Checks if we are in a development environment.
 *
 * @since 1.0.0
 * @return bool
 */
function is_dev() {
	return defined( 'ENVIRONMENT' ) && 'DEV' === ENVIRONMENT;
}
