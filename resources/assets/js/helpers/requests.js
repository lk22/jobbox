var Axios = require('axios');

class Request {

    /**
    * url => API to hit request to
    */
    sendGetRequestTo(url, API = null, data) {
        Axios.get(url).then( (response) => {

            console.log(data);
            return data;

        }).catch((response) => {



        });
    }

}
