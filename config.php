<?php
defined('MOODLE_INTERNAL') || die();
$THEME->doctype = 'html5';
$THEME->name = 'vars'; // Name of the theme
$THEME->sheets = array(''); // Stylesheets for the theme
$THEME->editor_sheets = [];
$THEME->parents = ['boost']; // Parent theme
$THEME->enable_dock = false;
$THEME->yuicssmodules = array();
$THEME->javascripts = array(''); // JS Files for the theme
$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->csspostprocess = 'theme_remui_process_css';
$THEME->requiredblocks = '';
$THEME->addblockposition = BLOCK_ADDBLOCK_POSITION_FLATNAV;
$THEME->hidefromselector = false;
$THEME->haseditswitch = true;


// This is the function that returns the SCSS source for the main file in our theme. We override the boost version because          
// we want to allow presets uploaded to our own theme file area to be selected in the preset list.                                  
$THEME->scss = function ($theme) {
    return theme_vars_get_main_scss_content($theme);
};
