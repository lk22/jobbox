class Component {

    build(element, component) {
        return this.on(element).append(component);
    }

    on(element) {
        return $(element);
    }


}
