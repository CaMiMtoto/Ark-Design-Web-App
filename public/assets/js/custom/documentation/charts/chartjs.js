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

/***/ "./resources/src/js/custom/documentation/charts/chartjs.js":
/*!*****************************************************************!*\
  !*** ./resources/src/js/custom/documentation/charts/chartjs.js ***!
  \*****************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTGeneralChartJS = function () {\n  // Randomizer function\n  function getRandom() {\n    var min = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 1;\n    var max = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 100;\n    return Math.floor(Math.random() * (max - min) + min);\n  }\n  function generateRandomData() {\n    var min = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 1;\n    var max = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 100;\n    var count = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : 10;\n    var arr = [];\n    for (var i = 0; i < count; i++) {\n      arr.push(getRandom(min, max));\n    }\n    return arr;\n  }\n\n  // Private functions\n  var example1 = function example1() {\n    // Define chart element\n    var ctx = document.getElementById('kt_chartjs_1');\n\n    // Define colors\n    var primaryColor = KTUtil.getCssVariableValue('--bs-primary');\n    var dangerColor = KTUtil.getCssVariableValue('--bs-danger');\n    var successColor = KTUtil.getCssVariableValue('--bs-success');\n\n    // Define fonts\n    var fontFamily = KTUtil.getCssVariableValue('--bs-font-sans-serif');\n\n    // Chart labels\n    var labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];\n\n    // Chart data\n    var data = {\n      labels: labels,\n      datasets: [{\n        label: 'Dataset 1',\n        data: generateRandomData(1, 100, 12),\n        backgroundColor: primaryColor,\n        stack: 'Stack 0'\n      }, {\n        label: 'Dataset 2',\n        data: generateRandomData(1, 100, 12),\n        backgroundColor: dangerColor,\n        stack: 'Stack 1'\n      }, {\n        label: 'Dataset 3',\n        data: generateRandomData(1, 100, 12),\n        backgroundColor: successColor,\n        stack: 'Stack 2'\n      }]\n    };\n\n    // Chart config\n    var config = {\n      type: 'bar',\n      data: data,\n      options: {\n        plugins: {\n          title: {\n            display: false\n          }\n        },\n        responsive: true,\n        interaction: {\n          intersect: false\n        },\n        scales: {\n          x: {\n            stacked: true\n          },\n          y: {\n            stacked: true\n          }\n        }\n      }\n    };\n\n    // Init ChartJS -- for more info, please visit: https://www.chartjs.org/docs/latest/\n    var myChart = new Chart(ctx, config);\n  };\n  var example2 = function example2() {\n    // Define chart element\n    var ctx = document.getElementById('kt_chartjs_2');\n\n    // Define colors\n    var primaryColor = KTUtil.getCssVariableValue('--bs-primary');\n    var dangerColor = KTUtil.getCssVariableValue('--bs-danger');\n    var successColor = KTUtil.getCssVariableValue('--bs-success');\n\n    // Define fonts\n    var fontFamily = KTUtil.getCssVariableValue('--bs-font-sans-serif');\n\n    // Chart labels\n    var labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];\n\n    // Chart data\n    var data = {\n      labels: labels,\n      datasets: [{\n        label: 'Dataset 1',\n        data: generateRandomData(1, 50, 7),\n        borderColor: primaryColor,\n        backgroundColor: 'transparent'\n      }, {\n        label: 'Dataset 2',\n        data: generateRandomData(1, 50, 7),\n        borderColor: dangerColor,\n        backgroundColor: 'transparent'\n      }]\n    };\n\n    // Chart config\n    var config = {\n      type: 'line',\n      data: data,\n      options: {\n        plugins: {\n          title: {\n            display: false\n          }\n        },\n        responsive: true\n      }\n    };\n\n    // Init ChartJS -- for more info, please visit: https://www.chartjs.org/docs/latest/\n    var myChart = new Chart(ctx, config);\n  };\n  var example3 = function example3() {\n    // Define chart element\n    var ctx = document.getElementById('kt_chartjs_3');\n\n    // Define colors\n    var primaryColor = KTUtil.getCssVariableValue('--bs-primary');\n    var dangerColor = KTUtil.getCssVariableValue('--bs-danger');\n    var successColor = KTUtil.getCssVariableValue('--bs-success');\n    var warningColor = KTUtil.getCssVariableValue('--bs-warning');\n    var infoColor = KTUtil.getCssVariableValue('--bs-info');\n\n    // Chart labels\n    var labels = ['January', 'February', 'March', 'April', 'May'];\n\n    // Chart data\n    var data = {\n      labels: labels,\n      datasets: [{\n        label: 'Dataset 1',\n        data: generateRandomData(1, 100, 5),\n        backgroundColor: [primaryColor, dangerColor, successColor, warningColor, infoColor]\n      }]\n    };\n\n    // Chart config\n    var config = {\n      type: 'pie',\n      data: data,\n      options: {\n        plugins: {\n          title: {\n            display: false\n          }\n        },\n        responsive: true\n      }\n    };\n\n    // Init ChartJS -- for more info, please visit: https://www.chartjs.org/docs/latest/\n    var myChart = new Chart(ctx, config);\n  };\n  var example4 = function example4() {\n    // Define chart element\n    var ctx = document.getElementById('kt_chartjs_4');\n\n    // Define colors\n    var primaryColor = KTUtil.getCssVariableValue('--bs-primary');\n    var dangerColor = KTUtil.getCssVariableValue('--bs-danger');\n    var dangerLightColor = KTUtil.getCssVariableValue('--bs-light-danger');\n\n    // Define fonts\n    var fontFamily = KTUtil.getCssVariableValue('--bs-font-sans-serif');\n\n    // Chart labels\n    var labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];\n\n    // Chart data\n    var data = {\n      labels: labels,\n      datasets: [{\n        label: 'Dataset 1',\n        data: generateRandomData(50, 100, 12),\n        borderColor: primaryColor,\n        backgroundColor: 'transparent',\n        stack: 'combined'\n      }, {\n        label: 'Dataset 2',\n        data: generateRandomData(1, 60, 12),\n        backgroundColor: dangerColor,\n        borderColor: dangerColor,\n        stack: 'combined',\n        type: 'bar'\n      }]\n    };\n\n    // Chart config\n    var config = {\n      type: 'line',\n      data: data,\n      options: {\n        plugins: {\n          title: {\n            display: false\n          }\n        },\n        responsive: true,\n        interaction: {\n          intersect: false\n        },\n        scales: {\n          y: {\n            stacked: true\n          }\n        }\n      },\n      defaults: {\n        font: {\n          family: 'inherit'\n        }\n      }\n    };\n\n    // Init ChartJS -- for more info, please visit: https://www.chartjs.org/docs/latest/\n    var myChart = new Chart(ctx, config);\n  };\n  var example5 = function example5() {\n    // Define chart element\n    var ctx = document.getElementById('kt_chartjs_5');\n\n    // Define colors\n    var infoColor = KTUtil.getCssVariableValue('--bs-info');\n    var infoLightColor = KTUtil.getCssVariableValue('--bs-light-info');\n    var warningColor = KTUtil.getCssVariableValue('--bs-warning');\n    var warningLightColor = KTUtil.getCssVariableValue('--bs-light-warning');\n    var primaryColor = KTUtil.getCssVariableValue('--bs-primary');\n    var primaryLightColor = KTUtil.getCssVariableValue('--bs-light-primary');\n\n    // Define fonts\n    var fontFamily = KTUtil.getCssVariableValue('--bs-font-sans-serif');\n\n    // Chart labels\n    var labels = ['January', 'February', 'March', 'April', 'May', 'June'];\n\n    // Chart data\n    var data = {\n      labels: labels,\n      datasets: [{\n        label: 'Dataset 1',\n        data: generateRandomData(20, 80, 6),\n        borderColor: infoColor,\n        backgroundColor: infoLightColor\n      }, {\n        label: 'Dataset 2',\n        data: generateRandomData(10, 60, 6),\n        backgroundColor: warningLightColor,\n        borderColor: warningColor\n      }, {\n        label: 'Dataset 3',\n        data: generateRandomData(0, 80, 6),\n        backgroundColor: primaryLightColor,\n        borderColor: primaryColor\n      }]\n    };\n\n    // Chart config\n    var config = {\n      type: 'radar',\n      data: data,\n      options: {\n        plugins: {\n          title: {\n            display: false\n          }\n        },\n        responsive: true\n      }\n    };\n\n    // Init ChartJS -- for more info, please visit: https://www.chartjs.org/docs/latest/\n    var myChart = new Chart(ctx, config);\n  };\n  return {\n    // Public Functions\n    init: function init() {\n      // Global font settings: https://www.chartjs.org/docs/latest/general/fonts.html\n      Chart.defaults.font.size = 13;\n      Chart.defaults.font.family = KTUtil.getCssVariableValue('--bs-font-sans-serif');\n      example1();\n      example2();\n      example3();\n      example4();\n      example5();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTGeneralChartJS.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvc3JjL2pzL2N1c3RvbS9kb2N1bWVudGF0aW9uL2NoYXJ0cy9jaGFydGpzLmpzLmpzIiwibWFwcGluZ3MiOiJBQUFhOztBQUViO0FBQ0EsSUFBSUEsZ0JBQWdCLEdBQUcsWUFBWTtFQUMvQjtFQUNBLFNBQVNDLFNBQVMsR0FBcUI7SUFBQSxJQUFwQkMsR0FBRyx1RUFBRyxDQUFDO0lBQUEsSUFBRUMsR0FBRyx1RUFBRyxHQUFHO0lBQ2pDLE9BQU9DLElBQUksQ0FBQ0MsS0FBSyxDQUFDRCxJQUFJLENBQUNFLE1BQU0sRUFBRSxJQUFJSCxHQUFHLEdBQUdELEdBQUcsQ0FBQyxHQUFHQSxHQUFHLENBQUM7RUFDeEQ7RUFFQSxTQUFTSyxrQkFBa0IsR0FBaUM7SUFBQSxJQUFoQ0wsR0FBRyx1RUFBRyxDQUFDO0lBQUEsSUFBRUMsR0FBRyx1RUFBRyxHQUFHO0lBQUEsSUFBRUssS0FBSyx1RUFBRyxFQUFFO0lBQ3RELElBQUlDLEdBQUcsR0FBRyxFQUFFO0lBQ1osS0FBSyxJQUFJQyxDQUFDLEdBQUcsQ0FBQyxFQUFFQSxDQUFDLEdBQUdGLEtBQUssRUFBRUUsQ0FBQyxFQUFFLEVBQUU7TUFDNUJELEdBQUcsQ0FBQ0UsSUFBSSxDQUFDVixTQUFTLENBQUNDLEdBQUcsRUFBRUMsR0FBRyxDQUFDLENBQUM7SUFDakM7SUFDQSxPQUFPTSxHQUFHO0VBQ2Q7O0VBRUE7RUFDQSxJQUFJRyxRQUFRLEdBQUcsU0FBWEEsUUFBUSxHQUFlO0lBQ3ZCO0lBQ0EsSUFBSUMsR0FBRyxHQUFHQyxRQUFRLENBQUNDLGNBQWMsQ0FBQyxjQUFjLENBQUM7O0lBRWpEO0lBQ0EsSUFBSUMsWUFBWSxHQUFHQyxNQUFNLENBQUNDLG1CQUFtQixDQUFDLGNBQWMsQ0FBQztJQUM3RCxJQUFJQyxXQUFXLEdBQUdGLE1BQU0sQ0FBQ0MsbUJBQW1CLENBQUMsYUFBYSxDQUFDO0lBQzNELElBQUlFLFlBQVksR0FBR0gsTUFBTSxDQUFDQyxtQkFBbUIsQ0FBQyxjQUFjLENBQUM7O0lBRTdEO0lBQ0EsSUFBSUcsVUFBVSxHQUFHSixNQUFNLENBQUNDLG1CQUFtQixDQUFDLHNCQUFzQixDQUFDOztJQUVuRTtJQUNBLElBQU1JLE1BQU0sR0FBRyxDQUFDLFNBQVMsRUFBRSxVQUFVLEVBQUUsT0FBTyxFQUFFLE9BQU8sRUFBRSxLQUFLLEVBQUUsTUFBTSxFQUFFLE1BQU0sRUFBRSxRQUFRLEVBQUUsV0FBVyxFQUFFLFNBQVMsRUFBRSxVQUFVLEVBQUUsVUFBVSxDQUFDOztJQUV6STtJQUNBLElBQU1DLElBQUksR0FBRztNQUNURCxNQUFNLEVBQUVBLE1BQU07TUFDZEUsUUFBUSxFQUFFLENBQ047UUFDSUMsS0FBSyxFQUFFLFdBQVc7UUFDbEJGLElBQUksRUFBRWhCLGtCQUFrQixDQUFDLENBQUMsRUFBRSxHQUFHLEVBQUUsRUFBRSxDQUFDO1FBQ3BDbUIsZUFBZSxFQUFFVixZQUFZO1FBQzdCVyxLQUFLLEVBQUU7TUFDWCxDQUFDLEVBQ0Q7UUFDSUYsS0FBSyxFQUFFLFdBQVc7UUFDbEJGLElBQUksRUFBRWhCLGtCQUFrQixDQUFDLENBQUMsRUFBRSxHQUFHLEVBQUUsRUFBRSxDQUFDO1FBQ3BDbUIsZUFBZSxFQUFFUCxXQUFXO1FBQzVCUSxLQUFLLEVBQUU7TUFDWCxDQUFDLEVBQ0Q7UUFDSUYsS0FBSyxFQUFFLFdBQVc7UUFDbEJGLElBQUksRUFBRWhCLGtCQUFrQixDQUFDLENBQUMsRUFBRSxHQUFHLEVBQUUsRUFBRSxDQUFDO1FBQ3BDbUIsZUFBZSxFQUFFTixZQUFZO1FBQzdCTyxLQUFLLEVBQUU7TUFDWCxDQUFDO0lBRVQsQ0FBQzs7SUFFRDtJQUNBLElBQU1DLE1BQU0sR0FBRztNQUNYQyxJQUFJLEVBQUUsS0FBSztNQUNYTixJQUFJLEVBQUVBLElBQUk7TUFDVk8sT0FBTyxFQUFFO1FBQ0xDLE9BQU8sRUFBRTtVQUNMQyxLQUFLLEVBQUU7WUFDSEMsT0FBTyxFQUFFO1VBQ2I7UUFDSixDQUFDO1FBQ0RDLFVBQVUsRUFBRSxJQUFJO1FBQ2hCQyxXQUFXLEVBQUU7VUFDVEMsU0FBUyxFQUFFO1FBQ2YsQ0FBQztRQUNEQyxNQUFNLEVBQUU7VUFDSkMsQ0FBQyxFQUFFO1lBQ0NDLE9BQU8sRUFBRTtVQUNiLENBQUM7VUFDREMsQ0FBQyxFQUFFO1lBQ0NELE9BQU8sRUFBRTtVQUNiO1FBQ0o7TUFDSjtJQUNKLENBQUM7O0lBRUQ7SUFDQSxJQUFJRSxPQUFPLEdBQUcsSUFBSUMsS0FBSyxDQUFDN0IsR0FBRyxFQUFFZSxNQUFNLENBQUM7RUFDeEMsQ0FBQztFQUVELElBQUllLFFBQVEsR0FBRyxTQUFYQSxRQUFRLEdBQWU7SUFDdkI7SUFDQSxJQUFJOUIsR0FBRyxHQUFHQyxRQUFRLENBQUNDLGNBQWMsQ0FBQyxjQUFjLENBQUM7O0lBRWpEO0lBQ0EsSUFBSUMsWUFBWSxHQUFHQyxNQUFNLENBQUNDLG1CQUFtQixDQUFDLGNBQWMsQ0FBQztJQUM3RCxJQUFJQyxXQUFXLEdBQUdGLE1BQU0sQ0FBQ0MsbUJBQW1CLENBQUMsYUFBYSxDQUFDO0lBQzNELElBQUlFLFlBQVksR0FBR0gsTUFBTSxDQUFDQyxtQkFBbUIsQ0FBQyxjQUFjLENBQUM7O0lBRTdEO0lBQ0EsSUFBSUcsVUFBVSxHQUFHSixNQUFNLENBQUNDLG1CQUFtQixDQUFDLHNCQUFzQixDQUFDOztJQUVuRTtJQUNBLElBQU1JLE1BQU0sR0FBRyxDQUFDLFNBQVMsRUFBRSxVQUFVLEVBQUUsT0FBTyxFQUFFLE9BQU8sRUFBRSxLQUFLLEVBQUUsTUFBTSxFQUFFLE1BQU0sQ0FBQzs7SUFFL0U7SUFDQSxJQUFNQyxJQUFJLEdBQUc7TUFDVEQsTUFBTSxFQUFFQSxNQUFNO01BQ2RFLFFBQVEsRUFBRSxDQUNOO1FBQ0lDLEtBQUssRUFBRSxXQUFXO1FBQ2xCRixJQUFJLEVBQUVoQixrQkFBa0IsQ0FBQyxDQUFDLEVBQUUsRUFBRSxFQUFFLENBQUMsQ0FBQztRQUNsQ3FDLFdBQVcsRUFBRTVCLFlBQVk7UUFDekJVLGVBQWUsRUFBRTtNQUNyQixDQUFDLEVBQ0Q7UUFDSUQsS0FBSyxFQUFFLFdBQVc7UUFDbEJGLElBQUksRUFBRWhCLGtCQUFrQixDQUFDLENBQUMsRUFBRSxFQUFFLEVBQUUsQ0FBQyxDQUFDO1FBQ2xDcUMsV0FBVyxFQUFFekIsV0FBVztRQUN4Qk8sZUFBZSxFQUFFO01BQ3JCLENBQUM7SUFFVCxDQUFDOztJQUVEO0lBQ0EsSUFBTUUsTUFBTSxHQUFHO01BQ1hDLElBQUksRUFBRSxNQUFNO01BQ1pOLElBQUksRUFBRUEsSUFBSTtNQUNWTyxPQUFPLEVBQUU7UUFDTEMsT0FBTyxFQUFFO1VBQ0xDLEtBQUssRUFBRTtZQUNIQyxPQUFPLEVBQUU7VUFDYjtRQUNKLENBQUM7UUFDREMsVUFBVSxFQUFFO01BQ2hCO0lBQ0osQ0FBQzs7SUFFRDtJQUNBLElBQUlPLE9BQU8sR0FBRyxJQUFJQyxLQUFLLENBQUM3QixHQUFHLEVBQUVlLE1BQU0sQ0FBQztFQUN4QyxDQUFDO0VBRUQsSUFBSWlCLFFBQVEsR0FBRyxTQUFYQSxRQUFRLEdBQWU7SUFDdkI7SUFDQSxJQUFJaEMsR0FBRyxHQUFHQyxRQUFRLENBQUNDLGNBQWMsQ0FBQyxjQUFjLENBQUM7O0lBRWpEO0lBQ0EsSUFBSUMsWUFBWSxHQUFHQyxNQUFNLENBQUNDLG1CQUFtQixDQUFDLGNBQWMsQ0FBQztJQUM3RCxJQUFJQyxXQUFXLEdBQUdGLE1BQU0sQ0FBQ0MsbUJBQW1CLENBQUMsYUFBYSxDQUFDO0lBQzNELElBQUlFLFlBQVksR0FBR0gsTUFBTSxDQUFDQyxtQkFBbUIsQ0FBQyxjQUFjLENBQUM7SUFDN0QsSUFBSTRCLFlBQVksR0FBRzdCLE1BQU0sQ0FBQ0MsbUJBQW1CLENBQUMsY0FBYyxDQUFDO0lBQzdELElBQUk2QixTQUFTLEdBQUc5QixNQUFNLENBQUNDLG1CQUFtQixDQUFDLFdBQVcsQ0FBQzs7SUFFdkQ7SUFDQSxJQUFNSSxNQUFNLEdBQUcsQ0FBQyxTQUFTLEVBQUUsVUFBVSxFQUFFLE9BQU8sRUFBRSxPQUFPLEVBQUUsS0FBSyxDQUFDOztJQUUvRDtJQUNBLElBQU1DLElBQUksR0FBRztNQUNURCxNQUFNLEVBQUVBLE1BQU07TUFDZEUsUUFBUSxFQUFFLENBQ047UUFDSUMsS0FBSyxFQUFFLFdBQVc7UUFDbEJGLElBQUksRUFBRWhCLGtCQUFrQixDQUFDLENBQUMsRUFBRSxHQUFHLEVBQUUsQ0FBQyxDQUFDO1FBQ25DbUIsZUFBZSxFQUFFLENBQUNWLFlBQVksRUFBRUcsV0FBVyxFQUFFQyxZQUFZLEVBQUUwQixZQUFZLEVBQUVDLFNBQVM7TUFDdEYsQ0FBQztJQUVULENBQUM7O0lBRUQ7SUFDQSxJQUFNbkIsTUFBTSxHQUFHO01BQ1hDLElBQUksRUFBRSxLQUFLO01BQ1hOLElBQUksRUFBRUEsSUFBSTtNQUNWTyxPQUFPLEVBQUU7UUFDTEMsT0FBTyxFQUFFO1VBQ0xDLEtBQUssRUFBRTtZQUNIQyxPQUFPLEVBQUU7VUFDYjtRQUNKLENBQUM7UUFDREMsVUFBVSxFQUFFO01BQ2hCO0lBQ0osQ0FBQzs7SUFFRDtJQUNBLElBQUlPLE9BQU8sR0FBRyxJQUFJQyxLQUFLLENBQUM3QixHQUFHLEVBQUVlLE1BQU0sQ0FBQztFQUN4QyxDQUFDO0VBRUQsSUFBSW9CLFFBQVEsR0FBRyxTQUFYQSxRQUFRLEdBQWU7SUFDdkI7SUFDQSxJQUFJbkMsR0FBRyxHQUFHQyxRQUFRLENBQUNDLGNBQWMsQ0FBQyxjQUFjLENBQUM7O0lBRWpEO0lBQ0EsSUFBSUMsWUFBWSxHQUFHQyxNQUFNLENBQUNDLG1CQUFtQixDQUFDLGNBQWMsQ0FBQztJQUM3RCxJQUFJQyxXQUFXLEdBQUdGLE1BQU0sQ0FBQ0MsbUJBQW1CLENBQUMsYUFBYSxDQUFDO0lBQzNELElBQUkrQixnQkFBZ0IsR0FBR2hDLE1BQU0sQ0FBQ0MsbUJBQW1CLENBQUMsbUJBQW1CLENBQUM7O0lBRXRFO0lBQ0EsSUFBSUcsVUFBVSxHQUFHSixNQUFNLENBQUNDLG1CQUFtQixDQUFDLHNCQUFzQixDQUFDOztJQUVuRTtJQUNBLElBQU1JLE1BQU0sR0FBRyxDQUFDLFNBQVMsRUFBRSxVQUFVLEVBQUUsT0FBTyxFQUFFLE9BQU8sRUFBRSxLQUFLLEVBQUUsTUFBTSxFQUFFLE1BQU0sRUFBRSxRQUFRLEVBQUUsV0FBVyxFQUFFLFNBQVMsRUFBRSxVQUFVLEVBQUUsVUFBVSxDQUFDOztJQUV6STtJQUNBLElBQU1DLElBQUksR0FBRztNQUNURCxNQUFNLEVBQUVBLE1BQU07TUFDZEUsUUFBUSxFQUFFLENBQ047UUFDSUMsS0FBSyxFQUFFLFdBQVc7UUFDbEJGLElBQUksRUFBRWhCLGtCQUFrQixDQUFDLEVBQUUsRUFBRSxHQUFHLEVBQUUsRUFBRSxDQUFDO1FBQ3JDcUMsV0FBVyxFQUFFNUIsWUFBWTtRQUN6QlUsZUFBZSxFQUFFLGFBQWE7UUFDOUJDLEtBQUssRUFBRTtNQUNYLENBQUMsRUFDRDtRQUNJRixLQUFLLEVBQUUsV0FBVztRQUNsQkYsSUFBSSxFQUFFaEIsa0JBQWtCLENBQUMsQ0FBQyxFQUFFLEVBQUUsRUFBRSxFQUFFLENBQUM7UUFDbkNtQixlQUFlLEVBQUVQLFdBQVc7UUFDNUJ5QixXQUFXLEVBQUV6QixXQUFXO1FBQ3hCUSxLQUFLLEVBQUUsVUFBVTtRQUNqQkUsSUFBSSxFQUFFO01BQ1YsQ0FBQztJQUdULENBQUM7O0lBRUQ7SUFDQSxJQUFNRCxNQUFNLEdBQUc7TUFDWEMsSUFBSSxFQUFFLE1BQU07TUFDWk4sSUFBSSxFQUFFQSxJQUFJO01BQ1ZPLE9BQU8sRUFBRTtRQUNMQyxPQUFPLEVBQUU7VUFDTEMsS0FBSyxFQUFFO1lBQ0hDLE9BQU8sRUFBRTtVQUNiO1FBQ0osQ0FBQztRQUNEQyxVQUFVLEVBQUUsSUFBSTtRQUNoQkMsV0FBVyxFQUFFO1VBQ1RDLFNBQVMsRUFBRTtRQUNmLENBQUM7UUFDREMsTUFBTSxFQUFFO1VBQ0pHLENBQUMsRUFBRTtZQUNDRCxPQUFPLEVBQUU7VUFDYjtRQUNKO01BQ0osQ0FBQztNQUNEVyxRQUFRLEVBQUU7UUFDTkMsSUFBSSxFQUFFO1VBQ0ZDLE1BQU0sRUFBRTtRQUNaO01BQ0o7SUFDSixDQUFDOztJQUVEO0lBQ0EsSUFBSVgsT0FBTyxHQUFHLElBQUlDLEtBQUssQ0FBQzdCLEdBQUcsRUFBRWUsTUFBTSxDQUFDO0VBQ3hDLENBQUM7RUFFRCxJQUFJeUIsUUFBUSxHQUFHLFNBQVhBLFFBQVEsR0FBZTtJQUN2QjtJQUNBLElBQUl4QyxHQUFHLEdBQUdDLFFBQVEsQ0FBQ0MsY0FBYyxDQUFDLGNBQWMsQ0FBQzs7SUFFakQ7SUFDQSxJQUFJZ0MsU0FBUyxHQUFHOUIsTUFBTSxDQUFDQyxtQkFBbUIsQ0FBQyxXQUFXLENBQUM7SUFDdkQsSUFBSW9DLGNBQWMsR0FBR3JDLE1BQU0sQ0FBQ0MsbUJBQW1CLENBQUMsaUJBQWlCLENBQUM7SUFDbEUsSUFBSTRCLFlBQVksR0FBRzdCLE1BQU0sQ0FBQ0MsbUJBQW1CLENBQUMsY0FBYyxDQUFDO0lBQzdELElBQUlxQyxpQkFBaUIsR0FBR3RDLE1BQU0sQ0FBQ0MsbUJBQW1CLENBQUMsb0JBQW9CLENBQUM7SUFDeEUsSUFBSUYsWUFBWSxHQUFHQyxNQUFNLENBQUNDLG1CQUFtQixDQUFDLGNBQWMsQ0FBQztJQUM3RCxJQUFJc0MsaUJBQWlCLEdBQUd2QyxNQUFNLENBQUNDLG1CQUFtQixDQUFDLG9CQUFvQixDQUFDOztJQUV4RTtJQUNBLElBQUlHLFVBQVUsR0FBR0osTUFBTSxDQUFDQyxtQkFBbUIsQ0FBQyxzQkFBc0IsQ0FBQzs7SUFFbkU7SUFDQSxJQUFNSSxNQUFNLEdBQUcsQ0FBQyxTQUFTLEVBQUUsVUFBVSxFQUFFLE9BQU8sRUFBRSxPQUFPLEVBQUUsS0FBSyxFQUFFLE1BQU0sQ0FBQzs7SUFFdkU7SUFDQSxJQUFNQyxJQUFJLEdBQUc7TUFDVEQsTUFBTSxFQUFFQSxNQUFNO01BQ2RFLFFBQVEsRUFBRSxDQUNOO1FBQ0lDLEtBQUssRUFBRSxXQUFXO1FBQ2xCRixJQUFJLEVBQUVoQixrQkFBa0IsQ0FBQyxFQUFFLEVBQUUsRUFBRSxFQUFFLENBQUMsQ0FBQztRQUNuQ3FDLFdBQVcsRUFBRUcsU0FBUztRQUN0QnJCLGVBQWUsRUFBRTRCO01BQ3JCLENBQUMsRUFDRDtRQUNJN0IsS0FBSyxFQUFFLFdBQVc7UUFDbEJGLElBQUksRUFBRWhCLGtCQUFrQixDQUFDLEVBQUUsRUFBRSxFQUFFLEVBQUUsQ0FBQyxDQUFDO1FBQ25DbUIsZUFBZSxFQUFFNkIsaUJBQWlCO1FBQ2xDWCxXQUFXLEVBQUVFO01BQ2pCLENBQUMsRUFDRDtRQUNJckIsS0FBSyxFQUFFLFdBQVc7UUFDbEJGLElBQUksRUFBRWhCLGtCQUFrQixDQUFDLENBQUMsRUFBRSxFQUFFLEVBQUUsQ0FBQyxDQUFDO1FBQ2xDbUIsZUFBZSxFQUFFOEIsaUJBQWlCO1FBQ2xDWixXQUFXLEVBQUU1QjtNQUNqQixDQUFDO0lBRVQsQ0FBQzs7SUFFRDtJQUNBLElBQU1ZLE1BQU0sR0FBRztNQUNYQyxJQUFJLEVBQUUsT0FBTztNQUNiTixJQUFJLEVBQUVBLElBQUk7TUFDVk8sT0FBTyxFQUFFO1FBQ0xDLE9BQU8sRUFBRTtVQUNMQyxLQUFLLEVBQUU7WUFDSEMsT0FBTyxFQUFFO1VBQ2I7UUFDSixDQUFDO1FBQ0RDLFVBQVUsRUFBRTtNQUNoQjtJQUNKLENBQUM7O0lBRUQ7SUFDQSxJQUFJTyxPQUFPLEdBQUcsSUFBSUMsS0FBSyxDQUFDN0IsR0FBRyxFQUFFZSxNQUFNLENBQUM7RUFDeEMsQ0FBQztFQUVELE9BQU87SUFDSDtJQUNBNkIsSUFBSSxFQUFFLGdCQUFZO01BQ2Q7TUFDQWYsS0FBSyxDQUFDUSxRQUFRLENBQUNDLElBQUksQ0FBQ08sSUFBSSxHQUFHLEVBQUU7TUFDN0JoQixLQUFLLENBQUNRLFFBQVEsQ0FBQ0MsSUFBSSxDQUFDQyxNQUFNLEdBQUduQyxNQUFNLENBQUNDLG1CQUFtQixDQUFDLHNCQUFzQixDQUFDO01BRS9FTixRQUFRLEVBQUU7TUFDVitCLFFBQVEsRUFBRTtNQUNWRSxRQUFRLEVBQUU7TUFDVkcsUUFBUSxFQUFFO01BQ1ZLLFFBQVEsRUFBRTtJQUNkO0VBQ0osQ0FBQztBQUNMLENBQUMsRUFBRTs7QUFFSDtBQUNBcEMsTUFBTSxDQUFDMEMsa0JBQWtCLENBQUMsWUFBWTtFQUNsQzNELGdCQUFnQixDQUFDeUQsSUFBSSxFQUFFO0FBQzNCLENBQUMsQ0FBQyIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9zcmMvanMvY3VzdG9tL2RvY3VtZW50YXRpb24vY2hhcnRzL2NoYXJ0anMuanM/ZmQ0ZSJdLCJzb3VyY2VzQ29udGVudCI6WyJcInVzZSBzdHJpY3RcIjtcblxuLy8gQ2xhc3MgZGVmaW5pdGlvblxudmFyIEtUR2VuZXJhbENoYXJ0SlMgPSBmdW5jdGlvbiAoKSB7XG4gICAgLy8gUmFuZG9taXplciBmdW5jdGlvblxuICAgIGZ1bmN0aW9uIGdldFJhbmRvbShtaW4gPSAxLCBtYXggPSAxMDApIHtcbiAgICAgICAgcmV0dXJuIE1hdGguZmxvb3IoTWF0aC5yYW5kb20oKSAqIChtYXggLSBtaW4pICsgbWluKTtcbiAgICB9XG5cbiAgICBmdW5jdGlvbiBnZW5lcmF0ZVJhbmRvbURhdGEobWluID0gMSwgbWF4ID0gMTAwLCBjb3VudCA9IDEwKSB7XG4gICAgICAgIHZhciBhcnIgPSBbXTtcbiAgICAgICAgZm9yICh2YXIgaSA9IDA7IGkgPCBjb3VudDsgaSsrKSB7XG4gICAgICAgICAgICBhcnIucHVzaChnZXRSYW5kb20obWluLCBtYXgpKTtcbiAgICAgICAgfVxuICAgICAgICByZXR1cm4gYXJyO1xuICAgIH1cblxuICAgIC8vIFByaXZhdGUgZnVuY3Rpb25zXG4gICAgdmFyIGV4YW1wbGUxID0gZnVuY3Rpb24gKCkge1xuICAgICAgICAvLyBEZWZpbmUgY2hhcnQgZWxlbWVudFxuICAgICAgICB2YXIgY3R4ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2t0X2NoYXJ0anNfMScpO1xuXG4gICAgICAgIC8vIERlZmluZSBjb2xvcnNcbiAgICAgICAgdmFyIHByaW1hcnlDb2xvciA9IEtUVXRpbC5nZXRDc3NWYXJpYWJsZVZhbHVlKCctLWJzLXByaW1hcnknKTtcbiAgICAgICAgdmFyIGRhbmdlckNvbG9yID0gS1RVdGlsLmdldENzc1ZhcmlhYmxlVmFsdWUoJy0tYnMtZGFuZ2VyJyk7XG4gICAgICAgIHZhciBzdWNjZXNzQ29sb3IgPSBLVFV0aWwuZ2V0Q3NzVmFyaWFibGVWYWx1ZSgnLS1icy1zdWNjZXNzJyk7XG5cbiAgICAgICAgLy8gRGVmaW5lIGZvbnRzXG4gICAgICAgIHZhciBmb250RmFtaWx5ID0gS1RVdGlsLmdldENzc1ZhcmlhYmxlVmFsdWUoJy0tYnMtZm9udC1zYW5zLXNlcmlmJyk7XG5cbiAgICAgICAgLy8gQ2hhcnQgbGFiZWxzXG4gICAgICAgIGNvbnN0IGxhYmVscyA9IFsnSmFudWFyeScsICdGZWJydWFyeScsICdNYXJjaCcsICdBcHJpbCcsICdNYXknLCAnSnVuZScsICdKdWx5JywgJ0F1Z3VzdCcsICdTZXB0ZW1iZXInLCAnT2N0b2JlcicsICdOb3ZlbWJlcicsICdEZWNlbWJlciddO1xuXG4gICAgICAgIC8vIENoYXJ0IGRhdGFcbiAgICAgICAgY29uc3QgZGF0YSA9IHtcbiAgICAgICAgICAgIGxhYmVsczogbGFiZWxzLFxuICAgICAgICAgICAgZGF0YXNldHM6IFtcbiAgICAgICAgICAgICAgICB7XG4gICAgICAgICAgICAgICAgICAgIGxhYmVsOiAnRGF0YXNldCAxJyxcbiAgICAgICAgICAgICAgICAgICAgZGF0YTogZ2VuZXJhdGVSYW5kb21EYXRhKDEsIDEwMCwgMTIpLFxuICAgICAgICAgICAgICAgICAgICBiYWNrZ3JvdW5kQ29sb3I6IHByaW1hcnlDb2xvcixcbiAgICAgICAgICAgICAgICAgICAgc3RhY2s6ICdTdGFjayAwJyxcbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgIHtcbiAgICAgICAgICAgICAgICAgICAgbGFiZWw6ICdEYXRhc2V0IDInLFxuICAgICAgICAgICAgICAgICAgICBkYXRhOiBnZW5lcmF0ZVJhbmRvbURhdGEoMSwgMTAwLCAxMiksXG4gICAgICAgICAgICAgICAgICAgIGJhY2tncm91bmRDb2xvcjogZGFuZ2VyQ29sb3IsXG4gICAgICAgICAgICAgICAgICAgIHN0YWNrOiAnU3RhY2sgMScsXG4gICAgICAgICAgICAgICAgfSxcbiAgICAgICAgICAgICAgICB7XG4gICAgICAgICAgICAgICAgICAgIGxhYmVsOiAnRGF0YXNldCAzJyxcbiAgICAgICAgICAgICAgICAgICAgZGF0YTogZ2VuZXJhdGVSYW5kb21EYXRhKDEsIDEwMCwgMTIpLFxuICAgICAgICAgICAgICAgICAgICBiYWNrZ3JvdW5kQ29sb3I6IHN1Y2Nlc3NDb2xvcixcbiAgICAgICAgICAgICAgICAgICAgc3RhY2s6ICdTdGFjayAyJyxcbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgXVxuICAgICAgICB9O1xuXG4gICAgICAgIC8vIENoYXJ0IGNvbmZpZ1xuICAgICAgICBjb25zdCBjb25maWcgPSB7XG4gICAgICAgICAgICB0eXBlOiAnYmFyJyxcbiAgICAgICAgICAgIGRhdGE6IGRhdGEsXG4gICAgICAgICAgICBvcHRpb25zOiB7XG4gICAgICAgICAgICAgICAgcGx1Z2luczoge1xuICAgICAgICAgICAgICAgICAgICB0aXRsZToge1xuICAgICAgICAgICAgICAgICAgICAgICAgZGlzcGxheTogZmFsc2UsXG4gICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgIHJlc3BvbnNpdmU6IHRydWUsXG4gICAgICAgICAgICAgICAgaW50ZXJhY3Rpb246IHtcbiAgICAgICAgICAgICAgICAgICAgaW50ZXJzZWN0OiBmYWxzZSxcbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgIHNjYWxlczoge1xuICAgICAgICAgICAgICAgICAgICB4OiB7XG4gICAgICAgICAgICAgICAgICAgICAgICBzdGFja2VkOiB0cnVlLFxuICAgICAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgICAgICB5OiB7XG4gICAgICAgICAgICAgICAgICAgICAgICBzdGFja2VkOiB0cnVlXG4gICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9XG4gICAgICAgIH07XG5cbiAgICAgICAgLy8gSW5pdCBDaGFydEpTIC0tIGZvciBtb3JlIGluZm8sIHBsZWFzZSB2aXNpdDogaHR0cHM6Ly93d3cuY2hhcnRqcy5vcmcvZG9jcy9sYXRlc3QvXG4gICAgICAgIHZhciBteUNoYXJ0ID0gbmV3IENoYXJ0KGN0eCwgY29uZmlnKTtcbiAgICB9XG5cbiAgICB2YXIgZXhhbXBsZTIgPSBmdW5jdGlvbiAoKSB7XG4gICAgICAgIC8vIERlZmluZSBjaGFydCBlbGVtZW50XG4gICAgICAgIHZhciBjdHggPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgna3RfY2hhcnRqc18yJyk7XG5cbiAgICAgICAgLy8gRGVmaW5lIGNvbG9yc1xuICAgICAgICB2YXIgcHJpbWFyeUNvbG9yID0gS1RVdGlsLmdldENzc1ZhcmlhYmxlVmFsdWUoJy0tYnMtcHJpbWFyeScpO1xuICAgICAgICB2YXIgZGFuZ2VyQ29sb3IgPSBLVFV0aWwuZ2V0Q3NzVmFyaWFibGVWYWx1ZSgnLS1icy1kYW5nZXInKTtcbiAgICAgICAgdmFyIHN1Y2Nlc3NDb2xvciA9IEtUVXRpbC5nZXRDc3NWYXJpYWJsZVZhbHVlKCctLWJzLXN1Y2Nlc3MnKTtcblxuICAgICAgICAvLyBEZWZpbmUgZm9udHNcbiAgICAgICAgdmFyIGZvbnRGYW1pbHkgPSBLVFV0aWwuZ2V0Q3NzVmFyaWFibGVWYWx1ZSgnLS1icy1mb250LXNhbnMtc2VyaWYnKTtcblxuICAgICAgICAvLyBDaGFydCBsYWJlbHNcbiAgICAgICAgY29uc3QgbGFiZWxzID0gWydKYW51YXJ5JywgJ0ZlYnJ1YXJ5JywgJ01hcmNoJywgJ0FwcmlsJywgJ01heScsICdKdW5lJywgJ0p1bHknXTtcblxuICAgICAgICAvLyBDaGFydCBkYXRhXG4gICAgICAgIGNvbnN0IGRhdGEgPSB7XG4gICAgICAgICAgICBsYWJlbHM6IGxhYmVscyxcbiAgICAgICAgICAgIGRhdGFzZXRzOiBbXG4gICAgICAgICAgICAgICAge1xuICAgICAgICAgICAgICAgICAgICBsYWJlbDogJ0RhdGFzZXQgMScsXG4gICAgICAgICAgICAgICAgICAgIGRhdGE6IGdlbmVyYXRlUmFuZG9tRGF0YSgxLCA1MCwgNyksXG4gICAgICAgICAgICAgICAgICAgIGJvcmRlckNvbG9yOiBwcmltYXJ5Q29sb3IsXG4gICAgICAgICAgICAgICAgICAgIGJhY2tncm91bmRDb2xvcjogJ3RyYW5zcGFyZW50J1xuICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICAgICAge1xuICAgICAgICAgICAgICAgICAgICBsYWJlbDogJ0RhdGFzZXQgMicsXG4gICAgICAgICAgICAgICAgICAgIGRhdGE6IGdlbmVyYXRlUmFuZG9tRGF0YSgxLCA1MCwgNyksXG4gICAgICAgICAgICAgICAgICAgIGJvcmRlckNvbG9yOiBkYW5nZXJDb2xvcixcbiAgICAgICAgICAgICAgICAgICAgYmFja2dyb3VuZENvbG9yOiAndHJhbnNwYXJlbnQnXG4gICAgICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIF1cbiAgICAgICAgfTtcblxuICAgICAgICAvLyBDaGFydCBjb25maWdcbiAgICAgICAgY29uc3QgY29uZmlnID0ge1xuICAgICAgICAgICAgdHlwZTogJ2xpbmUnLFxuICAgICAgICAgICAgZGF0YTogZGF0YSxcbiAgICAgICAgICAgIG9wdGlvbnM6IHtcbiAgICAgICAgICAgICAgICBwbHVnaW5zOiB7XG4gICAgICAgICAgICAgICAgICAgIHRpdGxlOiB7XG4gICAgICAgICAgICAgICAgICAgICAgICBkaXNwbGF5OiBmYWxzZSxcbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICAgICAgcmVzcG9uc2l2ZTogdHJ1ZSxcbiAgICAgICAgICAgIH1cbiAgICAgICAgfTtcblxuICAgICAgICAvLyBJbml0IENoYXJ0SlMgLS0gZm9yIG1vcmUgaW5mbywgcGxlYXNlIHZpc2l0OiBodHRwczovL3d3dy5jaGFydGpzLm9yZy9kb2NzL2xhdGVzdC9cbiAgICAgICAgdmFyIG15Q2hhcnQgPSBuZXcgQ2hhcnQoY3R4LCBjb25maWcpO1xuICAgIH1cblxuICAgIHZhciBleGFtcGxlMyA9IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgLy8gRGVmaW5lIGNoYXJ0IGVsZW1lbnRcbiAgICAgICAgdmFyIGN0eCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdrdF9jaGFydGpzXzMnKTtcblxuICAgICAgICAvLyBEZWZpbmUgY29sb3JzXG4gICAgICAgIHZhciBwcmltYXJ5Q29sb3IgPSBLVFV0aWwuZ2V0Q3NzVmFyaWFibGVWYWx1ZSgnLS1icy1wcmltYXJ5Jyk7XG4gICAgICAgIHZhciBkYW5nZXJDb2xvciA9IEtUVXRpbC5nZXRDc3NWYXJpYWJsZVZhbHVlKCctLWJzLWRhbmdlcicpO1xuICAgICAgICB2YXIgc3VjY2Vzc0NvbG9yID0gS1RVdGlsLmdldENzc1ZhcmlhYmxlVmFsdWUoJy0tYnMtc3VjY2VzcycpO1xuICAgICAgICB2YXIgd2FybmluZ0NvbG9yID0gS1RVdGlsLmdldENzc1ZhcmlhYmxlVmFsdWUoJy0tYnMtd2FybmluZycpO1xuICAgICAgICB2YXIgaW5mb0NvbG9yID0gS1RVdGlsLmdldENzc1ZhcmlhYmxlVmFsdWUoJy0tYnMtaW5mbycpO1xuXG4gICAgICAgIC8vIENoYXJ0IGxhYmVsc1xuICAgICAgICBjb25zdCBsYWJlbHMgPSBbJ0phbnVhcnknLCAnRmVicnVhcnknLCAnTWFyY2gnLCAnQXByaWwnLCAnTWF5J107XG5cbiAgICAgICAgLy8gQ2hhcnQgZGF0YVxuICAgICAgICBjb25zdCBkYXRhID0ge1xuICAgICAgICAgICAgbGFiZWxzOiBsYWJlbHMsXG4gICAgICAgICAgICBkYXRhc2V0czogW1xuICAgICAgICAgICAgICAgIHtcbiAgICAgICAgICAgICAgICAgICAgbGFiZWw6ICdEYXRhc2V0IDEnLFxuICAgICAgICAgICAgICAgICAgICBkYXRhOiBnZW5lcmF0ZVJhbmRvbURhdGEoMSwgMTAwLCA1KSxcbiAgICAgICAgICAgICAgICAgICAgYmFja2dyb3VuZENvbG9yOiBbcHJpbWFyeUNvbG9yLCBkYW5nZXJDb2xvciwgc3VjY2Vzc0NvbG9yLCB3YXJuaW5nQ29sb3IsIGluZm9Db2xvcl1cbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgXVxuICAgICAgICB9O1xuXG4gICAgICAgIC8vIENoYXJ0IGNvbmZpZ1xuICAgICAgICBjb25zdCBjb25maWcgPSB7XG4gICAgICAgICAgICB0eXBlOiAncGllJyxcbiAgICAgICAgICAgIGRhdGE6IGRhdGEsXG4gICAgICAgICAgICBvcHRpb25zOiB7XG4gICAgICAgICAgICAgICAgcGx1Z2luczoge1xuICAgICAgICAgICAgICAgICAgICB0aXRsZToge1xuICAgICAgICAgICAgICAgICAgICAgICAgZGlzcGxheTogZmFsc2UsXG4gICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgIHJlc3BvbnNpdmU6IHRydWUsXG4gICAgICAgICAgICB9XG4gICAgICAgIH07XG5cbiAgICAgICAgLy8gSW5pdCBDaGFydEpTIC0tIGZvciBtb3JlIGluZm8sIHBsZWFzZSB2aXNpdDogaHR0cHM6Ly93d3cuY2hhcnRqcy5vcmcvZG9jcy9sYXRlc3QvXG4gICAgICAgIHZhciBteUNoYXJ0ID0gbmV3IENoYXJ0KGN0eCwgY29uZmlnKTtcbiAgICB9XG5cbiAgICB2YXIgZXhhbXBsZTQgPSBmdW5jdGlvbiAoKSB7XG4gICAgICAgIC8vIERlZmluZSBjaGFydCBlbGVtZW50XG4gICAgICAgIHZhciBjdHggPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgna3RfY2hhcnRqc180Jyk7XG5cbiAgICAgICAgLy8gRGVmaW5lIGNvbG9yc1xuICAgICAgICB2YXIgcHJpbWFyeUNvbG9yID0gS1RVdGlsLmdldENzc1ZhcmlhYmxlVmFsdWUoJy0tYnMtcHJpbWFyeScpO1xuICAgICAgICB2YXIgZGFuZ2VyQ29sb3IgPSBLVFV0aWwuZ2V0Q3NzVmFyaWFibGVWYWx1ZSgnLS1icy1kYW5nZXInKTtcbiAgICAgICAgdmFyIGRhbmdlckxpZ2h0Q29sb3IgPSBLVFV0aWwuZ2V0Q3NzVmFyaWFibGVWYWx1ZSgnLS1icy1saWdodC1kYW5nZXInKTtcblxuICAgICAgICAvLyBEZWZpbmUgZm9udHNcbiAgICAgICAgdmFyIGZvbnRGYW1pbHkgPSBLVFV0aWwuZ2V0Q3NzVmFyaWFibGVWYWx1ZSgnLS1icy1mb250LXNhbnMtc2VyaWYnKTtcblxuICAgICAgICAvLyBDaGFydCBsYWJlbHNcbiAgICAgICAgY29uc3QgbGFiZWxzID0gWydKYW51YXJ5JywgJ0ZlYnJ1YXJ5JywgJ01hcmNoJywgJ0FwcmlsJywgJ01heScsICdKdW5lJywgJ0p1bHknLCAnQXVndXN0JywgJ1NlcHRlbWJlcicsICdPY3RvYmVyJywgJ05vdmVtYmVyJywgJ0RlY2VtYmVyJ107XG5cbiAgICAgICAgLy8gQ2hhcnQgZGF0YVxuICAgICAgICBjb25zdCBkYXRhID0ge1xuICAgICAgICAgICAgbGFiZWxzOiBsYWJlbHMsXG4gICAgICAgICAgICBkYXRhc2V0czogW1xuICAgICAgICAgICAgICAgIHtcbiAgICAgICAgICAgICAgICAgICAgbGFiZWw6ICdEYXRhc2V0IDEnLFxuICAgICAgICAgICAgICAgICAgICBkYXRhOiBnZW5lcmF0ZVJhbmRvbURhdGEoNTAsIDEwMCwgMTIpLFxuICAgICAgICAgICAgICAgICAgICBib3JkZXJDb2xvcjogcHJpbWFyeUNvbG9yLFxuICAgICAgICAgICAgICAgICAgICBiYWNrZ3JvdW5kQ29sb3I6ICd0cmFuc3BhcmVudCcsXG4gICAgICAgICAgICAgICAgICAgIHN0YWNrOiAnY29tYmluZWQnXG4gICAgICAgICAgICAgICAgfSxcbiAgICAgICAgICAgICAgICB7XG4gICAgICAgICAgICAgICAgICAgIGxhYmVsOiAnRGF0YXNldCAyJyxcbiAgICAgICAgICAgICAgICAgICAgZGF0YTogZ2VuZXJhdGVSYW5kb21EYXRhKDEsIDYwLCAxMiksXG4gICAgICAgICAgICAgICAgICAgIGJhY2tncm91bmRDb2xvcjogZGFuZ2VyQ29sb3IsXG4gICAgICAgICAgICAgICAgICAgIGJvcmRlckNvbG9yOiBkYW5nZXJDb2xvcixcbiAgICAgICAgICAgICAgICAgICAgc3RhY2s6ICdjb21iaW5lZCcsXG4gICAgICAgICAgICAgICAgICAgIHR5cGU6ICdiYXInXG4gICAgICAgICAgICAgICAgfSxcbiAgICAgICAgICAgICAgICBcbiAgICAgICAgICAgIF1cbiAgICAgICAgfTtcblxuICAgICAgICAvLyBDaGFydCBjb25maWdcbiAgICAgICAgY29uc3QgY29uZmlnID0ge1xuICAgICAgICAgICAgdHlwZTogJ2xpbmUnLFxuICAgICAgICAgICAgZGF0YTogZGF0YSxcbiAgICAgICAgICAgIG9wdGlvbnM6IHtcbiAgICAgICAgICAgICAgICBwbHVnaW5zOiB7XG4gICAgICAgICAgICAgICAgICAgIHRpdGxlOiB7XG4gICAgICAgICAgICAgICAgICAgICAgICBkaXNwbGF5OiBmYWxzZSxcbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICAgICAgcmVzcG9uc2l2ZTogdHJ1ZSxcbiAgICAgICAgICAgICAgICBpbnRlcmFjdGlvbjoge1xuICAgICAgICAgICAgICAgICAgICBpbnRlcnNlY3Q6IGZhbHNlLFxuICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICAgICAgc2NhbGVzOiB7XG4gICAgICAgICAgICAgICAgICAgIHk6IHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHN0YWNrZWQ6IHRydWVcbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH0sXG4gICAgICAgICAgICBkZWZhdWx0czoge1xuICAgICAgICAgICAgICAgIGZvbnQ6IHtcbiAgICAgICAgICAgICAgICAgICAgZmFtaWx5OiAnaW5oZXJpdCcsXG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfVxuICAgICAgICB9O1xuXG4gICAgICAgIC8vIEluaXQgQ2hhcnRKUyAtLSBmb3IgbW9yZSBpbmZvLCBwbGVhc2UgdmlzaXQ6IGh0dHBzOi8vd3d3LmNoYXJ0anMub3JnL2RvY3MvbGF0ZXN0L1xuICAgICAgICB2YXIgbXlDaGFydCA9IG5ldyBDaGFydChjdHgsIGNvbmZpZyk7XG4gICAgfVxuXG4gICAgdmFyIGV4YW1wbGU1ID0gZnVuY3Rpb24gKCkge1xuICAgICAgICAvLyBEZWZpbmUgY2hhcnQgZWxlbWVudFxuICAgICAgICB2YXIgY3R4ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2t0X2NoYXJ0anNfNScpO1xuXG4gICAgICAgIC8vIERlZmluZSBjb2xvcnNcbiAgICAgICAgdmFyIGluZm9Db2xvciA9IEtUVXRpbC5nZXRDc3NWYXJpYWJsZVZhbHVlKCctLWJzLWluZm8nKTtcbiAgICAgICAgdmFyIGluZm9MaWdodENvbG9yID0gS1RVdGlsLmdldENzc1ZhcmlhYmxlVmFsdWUoJy0tYnMtbGlnaHQtaW5mbycpO1xuICAgICAgICB2YXIgd2FybmluZ0NvbG9yID0gS1RVdGlsLmdldENzc1ZhcmlhYmxlVmFsdWUoJy0tYnMtd2FybmluZycpO1xuICAgICAgICB2YXIgd2FybmluZ0xpZ2h0Q29sb3IgPSBLVFV0aWwuZ2V0Q3NzVmFyaWFibGVWYWx1ZSgnLS1icy1saWdodC13YXJuaW5nJyk7XG4gICAgICAgIHZhciBwcmltYXJ5Q29sb3IgPSBLVFV0aWwuZ2V0Q3NzVmFyaWFibGVWYWx1ZSgnLS1icy1wcmltYXJ5Jyk7XG4gICAgICAgIHZhciBwcmltYXJ5TGlnaHRDb2xvciA9IEtUVXRpbC5nZXRDc3NWYXJpYWJsZVZhbHVlKCctLWJzLWxpZ2h0LXByaW1hcnknKTtcblxuICAgICAgICAvLyBEZWZpbmUgZm9udHNcbiAgICAgICAgdmFyIGZvbnRGYW1pbHkgPSBLVFV0aWwuZ2V0Q3NzVmFyaWFibGVWYWx1ZSgnLS1icy1mb250LXNhbnMtc2VyaWYnKTtcblxuICAgICAgICAvLyBDaGFydCBsYWJlbHNcbiAgICAgICAgY29uc3QgbGFiZWxzID0gWydKYW51YXJ5JywgJ0ZlYnJ1YXJ5JywgJ01hcmNoJywgJ0FwcmlsJywgJ01heScsICdKdW5lJ107XG5cbiAgICAgICAgLy8gQ2hhcnQgZGF0YVxuICAgICAgICBjb25zdCBkYXRhID0ge1xuICAgICAgICAgICAgbGFiZWxzOiBsYWJlbHMsXG4gICAgICAgICAgICBkYXRhc2V0czogW1xuICAgICAgICAgICAgICAgIHtcbiAgICAgICAgICAgICAgICAgICAgbGFiZWw6ICdEYXRhc2V0IDEnLFxuICAgICAgICAgICAgICAgICAgICBkYXRhOiBnZW5lcmF0ZVJhbmRvbURhdGEoMjAsIDgwLCA2KSxcbiAgICAgICAgICAgICAgICAgICAgYm9yZGVyQ29sb3I6IGluZm9Db2xvcixcbiAgICAgICAgICAgICAgICAgICAgYmFja2dyb3VuZENvbG9yOiBpbmZvTGlnaHRDb2xvcixcbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgIHtcbiAgICAgICAgICAgICAgICAgICAgbGFiZWw6ICdEYXRhc2V0IDInLFxuICAgICAgICAgICAgICAgICAgICBkYXRhOiBnZW5lcmF0ZVJhbmRvbURhdGEoMTAsIDYwLCA2KSxcbiAgICAgICAgICAgICAgICAgICAgYmFja2dyb3VuZENvbG9yOiB3YXJuaW5nTGlnaHRDb2xvcixcbiAgICAgICAgICAgICAgICAgICAgYm9yZGVyQ29sb3I6IHdhcm5pbmdDb2xvcixcbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgIHtcbiAgICAgICAgICAgICAgICAgICAgbGFiZWw6ICdEYXRhc2V0IDMnLFxuICAgICAgICAgICAgICAgICAgICBkYXRhOiBnZW5lcmF0ZVJhbmRvbURhdGEoMCwgODAsIDYpLFxuICAgICAgICAgICAgICAgICAgICBiYWNrZ3JvdW5kQ29sb3I6IHByaW1hcnlMaWdodENvbG9yLFxuICAgICAgICAgICAgICAgICAgICBib3JkZXJDb2xvcjogcHJpbWFyeUNvbG9yLFxuICAgICAgICAgICAgICAgIH0sICAgICAgICAgICAgICAgIFxuICAgICAgICAgICAgXVxuICAgICAgICB9O1xuXG4gICAgICAgIC8vIENoYXJ0IGNvbmZpZ1xuICAgICAgICBjb25zdCBjb25maWcgPSB7XG4gICAgICAgICAgICB0eXBlOiAncmFkYXInLFxuICAgICAgICAgICAgZGF0YTogZGF0YSxcbiAgICAgICAgICAgIG9wdGlvbnM6IHtcbiAgICAgICAgICAgICAgICBwbHVnaW5zOiB7XG4gICAgICAgICAgICAgICAgICAgIHRpdGxlOiB7XG4gICAgICAgICAgICAgICAgICAgICAgICBkaXNwbGF5OiBmYWxzZSxcbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICAgICAgcmVzcG9uc2l2ZTogdHJ1ZSxcbiAgICAgICAgICAgIH1cbiAgICAgICAgfTtcblxuICAgICAgICAvLyBJbml0IENoYXJ0SlMgLS0gZm9yIG1vcmUgaW5mbywgcGxlYXNlIHZpc2l0OiBodHRwczovL3d3dy5jaGFydGpzLm9yZy9kb2NzL2xhdGVzdC9cbiAgICAgICAgdmFyIG15Q2hhcnQgPSBuZXcgQ2hhcnQoY3R4LCBjb25maWcpO1xuICAgIH1cblxuICAgIHJldHVybiB7XG4gICAgICAgIC8vIFB1YmxpYyBGdW5jdGlvbnNcbiAgICAgICAgaW5pdDogZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgLy8gR2xvYmFsIGZvbnQgc2V0dGluZ3M6IGh0dHBzOi8vd3d3LmNoYXJ0anMub3JnL2RvY3MvbGF0ZXN0L2dlbmVyYWwvZm9udHMuaHRtbFxuICAgICAgICAgICAgQ2hhcnQuZGVmYXVsdHMuZm9udC5zaXplID0gMTM7XG4gICAgICAgICAgICBDaGFydC5kZWZhdWx0cy5mb250LmZhbWlseSA9IEtUVXRpbC5nZXRDc3NWYXJpYWJsZVZhbHVlKCctLWJzLWZvbnQtc2Fucy1zZXJpZicpO1xuXG4gICAgICAgICAgICBleGFtcGxlMSgpO1xuICAgICAgICAgICAgZXhhbXBsZTIoKTtcbiAgICAgICAgICAgIGV4YW1wbGUzKCk7XG4gICAgICAgICAgICBleGFtcGxlNCgpO1xuICAgICAgICAgICAgZXhhbXBsZTUoKTtcbiAgICAgICAgfVxuICAgIH07XG59KCk7XG5cbi8vIE9uIGRvY3VtZW50IHJlYWR5XG5LVFV0aWwub25ET01Db250ZW50TG9hZGVkKGZ1bmN0aW9uICgpIHtcbiAgICBLVEdlbmVyYWxDaGFydEpTLmluaXQoKTtcbn0pO1xuIl0sIm5hbWVzIjpbIktUR2VuZXJhbENoYXJ0SlMiLCJnZXRSYW5kb20iLCJtaW4iLCJtYXgiLCJNYXRoIiwiZmxvb3IiLCJyYW5kb20iLCJnZW5lcmF0ZVJhbmRvbURhdGEiLCJjb3VudCIsImFyciIsImkiLCJwdXNoIiwiZXhhbXBsZTEiLCJjdHgiLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwicHJpbWFyeUNvbG9yIiwiS1RVdGlsIiwiZ2V0Q3NzVmFyaWFibGVWYWx1ZSIsImRhbmdlckNvbG9yIiwic3VjY2Vzc0NvbG9yIiwiZm9udEZhbWlseSIsImxhYmVscyIsImRhdGEiLCJkYXRhc2V0cyIsImxhYmVsIiwiYmFja2dyb3VuZENvbG9yIiwic3RhY2siLCJjb25maWciLCJ0eXBlIiwib3B0aW9ucyIsInBsdWdpbnMiLCJ0aXRsZSIsImRpc3BsYXkiLCJyZXNwb25zaXZlIiwiaW50ZXJhY3Rpb24iLCJpbnRlcnNlY3QiLCJzY2FsZXMiLCJ4Iiwic3RhY2tlZCIsInkiLCJteUNoYXJ0IiwiQ2hhcnQiLCJleGFtcGxlMiIsImJvcmRlckNvbG9yIiwiZXhhbXBsZTMiLCJ3YXJuaW5nQ29sb3IiLCJpbmZvQ29sb3IiLCJleGFtcGxlNCIsImRhbmdlckxpZ2h0Q29sb3IiLCJkZWZhdWx0cyIsImZvbnQiLCJmYW1pbHkiLCJleGFtcGxlNSIsImluZm9MaWdodENvbG9yIiwid2FybmluZ0xpZ2h0Q29sb3IiLCJwcmltYXJ5TGlnaHRDb2xvciIsImluaXQiLCJzaXplIiwib25ET01Db250ZW50TG9hZGVkIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/src/js/custom/documentation/charts/chartjs.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/src/js/custom/documentation/charts/chartjs.js"]();
/******/ 	
/******/ })()
;