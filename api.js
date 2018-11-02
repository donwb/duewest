var connectString;
var MongoClient = require('mongodb').MongoClient;


var Api = function(cs) {
    connectString = cs;
}

Api.prototype.getGalleryImages = function(callback){
    query('gallery', {"home": "duewest"}, function(docs){
        callback(docs);
    });
}

Api.prototype.getSliderImages = function(callback){
    query('slider', {"home": "duewest"}, function(docs){
        callback(docs);
    });
}

function query(collection, query, callback){
    
    MongoClient.connect(connectString, function(err, db){
        var coll = db.collection(collection);

        coll.find(query).toArray(function(err, docs){
            callback(docs);
        });
    });
}

module.exports = Api;
