/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/src/js/custom/documentation/general/datatables/basic.js":
/*!***************************************************************************!*\
  !*** ./resources/src/js/custom/documentation/general/datatables/basic.js ***!
  \***************************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTDatatablesBasic = function () {\n  // Private functions\n\n  var _initExample1 = function _initExample1() {\n    $(\"#kt_datatable_example_1\").DataTable();\n  };\n  var _initExample2 = function _initExample2() {\n    $(\"#kt_datatable_example_2\").DataTable({\n      \"scrollY\": \"500px\",\n      \"scrollCollapse\": true,\n      \"paging\": false,\n      \"dom\": \"<'table-responsive'tr>\"\n    });\n  };\n  var _initExample3 = function _initExample3() {\n    $(\"#kt_datatable_example_3\").DataTable({\n      \"scrollX\": true\n    });\n  };\n  var _initExample4 = function _initExample4() {\n    $(\"#kt_datatable_example_4\").DataTable({\n      \"scrollY\": 300,\n      \"scrollX\": true\n    });\n  };\n\n  // Public methods\n  return {\n    init: function init() {\n      _initExample1();\n      _initExample2();\n      _initExample3();\n      _initExample4();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTDatatablesBasic.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvc3JjL2pzL2N1c3RvbS9kb2N1bWVudGF0aW9uL2dlbmVyYWwvZGF0YXRhYmxlcy9iYXNpYy5qcy5qcyIsIm1hcHBpbmdzIjoiQUFBYTs7QUFFYjtBQUNBLElBQUlBLGlCQUFpQixHQUFHLFlBQVk7RUFDaEM7O0VBRUEsSUFBSUMsYUFBYSxHQUFHLFNBQWhCQSxhQUFhLEdBQWM7SUFDM0JDLENBQUMsQ0FBQyx5QkFBeUIsQ0FBQyxDQUFDQyxTQUFTLEVBQUU7RUFDNUMsQ0FBQztFQUVELElBQUlDLGFBQWEsR0FBRyxTQUFoQkEsYUFBYSxHQUFjO0lBQzNCRixDQUFDLENBQUMseUJBQXlCLENBQUMsQ0FBQ0MsU0FBUyxDQUFDO01BQ25DLFNBQVMsRUFBUyxPQUFPO01BQ3pCLGdCQUFnQixFQUFFLElBQUk7TUFDdEIsUUFBUSxFQUFVLEtBQUs7TUFDdkIsS0FBSyxFQUFJO0lBQ2IsQ0FBQyxDQUFDO0VBQ04sQ0FBQztFQUVELElBQUlFLGFBQWEsR0FBRyxTQUFoQkEsYUFBYSxHQUFjO0lBQzNCSCxDQUFDLENBQUMseUJBQXlCLENBQUMsQ0FBQ0MsU0FBUyxDQUFDO01BQ25DLFNBQVMsRUFBRTtJQUNmLENBQUMsQ0FBQztFQUNOLENBQUM7RUFFRCxJQUFJRyxhQUFhLEdBQUcsU0FBaEJBLGFBQWEsR0FBYztJQUMzQkosQ0FBQyxDQUFDLHlCQUF5QixDQUFDLENBQUNDLFNBQVMsQ0FBQztNQUNuQyxTQUFTLEVBQUUsR0FBRztNQUNkLFNBQVMsRUFBRTtJQUNmLENBQUMsQ0FBQztFQUNOLENBQUM7O0VBRUQ7RUFDQSxPQUFPO0lBQ0hJLElBQUksRUFBRSxnQkFBWTtNQUNkTixhQUFhLEVBQUU7TUFDZkcsYUFBYSxFQUFFO01BQ2ZDLGFBQWEsRUFBRTtNQUNmQyxhQUFhLEVBQUU7SUFDbkI7RUFDSixDQUFDO0FBQ0wsQ0FBQyxFQUFFOztBQUVIO0FBQ0FFLE1BQU0sQ0FBQ0Msa0JBQWtCLENBQUMsWUFBVztFQUNqQ1QsaUJBQWlCLENBQUNPLElBQUksRUFBRTtBQUM1QixDQUFDLENBQUMiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvc3JjL2pzL2N1c3RvbS9kb2N1bWVudGF0aW9uL2dlbmVyYWwvZGF0YXRhYmxlcy9iYXNpYy5qcz8wZjg5Il0sInNvdXJjZXNDb250ZW50IjpbIlwidXNlIHN0cmljdFwiO1xyXG5cclxuLy8gQ2xhc3MgZGVmaW5pdGlvblxyXG52YXIgS1REYXRhdGFibGVzQmFzaWMgPSBmdW5jdGlvbiAoKSB7XHJcbiAgICAvLyBQcml2YXRlIGZ1bmN0aW9uc1xyXG5cclxuICAgIHZhciBfaW5pdEV4YW1wbGUxID0gZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgJChcIiNrdF9kYXRhdGFibGVfZXhhbXBsZV8xXCIpLkRhdGFUYWJsZSgpO1xyXG4gICAgfVxyXG5cclxuICAgIHZhciBfaW5pdEV4YW1wbGUyID0gZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgJChcIiNrdF9kYXRhdGFibGVfZXhhbXBsZV8yXCIpLkRhdGFUYWJsZSh7XHJcbiAgICAgICAgICAgIFwic2Nyb2xsWVwiOiAgICAgICAgXCI1MDBweFwiLFxyXG4gICAgICAgICAgICBcInNjcm9sbENvbGxhcHNlXCI6IHRydWUsXHJcbiAgICAgICAgICAgIFwicGFnaW5nXCI6ICAgICAgICAgZmFsc2UsXHJcbiAgICAgICAgICAgIFwiZG9tXCI6ICAgXCI8J3RhYmxlLXJlc3BvbnNpdmUndHI+XCIgXHJcbiAgICAgICAgfSk7XHJcbiAgICB9XHJcblxyXG4gICAgdmFyIF9pbml0RXhhbXBsZTMgPSBmdW5jdGlvbigpIHtcclxuICAgICAgICAkKFwiI2t0X2RhdGF0YWJsZV9leGFtcGxlXzNcIikuRGF0YVRhYmxlKHtcclxuICAgICAgICAgICAgXCJzY3JvbGxYXCI6IHRydWVcclxuICAgICAgICB9KTtcclxuICAgIH1cclxuXHJcbiAgICB2YXIgX2luaXRFeGFtcGxlNCA9IGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICQoXCIja3RfZGF0YXRhYmxlX2V4YW1wbGVfNFwiKS5EYXRhVGFibGUoe1xyXG4gICAgICAgICAgICBcInNjcm9sbFlcIjogMzAwLFxyXG4gICAgICAgICAgICBcInNjcm9sbFhcIjogdHJ1ZVxyXG4gICAgICAgIH0pO1xyXG4gICAgfSAgXHJcblxyXG4gICAgLy8gUHVibGljIG1ldGhvZHNcclxuICAgIHJldHVybiB7XHJcbiAgICAgICAgaW5pdDogZnVuY3Rpb24gKCkge1xyXG4gICAgICAgICAgICBfaW5pdEV4YW1wbGUxKCk7XHJcbiAgICAgICAgICAgIF9pbml0RXhhbXBsZTIoKTtcclxuICAgICAgICAgICAgX2luaXRFeGFtcGxlMygpO1xyXG4gICAgICAgICAgICBfaW5pdEV4YW1wbGU0KCk7XHJcbiAgICAgICAgfVxyXG4gICAgfVxyXG59KCk7XHJcblxyXG4vLyBPbiBkb2N1bWVudCByZWFkeVxyXG5LVFV0aWwub25ET01Db250ZW50TG9hZGVkKGZ1bmN0aW9uKCkge1xyXG4gICAgS1REYXRhdGFibGVzQmFzaWMuaW5pdCgpO1xyXG59KTsiXSwibmFtZXMiOlsiS1REYXRhdGFibGVzQmFzaWMiLCJfaW5pdEV4YW1wbGUxIiwiJCIsIkRhdGFUYWJsZSIsIl9pbml0RXhhbXBsZTIiLCJfaW5pdEV4YW1wbGUzIiwiX2luaXRFeGFtcGxlNCIsImluaXQiLCJLVFV0aWwiLCJvbkRPTUNvbnRlbnRMb2FkZWQiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/src/js/custom/documentation/general/datatables/basic.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/src/js/custom/documentation/general/datatables/basic.js"]();
/******/ 	
/******/ })()
;