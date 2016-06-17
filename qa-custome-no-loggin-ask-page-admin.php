<?php

class qa_custome_no_loggin_ask_page_admin
{
	public function allow_template($template)
	{
		return $template != 'admin';
	}

	public function option_default($option)
	{
		switch ($option) {
			case 'qa_custome_no_loggin_ask_page_html':
				return '<h1>Please Log in.</h1>';
			default:
				return;
		}
	}

	public function admin_form(&$qa_content)
	{
		// process the admin form if admin hit Save-Changes-button
		$ok = null;
		if (qa_clicked('qa_custome_no_loggin_ask_page_save')) {
			qa_opt('qa_custome_no_loggin_ask_page_html', qa_post_text('qa_custome_no_loggin_ask_page_html'));
			$ok = qa_lang('admin/options_saved');
		}

		// form fields to display frontend for admin
		$fields = array();

		$fields[] = array(
			'label' => 'CUSTOM HTML',
			'tags' => 'NAME="qa_custome_no_loggin_ask_page_html"',
			'value' => qa_opt('qa_custome_no_loggin_ask_page_html'),
			'type' => 'textarea',
			'rows' => 20
		);

		return array(
			'ok' => ($ok && !isset($error)) ? $ok : null,
			'fields' => $fields,
			'buttons' => array(
				array(
					'label' => qa_lang_html('main/save_button'),
					'tags' => 'name="qa_custome_no_loggin_ask_page_save"',
				),
			),
		);
	}
}
