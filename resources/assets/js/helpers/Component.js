class Component {

    construct(element) {
        this.element = element;

    }

    build(element, component) {
        return this.on(element).append(component);
    }

    on(element) {
        return $(element);
    }


}
