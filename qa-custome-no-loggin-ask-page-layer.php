<?php

class qa_html_theme_layer extends qa_html_theme_base
{

	public function __construct($template, $content, $rooturl, $request)
	{
		if(!qa_is_logged_in() && $template=='ask')
		{
			$html = qa_opt("qa_custome_no_loggin_ask_page_html");
			$content["custom"] = $html;
		}
		qa_html_theme_base::__construct($template, $content, $rooturl, $request);
	}

}
