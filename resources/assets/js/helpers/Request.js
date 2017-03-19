import Axios from 'axios';

class Request {

    /**
    * sending default request on making new instance
    * @param method = the method to use ['GET', 'POST', 'DELETE', 'PUT']
    * @param url = the url to send request to
    * @param data = the data from form to send to backend
    */
    sendAxiosRequest(method = null, url, data = {}, success, failure) {

        switch (method) {
            case 'POST':
                this.sendPostRequest(url, method, data, success, failure)
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

        return response;

        console.log(response);

    }

    /**
    * Axios GET request
    * @param url = the url to send request to
    */
    sendGetRequestTo(url) {

        Axios.get(url).then(( response ) => {

            this.getResponse(response);

        }).catch(( response ) => {

            this.getResponse();

        });

    }

    /**
    * Axios POST request
    * @param url = the url to send request to
    * @param data = data to send with your request
    */
    sendPostRequest(url, data = {}) {

        Axios.post(url, data).then(( response ) => {

            this.getResponse(response);

        }).catch(( response ) => {

            this.getResponse(response);

        });

    }

    /**
    * Axios PUT request
    * @param url = the url to send request to
    * @param data = following data to backend
    */
    sendUpdateRequest(url, data = {}) {

        Axios.put(url, data).then(( response ) => {

            this.getResponse(response);

        }).catch(( response ) => {

            this.getResponse(response);

        });

    }

    /**
    * Axios DELETE request
    * @param url = the url to make a request to
    */
    sendDeleteRequest(url, method, ) {

        Axios.delete(url).then(( response ) => {

            this.getResponse(response);

        }).catch(( response ) => {

            this.getResponse(response);

        });

    }
}
