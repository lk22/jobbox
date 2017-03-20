

export class Component {

    constructor(){
        this.editor = new Editor();
    }

    /**
     * get element
     * @param  {[type]} element [description]
     * @return [type]           [description]
     */
    on(element) {
        return $(element);
    }
}
export default Component;
