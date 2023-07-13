/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
   config.contentsCss = 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;800&display=swap';
   config.contentsCss = 'https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap';
   //config.font_names = config.font_names + 'OPEN SANS/Open Sans;';
   config.filebrowserBrowseUrl = 'vendor/ckeditor/kcfinder/browse.php?opener=ckeditor&type=files';
   config.filebrowserImageBrowseUrl = 'vendor/ckeditor/kcfinder/browse.php?opener=ckeditor&type=images';
   config.filebrowserFlashBrowseUrl = 'vendor/ckeditor/kcfinder/browse.php?opener=ckeditor&type=flash';
   config.filebrowserUploadUrl = 'vendor/ckeditor/kcfinder/upload.php?opener=ckeditor&type=files';
   config.filebrowserImageUploadUrl = 'vendor/ckeditor/kcfinder/upload.php?opener=ckeditor&type=images';
   config.filebrowserFlashUploadUrl = 'vendor/ckeditor/kcfinder/upload.php?opener=ckeditor&type=flash';
   
};
