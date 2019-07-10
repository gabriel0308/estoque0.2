<div class="form-group row align-items-center" :class="{'has-danger': errors.has('IdModelo'), 'has-success': this.fields.IdModelo && this.fields.IdModelo.valid }">
    <label for="IdModelo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.modelo.columns.IdModelo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.IdModelo" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('IdModelo'), 'form-control-success': this.fields.IdModelo && this.fields.IdModelo.valid}" id="IdModelo" name="IdModelo" placeholder="{{ trans('admin.modelo.columns.IdModelo') }}">
        <div v-if="errors.has('IdModelo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('IdModelo') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('IdFabricante'), 'has-success': this.fields.IdFabricante && this.fields.IdFabricante.valid }">
    <label for="IdFabricante" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.modelo.columns.IdFabricante') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.IdFabricante" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('IdFabricante'), 'form-control-success': this.fields.IdFabricante && this.fields.IdFabricante.valid}" id="IdFabricante" name="IdFabricante" placeholder="{{ trans('admin.modelo.columns.IdFabricante') }}">
        <div v-if="errors.has('IdFabricante')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('IdFabricante') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('IdTipo'), 'has-success': this.fields.IdTipo && this.fields.IdTipo.valid }">
    <label for="IdTipo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.modelo.columns.IdTipo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.IdTipo" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('IdTipo'), 'form-control-success': this.fields.IdTipo && this.fields.IdTipo.valid}" id="IdTipo" name="IdTipo" placeholder="{{ trans('admin.modelo.columns.IdTipo') }}">
        <div v-if="errors.has('IdTipo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('IdTipo') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('NomeModelo'), 'has-success': this.fields.NomeModelo && this.fields.NomeModelo.valid }">
    <label for="NomeModelo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.modelo.columns.NomeModelo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.NomeModelo" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('NomeModelo'), 'form-control-success': this.fields.NomeModelo && this.fields.NomeModelo.valid}" id="NomeModelo" name="NomeModelo" placeholder="{{ trans('admin.modelo.columns.NomeModelo') }}">
        <div v-if="errors.has('NomeModelo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('NomeModelo') }}</div>
    </div>
</div>


