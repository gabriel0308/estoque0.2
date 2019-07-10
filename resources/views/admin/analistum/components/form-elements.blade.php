<div class="form-group row align-items-center" :class="{'has-danger': errors.has('IdAnalista'), 'has-success': this.fields.IdAnalista && this.fields.IdAnalista.valid }">
    <label for="IdAnalista" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.analistum.columns.IdAnalista') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.IdAnalista" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('IdAnalista'), 'form-control-success': this.fields.IdAnalista && this.fields.IdAnalista.valid}" id="IdAnalista" name="IdAnalista" placeholder="{{ trans('admin.analistum.columns.IdAnalista') }}">
        <div v-if="errors.has('IdAnalista')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('IdAnalista') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('MatriculaAnalista'), 'has-success': this.fields.MatriculaAnalista && this.fields.MatriculaAnalista.valid }">
    <label for="MatriculaAnalista" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.analistum.columns.MatriculaAnalista') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.MatriculaAnalista" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('MatriculaAnalista'), 'form-control-success': this.fields.MatriculaAnalista && this.fields.MatriculaAnalista.valid}" id="MatriculaAnalista" name="MatriculaAnalista" placeholder="{{ trans('admin.analistum.columns.MatriculaAnalista') }}">
        <div v-if="errors.has('MatriculaAnalista')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('MatriculaAnalista') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('NomeAnalista'), 'has-success': this.fields.NomeAnalista && this.fields.NomeAnalista.valid }">
    <label for="NomeAnalista" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.analistum.columns.NomeAnalista') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.NomeAnalista" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('NomeAnalista'), 'form-control-success': this.fields.NomeAnalista && this.fields.NomeAnalista.valid}" id="NomeAnalista" name="NomeAnalista" placeholder="{{ trans('admin.analistum.columns.NomeAnalista') }}">
        <div v-if="errors.has('NomeAnalista')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('NomeAnalista') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('SenhaAnalista'), 'has-success': this.fields.SenhaAnalista && this.fields.SenhaAnalista.valid }">
    <label for="SenhaAnalista" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.analistum.columns.SenhaAnalista') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.SenhaAnalista" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('SenhaAnalista'), 'form-control-success': this.fields.SenhaAnalista && this.fields.SenhaAnalista.valid}" id="SenhaAnalista" name="SenhaAnalista" placeholder="{{ trans('admin.analistum.columns.SenhaAnalista') }}">
        <div v-if="errors.has('SenhaAnalista')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('SenhaAnalista') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('guard'), 'has-success': this.fields.guard && this.fields.guard.valid }">
    <label for="guard" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.analistum.columns.guard') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.guard" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('guard'), 'form-control-success': this.fields.guard && this.fields.guard.valid}" id="guard" name="guard" placeholder="{{ trans('admin.analistum.columns.guard') }}">
        <div v-if="errors.has('guard')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('guard') }}</div>
    </div>
</div>


