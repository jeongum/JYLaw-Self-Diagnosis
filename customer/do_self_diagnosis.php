<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'resource/css/main.css'; ?>"> 
<link rel="stylesheet" href="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'resource/css/main2.css'; ?>"> 

<div id="diagnosis-header" class="m-0">
    <div class="header-contents-container">
        <table class="header-contents-table web-tablet">
            <tr>
                <td rowspan="2" class="text-right"><img class="self-test-img" src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'resource/img/self-test.png'; ?>"></td>
                <td class="JY pb-0" width="15%"><span>JY</span></td>
                <td class="Patent pb-0"><p>특허등록번호</p><p>제 10-2211782호</p></td>
            </tr>
            <tr>
                <td colspan="2" class="Selftest pb-0"><span>자가진단 테스트</span></td>
            </tr>
            <tr>
                <td colspan="3" class="Des text-center">
                <p>질문에 대한 답은 어떤 경우에도 노출되지 않고, 철저하게 보호되니</p><p>
                <span class="highlight">정확한 성범죄 진단</span>을 위해 솔직하고 편안하게 질문에 답해주세요.
                </p>
                </td>
            </tr>
        </table>
        <div class="mobile">
            <p class="Patent mb-0">특허등록번호 제 10-2211782호</p>
            <p class="Selftest mb-0">자가진단 테스트</p>
        </div>
    </div>
    <div class="bg-pattern">
    </div>    
</div>
<section class="q-section">
    <div id = "q1" class="container q-div type-div" >
        <div class="q-icon">
            <div class="q-circle"></div>
            <span class="q-span">Q</span>
        </div>
        <h1 class="web">피해자인가요? 가해자인가요? (또는 혐의를 받고 있나요?)</h1>
        <h1 class="tablet">피해자인가요? 가해자인가요?<br>(또는 혐의를 받고 있나요?)</h1>
        <div class="answer-div">
            <div class="row answer-row">
                <div class="col-6 text-center">
                    <button id="q1-1" class="answer-btn p-0">
                        <div class="answer-btn-div-img" style="padding:1.85vh">
                            <img src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'resource/img/victim.png'; ?>">
                        </div>
                    </button>
                </div>
                <div class="col-6 text-center">
                    <button id="q1-2" class="answer-btn p-0">
                        <div class="answer-btn-div-img" style="padding:1.85vh">
                            <img src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'resource/img/suspect.png'; ?>">
                        </div>
                    </button>
                </div>  
            </div>
            <div class="row  answer-row mb-0">
                <div class="col-6 text-center">
                    <span class="answer-span">피해자</span>
                </div>
                <div class="col-6 text-center">
                    <span class="answer-span" style="line-height:1;">가해자<br><span class="answer-span-add">또는혐의</span></span>
                </div>  
            </div>
        </div>
    </div>

    <!-- OFFENDER -->
    <div id="offender-qa" class="container q-div" style="display: none">    
        <div class="q-icon">
            <div class="q-circle"></div>
            <span class="q-span">Q</span>
        </div>
        <h1 style="margin-bottom:3.24vh">죄명을 골라주세요.</h1>
        <div class="answer-div category-div" style="padding-bottom:6.2vh">
            <div class="row answer-row mul-btn">
                <div class="col-4 text-center">
                    <button id="offender-qa-1" class="answer-btn p-0">
                        <div class="answer-btn-div p-0">
                        <span>A</span>
                        </div>
                    </button>
                </div>
                <div class="col-4 text-center">
                    <button id="offender-qa-1" class="answer-btn p-0">
                        <div class="answer-btn-div p-0">
                        <span>B</span>
                        </div>
                    </button>
                </div>
                <div class="col-4 text-center">
                    <button id="offender-qa-1" class="answer-btn p-0">
                        <div class="answer-btn-div p-0">
                        <span>C</span>
                        </div>
                    </button>
                </div>
            </div>
            <div class="row answer-row mul-span">
                <div class="col-4 text-center">
                    <span class="answer-span font-size-26">강간</span>
                </div>
                <div class="col-4 text-center">
                    <span class="answer-span font-size-26">준강간</span>
                </div>
                <div class="col-4 text-center">
                    <span class="answer-span font-size-26">유사강간</span>
                </div>
            </div>
            <div class="row answer-row mul-btn">
                <div class="col-4 text-center">
                    <button id="offender-qa-4" class="answer-btn p-0">
                        <div class="answer-btn-div p-0">
                        <span>D</span>
                        </div>
                    </button>
                </div>
                <div class="col-4 text-center">
                    <button id="offender-qa-5" class="answer-btn p-0">
                        <div class="answer-btn-div p-0">
                        <span>E</span>
                        </div>
                    </button>
                </div>
                <div class="col-4 text-center">
                    <button id="offender-qa-6" class="answer-btn p-0">
                        <div class="answer-btn-div p-0">
                        <span>F</span>
                        </div>
                    </button>
                </div>
            </div>
            <div class="row answer-row mul-span">
                <div class="col-4 text-center">
                    <span class="answer-span font-size-26">강제추행</span>
                </div>
                <div class="col-4 text-center">
                    <span class="answer-span font-size-26">준강제추행</span>
                </div>
                <div class="col-4 text-center">
                    <span class="answer-span font-size-26 web-tablet">카메라등이용촬영</span>
                    <span class="answer-span font-size-26 mobile">카메라 이용</span>
                </div>
            </div>
            <div class="row answer-row mul-btn">
                <div class="col-4 text-center">
                    <button id="offender-qa-7" class="answer-btn p-0">
                        <div class="answer-btn-div p-0">
                            <span>G</span>
                        </div>
                    </button>
                </div>
                <div class="col-4 text-center">
                    <button id="offender-qa-8" class="answer-btn p-0">
                        <div class="answer-btn-div p-0">
                        <span>H</span>
                        </div>
                    </button>
                </div>
                <div class="col-4 text-center">
                    <button id="offender-qa-9" class="answer-btn p-0">
                        <div class="answer-btn-div p-0">
                        <span>I</span>
                        </div>
                    </button>
                </div>
            </div>
            <div class="row answer-row mul-span">
                <div class="col-4 text-center">
                    <span class="answer-span font-size-26">공연음란</span>
                </div>
                <div class="col-4 text-center">
                    <span class="answer-span font-size-26 web-tablet">통신매체이용음란</span>
                    <span class="answer-span font-size-26 mobile">통신매체이용</span>
                </div>
                <div class="col-4 text-center">
                    <span class="answer-span font-size-26">성매매</span>
                </div>
            </div>
        </div>
    </div>

    <?php
        foreach($offender_question_list as $question){
            ?>
            <div id="<?php echo 'offender-q'.$question->question_id?>" style="display:none"  class="container q-div">
                <div class="q-icon">
                    <div class="q-circle"></div>
                    <span class="q-span">Q</span>
                </div>
                <h1><?php echo $question->question ?><br><span>간단한 O / X 문답을 통해 현재 상황을 파악해 보실 수 있습니다.</span></h1>
                <div class="answer-div">
                    <div class="row answer-row">
                        <div class="col-6 text-center">
                            <button  id="<?php echo 'offender-'.$question->question_id.'-1'?>" class="offender-answer-btn answer-btn p-0">
                                <div class="answer-btn-div-img">
                                    <img src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'resource/img/answer-o.svg'; ?>" style="object-fit:contain;">
                                </div>
                            </button>
                        </div>
                        <div class="col-6 text-center">
                            <button id="<?php echo 'offender-'.$question->question_id.'-2'?>" class="offender-answer-btn answer-btn p-0">
                                <div class="answer-btn-div-img">
                                    <img src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'resource/img/answer-x.svg'; ?> " style="object-fit:contain;">
                                </div>
                            </button>
                        </div>  
                    </div>
                    <div class="row  answer-row mb-0">
                        <div class="col-6 text-center">
                            <span class="answer-span font-size-45 font-poppins" style="line-height:1;">Yes<br><span class="answer-span-add font-size-20">네, 맞습니다</span></span>
                        </div>
                        <div class="col-6 text-center">
                            <span class="answer-span font-size-45 font-poppins" style="line-height:1;">No<br><span class="answer-span-add font-size-20">아닙니다 / 잘 모릅니다</span></span>
                        </div>  
                    </div>
                </div>
            </div>
            <?php
        }
    ?>

<!-- VICTIM -->
<div id="victim-qa" class="container q-div" style="display: none">    
    <div class="q-icon">
        <div class="q-circle"></div>
        <span class="q-span">Q</span>
    </div>
    <h1 style="margin-bottom:3.24vh">죄명을 골라주세요.</h1>
    <div class="answer-div category-div" style="padding-bottom:6.2vh">
        <div class="row answer-row mul-btn">
            <div class="col-4 text-center">
                <button id="victim-qa-1" class="answer-btn p-0">
                    <div class="answer-btn-div p-0">
                    <span>A</span>
                    </div>
                </button>
            </div>
            <div class="col-4 text-center">
                <button id="victim-qa-1" class="answer-btn p-0">
                    <div class="answer-btn-div p-0">
                    <span>B</span>
                    </div>
                </button>
            </div>
            <div class="col-4 text-center">
                <button id="victim-qa-1" class="answer-btn p-0">
                    <div class="answer-btn-div p-0">
                    <span>C</span>
                    </div>
                </button>
            </div>
        </div>
        <div class="row answer-row mul-span">
            <div class="col-4 text-center">
                <span class="answer-span font-size-26">강간</span>
            </div>
            <div class="col-4 text-center">
                <span class="answer-span font-size-26">준강간</span>
            </div>
            <div class="col-4 text-center">
                <span class="answer-span font-size-26">유사강간</span>
            </div>
        </div>
        <div class="row answer-row mul-btn">
            <div class="col-4 text-center">
                <button id="victim-qa-4" class="answer-btn p-0">
                    <div class="answer-btn-div p-0">
                    <span>D</span>
                    </div>
                </button>
            </div>
            <div class="col-4 text-center">
                <button id="victim-qa-5" class="answer-btn p-0">
                    <div class="answer-btn-div p-0">
                    <span>E</span>
                    </div>
                </button>
            </div>
            <div class="col-4 text-center">
                <button id="victim-qa-6" class="answer-btn p-0">
                    <div class="answer-btn-div p-0">
                    <span>F</span>
                    </div>
                </button>
            </div>
        </div>
        <div class="row answer-row mul-span">
            <div class="col-4 text-center">
                <span class="answer-span font-size-26">강제추행</span>
            </div>
            <div class="col-4 text-center">
                <span class="answer-span font-size-26">준강제추행</span>
            </div>
            <div class="col-4 text-center">
                <span class="answer-span font-size-26">카메라등이용촬영</span>
            </div>
        </div>
        <div class="row answer-row mul-btn">
            <div class="col-4 text-center">
                <button id="victim-qa-7" class="answer-btn p-0">
                    <div class="answer-btn-div p-0">
                        <span>G</span>
                    </div>
                </button>
            </div>
        </div>
        <div class="row answer-row mul-span">
            <div class="col-4 text-center">
                <span class="answer-span font-size-26">통신매체이용음란</span>
            </div>
        </div>
    </div>
</div>
<?php
    foreach($victim_question_list as $question){
        ?>
        <div id="<?php echo 'victim-q'.$question->question_id?>" style="display:none"  class="container q-div">
            <div class="q-icon">
                <div class="q-circle"></div>
                <span class="q-span">Q</span>
            </div>
            <h1><?php echo $question->question ?></h1>
            <div class="answer-div">
                <div class="row answer-row">
                    <div class="col-6 text-center">
                        <button  id="<?php echo 'victim-'.$question->question_id.'-1'?>" class="victim-answer-btn answer-btn p-0">
                            <div class="answer-btn-div-img">
                                <img src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'resource/img/answer-o.svg'; ?>" style="object-fit:contain;">
                            </div>
                        </button>
                    </div>
                    <div class="col-6 text-center">
                        <button id="<?php echo 'victim-'.$question->question_id.'-2'?>" class="victim-answer-btn answer-btn p-0">
                            <div class="answer-btn-div-img">
                                <img src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'resource/img/answer-x.svg'; ?> " style="object-fit:contain;">
                            </div>
                        </button>
                    </div>  
                </div>
                <div class="row  answer-row mb-0">
                    <div class="col-6 text-center">
                        <span class="answer-span font-size-45 font-poppins" style="line-height:1;">Yes<br><span class="answer-span-add font-size-20">네, 맞습니다</span></span>
                    </div>
                    <div class="col-6 text-center">
                        <span class="answer-span font-size-45 font-poppins" style="line-height:1;">No<br><span class="answer-span-add font-size-20">아닙니다 / 잘 모릅니다</span></span>
                    </div>  
                </div>
            </div>
        </div>
        <?php
    }
?>
<?php include("check_phone.php") ?>
<?php include("result.php") ?>

<footer id="diagnosis-footer" onclick="location.href='https://jy-law.kr';">
    홈페이지 메인으로 돌아가기<img src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'resource/img/arrow.svg'; ?> " class="arrow">
</footer>

</section>
<script>
    var answer = [] ;
    var ai = 0;
    var result = "";
    var type = "";
    var category = "";
    var victim_answer_list = <?php echo json_encode($victim_answer_list); ?> ;
    var offender_answer_list = <?php echo json_encode($offender_answer_list); ?> ;
    var result_list = <?php echo json_encode($result_list); ?> ;
    var phonedata = 0;
    var randNum = 99999999;

    //Q1 event
    $('#q1-1').click(function(){
        $('#q1').hide();
        type = "피해자";
        $('#victim-qa').show();
    });
    $('#q1-2').click(function(){
        $('#q1').hide();
        type = "가해자";
        $('#offender-qa').show();
    });

    //Offender Qa Event
    $('#offender-qa-1, #offender-qa-2, #offender-qa-3').click(function(){
        $('#offender-qa').hide();
        if($(this).attr('id') == 'offender-qa-1'){
            category = "강간";
        }
        else if($(this).attr('id') == 'offender-qa-2'){
            category = "준강간";
        }
        else if($(this).attr('id') == 'offender-qa-3'){
            category = "유사강간";
        }
        $('#offender-q1').show();
    });
    $('#offender-qa-4, #offender-qa-5').click(function(){
        $('#offender-qa').hide();
        if($(this).attr('id') == 'offender-qa-4'){
            category = "강제추행";
        }
        else if($(this).attr('id') == 'offender-qa-5'){
            category = "준강제추행";
        }
        $('#offender-q10').show();
    });
    $('#offender-qa-6').click(function(){
        $('#offender-qa').hide();
        category = "카메라등이용촬영";
        $('#offender-q12').show();
    });
    $('#offender-qa-7').click(function(){
        $('#offender-qa').hide();
        category = "공연음란";
        $('#offender-q17').show();
    });
    $('#offender-qa-8').click(function(){
        $('#offender-qa').hide();
        category = "통신매체이용음란";
        $('#offender-q15').show();
    });
    $('#offender-qa-9').click(function(){
        $('#offender-qa').hide();
        category = "성매매";
        $('#offender-q18').show();
    });

    //Victim Qa Event
    $('#victim-qa-1, #victim-qa-2, #victim-qa-3').click(function(){
        $('#victim-qa').hide();
        if($(this).attr('id') == 'victim-qa-1'){
            category = "강간";
        }
        else if($(this).attr('id') == 'victim-qa-2'){
            category = "준강간";
        }
        else if($(this).attr('id') == 'victim-qa-3'){
            category = "유사강간";
        }
        $('#victim-q1').show();
    });
    $('#victim-qa-4, #victim-qa-5').click(function(){
        $('#victim-qa').hide();
        if($(this).attr('id') == 'victim-qa-4'){
            category = "강제추행";
        }
        else if($(this).attr('id') == 'victim-qa-5'){
            category = "준강제추행";
        }
        $('#victim-q10').show();
    });
    $('#victim-qa-6').click(function(){
        $('#victim-qa').hide();
        category = "카메라등이용촬영";
        $('#victim-q12').show();
    });
    $('#victim-qa-7').click(function(){
        $('#victim-qa').hide();
        category = "통신매체이용음란";
        $('#victim-q15').show();
    });

    //button click action 
    $('.victim-answer-btn').click(function(){
        var id = $(this).attr('id');
        var ans = "";
        if(id.split("-")[2] == '1'){
            ans = 'y';
        }
        else{
            ans = 'n';
        }
        var qnum = id.split("-")[1];
        answer[ai++] = qnum;
        answer[ai++] = ans;
        
        for(var i = 0; i< Object.keys(victim_answer_list).length ; i++){
            var tmp = victim_answer_list[i]['answer'].split(',');
            var flag = 0;
            var next = 0;
            for(var j = 0 ; j<ai; j++){
                if(tmp[j] != answer[j]){
                    flag = 1;
                    break;
                }
            }
            if(flag == 0 && ai != tmp.length) {
                next = tmp[ai];
                $('#victim-q'+qnum).hide();
                $('#victim-q'+next).show();
                break;
            }
            else if(flag == 0 && ai == tmp.length) {
                $('#victim-q'+qnum).hide();
                var result_num = victim_answer_list[i]['result']; 
                var result = result_list[result_num]['name'];
                var resultnum = result_list[result_num]['id'];
                console.log(result);
                $('#result-contents').text(result);
                $('#resultnum').val(resultnum);
                $('#resultname').val(result);
                $('#resulttype').val(type);
                $('#resultcategory').val(category);
                $('#check-phone').show();
                break;
            }
        }
    });

    $('.offender-answer-btn').click(function(){
        var id = $(this).attr('id');
        var ans = "";
        
        if(id.split("-")[2] == '1'){
            ans = 'y';
        }
        else{
            ans = 'n';
        }
        
        var qnum = id.split("-")[1];
        answer[ai++] = qnum;
        answer[ai++] = ans;
        for(var i = 0; i< Object.keys(offender_answer_list).length ; i++){
            var tmp = offender_answer_list[i]['answer'].split(',');
            var flag = 0;
            var next = 0;
            for(var j = 0 ; j<ai; j++){
                if(tmp[j] != answer[j]){
                    flag = 1;
                    break;
                }
            }
            if(flag == 0 && ai != tmp.length) {
                next = tmp[ai];
                $('#offender-q'+qnum).hide();
                $('#offender-q'+next).show();
                break;
            }
            else if(flag == 0 && ai == tmp.length) {
                $('#offender-q'+qnum).hide();
                var result_num = offender_answer_list[i]['result']; 
                var result = result_list[result_num]['name'];
                console.log(result);
                var resultnum = result_list[result_num]['id'];
                $('#result-contents').text(result);   
                $('#resultnum').val(resultnum);
                $('#resultname').val(result);
                $('#resulttype').val(type);
                $('#resultcategory').val(category);
                $('#check-phone').show();
                break;
            }
        }
    });

    
    

</script>