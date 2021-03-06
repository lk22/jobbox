export class Request {

    /**
    * sending default request on making new instance
    * @param method = the method to use ['GET', 'POST', 'DELETE', 'PUT']
    * @param url = the url to send request to
    * @param data = the data from form to send to backend
    */
    send(method, url, data, success, failure) {

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

    }

    /**
    * returning the current response from each sending request
    */
    getResponse(response) {

        console.log(response);

        return response;

    }

    /**
    * Axios GET request
    * @param url = the url to send request to
    */
    sendGetRequestTo(url, success, failure) {

        $.get({
            url: url,
            type: 'GET',
            success: success,
            error: failure
        });

    }

    /**
    * Axios POST request
    * @param url = the url to send request to
    * @param data = data to send with your request
    */
    sendPostRequest(url, data, success, failure) {

        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            success: success,
            failure: failure
        });

    }

    /**
    * Axios PUT request
    * @param url = the url to send request to
    * @param data = following data to backend
    */
    sendUpdateRequest(url, success, failure, data) {

        $.ajax({
            url: url,
            type: 'PUT',
            data: data,
            success: success,
            failure: failure
        });

    }

    /**
    * Axios DELETE request
    * @param url = the url to make a request to
    */
    sendDeleteRequest(url, success, failure ) {

        $.get({
            url: url,
            type: 'DELETE',
            success: success,
            error: failure
        });

    }
}

export default Request;
