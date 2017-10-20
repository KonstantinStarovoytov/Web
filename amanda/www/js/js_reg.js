$(document).ready(function() {
    
    $('#sI_button').click(function () {
        var login,password,email = '';
    if($('#sI_button').attr('value') == "Login"){
         login = $('#login').val();
         password = $('#pass').val();
        $.ajax({
            url: '/ajax/reg_bd.php',
            type: 'POST',
            chache: false,
            data: {'login' : login, 'pass' : password, 'email' : ''},
            dataType: 'html',
          success: function(data){
               
                 alert("успех");
                 $(location).attr('href',"https://imageprv.000webhostapp.com/index.php");
          }
        });

    } else if($('#sI_button').attr('value') == "Sign me up"){
         login = $('#login').val();
         password = $('#pass').val();
         email = $('#email').val();
        $.ajax({
            url: '/ajax/reg_bd.php',
            type: 'POST',
            chache: false,
            data: {'login' : login, 'pass' : password, 'email' : email},
            dataType: 'html',
            success: function(data){
               alert(data);
                $(location).attr('href',"https://imageprv.000webhostapp.com/index.php");
            }
        });

    }
    });
 $('#sUp').click(function() {
        $('#sI_button').attr('value','Sign me up');
        $('#sI_button').css({'border-color':'white','background':'transparent', 'color':'white'});
        $('.a_field').css({'border' : '2px double grey'});
        $('#login,#pass').val('');
        $('.validation').text('');
        $('#singin').animate({
        opacity: 1,
        height: "360px"
        }, 800, function () {
        
        $('#sUp').fadeOut(700, function(){
        $('#sUp').css('display', 'none');
        $('#sIn').fadeIn(700, function(){
        $('#sIn').css('display', 'inline-block')});

        });
        $('#logo')
        .text('Sign in')
        .fadeOut(400,function() {
            $('#logo')
            .text('Sign up')
            .fadeIn(700,function() {});
        });
        

        $('#login,#pass, #email, #repass').
        hide().
        animate({
        opacity: 1,
        width: "toggle"
        }, 1000, function () {
        
        });

        });
 
});
$('#sIn').click(function() {
        $('#sI_button').css({'border-color':'white','background':'transparent', 'color':'white'});
        $('.a_field').css({'border' : '2px double grey'});
        $('#login,#pass, #email, #repass').val('');
        $('.validation').text('');
        $('#sI_button').attr('value','Login');
        $('#sIn').fadeOut(700, function(){
        $('#sIn').css('display', 'none');
        $('#sUp').fadeIn(700, function(){
        $('#sUp').css('display', 'inline-block')});

        });
        $('#logo')
        .text('Sign up')
        .fadeOut(400,function() {
            $('#logo')
            .text('Sign in')
            .fadeIn(700,function() {});
        });
        

        $('#email, #repass').
        show().
        animate({
        opacity: 1,
        width: "toggle"
        }, 1000, function () {
        

            $('#singin').animate({
            opacity: 1,
            height: "300px"
            }, 800); 
        });




        
 
});

var fail_email, fail_login, fail_pass , fail_repass = true;

$('.a_field').focus(function() {
$(this).css({'border-color' : 'yellow'});
});

 $('#email').blur(function() {
 	$('.validation').text('');
    $('.a_field').css({'border' : '2px double grey'});
        if($(this).val() !== '') {
             var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
            if(pattern.test($(this).val())){
                $(this).css({'border-color' : 'rgba(173, 255, 47, 0.7)'});
                $('#validemail').text('accepted');
                fail_email = false;  
            } else {
                $(this).css({'border-color' : 'red'});
                $('#validemail').text('Email fail! Please type in your correct email address');
                fail_email = true;
            }
        } else {
            // if empty
            $(this).css({'border-color' : 'red'});
            $('#validemail').text('Oops! You need to type your email here');
            fail_email = true;
        }
    });
 $('#pass').blur(function() {
 	$('.validation').text('');
    $('.a_field').css({'border' : '2px double grey'});
        if($(this).val() !== '') {
             var pattern = /(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z!@#$%^&*]{6,}/g;
            if(pattern.test($(this).val())){
                $(this).css({'border-color' : 'rgba(173, 255, 47, 0.7)'});
                $('#validpass').text('accepted');
                fail_pass = false;
            } else {
                $(this).css({'border-color' : 'red'});
                $('#validpass').text('Usage: incorrect password format');
                fail_pass = true;
            }
        } else {
            // if empty
            $(this).css({'border-color' : 'red'});
            $('#validpass').text('Usage: incorrect password - empty');
            fail_pass = true;
        }
    });

 	$('#repass').blur(function() {
 		$('.validation').text('');
        $('.a_field').css({'border' : '2px double grey'});
        if($(this).val() !== '') {
             
            if($(this).val() == $('#pass').val()){
                $(this).css({'border-color' : 'rgba(173, 255, 47, 0.7)'});
                $('#validrepass').text('accepted');
                fail_repass = false;
            } else {
                $(this).css({'border-color' : 'red'});
                $('#validrepass').text('Usage: incorrect password format');
                fail_repass = true;
            }
        } else {
            // if empty
            $(this).css({'border-color' : 'red'});
            $('#validrepass').text('Please retype your password');
            fail_repass = true;
        }
    });
    $('#login').blur(function() {
 		$('.validation').text('');
        $('.a_field').css({'border' : '2px double grey'});
        if($(this).val() !== '') {
             var pattern = /^[a-zA-Z]{1,20}$/g;
            if(pattern.test($(this).val())){
                $(this).css({'border-color' : 'rgba(173, 255, 47, 0.7)'});
                $('#validlogin').text('accepted');
                fail_login = false;
            } else {
                $(this).css({'border-color' : 'red'});
                $('#validlogin').text('Usage: incorrect login format');
                fail_login = true;
            }
        } else {
            // if empty
            $(this).css({'border-color' : 'red'});
            $('#validlogin').text('Usage: incorrect login - empty');
            fail_login = true;
        }

    });

    var isReadyToSend = false;
    $('#login,#pass,#repass,#email').blur( function() {
        if($('#sI_button').attr('value') == "Login"){
            if(!fail_login && !fail_pass) {
                $('#sI_button').css({'border-color':'rgba(173, 255, 47, 0.7)', 'background-color' : 'rgba(173, 255, 47, 0.05)', 'color' : 'yellow'});
                isReadyToSend = true;
            }
            else {$('#sI_button').css({'border-color':'white','background':'transparent', 'color':'white'}); isReadyToSend = false;}

        } else 
        if($('#sI_button').attr('value') == "Sing me up"){
            if((!fail_login && !fail_pass && !fail_repass && !fail_email)) {
                $('#sI_button').css({'border-color':'rgba(173, 255, 47, 0.7)', 'background-color' : 'rgba(173, 255, 47, 0.05)', 'color' : 'yellow'});
                isReadyToSend = true;
            }
            else {$('#sI_button').css({'border-color':'white','background':'transparent', 'color':'white'}); isReadyToSend = false;}
        }
        
        
    });

    



 
  
});