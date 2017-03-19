class Component {
    build(element, component) {
        return this.on().append(component);
    }

    on(element) {
        return $(element);
    }
}
