/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// identity function for calling harmory imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
/******/
/******/ 	// define getter function for harmory exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		Object.defineProperty(exports, name, {
/******/ 			configurable: false,
/******/ 			enumerable: true,
/******/ 			get: getter
/******/ 		});
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ function(module, exports, __webpack_require__) {

eval("var Request = __webpack_require__(1);\n\n/**\n* main app class\n*/\nvar JobDesk = function JobDesk()\n{\n    this.request = new Request;\n    console.log(this.request);\n};\n\nnew JobDesk();\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiMC5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy9yZXNvdXJjZXMvYXNzZXRzL2pzL2pvYmRlc2suanM/OTExYSJdLCJzb3VyY2VzQ29udGVudCI6WyJjb25zdCBSZXF1ZXN0ID0gcmVxdWlyZSgnLi9oZWxwZXJzL3JlcXVlc3RzLmpzJyk7XG5cbi8qKlxuKiBtYWluIGFwcCBjbGFzc1xuKi9cbmNsYXNzIEpvYkRlc2tcbntcbiAgICBjb25zdHJ1Y3RvcigpXG4gICAge1xuICAgICAgICB0aGlzLnJlcXVlc3QgPSBuZXcgUmVxdWVzdDtcbiAgICAgICAgY29uc29sZS5sb2codGhpcy5yZXF1ZXN0KTtcbiAgICB9XG59XG5cbm5ldyBKb2JEZXNrKCk7XG5cblxuXG4vLyBXRUJQQUNLIEZPT1RFUiAvL1xuLy8gcmVzb3VyY2VzL2Fzc2V0cy9qcy9qb2JkZXNrLmpzIl0sIm1hcHBpbmdzIjoiQUFBQTtBQUNBOzs7O0FBSUE7QUFHQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBRUE7Iiwic291cmNlUm9vdCI6IiJ9");

/***/ },
/* 1 */
/***/ function(module, exports) {

eval("throw new Error(\"Module build failed: SyntaxError: Unexpected token (9:15)\\n    at Parser.pp$4.raise (/Users/leoknudsen/code/laravel/jobdesk/node_modules/buble/node_modules/acorn/dist/acorn.js:2221:15)\\n    at Parser.pp.unexpected (/Users/leoknudsen/code/laravel/jobdesk/node_modules/buble/node_modules/acorn/dist/acorn.js:603:10)\\n    at Parser.pp.expect (/Users/leoknudsen/code/laravel/jobdesk/node_modules/buble/node_modules/acorn/dist/acorn.js:597:28)\\n    at Parser.pp$3.parseParenExpression (/Users/leoknudsen/code/laravel/jobdesk/node_modules/buble/node_modules/acorn/dist/acorn.js:1837:10)\\n    at Parser.pp$1.parseIfStatement (/Users/leoknudsen/code/laravel/jobdesk/node_modules/buble/node_modules/acorn/dist/acorn.js:823:22)\\n    at Parser.pp$1.parseStatement (/Users/leoknudsen/code/laravel/jobdesk/node_modules/buble/node_modules/acorn/dist/acorn.js:698:30)\\n    at Parser.pp$1.parseBlock (/Users/leoknudsen/code/laravel/jobdesk/node_modules/buble/node_modules/acorn/dist/acorn.js:981:25)\\n    at Parser.pp$3.parseFunctionBody (/Users/leoknudsen/code/laravel/jobdesk/node_modules/buble/node_modules/acorn/dist/acorn.js:2105:24)\\n    at Parser.pp$3.parseMethod (/Users/leoknudsen/code/laravel/jobdesk/node_modules/buble/node_modules/acorn/dist/acorn.js:2075:10)\\n    at Parser.pp$1.parseClassMethod (/Users/leoknudsen/code/laravel/jobdesk/node_modules/buble/node_modules/acorn/dist/acorn.js:1137:25)\");//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiMS5qcyIsInNvdXJjZXMiOltdLCJtYXBwaW5ncyI6IiIsInNvdXJjZVJvb3QiOiIifQ==");

/***/ }
/******/ ]);