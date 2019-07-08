# Gulp project boilerplate

  - Version 1.1
  
  Gulp based project setup, with css and javascript compiling and browser optimization. Optimized for full-stack project running on local host.

## Set up

Gulp boilerplate is super easy to set up.

  - Install all dependencies
```sh
$ npm install
```

- Specify proxy (apache) server in `gulpfile.js`

```sh
const host = "http://localhost:8080/";
```

## Usage

  - Development build with file watching
```sh
$ npm run start
```

  - Production build
```sh
$ npm run build
```

## Under the hood

The watcher first initializes `browsersync` virtual server and proxies local directory specified in the `gulpfile.js`. All changes get automatically streamed into the browser

  - `sass` and `uglifycss` with `sourcemaps` for css
  - `babel` and `uglify` for javascript

### Note

 - Feel free to contribute
 - Document each update in under the hood

License
----

MIT
