//*SCRIPT INFO
//
// Script: CSS Url Argument
// Desc: Adds custom css file to header if specific url argument is present.
// Version: 1.1
// Author: cema, kingguy3000@gmail.com
// Created: 04-09-2018 (D,M,Y)
// Updated: 07-09-2018 (D,M,Y)
//
//*SCRIPT INFO

// Config Variables

// Script:

//*getParam
//Looks for Argument and returns Parameter.
function cssusp_getParameterByArgument(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
    var results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

//*Variables
//Sets variable(s) theme by its Argumented parameter in the given url.
var cssusp_theme = cssusp_getParameterByArgument('theme');
//Sets the Domain url for locating css later.
var cssusp_plugin_url = document.getElementById( "cssusp" ).getAttribute( "data-cssusp_var" );
	
//*Debug (shows variables)
//alert( cssusp_theme ); //debug feature!
//alert( cssusp_plugin_url ); //debug feature!


//*MainFunction
//Add Css in Header
if (cssusp_theme) {
	var link = document.createElement('link');
	link.rel = 'stylesheet';
	link.id = 'CSSUSP_Url_Css';
    link.href = cssusp_plugin_url + 'custom_css/' + cssusp_theme + '.css';    
    document.getElementsByTagName("head")[0].appendChild(link);
}