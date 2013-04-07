<?php 

class SEOSiteTree extends DataExtension{
	
	static $db = array(
		"MetaTitle" => "Varchar(255)"	
	);
	
	function updateCMSFields(FieldList $fields){
		$maintab = $fields->fieldByName("Root.Main");
		$md = $maintab->getChildren()->fieldByName("Metadata");
		$md->insertBefore(new TextField("MetaTitle","Meta Title"),"MetaDescription");
	}
	
}