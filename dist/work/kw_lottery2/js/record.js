// 彈窗
$(function() {
    $(".popup-close").click(function() {
        closePopup();
    });
});

// Overlay
$(function() {
    $(".overlay").click(function() {
        closePopup();
    });
});

function openPopup(){
    $("html, body").addClass("no-scroll");
    $(".popup-wrap").fadeIn();
    $(".overlay").addClass("active");
    $(".nav-wrap").removeClass("active");
}

function closePopup(){
    $("html, body").removeClass("no-scroll");
    $(".popup-wrap").fadeOut();
    $(".overlay").removeClass("active");
    $(".nav-wrap").removeClass("active");
    $(".popup-wrap").load("_null");
}

// 日曆
$("#recordCalendar").datepicker({ dateFormat:'dd/mm/yy'});

// ACTIONS
$("input").on("change", function(e) {
    $(this).siblings(".label-error").text("");
    $(this).removeClass("error");
})

$("#recordCalendar").on("focusout", function(e) {
    if($(this).val() != '') {
        dateValidation($(this));
    }
})

// CHECK
function dateValidation(input) {
    var errorLabel = input.siblings(".label-error");
    var date = input.val();

    input.removeClass("error");
    errorLabel.text("");

    var matches = /^(\d{1,2})[/\/](\d{1,2})[/\/](\d{4})$/.exec(date);
    if (matches == null) {
        input.addClass("error");
        errorLabel.text("Date not valid.");
    };

    var d = matches[1];
    var m = matches[2] - 1;
    var y = matches[3];
    var composedDate = new Date(y, m, d);

    if(composedDate.getDate() == d && composedDate.getMonth() == m && composedDate.getFullYear() == y) {} else {
        input.addClass("error");
        errorLabel.text("Date not valid.");
    }
}

// filter
$(function() {
    $(".bet-record-filter nav span").click(function() {
        var value = $(this).attr('data-name');
        $(".bet-record-filter nav span").removeClass('active');
        $(this).addClass('active');
        if(value == 'settlement'){
            $('.bet-record-item[data-type = '+ value +']').show();
            $('.bet-record-item[data-type = "unsettlement"]').hide();
        }
        else if(value == 'unsettlement'){
            $('.bet-record-item[data-type = '+ value +']').show();
            $('.bet-record-item[data-type = "settlement"]').hide();
        }
        else {
            $('.bet-record-item').show();
        }
    });
});
