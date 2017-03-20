import Helper from './Helper.js';
import Component from './helpers/Component.js';
import Editor from './components/Editor.js';
import Connection from './utils/Connection.js';

/**
* main App class
*/
class JobDesk {

    constructor() {
        this.helper = new Helper();
        // this.connection = new Connection();
        this.component = new Compoenent();
        this.fire();
    }

    fire() {

        /**
         * define wysiwyg editor to textareas
         * @type {Component}
         */
        var tinymce = this.component.renderEditorWith({
            selector: 'textarea.tinymce',
            min_height: 400
        });

        var jobsModalBtn = this.component.get('.modal-trigger');

        jobsModalBtn.click(function() {
            $('#jobsModal').modal();
        });

    }

}
new JobDesk();
