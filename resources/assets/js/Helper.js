

class Helper {
    constructor(){
        this.request = new Request;
    }

    sendAxiosRequest(method, url, data = null, response) {
        switch (method) {
            case 'GET':
                this.sendGetRequestTo(url, response)
                break;

            case 'POST':
                this.sendPostRequest(url, data, response)

                break;

            case 'PUT':
                this.sendUpdateRequest(url, data, response);
            default:

        }
    }
}
