$('document').ready(function() {   
  /* handle form validation */  
  $("#register-form").validate({
      rules:
   {
   user_name: {
      required: true,
   minlength: 3
   },
   password: {
   required: true,
   minlength: 8,
   maxlength: 15
   },
   cpassword: {
   required: true,
   equalTo: '#password'
   },
   user_email: {
            required: true,
            email: true
            },
    },
       messages:
    {
            user_name: "<span class='error-span'>Пожалуйста, введите имя пользователя</span>",
            password:{
                      required: "<span class='error-span'>Пожалуйста, введите пароль</span>",
                      minlength: "<span class='error-span'>Пароль должны быть не менее 8 символов</span>"
                     },
            user_email: "<span class='error-span'>Пожалуйста, введите действительный адрес электронной почты</span>",
   cpassword:{
      required: "<span class='error-span'>Пожалуйста, повторите свой пароль</span>",
      equalTo: "<span class='error-span'>Пароль не подходит</span>"
       }
       },
    submitHandler: submitForm 
       });  
    /* handle form submit */
    function submitForm() {  
    var data = $("#register-form").serialize();    
    $.ajax({    
    type : 'POST',
    url  : 'register.php',
    data : data,
    beforeSend: function() { 
     $("#error").fadeOut();
     $("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Отправка ...');
    },
    success :  function(response) {      
        if(response==1){         
			 $("#error").fadeIn(1000, function(){
			   $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Извините, электронная почта уже занята</div>');           
			   $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Зарегистрироваться');          
			 });                    
        } else if(response=="registered"){         
			 $("#btn-submit").html(' Регистрация ...');
			 setTimeout('$(".form-signin").fadeOut(500, function(){ $(".registration").load("welcome.php"); }); ',3000);         
        } else {          
         	$("#error").fadeIn(1000, function(){           
      			$("#error").html('<div class="alert alert-danger signup__error"><span class="glyphicon glyphicon-info-sign "></span> &nbsp; '+data+' !</div>');           
         		$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Зарегистрироваться');         
         	});           
       	}
        }
    });
    return false;
  }
});