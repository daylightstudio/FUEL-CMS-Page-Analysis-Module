<div id="fuel_main_content_inner">
	<p class="instructions"><?=lang('page_analysis_instructions')?></p>
	<?=site_url()?><?=$this->form->select('page', $pages_select, $this->input->post('page'))?> &nbsp;
	<?=$this->form->submit(lang('btn_analyze'), 'submit_page_analysis')?>
	<br />
	<br />
	<br />
	<div class="clear"></div>
	
	<?=$report?>

	
</div>