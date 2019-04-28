    var permission_list = $("#selectize-multiple2").selectize({
                              plugins: ['remove_button'],
                              delimiter: ',',
                              persist: false,
                              onChange : function(){
                                $("[name=permissions_id]").val($('#selectize-multiple2').val());
                              }
                          })[0].selectize;


$(document).ready(function(){
	$( document.getElementsByClassName('nice-select')[0] ).css('padding-left', '15px');
	$( document.getElementsByClassName('nice-select')[1] ).hide();
    $('.selectize-input').css('font-size', 'inherit');
    $('.selectize-input').css('font-family', 'inherit');
});