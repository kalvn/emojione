# shaarli-plugin-emojione
Add colorful emojis to your Shaarli

# Installation
```
cd plugins
git clone https://github.com/NerosTie/emojione
```

Or download [the zip archive](https://github.com/NerosTie/emojione/archive/master.zip) and extract it in `plugins/emojione`.

Then activate the new plugin.

# Options
ASCII Smiley is deactivated by default.  
http://git.emojione.com/demos/2.1.4/ascii-smileys.html  
To activate it, edit `js/emojione.js`:
```
emojione.ascii = false; /* change to 'true' to have ASCII conversion */
```
SVG is the default format for emojis.
If you prefer PNG, edit `js/emojione.js`:
```
emojione.imageType = 'svg'; /* change to 'png' to have emojis in PNG */
```

The autocomplete function is deactivated by default.  
http://git.emojione.com/demos/2.1.4/autocomplete.html  
To activate it, edit `emojione.php`:
```
/*
* Uncomment the three lines below to use the autocomplete function.
* If your theme use jquery, let the first line commented.
*/
#    $data['js_files'][] = PluginManager::$PLUGINS_PATH . '/emojione/js/jquery.min.js';
#    $data['js_files'][] = PluginManager::$PLUGINS_PATH . '/emojione/js/textcomplete.min.js';
#    $data['js_files'][] = PluginManager::$PLUGINS_PATH . '/emojione/js/autocomplete.js';
```
