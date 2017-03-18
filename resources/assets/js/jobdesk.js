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

        this.html('#app', "<p>Hello</p>");
    }

    html(element, appending){
        return $(element).append(appending);
    }
}

new JobDesk();
