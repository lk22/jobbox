import Helper from './Helper.js';
import Component from './helpers/Component.js';
import Connection from './utils/Connection.js';

/**
* main App class
*/
class JobDesk {

    constructor() {
        this.helper = new Helper();
        // this.connection = new Connection();
        this.fire();
    }

    fire() {

        /**
         * define wysiwyg editor to textareas
         * @type {Component}
         */
        this.defineEditorOn('textarea');

        var jobsModalBtn = new Component('.modal-trigger');

        jobsModalBtn.click(function() {
            $('#jobsModal').modal();
        });

    }

    /**
     * define new tinymce editor options
     * @param  {[type]} element [description]
     * @return [type]           [description]
     */
    defineEditorOn(element) {
        tinymce.init({
            selector: element,
            min_height: 650
        });
    }

}
new JobDesk();
