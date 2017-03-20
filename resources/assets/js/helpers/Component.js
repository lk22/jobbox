export class Component {

    constructor(element){
        this.get(element);
    }

    /**
     * get element
     * @param  {[type]} element [description]
     * @return [type]           [description]
     */
    get(element) {
        return $(element);
    }
}
export default Component;
