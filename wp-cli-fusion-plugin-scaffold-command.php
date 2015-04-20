<?php
/*
 * Scaffold a project following Fusion Engineering team's guidelines.
 *
 * @author goldenapples
 */
class Fusion extends Scaffold_Command {

	/**
	 * Scaffold a plugin.
	 *
	 * ## OPTIONS
	 *
	 * <slug>
	 * : The slug for the plugin.
	 *
	 * [--plugin_name=<title>]
	 * : Human-friendly title for the plugin. Will generate a warning if it doesn't sanitize to the value of the slug.
	 *
	 * [--includes_styles=<bool>]
	 * : Whether or not to scaffold assets/scss directories and build tasks
	 *
	 * [--includes_scripts=<bool>]
	 * : Whether or not to scaffold assets/js directories and build tasks
	 *
	 * @subcommand plugin
	 * @synopsis <name> Plugin name
	 */
	public function plugin( $args, $assoc_args ) {

	}

}
