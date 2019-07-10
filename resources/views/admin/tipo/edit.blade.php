@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.tipo.actions.edit', ['name' => $tipo->id]))

@section('body')

    <div class="container-xl">

        <div class="card">

            <tipo-form
                :action="'{{ $tipo->resource_url }}'"
                :data="{{ $tipo->toJson() }}"
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="this.action" novalidate>

                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.tipo.actions.edit', ['name' => $tipo->id]) }}
                    </div>

                    <div class="card-body">

                        @include('admin.tipo.components.form-elements')

                    </div>

                    <div class="card-footer">
	                    <button type="submit" class="btn btn-primary" :disabled="submiting">
		                    <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
		                    {{ trans('brackets/admin-ui::admin.btn.save') }}
	                    </button>
                    </div>

                </form>

        </tipo-form>

    </div>

</div>

@endsection