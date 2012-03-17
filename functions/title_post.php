<?php 

	// Creates links to posts from titles and prints HTML post
	
	function title_post($filepaths,$i) { 
		$single_post = preg_replace('#posts/[0-9-]*_([0-9a-z-]*)\.md#', '$1', $filepaths[$i]);
		$md_content = file_get_contents($filepaths[$i]);
		$html_content = (Markdown($md_content));
		$html_content = str_replace('<h1>', '<h1><a href="'.$single_post.'">', $html_content);
		$html_content = str_replace('</h1>', '</a></h1>', $html_content);
		
		echo($html_content);	
	}

?>