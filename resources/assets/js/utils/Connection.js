import Request from './../helpers/Request.js';
import Component from './helpers/Component.js';

export class Connection {

    /**
    * Constructor
    */
    constructor() {
        this.request = new Request;
        this.component = new Component('#conection-container');

        this.checkConnectionOn(navigator);
    }

    /**
    * Check the clients internet connection
    */
    checkConnectionOn(client) {
        const client = client;
        var container = this.component;

        if(client.online === false) {

            for( var time = 5; time <= 5; time--) {

                if( time < 0 ) {

                    this.request.send('', window.location.url, function(response) {

                        console.log(response);

                        this.component.html('<p>You are currently on any internet connection find a connection and try again</p>');

                    }, function(response) {

                        console.log(response);

                    });

                }

            }

            setTimeout( () => {

				window.location.reload(1);

			}, 5000);

        }
    }

}
export default Connection;
