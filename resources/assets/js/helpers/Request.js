var Axios = require('axios');

export class Request {

    /**
    * url => API to hit request to
    */
    sendGetRequestTo( url, api = null, data = {} ) {
        if(api === null){
            Axios.get(url).then( (data) => {

                console.log(data);
                this.getData(data)

            }).catch((data) => {

                console.log(data);

            });
        }
    }

    /**
    * return following data
    */
    getData( data ){
        return data;
    }
}

export default Request;
