import Axios from 'axios';

class Request {
    sendAxiosRequest(method, url, data = null, response) {
        switch (method) {
            case 'POST':
                this.sendPostRequest(url, data, response)
                break;

            case 'PUT':
                this.sendUpdateRequest(url, data, response);
                break;

            case 'DELETE':
                this.sendDeleteRequest(url, response);
            default:
                this.sendGetRequestTo(url, response);
            break;
        }
    }

    getResponse(response) {
        return response;
        console.log(response);
    }

    sendGetRequestTo(url, response) {
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

    sendDeleteRequest(url, response) {
        Axios.delete(url).then(( response ) => {
            this.getResponse(response);
        }).catch(( response ) => {
            this.getResponse(response);
        });
    }
}
