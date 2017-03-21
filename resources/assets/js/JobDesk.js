import Helper from './Helper.js';
import Component from './helpers/Component.js';
import Connection from './utils/Connection.js';

/**
* main App class
*/
class JobDesk {

    constructor() {
        this.helper = new Helper();
        
        this.fire();
    }

    fire() {

        /**
         * define wysiwyg editor to textareas
         * @type {Component}
         */
        this.defineEditorOn('textarea');

        var jobsModalBtn = new Component(
            '.jobs-modal-btn, floating-jobs-modal-btn'
        );

        var updateUserBtn = new Component(
            '.update-user-btn, .floating-user-update-modal-button'
        );

        jobsModalBtn.click(function() {
            $('#jobsModal').modal();
        });

        updateUserBtn.click(function() {
            $('#updateUserModal').modal();
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
            min_height: 500
        });
    }

}
new JobDesk();
