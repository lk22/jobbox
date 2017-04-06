import Helper from './Helper.js';
import Component from './helpers/Component.js';
import Connection from './utils/Connection.js';

// form components
import CreateNewJobApplicationForm from './components/forms/CreateNewJobApplicationForm.js';

// modal components
import UserUpdateModal from './components/modals/UserUpdateModal.js';

/**
* main App class
*/
class JobDesk {

    constructor() {

        this.userModal = new UserUpdateModal();

        this.helper = new Helper();
        this.api = '/api';

        this.jobsModalBtn = new Component(
            '.jobs-modal-btn, floating-jobs-modal-btn'
        );

        this.updateUserBtn = new Component(
            '.update-user-btn, .floating-user-update-modal-button'
        );

        this.jobSelectFields = new Component(
            '#current_positions, #DreamJob'
        );

        this.companySelect = new Component(
            '#companies'
        );

        /**
         * new job application field
         */

            this.defineEditorOn('textarea.new-job-application-field', 500);

        this.fire();
    }

    fire() {

        // render select fields
        this.jobSelectFields.material_select();
        this.companySelect.material_select();

        /**
         * add click event on button to toggle jobs modal component
         * @param  {[type]} ( [description]
         * @return {[type]}   [description]
         */

        this.fireEventOn(this.jobsModalBtn, 'click', function() {
            $('#jobsModal').modal();
        });

        /**
         * add click event for updating user form
         * @param  {[type]} ( [description]
         * @return {[type]}   [description]
         */

        this.fireEventOn(this.updateUserBtn, 'click', function() {
            $('#updateUserModal').modal();
        });

        /**
         * show logout modal
         * @return [type] [description]
         */
        $('.logoutModalBtn').click(function() {
            $('#logoutModal').modal();
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
