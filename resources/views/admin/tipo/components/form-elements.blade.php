<!-- <div class="form-group row align-items-center" :class="{'has-danger': errors.has('IdTipo'), 'has-success': this.fields.IdTipo && this.fields.IdTipo.valid }">
    <label for="IdTipo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.tipo.columns.IdTipo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.IdTipo" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('IdTipo'), 'form-control-success': this.fields.IdTipo && this.fields.IdTipo.valid}" id="IdTipo" name="IdTipo" placeholder="{{ trans('admin.tipo.columns.IdTipo') }}">
        <div v-if="errors.has('IdTipo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('IdTipo') }}</div>
    </div>
</div> -->

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('NomeTipo'), 'has-success': this.fields.NomeTipo && this.fields.NomeTipo.valid }">
    <label for="NomeTipo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.tipo.columns.NomeTipo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.NomeTipo" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('NomeTipo'), 'form-control-success': this.fields.NomeTipo && this.fields.NomeTipo.valid}" id="NomeTipo" name="NomeTipo" placeholder="{{ trans('admin.tipo.columns.NomeTipo') }}">
        <div v-if="errors.has('NomeTipo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('NomeTipo') }}</div>
    </div>
</div>


