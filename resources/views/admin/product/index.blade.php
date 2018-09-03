@extends('admin.layout.main')
@section('extra_css')
<link href="{{ asset('inspinia_master/assets/css/plugins/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('inspinia_master/assets/css/plugins/dataTables/dataTables.responsive.css')}}" rel="stylesheet">
    <link href="{{ asset('inspinia_master/assets/css/plugins/dataTables/dataTables.tableTools.min.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="row">
   <h1 class="text-center">All Products</h1>
</div>
<div class="row"><div class="row">
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Basic Data Tables example with responsive plugin</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">

            <table class="table table-striped table-bordered table-hover dataTables-example" >
            <thead>
            <tr>
                <th>Product Title</th>
                <th>Product Price</th>
                <th>Product Description(s)</th>
                <th>product image</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                 @if (count($products)>0)
                     
               
                @foreach ($products as $item)
                <tr class="gradeX">
                        <td>{{ $item->product_name }}</td>
                        <td>{{ $item->product_price }}</td>
                        <td>{{ $item->Product_desc }}</td>
                        <td><img src="/storage/images/{{ $item->Product_image }}" width="50px" height="30px"></td>
                        <td>
                                <a href="{{ route('product.show', $item->id) }}" class="btn btn-info">View Task</a>
                                <a href="{{ route('product.edit', $item->id) }}" class="btn btn-primary">Edit Task</a>
                       
                        </td>
                     
                      
                    </tr>
                @endforeach
                @endif  
            </tbody>
            <tfoot>
            <tr>
                    <th>Product Title</th>
                    <th>Product Price</th>
                    <th>Product Description(s)</th>
                    <th>product image</th>
                    <th>Actions</th>
            </tr>
            </tfoot>
            </table>

            </div>
        </div>
    </div>
    </div></div>
@endsection
@section('extra_script')
<script src="{{ asset('inspinia_master/assets/js/jquery-2.1.1.js')}}"></script>
<script src="{{ asset('inspinia_master/assets/js/bootstrap.min.js')}}"</script>
<script src="{{ asset('inspinia_master/assets/js/plugins/metisMenu/jquery.metisMenu.js')}}"</script>
<script src="{{ asset('inspinia_master/assets/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"</script>
<script src="{{ asset('inspinia_master/assets/js/plugins/jeditable/jquery.jeditable.js')}}"</script>
<script src="{{ asset('inspinia_master/assets/js/plugins/dataTables/jquery.dataTables.js')}}" ></script>
    <script src="{{ asset('inspinia_master/assets/js/plugins/dataTables/dataTables.bootstrap.js')}}"></script>
    <script src="{{ asset('inspinia_master/assets/js/plugins/dataTables/dataTables.responsive.js')}}"></script>
    <script src="{{ asset('inspinia_master/assets/js/plugins/dataTables/dataTables.tableTools.min.js')}}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ asset('inspinia_master/assets/js/inspinia.js')}}"></script>
    <script src="{{ asset('inspinia_master/assets/js/plugins/pace/pace.min.js')}}"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {
            $('.dataTables-example').dataTable({
                responsive: true,
                "dom": 'T<"clear">lfrtip',
                "tableTools": {
                    "sSwfPath": "{{ asset('inspinia_master/assets/js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
                }
            });

            /* Init DataTables */
            var oTable = $('#editable').dataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( '../example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );


        });

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );

        }
    </script>
@endsection