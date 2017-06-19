<?
	class pdf implements Page{
		function newFile($name){
			return "this is new file with name: " . $name . ".pdf";
		}
	}