<?php
function hook_emojione_render_includes($data)
{
    $data['css_files'][] = PluginManager::$PLUGINS_PATH . '/emojione/css/emojione.css';

    if($data['_PAGE_'] === Router::$PAGE_EDITLINK){
        $data['css_files'][] = PluginManager::$PLUGINS_PATH . '/emojione/css/autocomplete.css';
    }

    return $data;
}

function hook_emojione_render_footer($data)
{
    /*
     * Uncomment the three lines below to use the autocomplete function.
     * If your theme use jquery, let the first line commented.
     */
#    if($data['_PAGE_'] === Router::$PAGE_EDITLINK){
#        $data['js_files'][] = PluginManager::$PLUGINS_PATH . '/emojione/js/jquery.min.js';
#        $data['js_files'][] = PluginManager::$PLUGINS_PATH . '/emojione/js/textcomplete.min.js';
#        $data['js_files'][] = PluginManager::$PLUGINS_PATH . '/emojione/js/autocomplete.js';
#    }

    $data['js_files'][] = PluginManager::$PLUGINS_PATH . '/emojione/js/emojione.min.js';
    $data['js_files'][] = PluginManager::$PLUGINS_PATH . '/emojione/js/unicode.js';
    $data['js_files'][] = PluginManager::$PLUGINS_PATH . '/emojione/js/emojione.js';

    return $data;
}
