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

/***/ "./resources/src/js/custom/documentation/forms/multiselectsplitter.js":
/*!****************************************************************************!*\
  !*** ./resources/src/js/custom/documentation/forms/multiselectsplitter.js ***!
  \****************************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTFormsMultiselectsplitterDemos = function () {\n  // Private functions\n  var example1 = function example1() {\n    $(\"#kt_multiselectsplitter_example_1\").multiselectsplitter();\n  };\n  var example2 = function example2() {\n    $('#kt_multiselectsplitter_example_2').multiselectsplitter({\n      selectSize: 7,\n      clearOnFirstChange: true,\n      groupCounter: true\n    });\n  };\n  var example3 = function example3() {\n    $('#kt_multiselectsplitter_example_3').multiselectsplitter({\n      groupCounter: true,\n      maximumSelected: 2\n    });\n  };\n  var example4 = function example4() {\n    $('#kt_multiselectsplitter_example_4').multiselectsplitter({\n      groupCounter: true,\n      maximumSelected: 3,\n      onlySameGroup: true\n    });\n  };\n  var example5 = function example5() {\n    $('#kt_multiselectsplitter_example_5').multiselectsplitter({\n      size: 6,\n      groupCounter: true,\n      maximumSelected: 2,\n      maximumAlert: function maximumAlert(maximumSelected) {\n        alert(\"You choose \" + (maximumSelected + 1) + \" options. Are you crazy ?\");\n      },\n      createFirstSelect: function createFirstSelect(label, $originalSelect) {\n        return \"<option class=\\\"text-success\\\">prefix - \" + label + \"</option>\";\n      },\n      createSecondSelect: function createSecondSelect(label, $firstSelect) {\n        return \"<option class=\\\"text-danger\\\"> ??? </option>\";\n      }\n    });\n  };\n  return {\n    // Public Functions\n    init: function init() {\n      example1();\n      example2();\n      example3();\n      example4();\n      example5();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTFormsMultiselectsplitterDemos.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvc3JjL2pzL2N1c3RvbS9kb2N1bWVudGF0aW9uL2Zvcm1zL211bHRpc2VsZWN0c3BsaXR0ZXIuanMuanMiLCJtYXBwaW5ncyI6IkFBQWE7O0FBRWI7QUFDQSxJQUFJQSwrQkFBK0IsR0FBRyxZQUFXO0VBQzdDO0VBQ0EsSUFBSUMsUUFBUSxHQUFHLFNBQVhBLFFBQVEsR0FBYztJQUN0QkMsQ0FBQyxDQUFDLG1DQUFtQyxDQUFDLENBQUNDLG1CQUFtQixFQUFFO0VBQ2hFLENBQUM7RUFFRCxJQUFJQyxRQUFRLEdBQUcsU0FBWEEsUUFBUSxHQUFjO0lBQ3RCRixDQUFDLENBQUMsbUNBQW1DLENBQUMsQ0FBQ0MsbUJBQW1CLENBQUM7TUFDN0RFLFVBQVUsRUFBRSxDQUFDO01BQ1BDLGtCQUFrQixFQUFFLElBQUk7TUFDOUJDLFlBQVksRUFBRTtJQUNaLENBQUMsQ0FBQztFQUNOLENBQUM7RUFFRCxJQUFJQyxRQUFRLEdBQUcsU0FBWEEsUUFBUSxHQUFjO0lBQ3RCTixDQUFDLENBQUMsbUNBQW1DLENBQUMsQ0FBQ0MsbUJBQW1CLENBQUM7TUFDN0RJLFlBQVksRUFBRSxJQUFJO01BQ1pFLGVBQWUsRUFBRTtJQUNyQixDQUFDLENBQUM7RUFDTixDQUFDO0VBRUQsSUFBSUMsUUFBUSxHQUFHLFNBQVhBLFFBQVEsR0FBYztJQUN0QlIsQ0FBQyxDQUFDLG1DQUFtQyxDQUFDLENBQUNDLG1CQUFtQixDQUFDO01BQzdESSxZQUFZLEVBQUUsSUFBSTtNQUNaRSxlQUFlLEVBQUUsQ0FBQztNQUNsQkUsYUFBYSxFQUFFO0lBQ25CLENBQUMsQ0FBQztFQUNOLENBQUM7RUFFRCxJQUFJQyxRQUFRLEdBQUcsU0FBWEEsUUFBUSxHQUFjO0lBQ3RCVixDQUFDLENBQUMsbUNBQW1DLENBQUMsQ0FBQ0MsbUJBQW1CLENBQUM7TUFDN0RVLElBQUksRUFBRSxDQUFDO01BQ1BOLFlBQVksRUFBRSxJQUFJO01BQ1pFLGVBQWUsRUFBRSxDQUFDO01BQ2xCSyxZQUFZLEVBQUUsc0JBQVNMLGVBQWUsRUFBRTtRQUNwQ00sS0FBSyxDQUFDLGFBQWEsSUFBS04sZUFBZSxHQUFHLENBQUMsQ0FBRSxHQUFHLDJCQUEyQixDQUFDO01BQ2hGLENBQUM7TUFDRE8saUJBQWlCLEVBQUUsMkJBQVVDLEtBQUssRUFBRUMsZUFBZSxFQUFFO1FBQ2pELE9BQU8sMENBQTBDLEdBQUdELEtBQUssR0FBRyxXQUFXO01BQzNFLENBQUM7TUFDREUsa0JBQWtCLEVBQUUsNEJBQVVGLEtBQUssRUFBRUcsWUFBWSxFQUFFO1FBQy9DLE9BQU8sOENBQThDO01BQ3pEO0lBQ0osQ0FBQyxDQUFDO0VBQ04sQ0FBQztFQUVELE9BQU87SUFDSDtJQUNBQyxJQUFJLEVBQUUsZ0JBQVc7TUFDYnBCLFFBQVEsRUFBRTtNQUNWRyxRQUFRLEVBQUU7TUFDVkksUUFBUSxFQUFFO01BQ1ZFLFFBQVEsRUFBRTtNQUNWRSxRQUFRLEVBQUU7SUFDZDtFQUNKLENBQUM7QUFDTCxDQUFDLEVBQUU7O0FBRUg7QUFDQVUsTUFBTSxDQUFDQyxrQkFBa0IsQ0FBQyxZQUFXO0VBQ2pDdkIsK0JBQStCLENBQUNxQixJQUFJLEVBQUU7QUFDMUMsQ0FBQyxDQUFDIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL3NyYy9qcy9jdXN0b20vZG9jdW1lbnRhdGlvbi9mb3Jtcy9tdWx0aXNlbGVjdHNwbGl0dGVyLmpzPzcwYmQiXSwic291cmNlc0NvbnRlbnQiOlsiXCJ1c2Ugc3RyaWN0XCI7XHJcblxyXG4vLyBDbGFzcyBkZWZpbml0aW9uXHJcbnZhciBLVEZvcm1zTXVsdGlzZWxlY3RzcGxpdHRlckRlbW9zID0gZnVuY3Rpb24oKSB7XHJcbiAgICAvLyBQcml2YXRlIGZ1bmN0aW9uc1xyXG4gICAgdmFyIGV4YW1wbGUxID0gZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgJChcIiNrdF9tdWx0aXNlbGVjdHNwbGl0dGVyX2V4YW1wbGVfMVwiKS5tdWx0aXNlbGVjdHNwbGl0dGVyKCk7XHJcbiAgICB9XHJcblxyXG4gICAgdmFyIGV4YW1wbGUyID0gZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgJCgnI2t0X211bHRpc2VsZWN0c3BsaXR0ZXJfZXhhbXBsZV8yJykubXVsdGlzZWxlY3RzcGxpdHRlcih7XHJcbiAgICBcdFx0c2VsZWN0U2l6ZTogNyxcclxuICAgICAgICAgICAgY2xlYXJPbkZpcnN0Q2hhbmdlOiB0cnVlLFxyXG4gICAgXHRcdGdyb3VwQ291bnRlcjogdHJ1ZVxyXG4gICAgICAgIH0pO1xyXG4gICAgfVxyXG5cclxuICAgIHZhciBleGFtcGxlMyA9IGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICQoJyNrdF9tdWx0aXNlbGVjdHNwbGl0dGVyX2V4YW1wbGVfMycpLm11bHRpc2VsZWN0c3BsaXR0ZXIoe1xyXG4gICAgXHRcdGdyb3VwQ291bnRlcjogdHJ1ZSxcclxuICAgICAgICAgICAgbWF4aW11bVNlbGVjdGVkOiAyXHJcbiAgICAgICAgfSk7XHJcbiAgICB9XHJcblxyXG4gICAgdmFyIGV4YW1wbGU0ID0gZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgJCgnI2t0X211bHRpc2VsZWN0c3BsaXR0ZXJfZXhhbXBsZV80JykubXVsdGlzZWxlY3RzcGxpdHRlcih7XHJcbiAgICBcdFx0Z3JvdXBDb3VudGVyOiB0cnVlLFxyXG4gICAgICAgICAgICBtYXhpbXVtU2VsZWN0ZWQ6IDMsXHJcbiAgICAgICAgICAgIG9ubHlTYW1lR3JvdXA6IHRydWVcclxuICAgICAgICB9KTtcclxuICAgIH1cclxuXHJcbiAgICB2YXIgZXhhbXBsZTUgPSBmdW5jdGlvbigpIHtcclxuICAgICAgICAkKCcja3RfbXVsdGlzZWxlY3RzcGxpdHRlcl9leGFtcGxlXzUnKS5tdWx0aXNlbGVjdHNwbGl0dGVyKHtcclxuICAgIFx0XHRzaXplOiA2LFxyXG4gICAgXHRcdGdyb3VwQ291bnRlcjogdHJ1ZSxcclxuICAgICAgICAgICAgbWF4aW11bVNlbGVjdGVkOiAyLFxyXG4gICAgICAgICAgICBtYXhpbXVtQWxlcnQ6IGZ1bmN0aW9uKG1heGltdW1TZWxlY3RlZCkge1xyXG4gICAgICAgICAgICAgICAgYWxlcnQoXCJZb3UgY2hvb3NlIFwiICsgKCBtYXhpbXVtU2VsZWN0ZWQgKyAxICkgKyBcIiBvcHRpb25zLiBBcmUgeW91IGNyYXp5ID9cIik7XHJcbiAgICAgICAgICAgIH0sXHJcbiAgICAgICAgICAgIGNyZWF0ZUZpcnN0U2VsZWN0OiBmdW5jdGlvbiAobGFiZWwsICRvcmlnaW5hbFNlbGVjdCkgeyBcclxuICAgICAgICAgICAgICAgIHJldHVybiBcIjxvcHRpb24gY2xhc3M9XFxcInRleHQtc3VjY2Vzc1xcXCI+cHJlZml4IC0gXCIgKyBsYWJlbCArIFwiPC9vcHRpb24+XCI7XHJcbiAgICAgICAgICAgIH0sXHJcbiAgICAgICAgICAgIGNyZWF0ZVNlY29uZFNlbGVjdDogZnVuY3Rpb24gKGxhYmVsLCAkZmlyc3RTZWxlY3QpIHsgXHJcbiAgICAgICAgICAgICAgICByZXR1cm4gXCI8b3B0aW9uIGNsYXNzPVxcXCJ0ZXh0LWRhbmdlclxcXCI+ID8/PyA8L29wdGlvbj5cIjtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH0pO1xyXG4gICAgfVxyXG5cclxuICAgIHJldHVybiB7XHJcbiAgICAgICAgLy8gUHVibGljIEZ1bmN0aW9uc1xyXG4gICAgICAgIGluaXQ6IGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICAgICBleGFtcGxlMSgpO1xyXG4gICAgICAgICAgICBleGFtcGxlMigpO1xyXG4gICAgICAgICAgICBleGFtcGxlMygpO1xyXG4gICAgICAgICAgICBleGFtcGxlNCgpO1xyXG4gICAgICAgICAgICBleGFtcGxlNSgpO1xyXG4gICAgICAgIH1cclxuICAgIH07XHJcbn0oKTtcclxuXHJcbi8vIE9uIGRvY3VtZW50IHJlYWR5XHJcbktUVXRpbC5vbkRPTUNvbnRlbnRMb2FkZWQoZnVuY3Rpb24oKSB7XHJcbiAgICBLVEZvcm1zTXVsdGlzZWxlY3RzcGxpdHRlckRlbW9zLmluaXQoKTtcclxufSk7XHJcbiJdLCJuYW1lcyI6WyJLVEZvcm1zTXVsdGlzZWxlY3RzcGxpdHRlckRlbW9zIiwiZXhhbXBsZTEiLCIkIiwibXVsdGlzZWxlY3RzcGxpdHRlciIsImV4YW1wbGUyIiwic2VsZWN0U2l6ZSIsImNsZWFyT25GaXJzdENoYW5nZSIsImdyb3VwQ291bnRlciIsImV4YW1wbGUzIiwibWF4aW11bVNlbGVjdGVkIiwiZXhhbXBsZTQiLCJvbmx5U2FtZUdyb3VwIiwiZXhhbXBsZTUiLCJzaXplIiwibWF4aW11bUFsZXJ0IiwiYWxlcnQiLCJjcmVhdGVGaXJzdFNlbGVjdCIsImxhYmVsIiwiJG9yaWdpbmFsU2VsZWN0IiwiY3JlYXRlU2Vjb25kU2VsZWN0IiwiJGZpcnN0U2VsZWN0IiwiaW5pdCIsIktUVXRpbCIsIm9uRE9NQ29udGVudExvYWRlZCJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/src/js/custom/documentation/forms/multiselectsplitter.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/src/js/custom/documentation/forms/multiselectsplitter.js"]();
/******/ 	
/******/ })()
;