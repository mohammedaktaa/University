<script>
    function admin_reloadGrid(){
        aut_datatable_reloadTable(_aut_datatable_getTableObjectApi('#{{$table}}'),null,false,false)
    }

</script>
@include('admin::table-extras.components.subjects')
