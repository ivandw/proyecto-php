var moment = require('moment-timezone');
	
var app = require('http').createServer(handler),

  io = require('socket.io').listen(app),
  fs = require('fs'),
  mysql = require('mysql'),
  connectionsArray = [],
  connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'nodejs',
	dateStrings:true,
    port: 3306
  }),
  POLLING_INTERVAL = 3000,
  pollingTimer;

// si hay un error
connection.connect(function(err) {
  // conectado! (a menosque `err` este seteado)
  if (err) {
    console.log(err);
  }
});

// creo el server( localhost:8000 )
app.listen(8000);

// carga de html
function handler(req, res) {
  fs.readFile(__dirname + '/client.html', function(err, data) {
    if (err) {
      console.log(err);
      res.writeHead(500);
      return res.end('Error cargando client.html');
    }
    res.writeHead(200);
    res.end(data);
  });
}

/*
 *
 * 
 * This function loops on itself since there are sockets connected to the page
 * sending the result of the database query after a constant interval
 *
 */

var pollingLoop = function() {

  // hago la query
  var query = connection.query("SELECT registros.idImagen, registros.user_name, registros.user_description, registros.user_img, registros.tiempo, tipomensaje.link, registros.idRegistro FROM registros INNER JOIN tipomensaje ON registros.idImagen = tipomensaje.id ORDER BY registros.idregistro desc LIMIT 5"),
  
    registros = []; // registros es el array de la query

  // seteo 
  query
    .on('error', function(err) {
      // Handle error, and 'end' event will be emitted after this as well
      console.log(err);
      updateSockets(err);
    })
    .on('result', function(user) {
      
      registros.push(user);
    })
    .on('end', function() {
     
      if (connectionsArray.length) {

        pollingTimer = setTimeout(pollingLoop, POLLING_INTERVAL);

        updateSockets({
          registros: registros
        });
      } else {

        console.log('el timer del server se detuvo porque no hay mas conexiones a la aplicacion')

      }
    });
};


// creando un nuevo websocket para mantener el contenido updateado sin  request de ajax
io.sockets.on('connection', function(socket) {

  console.log('Cant de conexiones:' + connectionsArray.length);
  // empiezo el loop solo si hay un usuario conectado
  if (!connectionsArray.length) {
    pollingLoop();
  }

  socket.on('disconnect', function() {
    var socketIndex = connectionsArray.indexOf(socket);
    console.log('socketID = %s got disconnected', socketIndex);
    if (~socketIndex) {
      connectionsArray.splice(socketIndex, 1);
    }
  });

  console.log('nuevo socket conectado!');
  connectionsArray.push(socket);

});

var updateSockets = function(data) {
  // tiempo ultimo update
  data.time = moment().tz('America/Argentina/Buenos_Aires').format();
 
  console.log('pusheando data a los clientes conectados ( cant de conexiones = %s ) - %s', connectionsArray.length , data.time);
  // envio los datos a todos los sockets conectados
  connectionsArray.forEach(function(tmpSocket) {
    tmpSocket.volatile.emit('notification', data);
  });
};

console.log('usa tu navegador para ir a http://localhost:8000');
