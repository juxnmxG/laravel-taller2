

require('./bootstrap');

window.Vue = require('vue');

Vue.component(
    'example-component',
    require('./components/ExampleComponent.vue').default
);

Vue.component(
    'datos-component',
    require('./components/Datos.vue').default
);

Vue.component(
    'listardatos-component',
    require('./components/VistaDatos.vue').default
);

const app = new Vue({
    el: '#app',
});
