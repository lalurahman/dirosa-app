const CACHE_NAME = 'dirosa-v1';
var urlsToCache = [
	'/',
	'/images/icons/icon-72x72.png',
	'/images/icons/icon-96x96.png',
	'/images/icons/icon-128x128.png',
	'/images/icons/icon-144x144.png',
	'/images/icons/icon-152x152.png',
	'/images/icons/icon-192x192.png',
	'/images/icons/icon-384x384.png',
	'/images/icons/icon-512x512.png',
	'/icon.png',
	'/js/sw.js',
	'/manifest.json'
];

self.addEventListener('install', function(event){
	event.waitUntil(
		caches.open(CACHE_NAME)
		.then(function(cache) {
			return cache.addAll(urlsToCache);
		})
	);
})

self.addEventListener('activate', function(event){
	event.waitUntil(
		caches.keys()
		.then(function(cacheNames) {
			return Promise.all(
				cacheNames.map(function(cacheName){
					if(cacheName != CACHE_NAME){	
						console.log("ServiceWorker: cache " + cacheName + " dihapus");
						return caches.delete(cacheName);
					}
				})
			);
		})
	);
})

self.addEventListener('fetch', function(event) {
	event.respondWith(
		caches.match(event.request, {cacheName:CACHE_NAME})
		.then(function(response) {
			if(response){
				console.log("ServiceWorker: Gunakan aset dari cache: ", response.url);
				return response;
			}
			
			console.log("ServiceWorker: Memuat aset dari server: ", event.request.url);
			return fetch(event.request);
		})
	);
});

