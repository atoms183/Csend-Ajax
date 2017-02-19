				<div class="header_phone">
					<a href="tel:+74952879530" class="header_tel">+7 495 287-95-30</a>
				<a href="#?w=525" rel="popup_contacthead" class="button poplight"><button class="header_phone-call">Заказать консультацию</button></a>
					      ﻿      <div id="popup_contacthead" class="popup_block">
	  
			<div id="results" class="newform-infoblock_form" >
				<form method="POST" id="formx" action="javascript:void(null);" onsubmit="call()">
				<a href="#" title="Закрыть" class="close">  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>    </a>
					<span class="newform-form-title">Заявка</span>
					
					<div class="newform-two-input">
					<div class="newform-two-input_item" style="width:50%;">
					 <label><i>Имя:</i></label>
					 <input type="text"  name="NAME" required="required">
					</div>
				    <div class="newform-two-input_item newform-two-input_item-two"  style="width:50%;">
				     <label><i>Телефон:</i></label>
					 <input type="tel" placeholder="7 XXX XXX-XX-XX"  name="PHONE" pattern="(\+?\d[- .]*){7,13}" required="required">
					</div>						
					</div>
					<div class="newform-textarea">
				     <label><i>Комментарий</i></label>
				     <textarea type ="text" name="COMMENT" required="required"></textarea>
					</div>
					<div class="newfrom-submit">
				     <input type="submit" name="submittwo">
				<!--	<input type="hidden" name="formData" value="Заявка с сайта">-->
					</div>
				</form>
			</div>
			

			</div> 
	
		<script type="text/javascript" language="javascript">
 	function call() {
 	  var msg   = $('#formx').serialize();
        $.ajax({
          type: 'POST',
          url: '/bitrix/sendmessage.php',
          data: msg,
          success: function(data) {
            $('#results').html(data);
          },
          error:  function(xhr, str){
	    alert('Возникла ошибка1: ' + xhr.responseCode);
          }
        });
 
    }
</script>