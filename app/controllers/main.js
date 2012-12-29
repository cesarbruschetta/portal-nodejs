/*
 * Geddy JavaScript Web development framework
 * Copyright 2112 Matthew Eernisse (mde@fleegix.org)
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *         http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
*/
var strategies = require('../helpers/passport/strategies')
  , authTypes = geddy.mixin(strategies, {local: {name: 'local account'}});;

var Main = function () {

  this.index = function (req, resp, params) {
    var self = this
      , Pagina = geddy.model.Pagina;
      
    Pagina.all(function (err, data) {
      var params = {
        paginas: null
      };

      if (data) {
        params.paginas = data;
      };

      self.respond(params, {
        format: 'html',
        layout: 'site'
      , template: 'app/views/main/index'
      });
    });
  };

  this.login = function (req, resp, params) {
    var self = this
      , Pagina = geddy.model.Pagina;
      
    Pagina.all(function (err, data) {
        var params = {
        	paginas: null
        };
    	
		if (data) {
			params.paginas = data;
		};

	    self.respond(params, {
	      format: 'html',
	      layout: 'site'
	    , template: 'app/views/main/login'
	    });
    });
  };

  this.logout = function (req, resp, params) {
    var self = this
      , Pagina = geddy.model.Pagina;

    Pagina.all(function (err, data) {
	    var params = {
	        	paginas: null
	        };    	
		if (data) {
			params.paginas = data;
		};

		self.session.unset('userId');
	    self.session.unset('authType');
	    self.respond(params, {
	      format: 'html',
	      layout: 'site'
	    , template: 'app/views/main/logout'
	    });
    });
  };

};

exports.Main = Main;


