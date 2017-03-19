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

var Component = function Component(element){
    return $(element);
};

Component.prototype.on = function on (element) {
    return $(element);
};

var Connection = function Connection() {
    this.request = new Request();
    this.component = new Component('#conection-container');

    this.checkConnection();
};

/**
* Check the clients internet connection
*/
Connection.prototype.checkConnection = function checkConnection () {
        var this$1 = this;

    var client = navigator;
    var container = this.component;

    if (client.online === false) {

        container.hide();

        for (var time = 5; time <= 5; time--) {

            if (time < 0) {

                this$1.request.send('', window.location.url, function(response) {

                    console.log(response);

                    this.component.html('<p>You are currently on any internet connection find a connection and try again</p>');

                }, function (response) {

                    console.log(response);

                });

            }

        }

        setTimeout(function() {

            window.location.reload(1);

        }, 5000);

    }
};

var Helper = function Helper(){
    this.component = new Component();
    this.request = new Request();
    this.connection = new Connection();
};

var JobDesk = function JobDesk() {
    this.helper = new Helper();
    this.connection = new Connection();
    this.fire();
};

JobDesk.prototype.fire = function fire () {

};
new JobDesk();

}((this.LaravelElixirBundle = this.LaravelElixirBundle || {})));
//# sourceMappingURL=JobDesk.js.map
