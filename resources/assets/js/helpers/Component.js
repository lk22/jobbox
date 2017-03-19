class Component {
    build(component) {
        return $('#app').append(component);
    }

    on(element) {
        return $(element);
    }
}
