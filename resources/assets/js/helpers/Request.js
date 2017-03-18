var Axios = require('axios');

export class Request {

    /**
    * url => API to hit request to
    */
    sendGetRequestTo( url, api = null, data ) {
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
    *  send post request to URI
    */
    postDataTo(url, data = {}) {
        Axios.post(url, data).then( () => {
            consolo.log(response);
        }).catch( (response) => {
            console.log(response);
        });
    }

    /**
    * return following data
    */
    getData( data ){
        return data;
    }
}

export default Request;
