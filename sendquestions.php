<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
?>


<?if ($send !== 'false')
    {
    echo '<div class="newform-infoblock_form" style="height:100px;" >
	<form id="form1" action="" method="">
				<a href="#" title="Закрыть" class="close">  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>    </a>
				<div class="text1234" style="text-align:center;">
				<h1 style="margin: 0 auto;">Спасибо.<br>Ваша заявка отправлена.</h1>
				 <p style="font-size:15px;font-family:Exo2;font-weight: bold;">Мы свяжемся с вами в ближайшее время.</p> 
				</div>
				</form></div>';
				
				$arMail = Array(
			"namequest" => $_POST['namequest'],
			"phonequest" => $_POST['telefon'],
);
CEvent::Send("NEW_QUESTION_REVIEW", "s1", $arMail, "Y", 31);
    }
    else 
    {
    echo
	'<div class="newform-infoblock_form" style="height:290px;" >
	<form id="form1" action="" method="">
				<a href="#" title="Закрыть" class="close">  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>    </a>
				<span class="newform-form-title">Заявка</span>
				<center><h1>Произошла ошибка,повторите отправку позже.</h1></center>
			
				</form></div>';
			

    }
 
 ?> 
