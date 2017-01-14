<?php
	/*
	   Plugin Name: Cheat Sheet
	   Plugin URI: https://github.com/IT2BE/fabtotum-cheatsheet
	   Version: 1.0
	   Description: A FABui Plug-in to check out G-codes
	   Author: Marcel Trapman
	   Author URI: http://www.marceltrapman.com
	   Plugin Slug: cheatsheet
	   Icon: fa fa-tint
	 */

	class Cheatsheet extends Plugin {
		public function __construct() {
			parent::__construct();

			$this->lang->load($_SESSION['language']['name'], $_SESSION['language']['name']);

            $this->layout->add_css_file(array('src'=>'application/plugins/cheatsheet/assets/css/main.css', 'comment'=>'css for cheatsheet module'));
        }

		public function index() {
			$this -> layout -> view('index', '');

            $this->layout->add_js_file(array('src'=>'application/plugins/cheatsheet/assets/js/main.js', 'comment'=>'javascript for cheatsheet module'));
        }

		public function remove() {
			/** remove files */
			shell_exec('sudo rm -rf '.PLUGINSPATH.strtolower(get_class($this)));

			/** SET MESSAGE TO DISPLAY */
			$this->session->set_flashdata('message', 'Plugin '.get_class($this).' removed');
			$this->session->set_flashdata('message_type', 'info');

			/** REDIRECT TO PLUGINS PAGE */
			redirect('plugin');
		}
	}
?>