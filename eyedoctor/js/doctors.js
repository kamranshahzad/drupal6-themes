TRAILS.utils.HorizontalSlider = function TRAILS_utils_HorizontalSlider($leftButton, $rightButton, $container, animationOptions){
	var self = this;
	var lastPageWidth = 0;
	
	this._eventManager = new TRAILS.utils.EventManager();
	this._timeoutId = null;
	this._currentPage = 0;
	this._pages = new Array();
	this._namespace = '.HorizontalSlider' + new Date().getTime();
	this._configuration = {
		containerWidth: $container.width(),
		containerParentWidth: $container.parent().width(),
		animation: jQuery.extend({ duration: 400, easing: 'swing', delay: 6000 }, animationOptions)
	};
	this.ui = {
		$container: $container.css({ position: 'relative', left: 0 }),
		$leftButton: $leftButton.bind('click' + this._namespace, function(){ self.slideLeft(); }).disableTextSelect(),
		$rightButton: $rightButton.bind('click' + this._namespace, function(){ self.slideRight(); }).disableTextSelect()
	};
	
	$container.children().each(function _buildPageWidths(){
		var $element = jQuery(this);
		
		lastPageWidth += $element.width()
			+ parseInt($element.css('marginLeft'), 10)
			+ parseInt($element.css('marginRight'), 10);
		
		if(lastPageWidth < self._configuration.containerParentWidth) return;
		
		self._pages.push(lastPageWidth);
		
		lastPageWidth = 0;
	});
	
	if(lastPageWidth !== 0)
		this._pages.push(lastPageWidth);
};
TRAILS.utils.HorizontalSlider.prototype.getCurrentPage = function TRAILS_utils_HorizontalSlider_prototype_getCurrentPage(){
	return this._currentPage;
};
TRAILS.utils.HorizontalSlider.prototype.getNamespace = function TRAILS_utils_HorizontalSlider_prototype_getNamespace(){
	return this._namespace;
};
TRAILS.utils.HorizontalSlider.prototype.bind = function TRAILS_utils_HorizontalSlider_prototype_bind(eventName, fn){
	this._eventManager.bind(eventName, fn);
};
TRAILS.utils.HorizontalSlider.prototype.slideTo = function TRAILS_utils_HorizontalSlider_prototype_slideTo(page, duration){
	if(page === this._currentPage || page < 0 || page > this._pages.length - 1) return;
	
	while(page !== this._currentPage)
		this[page < this._currentPage ? 'slideLeft' : 'slideRight'](duration, 'linear');
};
TRAILS.utils.HorizontalSlider.prototype.slideLeft = function TRAILS_utils_HorizontalSlider_prototype_slideLeft(duration, easing){
	var nextPosition = this._pages[this._currentPage];
	
	if(!nextPosition || this._currentPage === 0) return;

	this.stop();
	this._currentPage--;
	this.ui.$container.animate({ left: '+=' + nextPosition }, duration || this._configuration.animation.duration, easing || this._configuration.animation.easing);
	this._eventManager.trigger('slide', this._currentPage);
};
TRAILS.utils.HorizontalSlider.prototype.slideRight = function TRAILS_utils_HorizontalSlider_prototype_slideRight(duration, easing){
	var nextPosition = this._pages[this._currentPage + 1];
	
	if(!nextPosition) return;
	
	this.stop();
	this._currentPage++;
	this.ui.$container.animate({ left: '-=' + nextPosition }, duration || this._configuration.animation.duration, easing || this._configuration.animation.easing);
	this._eventManager.trigger('slide', this._currentPage);
};
TRAILS.utils.HorizontalSlider.prototype.start = function TRAILS_utils_HorizontalSlider_prototype_start(duration, delay){
	this.stop();
	
	var self = this;
	var startPosition = { left: 0 };
	
	duration = duration >> 0 || this._configuration.animation.duration;
	delay = (delay >> 0 || this._configuration.animation.delay) + this._configuration.animation.duration;
		
	self._timeoutId = setTimeout(function _slideNext(){
		if(self._currentPage >= self._pages.length - 1){
			self.ui.$container.animate(startPosition, duration, self._configuration.animation.easing);
			self._eventManager.trigger('slide', self._currentPage = 0);
		}
		else
			self.slideRight(duration);
			
		self._timeoutId = setTimeout(_slideNext, delay);
	}, delay);
};
TRAILS.utils.HorizontalSlider.prototype.stop = function TRAILS_utils_HorizontalSlider_prototype_stop(){
	if(this._timeoutId === null) return;
	
	clearTimeout(this._timeoutId);
	
	this._timeoutId = null;
};
TRAILS.utils.HorizontalSlider.prototype.dispose = function TRAILS_utils_HorizontalSlider_prototype_dispose(){
	for(var property in this.ui)
		this.ui[property].unbind(this._namespace);	
	for(var property in this)
		delete this[property];
};