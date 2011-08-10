<?php

//***********************************************************
//**               TinyMCE Config                          **
//***********************************************************
//**@package coursemenu                                    **
//**@Institution: oohoo.biz                                **
//**@authors : Patrick Thibaudeau                          **
//**@version $Id: version.php,v 1.0 2011/08/05             **
//***********************************************************
//***********************************************************
defined('MOODLE_INTERNAL') || die;

if ($hassiteconfig) { // needs this condition or there is error on login page
    $settings = new admin_settingpage('local_mceconf', 'TinyMCE configuration');
    $ADMIN->add('localplugins', $settings);
    //Create default plugin list. These are Moodle default plugins.
    $settings->add(new admin_setting_configmulticheckbox('mceconf_default_plugins', get_string('default_plugins', 'local_mceconf'),get_string('default_plugins_help', 'local_mceconf'), 
                                                        array('advimage' =>'1',
                                                              'safari'=>'1',
                                                              'table'=>'1',
                                                              'style'=>'1',
                                                              'layer'=>'1',
                                                              'advhr'=>'1',
                                                              'advlink'=>'1',
                                                              'emotions'=>'1',
                                                              'inlinepopups'=>'1',
                                                              'searchreplace'=>'1',
                                                              'paste'=>'1',
                                                              'directionality'=>'1',
                                                              'fullscreen'=>'1',
                                                              'moodlenolink'=>'1',
                                                              'nonbreaking'=>'1',
                                                              'contextmenu'=>'1',
                                                              'insertdatetime'=>'1',
                                                              'save'=>'1',
                                                              'iespell'=>'1',
                                                              'preview'=>'1',
                                                              'print'=>'1',
                                                              'noneditable'=>'1',
                                                              'visualchars'=>'1',
                                                              'xhtmlxtras'=>'1',
                                                              'template'=>'1',
                                                              'pagebreak'=>'1',
                                                              'spellchecker'=>'1'
                                                            ), 
                                                        array('advimage' =>get_string('advimage', 'local_mceconf'),
                                                              'safari'=>get_string('safari', 'local_mceconf'),
                                                              'table'=>get_string('table', 'local_mceconf'),
                                                              'style'=>get_string('style', 'local_mceconf'),
                                                              'layer'=>get_string('layer', 'local_mceconf'),
                                                              'advhr'=>get_string('advhr', 'local_mceconf'),
                                                              'advlink'=>get_string('advlink', 'local_mceconf'),
                                                              'emotions'=>get_string('emotions', 'local_mceconf'),
                                                              'inlinepopups'=>get_string('inlinepopups', 'local_mceconf'),
                                                              'searchreplace'=>get_string('searchreplace', 'local_mceconf'),
                                                              'paste'=>get_string('paste', 'local_mceconf'),
                                                              'directionality'=>get_string('directionality', 'local_mceconf'),
                                                              'fullscreen'=>get_string('fullscreen', 'local_mceconf'),
                                                              'moodlenolink'=>get_string('moodlenolink', 'local_mceconf'),
                                                              'nonbreaking'=>get_string('nonbreaking', 'local_mceconf'),
                                                              'contextmenu'=>get_string('contextmenu', 'local_mceconf'),
                                                              'insertdatetime'=>get_string('insertdatetime', 'local_mceconf'),
                                                              'save'=>get_string('save', 'local_mceconf'),
                                                              'iespell'=>get_string('iespell', 'local_mceconf'),
                                                              'preview'=>get_string('preview', 'local_mceconf'),
                                                              'print'=>get_string('print', 'local_mceconf'),
                                                              'noneditable'=>get_string('noneditable', 'local_mceconf'),
                                                              'visualchars'=>get_string('visualchars', 'local_mceconf'),
                                                              'xhtmlxtras'=>get_string('xhtmlxtras', 'local_mceconf'),
                                                              'template'=>get_string('template', 'local_mceconf'),
                                                              'pagebreak'=>get_string('pagebreak', 'local_mceconf'),
                                                              'spellchecker'=>get_string('spellchecker', 'local_mceconf')
                                                            )
                                                       )
            );
    //Text for Third party plugins
    $settings->add(new admin_setting_configtext('mceconf_plugins', get_string('plugins', 'local_mceconf'),
                    get_string('plugin', 'local_mceconf'), '', PARAM_TEXT));
    //Row one plugins
    $settings->add(new admin_setting_configtext('mceconf_buttons1_add', get_string('theme_advanced_buttons1_add', 'local_mceconf'),
                    get_string('theme_advanced_buttons1', 'local_mceconf'), '', PARAM_TEXT));
    //Row two plugins
    $settings->add(new admin_setting_configtext('mceconf_buttons2_add', get_string('theme_advanced_buttons2_add', 'local_mceconf'),
                    get_string('theme_advanced_buttons2', 'local_mceconf'), '', PARAM_TEXT));
    //Row three plugins
    $settings->add(new admin_setting_configtext('mceconf_buttons3_add', get_string('theme_advanced_buttons3_add', 'local_mceconf'),
                    get_string('theme_advanced_buttons3', 'local_mceconf'), '', PARAM_TEXT));
    
}
?>
