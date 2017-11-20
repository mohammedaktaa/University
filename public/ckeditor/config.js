/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here.
	// For complete reference see:
	// http://docs.ckeditor.com/#!/api/CKEDITOR.config

	// The toolbar groups arrangement, optimized for two toolbar rows.

	// Remove some buttons provided by the standard plugins, which are
	// not needed in the Standard(s) toolbar.
	config.removeButtons = 'Underline,Subscript,Superscript';

	// Set the most common block elements.
	config.format_tags = 'p;h1;h2;h3;h4;h5;h6;pre;div';

	// Simplify the dialog windows.
	config.removeDialogTabs = 'image:advanced;link:advanced';
	//config.filebrowserBrowseUrl=  baseUrl+'upload-image';
	//config.filebrowserUploadUrl=  baseUrl+'upload-image';
	config.uploadUrl = baseUrl+'upload-image';

	config.forcePasteAsPlainText = false;
	config.pasteFromWordRemoveFontStyles = false;
	config.pasteFromWordRemoveStyles = false;
	config.allowedContent = true;
	config.extraAllowedContent = 'p(mso*,Normal)';
	config.pasteFilter = null;

	config.extraPlugins = 'embedbase,undo,autolink,codemirror,embed,autoembed';

};
