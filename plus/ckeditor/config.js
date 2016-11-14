/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */


CKEDITOR.editorConfig = function( config ) {

	config.extraPlugins = 'lineheight';//行距
	config.uiColor = '#DDEEFB';
	
	// The toolbar groups arrangement, optimized for two toolbar rows.
	config.toolbarGroups = [
		{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'undo'},
		//{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
		{ name: 'links' },
		{ name: 'insert' },
		//{ name: 'forms' },
		//{ name: 'tools' },

		{ name: 'others' },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
		{ name: 'styles', groups: [  'Styles','Format','Font','FontSize','lineheight' ] },
		{ name: 'colors' },
		{ name: 'about' }
	];

	// Remove some buttons provided by the standard plugins, which are
	// not needed in the Standard(s) toolbar.
	config.removeButtons = 'Unlink,Anchor,PageBreak,Flash,SpecialChar,Iframe,Save,NewPage,Preview,Print,Templates,Underline,JustifyBlock,BidiLtr,BidiRtl,Subscript,Superscript,Blockquote,CreateDiv,Language,Styles,Format,About';

	// Set the most common block elements.
	config.format_tags = 'p;h1;h2;h3;pre';

	// Simplify the dialog windows.
	config.removeDialogTabs = 'image:advanced;link:advanced';


	config.filebrowserUploadUrl="uploads";

	var pathName = window.document.location.pathname;
    //获取带"/"的项目名，如：/uimcardprj
    var projectName = pathName.substring(0, pathName.substr(1).indexOf('/') + 1);
    config.filebrowserImageUploadUrl = projectName+'/system/imgUpload.php'; //固定路径


// ['Source','-','Format','Styles','Font','FontSize'],
// ['Outdent','Indent','Blockquote'],
// ['Save','NewPage','-','Print'],
// '/',
// ['RemoveFormat','Undo','Redo','-','Bold','Italic','Underline','Strike'],
// ['Subscript','Superscript','NumberedList','BulletedList'],
// ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
// ['PageBreak','Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','-','wpMore'],
// '/',
// ['PasteText','Paste','PasteFromWord','Copy','Cut'],
// ['TextColor','BGColor'],
// ['Link','Unlink','Anchor'],
// ['Find','Replace','SpellChecker', 'Scayt'],
// ['Templates','Preview'],
// ['ShowBlocks','Maximize','-','About']

};
