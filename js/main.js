// lauchn memories
function launchMemories() {
    var scriptLaunch = document.createElement('script');
        scriptLaunch.src = '../launcher.php';

    document.body.appendChild(scriptLaunch);
};

// delete Index Button
function deleteIndex() {
    var scriptDelete = document.createElement('script');
        scriptDelete.src = '../delete_index.php';

    document.body.appendChild(scriptDelete);
};
