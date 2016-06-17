<?php

class qa_html_theme_layer extends qa_html_theme_base
{

	public function __construct($template, $content, $rooturl, $request)
	{
		if(!qa_is_logged_in() && $template=='ask')
		{
			$html = "<h1>Please log in.</h1>";
			$content["custom"] = $html;
		}
		qa_html_theme_base::__construct($template, $content, $rooturl, $request);
	}

}
