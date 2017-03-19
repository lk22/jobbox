
import Request from './helpers/Request.js';
import Component from './helpers/Component.js';

export class Helper {

    constructor(){
        this.component = new Component;
        this.request = new Request;
        this.connection = new Connection();
    }

}

export default Helper;
