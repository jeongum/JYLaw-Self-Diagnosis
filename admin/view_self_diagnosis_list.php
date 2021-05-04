<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css"/>
<link rel="stylesheet" href="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'resource/css/admin.css'; ?>"> 
<div class="wrap">
    <h1 class="wp-heading-inline">자가진단리스트</h1>
    <div class="container">
        <table class="stripe hover row-border" cellspacing="0" id="datatable" style="width:90%">
            <thead>
                <th scope="col"></th>
                <th scope="col">이름</th>
                <th scope="col">핸드폰 번호(+82)</th>
                <th scope="col" >타입</th>
                <th scope="col">카테고리</th>
                <th scope="col">결과</th>
                <th scope="col">날짜</th>
            </thead>
        </table>    
    </div>

    <div id="divShortCode" style="display:none">
        <div>ShortCode</div>
        <textarea disabled>[self-diagnosis id="1"]</textarea>
    </div>
</div>
<script>
    var question_list = <? echo json_encode($question_list) ?>;
    function format ( d ) {
        var sub_html = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
        var answer_list = d.answerData.split(',');
        var test=0;
        for(var i =0 ; i<answer_list.length/2; i++){
            for(var j =0; j<Object.keys(question_list).length; j++){
                
                if(d.type=='피해자'){
                    if(question_list[j]["type"] == "victim" && question_list[j]["question_id"] == answer_list[i*2]){
                        sub_html += '<tr>'+'<td>'+question_list[j]["question"]+'</td>'+'<td>'+ ((answer_list[i*2+1] == 'y') ? "YES" : "NO")+'</td>'+'</tr>';
                        break;
                    }
                }
                else{
                    console.log(answer_list[i]);
                    console.log(question_list[j]["question_id"]);
                    if(question_list[j]["type"] == "offender" && question_list[j]["question_id"] == answer_list[i*2]){
                        console.log('in!!!!!!');
                        sub_html += '<tr>'+'<td>'+question_list[j]["question"]+'</td>'+'<td>'+((answer_list[i*2+1] == 'y') ? "YES" : "NO") +'</td>'+'</tr>';
                        break;
                    }
                }
            }   
        }
        return sub_html+'</table>';
    }
    var dataSet = <? echo json_encode($admin_list) ?>;
    var table = $('#datatable').DataTable( {
        data: dataSet,
        columns: [
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": ''
            },
            { data : "name" },
            { data : "phoneNum" },
            { data: "type" },
            { data: "category" },
            { data : "result"},
            { data : "created_at"}
        ],
        order: [[6, "desc" ]]
    } );
     
    // Add event listener for opening and closing details
    $('#datatable tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );
 
        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    } );

    $('.detail-btn').click(function(){
        var item = $(this).data("id") ;
        
        if($('.detail-'+item).hasClass("show")){
            $('.detail-'+item).hide();
            $('.detail-'+item).removeClass("show");
        }
        else{
            $('.detail-'+item).addClass('show');
        $('.detail-'+item).show();
        }
        
    });
</script>