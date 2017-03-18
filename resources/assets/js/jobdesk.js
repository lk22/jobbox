const Request = require('./helpers/Request.js');

/**
* main app class
*/
class JobDesk
{
    constructor()
    {
        this.request = new Request();
        console.log(this.request);
    }
}

new JobDesk;
