import Helper from './Helper.js';
import Component from './helpers/Component.js';

/**
* main App class
*/
class JobDesk {

    constructor() {
        this.helper = new Helper;
        this.component = new Component;

        this.fire();
    }

    fire() {

    }

}
new JobDesk();
