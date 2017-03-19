import Request from './../helpers/Request.js';

class Connection {

    /**
    * Constructor
    */
    constructor() {
        this.request = new Request();

        this.checkConnection();
    }

    /**
    * Check the clients internet connection
    */
    checkConnection() {
        var client = navigator;
        var container = $('#ethernetComponent');
        console.log(container);

        if (client.online === false) {

            container.show();

            container.html('<p>You are currently on any internet connection find a connection and try again</p>');

            setTimeout(function() {

                window.location.reload(1);

            }, 5000);

        }
    }

}
export default Connection;
