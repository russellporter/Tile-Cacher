Tile Cacher
====================

Description
---------------------
Tile Cacher is a simple PHP and ModRewrite based tool that allows you to cache OpenStreetMap structured tiles rendered elsewhere on a server.

### Why would you want to do that?
Well, it's handy if you have a computer at home running a tile server and you want to provide these tiles over the internet to other people. Then your home bandwidth constrained connection can be optimized, as tiles can be cached on your cheap processor constrained web host. Also, then you can hide your home IP from the world, and potentially use many low powered computers to outsource rendering and use your cheap web host as your central tile server.

Requirements
---------------------
* PHP
* ModRewrite

Install
---------------------
1. git clone the repo to the web root of your server.
2. Edit config.php with:
	* The URL of your rendering server
	* The absolute path to your web root where the tiles will be stored
	* Layer name (changing is optional)
3. Done! Tiles at: http://YOUR_SERVER/{layerName}/{z}/{x}/{y}.png

Todo
---------------------
* Cache invalidation
* Multi-layer caching
* Code can probably be optimized a lot

Questions/Comments/Help
---------------------
Email: [contact@russellporter.com](mailto:contact@russellporter.com)

github: [russellporter](https://github.com/russellporter)