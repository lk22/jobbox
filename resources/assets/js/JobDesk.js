import Helper from './Helper.js';
import Component from './helpers/Component.js';
import Connection from './utils/Connection.js';

/**
* main App class
*/
class JobDesk {

    constructor() {
        this.helper = new Helper();

        this.jobsModalBtn = new Component(
            '.jobs-modal-btn, floating-jobs-modal-btn'
        );

        this.updateUserBtn = new Component(
            '.update-user-btn, .floating-user-update-modal-button'
        );

        this.jobSelectFields = new Component(
            '#current_positions, #DreamJob'
        );

        /**
         * new job application field 
         */
        
            this.defineEditorOn('textarea.new-job-application-field', 500);

        /**
         * textarea for updating user form
         */
            
            this.defineEditorOn('textarea.updateUserDescription', 100);
        
        this.fire();
    }

    fire() {
    
    
        // render select fields
        this.jobSelectFields.material_select();

        /**
         * add click event on button to toggle jobs modal component
         * @param  {[type]} ( [description]
         * @return {[type]}   [description]
         */
        // jobsModalBtn.click(() => {
        //     $('#jobsModal').modal();
        // });

        this.fireEventOn(jobsModalBtn, 'click', function() {
            $('#jobsModal').modal();
        });

        /**
         * add click event for updating user form
         * @param  {[type]} ( [description]
         * @return {[type]}   [description]
         */
        // updateUserBtn.click(() => {
        //     $('#updateUserModal').modal();
        // });
        
        this.fireEventOn(updateUserBtn, 'click', function() {
            $('#updateUserModal').modal();
        });
        

    }

    fireEventOn(element, event, callback) {
        $(element).on(event, callback);
    }

    /**
     * define new tinymce editor options
     * @param  {[type]} element [description]
     * @return [type]           [description]
     */
    defineEditorOn(element, height) {
        tinymce.init({
            selector: element,
            min_height: height
        });
    }

}
new JobDesk();
