TRAILS.utils.BackgroundManager = function($images){
	this._selectedIndex = $images.length - 1;
	this._timeoutId = null;
	this._$images = $images;
	this.settings = {
		duration: 1000,
		delay: 10000
	};
	
	this.start();
};
TRAILS.utils.BackgroundManager.prototype.start = function(){
	var self = this;
	
	if(this._timeoutId !== null)
		return;
	
	(function start(){
		if(self._selectedIndex === 0){
			self._selectedIndex = self._$images.length - 1;
			
			self._$images.eq(self._selectedIndex).fadeIn(self.settings.duration, function(){ self._$images.show(); });
		}
		else
			self._$images.eq(self._selectedIndex--).fadeOut(self.settings.duration);
		
		self._timeoutId = setTimeout(start, self.settings.delay + self.settings.duration);
	})();
};
TRAILS.utils.BackgroundManager.prototype.stop = function(){
	clearTimeout(this._timeoutId);
	
	this._timeoutId = null;
};