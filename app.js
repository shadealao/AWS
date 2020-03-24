var createError = require('http-errors');
var express = require('express');

var path = require('path');
var cookieParser = require('cookie-parser');
var logger = require('morgan');

var indexRouter = require('./routes/index');
var usersRouter = require('./routes/users');
var rechercherRouter = require('./routes/rechercher');
var inscriptionRouter = require('./routes/inscription');
var connexionRouter = require('./routes/connexion');
var profileRouter = require('./routes/profil');
var proposerRouter = require('./routes/proposer');
var messagerieRouter = require('./routes/messagerie');

var app = express();
//msgerie
var server = require('http').Server(app);
var io = require('socket.io')(server);

app.use(express.static(path.join(__dirname, 'public')));
// view engine setup
var cons = require('consolidate');

//msg
app.use(function(req, res, next){
  res.io = io;
  next();
});


// view engine setup
app.engine('html', cons.swig)
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');


app.use(logger('dev'));
app.use(express.json());
app.use(express.urlencoded({ extended: false }));
app.use(cookieParser());


app.use('/', indexRouter);
app.use('/users', usersRouter);
app.use('/profil', profileRouter);
app.use('/inscription', inscriptionRouter);
app.use('/connexion', connexionRouter);
app.use('/rechercher', rechercherRouter);
app.use('/proposer',proposerRouter);
app.use('/messagerie',messagerieRouter);

// catch 404 and forward to error handler
app.use(function(req, res, next) {
    next(createError(404));
});

// error handler
app.use(function(err, req, res, next) {
    // set locals, only providing error in development
    res.locals.message = err.message;
    res.locals.error = req.app.get('env') === 'development' ? err : {};

    // render the error page
    res.status(err.status || 500);
    res.render('error');
});







module.exports = {app: app, server: server};
//module.exports = app;
