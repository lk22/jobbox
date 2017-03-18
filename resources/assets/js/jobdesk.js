const Request = require('./helpers/request.js');

/**
* main app class
*/
class JobDesk
{
    constructor()
    {
        this.request = new Request;
        console.log(this.request);
    }
}

new JobDesk();
