<?php
/**
* RSGallery2 Toolbar Menu
* @version $Id$
* @package RSGallery2
* @copyright (C) 2003 - 2006 RSGallery2
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
**/

// ensure this file is being included by a parent file
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

// RSG2 is a metacomponent.  joomla calls components options, RSG2 calls it's components rsgOptions
if( isset( $_REQUEST['rsgOption'] ))
    $rsgOption = $_REQUEST['rsgOption'];
else
    $rsgOption = '';

require_once( $mainframe->getPath( 'toolbar_html' ) );
require_once( $mainframe->getPath( 'toolbar_default' ) );

switch( $rsgOption ){
	case 'images':
		switch ( $task ) {
			case 'new':
            case 'edit':
            case 'editA':
                menu_rsg2_images::edit( $option );
            break;
            case 'remove':
                menu_rsg2_images::remove( $option );
            break;
            case 'upload':
            	menu_rsg2_images::upload( $option );
            	break;
            default:
                menu_rsg2_images::show( $option );
            break;
		}
	break;
    case 'galleries':
        switch( $task ){
            case 'new':
            case 'edit':
            case 'editA':
                menu_rsg2_galleries::edit( $option );
            break;
            case 'remove':
                menu_rsg2_galleries::remove( $option );
            break;
            default:
                menu_rsg2_galleries::show( $option );
            break;
        }
    break;
}

// only use the legacy task switch if rsgOption is not used.
if( $rsgOption == '' )
switch ($task){
    case "new":
        menuRSGallery::image_new();
        break;

    case "edit_image":
        menuRSGallery::image_edit();
        break;
            
    case "upload":
        menuRSGallery::image_upload();
        break;

    case "delete_image":
    case "move_image":
    case "save_image":
    case "save_batchupload":
    case "view_images":
    case "images_orderup":
    case "images_orderdown":
        menuRSGallery::images_show();
        break;

    case "batchupload":
        menuRSGallery::image_batchUpload();
        break;

    case 'applyConfig':
    case "showConfig":
        menuRSGallery::config_show();
        break;

    case 'config_rawEdit_apply':
    case 'config_rawEdit':
        menuRSGallery::config_rawEdit();
        break;

    case 'edit_css':
        menuRSGallery::edit_css();
        break;

// this is where you should add more toolbars:


// do these need a toolbar?:
    case 'regen_thumbs':
    case "import_captions":
    case "consolidate_db_go":
    case "consolidate_db":
    case "install":
        break;

// the following options either bring you to the control panel or only need a help button
    default:
    case "controlPanel":
    case 'config_rawEdit_save':
    case "migration":
    case 'purgeEverything':
    case 'saveConfig':
    case 'viewChangelog':
        menuRSGallery::simple();
        break;
}
?>