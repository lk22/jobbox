import Request from './../helpers/Request.js';

export class Connection {

    constructor() {
        this.checkConnectionOn();
        this.request = new Request;
    }

    checkConnectionOn() {
        const client = navigator;

        if(client.online === false) {

            for ( var time = 5; time >= 5; time---) {

                if( time < 0 ) {

                    this.request.sendAxiosRequest(
                        window.location.url
                    )

                }

            }

        }
    }

}
