var moment = require('moment-timezone');
 var date = moment().tz("America/Argentina/Buenos_Aires").format();
 console.log(date);