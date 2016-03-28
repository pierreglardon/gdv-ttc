

var marvelAPI = {
	_API_KEY: "48a82721ced8a6ad35788f4dcf8aa9f3",
	_PRV_KEY: "12801d5540f21714bacba2b08576a1a8f51fa60a",
	_URL: "http://gateway.marvel.com/v1/public/",
	_PATH: ajaxdata.urlsite+"/wp-content/themes/toptencomics/assets/tpls/",
	results: "",

	series: function(searchTerm) {
		var method = 'series';
		var myTs = new Date().getTime();
		var params = {
			title: searchTerm,//$('#s').val(),
			ts: myTs,
			apikey: this._API_KEY,
			hash: md5(myTs+this._PRV_KEY+this._API_KEY),
		};
		var url = this.constructURL(method, params);
		console.log(url);
		var data = this.getData(url, method);
	},
	comics: function(idSerie) {
		var method = 'comics';
		var myTs = new Date().getTime();
		var params = {
			series: idSerie,
			ts: myTs,
			apikey: this._API_KEY,
			hash: md5(myTs+this._PRV_KEY+this._API_KEY),
		};
		var url = this.constructURL(method, params);
		var data = this.getData(url, method);
	},

	getData: function(url, method) {

		var self = this;
		return $.ajax({
  			url: url ,
			beforeSend: function( xhr ) {
    			xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
  			}
		}).done(function( response ) {
			response = JSON.parse(response);
    		if ( console && console.log ) {
      			//console.log( "Sample of data:", response);//response.data.results[0] );
				self.results = response;
				$.get( self._PATH+'mytpl.html', function(template) {
                    var curtpl = $(template).filter("#"+method).html();
					Mustache.parse(curtpl);
					var myMachin = {};//response.data.results;
					myMachin.bidule = response.data.results;
					var rendered = Mustache.render(curtpl, myMachin);
					$('.resultats').html(rendered);
  				});
			}
		});
	},

	callBack: function() {
		return 'ok---';
	},

	constructURL: function(method, params) {
		return this._URL+method+'?'+$.param(params);
	}
};

console.log(marvelAPI._URL);

$(document).ready(function(){






    $('#searchsubmit').on('click', function(e) {
		//e.preventDefault();
		//marvelAPI.series();
		});
	console.log(window.location.search.substr(3));

	if (window.location.search !== "")
	{
		//var idSerie = window.location.hash.substr(1);
		var searchTerm = window.location.search.substr(3);
		console.log(searchTerm);
		//var idSerie = window.location.hash.substr(1);
		marvelAPI.series(searchTerm);
	}
	if (window.location.hash !== "")
	{
		console.log(window.location.pathname);
		if (window.location.pathname.indexOf('series') !== -1)
		{
			console.log('Je suis sur une page série');
            //var idSerie = window.location.hash.substr(1);
    		//var searchTerm = window.location.search.substr(3);
    		//console.log(searchTerm);
    		//var idSerie = window.location.hash.substr(1);
    		//marvelAPI.comics(idSerie);
			var searchTerm = window.location.hash.substr(1);
			//var searchTerm = window.location.search.substr(3);
			//console.log(searchTerm);
			//var idSerie = window.location.hash.substr(1);
			marvelAPI.comics(searchTerm);
		}
		else
		{
			console.log('Je suis sur une page comics');
			var idSerie = window.location.hash.substr(1);
			//var searchTerm = window.location.search.substr(3);
			//console.log(searchTerm);
			//var idSerie = window.location.hash.substr(1);
			marvelAPI.comics(idSerie);
		}


	}
});
