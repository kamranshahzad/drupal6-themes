var Faceroll=function(){var Tooltip="";var Obj="";var offsetX=20;var offsetY=-20;this.Init=function(id){Obj=$("#"+id);hrefs=Obj.find("a");hrefs.bind("mousemove",ShowInfo);hrefs.bind("mouseout",HideInfo)};var ShowInfo=function(e){Tooltip=$(e.target).attr("alt");Obj.find(".info").html(Tooltip).css("left",_GetX(e)).css("top",_GetY(e)).show()};var HideInfo=function(e){Tooltip="";Obj.find(".info").hide()};var _GetX=function(e){var x;var IE=document.all?true:false;if(IE){x=event.clientX+document.documentElement.scrollLeft+offsetX}else{x=e.pageX+offsetX}return x};var _GetY=function(e){var y;var IE=document.all?true:false;if(IE){y=event.clientY+document.documentElement.scrollTop+offsetY}else{y=e.pageY+offsetY}return y}};function popup(){if(!document.getElementsByTagName){return false}var popuplinks=document.getElementsByTagName("a");for(var i=0;i<popuplinks.length;i++){if(popuplinks[i].className=="popup"){popuplinks[i].onclick=function(){openPopUp(this.getAttribute("href"));return false}}}}function openPopUp(linkURL){window.open(linkURL,"popup")}function hideems(div,status){if(status==1){status="block"}else{status="none"}if(document.all){document.getElementById(div).style.display=status}else{if(document.getElementById){document.getElementById(div).style.display=status}}}function showems(div,status){if(status==1){status="none"}else{status="block"}if(document.all){document.getElementById(div).style.display=status}else{if(document.getElementById){document.getElementById(div).style.display=status}}}function emailCloak(){if(document.getElementById){var alltags=document.all?document.all:document.getElementsByTagName("*");for(i=0;i<alltags.length;i++){if(alltags[i].className=="emailCloak"){var oldText=alltags[i].firstChild;if(oldText){var emailAddress=alltags[i].firstChild.nodeValue;if(emailAddress!=null){var user=emailAddress.substring(0,emailAddress.indexOf("("));var website=emailAddress.substring(emailAddress.indexOf(")")+1,emailAddress.length);var newText=user+"@"+website;var a=document.createElement("a");a.href="mailto:"+newText;var address=document.createTextNode(newText);a.appendChild(address);alltags[i].replaceChild(a,oldText)}}}}}}jQuery(emailCloak);function Homepage(){DocURL=document.URL;protocolIndex=DocURL.indexOf("://",4);serverIndex=DocURL.indexOf("/",protocolIndex+3);BeginURL=DocURL.indexOf("#",1)+1;urlresult=DocURL.substring(BeginURL,serverIndex);displayresult=DocURL.substring(protocolIndex+3,serverIndex);InsertElementAnchor(urlresult,displayresult)}function HtmlEncode(text){return text.replace(/&/g,"&amp").replace(/'/g,"&quot;").replace(/</g,"&lt;").replace(/>/g,"&gt;")}function TagAttrib(name,value){return" "+name+'="'+HtmlEncode(value)+'"'}function PrintTag(tagName,needCloseTag,attrib,inner){document.write("<"+tagName+attrib+">"+HtmlEncode(inner));if(needCloseTag){document.write("</"+tagName+">")}}function URI(href){IEVer=window.navigator.appVersion;IEVer=IEVer.substr(IEVer.indexOf("MSIE")+5,3);return(IEVer.charAt(1)=="."&&IEVer>="5.5")?encodeURI(href):escape(href).replace(/%3A/g,":").replace(/%3B/g,";")}function InsertElementAnchor(href,text){PrintTag("A",true,TagAttrib("HREF",URI(href)),text)}function hasSearchTerms(frm){var val;for(var i=0;i<frm.elements.length;i++){switch(frm.elements[i].type){case"text":val=frm.elements[i].value;break;case"select-one":val=frm.elements[i].options[frm.elements[i].selectedIndex].value;break;default:val=""}if(val.length>0){return true}}alert("Please enter some search criteria.");return false}function flashDetect9(){var flashDiv;var flashPrompt='<div class="centered tac">Download <a href=http://www.adobe.com/go/getflash/>Adobe Flash Player version 9</a> now to see enhanced content!</div>';if(!DetectFlashVer(9,0,0)){if((flashDiv=document.getElementById("flash_graph1"))!=null){flashDiv.innerHTML=flashPrompt}if((flashDiv=document.getElementById("flash_graph2"))!=null){flashDiv.innerHTML=flashPrompt}if((flashDiv=document.getElementById("flash_graph3"))!=null){flashDiv.innerHTML=flashPrompt}if((flashDiv=document.getElementById("flash_video_small"))!=null){flashDiv.innerHTML='<a href="http://www.adobe.com/go/getflash/" target="_blank" rel="nofollow"><img src="/FLVPlayer/images/NoFlash-small.gif" /></a>'}if((flashDiv=document.getElementById("flash_video_large"))!=null){flashDiv.innerHTML='<a href="http://www.adobe.com/go/getflash/" target="_blank" rel="nofollow"><img src="/FLVPlayer/images/NoFlash-large.gif" /></a>'}}}function latestFlashVerDetected(){var result=true;if(!DetectFlashVer(9,0,0)){result=false}return result}function trim(sString){while(sString.substring(0,1)==" "){sString=sString.substring(1,sString.length)}while(sString.substring(sString.length-1,sString.length)==" "){sString=sString.substring(0,sString.length-1)}return sString}function getCookie(name){var nameEQ=name+"=";var ca=document.cookie.split(";");for(var i=0;i<ca.length;i++){var c=ca[i];while(c.charAt(0)==" "){c=c.substring(1,c.length)}if(c.indexOf(nameEQ)==0){return unescape(c.substring(nameEQ.length,c.length))}}return null}function setCookie(name,value,days){if(days){var date=new Date();date.setTime(date.getTime()+(days*24*60*60*1000));var expires="; expires="+date.toGMTString()}else{var expires=""}document.cookie=name+"="+escape(value)+expires+"; path=/"}function IsEmpty(pfield){var val;var selIndex;val=pfield.value;if((val.length==0)||(val==null)){return true}else{return false}}function IsNumeric(sText){var ValidChars="0123456789.";var IsNumber=true;var Char;for(i=0;i<sText.length&&IsNumber==true;i++){Char=sText.charAt(i);if(ValidChars.indexOf(Char)==-1){IsNumber=false}}return IsNumber}function SrchToggle(pType){var helpText=null;switch(pType){case"trails":$("#srchTrails")[0].className="selected";$("#srchPhotos")[0].className="";$("#srchMembers")[0].className="";$("#srchGear")[0].className="nob";helpText="Enter Keywords (e.g. Breakneck Ridge, etc.)";break;case"photosearch":$("#srchTrails")[0].className="";$("#srchPhotos")[0].className="selected";$("#srchMembers")[0].className="";$("#srchGear")[0].className="nob";helpText="Enter Keywords (e.g. glacier, rainier, etc.)";break;case"membersearch":$("#srchTrails")[0].className="";$("#srchPhotos")[0].className="";$("#srchMembers")[0].className="selected";$("#srchGear")[0].className="nob";helpText="Enter Member Name (e.g. TrailsTeam, etc.)";break;case"gear":$("#srchTrails")[0].className="";$("#srchPhotos")[0].className="";$("#srchMembers")[0].className="";$("#srchGear")[0].className="nob selected";helpText="Enter Keywords (e.g. hiking boots, gps, etc.)";break}var $input=$("#frmSearch :input[type=text]");var $f=function(){$input.val("").removeClass("hintText").unbind("click").unbind("keydown")};if(helpText!=null&&($input.val()==""||$input.is(".hintText"))){$input.addClass("hintText").val(helpText).click($f).keydown($f)}}function DoSearch(){var $input=$("#frmSearch :input[type=text]");if($input.is(".hintText")){$input.val("")}if($("#srchTrails")[0].className.indexOf("selected")<0){if($("#srchGear")[0].className.indexOf("selected")<0){var p,frm=$("#frmCSearch")[0];if($("#srchPhotos")[0].className.indexOf("selected")>=0){p="photosearch"}else{p="membersearch"}frm.p.value=p;frm.search.value=$("#frmSearch")[0].keyword.value;frm.submit();return false}else{$("#frmSearch")[0].action="/gear/results.aspx";return true}}else{return true}}var tb_pathToImage="../images/loadingAnimation.gif";
/*!!!!!!!!!!!!!!!! edit below this line at your own risk !!!!!!!!!!!!!!!!!!!!!!!*/
$(document).ready(function(){tb_init("a.thickbox, area.thickbox, input.thickbox");imgLoader=new Image();imgLoader.src=tb_pathToImage});function tb_init(domChunk){$(domChunk).click(function(){var t=this.title||this.name||null;var a=this.href||this.alt;var g=this.rel||false;tb_show(t,a,g);this.blur();return false})}function tb_show(caption,url,imageGroup){try{if(typeof document.body.style.maxHeight==="undefined"){$("body","html").css({height:"100%",width:"100%"});$("html").css("overflow","hidden");if(document.getElementById("TB_HideSelect")===null){$("body").append("<iframe id='TB_HideSelect'></iframe><div id='TB_overlay'></div><div id='TB_window'></div>");$("#TB_overlay").click(tb_remove)}}else{if(document.getElementById("TB_overlay")===null){$("body").append("<div id='TB_overlay'></div><div id='TB_window'></div>");$("#TB_overlay").click(tb_remove)}}if(tb_detectMacXFF()){$("#TB_overlay").addClass("TB_overlayMacFFBGHack")}else{$("#TB_overlay").addClass("TB_overlayBG")}if(caption===null){caption=""}$("body").append("<div id='TB_load'><img src='"+imgLoader.src+"' /></div>");$("#TB_load").show();var baseURL;if(url.indexOf("?")!==-1){baseURL=url.substr(0,url.indexOf("?"))}else{baseURL=url}var urlString=/\.jpg$|\.jpeg$|\.png$|\.gif$|\.bmp$/;var urlType=baseURL.toLowerCase().match(urlString);if(urlType==".jpg"||urlType==".jpeg"||urlType==".png"||urlType==".gif"||urlType==".bmp"){TB_PrevCaption="";TB_PrevURL="";TB_PrevHTML="";TB_NextCaption="";TB_NextURL="";TB_NextHTML="";TB_imageCount="";TB_FoundURL=false;if(imageGroup){TB_TempArray=$("a[@rel="+imageGroup+"]").get();for(TB_Counter=0;((TB_Counter<TB_TempArray.length)&&(TB_NextHTML===""));TB_Counter++){var urlTypeTemp=TB_TempArray[TB_Counter].href.toLowerCase().match(urlString);if(!(TB_TempArray[TB_Counter].href==url)){if(TB_FoundURL){TB_NextCaption=TB_TempArray[TB_Counter].title;TB_NextURL=TB_TempArray[TB_Counter].href;TB_NextHTML="<span id='TB_next'>&nbsp;&nbsp;<a href='#'>Next &gt;</a></span>"}else{TB_PrevCaption=TB_TempArray[TB_Counter].title;TB_PrevURL=TB_TempArray[TB_Counter].href;TB_PrevHTML="<span id='TB_prev'>&nbsp;&nbsp;<a href='#'>&lt; Prev</a></span>"}}else{TB_FoundURL=true;TB_imageCount="Image "+(TB_Counter+1)+" of "+(TB_TempArray.length)}}}imgPreloader=new Image();imgPreloader.onload=function(){imgPreloader.onload=null;var pagesize=tb_getPageSize();var x=pagesize[0]-150;var y=pagesize[1]-150;var imageWidth=imgPreloader.width;var imageHeight=imgPreloader.height;if(imageWidth>x){imageHeight=imageHeight*(x/imageWidth);imageWidth=x;if(imageHeight>y){imageWidth=imageWidth*(y/imageHeight);imageHeight=y}}else{if(imageHeight>y){imageWidth=imageWidth*(y/imageHeight);imageHeight=y;if(imageWidth>x){imageHeight=imageHeight*(x/imageWidth);imageWidth=x}}}TB_WIDTH=imageWidth+30;TB_HEIGHT=imageHeight+60;$("#TB_window").append("<a href='' id='TB_ImageOff' title='Close'><img id='TB_Image' src='"+url+"' width='"+imageWidth+"' height='"+imageHeight+"' alt='"+caption+"'/></a><div id='TB_caption'>"+caption+"<div id='TB_secondLine'>"+TB_imageCount+TB_PrevHTML+TB_NextHTML+"</div></div><div id='TB_closeWindow'><a href='#' id='TB_closeWindowButton' title='Close'>close</a> or Esc Key</div>");$("#TB_closeWindowButton").click(tb_remove);if(!(TB_PrevHTML==="")){function goPrev(){if($(document).unbind("click",goPrev)){$(document).unbind("click",goPrev)}$("#TB_window").remove();$("body").append("<div id='TB_window'></div>");tb_show(TB_PrevCaption,TB_PrevURL,imageGroup);return false}$("#TB_prev").click(goPrev)}if(!(TB_NextHTML==="")){function goNext(){$("#TB_window").remove();$("body").append("<div id='TB_window'></div>");tb_show(TB_NextCaption,TB_NextURL,imageGroup);return false}$("#TB_next").click(goNext)}document.onkeydown=function(e){if(e==null){keycode=event.keyCode}else{keycode=e.which}if(keycode==27){tb_remove()}else{if(keycode==190){if(!(TB_NextHTML=="")){document.onkeydown="";goNext()}}else{if(keycode==188){if(!(TB_PrevHTML=="")){document.onkeydown="";goPrev()}}}}};tb_position();$("#TB_load").remove();$("#TB_ImageOff").click(tb_remove);$("#TB_window").css({display:"block"})};imgPreloader.src=url}else{var queryString=url.replace(/^[^\?]+\??/,"");var params=tb_parseQuery(queryString);TB_WIDTH=(params.width*1)+30||630;TB_HEIGHT=(params.height*1)+40||440;ajaxContentW=TB_WIDTH-30;ajaxContentH=TB_HEIGHT-45;if(url.indexOf("TB_iframe")!=-1){urlNoQuery=url.split("TB_");$("#TB_iframeContent").remove();if(params.modal!="true"){$("#TB_window").append("<iframe frameborder='0' hspace='0' src='"+urlNoQuery[0]+"' id='TB_iframeContent' name='TB_iframeContent"+Math.round(Math.random()*1000)+"' onload='tb_showIframe()' style='width:"+(ajaxContentW+29)+"px;height:"+(ajaxContentH+17)+"px;' > </iframe>")}else{$("#TB_overlay").unbind();$("#TB_window").append("<iframe frameborder='0' hspace='0' src='"+urlNoQuery[0]+"' id='TB_iframeContent' name='TB_iframeContent"+Math.round(Math.random()*1000)+"' onload='tb_showIframe()' style='width:"+(ajaxContentW+29)+"px;height:"+(ajaxContentH+17)+"px;'> </iframe>")}}else{if($("#TB_window").css("display")!="block"){if(params.modal!="true"){$("#TB_window").append("<div id='TB_ajaxContent' style='width:"+ajaxContentW+"px;height:"+ajaxContentH+"px'></div>")}else{$("#TB_overlay").unbind();$("#TB_window").append("<div id='TB_ajaxContent' class='TB_modal' style='width:"+ajaxContentW+"px;height:"+ajaxContentH+"px;'></div>")}}else{$("#TB_ajaxContent")[0].style.width=ajaxContentW+"px";$("#TB_ajaxContent")[0].style.height=ajaxContentH+"px";$("#TB_ajaxContent")[0].scrollTop=0;$("#TB_ajaxWindowTitle").html(caption)}}$("#TB_closeWindowButton").click(tb_remove);if(url.indexOf("TB_inline")!=-1){$("#TB_ajaxContent").append($("#"+params.inlineId).children());$("#TB_window").unload(function(){$("#"+params.inlineId).append($("#TB_ajaxContent").children())});tb_position();$("#TB_load").remove();$("#TB_window").css({display:"block"})}else{if(url.indexOf("TB_iframe")!=-1){tb_position();if($.browser.safari){$("#TB_load").remove();$("#TB_window").css({display:"block"})}}else{$("#TB_ajaxContent").load(url+="&random="+(new Date().getTime()),function(){tb_position();$("#TB_load").remove();tb_init("#TB_ajaxContent a.thickbox");$("#TB_window").css({display:"block"})})}}}if(!params.modal){document.onkeyup=function(e){if(e==null){keycode=event.keyCode}else{keycode=e.which}if(keycode==27){tb_remove()}}}}catch(e){}}function tb_showIframe(){$("#TB_load").remove();$("#TB_window").css({display:"block"})}function tb_remove(){$("#TB_imageOff").unbind("click");$("#TB_closeWindowButton").unbind("click");$("#TB_window").fadeOut("fast",function(){$("#TB_window,#TB_overlay,#TB_HideSelect").trigger("unload").unbind().remove()});$("#TB_load").remove();if(typeof document.body.style.maxHeight=="undefined"){$("body","html").css({height:"auto",width:"auto"});$("html").css("overflow","")}document.onkeydown="";document.onkeyup="";return false}function tb_position(){$("#TB_window").css({marginLeft:"-"+parseInt((TB_WIDTH/2),10)+"px",width:TB_WIDTH+"px"});if(!(jQuery.browser.msie&&jQuery.browser.version<7)){$("#TB_window").css({marginTop:"-"+parseInt((TB_HEIGHT/2),10)+"px"})}}function tb_parseQuery(query){var Params={};if(!query){return Params}var Pairs=query.split(/[;&]/);for(var i=0;i<Pairs.length;i++){var KeyVal=Pairs[i].split("=");if(!KeyVal||KeyVal.length!=2){continue}var key=unescape(KeyVal[0]);var val=unescape(KeyVal[1]);val=val.replace(/\+/g," ");Params[key]=val}return Params}function tb_getPageSize(){var de=document.documentElement;var w=window.innerWidth||self.innerWidth||(de&&de.clientWidth)||document.body.clientWidth;var h=window.innerHeight||self.innerHeight||(de&&de.clientHeight)||document.body.clientHeight;arrayPageSize=[w,h];return arrayPageSize}function tb_detectMacXFF(){var userAgent=navigator.userAgent.toLowerCase();if(userAgent.indexOf("mac")!=-1&&userAgent.indexOf("firefox")!=-1){return true}}(function(C){C.ui=C.ui||{};C.extend(C.ui,{plugin:{add:function(E,F,H){var G=C.ui[E].prototype;for(var D in H){G.plugins[D]=G.plugins[D]||[];G.plugins[D].push([F,H[D]])}},call:function(D,E,G){var H=D.plugins[E];if(!H){return}for(var F=0;F<H.length;F++){if(D.options[H[F][0]]){H[F][1].apply(D.element,G)}}}},cssCache:{},css:function(D){if(C.ui.cssCache[D]){return C.ui.cssCache[D]}var E=C('<div class="ui-resizable-gen">').addClass(D).css({position:"absolute",top:"-5000px",left:"-5000px",display:"block"}).appendTo("body");C.ui.cssCache[D]=!!((!/auto|default/.test(E.css("cursor"))||(/^[1-9]/).test(E.css("height"))||(/^[1-9]/).test(E.css("width"))||!(/none/).test(E.css("backgroundImage"))||!(/transparent|rgba\(0, 0, 0, 0\)/).test(E.css("backgroundColor"))));try{C("body").get(0).removeChild(E.get(0))}catch(F){}return C.ui.cssCache[D]},disableSelection:function(D){D.unselectable="on";D.onselectstart=function(){return false};if(D.style){D.style.MozUserSelect="none"}},enableSelection:function(D){D.unselectable="off";D.onselectstart=function(){return true};if(D.style){D.style.MozUserSelect=""}},hasScroll:function(G,E){var D=/top/.test(E||"top")?"scrollTop":"scrollLeft",F=false;if(G[D]>0){return true}G[D]=1;F=G[D]>0?true:false;G[D]=0;return F}});C.each(["Left","Top"],function(E,D){if(!C.fn["scroll"+D]){C.fn["scroll"+D]=function(F){return F!=undefined?this.each(function(){this==window||this==document?window.scrollTo(D=="Left"?F:C(window)["scrollLeft"](),D=="Top"?F:C(window)["scrollTop"]()):this["scroll"+D]=F}):this[0]==window||this[0]==document?self[(D=="Left"?"pageXOffset":"pageYOffset")]||C.boxModel&&document.documentElement["scroll"+D]||document.body["scroll"+D]:this[0]["scroll"+D]}}});var B=C.fn.remove;C.fn.extend({position:function(){var F=this.offset();var E=this.offsetParent();var D=E.offset();return{top:F.top-A(this[0],"marginTop")-D.top-A(E,"borderTopWidth"),left:F.left-A(this[0],"marginLeft")-D.left-A(E,"borderLeftWidth")}},offsetParent:function(){var D=this[0].offsetParent;while(D&&(!/^body|html$/i.test(D.tagName)&&C.css(D,"position")=="static")){D=D.offsetParent}return C(D)},mouseInteraction:function(D){return this.each(function(){new C.ui.mouseInteraction(this,D)})},removeMouseInteraction:function(D){return this.each(function(){if(C.data(this,"ui-mouse")){C.data(this,"ui-mouse").destroy()}})},remove:function(){jQuery("*",this).add(this).trigger("remove");return B.apply(this,arguments)}});function A(D,E){return parseInt(C.curCSS(D.jquery?D[0]:D,E,true))||0}C.ui.mouseInteraction=function(F,E){var D=this;this.element=F;C.data(this.element,"ui-mouse",this);this.options=C.extend({},E);C(F).bind("mousedown.draggable",function(){return D.click.apply(D,arguments)});if(C.browser.msie){C(F).attr("unselectable","on")}C(F).mouseup(function(){if(D.timer){clearInterval(D.timer)}})};C.extend(C.ui.mouseInteraction.prototype,{destroy:function(){C(this.element).unbind("mousedown.draggable")},trigger:function(){return this.click.apply(this,arguments)},click:function(F){if(F.which!=1||C.inArray(F.target.nodeName.toLowerCase(),this.options.dragPrevention||[])!=-1||(this.options.condition&&!this.options.condition.apply(this.options.executor||this,[F,this.element]))){return true}var E=this;var D=function(){E._MP={left:F.pageX,top:F.pageY};C(document).bind("mouseup.draggable",function(){return E.stop.apply(E,arguments)});C(document).bind("mousemove.draggable",function(){return E.drag.apply(E,arguments)});if(!E.initalized&&Math.abs(E._MP.left-F.pageX)>=E.options.distance||Math.abs(E._MP.top-F.pageY)>=E.options.distance){if(E.options.start){E.options.start.call(E.options.executor||E,F,E.element)}if(E.options.drag){E.options.drag.call(E.options.executor||E,F,this.element)}E.initialized=true}};if(this.options.delay){if(this.timer){clearInterval(this.timer)}this.timer=setTimeout(D,this.options.delay)}else{D()}return false},stop:function(D){var E=this.options;if(!this.initialized){return C(document).unbind("mouseup.draggable").unbind("mousemove.draggable")}if(this.options.stop){this.options.stop.call(this.options.executor||this,D,this.element)}C(document).unbind("mouseup.draggable").unbind("mousemove.draggable");this.initialized=false;return false},drag:function(D){var E=this.options;if(C.browser.msie&&!D.button){return this.stop.apply(this,[D])}if(!this.initialized&&(Math.abs(this._MP.left-D.pageX)>=E.distance||Math.abs(this._MP.top-D.pageY)>=E.distance)){if(this.options.start){this.options.start.call(this.options.executor||this,D,this.element)}this.initialized=true}else{if(!this.initialized){return false}}if(E.drag){E.drag.call(this.options.executor||this,D,this.element)}return false}})})(jQuery);(function(A){A.fn.tabs=function(){var C=typeof arguments[0]=="string"&&arguments[0];var B=C&&Array.prototype.slice.call(arguments,1)||arguments;return C=="length"?A.data(this[0],"tabs").$tabs.length:this.each(function(){if(C){var D=A.data(this,"tabs");if(D){D[C].apply(D,B)}}else{new A.ui.tabs(this,B[0]||{})}})};A.ui.tabs=function(D,C){var B=this;this.options=A.extend({},A.ui.tabs.defaults,C);this.element=D;if(C.selected===null){this.options.selected=null}this.options.event+=".tabs";A(D).bind("setData.tabs",function(F,E,G){if((/^selected/).test(E)){B.select(G)}else{B.options[E]=G;B.tabify()}}).bind("getData.tabs",function(F,E){return B.options[E]});A.data(D,"tabs",this);this.tabify(true)};A.ui.tabs.defaults={selected:0,unselect:false,event:"click",disabled:[],cookie:null,spinner:"Loading&#8230;",cache:false,idPrefix:"uiTabs",ajaxOptions:{},fx:null,tabTemplate:'<li><a href="#{href}"><span>#{label}</span></a></li>',panelTemplate:"<div></div>",navClass:"uiTabsNav",selectedClass:"uiTabsSelected",unselectClass:"uiTabsUnselect",disabledClass:"uiTabsDisabled",panelClass:"uiTabsPanel",hideClass:"uiTabsHide",loadingClass:"uiTabsLoading"};A.extend(A.ui.tabs.prototype,{tabId:function(B){return B.title&&B.title.replace(/\s/g,"_").replace(/[^A-Za-z0-9\-_:\.]/g,"")||this.options.idPrefix+A.data(B)},ui:function(C,B){return{instance:this,options:this.options,tab:C,panel:B}},tabify:function(N){this.$lis=A("li:has(a[href])",this.element);this.$tabs=this.$lis.map(function(){return A("a",this)[0]});this.$panels=A([]);var O=this,E=this.options;this.$tabs.each(function(Q,P){if(P.hash&&P.hash.replace("#","")){O.$panels=O.$panels.add(P.hash)}else{if(A(P).attr("href")!="#"){A.data(P,"href.tabs",P.href);A.data(P,"load.tabs",P.href);var S=O.tabId(P);P.href="#"+S;var R=A("#"+S);if(!R.length){R=A(E.panelTemplate).attr("id",S).addClass(E.panelClass).insertAfter(O.$panels[Q-1]||O.element);R.data("destroy.tabs",true)}O.$panels=O.$panels.add(R)}else{E.disabled.push(Q+1)}}});if(N){A(this.element).hasClass(E.navClass)||A(this.element).addClass(E.navClass);this.$panels.each(function(){var P=A(this);P.hasClass(E.panelClass)||P.addClass(E.panelClass)});this.$tabs.each(function(S,P){if(location.hash){if(P.hash==location.hash){E.selected=S;if(A.browser.msie||A.browser.opera){var R=A(location.hash),T=R.attr("id");R.attr("id","");setTimeout(function(){R.attr("id",T)},500)}scrollTo(0,0);return false}}else{if(E.cookie){var Q=parseInt(A.cookie("uiTabs"+A.data(O.element)),10);if(Q&&O.$tabs[Q]){E.selected=Q;return false}}else{if(O.$lis.eq(S).hasClass(E.selectedClass)){E.selected=S;return false}}}});this.$panels.addClass(E.hideClass);this.$lis.removeClass(E.selectedClass);if(E.selected!==null){this.$panels.eq(E.selected).show().removeClass(E.hideClass);this.$lis.eq(E.selected).addClass(E.selectedClass)}var D=E.selected!==null&&A.data(this.$tabs[E.selected],"load.tabs");if(D){this.load(E.selected)}E.disabled=A.unique(E.disabled.concat(A.map(this.$lis.filter("."+E.disabledClass),function(Q,P){return O.$lis.index(Q)}))).sort();A(window).bind("unload",function(){O.$tabs.unbind(".tabs");O.$lis=O.$tabs=O.$panels=null})}for(var H=0,M;M=this.$lis[H];H++){A(M)[A.inArray(H,E.disabled)!=-1&&!A(M).hasClass(E.selectedClass)?"addClass":"removeClass"](E.disabledClass)}if(E.cache===false){this.$tabs.removeData("cache.tabs")}var C,J,B={"min-width":0,duration:1},F="normal";if(E.fx&&E.fx.constructor==Array){C=E.fx[0]||B,J=E.fx[1]||B}else{C=J=E.fx||B}var I={display:"",overflow:"",height:""};if(!A.browser.msie){I.opacity=""}function L(Q,P,R){P.animate(C,C.duration||F,function(){P.addClass(E.hideClass).css(I);if(A.browser.msie&&C.opacity){P[0].style.filter=""}if(R){K(Q,R,P)}})}function K(Q,R,P){if(J===B){R.css("display","block")}R.animate(J,J.duration||F,function(){R.removeClass(E.hideClass).css(I);if(A.browser.msie&&J.opacity){R[0].style.filter=""}A(O.element).triggerHandler("tabsshow",[O.ui(Q,R[0])],E.show)})}function G(Q,S,P,R){S.addClass(E.selectedClass).siblings().removeClass(E.selectedClass);L(Q,P,R)}this.$tabs.unbind(".tabs").bind(E.event,function(){var S=A(this).parents("li:eq(0)"),P=O.$panels.filter(":visible"),R=A(this.hash);if((S.hasClass(E.selectedClass)&&!E.unselect)||S.hasClass(E.disabledClass)||A(this).hasClass(E.loadingClass)||A(O.element).triggerHandler("tabsselect",[O.ui(this,R[0])],E.select)===false){this.blur();return false}O.options.selected=O.$tabs.index(this);if(E.unselect){if(S.hasClass(E.selectedClass)){O.options.selected=null;S.removeClass(E.selectedClass);O.$panels.stop();L(this,P);this.blur();return false}else{if(!P.length){O.$panels.stop();var Q=this;O.load(O.$tabs.index(this),function(){S.addClass(E.selectedClass).addClass(E.unselectClass);K(Q,R)});this.blur();return false}}}if(E.cookie){A.cookie("uiTabs"+A.data(O.element),O.options.selected,E.cookie)}O.$panels.stop();if(R.length){var Q=this;O.load(O.$tabs.index(this),P.length?function(){G(Q,S,P,R)}:function(){S.addClass(E.selectedClass);K(Q,R)})}else{throw"jQuery UI Tabs: Mismatching fragment identifier."}if(A.browser.msie){this.blur()}return false});if(!(/^click/).test(E.event)){this.$tabs.bind("click.tabs",function(){return false})}},add:function(E,D,C){if(C==undefined){C=this.$tabs.length}var G=this.options;var I=A(G.tabTemplate.replace(/#\{href\}/,E).replace(/#\{label\}/,D));I.data("destroy.tabs",true);var H=E.indexOf("#")==0?E.replace("#",""):this.tabId(A("a:first-child",I)[0]);var F=A("#"+H);if(!F.length){F=A(G.panelTemplate).attr("id",H).addClass(G.panelClass).addClass(G.hideClass);F.data("destroy.tabs",true)}if(C>=this.$lis.length){I.appendTo(this.element);F.appendTo(this.element.parentNode)}else{I.insertBefore(this.$lis[C]);F.insertBefore(this.$panels[C])}G.disabled=A.map(G.disabled,function(K,J){return K>=C?++K:K});this.tabify();if(this.$tabs.length==1){I.addClass(G.selectedClass);F.removeClass(G.hideClass);var B=A.data(this.$tabs[0],"load.tabs");if(B){this.load(C,B)}}A(this.element).triggerHandler("tabsadd",[this.ui(this.$tabs[C],this.$panels[C])],G.add)},remove:function(B){var D=this.options,E=this.$lis.eq(B).remove(),C=this.$panels.eq(B).remove();if(E.hasClass(D.selectedClass)&&this.$tabs.length>1){this.select(B+(B+1<this.$tabs.length?1:-1))}D.disabled=A.map(A.grep(D.disabled,function(G,F){return G!=B}),function(G,F){return G>=B?--G:G});this.tabify();A(this.element).triggerHandler("tabsremove",[this.ui(E.find("a")[0],C[0])],D.remove)},enable:function(B){var C=this.options;if(A.inArray(B,C.disabled)==-1){return}var D=this.$lis.eq(B).removeClass(C.disabledClass);if(A.browser.safari){D.css("display","inline-block");setTimeout(function(){D.css("display","block")},0)}C.disabled=A.grep(C.disabled,function(F,E){return F!=B});A(this.element).triggerHandler("tabsenable",[this.ui(this.$tabs[B],this.$panels[B])],C.enable)},disable:function(C){var B=this,D=this.options;if(C!=D.selected){this.$lis.eq(C).addClass(D.disabledClass);D.disabled.push(C);D.disabled.sort();A(this.element).triggerHandler("tabsdisable",[this.ui(this.$tabs[C],this.$panels[C])],D.disable)}},select:function(B){if(typeof B=="string"){B=this.$tabs.index(this.$tabs.filter("[href$="+B+"]")[0])}this.$tabs.eq(B).trigger(this.options.event)},load:function(F,K){var L=this,C=this.options,D=this.$tabs.eq(F),J=D[0],G=K==undefined||K===false,B=D.data("load.tabs");K=K||function(){};if(!B||(A.data(J,"cache.tabs")&&!G)){K();return}if(C.spinner){var H=A("span",J);H.data("label.tabs",H.html()).html("<em>"+C.spinner+"</em>")}var I=function(){L.$tabs.filter("."+C.loadingClass).each(function(){A(this).removeClass(C.loadingClass);if(C.spinner){var M=A("span",this);M.html(M.data("label.tabs")).removeData("label.tabs")}});L.xhr=null};var E=A.extend({},C.ajaxOptions,{url:B,success:function(N,M){A(J.hash).html(N);I();K();if(C.cache){A.data(J,"cache.tabs",true)}A(L.element).triggerHandler("tabsload",[L.ui(L.$tabs[F],L.$panels[F])],C.load);C.ajaxOptions.success&&C.ajaxOptions.success(N,M)}});if(this.xhr){this.xhr.abort();I()}D.addClass(C.loadingClass);setTimeout(function(){L.xhr=A.ajax(E)},0)},url:function(C,B){this.$tabs.eq(C).removeData("cache.tabs").data("load.tabs",B)},destroy:function(){var B=this.options;A(this.element).unbind(".tabs").removeClass(B.navClass).removeData("tabs");this.$tabs.each(function(){var C=A.data(this,"href.tabs");if(C){this.href=C}var D=A(this).unbind(".tabs");A.each(["href","load","cache"],function(E,F){D.removeData(F+".tabs")})});this.$lis.add(this.$panels).each(function(){if(A.data(this,"destroy.tabs")){A(this).remove()}else{A(this).removeClass([B.selectedClass,B.unselectClass,B.disabledClass,B.panelClass,B.hideClass].join(" "))}})}});A.extend(A.ui.tabs.prototype,{rotation:null,rotate:function(C,F){F=F||false;var B=this,E=this.options.selected;function G(){B.rotation=setInterval(function(){E=++E<B.$tabs.length?E:0;B.select(E)},C)}function D(H){if(!H||H.clientX){clearInterval(B.rotation)}}if(C){G();if(!F){this.$tabs.bind(this.options.event,D)}else{this.$tabs.bind(this.options.event,function(){D();E=B.options.selected;G()})}}else{D();this.$tabs.unbind(this.options.event,D)}}})})(jQuery);