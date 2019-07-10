<div class="form-group row align-items-center" :class="{'has-danger': errors.has('IdComp'), 'has-success': this.fields.IdComp && this.fields.IdComp.valid }">
    <label for="IdComp" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.computador.columns.IdComp') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.IdComp" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('IdComp'), 'form-control-success': this.fields.IdComp && this.fields.IdComp.valid}" id="IdComp" name="IdComp" placeholder="{{ trans('admin.computador.columns.IdComp') }}">
        <div v-if="errors.has('IdComp')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('IdComp') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('IdModelo'), 'has-success': this.fields.IdModelo && this.fields.IdModelo.valid }">
    <label for="IdModelo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.computador.columns.IdModelo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.IdModelo" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('IdModelo'), 'form-control-success': this.fields.IdModelo && this.fields.IdModelo.valid}" id="IdModelo" name="IdModelo" placeholder="{{ trans('admin.computador.columns.IdModelo') }}">
        <div v-if="errors.has('IdModelo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('IdModelo') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('IdAnalista'), 'has-success': this.fields.IdAnalista && this.fields.IdAnalista.valid }">
    <label for="IdAnalista" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.computador.columns.IdAnalista') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.IdAnalista" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('IdAnalista'), 'form-control-success': this.fields.IdAnalista && this.fields.IdAnalista.valid}" id="IdAnalista" name="IdAnalista" placeholder="{{ trans('admin.computador.columns.IdAnalista') }}">
        <div v-if="errors.has('IdAnalista')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('IdAnalista') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('SerialComp'), 'has-success': this.fields.SerialComp && this.fields.SerialComp.valid }">
    <label for="SerialComp" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.computador.columns.SerialComp') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.SerialComp" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('SerialComp'), 'form-control-success': this.fields.SerialComp && this.fields.SerialComp.valid}" id="SerialComp" name="SerialComp" placeholder="{{ trans('admin.computador.columns.SerialComp') }}">
        <div v-if="errors.has('SerialComp')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('SerialComp') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('HostnameComp'), 'has-success': this.fields.HostnameComp && this.fields.HostnameComp.valid }">
    <label for="HostnameComp" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.computador.columns.HostnameComp') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.HostnameComp" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('HostnameComp'), 'form-control-success': this.fields.HostnameComp && this.fields.HostnameComp.valid}" id="HostnameComp" name="HostnameComp" placeholder="{{ trans('admin.computador.columns.HostnameComp') }}">
        <div v-if="errors.has('HostnameComp')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('HostnameComp') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('StatusComp'), 'has-success': this.fields.StatusComp && this.fields.StatusComp.valid }">
    <label for="StatusComp" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.computador.columns.StatusComp') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.StatusComp" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('StatusComp'), 'form-control-success': this.fields.StatusComp && this.fields.StatusComp.valid}" id="StatusComp" name="StatusComp" placeholder="{{ trans('admin.computador.columns.StatusComp') }}">
        <div v-if="errors.has('StatusComp')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('StatusComp') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('ObservacaoComp'), 'has-success': this.fields.ObservacaoComp && this.fields.ObservacaoComp.valid }">
    <label for="ObservacaoComp" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.computador.columns.ObservacaoComp') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.ObservacaoComp" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('ObservacaoComp'), 'form-control-success': this.fields.ObservacaoComp && this.fields.ObservacaoComp.valid}" id="ObservacaoComp" name="ObservacaoComp" placeholder="{{ trans('admin.computador.columns.ObservacaoComp') }}">
        <div v-if="errors.has('ObservacaoComp')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('ObservacaoComp') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('LacreComp'), 'has-success': this.fields.LacreComp && this.fields.LacreComp.valid }">
    <label for="LacreComp" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.computador.columns.LacreComp') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.LacreComp" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('LacreComp'), 'form-control-success': this.fields.LacreComp && this.fields.LacreComp.valid}" id="LacreComp" name="LacreComp" placeholder="{{ trans('admin.computador.columns.LacreComp') }}">
        <div v-if="errors.has('LacreComp')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('LacreComp') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('DataCadastroComp'), 'has-success': this.fields.DataCadastroComp && this.fields.DataCadastroComp.valid }">
    <label for="DataCadastroComp" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.computador.columns.DataCadastroComp') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.DataCadastroComp" :config="datetimePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('DataCadastroComp'), 'form-control-success': this.fields.DataCadastroComp && this.fields.DataCadastroComp.valid}" id="DataCadastroComp" name="DataCadastroComp" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_date_and_time') }}"></datetime>
        </div>
        <div v-if="errors.has('DataCadastroComp')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('DataCadastroComp') }}</div>
    </div>
</div>


