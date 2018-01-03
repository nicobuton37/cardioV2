$(document).ready(function () {
    console.log("ready");

    var switches = $(".switch");
    switches.on("click", function () {
       var t = $(this);
       t.toggleClass("on").closest('tr').toggleClass('on');
       updateTotal(t.closest("#cha"));
       updateTotal(t.closest("#has"));

    });

});
function updateTotal(t){
    var total = 0;
    t.find(".switch.on").each(function () {
        total += parseInt($(this).attr("data-value"));
    });

    t.find(".total").text(total);
}