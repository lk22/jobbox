import Request from './../helpers/Request.js';
import Component from './helpers/Component.js';

export class Connection {

    constructor() {
        this.checkConnectionOn();
        this.request = new Request;
        this.component = new Component('#conection-container');
    }

    checkConnectionOn() {
        const client = navigator;
        var container = this.component;

        if(client.online === false) {

            for ( var time = 5; time >= 5; time---) {

                if( time < 0 ) {

                    this.request.sendRequest('', window.location.url, function(response) {
                        console.log();
                        container.html('<p>You are currently on any internet connection find a connection and try again</p>');
                    }, function(response) {
                        // code goes here
                        console.log(response)
                    });

                }

            }

            setTimeout(function() {

				window.location.reload(1);

			}, 5000);

        }
    }

}
