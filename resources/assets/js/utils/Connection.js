import Request from './../helpers/Request.js';
import Component from './../helpers/Component.js';

class Connection {

    /**
    * Constructor
    */
    constructor() {
        this.request = new Request();
        this.component = new Component('#ethernetComponent');

        this.checkConnection();
    }

    /**
    * Check the clients internet connection
    */
    checkConnection() {
        var client = navigator;
        var container = this.component;

        if (client.online === false) {

            container.show();

            for (var time = 5; time <= 5; time--) {

                if (time < 0) {

                    container.fadeIn().html('<p>You are currently on any internet connection find a connection and try again</p>');
                }

            }

            setTimeout(function() {

                window.location.reload(1);

            }, 5000);

        } else {
            container.hide();
        }
    }

}
export default Connection;
