import Helper from './Helper.js';
import Component from './helpers/Component.js';
import Connection from './utils/Connection.js';

/**
* main App class
*/
class JobDesk {

    constructor() {
        this.helper = new Helper;
        this.connection = new Connection();
        this.fire();
    }

    fire() {

    }

}
new JobDesk();
