'use strict';

var _webPushConfig = {
  debug: 1
};

importScripts('https://ccfactory.xyz/wp-content/plugins/chrome-push-notifications/assets/js/library/Dexie.min.js');

var dDB;

function getDb() {
  if (!dDB) {
    dDB = new Dexie("chrome-push-notifications");
    dDB.version(1).stores({
        pushData: 'tag,url',
    });
  dDB.open();
  }
  return dDB;
}

self.addEventListener('install', function(evt) {
    
    evt.waitUntil(self.skipWaiting());
    if (_webPushConfig.debug) console.log("The ServiceWorker was installed.");
});

self.addEventListener('activate', function(evt) {
    if (_webPushConfig.debug) console.log("The ServiceWorker was activated.");
});

self.addEventListener('push', function(event) {
  if (_webPushConfig.debug) console.log('Received a new push message', event);

  event.waitUntil(self.registration.pushManager.getSubscription().then(function(subscription) {
   if (_webPushConfig.debug) console.log('Push sub data', subscription);
      return fetch('http://ccfactory.xyz/?subId='+ encodeURIComponent(subscription.endpoint)).then(function(response) {  
          return response.json().then(function(json) {
          	if (_webPushConfig.debug) console.log('Push data received', json);
                  var promises = [];
                   for (var i = 0; i < json.notifications.length; i++) {
                    var single_notification = json.notifications[i];

                    if(!single_notification.title)
                        single_notification.title = 'New Notification!';

                    if(!single_notification.body)
                        single_notification.body = '';

                    if (_webPushConfig.debug) console.log("Showing notification: " + single_notification.body);
                    getDb().pushData.put({ tag: single_notification.tag, url: single_notification.url});
                    promises.push(showNotification(single_notification.title, single_notification.body, single_notification.url, single_notification.tag));
                }
              return Promise.all(promises);
          });
      });
  }));

});

self.addEventListener('notificationclick', function(event) {
  if (_webPushConfig.debug) console.log('Notification clicked: ', event);

    event.notification.close();
    event.waitUntil(getDb().pushData.get(event.notification.tag).then (function(push_data){
      if (_webPushConfig.debug) console.log(push_data);
        getDb().pushData.delete();
        return clients.openWindow(push_data.url).focus();
    }));

});

function showNotification(title, body, image, tag) {
    var options = {
        body: body,
        tag: tag,
        icon: ''
    };
    return self.registration.showNotification(title, options);
}
