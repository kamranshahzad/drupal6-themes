/* OPTIMOST LIVE CODE [start] */
/*
(function(){var _o=optimost;_o.U=(("https:" == document.location.protocol) ? "https://by.essl.optimost.com/by" : "http://by.optimost.com") + "/trial/335/p/headerknowhow.15b/96/content.js";
_o.ST="script";_o.SA={"type":"text/javascript"};_o.B();_o.R(1000,null,null,null);})();

var opContentUrls=[(("https:" == document.location.protocol) ? "https://by.essl.optimost.com/by" : "http://by.optimost.com") + "/trial/335/p/headerknowhow.15b/96/content.js"];
var opModulesArray=['placeholder'];
*/

var opContentUrls=new Array();
var opModulesArray=new Array();

/*
if(document.location.toString().toLowerCase().indexOf('www.trails.com/tcatalog_trail.aspx')!=-1){
	if (typeof optrial!='object') optrial = new Object();
	optrial.opLoggedIn = (typeof(TRAILS)=='object' && TRAILS.settings.user && TRAILS.settings.user.isLoggedIn)?'true':'false';

	(function(){var _o=optimost;_o.U=(("https:" == document.location.protocol) ? "https://by.essl.optimost.com/by" : "http://by.optimost.com") + "/trial/335/p/trailsab.2d6/112/content.js";
	_o.ST="script";_o.SA={"type":"text/javascript"};_o.B();_o.R(1000,null,null,null);})();
	opContentUrls.push((("https:" == document.location.protocol) ? "https://by.essl.optimost.com/by" : "http://by.optimost.com") + "/trial/335/p/trailsab.2d6/112/content.js");
	opModulesArray.push("Placeholder");
}
*/

/* Counter Code [Start] */
var opCounterPagesUrls=new Array(
	'subscribe.aspx',
	'subscribe_activate.aspx',
	'fto_activation.aspx');
var opCountersUrls=new Array(
	'https://by.essl.optimost.com/by/counter/335/-/24/event.js',
	'https://by.essl.optimost.com/by/counter/335/-/70/event.js',
	'https://by.essl.optimost.com/by/counter/335/-/14/event.js');

function opRunCounters(){
	for (var opCn=0;opCn<opCounterPagesUrls.length; opCn++) {
		if (document.location.toString().toLowerCase().indexOf(opCounterPagesUrls[opCn])!=-1) {
			if (opCountersUrls[opCn] && opCountersUrls[opCn]!='') {
				var _o=(typeof opcounter=="object")?opcounter:new Object;_o.D=document;_o.L=_o.D.location;_o.T=
				new Date;_o.Q=new Object;_o.C=new Object;_o.U=opCountersUrls[opCn];
				_o.D_ts=Math.round(_o.T.getTime()/1000);_o.D_tzo=_o.T.getTimezoneOffset();_o.D_loc=_o.L.protocol+
				"//"+_o.L.hostname+_o.L.pathname;_o.D_ckl=_o.D.cookie.length;_o.D_ref=_o.D.referrer;function 
				_oI(){var s=_o.L.search;var c=_o.D.cookie;if(s.length>3){for(var a=s.substring(1).split("&")
				,i=0,l=a.length;i<l;i++){var p=a[i].indexOf("=");if(p>0)_o.Q[a[i].substring(0,p)]=unescape(a[i].substring(
				p+1));}}if(c.length>3){for(var a=c.split(";"),i=0,b=a.length;i<b;i++){var v=a[i].split("=");
				while(v[0].substring(0,1)==" ")v[0]=v[0].substring(1,v[0].length);if(v.length==2)_o.C[v[0]]=
				unescape(v[1]);}}}function _oS(){var o=new Object;for(var n in _o)o[n]=_o[n];o.D=o.L=o.T=o.Q=o.C=
				o.U=null;var q='';for(var n in o)if(o[n]!=null && o[n]!="")q+=(q.length>0?"&":(_o.U.indexOf(
				"?")>0?"&":"?"))+n+"="+escape(o[n]);return _o.U+q;}_oI();for(var n in _o.Q)if(n.substring(
				0,2)=="op")_o[n]=_o.Q[n];for(var n in _o.C)if(n.substring(0,2)=="op")_o[n]=_o.C[n];_o.D.write(
				'<'+'script type="text/javascript" src="'+_oS()+'"><\/script>');
			}
			break;
		}
	}
}
/* Counter Code [End] */

/* OPTIMOST LIVE CODE [end] */