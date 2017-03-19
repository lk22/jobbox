class Component {
    build(component) {
        return this.on.append(component);
    }

    on(element) {
        return $(element);
    }
}
