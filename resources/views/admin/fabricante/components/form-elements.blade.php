<div class="form-group row align-items-center" :class="{'has-danger': errors.has('IdFabricante'), 'has-success': this.fields.IdFabricante && this.fields.IdFabricante.valid }">
    <label for="IdFabricante" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.fabricante.columns.IdFabricante') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.IdFabricante" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('IdFabricante'), 'form-control-success': this.fields.IdFabricante && this.fields.IdFabricante.valid}" id="IdFabricante" name="IdFabricante" placeholder="{{ trans('admin.fabricante.columns.IdFabricante') }}">
        <div v-if="errors.has('IdFabricante')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('IdFabricante') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('NomeFabricante'), 'has-success': this.fields.NomeFabricante && this.fields.NomeFabricante.valid }">
    <label for="NomeFabricante" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.fabricante.columns.NomeFabricante') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.NomeFabricante" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('NomeFabricante'), 'form-control-success': this.fields.NomeFabricante && this.fields.NomeFabricante.valid}" id="NomeFabricante" name="NomeFabricante" placeholder="{{ trans('admin.fabricante.columns.NomeFabricante') }}">
        <div v-if="errors.has('NomeFabricante')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('NomeFabricante') }}</div>
    </div>
</div>


