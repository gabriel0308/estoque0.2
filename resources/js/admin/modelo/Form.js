import AppForm from '../app-components/Form/AppForm';

Vue.component('modelo-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                IdModelo:  '' ,
                IdFabricante:  '' ,
                IdTipo:  '' ,
                NomeModelo:  '' ,
                
            }
        }
    }

});