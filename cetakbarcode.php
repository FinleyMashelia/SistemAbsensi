<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8"/>
	<meta content="width=device-width,initial-scale=1,user-scalable=no" name="viewport"/>
	<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
	<title>Barcode generator Diskominfo</title>
	<link rel="shortcut icon" href="favicon.svg" type="image/svg"/>

	<style type="text/css">
	
		*			{margin:0; padding:0; box-sizing:border-box;}
		#box			{background:url('data:image/gif;base64,R0lGODlhBgAGAIAAAO7u7t7e3iH5BAAAAAAALAAAAAAGAAYAAAIKhIOXgKGuDIOzAAA7') #eeeff1;}


		body			{font-size:12px; background:#ffe;}
		body,
		textarea		{text-align:center; font-family:arial;}



		input[type='number'],
		input[type='color']	{width:5em;}
		input[type='number']	{padding:0.25em; text-align:right;}
		select			{width:9em; font-size:11px; padding:0.25em 0.2em;}
		option			{padding:0.25em 0.2em;}
		textarea		{resize:none; padding:2.5em; color:#358; background:#eef2f4; font-size:2em; border:0; width:100%;}


		#set			{user-select:none; background:#fff; overflow:hidden;}
		#set table		{border-collapse:collapse; padding:2em; font-size:11px; text-transform:uppercase; margin:2em auto;}
		#set th,
		#set td			{padding:0.4em 0.5em;}
		#set th			{text-align:right; color:#567;}
		#set td			{text-align:left;}


		
		#res			{color:#789; padding:2em; text-align:left; font-family:'Lucida Console', Monaco, monospace;}
		#res b			{font-weight:normal;}
		#res i			{font-style:normal;}
		#res .obj		{color:#789;}
		#res .obj b		{color:#345; font-weight:bold;}
		#res .key		{color:#45a;}
		#res .num		{color:#12a;}
		#res .txt		{color:#9ab;}
		#res .txt i		{color:#384;}
		#res .clr		{color:#9ab;}
		#res .clr i		{color:#731;}
		#res a			{color:#67a;}
		#res a:hover		{color:#67e;}


		#box			{overflow:hidden; position:relative; height:300px; padding:3em;}
		#box svg		{display:block; position:absolute; right:50%; bottom:50%; transform:translate( 50%, 50%); cursor:pointer;}
		#box svg		{max-width:100%; max-height:100%;}



		.opt			{display:block; padding:1em; background:#0ae; color:#fff; text-decoration:none;}
		.opt:hover		{background:#0af;}

		#op2.opt		{background:#ea0;}
		#op2.opt:hover		{background:#fa0;}

		#set table,
		#set .legend,
		#set #op2.opt,
		#set.show #op1.opt	{display:none;}

		#set.show table		{display:table;}
		#set.show #op2.opt	{display:block;}

	@media (min-width: 620px) {

		html,
		body,			
		#box,
		#set,
		#txt,
		#msg,
		#hnt			{display:block; position:absolute; top:0; right:0; left:0; bottom:0;}

		html,
		body			{overflow:hidden;}
		#box			{height:auto;}

		#txt,
		#hnt			{height:250px; top:auto; border-top:3px #eee solid;}

		#set,
		#hnt			{width:270px; left:auto;}
		#set table		{font-size:10px;}

		#box,
		#txt			{right:270px}

		#box,
		#set			{bottom:250px;}

		#hnt			{overflow:auto;}
		#msg			{width:100%; height:100%;}

		#set			{overflow-y:auto;}
		#set .legend		{display:block;}
		#set table		{display:table;}
		#set .opt		{display:none !important;}
	}

	@media (min-width:900px) {

		#set,
		#hnt			{width:30%}
		#box,
		#txt			{right:30%}
	}

	@media (min-width:1024px) {

		#set table		{font-size:11px;}
	}

	@media (min-width:1600px) {

		#set,
		#hnt			{width:480px}
		#box,
		#txt			{right:480px}
	}

		.legend			{padding:1.5em 0.5em; border-bottom:1px #eee solid;}

	</style>

	<script src="barcode.min.js"></script>

</head>
<body>

<div id="box"></div>

<div id="set">

<a id="op1" class="opt" href="#">Perlihatkan settingan</a>
<a id="op2" class="opt" href="#">Sembunyikan settingan</a>

<div class="legend">

	<h3>BARCODE SETTINGS</h3>
	                                  
      <a href="admin_page.php">
      <i class="fa fa-home fa-lg"></i>
      <span class="nav-text">Menu Utama</span>
      </a>


</div>

<table><tr><th>

<label for="in1">Width</label></th><td><input
	id="in1" type="number" value="320" min="0" max="61440" step="32"/></td></tr><tr><th>

<label for="in2">Auto Width</label></th><td><input
	id="in2" type="checkbox"/></td></tr><tr><th>

<label for="in3">Height</label></th><td><input
	id="in3" type="number" value="80" min="0" max="61440" step="32"/></td></tr><tr><th>

<label for="in4">Auto Height</label></th><td><input
	id="in4" type="checkbox"/></td></tr><tr><th>

<label for="in5">Padding x</label></th><td><input
	id="in5" type="number" value="20" min="0" max="61440" step="2"/></td></tr><tr><th>

<label for="in6">Padding Y</label></th><td><input
	id="in6" type="number" value="16" min="0" max="61440" step="2"/></td></tr><tr><th>

<label for="in7">Faces</label></th><td><input
	id="in7" type="color" value="#000000"/></td></tr><tr><th>

<label for="in8">Background color</label></th><td><input
	id="in8" type="color" value="#f2f4f8"/></td></tr><tr><th>

<label for="in9">Background opaque</label></th><td><input
	id="in9" type="checkbox"/></td></tr></tr></table>

</div>

<div id="txt"><textarea id="msg"></textarea></div>

<div id="hnt"><pre id="res"></pre></div>


<script>

	'use strict';

	(function() {

	/**
		This script is not optimized
	*/

		var
		box = document.getElementById('box'),
		txt = document.getElementById('msg'),
		res = document.getElementById('res'),

		set = document.getElementById('set'),
		op1 = document.getElementById('op1'),
		op2 = document.getElementById('op2'),

		in1 = document.getElementById('in1'),
		in2 = document.getElementById('in2'),
		in3 = document.getElementById('in3'),
		in4 = document.getElementById('in4'),
		in5 = document.getElementById('in5'),
		in6 = document.getElementById('in6'),
		in7 = document.getElementById('in7'),
		in8 = document.getElementById('in8'),
		in9 = document.getElementById('in9'),

		current = function( o ) {

				o._value = o.value;
			},

		updated = function( o ) {

				return o._value == o.value;
			},

		clear = function( o ) {

				while( o.childNodes[ 0 ] ) {

					o.removeChild( o.childNodes[ 0 ] );
				}
			},

		hint = function( d ) {

				var
				c = 0,
				s = [];

				/* beautify: remove default values */
				if( 320  == d.dim[ 0 ] && 80 == d.dim[ 1 ] ) delete d.dim;
				if(  20  == d.pad[ 0 ] && 16 == d.pad[ 1 ] ) delete d.pad;
				if(   0  == d.pal[ 1 ] ) delete d.pal.pop();
				if(   d.pal[ 0 ] == '#000000' && !d.pal[ 1 ] ) delete d.pal;

				for( var k in d ) {

					var
					v = d[ k ];

					if( 1 * v == v )
					v = '  <i class="num">' + v + '</i>';

					else if ( Array == v.constructor ) {
					if( 1 * v[ 0 ] == v[ 0 ] )
					v = '[ <i class="num">' + v.join('</i>, <i class="num">') + '</i>]';
					else
					v = '[<i class="clr">"<i>' + v.join('</i>"</i>, <i class="clr">"<i>') + '</i>"</i>]';}

					else
					v = ' <i class="txt">"<i>' + v + '</i>"</i>';

					s.push( (s.length ? ',' : ' ') + '<b class="key">' + k + '</b> : ' + v );
					c++;
				}

				//if( 1 == c )	else
				res.innerHTML = '<b class="obj"><b>Barcode Diskominfo Semarang</b></b>'

		},

		download = function( d ) {
			function replace( d, r ) { 

				return d.replace( new RegExp( Object.keys( r ).join('|'), 'gi'), function( m ) {

					return r[ m ];
				}); 
			} 

			var
			d = replace( d, {

				/* removing useless spaces */
				 'M '	: 'M'
				,' M '	: 'M'
				,' V '	: 'V'
				,' v '	: 'v'
				,' H '	: 'H'
				,' h '	: 'h'
				,' Z'	: 'Z'			
				,' z'	: 'z'
				,' />'	: '/>'

				,'></path>': '/>'
				,'svg xmlns="http://www.w3.org/2000/svg"':'svg'
			}),

			n = 'barcode-' + replace( new Date().toISOString().slice( 0, 19 ), {

	 			 ':'	: ''
	 			,'-'	: ''
	 			,'T'	: '-'

			}) + '.svg',

			b = new Blob( [ d ], { type:'image/svg+xml'} );

			if( window.navigator.msSaveOrOpenBlob ) {

				window.navigator.msSaveOrOpenBlob( b, n );

			} else {

				var
				a = document.createElement("a"),
				u = URL.createObjectURL( b );

				a.href = u;
				a.download = n;

				document.body.appendChild( a );
				a.click();

				setTimeout( function() {

					document.body.removeChild( a );
					window.URL.revokeObjectURL( u );

				}, 0); 
			}

			return false;
		};

		op1.onclick = function() {

					set.className = 'show';
					return false;
		};

		op2.onclick = function() {

					set.className = 'hide';
					return false;
		};

		in1.onchange =
		in2.onchange =
		in3.onchange =
		in4.onchange =
		in5.onchange =
		in6.onchange =
		in7.onchange =
		in9.onchange = function() {

					box.update();
			};

		in2.onchange = function() {

					in1.value = 0;
					box.update();
			};

		in4.onchange = function() {

					in3.value = 0;
					box.update();
			};

		in8.onchange = function() {

					in9.checked = true;
					box.update();
			};

		txt.onkeyup = function() {

					if( updated( txt ) ) return;

					box.update();
					current( txt );
			};

		box.update = function() {

					/* auto calc probably will be added */

					clear( box );

					var
					time = new Date(),
					data = {

						 msg  :   txt.value
						,dim  : [ in1.value | 0, in3.value | 0 ]
						,pad  : [ in5.value | 0, in6.value | 0 ]
						,pal  : [ in7.value, in9.checked | 0 && in8.value ]
					};

					box.appendChild( BARCode( data ) )

						.onclick = function() {

							return download( box.innerHTML );
						};

					console.log('Barcode generation time: ' + ( new Date() - time ) + ' ms');

					hint( data );
			};

		txt.value = [
				 'Your text here'
				,'barcode generator'
				,'Type here...'
				,'BARCODE'
				,'BE HAPPY'
				,'128 Code'
				,'Cheer up!'
				,'All the best!'
				,'XX123456789US'
			][ ( Math.random() * 10 ) | 0 ];

		current( txt );
		box.update();
		txt.focus();
	})();

</script>


</body>
</html>