import Axios from 'axios';

class Request {

    constructor(method, url, data, response) {

        super(method, url, data, response);

        // properties
        this.method = method;
        this.url = url;
        this.data = data;

        // send default axios request
        this.sendAxiosRequest(
            this.method,
            this.url,
            this.data,
        );

    }
    /**
    * sending default request on making new instance
    * @param method = the method to use ['GET', 'POST', 'DELETE', 'PUT']
    * @param url = the url to send request to
    * @param data = the data from form to send to backend
    * @param response = the response
    */
    sendAxiosRequest(method, url, data = null) {

        switch (method) {
            case 'POST':
                this.sendPostRequest(url, data, response)
                break;

            case 'PUT':
                this.sendUpdateRequest(url, data, response);
                break;

            case 'DELETE':
                this.sendDeleteRequest(url);
                break;

            default:
                this.sendGetRequestTo(url);
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
    * @param response = the returning response
    */
    sendGetRequestTo(url) {

        Axios.get(url).then((response) => {

            this.getResponse(response);

        }).catch((response) => {

            this.getResponse();

        });

    }

    sendPostRequest(url, data = {}, response) {

        Axios.post(url, data).then(( response ) => {

            this.getResponse(response);

        }).catch(( response ) => {

            this.getResponse(response);

        });

    }

    sendUpdateRequest(url, data = {}, response) {

        Axios.put(url, data).then(( response ) => {

            this.getResponse(response);

        }).catch(( response ) => {

            this.getResponse(response);

        });

    }

    sendDeleteRequest(url) {

        Axios.delete(url).then(( response ) => {

            this.getResponse(response);

        }).catch(( response ) => {

            this.getResponse(response);

        });

    }
}
