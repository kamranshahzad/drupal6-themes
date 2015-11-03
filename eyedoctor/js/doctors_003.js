TRAILS.utils.EventManager = function(){
	this._events = new Object();
};
TRAILS.utils.EventManager.prototype.trigger = function(eventName){
	var eventListeners = this._events[eventName];
	
	if(!eventListeners) return this;

	for(var i = 0, l = eventListeners.length; i < l; i++)
		eventListeners[i].apply(this, arguments);
	
	return this;
};
TRAILS.utils.EventManager.prototype.bind = function(eventName, fn){
	if(typeof fn !== Function.type) return this;
	
	(this._events[eventName] || (this._events[eventName] = new Array())).push(fn);
	
	return this;
};