import Request from './helpers/Request.js';

/**
* main app class
*/
class JobDesk
{
    constructor()
    {
        this.request = new Request;
        console.log(this.request);

        this.html("<p>Hello</p>"");
    }

    html(element, appending){
        return element.html(appending);
    }
}

new JobDesk();
