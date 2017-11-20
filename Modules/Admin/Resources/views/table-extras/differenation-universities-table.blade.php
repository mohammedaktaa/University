<script>
    function admin_reloadGrid(){
        aut_datatable_reloadTable(_aut_datatable_getTableObjectApi('#{{$table}}'),null,false,false)
    }

</script>
@php $id='id';
    $imageWidth=477;
    $imageHeight=526;
@endphp
@include('admin::table-extras.components.faculties')
