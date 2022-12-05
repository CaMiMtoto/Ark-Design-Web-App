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

/***/ "./resources/src/js/custom/documentation/forms/recaptcha.js":
/*!******************************************************************!*\
  !*** ./resources/src/js/custom/documentation/forms/recaptcha.js ***!
  \******************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTFormsGoogleRecaptchaDemos = function () {\n  // Private functions\n  var example = function example(element) {\n    document.querySelector(\"#kt_form_submit_button\").addEventListener(\"click\", function (e) {\n      e.preventDefault();\n      grecaptcha.ready(function () {\n        if (grecaptcha.getResponse() === \"\") {\n          alert(\"Please validate the Google reCaptcha.\");\n        } else {\n          alert(\"Successful validation! Now you can submit this form to your server side processing.\");\n        }\n      });\n    });\n  };\n  return {\n    // Public Functions\n    init: function init(element) {\n      example();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTFormsGoogleRecaptchaDemos.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvc3JjL2pzL2N1c3RvbS9kb2N1bWVudGF0aW9uL2Zvcm1zL3JlY2FwdGNoYS5qcy5qcyIsIm1hcHBpbmdzIjoiQUFBYTs7QUFFYjtBQUNBLElBQUlBLDJCQUEyQixHQUFHLFlBQVk7RUFDMUM7RUFDQSxJQUFJQyxPQUFPLEdBQUcsU0FBVkEsT0FBTyxDQUFhQyxPQUFPLEVBQUU7SUFDN0JDLFFBQVEsQ0FBQ0MsYUFBYSxDQUFDLHdCQUF3QixDQUFDLENBQUNDLGdCQUFnQixDQUFDLE9BQU8sRUFBRSxVQUFVQyxDQUFDLEVBQUU7TUFDcEZBLENBQUMsQ0FBQ0MsY0FBYyxFQUFFO01BRWxCQyxVQUFVLENBQUNDLEtBQUssQ0FBQyxZQUFZO1FBQ3pCLElBQUlELFVBQVUsQ0FBQ0UsV0FBVyxFQUFFLEtBQUssRUFBRSxFQUFFO1VBQ2pDQyxLQUFLLENBQUMsdUNBQXVDLENBQUM7UUFDbEQsQ0FBQyxNQUFNO1VBQ0hBLEtBQUssQ0FBQyxxRkFBcUYsQ0FBQztRQUNoRztNQUNKLENBQUMsQ0FBQztJQUNOLENBQUMsQ0FBQztFQUNOLENBQUM7RUFFRCxPQUFPO0lBQ0g7SUFDQUMsSUFBSSxFQUFFLGNBQVVWLE9BQU8sRUFBRTtNQUNyQkQsT0FBTyxFQUFFO0lBQ2I7RUFDSixDQUFDO0FBQ0wsQ0FBQyxFQUFFOztBQUVIO0FBQ0FZLE1BQU0sQ0FBQ0Msa0JBQWtCLENBQUMsWUFBWTtFQUNsQ2QsMkJBQTJCLENBQUNZLElBQUksRUFBRTtBQUN0QyxDQUFDLENBQUMiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvc3JjL2pzL2N1c3RvbS9kb2N1bWVudGF0aW9uL2Zvcm1zL3JlY2FwdGNoYS5qcz85MDIzIl0sInNvdXJjZXNDb250ZW50IjpbIlwidXNlIHN0cmljdFwiO1xuXG4vLyBDbGFzcyBkZWZpbml0aW9uXG52YXIgS1RGb3Jtc0dvb2dsZVJlY2FwdGNoYURlbW9zID0gZnVuY3Rpb24gKCkge1xuICAgIC8vIFByaXZhdGUgZnVuY3Rpb25zXG4gICAgdmFyIGV4YW1wbGUgPSBmdW5jdGlvbiAoZWxlbWVudCkge1xuICAgICAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiI2t0X2Zvcm1fc3VibWl0X2J1dHRvblwiKS5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgZnVuY3Rpb24gKGUpIHtcbiAgICAgICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcblxuICAgICAgICAgICAgZ3JlY2FwdGNoYS5yZWFkeShmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgICAgaWYgKGdyZWNhcHRjaGEuZ2V0UmVzcG9uc2UoKSA9PT0gXCJcIikge1xuICAgICAgICAgICAgICAgICAgICBhbGVydChcIlBsZWFzZSB2YWxpZGF0ZSB0aGUgR29vZ2xlIHJlQ2FwdGNoYS5cIik7XG4gICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICAgYWxlcnQoXCJTdWNjZXNzZnVsIHZhbGlkYXRpb24hIE5vdyB5b3UgY2FuIHN1Ym1pdCB0aGlzIGZvcm0gdG8geW91ciBzZXJ2ZXIgc2lkZSBwcm9jZXNzaW5nLlwiKTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcmV0dXJuIHtcbiAgICAgICAgLy8gUHVibGljIEZ1bmN0aW9uc1xuICAgICAgICBpbml0OiBmdW5jdGlvbiAoZWxlbWVudCkge1xuICAgICAgICAgICAgZXhhbXBsZSgpO1xuICAgICAgICB9XG4gICAgfTtcbn0oKTtcblxuLy8gT24gZG9jdW1lbnQgcmVhZHlcbktUVXRpbC5vbkRPTUNvbnRlbnRMb2FkZWQoZnVuY3Rpb24gKCkge1xuICAgIEtURm9ybXNHb29nbGVSZWNhcHRjaGFEZW1vcy5pbml0KCk7XG59KTtcbiJdLCJuYW1lcyI6WyJLVEZvcm1zR29vZ2xlUmVjYXB0Y2hhRGVtb3MiLCJleGFtcGxlIiwiZWxlbWVudCIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvciIsImFkZEV2ZW50TGlzdGVuZXIiLCJlIiwicHJldmVudERlZmF1bHQiLCJncmVjYXB0Y2hhIiwicmVhZHkiLCJnZXRSZXNwb25zZSIsImFsZXJ0IiwiaW5pdCIsIktUVXRpbCIsIm9uRE9NQ29udGVudExvYWRlZCJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/src/js/custom/documentation/forms/recaptcha.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/src/js/custom/documentation/forms/recaptcha.js"]();
/******/ 	
/******/ })()
;