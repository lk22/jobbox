import axios from 'axios';


let Request = require('./helpers/Request.js');

/**
* main app class
*/
class App
{
    constructor()
    {
        this.request = new Request;
        console.log(this.request);
    }
}

new App();
