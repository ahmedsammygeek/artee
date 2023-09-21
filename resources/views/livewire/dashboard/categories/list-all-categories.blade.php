<div>
    <div class="card">
        <div class="card-header bg-primary text-white header-elements-sm-inline" >
            <h5 class="card-title"> @lang('categories.show_all_categories') </h5>
            <div class="header-elements">
                <div class="d-flex justify-content-between">
                    <div class="list-icons ml-3">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="row">

                <div class="col-md-1" wire:ignore>
                    <select name="select" wire:model='rows' class="form-control form-control-select2" >
                        <option value="10"> @lang('dashboard.rows') </option>
                        <option value="20">20 </option>
                        <option value="30">30 </option>
                        <option value="50">50 </option>
                        <option value="100">100 </option>
                    </select>
                </div>
                <div class="col-md-3">
                    <div class="form-group-feedback form-group-feedback-right">
                        <input type="search" wire:model='search' class="form-control wmin-sm-200" placeholder=" @lang('dashboard.search') ...">
                        <div class="form-control-feedback">
                            <i class="icon-search4 font-size-base text-muted"></i>
                        </div>
                    </div>
                </div>
                 <div class="col-md-2" wire:ignore>
                    <select  wire:model='category_id' class="form-control form-control-select2" >
                        <option value="all"> جميع الاقسام </option>
                       @foreach ($all_categories as $one_category)
                          <option value="{{ $one_category->id }}"> {{ $one_category->name }} </option>
                       @endforeach
                    </select>
                </div>
            </div>

        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th> # </th>
                        <th> @lang('categories.name_ar') </th>
                        <th> @lang('categories.name_en') </th>
                        <th> نوع القسم </th>
                        <th> @lang('categories.status') </th>
                        <th> @lang('categories.created_at') </th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i = 1;
                    @endphp
                    @foreach ($categories as $category)
                    <tr>
                        <td> {{ $category->id}} </td>
                        <td> {{ $category->getTranslation('name' , 'ar') }} </td>
                        <td> {{ $category->getTranslation('name' , 'en') }} </td>
                        <td>
                            @if ($category->category_id == null )
                               <span class='badge badge-success' > قسم رئيسى </span>
                            @else
                            <span class='badge badge-primary' > قسم فرعى </span>
                            @endif
                        </td>
                        <td>
                            @switch($category->active)
                            @case(1)
                            <span  class='badge badge-success'> @lang('categories.active') </span>
                            @break
                            @case(0)
                            <span  class='badge badge-danger'> @lang('categories.inactive') </span>
                            @break
                            @endswitch
                        </td>
                        <td> {{ $category->created_at->diffForHumans() }} </td>
                        <td>
                            <a href='{{ route('dashboard.categories.show' , ['category' => $category->id ] ) }}' class="btn btn-primary btn-icon"><i class="icon-eye "></i></a>
                            <a href='{{ route('dashboard.categories.edit' , ['category' => $category->id ] ) }}' class="btn btn-warning btn-icon"><i class="icon-database-edit2 "></i></a>
                            <a class="btn btn-danger btn-icon delete_item"  data-item_id='{{ $category->id }}' ><i class="icon-trash "></i></a>
                        </td>
                        
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

        <div class="card-footer bg-white  py-sm-2">
            <div class='pagination pagination-flat justify-content-around mt-3 mt-sm-0 float-right' >
                {{ $categories->links() }}
            </div>
        </div>

    </div>
</div>


@section('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function () {

        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

        Livewire.on('itemDeleted', postId => {
            Toast.fire({
                icon: 'success',
                title: '@lang('categories.category_deleted')'
            })
        })



        $(document).on('click', 'a.delete_item', function(event) {
            event.preventDefault();
            var id = $(this).attr('data-item_id');
            Swal.fire({
                title: '@lang('dashboard.are_you_sure_to_delete')',
                text: "@lang('dashboard.delete_notice')",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '@lang('dashboard.yes')',
                cancelButtonText: '@lang('dashboard.cancel')'
            }).then((result) => {
                if (result.isConfirmed) {
                   Livewire.emit('deleteItem' , id )
               }
           })
        });
        // $('.form-control-select2').select2();
        $('.form-control-select2').on('change', function (e) {
            var data = $('.form-control-select2').select2("val");
            @this.set('form-control-select2', data);
        });
    });

</script>

@endsection