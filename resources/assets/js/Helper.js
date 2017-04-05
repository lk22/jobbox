
import Request from './helpers/Request.js';
import Component from './helpers/Component.js';
import Connection from './utils/Connection.js';

export class Helper {

    constructor(){
        this.request = new Request();
        this.connection = new Connection();
    }

    addEventTypeTo(element, type, callback) {
    	var elm = $(element);
    	return elm.on(type, callback);
    }

    getApi(api) {
    	return '/api/' + api;
    }

}

export default Helper;
