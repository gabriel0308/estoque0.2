import AppForm from '../app-components/Form/AppForm';

Vue.component('analistum-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                IdAnalista:  '' ,
                MatriculaAnalista:  '' ,
                NomeAnalista:  '' ,
                SenhaAnalista:  '' ,
                guard:  '' ,
                
            }
        }
    }

});