var Paginas = function () {
  this.respondsWith = ['html', 'json', 'xml', 'js', 'txt'];

  this.index = function (req, resp, params) {
    var self = this;

    geddy.model.Pagina.all(function(err, paginas) {
      self.respond({params: params, paginas: paginas});
    });
  };

  this.add = function (req, resp, params) {
    this.respond({params: params});
  };

  this.create = function (req, resp, params) {
    var self = this
      , pagina = geddy.model.Pagina.create(params);

    pagina.save(function(err, data) {
      if (err) {
        params.errors = err;
        self.transfer('add');
      } else {
        self.redirect({controller: self.name});
      }
    });
  };

  this.show = function (req, resp, params) {
    var self = this;

    geddy.model.Pagina.first(params.id, function(err, pagina) {
      self.respond({params: params, pagina: pagina.toObj()});
    });
  };

  this.edit = function (req, resp, params) {
    var self = this;

    geddy.model.Pagina.first(params.id, function(err, pagina) {
      self.respond({params: params, pagina: pagina});
    });
  };

  this.update = function (req, resp, params) {
    var self = this;

    geddy.model.Pagina.first(params.id, function(err, pagina) {
      pagina.updateProperties(params);

      pagina.save(function(err, data) {
        if (err) {
          params.errors = err;
          self.transfer('edit');
        } else {
          self.redirect({controller: self.name});
        }
      });
    });
  };

  this.destroy = function (req, resp, params) {
    var self = this;

    geddy.model.Pagina.remove(params.id, function(err) {
      if (err) {
        params.errors = err;
        self.transfer('edit');
      } else {
        self.redirect({controller: self.name});
      }
    });
  };

};

exports.Paginas = Paginas;
