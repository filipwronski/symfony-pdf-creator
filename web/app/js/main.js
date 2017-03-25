$(document).ready(function () {
  jQuery.extend(jQuery.validator.messages, {
    required: "To pole jest wymagane.",
    remote: "Please fix this field.",
    email: "Proszę wprowadzić właściwy format adresu e-mail.", 
    url: "Please enter a valid URL.",
    date: "Please enter a valid date.",
    dateISO: "Please enter a valid date (ISO).",
    number: "Please enter a valid number.",
    digits: "Please enter only digits.",
    creditcard: "Please enter a valid credit card number.",
    equalTo: "Please enter the same value again.",
    accept: "Please enter a value with a valid extension.",
    maxlength: jQuery.validator.format("Proszę wprowadzić maksymalnie {0} znaków."),
    minlength: jQuery.validator.format("Proszę wprowadzić conajmniej {0} znaków."),
    rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
    range: jQuery.validator.format("Please enter a value between {0} and {1}."),
    max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
    min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
  });

  //WALIDACJA INSTYTUCJONALNY

  $("#form-institutional").validate({
    rules: {
      "form[company_name]": {
        required: true,
        minlength: 5
      }
    },
    messages: {
      "form[company_name]": {
      }
    }
  });
  
  
  //WALIDACJA INDYWIDUALNY
  
  $("#form-individual").validate({
    rules: {
      "form[name]": {
        required: true,
        minlength: 5
      },
      "form[mail]": {
        required: true,
        email: true
      }
    },
    messages: {
      "form[name]": {
      } 
    }
  });
  
  //LOGIKA FORMULARZA
  
  $('#tin-number').hide();
  $("#currency_country").hide();
  $("#foregin-company").hide();
  $("#legal-status").hide();
  $('.coresponding-address').hide();
 
  
   $('#form_company_country_check_0, #form_company_country_check_1').on('click', function () {
    if ($('#form_company_country_check_1').prop('checked')) {
      $('#foregin-company').slideDown('slow');
    } else {
      $('#foregin-company').slideUp('slow');  
    }  
  });
  
  $('#form_other_cor').on('click', function () {
    if ($('#form_other_cor').prop('checked')) {
      $('.coresponding-address').slideDown('slow');
    } else {
      $('.coresponding-address').slideUp('slow');
    } 
  });
  
  $('#form_currency_status_1, #form_currency_status_0').on('click', function () {
    if ($('#form_currency_status_1').prop('checked')) {
      $('#tin-number').slideDown('slow');
      $("#currency_country").slideDown('slow');
    } else {
      $('#tin-number').slideUp('slow'); 
      $("#currency_country").slideUp('slow');
    } 
  });
  
  $('#legal_status_radio').on('click', function () { 
    if ($('#form_legal_status_17').prop('checked')) {
      $('#legal-status').slideDown('slow');
    } else {
      $('#legal-status').slideUp('slow'); 
    } 
  });


});

 