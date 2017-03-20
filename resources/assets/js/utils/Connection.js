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

        if (!client.online) {

            container.show();

            container.html('<p>You are currently on any internet connection find a connection and try again</p>');

        } else{
            container.hide();
        }
    }

}
export default Connection;
