import Editor from './../components/Editor.js';

export class Component {

    constructor(){
        this.editor = new Editor();
    }

    /**
     * get element
     * @param  {[type]} element [description]
     * @return [type]           [description]
     */
    on(element) {
        return $(element);
    }

    /**
     * render text editor with specific options
     * @param  {[type]} options [description]
     * @return [type]           [description]
     */
    renderEditorWith(options = {}) {
        return new Editor(options);
    }

}
export default Component;
