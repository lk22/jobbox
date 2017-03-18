var Axios = require('axios');

class Request {

    /**
    * url => API to hit request to
    */
    sendGetRequestTo(url, api = null, data) {
        if(api typeof null){
            Axios.get(url).then( (response) => {

                console.log(data);
                this.getData(response.data)

            }).catch((response) => {

                console.log(response);

            });
        }
    }

    /**
    * return following data
    */
    getData(data){
        return data;
    }
}
