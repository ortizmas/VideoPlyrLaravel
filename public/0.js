(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[0],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/videos/Plyr.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/views/videos/Plyr.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//import { GET_VIDEO } from "../utils/endpoint.js";
var axios = __webpack_require__(/*! axios */ "./node_modules/axios/index.js");

/* harmony default export */ __webpack_exports__["default"] = ({
  name: "Vimeo",
  props: ['id', 'code'],
  data: function data() {
    return {
      videoUrl: "",
      videoTitle: "",
      videoVimeoId: ""
    };
  },
  computed: {
    player: function player() {
      return this.$refs.plyr.player;
    }
  },
  methods: {
    onVideoPause: function onVideoPause() {
      console.log("Video is Paused");
    }
  },
  mounted: function mounted() {
    var _this = this;

    this.video_id = this.$route.query.video_id;
    axios.get('/api/video/' + this.id).then(function (response) {
      _this.videoUrl = "https://www.youtube.com/embed/" + response.data.code + "?loop=false&byline=false&portrait=false&title=false&speed=true&transparent=0&gesture=media";
      _this.videoTitle = response.data.title;
      _this.videoVimeoId = response.data.code; //this.videoVimeoId = response.data.video_url.split("/")[4];

      console.log(_this.video_id);
    })["catch"](function (e) {
      console.log(e);
    });
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/videos/Plyr.vue?vue&type=template&id=3d21705d&":
/*!*********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/views/videos/Plyr.vue?vue&type=template&id=3d21705d& ***!
  \*********************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    { staticStyle: { "max-height": "560px" } },
    [
      _c(
        "h1",
        {
          staticClass: "title is-size-3",
          staticStyle: { "text-align": "center" }
        },
        [_vm._v(_vm._s(_vm.videoTitle))]
      ),
      _vm._v(" "),
      _c("vue-plyr", { ref: "plyr" }, [
        _c("div", { staticClass: "plyr__video-embed" }, [
          _c("iframe", {
            attrs: {
              src: _vm.videoUrl,
              allowfullscreen: "",
              allowtransparency: "",
              allow: "autoplay",
              height: "100%",
              width: "100%"
            }
          })
        ])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "vimeoPlayer" })
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./resources/js/views/videos/Plyr.vue":
/*!********************************************!*\
  !*** ./resources/js/views/videos/Plyr.vue ***!
  \********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Plyr_vue_vue_type_template_id_3d21705d___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Plyr.vue?vue&type=template&id=3d21705d& */ "./resources/js/views/videos/Plyr.vue?vue&type=template&id=3d21705d&");
/* harmony import */ var _Plyr_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Plyr.vue?vue&type=script&lang=js& */ "./resources/js/views/videos/Plyr.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Plyr_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Plyr_vue_vue_type_template_id_3d21705d___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Plyr_vue_vue_type_template_id_3d21705d___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/views/videos/Plyr.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/views/videos/Plyr.vue?vue&type=script&lang=js&":
/*!*********************************************************************!*\
  !*** ./resources/js/views/videos/Plyr.vue?vue&type=script&lang=js& ***!
  \*********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Plyr_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./Plyr.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/videos/Plyr.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Plyr_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/views/videos/Plyr.vue?vue&type=template&id=3d21705d&":
/*!***************************************************************************!*\
  !*** ./resources/js/views/videos/Plyr.vue?vue&type=template&id=3d21705d& ***!
  \***************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Plyr_vue_vue_type_template_id_3d21705d___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./Plyr.vue?vue&type=template&id=3d21705d& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/videos/Plyr.vue?vue&type=template&id=3d21705d&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Plyr_vue_vue_type_template_id_3d21705d___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Plyr_vue_vue_type_template_id_3d21705d___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);