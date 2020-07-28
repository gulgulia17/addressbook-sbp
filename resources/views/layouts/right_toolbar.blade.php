<div class="ml-auto d-inline-flex">
  @if (!Route::is('customer.import'))
    <li class="nav-item dropdown">
      <a class="nav-link  dropdown-toggle pt-1" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
        aria-expanded="false"><i class="fa fa-save"></i> {{__('Export')}}
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" id="exportCsvDatatable" href="#"> <i class="fa fa-file-excel-o mr-2"></i>CSV</a>
        <a class="dropdown-item" id="exportExcelDatatable" href="#"> <i class="fa fa-file-excel-o mr-2"></i>Excel</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" id="exportPdfDatatable" href="#"> <i class="fa fa-file-pdf-o mr-2"></i>PDF</a>
      </div>
    </li>
  @endif
    <li class="nav-item">
      <a class="nav-link pt-1 {{Route::is('customer.import') ? 'active' : null  }}" id="import" href="{{route('customer.import')}}" ><i class="fas fa-file-import"></i> {{__('Import')}}</a>
    </li>
    @isset($customer)
    <li class="nav-item">
      <a class="nav-link pt-1" id="print" target="_blank" href="#" ><i class="fa fa-print"></i> {{__('Print')}}</a>
    </li>
@endisset

@section('js')
@isset($customer)
      <script>
        $(function () {
          $('#print').click(function (e) { 
            e.preventDefault();
            window.open(
              "{{route('customer.print',$customer->id)}}",
              "_blank",
              "width=700, height=600"
            );
          });
        });
      </script>
  @endisset
  <script>
    $(function () {
      curentUrl = '{{Request::path()}}';
      
    });
  </script>
  @endsection
  
