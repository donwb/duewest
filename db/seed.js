var MongoClient = require('mongodb').MongoClient;
var url = process.env.MONGO_URL;

var gi = require('./gallery');
var sl = require('./slider');

MongoClient.connect(url, function(err, db) {
  
  console.log("Connected successfully to server");

  var coll = db.collection('gallery');
  console.log('inserting...')
  //coll.insertMany(gi.galleryImages);
  
  var slider = db.collection('slider');
  //slider.insertMany(sl.sliderImages);

  console.log('done....');

  db.close();
});



