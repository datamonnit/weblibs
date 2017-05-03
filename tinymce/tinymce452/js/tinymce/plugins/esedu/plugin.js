tinymce.PluginManager.add('esedu', function(editor, url) {
    // Add a button that opens a window
    editor.addButton('esedu', {
        text: 'My button',
        icon: false,
        onclick: function() {
            // Open window
            editor.windowManager.open({
                title: 'Example plugin',
                body: [
                    {type: 'textbox', name: 'title', label: 'Title'}
                ],
                onsubmit: function(e) {
                    // Insert content when the window form is submitted
                    editor.insertContent('Title: ' + e.data.title);
                }
            });
        }
    });

    // Adds a menu item to the tools menu
    editor.addMenuItem('esedu', {
        text: 'Oma toiminto nr. 1',
        context: 'tools',
        onclick: function() {
            // Open window with a specific url
            editor.windowManager.open({
                title: 'Esedu Home',
                url: 'http://esedu.fi',
                width: 800,
                height: 600,
                buttons: [{
                    text: 'Close',
                    onclick: 'close'
                }]
            });
        }
    });
});
