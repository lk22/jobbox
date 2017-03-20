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
        this.component = new Compoenent;
        this.fire();
    }

    fire() {

        /**
         * define wysiwyg editor to textareas
         * @type {Component}
         */
        this.defineEditorOn('textarea.tinymce');

        var jobsModalBtn = new Component('.modal-trigger');

        jobsModalBtn.click(function() {
            $('#jobsModal').modal();
        });

    }



}
new JobDesk();
