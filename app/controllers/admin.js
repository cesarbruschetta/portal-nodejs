var passport = require('../helpers/passport')
  , requireAuth = passport.requireAuth;

var Admin = function () {
  this.before(requireAuth);
	
  this.respondsWith = ['html', 'json', 'xml', 'js', 'txt'];

  this.index = function (req, resp, params) {
    
    this.respond(params, {
        format: 'html'
      , template: 'app/views/admin/index'
      });
    
  };

};

exports.Admin = Admin;

