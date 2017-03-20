export class Editor {

    constructor(element) {
        this.defineEditorOn(element)
    }

    /**
     * define new tinymce editor options
     * @param  {[type]} element [description]
     * @return [type]           [description]
     */
    defineEditorOn(options) {
        tinymce.init(options);
    }

}
export default Editor;
