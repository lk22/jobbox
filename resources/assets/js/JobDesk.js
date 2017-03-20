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



        var jobsModalBtn = new Component('.modal-trigger');

        jobsModalBtn.click(function() {
            $('#jobsModal').modal();
        });

    }

    defineEditorOn(element) {
        tinymce.init({
            selector: 'job-editor'
        });
    }

}
new JobDesk();
