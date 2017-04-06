(function (exports) {
'use strict';

var Request = function Request () {};

Request.prototype.send = function send (method, url, data, success, failure) {

    switch (method) {
        case 'POST':
            this.sendPostRequest(url, method, data, success, failure);
            break;

        case 'PUT':
            this.sendUpdateRequest(url, method, data, success, failure);
            break;

        case 'DELETE':
            this.sendDeleteRequest(url, method, data, success, failure);
            break;

        case '':
            this.sendGetRequestTo(url, method, data, success, failure);
        break;
    }

};

/**
* returning the current response from each sending request
*/
Request.prototype.getResponse = function getResponse (response) {

    console.log(response);

    return response;

};

/**
* Axios GET request
* @param url = the url to send request to
*/
Request.prototype.sendGetRequestTo = function sendGetRequestTo (url, success, failure) {

    $.get({
        url: url,
        type: 'GET',
        success: success,
        error: failure
    });

};

/**
* Axios POST request
* @param url = the url to send request to
* @param data = data to send with your request
*/
Request.prototype.sendPostRequest = function sendPostRequest (url, data, success, failure) {

    $.ajax({
        url: url,
        type: 'POST',
        data: data,
        success: success,
        failure: failure
    });

};

/**
* Axios PUT request
* @param url = the url to send request to
* @param data = following data to backend
*/
Request.prototype.sendUpdateRequest = function sendUpdateRequest (url, success, failure, data) {

    $.ajax({
        url: url,
        type: 'PUT',
        data: data,
        success: success,
        failure: failure
    });

};

/**
* Axios DELETE request
* @param url = the url to make a request to
*/
Request.prototype.sendDeleteRequest = function sendDeleteRequest (url, success, failure ) {

    $.get({
        url: url,
        type: 'DELETE',
        success: success,
        error: failure
    });

};

var Component = function Component(element){
    return $(element);
};

var Connection = function Connection() {
    this.request = new Request();
    this.component = new Component('#ethernetComponent');

    this.checkConnection();
};

/**
* Check the clients internet connection
*/
Connection.prototype.checkConnection = function checkConnection () {
    var client = navigator;
    var container = this.component;

    if (!client.online) {

        container.show();

        container.html('<p>You are currently on any internet connection find a connection and try again</p>');

    } else{
        container.hide();
    }
};

var Helper = function Helper(){
    this.request = new Request();
    this.connection = new Connection();
};

Helper.prototype.addEventTypeTo = function addEventTypeTo (element, type, callback) {
    	var elm = $(element);
    	return elm.on(type, callback);
};

Helper.prototype.getApi = function getApi (api) {
    	return '/api/' + api;
};

var CreateNewJobApplicationForm = function CreateNewJobApplicationForm() {
	this.request = new Request();
	this.form = new Component('.job-application-form');
};

CreateNewJobApplicationForm.prototype.fire = function fire () {

	var createApplicationBtn = this.form.find('.submitBtn');
	var jobApplicationTitle = this.form.find('#title');
	var jobApplicationfield = this.form.find('.new-job-application-field');

	createApplicationBtn.click(function(e) {
		e.preventDefault();

		var title = jobApplicationTitle.val();
		var jobApplication = jobApplicationfield.val();
		console.log("Values from form : " + title + ' ' + jobApplication);
	});

};

var UserUpdateModal = function UserUpdateModal() {

	this.helper = new Helper();
	this.request = new Request();
		
	this.form = $('.user-update-form');
	this.submitBtn = this.form.find('.user-update-form');
	this.fire();
};

UserUpdateModal.prototype.fire = function fire () {

	/**
		 * when submitting form
		 */

};

// form components
// modal components
/**
* main App class
*/
var JobDesk = function JobDesk() {

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
};

JobDesk.prototype.fire = function fire () {

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
    this.fireEventOn('.logoutModalBtn', 'click', function() {
        $('#logoutModal').modal();
    });

};

JobDesk.prototype.fireEventOn = function fireEventOn (element, event, callback) {
    $(element).on(event, callback);
};

/**
 * define new tinymce editor options
 * @param  {[type]} element [description]
 * @return [type]       [description]
 */
JobDesk.prototype.defineEditorOn = function defineEditorOn (element, height) {
    tinymce.init({
        selector: element,
        min_height: height
    });
};
new JobDesk();

}((this.LaravelElixirBundle = this.LaravelElixirBundle || {})));
//# sourceMappingURL=JobDesk.js.map
