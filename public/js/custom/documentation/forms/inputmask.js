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

/***/ "./resources/src/js/custom/documentation/forms/inputmask.js":
/*!******************************************************************!*\
  !*** ./resources/src/js/custom/documentation/forms/inputmask.js ***!
  \******************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTFormsInputmaskDemos = function () {\n  // Private functions\n  var _examples = function _examples() {\n    // Date\n    Inputmask({\n      \"mask\": \"99/99/9999\"\n    }).mask(\"#kt_inputmask_1\");\n\n    // Phone \n    Inputmask({\n      \"mask\": \"(999) 999-9999\"\n    }).mask(\"#kt_inputmask_2\");\n\n    // Placeholder \n    Inputmask({\n      \"mask\": \"(999) 999-9999\",\n      \"placeholder\": \"(999) 999-9999\"\n    }).mask(\"#kt_inputmask_3\");\n\n    // Repeating \n    Inputmask({\n      \"mask\": \"9\",\n      \"repeat\": 10,\n      \"greedy\": false\n    }).mask(\"#kt_inputmask_4\");\n\n    // Right aligned \n    Inputmask(\"decimal\", {\n      \"rightAlignNumerics\": false\n    }).mask(\"#kt_inputmask_5\");\n\n    // Currency\n    Inputmask(\"€ 999.999.999,99\", {\n      \"numericInput\": true\n    }).mask(\"#kt_inputmask_6\");\n\n    // Ip address\n    Inputmask({\n      \"mask\": \"999.999.999.999\"\n    }).mask(\"#kt_inputmask_7\");\n\n    // Email address\n    Inputmask({\n      mask: \"*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}]\",\n      greedy: false,\n      onBeforePaste: function onBeforePaste(pastedValue, opts) {\n        pastedValue = pastedValue.toLowerCase();\n        return pastedValue.replace(\"mailto:\", \"\");\n      },\n      definitions: {\n        \"*\": {\n          validator: '[0-9A-Za-z!#$%&\"*+/=?^_`{|}~\\-]',\n          cardinality: 1,\n          casing: \"lower\"\n        }\n      }\n    }).mask(\"#kt_inputmask_8\");\n  };\n  return {\n    // Public Functions\n    init: function init(element) {\n      _examples();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTFormsInputmaskDemos.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvc3JjL2pzL2N1c3RvbS9kb2N1bWVudGF0aW9uL2Zvcm1zL2lucHV0bWFzay5qcy5qcyIsIm1hcHBpbmdzIjoiQUFBYTs7QUFFYjtBQUNBLElBQUlBLHFCQUFxQixHQUFHLFlBQVc7RUFDbkM7RUFDQSxJQUFJQyxTQUFTLEdBQUcsU0FBWkEsU0FBUyxHQUFjO0lBQ3ZCO0lBQ0FDLFNBQVMsQ0FBQztNQUNOLE1BQU0sRUFBRztJQUNiLENBQUMsQ0FBQyxDQUFDQyxJQUFJLENBQUMsaUJBQWlCLENBQUM7O0lBRTFCO0lBQ0FELFNBQVMsQ0FBQztNQUNOLE1BQU0sRUFBRztJQUNiLENBQUMsQ0FBQyxDQUFDQyxJQUFJLENBQUMsaUJBQWlCLENBQUM7O0lBRTFCO0lBQ0FELFNBQVMsQ0FBQztNQUNOLE1BQU0sRUFBRyxnQkFBZ0I7TUFDekIsYUFBYSxFQUFFO0lBQ25CLENBQUMsQ0FBQyxDQUFDQyxJQUFJLENBQUMsaUJBQWlCLENBQUM7O0lBRTFCO0lBQ0FELFNBQVMsQ0FBQztNQUNOLE1BQU0sRUFBRSxHQUFHO01BQ1gsUUFBUSxFQUFFLEVBQUU7TUFDWixRQUFRLEVBQUU7SUFDZCxDQUFDLENBQUMsQ0FBQ0MsSUFBSSxDQUFDLGlCQUFpQixDQUFDOztJQUUxQjtJQUNBRCxTQUFTLENBQUMsU0FBUyxFQUFFO01BQ2pCLG9CQUFvQixFQUFFO0lBQzFCLENBQUMsQ0FBQyxDQUFDQyxJQUFJLENBQUMsaUJBQWlCLENBQUM7O0lBRTFCO0lBQ0FELFNBQVMsQ0FBQyxrQkFBa0IsRUFBRTtNQUMxQixjQUFjLEVBQUU7SUFDcEIsQ0FBQyxDQUFDLENBQUNDLElBQUksQ0FBQyxpQkFBaUIsQ0FBQzs7SUFFMUI7SUFDQUQsU0FBUyxDQUFDO01BQ04sTUFBTSxFQUFFO0lBQ1osQ0FBQyxDQUFDLENBQUNDLElBQUksQ0FBQyxpQkFBaUIsQ0FBQzs7SUFFMUI7SUFDQUQsU0FBUyxDQUFDO01BQ05DLElBQUksRUFBRSxpRUFBaUU7TUFDdkVDLE1BQU0sRUFBRSxLQUFLO01BQ2JDLGFBQWEsRUFBRSx1QkFBVUMsV0FBVyxFQUFFQyxJQUFJLEVBQUU7UUFDeENELFdBQVcsR0FBR0EsV0FBVyxDQUFDRSxXQUFXLEVBQUU7UUFDdkMsT0FBT0YsV0FBVyxDQUFDRyxPQUFPLENBQUMsU0FBUyxFQUFFLEVBQUUsQ0FBQztNQUM3QyxDQUFDO01BQ0RDLFdBQVcsRUFBRTtRQUNULEdBQUcsRUFBRTtVQUNEQyxTQUFTLEVBQUUsaUNBQWlDO1VBQzVDQyxXQUFXLEVBQUUsQ0FBQztVQUNkQyxNQUFNLEVBQUU7UUFDWjtNQUNKO0lBQ0osQ0FBQyxDQUFDLENBQUNWLElBQUksQ0FBQyxpQkFBaUIsQ0FBQztFQUM5QixDQUFDO0VBRUQsT0FBTztJQUNIO0lBQ0FXLElBQUksRUFBRSxjQUFTQyxPQUFPLEVBQUU7TUFDcEJkLFNBQVMsRUFBRTtJQUNmO0VBQ0osQ0FBQztBQUNMLENBQUMsRUFBRTs7QUFFSDtBQUNBZSxNQUFNLENBQUNDLGtCQUFrQixDQUFDLFlBQVc7RUFDakNqQixxQkFBcUIsQ0FBQ2MsSUFBSSxFQUFFO0FBQ2hDLENBQUMsQ0FBQyIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9zcmMvanMvY3VzdG9tL2RvY3VtZW50YXRpb24vZm9ybXMvaW5wdXRtYXNrLmpzPzAxNWIiXSwic291cmNlc0NvbnRlbnQiOlsiXCJ1c2Ugc3RyaWN0XCI7XHJcblxyXG4vLyBDbGFzcyBkZWZpbml0aW9uXHJcbnZhciBLVEZvcm1zSW5wdXRtYXNrRGVtb3MgPSBmdW5jdGlvbigpIHtcclxuICAgIC8vIFByaXZhdGUgZnVuY3Rpb25zXHJcbiAgICB2YXIgX2V4YW1wbGVzID0gZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgLy8gRGF0ZVxyXG4gICAgICAgIElucHV0bWFzayh7XHJcbiAgICAgICAgICAgIFwibWFza1wiIDogXCI5OS85OS85OTk5XCJcclxuICAgICAgICB9KS5tYXNrKFwiI2t0X2lucHV0bWFza18xXCIpO1xyXG5cclxuICAgICAgICAvLyBQaG9uZSBcclxuICAgICAgICBJbnB1dG1hc2soe1xyXG4gICAgICAgICAgICBcIm1hc2tcIiA6IFwiKDk5OSkgOTk5LTk5OTlcIlxyXG4gICAgICAgIH0pLm1hc2soXCIja3RfaW5wdXRtYXNrXzJcIik7XHJcblxyXG4gICAgICAgIC8vIFBsYWNlaG9sZGVyIFxyXG4gICAgICAgIElucHV0bWFzayh7XHJcbiAgICAgICAgICAgIFwibWFza1wiIDogXCIoOTk5KSA5OTktOTk5OVwiLFxyXG4gICAgICAgICAgICBcInBsYWNlaG9sZGVyXCI6IFwiKDk5OSkgOTk5LTk5OTlcIixcclxuICAgICAgICB9KS5tYXNrKFwiI2t0X2lucHV0bWFza18zXCIpO1xyXG5cclxuICAgICAgICAvLyBSZXBlYXRpbmcgXHJcbiAgICAgICAgSW5wdXRtYXNrKHtcclxuICAgICAgICAgICAgXCJtYXNrXCI6IFwiOVwiLFxyXG4gICAgICAgICAgICBcInJlcGVhdFwiOiAxMCxcclxuICAgICAgICAgICAgXCJncmVlZHlcIjogZmFsc2VcclxuICAgICAgICB9KS5tYXNrKFwiI2t0X2lucHV0bWFza180XCIpO1xyXG5cclxuICAgICAgICAvLyBSaWdodCBhbGlnbmVkIFxyXG4gICAgICAgIElucHV0bWFzayhcImRlY2ltYWxcIiwge1xyXG4gICAgICAgICAgICBcInJpZ2h0QWxpZ25OdW1lcmljc1wiOiBmYWxzZVxyXG4gICAgICAgIH0pLm1hc2soXCIja3RfaW5wdXRtYXNrXzVcIik7XHJcblxyXG4gICAgICAgIC8vIEN1cnJlbmN5XHJcbiAgICAgICAgSW5wdXRtYXNrKFwi4oKsIDk5OS45OTkuOTk5LDk5XCIsIHtcclxuICAgICAgICAgICAgXCJudW1lcmljSW5wdXRcIjogdHJ1ZVxyXG4gICAgICAgIH0pLm1hc2soXCIja3RfaW5wdXRtYXNrXzZcIik7XHJcblxyXG4gICAgICAgIC8vIElwIGFkZHJlc3NcclxuICAgICAgICBJbnB1dG1hc2soe1xyXG4gICAgICAgICAgICBcIm1hc2tcIjogXCI5OTkuOTk5Ljk5OS45OTlcIlxyXG4gICAgICAgIH0pLm1hc2soXCIja3RfaW5wdXRtYXNrXzdcIik7XHJcblxyXG4gICAgICAgIC8vIEVtYWlsIGFkZHJlc3NcclxuICAgICAgICBJbnB1dG1hc2soe1xyXG4gICAgICAgICAgICBtYXNrOiBcIip7MSwyMH1bLip7MSwyMH1dWy4qezEsMjB9XVsuKnsxLDIwfV1AKnsxLDIwfVsuKnsyLDZ9XVsuKnsxLDJ9XVwiLFxyXG4gICAgICAgICAgICBncmVlZHk6IGZhbHNlLFxyXG4gICAgICAgICAgICBvbkJlZm9yZVBhc3RlOiBmdW5jdGlvbiAocGFzdGVkVmFsdWUsIG9wdHMpIHtcclxuICAgICAgICAgICAgICAgIHBhc3RlZFZhbHVlID0gcGFzdGVkVmFsdWUudG9Mb3dlckNhc2UoKTtcclxuICAgICAgICAgICAgICAgIHJldHVybiBwYXN0ZWRWYWx1ZS5yZXBsYWNlKFwibWFpbHRvOlwiLCBcIlwiKTtcclxuICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgZGVmaW5pdGlvbnM6IHtcclxuICAgICAgICAgICAgICAgIFwiKlwiOiB7XHJcbiAgICAgICAgICAgICAgICAgICAgdmFsaWRhdG9yOiAnWzAtOUEtWmEteiEjJCUmXCIqKy89P15fYHt8fX5cXC1dJyxcclxuICAgICAgICAgICAgICAgICAgICBjYXJkaW5hbGl0eTogMSxcclxuICAgICAgICAgICAgICAgICAgICBjYXNpbmc6IFwibG93ZXJcIlxyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfSkubWFzayhcIiNrdF9pbnB1dG1hc2tfOFwiKTtcclxuICAgIH1cclxuXHJcbiAgICByZXR1cm4ge1xyXG4gICAgICAgIC8vIFB1YmxpYyBGdW5jdGlvbnNcclxuICAgICAgICBpbml0OiBmdW5jdGlvbihlbGVtZW50KSB7XHJcbiAgICAgICAgICAgIF9leGFtcGxlcygpO1xyXG4gICAgICAgIH1cclxuICAgIH07XHJcbn0oKTtcclxuXHJcbi8vIE9uIGRvY3VtZW50IHJlYWR5XHJcbktUVXRpbC5vbkRPTUNvbnRlbnRMb2FkZWQoZnVuY3Rpb24oKSB7XHJcbiAgICBLVEZvcm1zSW5wdXRtYXNrRGVtb3MuaW5pdCgpO1xyXG59KTtcclxuIl0sIm5hbWVzIjpbIktURm9ybXNJbnB1dG1hc2tEZW1vcyIsIl9leGFtcGxlcyIsIklucHV0bWFzayIsIm1hc2siLCJncmVlZHkiLCJvbkJlZm9yZVBhc3RlIiwicGFzdGVkVmFsdWUiLCJvcHRzIiwidG9Mb3dlckNhc2UiLCJyZXBsYWNlIiwiZGVmaW5pdGlvbnMiLCJ2YWxpZGF0b3IiLCJjYXJkaW5hbGl0eSIsImNhc2luZyIsImluaXQiLCJlbGVtZW50IiwiS1RVdGlsIiwib25ET01Db250ZW50TG9hZGVkIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/src/js/custom/documentation/forms/inputmask.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/src/js/custom/documentation/forms/inputmask.js"]();
/******/ 	
/******/ })()
;