// rendering Viewi component into DOM node
function renderViewiComponents() {
    var viewiApp = viewiBring('viewiApp');
    // render todo app
    viewiApp.runComponent('TodoApp', '#todo-app');
    // render menu
    viewiApp.runComponent('MenuBar', '#sidebar');
    // render counter app
    viewiApp.runComponent('Counter', '#counter-app');
}

// wait for Viewi scripts
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', renderViewiComponents);
} else {
    renderViewiComponents();
}

