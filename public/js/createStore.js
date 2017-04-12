/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function() {  
    // Setup form validation on the #createStore-form element
    $("#createStore-form").validate({    
        // Specify the validation rules
        rules: {
            storeID: "required",            
            themesDropDown: "required",
            kosherStore: "required",
            sellMilkshakes: "required",
            bakedCookies: "required",
            sellNovelty: "required",
            sellCakes: "required"
        },        
        // Specify the validation error messages
        messages: {
            storeID: "Please enter store ID",
            themesDropDown: "Please select theme",
            kosherStore: "Please check kosher store",
            sellMilkshakes: "Please check sell Milkshakes",
            bakedCookies: "Please check baked Cookies",
            sellNovelty: "Please check sell Novelty",
            sellCakes: "Please check sell Cakes"
        }, 
        errorPlacement: function(label, element) {
                label.addClass('error');
                element.parent().append(label);
            },
        submitHandler: function(form) {
            form.submit();
        }
    });
});

$('body').on('change', '#themesDropDown',function(){
    var themeVal = $('#themesDropDown option:selected').val();
    if(themeVal === 'NonSanDiego'){
        $('#sandiegoOptions').addClass('hide');
        $('#nonSandiegoOptions').removeClass('hide');        
    }else if(themeVal === 'SanDiego'){
        $('#nonSandiegoOptions').addClass('hide');
        $('#sandiegoOptions').removeClass('hide');
    }else{
        $('#sandiegoOptions').addClass('hide');
        $('#nonSandiegoOptions').addClass('hide');
    }
});