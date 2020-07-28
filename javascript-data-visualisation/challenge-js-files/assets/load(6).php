﻿/**
 * This script provides a function which is run to evaluate whether or not to
 * continue loading the jquery and mediawiki modules. This code should work on
 * even the most ancient of browsers, so be very careful when editing.
 */

/**
 * Returns false when run in a black-listed browser
 *
 * This function will be deleted after it's used, so do not expand it to be
 * generally useful beyond startup.
 *
 * See also:
 * - https://www.mediawiki.org/wiki/Compatibility#Browser
 * - http://jquerymobile.com/gbs/
 * - http://jquery.com/browser-support/
 */

/*jshint unused: false */
function isCompatible( ua ) {
	if ( ua === undefined ) {
		ua = navigator.userAgent;
	}

	// MediaWiki JS or jQuery is known to have issues with:
	return !(
		// Internet Explorer < 6
		( ua.indexOf( 'MSIE' ) !== -1 && parseFloat( ua.split( 'MSIE' )[1] ) < 6 ) ||
		// Firefox < 3
		( ua.indexOf( 'Firefox/' ) !== -1 && parseFloat( ua.split( 'Firefox/' )[1] ) < 3 ) ||
		// BlackBerry < 6
		ua.match( /BlackBerry[^\/]*\/[1-5]\./ ) ||
		// Open WebOS < 1.5
		ua.match( /webOS\/1\.[0-4]/ ) ||
		// Anything PlayStation based.
		ua.match( /PlayStation/i ) ||
		// Any Symbian based browsers
		ua.match( /SymbianOS|Series60/ ) ||
		// Any NetFront based browser
		ua.match( /NetFront/ ) ||
		// Opera Mini, all versions
		ua.match( /Opera Mini/ ) ||
		// Nokia's Ovi Browser
		ua.match( /S40OviBrowser/ )
	);
}

/**
 * The startUp() function will be auto-generated and added below.
 */
var startUp = function() {
	mw.config = new mw.Map(true);
	mw.loader.addSource({"local":{"loadScript":"/eurostat/statistics-explained/load.php","apiScript":"/eurostat/statistics-explained/api.php"}});mw.loader.register([["site","1523006489",[],"site"],["noscript","1523006489",[],"noscript"],["startup","1529582796",[],"startup"],["filepage","1523006489"],["user.groups","1523006489",[],"user"],["user","1523006489",[],"user"],["user.cssprefs","1523006489",["mediawiki.user"],"private"],["user.options","1523006489",[],"private"],["user.tokens","1523006489",[],"private"],["mediawiki.language.data","1529582796",["mediawiki.language.init"]],["skins.cologneblue","1523006489"],["skins.modern","1523006489"],["skins.monobook","1523006489"],["skins.vector","1523006489"],["skins.vector.beta","1523006489"],["skins.vector.js","1523006489",["jquery.delayedBind"]],["skins.vector.collapsibleNav","1523006489",["jquery.client","jquery.cookie","jquery.tabIndex"]],["jquery","1523006489"],["jquery.appear","1523006489"],["jquery.arrowSteps","1523006489"],["jquery.async","1523006489"],["jquery.autoEllipsis","1523006489",["jquery.highlightText"]],["jquery.badge","1523006489",["mediawiki.language"]],["jquery.byteLength","1523006489"],["jquery.byteLimit","1523006489",["jquery.byteLength"]],["jquery.checkboxShiftClick","1523006489"],["jquery.chosen","1523006489"],["jquery.client","1523006489"],["jquery.color","1523006489",["jquery.colorUtil"]],["jquery.colorUtil","1523006489"],["jquery.cookie","1523006489"],["jquery.delayedBind","1523006489"],["jquery.expandableField","1523006489",["jquery.delayedBind"]],["jquery.farbtastic","1523006489",["jquery.colorUtil"]],["jquery.footHovzer","1523006489"],["jquery.form","1523006489"],["jquery.getAttrs","1523006489"],["jquery.hidpi","1523006489"],["jquery.highlightText","1523006489",["jquery.mwExtension"]],["jquery.hoverIntent","1523006489"],["jquery.json","1523006489"],["jquery.localize","1523006489"],["jquery.makeCollapsible","1528342745"],["jquery.mockjax","1523006489"],["jquery.mw-jump","1523006489"],["jquery.mwExtension","1523006489"],["jquery.placeholder","1523006489"],["jquery.qunit","1523006489"],["jquery.qunit.completenessTest","1523006489",["jquery.qunit"]],["jquery.spinner","1523006489"],["jquery.jStorage","1523006489",["jquery.json"]],["jquery.suggestions","1523006489",["jquery.autoEllipsis"]],["jquery.tabIndex","1523006489"],["jquery.tablesorter","1523006489",["jquery.mwExtension","mediawiki.language.months"]],["jquery.textSelection","1523006489",["jquery.client"]],["jquery.validate","1523006489"],["jquery.xmldom","1523006489"],["jquery.tipsy","1523006489"],["jquery.ui.core","1523006489",["jquery"],"jquery.ui"],["jquery.ui.widget","1523006489",[],"jquery.ui"],["jquery.ui.mouse","1523006489",["jquery.ui.widget"],"jquery.ui"],["jquery.ui.position","1523006489",[],"jquery.ui"],["jquery.ui.draggable","1523006489",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.droppable","1523006489",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget","jquery.ui.draggable"],"jquery.ui"],["jquery.ui.resizable","1523006489",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.selectable","1523006489",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.sortable","1523006489",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.accordion","1523006489",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.autocomplete","1523006489",["jquery.ui.core","jquery.ui.widget","jquery.ui.position"],"jquery.ui"],["jquery.ui.button","1523006489",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.datepicker","1523006489",["jquery.ui.core"],"jquery.ui"],["jquery.ui.dialog","1523006489",["jquery.ui.core","jquery.ui.widget","jquery.ui.button","jquery.ui.draggable","jquery.ui.mouse","jquery.ui.position","jquery.ui.resizable"],"jquery.ui"],["jquery.ui.progressbar","1523006489",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.slider","1523006489",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.tabs","1523006489",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.effects.core","1523006489",["jquery"],"jquery.ui"],["jquery.effects.blind","1523006489",["jquery.effects.core"],"jquery.ui"],["jquery.effects.bounce","1523006489",["jquery.effects.core"],"jquery.ui"],["jquery.effects.clip","1523006489",["jquery.effects.core"],"jquery.ui"],["jquery.effects.drop","1523006489",["jquery.effects.core"],"jquery.ui"],["jquery.effects.explode","1523006489",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fade","1523006489",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fold","1523006489",["jquery.effects.core"],"jquery.ui"],["jquery.effects.highlight","1523006489",["jquery.effects.core"],"jquery.ui"],["jquery.effects.pulsate","1523006489",["jquery.effects.core"],"jquery.ui"],["jquery.effects.scale","1523006489",["jquery.effects.core"],"jquery.ui"],["jquery.effects.shake","1523006489",["jquery.effects.core"],"jquery.ui"],["jquery.effects.slide","1523006489",["jquery.effects.core"],"jquery.ui"],["jquery.effects.transfer","1523006489",["jquery.effects.core"],"jquery.ui"],["mediawiki","1523006489"],["mediawiki.api","1523006489",["mediawiki.util"]],["mediawiki.api.category","1523006489",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.edit","1523006489",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.login","1523006489",["mediawiki.api"]],["mediawiki.api.parse","1523006489",["mediawiki.api"]],["mediawiki.api.watch","1523006489",["mediawiki.api","user.tokens"]],["mediawiki.icon","1523006489"],["mediawiki.debug","1523006489",["jquery.footHovzer"]],["mediawiki.debug.init","1523006489",["mediawiki.debug"]],["mediawiki.inspect","1523006489",["jquery.byteLength","jquery.json"]],["mediawiki.feedback","1523006489",["mediawiki.api.edit","mediawiki.Title","mediawiki.jqueryMsg","jquery.ui.dialog"]],["mediawiki.hidpi","1523006489",["jquery.hidpi"]],["mediawiki.htmlform","1528980384"],["mediawiki.notification","1523006489",["mediawiki.page.startup"]],["mediawiki.notify","1523006489"],["mediawiki.searchSuggest","1528342745",["jquery.autoEllipsis","jquery.client","jquery.placeholder","jquery.suggestions","mediawiki.api"]],["mediawiki.Title","1523006489",["jquery.byteLength","mediawiki.util"]],["mediawiki.Uri","1523006489"],["mediawiki.user","1523006489",["jquery.cookie","mediawiki.api","user.options","user.tokens"]],["mediawiki.util","1528342744",["jquery.client","jquery.cookie","jquery.mwExtension","mediawiki.notify"]],["mediawiki.action.edit","1523006489",["mediawiki.action.edit.styles","jquery.textSelection","jquery.byteLimit"]],["mediawiki.action.edit.styles","1523006489"],["mediawiki.action.edit.collapsibleFooter","1523006489",["jquery.makeCollapsible","mediawiki.icon"]],["mediawiki.action.edit.preview","1523006489",["jquery.form","jquery.spinner","mediawiki.action.history.diff"]],["mediawiki.action.history","1523006489",[],"mediawiki.action.history"],["mediawiki.action.history.diff","1523006489",[],"mediawiki.action.history"],["mediawiki.action.view.dblClickEdit","1523006489",["mediawiki.util","mediawiki.page.startup"]],["mediawiki.action.view.metadata","1523006489"],["mediawiki.action.view.postEdit","1528342745",["jquery.cookie","mediawiki.jqueryMsg"]],["mediawiki.action.view.rightClickEdit","1523006489"],["mediawiki.action.edit.editWarning","1523006489"],["mediawiki.action.watch.ajax","1523006489",["mediawiki.page.watch.ajax"]],["mediawiki.language","1523006489",["mediawiki.language.data","mediawiki.cldr"]],["mediawiki.cldr","1523006489",["mediawiki.libs.pluralruleparser"]],["mediawiki.libs.pluralruleparser","1523006489"],["mediawiki.language.init","1523006489"],["mediawiki.jqueryMsg","1523006489",["mediawiki.util","mediawiki.language"]],["mediawiki.language.months","1523006489",["mediawiki.language"]],["mediawiki.libs.jpegmeta","1523006489"],["mediawiki.page.gallery","1523006489"],["mediawiki.page.ready","1523006489",["jquery.checkboxShiftClick","jquery.makeCollapsible","jquery.placeholder","jquery.mw-jump","mediawiki.util"]],["mediawiki.page.startup","1523006489",["jquery.client","mediawiki.util"]],["mediawiki.page.patrol.ajax","1523006489",["mediawiki.page.startup","mediawiki.api","mediawiki.util","mediawiki.Title","mediawiki.notify","jquery.spinner","user.tokens"]],["mediawiki.page.watch.ajax","1523006489",["mediawiki.page.startup","mediawiki.api.watch","mediawiki.util","mediawiki.notify","jquery.mwExtension"]],["mediawiki.page.image.pagination","1523006489",["jquery.spinner"]],["mediawiki.special","1523006489"],["mediawiki.special.block","1523006489",["mediawiki.util"]],["mediawiki.special.changeemail","1528742674",["mediawiki.util"]],["mediawiki.special.changeslist","1523006489"],["mediawiki.special.changeslist.enhanced","1523006489"],["mediawiki.special.movePage","1523006489",["jquery.byteLimit"]],["mediawiki.special.pagesWithProp","1523006489"],["mediawiki.special.preferences","1523006489"],["mediawiki.special.recentchanges","1523006489",["mediawiki.special"]],["mediawiki.special.search","1528406854"],["mediawiki.special.undelete","1523006489"],["mediawiki.special.upload","1523006489",["mediawiki.libs.jpegmeta","mediawiki.util"]],["mediawiki.special.userlogin","1523006489"],["mediawiki.special.createaccount","1523006489"],["mediawiki.special.createaccount.js","1523006489",["mediawiki.jqueryMsg"]],["mediawiki.special.javaScriptTest","1523006489",["jquery.qunit"]],["mediawiki.tests.qunit.testrunner","1523006489",["jquery.getAttrs","jquery.qunit","jquery.qunit.completenessTest","mediawiki.page.startup","mediawiki.page.ready"]],["mediawiki.legacy.ajax","1523006489",["mediawiki.util","mediawiki.legacy.wikibits"]],["mediawiki.legacy.commonPrint","1523006489"],["mediawiki.legacy.config","1523006489",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.protect","1523006489",["jquery.byteLimit"]],["mediawiki.legacy.shared","1523006489"],["mediawiki.legacy.oldshared","1523006489"],["mediawiki.legacy.upload","1523006489",["jquery.spinner","mediawiki.api","mediawiki.Title","mediawiki.util"]],["mediawiki.legacy.wikibits","1523006489",["mediawiki.util"]],["mediawiki.ui","1523006489"],["ext.StatexpContentFormater","1529571496"],["skins.statexpflat","1523006489",["jquery"]],["ext.categoryTree","1528491545"],["ext.categoryTree.css","1523006489"],["ext.cite","1528342745"],["ext.cite.popups","1523006489",["jquery.tooltip"]],["jquery.tooltip","1523006489"],["ext.rtlcite","1523006489"],["ext.StatexpBPM","1523532977"],["ext.EurostatTranslate","1523006489"],["ext.StatexpCollectionProcess","1523006489"],["ext.StatexpCollection","1523006489",["jquery","jquery.ui.core","jquery.ui.sortable"]],["ext.EurostatMainPageManagementArticlesLogs","1523006489",["jquery.json"]],["ext.EurostatMainPageManagement","1523006489",["jquery.json","jquery.ui.tabs","jquery.ui.selectable","jquery.ui.dialog","jquery.ui.datepicker"]],["ext.EurostatMainPageManagementMainPage","1523006489"],["ext.StatexpPiwikSpecial","1523006489",["jquery.json","jquery.ui.dialog","jquery.ui.datepicker"]],["ext.EurostatCategorySearch","1523006489",["jquery.ui.autocomplete"]],["contentCollector","1523006489",[],"ext.wikiEditor"],["jquery.wikiEditor","1523006489",["jquery.client","jquery.textSelection","jquery.delayedBind"],"ext.wikiEditor"],["jquery.wikiEditor.iframe","1523006489",["jquery.wikiEditor","contentCollector"],"ext.wikiEditor"],["jquery.wikiEditor.dialogs","1523006489",["jquery.wikiEditor","jquery.wikiEditor.toolbar","jquery.ui.dialog","jquery.ui.button","jquery.ui.draggable","jquery.ui.resizable","jquery.tabIndex"],"ext.wikiEditor"],["jquery.wikiEditor.dialogs.config","1523006489",["jquery.wikiEditor","jquery.wikiEditor.dialogs","jquery.wikiEditor.toolbar.i18n","jquery.suggestions","mediawiki.Title","mediawiki.jqueryMsg"],"ext.wikiEditor"],["jquery.wikiEditor.highlight","1523006489",["jquery.wikiEditor","jquery.wikiEditor.iframe"],"ext.wikiEditor"],["jquery.wikiEditor.preview","1523006489",["jquery.wikiEditor"],"ext.wikiEditor"],["jquery.wikiEditor.previewDialog","1523006489",["jquery.wikiEditor","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.publish","1523006489",["jquery.wikiEditor","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.templateEditor","1523006489",["jquery.wikiEditor","jquery.wikiEditor.iframe","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.templates","1523006489",["jquery.wikiEditor","jquery.wikiEditor.iframe"],"ext.wikiEditor"],["jquery.wikiEditor.toc","1523006489",["jquery.wikiEditor","jquery.wikiEditor.iframe","jquery.ui.draggable","jquery.ui.resizable","jquery.autoEllipsis","jquery.color"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar","1523006489",["jquery.wikiEditor","jquery.wikiEditor.toolbar.i18n"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.config","1523006489",["jquery.wikiEditor","jquery.wikiEditor.toolbar.i18n","jquery.wikiEditor.toolbar","jquery.cookie","jquery.async"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.i18n","1523006489",[],"ext.wikiEditor"],["ext.wikiEditor","1523006489",["jquery.wikiEditor"],"ext.wikiEditor"],["ext.wikiEditor.dialogs","1523006489",["ext.wikiEditor","ext.wikiEditor.toolbar","jquery.wikiEditor.dialogs","jquery.wikiEditor.dialogs.config"],"ext.wikiEditor"],["ext.wikiEditor.highlight","1523006489",["ext.wikiEditor","jquery.wikiEditor.highlight"],"ext.wikiEditor"],["ext.wikiEditor.preview","1523006489",["ext.wikiEditor","jquery.wikiEditor.preview"],"ext.wikiEditor"],["ext.wikiEditor.previewDialog","1523006489",["ext.wikiEditor","jquery.wikiEditor.previewDialog"],"ext.wikiEditor"],["ext.wikiEditor.publish","1523006489",["ext.wikiEditor","jquery.wikiEditor.publish"],"ext.wikiEditor"],["ext.wikiEditor.templateEditor","1523006489",["ext.wikiEditor","ext.wikiEditor.highlight","jquery.wikiEditor.templateEditor"],"ext.wikiEditor"],["ext.wikiEditor.templates","1523006489",["ext.wikiEditor","ext.wikiEditor.highlight","jquery.wikiEditor.templates"],"ext.wikiEditor"],["ext.wikiEditor.toc","1523006489",["ext.wikiEditor","ext.wikiEditor.highlight","jquery.wikiEditor.toc"],"ext.wikiEditor"],["ext.wikiEditor.tests.toolbar","1523006489",["ext.wikiEditor.toolbar"],"ext.wikiEditor"],["ext.wikiEditor.toolbar","1523006489",["ext.wikiEditor","jquery.wikiEditor.toolbar","jquery.wikiEditor.toolbar.config"],"ext.wikiEditor"],["ext.wikiEditor.toolbar.hideSig","1523006489",[],"ext.wikiEditor"],["ext.StatexpEditor","1523006489",["ext.wikiEditor","jquery.wikiEditor.toolbar","jquery.wikiEditor.dialogs","jquery.cookie","jquery.async","jquery.mask"],"ext.StatexpEditor"],["ext.StatexpEditor.clear","1523006489",["ext.StatexpEditor"],"ext.StatexpEditor"],["ext.StatexpEditor.modules","1523006489",["ext.StatexpEditor"],"ext.StatexpEditor"],["jquery.mask","1523006489",[],"ext.StatexpEditor"],["ext.StatexpGlossaryToolTip","1523006489",["jquery.tipsy"]],["ext.math.mathjax","1523006489",[],"ext.math.mathjax"],["ext.math.mathjax.enabler","1523006489"],["ext.addThis","1523006489"],["ext.StatexpAnalytics","1523006489"]]);
	mw.config.set({"wgLoadScript":"/eurostat/statistics-explained/load.php","debug":true,"skin":"statexpflat","stylepath":"http://ec.europa.eu/eurostat/statistics-explained/skins","wgUrlProtocols":"http\\:\\/\\/|https\\:\\/\\/|ftp\\:\\/\\/|ftps\\:\\/\\/|ssh\\:\\/\\/|sftp\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|xmpp\\:|sip\\:|sips\\:|gopher\\:\\/\\/|telnet\\:\\/\\/|nntp\\:\\/\\/|worldwind\\:\\/\\/|mailto\\:|tel\\:|sms\\:|news\\:|svn\\:\\/\\/|git\\:\\/\\/|mms\\:\\/\\/|bitcoin\\:|magnet\\:|urn\\:|geo\\:|\\/\\/","wgArticlePath":"/eurostat/statistics-explained/index.php?title=$1","wgScriptPath":"/eurostat/statistics-explained","wgScriptExtension":".php","wgScript":"/eurostat/statistics-explained/index.php","wgVariantArticlePath":false,"wgActionPaths":{},"wgServer":"http://ec.europa.eu","wgUserLanguage":"fr","wgContentLanguage":"en","wgVersion":"1.22.5","wgEnableAPI":true,"wgEnableWriteAPI":true,"wgMainPageTitle":"Main Page","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"Statistics Explained","5":"Statistics Explained talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":"Help talk","14":"Category","15":"Category talk","100":"Glossary","101":"Glossary talk","104":"Configuration","105":"Configuration talk","108":"EuroStat","109":"EuroStatAdm","110":"Archive","111":"StatExp","120":"Glossar","121":"Glossar talk","122":"Glossaire","123":"Glossaire talk","124":"Glossarium","125":"Glossarium talk","126":"Sõnastik","127":"Sõnastik talk","128":"Słownik","129":"Słownik talk","130":"Γλωσσάριo","131":"Γλωσσάριo talk","132":"Ordlista","133":"Ordlista talk","134":"Orðalisti","135":"Orðalisti talk","154":"Beginners","155":"Beginners talk"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"talk":1,"user":2,"user_talk":3,"statistics_explained":4,"statistics_explained_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"glossary":100,"glossary_talk":101,"configuration":104,"configuration_talk":105,"eurostat":108,"eurostatadm":109,"archive":110,"statexp":111,"glossar":120,"glossar_talk":121,"glossaire":122,"glossaire_talk":123,"glossarium":124,"glossarium_talk":125,"sõnastik":126,"sõnastik_talk":127,"słownik":128,"słownik_talk":129,"γλωσσάριo":130,"γλωσσάριo_talk":131,"ordlista":132,"ordlista_talk":133,"orðalisti":134,"orðalisti_talk":135,"beginners":154,"beginners_talk":155,"image":6,"image_talk":7,"project":4,"project_talk":5},"wgSiteName":"Statistics Explained","wgFileExtensions":["png","gif","jpg","jpeg","doc","xls","xlsx","docx"],"wgDBname":"STAT_EXP_3","wgFileCanRotate":false,"wgAvailableSkins":{"statexpflat":"StatexpFlat","cologneblue":"CologneBlue","vector":"Vector","modern":"Modern","monobook":"MonoBook"},"wgExtensionAssetsPath":"/eurostat/statistics-explained/extensions","wgCookiePrefix":"STAT_EXP_3","wgResourceLoaderMaxQueryLength":-1,"wgCaseSensitiveNamespaces":[],"wgLegalTitleChars":" %!\"$\u0026'()*,\\-./0-9:;=?@A-Z\\\\\\^_`a-z~+\\u0080-\\uFFFF","wgWikiEditorMagicWords":{"redirect":"#REDIRECT","img_right":"right","img_left":"left","img_none":"none","img_center":"center","img_thumbnail":"thumbnail","img_framed":"framed","img_frameless":"frameless"}});};
if ( isCompatible() ) {
	document.write("\u003Cscript src=\"/eurostat/statistics-explained/load.php?debug=true\u0026amp;lang=fr\u0026amp;modules=jquery%2Cmediawiki\u0026amp;only=scripts\u0026amp;skin=statexpflat\u0026amp;version=20150325T093437Z\"\u003E\u003C/script\u003E");}
delete isCompatible;