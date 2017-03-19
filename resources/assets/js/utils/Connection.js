import Request from './../helpers/Request.js';
import Component from './../helpers/Component.js';

class Connection {

    /**
    * Constructor
    */
    constructor() {
        this.request = new Request();
        this.component = new Component('#conection-container');

        this.checkConnection();
    }

    /**
    * Check the clients internet connection
    */
    checkConnection() {
        var client = navigator;
        var container = this.component.hide();

        if (client.online === false) {

            for (var time = 5; time <= 5; time--) {

                if (time < 0) {

                    this.request.send('', window.location.url, function(response) {

                        console.log(response);

                        this.component.html('<p>You are currently on any internet connection find a connection and try again</p>');

                    }, response => {

                        console.log(response);

                    });

                }

            }

            setTimeout(function() {

                window.location.reload(1);

            }, 5000);

        }
    }

}
export default Connection;
