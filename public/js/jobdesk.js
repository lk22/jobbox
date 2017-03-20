(function (exports) {
'use strict';

var Request = function Request () {};

Request.prototype.send = function send (method, url, data, success, failure) {

    switch (method) {
        case 'POST':
            this.sendPostRequest(url, data, success, failure);
            break;

        case 'PUT':
            this.sendUpdateRequest(url, data, success, failure);
            break;

        case 'DELETE':
            this.sendDeleteRequest(url, data, success, failure);
            break;

        case '':
            this.sendGetRequestTo(url, data, success, failure);
        break;
    }

};

/**
* returning the current response from each sending request
*/
Request.prototype.getResponse = function getResponse (response) {

    return response;

    console.log(response);

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

var Editor = function Editor(element) {
    if ( element === void 0 ) element = {};

    this.defineEditorOn(element);
};

/**
 * define new tinymce editor options
 * @param  {[type]} element [description]
 * @return [type]       [description]
 */
Editor.prototype.defineEditorOn = function defineEditorOn (options) {
        if ( options === void 0 ) options = {};

    tinymce.init(options);
};

var Component = function Component(){
    this.editor = new Editor();
};

Component.prototype.on = function on (element) {
    return $(element);
};

/**
 * render text editor with specific options
 * @param  {[type]} options [description]
 * @return [type]       [description]
 */
Component.prototype.renderEditorWith = function renderEditorWith (options) {
        if ( options === void 0 ) options = {};

    return new Editor(options);
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
    this.component = new Component();
    this.request = new Request();
    this.connection = new Connection();
};

var JobDesk = function JobDesk() {
    this.helper = new Helper();
    // this.connection = new Connection();
    this.fire();
};

JobDesk.prototype.fire = function fire () {

    /**
     * define wysiwyg editor to textareas
     * @type {Component}
     */
    this.defineEditorOn('textarea.tinymce');

    var jobsModalBtn = new Component('.modal-trigger');

    jobsModalBtn.click(function() {
        $('#jobsModal').modal();
    });

};
new JobDesk();

}((this.LaravelElixirBundle = this.LaravelElixirBundle || {})));
//# sourceMappingURL=JobDesk.js.map
