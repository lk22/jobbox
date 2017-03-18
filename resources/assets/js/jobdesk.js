import axios from 'axios';

import Request from 'helpers/Request.js';

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
