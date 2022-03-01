<script src="/assets/admin/js/jquery-1.6.4.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/assets/admin/js/jquery-ui/jquery.ui.core.min.js"></script>
<script src="/assets/admin/js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
<script src="/assets/admin/js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
<script src="/assets/admin/js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
<script src="/assets/admin/js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
<script src="/assets/admin/js/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>
<script src="/assets/admin/js/jquery-ui/jquery.ui.sortable.min.js" type="text/javascript"></script>
<script src="/assets/admin/js/table/jquery.dataTables.min.js" type="text/javascript"></script>
<!-- END: load jquery -->
<script type="text/javascript" src="/assets/admin/js/table/table.js"></script>
<script src="/assets/admin/js/setup.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupLeftMenu();
        setSidebarHeight();
    });
    $.ajaxSetup({
        dataFilter: function(data){
            try {
                jsonParseData = JSON.parse(data);
                return jsonParseData;
            } catch (e) {
                return data;
            }
        }
    });

    function initDatepicker(picker){

        picker.datepicker({
            todayHighlight: !0,
            format        : 'dd-mm-yyyy',
            autoclose     : true,
        });

        return picker;
    }

    function initImageFile(image, inputFile){

        image.click(function(){
            inputFile.trigger('click');
        });

        inputFile.change(function(){
            var reader = new FileReader();

            reader.onload = function (e) {
                var img = image[0];
                img.src = e.target.result;
            };
            reader.readAsDataURL(inputFile[0].files[0]);
        });

    }

    function initDatatable(tableElement, showAll=false, config={}){ // table jquery element

        var datatableConfig = {
            bSort: false,
            responsive: !0,
            language  : {
                'sProcessing'  : 'Đang xử lý',
                'sLengthMenu'  : 'Xem _MENU_bản ghi',
                'sZeroRecords' : 'Không tìm thấy dòng nào phù hợp',
                'sInfo'        : 'Đang xem _START_ đến _END_ trong tổng số _TOTAL_ bản ghi',
                'sInfoEmpty'   : 'Đang xem 0 đến 0 trong tổng số 0 bản ghi',
                'sInfoFiltered': '(được lọc từ _MAX_ bản ghi)',
                'sInfoPostFix' : '',
                'sSearch'      : 'Tìm kiếm',
                'sUrl'         : '',
                'oPaginate'    : {
                    'sFirst'       : 'Đầu',
                    'sPrevious': 'Trước',
                    'sNext'    : 'Tiếp',
                    'sLast'    : 'Cuối',

                },
                'select': {
                    rows: {
                        _: 'Đã chọn %d bản ghi',
                        1: 'Đã chọn 1 bản ghi',
                    },
                },
            },

            aLengthMenu: [
                [25, 50, 100, 200, -1],
                [25, 50, 100, 200, 'All'],
            ],

            iDisplayLength: 2,
        };

        Object.assign(datatableConfig,config);
        var table = $('#list-users').DataTable(datatableConfig);


        // init mark index for rows
        table.on('order.dt search.dt', function () {
            table.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
                cell.innerHTML = i + 1;
            });
        }).draw();

        // init search in collumn table
        table.columns().every(function () {
            var that = this;

            $('input', this.header()).on('keyup change', function () {
                if (that.search() !== this.value) {
                    that.search(this.value).draw();
                }
            });
        });

        if(showAll){
            showAllRowsDatatable(table)
        }

        return table;
    }

    function showAllRowsDatatable(table){ // datatable element
        var setting                    = table.settings();
        setting[0]._iDisplayLength = setting[0].fnRecordsTotal();
        table.draw();
    }

    function alert(message, type='info', detail=''){
        Swal.fire(
            message,
            detail,
            type
        );
    }

    function confirm(title, runFunction, dismissFunction, type, text) {

        var type = type == undefined ? 'warning' : type;

        var dismissFunction = dismissFunction === undefined ?
            function () {
                return false;
            }
            : dismissFunction;

        Swal.fire({
            title: title,
            text: text,
            icon: type,
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Có',
            cancelButtonText: 'Không'
        }).then(function (e) {
            e.value ?
                runFunction() :
                'cancel' === e.dismiss
                && dismissFunction();
        });

    }

    function showLoading(){

        $('#loading-overlay').show();

        setTimeout(function(){
            hideLoading();
        },30000);
    }

    function hideLoading(){
        $('#loading-overlay').hide();
    }

</script>