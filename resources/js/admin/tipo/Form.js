import AppForm from '../app-components/Form/AppForm';

Vue.component('tipo-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                NomeTipo:  '' ,
                
            }
        }
    }

});