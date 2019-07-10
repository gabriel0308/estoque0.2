@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.fabricante.actions.edit', ['name' => $fabricante->id]))

@section('body')

    <div class="container-xl">

        <div class="card">

            <fabricante-form
                :action="'{{ $fabricante->resource_url }}'"
                :data="{{ $fabricante->toJson() }}"
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="this.action" novalidate>

                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.fabricante.actions.edit', ['name' => $fabricante->id]) }}
                    </div>

                    <div class="card-body">

                        @include('admin.fabricante.components.form-elements')

                    </div>

                    <div class="card-footer">
	                    <button type="submit" class="btn btn-primary" :disabled="submiting">
		                    <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
		                    {{ trans('brackets/admin-ui::admin.btn.save') }}
	                    </button>
                    </div>

                </form>

        </fabricante-form>

    </div>

</div>

@endsection