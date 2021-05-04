<script type="text/javascript">
    var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
</script>
<input type="hidden" name ="resultnum" id="resultnum">
<input type="hidden" name ="resultname" id="resultname">
<input type="hidden" name ="resulttype" id="resulttype">
<input type="hidden" name ="resultcategory" id="resultcategory">

<div id="check-phone" class="container q-div" style="display:none;">
    <div class="r-icon">        
        <span class="badge badge-pill r-span font-size-27">Result</span>
    </div>
    <h1 class="result-h1-span" style="margin-bottom:3.24vh">자가진단 결과 확인을 위해<br><span >이름과 휴대폰 번호를 입력해주세요.</span></h1>
    
    <div class="input-table">
        <table class="border-0">
            <tr>
                <td class="pt-0"><input class="font-size-20" type="text" id="name" placeholder="이름"></td>
                <td></td>
            </tr>
            <tr>
                <td><input class="font-size-20" type="text" id="phone" placeholder="휴대폰 번호(숫자만 입력)" onkeypress="onlyNumber();"></td>
                <td><button class="input-btn font-size-20" id="phone-num-complete">인증요청</button></td>
            </tr>
            <tr>
                <td id="countdown-td"><input class="font-size-20" type="text" id="input-number" placeholder="인증번호"><input type="hidden" id="real-number"><p id="countdown"></p></td>
                <td><button class="input-btn font-size-20" id="cert-num-complete">인증확인</button></td>
            </tr>
            <tr>
                <td colspan="2" class="pb-0 pt-0 noti">&nbsp;※&nbsp;&nbsp;이름과 휴대폰 번호는 필수 사항입니다.</td>
            </tr>
        </table>
        <div>
            <div class="row p-2">
                <input type="checkbox" class="agree-check" id="agree-check">
                <span>개인정보 수집 동의</span>
                <span style="color: #464646;"><a href="" data-toggle="modal" data-target="#personal-agreement-modal"style="color: #464646;">[보기]</a></span>
                
            </div>
            <div class="row justify-content-center m-auto" style="width:39.62vh">
                <button class="btn input-result-btn font-size-25" id="show-result-btn" disabled>결과 보러가기 〉</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="name-require-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered justify-content-center " role="document">
        <div class="modal-content">
            <div class="modal-body">
                <p>이름을 입력하세요.</p>
                <button class="btn modal-btn" data-dismiss="modal">확인</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="phone-require-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered justify-content-center " role="document">
        <div class="modal-content">
            <div class="modal-body">
                <p>전화번호를 입력하세요.</p>
                <button class="btn modal-btn" data-dismiss="modal">확인</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="phone-incomplete-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered justify-content-center " role="document">
        <div class="modal-content">
            <div class="modal-body">
                <p>전화번호가 유효하지 않습니다.</p>
                <button class="btn modal-btn" data-dismiss="modal">확인</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="phone-complete-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered justify-content-center " role="document">
        <div class="modal-content">
            <div class="modal-body">
                <p>입력하신 전화번호로 인증번호가 전송됩니다.<br>전송된 인증번호를 아래 입력란에 입력하시고<br>인증확인 버튼을 눌러주세요.</p>
                <button class="btn modal-btn" data-dismiss="modal">확인</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="cert-complete-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered justify-content-center " role="document">
        <div class="modal-content">
            <div class="modal-body">
                <p>정상적으로 인증되었습니다.</p>
                <button class="btn modal-btn" data-dismiss="modal">확인</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="cert-incomplete-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered justify-content-center " role="document">
        <div class="modal-content">
            <div class="modal-body">
                <p>인증 번호가 틀립니다.</p>
                <button class="btn modal-btn" data-dismiss="modal">확인</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="time-over-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered justify-content-center " role="document">
        <div class="modal-content">
            <div class="modal-body">
                <p>인증 요청 시간이 경과하였습니다.<br>인증을 다시 해주세요.</p>
                <button class="btn modal-btn" data-dismiss="modal">확인</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="personal-agreement-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered justify-content-center " role="document">
        <div class="modal-content">
            <div class="modal-body">
                <p><span>수집하는 개인정보 항목<br></span>
                jy법률사무소은(는) 회원가입, 상담, 서비스 신청 등을 위해 아래와 같은 개인정보를 수집하고 있습니다.
                1. 필수항목 :아이디, 이름, 패스워드, 연락처, 이메일
                2. 자동수집항목: 서비스 이용기록, 접속 로그, 쿠키, 접속 IP 정보
                </p>
                <p>
                <span>개인정보의 수집 및 이용목적<br></span>
                jy법률사무소은(는) 수집한 개인정보를 다음의 목적을 위해 활용합니다.
                1. 서비스 이용에 따른 본인식별, 실명확인, 가입의사 확인
                2. 고지사항 전달, 의사소통 경로 확보, 이벤트 당첨 물품 배송 시 정확한 배송지 정보 확보
                3. 신규 서비스 등 최신정보 개인 맞춤 서비스 제공을 위한 자료
                4. 불량회원 부정 이용 방지 및 비인가 사용 방지
                5. 기타 원활한 양질의 서비스 제공
                </p>
                <p>
                <span>개인정보의 보유 및 이용기간<br></span>
                원칙적으로 개인정보의 수집 또는 제공받은 목적 달성 시 지체 없이 파기합니다.
                회원으로서 jy법률사무소이(가) 제공하는 서비스 이용기간 동안 회원님의 개인정보는 'jy법률사무소'에서 계속 보유하게 되나 원칙적으로 개인정보의 수집 또는 제공받은 목적 달성 시 지체 없이 파기합니다.
                이용약관 및 미충양속을 해치는 등 서비스에 물의를 일으키는 경우, 불량사용자에 대해서는 이용자의 의사에 관계없이 강제탈퇴됩니다.
                </p>
                <p>
                <span>개인정보의 파기절차 및 방법<br></span>
                jy법률사무소은(는) 원칙적으로 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체없이 파기합니다. 파기절차 및 방법은 다음과 같습니다.
                ο 파기절차
                - 회원님이 회원가입 등을 위해 입력하신 정보는 목적이 달성된 후 별도의 DB로 옮겨져(종이의 경우 별도의 서류함) 내부 방침 및 기타 관련 법령에 의한 정보보호 사유에 따라(보유 및 이용기간 참조) 일정 기간 저장된 후 파기되어집니다.
                별도 DB로 옮겨진 개인정보는 법률에 의한 경우가 아니고서는 보유되어지는 이외의 다른 목적으로 이용되지 않습니다.
                ο 파기방법
                - 전자적 파일형태로 저장된 개인정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제합니다.
                </p>
                <p>
                <span>개인정보<br></span>
                jy법률사무소은(는) 이용자의 개인정보를 원칙적으로 외부에 제공하지 않습니다. 다만, 아래의 경우에는 예외로 합니다.
                - 이용자들이 사전에 동의한 경우
                - 법령의 규정에 의거하거나, 수사 목적으로 법령에 정해진 절차와 방법에 따라 수사기관의 요구가 있는 경우
                </p>
                <p>
                <span>수집한 개인정보의 위탁<br></span>
                jy법률사무소은(는) 고객님의 동의없이 고객님의 정보를 외부 업체에 위탁하지 않습니다.
                향후 그러한 필요가 생길 경우, 위탁 대상자와 위탁 업무 내용에 대해 고객님에게 통지하고 필요한 경우 사전 동의를 받도록 하겠습니다.
                이용약관 및 미충양속을 해치는 등 서비스에 물의를 일으키는 경우, 불량사용자에 대해서는 이용자의 의사에 관계없이 강제탈퇴됩니다.
                </p>
                <p>
                <span>이용자 및 법정대리인의 권리와 그 행사방법<br></span>
                이용자 및 법정 대리인은 언제든지 등록되어 있는 자신 혹은 당해 만 14세 미만 아동의 개인정보를 조회하거나 수정할 수 있으며 가입해지를 요청할 수도 있습니다.
                이용자 혹은 만 14세 미만 아동의 개인정보 조회를 위해서는 ‘정보수정’ 을, 가입해지(동의철회)를 위해서는 "회원탈퇴"를 클릭하여 본인 확인 절차를 거치신 후 직접 열람, 정정 또는 탈퇴가 가능합니다.
                혹은 개인정보관리책임자에게 서면, 전화 또는 이메일로 연락하시면 지체없이 조치하겠습니다.
                귀하가 개인정보의 오류에 대한 정정을 요청하신 경우에는 정정을 완료하기 전까지 개인정보를 이용 또는 제공하지 않습니다.
                또한 잘못된 개인정보를 제3자에게 이미 제공한 경우에는 정정 처리결과를 제3자에게 지체없이 통지하여 정정이 이루어지도록 하겠습니다.
                jy법률사무소은(는) 이용자 혹은 법정 대리인의 요청에 의해 해지 또는 삭제된 개인정보는 jy법률사무소이(가) 수집하는 개인정보의 보유 및 이용기간"에 명시된 바에 따라 처리하고 그 외의 용도로 열람 또는 이용할 수 없도록 처리하고 있습니다.
                </p>
                <p>
                <span>개인정보 자동수집 장치의 설치, 운영 및 그 거부에 관한 사항<br></span>
                jy법률사무소은(는) 귀하의 정보를 수시로 저장하고 찾아내는 '쿠키(cookie)' 등을 운용합니다.
                쿠키란 jy법률사무소의 웹사이트를 운영하는데 이용되는 서버가 귀하의 브라우저에 보내는 아주 작은 텍스트 파일로서 귀하의 컴퓨터 하드디스크에 저장됩니다.
                jy법률사무소은(는) 다음과 같은 목적을 위해 쿠키를 사용합니다.
                </p>
                <p>
                <span>쿠키 등 사용 목적<br></span>
                - 회원과 비회원의 접속 빈도나 방문 시간 등을 분석, 이용자의 취향과 관심분야를 파악 및 자취 추적, 각종 이벤트 참여 정도 및 방문 회수 파악 등을 통한 타겟 마케팅 및 개인 맞춤 서비스 제공
                    쿠키 설정 거부 방법
                    설정방법 예(인터넷 익스플로어의 경우) : 웹 브라우저 상단의 도구 > 인터넷 옵션 > 개인정보
                    단, 귀하께서 쿠키 설치를 거부하였을 경우 서비스 제공에 어려움이 있을 수 있습니다.
                    </p>
                <p>
                <span>개인정보 관리 책임자<br></span>
                jy법률사무소은(는) 고객의 개인정보를 보호하고 개인정보와 관련한 불만을 처리하기 위하여 아래와 같이 관련 부서 및 개인정보관리책임자를 지정하고 있습니다.
                <br>
                개인정보관리책임자
                - 성명 : 관리자
                - 전화번호 : 02-582-4833
                (평일 : 오전 9:00 ~ 오후 6:00 까지)
                - 이메일 : magol2@hotmail.com
                </p>
                <p>
                <span>개인정보 자동수집 장치의 설치, 운영 및 그 거부에 관한 사항<br></span>
                jy법률사무소은(는) 귀하의 정보를 수시로 저장하고 찾아내는 '쿠키(cookie)' 등을 운용합니다.
                쿠키란 jy법률사무소의 웹사이트를 운영하는데 이용되는 서버가 귀하의 브라우저에 보내는 아주 작은 텍스트 파일로서 귀하의 컴퓨터 하드디스크에 저장됩니다.
                jy법률사무소은(는) 다음과 같은 목적을 위해 쿠키를 사용합니다.
                </p>
                <p>
                기타 개인정보침해에 대한 신고나 상담이 필요하신 경우에는 아래 기관에 문의하시기 바랍니다.
                1. 개인분쟁조정위원회 (www.1336.or.kr/1336)
                2. 정보보호마크인증위원회 (www.eprivacy.or.kr/02-580-0533~4)
                3. 대검찰청 인터넷범죄수사센터 (http://icic.sppo.go.kr/02-3480-3600)
                4. 경찰청 사이버테러대응센터 (www.ctrc.go.kr/02-392-0330)
                </p>
                <button class="btn modal-btn" data-dismiss="modal">확인</button>
            </div>
        </div>
    </div>
</div>

<script>
var complete_cert = 0;
var complete_agree = 0;

$('#phone-num-complete').click(function(){
    if(!$('input#name').val()){
        $('#name-require-modal').modal('show');
    }
    else if(!$('input#phone').val()){
        $('#phone-require-modal').modal('show');
    }
    else if(($('input#phone').val()).length != 11){
        $('#phone-incomplete-modal').modal('show');
    }
    else{
        var max = 9999
        var min = 1000
        phonedata = document.getElementById("phone").value;
        randNum = Math.floor(Math.random()*(max-min+1)) + min;
        $.ajax({
            url: ajaxurl,
            data: {
                action: 'self_diagnosis',
                cert: randNum,
                phonenum: phonedata
            },
            type: 'GET'
        });
        $('#phone-complete-modal').modal('show');
        countdown( "countdown", 3,0 );
    }
    
});


function onlyNumber(){
    if((event.keyCode<48)||(event.keyCode>57)){
        event.returnValue=false;
    }
}

function countdown( elementName, minutes, seconds )
{
    var element, endTime, hours, mins, msLeft, time;

    function twoDigits( n )
    {
        return (n <= 9 ? "0" + n : n);
    }

    function updateTimer()
    {
        msLeft = endTime - (+new Date);
        if ( msLeft < 1000 ) {
            if(complete_cert == 0){
                $('#time-over-modal').modal('show');
                randNum = 999999;
            }
        } 
        else {
            time = new Date( msLeft );
            hours = time.getUTCHours();
            mins = time.getUTCMinutes();
            element.innerHTML = (hours ? hours + ':' + twoDigits( mins ) : mins) + ':' + twoDigits( time.getUTCSeconds() );
            setTimeout( updateTimer, time.getUTCMilliseconds() + 500 );
        }
    }

    element = document.getElementById( elementName );
    endTime = (+new Date) + 1000 * (60*minutes + seconds) + 500;
    updateTimer();
}
$('#cert-num-complete').click(function(){
    var cert_input = $('#input-number').val();
    if(cert_input == randNum){
        resultName = document.getElementById("resultname").value;
        name = document.getElementById("name").value;
        $.ajax({
            url: ajaxurl,
            data: {
                action: 'store_result',
                typeData: type,
                categoryData: category,
                answerData: answer,
                resultData: resultName,
                phonenumData: phonedata,
                nameData: name
            },
            type: 'GET'
        });
        $('#cert-complete-modal').modal('show');
        countdown( "countdown", 600,0 );
        $('#countdown').hide();
        complete_cert = 1;
        activate_btn();
    }
    else{
        $('#cert-incomplete-modal').modal('show');
    }
});
$('#agree-check').change(function(){
    if($("#agree-check").is(":checked")){
        complete_agree= 1;
        activate_btn();
    }
    else{
        complete_agree= 0;
        activate_btn();
    }
});

$('#show-result-btn').click(function(){
    phonedata = document.getElementById("phone").value;
    name = document.getElementById("name").value;
    resultName = document.getElementById("resultname").value;
    resultType = document.getElementById("resulttype").value;
    resultCate = document.getElementById("resultcategory").value;

    $.ajax({
        url: ajaxurl,
        data: {
            action: 'submit_admin',
            phonenum: phonedata,
            personname: name,
            resultname: resultName,
            resulttype: resultType,
            resultcate: resultCate
        },
        type: 'GET'
    });

    $('#diagnosis-header').hide();
    $('#check-phone').hide();
    $('#diagnosis-footer').hide();
    $('#result-section').show();
    if($('#resultnum').val() == 1){
        $('#result-contents0').show();
        $('#result_d0').show();
    }
    if($('#resultnum').val() == 2){
        $('#result-contents20').show();
        $('#col-div-lawabout').show();
        $('#result_d20').show();

    }
    if($('#resultnum').val() == 4){
        $('#result-contents1').show();
        $('#col-div-lawabout').show();
        $('#result_d1').show();
    }
    if($('#resultnum').val() == 5){
        $('#result-contents17').show();
        $('#col-div-lawabout').show();
        $('#result_d17').show();
    }
    if($('#resultnum').val() == 6){
        $('#result-contents22').show();
        $('#col-div-lawabout').show();
        $('#result_d22').show();
    }
    if($('#resultnum').val() == 7 ){
        $('#result-contents2').show();
        $('#col-div-lawabout').show();
        $('#result_d2').show();
    }
    if($('#resultnum').val() == 8){
        $('#result-contents10').show();
        $('#col-div-lawabout').show();
        $('#result_d10').show();
    }
    if($('#resultnum').val() == 9){
        $('#result-contents3').show();
        $('#col-div-lawabout').show();
        $('#result_d3').show();
    }
    if($('#resultnum').val() == 10){
        $('#result-contents4').show();
        $('#col-div-lawabout').show();
        $('#result_d4').show();
    }
    if($('#resultnum').val() == 11){
        $('#result-contents6').show();
        $('#col-div-lawabout').show();
        $('#result_d6').show();
    }
    if($('#resultnum').val() == 12){
        $('#result-contents8').show();
        $('#col-div-lawabout').show();
        $('#result_d8').show();
    }
    if($('#resultnum').val() == 13){
        $('#result-contents11').show();
        $('#col-div-lawabout').show();
        $('#result_d11').show();
    }
    if($('#resultnum').val() == 14){
        $('#result-contents9').show();
        $('#col-div-lawabout').show();
        $('#result_d9').show();
    }
    if($('#resultnum').val() == 15){
        $('#result-contents12').show();
        $('#col-div-lawabout').show();
        $('#result_d12').show();
    }
    if($('#resultnum').val() == 16){
        $('#result-contents5').show();
        $('#col-div-lawabout').show();
        $('#result_d5').show();
    }
    if($('#resultnum').val() == 17){
        $('#result-contents13').show();
        $('#col-div-lawabout').show();
        $('#result_d13').show();
    }
    if($('#resultnum').val() == 18){
        $('#result-contents14').show();
        $('#col-div-lawabout').show();
        $('#result_d14').show();
    }
    if($('#resultnum').val() == 19){
        $('#result-contents15').show();
        $('#col-div-lawabout').show();
        $('#result_d15').show();
    }
    if($('#resultnum').val() == 20){
        $('#result-contents16').show();
        $('#col-div-lawabout').show();
        $('#result_d16').show();
    }
    if($('#resultnum').val() == 21){
        $('#result-contents18').show();
        $('#col-div-lawabout').show();
        $('#result_d18').show();
    }
    if($('#resultnum').val() == 22){
        $('#result-contents19').show();
        $('#col-div-lawabout').show();
        $('#result_d19').show();
    }
    if($('#resultnum').val() == 23){
        $('#result-contents21').show();
        $('#col-div-lawabout').show();
        $('#result_d21').show();
    }
    
});

function activate_btn(){
    if(complete_cert == 1 && complete_agree == 1){
        $('#show-result-btn').removeAttr("disabled");
    }
    else{
        $('#show-result-btn').attr("disabled","disabled");
    }
}
</script>

