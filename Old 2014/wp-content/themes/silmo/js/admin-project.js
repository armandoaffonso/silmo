$(document).ready(function(){
	var setTemplateFields = function()
	{
		var tpl = $('#acf-field-template').val();
		
		if(tpl == 'mosaic')
		{
			$('#acf_17').show();
			$('#acf_18').hide();
		}//if mosaic
		else
		{
			$('#acf_17').hide();
			$('#acf_18').show();
			
			console.log(tpl);
			
			if(tpl == 'text')
			{
				$('#acf_18').find('h3').children('span').html('Texto');
				
				$('#acf-text').show();
				$('#acf-bg').show();
				$('#acf-video').hide();
			}//if text
			else if(tpl == 'text-video')
			{
				$('#acf_18').find('h3').children('span').html('Texto & Vídeo');
				
				$('#acf-text').show();
				$('#acf-bg').show();
				$('#acf-video').show();				
			}//else if text-video
			else
			{
				$('#acf_18').find('h3').children('span').html('Video FS');
				
				$('#acf-text').hide();
				$('#acf-bg').show();
				$('#acf-video').show();				
			}//else video
		}//else
	};//setTemplateFields
	
	$('#acf-field-template').change(setTemplateFields);
	
	setTemplateFields();
});