
$(function() {
    changebz()

})

// 切换步骤
function changebz() {



    // 判断开始按钮是否禁用
    // function canSubmit() {
    //    if (i === $('#tab-content .content').length ){
    //        $('#next_btn').innerHTML = "提交";
    //    }
    //    else
    //        return;
    // }


    var i = 1;
    const content_list = $('#tab-content .content').length;
    // 下一步
    $('#next_btn').on('click', function() {

            i++;
            $('#before_btn').prop('disabled', false)
            if (i > content_list - 1) {
                $('#next_btn').innerText = "fwfde"
            }
            $('#tab-content .content').eq(i - 1).addClass('active').siblings().removeClass('active')
            $('#nav li').eq(i - 1).addClass('active').siblings().removeClass('active')
            console.log(i)
            // canSubmit()


    })

    // 上一步
    $('#before_btn').on('click', function() {
        i--;
        $('#next_btn').prop('disabled', false)
        if (i < 2) {
            $(this).prop('disabled', true)
        }
        $('#tab-content .content').eq(i - 1).addClass('active').siblings().removeClass('active')
        $('#nav li').eq(i - 1).addClass('active').siblings().removeClass('active')
        console.log(i)

    })
}


