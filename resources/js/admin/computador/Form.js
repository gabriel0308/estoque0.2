import AppForm from '../app-components/Form/AppForm';

Vue.component('computador-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                IdComp:  '' ,
                IdModelo:  '' ,
                IdAnalista:  '' ,
                SerialComp:  '' ,
                HostnameComp:  '' ,
                StatusComp:  '' ,
                ObservacaoComp:  '' ,
                LacreComp:  '' ,
                DataCadastroComp:  '' ,
                
            }
        }
    }

});