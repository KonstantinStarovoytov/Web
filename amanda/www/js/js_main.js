
$( document ).ready( function(){
        // $('#publish').click(function () {
        //  var iPhName = $('#iPhName').val();
        //  var discr = $('#discr').val();
        // $.ajax({
        //     url: '/functions/upload.php',
        //     type: 'POST',
        //     chache: false,
        //     data: {'iPhName' : iPhName, 'discr' : discr},
        //     dataType: 'html',
        //     success: function(data){
        //       alert(data);
        //     }
    //     // });

    // });
        var path;
       $("#inputFile").change(function() {
        
        $("#imageform").ajaxForm({
            target: '#leftSide', 
            beforeSubmit:function() {
                $('#waitingImgUpl').css('display', 'block');
            }, 
            success:function(data){
               var tempImgPath = data;
               var end = tempImgPath.indexOf(" class");
               path = tempImgPath.substring(10,end-1);
               $('#waitingImgUpl').css('display', 'none');
            }, 
            error:function(){
                alert('error')
            } 
        }).submit();
    });
    
    $('#publish').click(function () {
        var iPhName = 'no name';
        var discr = 'no description';
        if($('#iPhName').val())
        iPhName = $('#iPhName').val();
        if($('#discr').val())
        discr = $('#discr').val();
        
       $.ajax({
            url: '/functions/upload_db.php',
            type: 'POST',
            chache: false,
            data: {'iPhName' : iPhName, 'discr' : discr, 'path' : path},
            dataType: 'html',
          success: function(data){
               
                 alert(data);
                 
          }
        }); 
    });
    
	
	var num = 0;
    $(window).scroll( function (){
    	var windowScroll = $(window).scrollTop();
    	var windowHeight = $(window).height();
    	var documentHeight = $(document).height();
    	console.log(Math.ceil(windowScroll) + " " + windowHeight + " " + documentHeight)
    	 if((Math.ceil(windowScroll) + windowHeight) == documentHeight) {
    	 	
    	 	$.ajax({
         	url: "/functions/scrollImg.php",
          	type: "GET",
         	data: {'num': num},
         	beforeSend: function() {
         		$('#waiting').css('display', 'block');
         		
         	},        	 
          	cache: false,
          	success: function(response){
          		$('#waiting').css('display', 'none');
              if(response == 0){  // смотрим ответ от сервера и выполняем соответствующее действие
                 alert("huinya");
                 
              }else{
                 $('#ulmain').append(response);
                 num = num + 8;
                 
              }
           }
        });


    	 } 
    });
 
	
// вся мaгия пoсле зaгрузки стрaницы
	var index = 1;
	var tag;
	var tagN;
	var close_tagN;
	$('#s_TxTagAdder').click( function (){
		tag = $('#i_TxTagAdder').val();
		tagN = '#tagN' + index;
		close_tagN = "#close_tagN" + index;
		$('<div class="tags" id="tagN' + index + '"></div>').appendTo('#tagWind');
		$(tagN).text(tag );
		$(tagN).append('<span class="close_tag" id="close_tagN' + index + '">X</span>');
		
		index++;
		
	});
		$('.close_tag').click( function(){
		
		$(this).parent().remove();
	
		});
	$('a#go').click( function(event){ // лoвим клик пo ссылки с id="go"
		event.preventDefault(); // выключaем стaндaртную рoль элементa
		$('#overlay').fadeIn(400, // снaчaлa плaвнo пoкaзывaем темную пoдлoжку
		 	function(){ // пoсле выпoлнения предъидущей aнимaции
				$('#modal_form') 
					.css('display', 'block') // убирaем у мoдaльнoгo oкнa display: none;
					.animate({opacity: 1, top: '50%'}, 200); // плaвнo прибaвляем прoзрaчнoсть oднoвременнo сo съезжaнием вниз
		});
	});
	/* Зaкрытие мoдaльнoгo oкнa, тут делaем тo же сaмoе нo в oбрaтнoм пoрядке */
	$('#modal_close, #overlay').click( function(){ // лoвим клик пo крестику или пoдлoжке
		$('#modal_form')
			.animate({opacity: 0, top: '45%'}, 200,  // плaвнo меняем прoзрaчнoсть нa 0 и oднoвременнo двигaем oкнo вверх
				function(){ // пoсле aнимaции
					$(this).css('display', 'none'); // делaем ему display: none;
					$('#overlay').fadeOut(400); // скрывaем пoдлoжку
				}
			);
	});


	// $('#upload').click(function() {
		
	// 	$('#locker').show().animate({"opacity": 0.3},300);
	// 	//$('#locker').attr('display','none');
		
	// 	$('#container').attr('display','none');
	// 	//$('#Dialog').showModal().animate({"opacity": 1}, 300);
		
		
	// });
	// $('#closeDialog').click(function() {
	// 	$('#locker').show().animate({"opacity": 0},300);
	// 	$('#container').removeAttr('hidden')
		
		

	// });
	
	
	
	$('.blink')
		.focus(function(){
			if( $(this).attr('value') == $(this).attr('title') ) {
				$(this).attr({ 'value': '' });
			}
		})
		.blur(function(){
			if( $(this).attr('value') == '' || typeof($(this).attr('value')) == 'undefined') {
				$(this).attr({ 'value': $(this).attr('title') })
			}
		});
		

	
	
});
