package image{

	import flash.display.MovieClip;
	import flash.events.ProgressEvent;
	import flash.events.Event;
	import flash.display.Loader;
	import flash.net.URLRequest;
	import fl.transitions.*;
	import fl.transitions.easing.*;
	

	public class imageContainer extends MovieClip {
		public var imageURL:String;
		public var urlRequest:URLRequest;
		public var imageLoader:Loader;
		public var imageWidth:Number;
		public var imageHeight:Number;
		public var preLoader:Loader;
		var mcImage:MovieClip=new MovieClip();
		public function imageContainer(Imagewidth:Number,Imageheight:Number,url:String,path:String) {
			preLoader=new Loader();
			preLoader.load(new URLRequest(path));
			preLoader.scaleX=2;
			preLoader.scaleY=2;
			preLoader.x=Imagewidth/2-preLoader.width/2;
			preLoader.y=Imageheight/2-preLoader.height/2;
			addChild(preLoader);

			imageURL=url;
			imageWidth=Imagewidth;
			imageHeight=Imageheight;
			loadThumb(url);
		}
		public function loadThumb(url:String) {
			urlRequest=new URLRequest(url);
			imageLoader=new Loader();
			imageLoader.load(urlRequest);
			imageLoader.contentLoaderInfo.addEventListener(Event.COMPLETE,funcComplete);

			function funcComplete(e:Event) {
				removeChild(preLoader);
				trace("Successfully Loaded");
				imageLoader.content.width=imageWidth;
				imageLoader.content.height=imageHeight;
				mcImage.addChild(imageLoader.content);
				//mcImage.x=imageWidth+10;
				mcImage.y=45;
				TransitionManager.start(mcImage,{type:Fade, direction:Transition.IN, duration:1, easing:Regular.easeIn});
				//TransitionManager.start(mcImage, {type:Squeeze, direction:Transition.IN, duration:2, easing:Elastic.easeOut, dimension:0});
				//TransitionManager.start(mcImage, {type:Fly, direction:Transition.IN, duration:3, easing:Elastic.easeOut, startPoint:1}); 
				//TransitionManager.start(mcImage, {type:Wipe, direction:Transition.IN, duration:2, easing:None.easeNone, startPoint:1}); 
				addChild(mcImage);
			}
		}
	}
}