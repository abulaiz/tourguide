    var permission_list = $("#selectize-multiple2").selectize({
                              plugins: ['remove_button'],
                              delimiter: ',',
                              persist: false,
                              onChange : function(){
                                $("[name=permissions_id]").val($('#selectize-multiple2').val());
                              }
                          })[0].selectize;

    $('.selectize-control').hide();